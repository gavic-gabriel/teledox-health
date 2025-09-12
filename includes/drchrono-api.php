<?php
/**
 * DrChrono API Wrapper Class
 * Handles all API requests to DrChrono with automatic token management
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class TeleDox_DrChrono_API {
    
    private $client_id = 'dhkPSo9D7KKwzsUhmu2UY1Qtvwu5pQwLx7F4vNzZ';
    private $client_secret = 'sGtvSBdcj2gL5AuFLKnFqbf3C6Ugj6uCcQGS2ohEJ1GqlmDUUuuI6ObcHVYYTZtVM8z8ixI1bRMBTZ4WD551uKwpLwfhQfADXl9POxbgqkUwT3qD5mpH8oBdPGV4MTQF';
    private $api_base_url = 'https://app.drchrono.com';
    private $token_url = 'https://drchrono.com/o/token/';
    private $user_id;
    private $username;
    private $doctor_id;
    private $connection_data;
    
    public function __construct() {
        $this->load_connection_data();
        $this->load_drchrono_user_data();
    }
    
    /**
     * Load connection data (access token, etc.) with enhanced security checks
     */
    private function load_connection_data() {
        // Check if user has permission to access API data
        if (!$this->has_api_access_permission()) {
            $this->log_error('User does not have permission to access DrChrono API data');
            return;
        }
        
        // Search for any valid connection data
        global $wpdb;
        $results = $wpdb->get_results("SELECT user_id, meta_value FROM {$wpdb->usermeta} WHERE meta_key = 'teledox_drchrono_connection'");
        
        foreach ($results as $result) {
            $connection_data = maybe_unserialize($result->meta_value);
            if (!empty($connection_data) && isset($connection_data['access_token'])) {
                // Check if connection data is expired
                if ($this->is_connection_expired($connection_data)) {
                    $this->log_error('DrChrono connection data has expired, cleaning up');
                    $this->cleanup_expired_connection($result->user_id);
                    continue;
                }
                
                $this->connection_data = $connection_data;
                $this->user_id = $result->user_id;
                $this->log_success('DrChrono connection data loaded successfully');
                break;
            }
        }
    }
    
    /**
     * Load stored DrChrono user data (username, id, doctor, etc.)
     */
    private function load_drchrono_user_data() {
        $this->user_id = get_option('teledox_drchrono_user_id', null);
        $this->username = get_option('teledox_drchrono_username', null);
        $this->doctor_id = get_option('teledox_drchrono_doctor_id', null);
    }
    
    /**
     * Store DrChrono user data from API response
     */
    private function store_drchrono_user_data($user_data) {
        $this->user_id = $user_data['id'];
        $this->username = $user_data['username'];
        $this->doctor_id = $user_data['doctor'] ?? null;
        
        // Store in options for reuse
        update_option('teledox_drchrono_user_id', $this->user_id);
        update_option('teledox_drchrono_username', $this->username);
        update_option('teledox_drchrono_doctor_id', $this->doctor_id);
    }
    
    /**
     * Check if user is connected to DrChrono
     */
    public function is_connected() {
        return !empty($this->connection_data) && isset($this->connection_data['access_token']);
    }
    
    /**
     * Get connection status information
     */
    public function get_connection_info() {
        if (!$this->is_connected()) {
            return false;
        }
        
        return array(
            'drchrono_username' => $this->connection_data['drchrono_username'],
            'drchrono_email' => $this->connection_data['drchrono_email'],
            'drchrono_first_name' => $this->connection_data['drchrono_first_name'],
            'drchrono_last_name' => $this->connection_data['drchrono_last_name'],
            'connected_at' => $this->connection_data['connected_at'],
            'last_used' => $this->connection_data['last_used'],
            'expires_at' => $this->connection_data['expires_at'],
            'is_expired' => $this->is_token_expired(),
        );
    }
    
    /**
     * Check if access token is expired
     */
    private function is_token_expired() {
        if (!isset($this->connection_data['expires_at'])) {
            return true;
        }
        
        // Add 5 minute buffer before expiration
        return time() >= ($this->connection_data['expires_at'] - 300);
    }
    
    /**
     * Get valid access token (refresh if needed)
     */
    private function get_valid_access_token() {
        if (!$this->is_connected()) {
            return false;
        }
        
        if ($this->is_token_expired()) {
            if (!$this->refresh_access_token()) {
                return false;
            }
        }
        
        return $this->decrypt_data($this->connection_data['access_token']);
    }
    
    /**
     * Refresh access token using refresh token
     */
    private function refresh_access_token() {
        if (!isset($this->connection_data['refresh_token'])) {
            $this->log_error('No refresh token available');
            return false;
        }
        
        $refresh_token = $this->decrypt_data($this->connection_data['refresh_token']);
        
        $data = array(
            'refresh_token' => $refresh_token,
            'grant_type' => 'refresh_token',
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret,
        );
        
        $response = wp_remote_post($this->token_url, array(
            'body' => $data,
            'timeout' => 30,
            'headers' => array(
                'Content-Type' => 'application/x-www-form-urlencoded',
            ),
        ));
        
        if (is_wp_error($response)) {
            $this->log_error('Token refresh failed: ' . $response->get_error_message());
            return false;
        }
        
        $body = wp_remote_retrieve_body($response);
        $tokens = json_decode($body, true);
        
        if (!$tokens || isset($tokens['error'])) {
            $this->log_error('Token refresh response error: ' . $body);
            return false;
        }
        
        // Update connection data with new tokens
        $this->connection_data['access_token'] = $this->encrypt_data($tokens['access_token']);
        $this->connection_data['expires_at'] = time() + $tokens['expires_in'];
        $this->connection_data['last_used'] = time();
        
        // Update refresh token if provided
        if (isset($tokens['refresh_token'])) {
            $this->connection_data['refresh_token'] = $this->encrypt_data($tokens['refresh_token']);
        }
        
        // Add timestamp and save updated connection data
        $this->connection_data = $this->add_connection_timestamp($this->connection_data);
        update_user_meta($this->user_id, 'teledox_drchrono_connection', $this->connection_data);
        update_option('teledox_drchrono_connection_' . $this->user_id, $this->connection_data);
        
        // Audit log the token refresh
        $this->audit_log('token_refresh', array(
            'user_id' => $this->user_id,
            'timestamp' => time()
        ));
        
        $this->log_success('Access token refreshed successfully');
        return true;
    }
    
    /**
     * Make API request to DrChrono
     */
    public function make_request($endpoint, $method = 'GET', $data = null, $params = array()) {
        $access_token = $this->get_valid_access_token();
        
        if (!$access_token) {
            return new WP_Error('no_token', 'No valid access token available');
        }
        
        $url = $this->api_base_url . $endpoint;
        
        // Add query parameters
        if (!empty($params)) {
            $url .= '?' . http_build_query($params);
        }
        
        $args = array(
            'method' => $method,
            'headers' => array(
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json',
            ),
            'timeout' => 30,
        );
        
        // Add body for POST/PUT/PATCH requests
        if (in_array($method, array('POST', 'PUT', 'PATCH')) && $data) {
            $args['body'] = json_encode($data);
        }
        
        $response = wp_remote_request($url, $args);
        
        if (is_wp_error($response)) {
            $this->log_error('API request failed: ' . $response->get_error_message());
            return $response;
        }
        
        $response_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        
        // Update last used timestamp
        $this->connection_data['last_used'] = time();
        update_user_meta($this->user_id, 'teledox_drchrono_connection', $this->connection_data);
        
        // Audit log API request (only for sensitive operations)
        if (in_array($method, ['POST', 'PUT', 'DELETE', 'PATCH'])) {
            $this->audit_log('api_request', array(
                'endpoint' => $endpoint,
                'method' => $method,
                'user_id' => $this->user_id,
                'timestamp' => time()
            ));
        }
        
        // Handle rate limiting
        if ($response_code === 429) {
            $this->log_error('Rate limit exceeded for DrChrono API');
            return new WP_Error('rate_limit', 'Rate limit exceeded');
        }
        
        // Handle authentication errors
        if ($response_code === 401 || $response_code === 403) {
            $this->log_error('Authentication failed for DrChrono API');
            return new WP_Error('auth_failed', 'Authentication failed');
        }
        
        // Handle different response types
        if ($response_code === 204) {
            // No Content response (typically for DELETE requests)
            return array(
                'data' => null,
                'response_code' => $response_code,
                'headers' => wp_remote_retrieve_headers($response),
            );
        } elseif (empty($body)) {
            // Empty body response
            return array(
                'data' => null,
                'response_code' => $response_code,
                'headers' => wp_remote_retrieve_headers($response),
            );
        } else {
            // Try to parse JSON for other responses
            $decoded_body = json_decode($body, true);
            
            if (json_last_error() !== JSON_ERROR_NONE) {
                $this->log_error('Invalid JSON response from DrChrono API: ' . $body);
                return new WP_Error('invalid_json', 'Invalid JSON response');
            }
            
            return array(
                'data' => $decoded_body,
                'response_code' => $response_code,
                'headers' => wp_remote_retrieve_headers($response),
            );
        }
    }
    
    /**
     * Get current user information
     */
    public function get_current_user() {
        $response = $this->make_request('/api/users/current');
        
        // Store user data after successful API call for future use
        if (!is_wp_error($response) && isset($response['data'])) {
            $this->store_drchrono_user_data($response['data']);
        }
        
        return $response;
    }
    
    /**
     * Get patients (paginated)
     */
    public function get_patients($params = array()) {
        return $this->make_request('/api/patients', 'GET', null, $params);
    }
    
    /**
     * Get appointments (paginated)
     */
    public function get_appointments($params = array()) {
        return $this->make_request('/api/appointments', 'GET', null, $params);
    }
    
    /**
     * Get offices
     */
    public function get_offices($params = array()) {
        return $this->make_request('/api/offices', 'GET', null, $params);
    }
    
    /**
     * Get doctors
     */
    public function get_doctors($params = array()) {
        return $this->make_request('/api/doctors', 'GET', null, $params);
    }
    
    /**
     * Get stored DrChrono user ID
     */
    public function get_drchrono_user_id() {
        return $this->user_id;
    }
    
    /**
     * Get stored DrChrono username
     */
    public function get_drchrono_username() {
        return $this->username;
    }
    
    /**
     * Get stored DrChrono doctor ID
     */
    public function get_drchrono_doctor_id() {
        return $this->doctor_id;
    }
    
    /**
     * Disconnect from DrChrono
     */
    public function disconnect() {
        // Clear connection data
        global $wpdb;
        $wpdb->delete($wpdb->usermeta, array('meta_key' => 'teledox_drchrono_connection'));
        
        // Clear stored user data
        delete_option('teledox_drchrono_user_id');
        delete_option('teledox_drchrono_username');
        delete_option('teledox_drchrono_doctor_id');
        
        $disconnected_user_id = $this->user_id;
        
        $this->connection_data = null;
        $this->user_id = null;
        $this->username = null;
        $this->doctor_id = null;
        
        // Audit log the disconnection
        $this->audit_log('connection_disconnected', array(
            'user_id' => $disconnected_user_id,
            'timestamp' => time()
        ));
        
        $this->log_success('DrChrono connection disconnected');
        
        return true;
    }
    
    /**
     * Get audit logs for security monitoring (admin only)
     */
    public function get_audit_logs($limit = 100) {
        if (!current_user_can('manage_options')) {
            return new WP_Error('insufficient_permissions', 'Only administrators can access audit logs');
        }
        
        $audit_logs = get_option('teledox_drchrono_audit_logs', array());
        return array_slice($audit_logs, -$limit);
    }
    
    /**
     * Clear old audit logs (admin only)
     */
    public function clear_old_audit_logs($keep_days = 90) {
        if (!current_user_can('manage_options')) {
            return new WP_Error('insufficient_permissions', 'Only administrators can clear audit logs');
        }
        
        $audit_logs = get_option('teledox_drchrono_audit_logs', array());
        $cutoff_time = time() - ($keep_days * DAY_IN_SECONDS);
        
        $filtered_logs = array_filter($audit_logs, function($log) use ($cutoff_time) {
            return $log['timestamp'] > $cutoff_time;
        });
        
        update_option('teledox_drchrono_audit_logs', array_values($filtered_logs));
        
        $this->log_success("Cleared audit logs older than {$keep_days} days");
        return true;
    }
    
    /**
     * Enhanced encryption for sensitive data with random IV and custom key derivation
     */
    private function encrypt_data($data) {
        // Create a strong key using multiple WordPress salts and constants
        $key_material = wp_salt('auth') . AUTH_KEY . wp_salt('secure_auth') . SECURE_AUTH_KEY;
        $key = hash('sha256', $key_material, true); // Generate 32-byte key
        
        // Generate random IV for each encryption
        $iv = random_bytes(16);
        
        // Encrypt the data
        $encrypted = openssl_encrypt($data, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
        
        if ($encrypted === false) {
            $this->log_error('Encryption failed: ' . openssl_error_string());
            return false;
        }
        
        // Prepend IV to encrypted data and encode
        return base64_encode($iv . $encrypted);
    }
    
    /**
     * Enhanced decryption for sensitive data with proper IV handling
     */
    private function decrypt_data($encrypted_data) {
        // Create the same key as encryption
        $key_material = wp_salt('auth') . AUTH_KEY . wp_salt('secure_auth') . SECURE_AUTH_KEY;
        $key = hash('sha256', $key_material, true); // Generate 32-byte key
        
        // Decode and extract IV
        $data = base64_decode($encrypted_data);
        if ($data === false || strlen($data) < 16) {
            $this->log_error('Invalid encrypted data format');
            return false;
        }
        
        $iv = substr($data, 0, 16);
        $encrypted = substr($data, 16);
        
        // Decrypt the data
        $decrypted = openssl_decrypt($encrypted, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
        
        if ($decrypted === false) {
            $this->log_error('Decryption failed: ' . openssl_error_string());
            return false;
        }
        
        return $decrypted;
    }
    
    /**
     * Check if current user has permission to access API data
     */
    private function has_api_access_permission() {
        // Allow access for administrators and users with manage_options capability
        return current_user_can('manage_options') || is_admin();
    }
    
    /**
     * Check if connection data has expired
     */
    private function is_connection_expired($connection_data) {
        // Default expiration: 30 days
        $expiry_period = apply_filters('teledox_drchrono_connection_expiry', 30 * DAY_IN_SECONDS);
        
        if (!isset($connection_data['created_at'])) {
            // If no creation timestamp, assume it's old and should be refreshed
            return true;
        }
        
        $created_at = intval($connection_data['created_at']);
        $expiry_time = $created_at + $expiry_period;
        
        return time() > $expiry_time;
    }
    
    /**
     * Clean up expired connection data
     */
    private function cleanup_expired_connection($user_id) {
        global $wpdb;
        
        // Remove from user meta
        delete_user_meta($user_id, 'teledox_drchrono_connection');
        
        // Remove from options
        delete_option('teledox_drchrono_connection_' . $user_id);
        
        // Log the cleanup action
        $this->log_success("Cleaned up expired DrChrono connection for user ID: {$user_id}");
        
        // Audit log the cleanup
        $this->audit_log('connection_cleanup', array(
            'user_id' => $user_id,
            'reason' => 'expired_connection',
            'timestamp' => time()
        ));
    }
    
    /**
     * Add timestamp to connection data when storing
     */
    private function add_connection_timestamp($connection_data) {
        $connection_data['created_at'] = time();
        $connection_data['updated_at'] = time();
        return $connection_data;
    }
    
    /**
     * Audit logging for security monitoring
     */
    private function audit_log($action, $data = array()) {
        $audit_data = array(
            'action' => $action,
            'timestamp' => time(),
            'user_id' => get_current_user_id(),
            'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
            'data' => $data
        );
        
        // Store audit log (could be in separate table or file)
        $audit_logs = get_option('teledox_drchrono_audit_logs', array());
        $audit_logs[] = $audit_data;
        
        // Keep only last 1000 audit entries
        if (count($audit_logs) > 1000) {
            $audit_logs = array_slice($audit_logs, -1000);
        }
        
        update_option('teledox_drchrono_audit_logs', $audit_logs);
        
        // Also log to external logger
        if (function_exists('msg_teledox_health')) {
            msg_teledox_health("AUDIT: DrChrono API {$action} - " . json_encode($data), 'drchrono_audit');
        }
    }
    
    /**
     * Log success messages
     */
    private function log_success($message) {
        if (function_exists('msg_teledox_health')) {
            msg_teledox_health('SUCCESS', 'DrChrono API', $message);
        } else {
            error_log('TeleDox DrChrono API Success: ' . $message);
        }
    }
    
    /**
     * Log error messages
     */
    private function log_error($message) {
        if (function_exists('msg_teledox_health')) {
            msg_teledox_health('ERROR', 'DrChrono API', $message);
        } else {
            error_log('TeleDox DrChrono API Error: ' . $message);
        }
    }
}
