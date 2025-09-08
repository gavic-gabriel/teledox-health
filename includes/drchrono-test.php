<?php
/**
 * DrChrono Integration Test Script
 * Use this to test the DrChrono API integration locally
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class TeleDox_DrChrono_Test {
    
    private $api;
    
    public function __construct() {
        $this->api = new TeleDox_DrChrono_API();
    }
    
    /**
     * Run all tests
     */
    public function run_all_tests() {
        echo "<h2>DrChrono Integration Tests</h2>\n";
        
        // Test 1: Check connection status
        $this->test_connection_status();
        
        // Test 2: Test API connection
        $this->test_api_connection();
        
        // Test 3: Test various API endpoints
        $this->test_api_endpoints();
        
        // Test 4: Test token refresh
        $this->test_token_refresh();
    }
    
    /**
     * Test connection status
     */
    private function test_connection_status() {
        echo "<h3>Test 1: Connection Status</h3>\n";
        
        $is_connected = $this->api->is_connected();
        $connection_info = $this->api->get_connection_info();
        
        if ($is_connected) {
            echo "✅ <strong>Connected to DrChrono</strong><br>\n";
            echo "User: " . esc_html($connection_info['drchrono_first_name'] . ' ' . $connection_info['drchrono_last_name']) . "<br>\n";
            echo "Email: " . esc_html($connection_info['drchrono_email']) . "<br>\n";
            echo "Connected: " . esc_html(date('Y-m-d H:i:s', $connection_info['connected_at'])) . "<br>\n";
            echo "Token Status: " . ($connection_info['is_expired'] ? '❌ Expired' : '✅ Valid') . "<br>\n";
        } else {
            echo "❌ <strong>Not connected to DrChrono</strong><br>\n";
            echo "Please connect your DrChrono account first.<br>\n";
        }
        
        echo "<br>\n";
    }
    
    /**
     * Test API connection
     */
    private function test_api_connection() {
        echo "<h3>Test 2: API Connection</h3>\n";
        
        if (!$this->api->is_connected()) {
            echo "❌ <strong>Cannot test API - not connected</strong><br>\n";
            return;
        }
        
        $response = $this->api->get_current_user();
        
        if (is_wp_error($response)) {
            echo "❌ <strong>API Connection Failed</strong><br>\n";
            echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
        } else {
            echo "✅ <strong>API Connection Successful</strong><br>\n";
            $user_data = $response['data'];
            echo "User ID: " . esc_html($user_data['id']) . "<br>\n";
            echo "Username: " . esc_html($user_data['username']) . "<br>\n";
            echo "Response Code: " . esc_html($response['response_code']) . "<br>\n";
            echo "<h4><a href='#' onclick='toggleJsonResponse(); return false;' style='text-decoration: none; color: #0073aa;'>Full JSON Response: <span id='json-toggle'>▼</span></a></h4>";
            echo "<div id='json-response' style='display: none;'>";
            echo "<pre style='background: #f9f9f9; padding: 15px; border: 1px solid #ddd; border-radius: 4px; overflow-x: auto; font-size: 12px;'>";
            echo esc_html(json_encode($user_data, JSON_PRETTY_PRINT));
            echo "</pre>";
            echo "</div>";
        }
        
        echo "<br>\n";
    }
    
    /**
     * Test various API endpoints
     */
    private function test_api_endpoints() {
        echo "<h3>Test 3: API Endpoints</h3>\n";
        
        if (!$this->api->is_connected()) {
            echo "❌ <strong>Cannot test endpoints - not connected</strong><br>\n";
            return;
        }
        
        $endpoints = array(
            'Offices' => '/api/offices',
            'Doctors' => '/api/doctors',
            'Patients' => '/api/patients',
            'Appointments' => '/api/appointments',
        );
        
        foreach ($endpoints as $name => $endpoint) {
            echo "<strong>Testing {$name}:</strong> ";
            
            $response = $this->api->make_request($endpoint, 'GET', null, array('page_size' => 5));
            
            if (is_wp_error($response)) {
                echo "❌ Failed - " . esc_html($response->get_error_message()) . "<br>\n";
                
                // Special handling for appointments
                if ($name === 'Appointments' && $response->get_error_code() === 'auth_failed') {
                    echo "&nbsp;&nbsp;&nbsp;ℹ️ <em>Note: Appointments may require additional scopes (calendar:read, calendar:write)</em><br>\n";
                }
            } else {
                $data = $response['data'];
                $count = isset($data['results']) ? count($data['results']) : 0;
                echo "✅ Success - Found {$count} items (Response: {$response['response_code']})<br>\n";
            }
        }
        
        echo "<br>\n";
    }
    
    /**
     * Test token refresh
     */
    private function test_token_refresh() {
        echo "<h3>Test 4: Token Refresh</h3>\n";
        
        if (!$this->api->is_connected()) {
            echo "❌ <strong>Cannot test token refresh - not connected</strong><br>\n";
            return;
        }
        
        $connection_info = $this->api->get_connection_info();
        
        if ($connection_info['is_expired']) {
            echo "Token is expired, attempting refresh...<br>\n";
            
            // Force a token refresh by making an API call
            $response = $this->api->get_current_user();
            
            if (is_wp_error($response)) {
                echo "❌ <strong>Token refresh failed</strong><br>\n";
                echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
            } else {
                echo "✅ <strong>Token refresh successful</strong><br>\n";
                echo "New expiration: " . esc_html(date('Y-m-d H:i:s', $connection_info['expires_at'])) . "<br>\n";
            }
        } else {
            echo "✅ <strong>Token is still valid</strong><br>\n";
            echo "Expires: " . esc_html(date('Y-m-d H:i:s', $connection_info['expires_at'])) . "<br>\n";
        }
        
        echo "<br>\n";
    }
    
    /**
     * Test webhook endpoint
     */
    public function test_webhook_endpoint() {
        echo "<h3>Webhook Endpoint Test</h3>\n";
        
        $webhook_url = TeleDox_DrChrono_Webhook::get_webhook_url();
        echo "Webhook URL: " . esc_html($webhook_url) . "<br>\n";
        
        // Test webhook verification
        $test_msg = 'test_verification_' . time();
        $secret = '~zb?)TS3#a2jV}2b5#/X;8d0';
        $expected_signature = hash_hmac('sha256', $test_msg, $secret);
        
        echo "Test verification message: " . esc_html($test_msg) . "<br>\n";
        echo "Expected signature: " . esc_html($expected_signature) . "<br>\n";
        
        // Test the webhook endpoint
        $test_url = $webhook_url . '&msg=' . urlencode($test_msg);
        
        echo "Test URL: " . esc_html($test_url) . "<br>\n";
        echo "You can test this URL in your browser or with curl.<br>\n";
        
        echo "<br>\n";
    }
    
    /**
     * Display webhook log
     */
    public function display_webhook_log() {
        echo "<h3>Webhook Log</h3>\n";
        
        $webhook_log = get_option('teledox_drchrono_webhook_log', array());
        
        if (empty($webhook_log)) {
            echo "No webhook events received yet.<br>\n";
        } else {
            echo "Last " . count($webhook_log) . " webhook events:<br>\n";
            echo "<table border='1' cellpadding='5' cellspacing='0'>\n";
            echo "<tr><th>Timestamp</th><th>Event Type</th><th>Data</th></tr>\n";
            
            foreach (array_reverse($webhook_log) as $entry) {
                echo "<tr>\n";
                echo "<td>" . esc_html(date('Y-m-d H:i:s', $entry['timestamp'])) . "</td>\n";
                echo "<td>" . esc_html($entry['event_type']) . "</td>\n";
                echo "<td><pre>" . esc_html(json_encode($entry['data'], JSON_PRETTY_PRINT)) . "</pre></td>\n";
                echo "</tr>\n";
            }
            
            echo "</table>\n";
        }
        
        echo "<br>\n";
    }
}

