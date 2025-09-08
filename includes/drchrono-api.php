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
    private $connection_data;
    
    public function __construct($user_id = null) {
        $this->user_id = $user_id ?: get_current_user_id();
        $this->load_connection_data();
    }
    
    /**
     * Load connection data for the current user
     */
    private function load_connection_data() {
        $this->connection_data = get_user_meta($this->user_id, 'teledox_drchrono_connection', true);
        
        if (!$this->connection_data) {
            $this->connection_data = get_option('teledox_drchrono_connection_' . $this->user_id, false);
        }
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
        
        // Save updated connection data
        update_user_meta($this->user_id, 'teledox_drchrono_connection', $this->connection_data);
        update_option('teledox_drchrono_connection_' . $this->user_id, $this->connection_data);
        
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
    
    /**
     * Get current user information
     */
    public function get_current_user() {
        return $this->make_request('/api/users/current');
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
     * Disconnect from DrChrono
     */
    public function disconnect() {
        delete_user_meta($this->user_id, 'teledox_drchrono_connection');
        delete_option('teledox_drchrono_connection_' . $this->user_id);
        
        $this->connection_data = null;
        $this->log_success('DrChrono connection disconnected');
        
        return true;
    }
    
    /**
     * Simple encryption for sensitive data
     */
    private function encrypt_data($data) {
        $key = wp_salt('auth');
        $iv = wp_salt('secure_auth');
        return base64_encode(openssl_encrypt($data, 'AES-256-CBC', $key, 0, substr($iv, 0, 16)));
    }
    
    /**
     * Simple decryption for sensitive data
     */
    private function decrypt_data($encrypted_data) {
        $key = wp_salt('auth');
        $iv = wp_salt('secure_auth');
        return openssl_decrypt(base64_decode($encrypted_data), 'AES-256-CBC', $key, 0, substr($iv, 0, 16));
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
