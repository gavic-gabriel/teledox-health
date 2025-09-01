<?php
/**
 * API Connection System for TeleDox Health
 * Handles external API communication with staging/production support
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Immediate debugging when file is loaded
msg_teledox_health('API connection file loaded', 'api');

/**
 * Main API Connection Class
 */
class TeleDox_API_Connection {
    
    private $api_url;
    private $api_key;
    private $staging_mode;
    private $debug_mode;
    private $timeout = 30;
    private $max_retries = 3;
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->staging_mode = teledox_get_setting('staging_mode');
        $this->debug_mode = teledox_get_setting('debug_mode');
        
        // Set API credentials based on mode
        if ($this->staging_mode) {
            $this->api_url = defined('TELEDOX_API_URL') ? TELEDOX_API_URL : '';
            $this->api_key = defined('TELEDOX_API_KEY') ? TELEDOX_API_KEY : '';
            msg_teledox_health('API initialized in STAGING mode', 'api');
        } else {
            $this->api_url = defined('TELEDOX_API_URL') ? TELEDOX_API_URL : '';
            $this->api_key = defined('TELEDOX_API_KEY') ? TELEDOX_API_KEY : '';
            msg_teledox_health('API initialized in PRODUCTION mode', 'api');
        }
        
        // Validate API configuration
        $this->validate_configuration();
    }
    
    /**
     * Validate API configuration
     */
    private function validate_configuration() {
        if (empty($this->api_url) || empty($this->api_key)) {
            msg_teledox_health('API configuration incomplete - URL or Key missing', 'error');
            return false;
        }
        
        if (!filter_var($this->api_url, FILTER_VALIDATE_URL)) {
            msg_teledox_health('Invalid API URL format: ' . $this->api_url, 'error');
            return false;
        }
        
        msg_teledox_health('API configuration validated successfully', 'api');
        return true;
    }
    
    /**
     * Get API configuration status
     */
    public function get_config_status() {
        return array(
            'staging_mode' => $this->staging_mode,
            'debug_mode' => $this->debug_mode,
            'api_url' => $this->api_url,
            'api_key_configured' => !empty($this->api_key),
            'configuration_valid' => $this->validate_configuration()
        );
    }
    
    /**
     * Make API request
     */
    public function make_request($endpoint, $method = 'GET', $data = null, $headers = array()) {
        $start_time = microtime(true);
        
        // Build full URL
        $url = rtrim($this->api_url, '/') . '/' . ltrim($endpoint, '/');
        
        // Prepare request
        $request_args = $this->prepare_request($method, $data, $headers);
        
        msg_teledox_health("Making {$method} request to: {$url}", 'api');
        
        if ($this->debug_mode) {
            msg_teledox_health("Request data: " . json_encode($data), 'api');
        }
        
        // Make request with retry logic
        $response = $this->execute_request_with_retry($url, $request_args);
        
        // Log response
        $execution_time = microtime(true) - $start_time;
        $this->log_request($url, $method, $data, $response, $execution_time);
        
        return $response;
    }
    
    /**
     * Prepare request arguments
     */
    private function prepare_request($method, $data, $custom_headers) {
        $default_headers = array(
            'x-api-key' => $this->api_key,
            'User-Agent' => 'TeleDox-Health-WordPress/' . TELEDOX_CSS_VERSION,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        );
        
        $headers = array_merge($default_headers, $custom_headers);
        
        $request_args = array(
            'method' => $method,
            'timeout' => $this->timeout,
            'headers' => $headers,
            'sslverify' => true
        );
        
        // Add data for POST/PUT requests
        if (in_array($method, array('POST', 'PUT', 'PATCH')) && $data !== null) {
            $request_args['body'] = is_array($data) ? json_encode($data) : $data;
        }
        
        return $request_args;
    }
    
    /**
     * Execute request with retry logic
     */
    private function execute_request_with_retry($url, $request_args) {
        $attempt = 1;
        
        while ($attempt <= $this->max_retries) {
            msg_teledox_health("API request attempt {$attempt} of {$this->max_retries}", 'api');
            
            $response = wp_remote_request($url, $request_args);
            
            if (!is_wp_error($response)) {
                $status_code = wp_remote_retrieve_response_code($response);
                
                if ($status_code >= 200 && $status_code < 300) {
                    msg_teledox_health("API request successful on attempt {$attempt}", 'api');
                    return $this->process_successful_response($response);
                } elseif ($status_code >= 400 && $status_code < 500) {
                    // Client error - don't retry
                    msg_teledox_health("API request failed with client error {$status_code} on attempt {$attempt}", 'api');
                    return $this->process_error_response($response, $attempt);
                } else {
                    // Server error - retry
                    msg_teledox_health("API request failed with server error {$status_code} on attempt {$attempt}", 'api');
                    if ($attempt < $this->max_retries) {
                        $wait_time = pow(2, $attempt - 1); // Exponential backoff
                        msg_teledox_health("Waiting {$wait_time} seconds before retry", 'api');
                        sleep($wait_time);
                    }
                }
            } else {
                msg_teledox_health("API request error on attempt {$attempt}: " . $response->get_error_message(), 'api');
                if ($attempt < $this->max_retries) {
                    $wait_time = pow(2, $attempt - 1);
                    msg_teledox_health("Waiting {$wait_time} seconds before retry", 'api');
                    sleep($wait_time);
                }
            }
            
            $attempt++;
        }
        
        // All retries failed
        msg_teledox_health("API request failed after {$this->max_retries} attempts", 'error');
        return $this->create_error_response('Request failed after maximum retries');
    }
    
    /**
     * Process successful response
     */
    private function process_successful_response($response) {
        $body = wp_remote_retrieve_body($response);
        $headers = wp_remote_retrieve_headers($response);
        $status_code = wp_remote_retrieve_response_code($response);
        
        $result = array(
            'success' => true,
            'status_code' => $status_code,
            'headers' => $headers,
            'data' => null,
            'raw_body' => $body
        );
        
        // Try to decode JSON response
        if (!empty($body)) {
            $decoded = json_decode($body, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $result['data'] = $decoded;
            } else {
                $result['data'] = $body; // Return raw body if not JSON
            }
        }
        
        if ($this->debug_mode) {
            msg_teledox_health("API response processed: " . json_encode($result), 'api');
        }
        
        return $result;
    }
    
    /**
     * Process error response
     */
    private function process_error_response($response, $attempt) {
        $status_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        
        $result = array(
            'success' => false,
            'status_code' => $status_code,
            'attempt' => $attempt,
            'error' => 'HTTP Error: ' . $status_code,
            'data' => null,
            'raw_body' => $body
        );
        
        // Try to decode error response
        if (!empty($body)) {
            $decoded = json_decode($body, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $result['data'] = $decoded;
            }
        }
        
        return $result;
    }
    
    /**
     * Create error response
     */
    private function create_error_response($message) {
        return array(
            'success' => false,
            'status_code' => 0,
            'error' => $message,
            'data' => null
        );
    }
    
    /**
     * Log request details
     */
    private function log_request($url, $method, $data, $response, $execution_time) {
        $log_data = array(
            'url' => $url,
            'method' => $method,
            'data' => $data,
            'response_success' => $response['success'],
            'status_code' => $response['status_code'],
            'execution_time' => round($execution_time, 4),
            'timestamp' => current_time('Y-m-d H:i:s')
        );
        
        msg_teledox_health("API request logged: " . json_encode($log_data), 'api');
    }
    
    /**
     * Test API connection
     */
    public function test_connection() {
        msg_teledox_health('Testing API connection...', 'api');
        
        $response = $this->make_request('health', 'GET');
        
        if ($response['success']) {
            msg_teledox_health('API connection test successful', 'api');
            return true;
        } else {
            msg_teledox_health('API connection test failed: ' . $response['error'], 'api');
            return false;
        }
    }
    
    /**
     * Get API health status
     */
    public function get_health_status() {
        return $this->make_request('health', 'GET');
    }
    
    /**
     * Set custom timeout
     */
    public function set_timeout($timeout) {
        $this->timeout = intval($timeout);
    }
    
    /**
     * Set max retries
     */
    public function set_max_retries($max_retries) {
        $this->max_retries = intval($max_retries);
    }
}