// Add admin menu for testing
add_action('admin_menu', function() {
    add_submenu_page(
        'teledox-settings',
        'DrChrono Tests',
        'DrChrono Tests',
        'manage_options',
        'teledox-drchrono-tests',
        'teledox_drchrono_tests_page'
    );
});

function teledox_drchrono_tests_page() {
    if (!current_user_can('manage_options')) {
        wp_die('Insufficient permissions');
    }
    
    echo "<div class='wrap'>\n";
    echo "<h1>DrChrono Integration Tests</h1>\n";
    
    $tester = new TeleDox_DrChrono_Test();
    
    if (isset($_GET['test']) && $_GET['test'] === 'webhook') {
        $tester->test_webhook_endpoint();
    } elseif (isset($_GET['test']) && $_GET['test'] === 'webhook_log') {
        $tester->display_webhook_log();
    } else {
        $tester->run_all_tests();
    }
    
    echo "<h3>Additional Tests</h3>\n";
    echo "<a href='?page=teledox-drchrono-tests&test=webhook' class='button'>Test Webhook Endpoint</a> ";
    echo "<a href='?page=teledox-drchrono-tests&test=webhook_log' class='button'>View Webhook Log</a>\n";
    
    echo "<script>
    function toggleJsonResponse() {
        var response = document.getElementById('json-response');
        var toggle = document.getElementById('json-toggle');
        if (response.style.display === 'none') {
            response.style.display = 'block';
            toggle.innerHTML = '▲';
        } else {
            response.style.display = 'none';
            toggle.innerHTML = '▼';
        }
    }
    </script>";
    
    echo "</div>\n";
}
