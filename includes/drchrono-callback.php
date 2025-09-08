<?php
/**
 * DrChrono OAuth2 Callback Handler
 * Handles the OAuth2 authorization callback from DrChrono
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Include WordPress functions
require_once(ABSPATH . 'wp-config.php');

class TeleDox_DrChrono_Callback {
    
    private $client_id = 'dhkPSo9D7KKwzsUhmu2UY1Qtvwu5pQwLx7F4vNzZ';
    private $client_secret = 'sGtvSBdcj2gL5AuFLKnFqbf3C6Ugj6uCcQGS2ohEJ1GqlmDUUuuI6ObcHVYYTZtVM8z8ixI1bRMBTZ4WD551uKwpLwfhQfADXl9POxbgqkUwT3qD5mpH8oBdPGV4MTQF';
    private $redirect_uri;
    private $token_url = 'https://drchrono.com/o/token/';
    private $api_base_url = 'https://app.drchrono.com';
    
    public function __construct() {
        $this->redirect_uri = home_url('/wp-content/plugins/teledox-health/includes/drchrono-callback.php');
        $this->handle_callback();
    }
    
    /**
     * Handle the OAuth2 callback
     */
    public function handle_callback() {
        // Check if this is a callback request
        if (!isset($_GET['code']) && !isset($_GET['error'])) {
            wp_die('Invalid callback request');
        }
        
        // Handle authorization errors
        if (isset($_GET['error'])) {
            $error = sanitize_text_field($_GET['error']);
            $this->log_error('DrChrono OAuth Error: ' . $error);
            wp_redirect(admin_url('admin.php?page=teledox-health&drchrono_error=' . urlencode($error)));
            exit;
        }
        
        // Get authorization code
        $code = sanitize_text_field($_GET['code']);
        
        // Exchange code for tokens
        $tokens = $this->exchange_code_for_tokens($code);
        
        if (!$tokens) {
            wp_redirect(admin_url('admin.php?page=teledox-health&drchrono_error=token_exchange_failed'));
            exit;
        }
        
        // Get current user info from DrChrono
        $user_info = $this->get_current_user($tokens['access_token']);
        
        if (!$user_info) {
            wp_redirect(admin_url('admin.php?page=teledox-health&drchrono_error=user_info_failed'));
            exit;
        }
        
        // Store tokens and user info
        $this->store_connection_data($tokens, $user_info);
        
        // Redirect back to admin with success
        wp_redirect(admin_url('admin.php?page=teledox-health&drchrono_connected=1'));
        exit;
    }
    
    /**
     * Exchange authorization code for access and refresh tokens
     */
    private function exchange_code_for_tokens($code) {
        $data = array(
            'code' => $code,
            'grant_type' => 'authorization_code',
            'redirect_uri' => $this->redirect_uri,
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
            $this->log_error('Token exchange failed: ' . $response->get_error_message());
            return false;
        }
        
        $body = wp_remote_retrieve_body($response);
        $tokens = json_decode($body, true);
        
        if (!$tokens || isset($tokens['error'])) {
            $this->log_error('Token exchange response error: ' . $body);
            return false;
        }
        
        return $tokens;
    }
    
    /**
     * Get current user information from DrChrono
     */
    private function get_current_user($access_token) {
        $response = wp_remote_get($this->api_base_url . '/api/users/current', array(
            'headers' => array(
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json',
            ),
            'timeout' => 30,
        ));
        
        if (is_wp_error($response)) {
            $this->log_error('Get current user failed: ' . $response->get_error_message());
            return false;
        }
        
        $body = wp_remote_retrieve_body($response);
        $user_info = json_decode($body, true);
        
        if (!$user_info || isset($user_info['error'])) {
            $this->log_error('Get current user response error: ' . $body);
            return false;
        }
        
        return $user_info;
    }
    
    /**
     * Store connection data in WordPress options
     */
    private function store_connection_data($tokens, $user_info) {
        $current_user_id = get_current_user_id();
        
        // Calculate expiration time
        $expires_at = time() + $tokens['expires_in'];
        
        // Encrypt sensitive data
        $encrypted_access_token = $this->encrypt_data($tokens['access_token']);
        $encrypted_refresh_token = $this->encrypt_data($tokens['refresh_token']);
        
        $connection_data = array(
            'user_id' => $current_user_id,
            'drchrono_user_id' => $user_info['id'],
            'drchrono_username' => $user_info['username'],
            'drchrono_email' => $user_info['email'],
            'drchrono_first_name' => $user_info['first_name'],
            'drchrono_last_name' => $user_info['last_name'],
            'access_token' => $encrypted_access_token,
            'refresh_token' => $encrypted_refresh_token,
            'expires_at' => $expires_at,
            'connected_at' => time(),
            'last_used' => time(),
        );
        
        // Store in user meta
        update_user_meta($current_user_id, 'teledox_drchrono_connection', $connection_data);
        
        // Also store in options for admin access
        update_option('teledox_drchrono_connection_' . $current_user_id, $connection_data);
        
        $this->log_success('DrChrono connection established for user: ' . $user_info['username']);
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
     * Log success messages
     */
    private function log_success($message) {
        if (function_exists('msg_teledox_health')) {
            msg_teledox_health('SUCCESS', 'DrChrono', $message);
        } else {
            error_log('TeleDox DrChrono Success: ' . $message);
        }
    }
    
    /**
     * Log error messages
     */
    private function log_error($message) {
        if (function_exists('msg_teledox_health')) {
            msg_teledox_health('ERROR', 'DrChrono', $message);
        } else {
            error_log('TeleDox DrChrono Error: ' . $message);
        }
    }
}

// Initialize the callback handler
new TeleDox_DrChrono_Callback();