/**
 * Initialize API connection
 */
function teledox_init_api_connection() {
    msg_teledox_health('Initializing API connection system', 'api');
    
    // Create global API instance
    global $teledox_api;
    $teledox_api = new TeleDox_API_Connection();
    
    // Test connection if in debug mode
    if (teledox_get_setting('debug_mode')) {
        $teledox_api->test_connection();
    }
    
    msg_teledox_health('API connection system initialized', 'api');
}
add_action('plugins_loaded', 'teledox_init_api_connection', 30);

/**
 * Get API instance
 */
function teledox_get_api() {
    global $teledox_api;
    return $teledox_api;
}

/**
 * Convenience function for API requests
 */
function teledox_api_request($endpoint, $method = 'GET', $data = null, $headers = array()) {
    $api = teledox_get_api();
    if ($api) {
        return $api->make_request($endpoint, $method, $data, $headers);
    }
    return array('success' => false, 'error' => 'API not initialized');
}

/**
 * Test API connection (admin function)
 */
function teledox_test_api_connection() {
    $api = teledox_get_api();
    if ($api) {
        return $api->test_connection();
    }
    return false;
}

/**
 * Get API configuration status
 */
function teledox_get_api_status() {
    $api = teledox_get_api();
    if ($api) {
        return $api->get_config_status();
    }
    return array('error' => 'API not initialized');
}
