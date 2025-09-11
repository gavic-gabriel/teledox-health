<?php
/**
 * DrChrono Postman Token Test
 * Test the API using tokens from Postman
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class TeleDox_DrChrono_Postman_Test {
    
    private $api_base_url = 'https://app.drchrono.com';
    
    /**
     * Test API with Postman tokens
     */
    public function test_with_postman_tokens() {
        if (!current_user_can('manage_options')) {
            wp_die('Insufficient permissions');
        }
        
        echo "<h2>DrChrono Postman Token Test</h2>\n";
        
        if (isset($_POST['test_tokens'])) {
            $this->process_token_test();
        } else {
            $this->show_token_form();
        }
    }
    
    /**
     * Show token input form
     */
    private function show_token_form() {
        ?>
        <form method="post" action="">
            <h3>Enter Your Postman Tokens</h3>
            <p>Copy the tokens from your Postman environment or response.</p>
            
            <table class="form-table">
                <tr>
                    <th scope="row">Access Token</th>
                    <td>
                        <textarea name="access_token" rows="3" cols="80" class="large-text code" placeholder="Paste your access token here..."></textarea>
                        <p class="description">The access_token from your Postman response</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Refresh Token</th>
                    <td>
                        <textarea name="refresh_token" rows="3" cols="80" class="large-text code" placeholder="Paste your refresh token here..."></textarea>
                        <p class="description">The refresh_token from your Postman response</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Expires In (seconds)</th>
                    <td>
                        <input type="number" name="expires_in" value="172800" class="regular-text" />
                        <p class="description">The expires_in value from your Postman response (usually 172800 for 48 hours)</p>
                    </td>
                </tr>
            </table>
            
            <p class="submit">
                <input type="submit" name="test_tokens" class="button-primary" value="Test with These Tokens" />
            </p>
        </form>
        
        <div class="notice notice-info">
            <p><strong>How to find your tokens in Postman:</strong></p>
            <ol>
                <li>Open Postman</li>
                <li>Click the eye icon (👁️) in the top right</li>
                <li>Look for <code>access_token</code> and <code>refresh_token</code> variables</li>
                <li>Or check your token exchange request response</li>
            </ol>
        </div>
        <?php
    }
    
    /**
     * Process token test
     */
    private function process_token_test() {
        $access_token = sanitize_textarea_field($_POST['access_token']);
        $refresh_token = sanitize_textarea_field($_POST['refresh_token']);
        $expires_in = intval($_POST['expires_in']);
        
        if (empty($access_token)) {
            echo "<div class='notice notice-error'><p>❌ Access token is required!</p></div>\n";
            return;
        }
        
        echo "<h3>Testing with Postman Tokens</h3>\n";
        
        // Test 1: Direct API call with access token
        $this->test_direct_api_call($access_token);
        
        // Test 2: Store tokens and test through our API wrapper
        $this->test_api_wrapper($access_token, $refresh_token, $expires_in);
        
        // Test 3: Test various endpoints
        $this->test_various_endpoints($access_token);
    }
    
    /**
     * Test direct API call
     */
    private function test_direct_api_call($access_token) {
        echo "<h4>Test 1: Direct API Call</h4>\n";
        
        $response = wp_remote_get($this->api_base_url . '/api/users/current', array(
            'headers' => array(
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json',
            ),
            'timeout' => 30,
        ));
        
        if (is_wp_error($response)) {
            echo "❌ <strong>Direct API call failed</strong><br>\n";
            echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
        } else {
            $response_code = wp_remote_retrieve_response_code($response);
            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body, true);
            
            if ($response_code === 200 && $data) {
                echo "✅ <strong>Direct API call successful!</strong><br>\n";
                echo "User ID: " . esc_html($data['id']) . "<br>\n";
                echo "Username: " . esc_html($data['username']) . "<br>\n";
                echo "Response Code: " . esc_html($response_code) . "<br>\n";
            } else {
                echo "❌ <strong>Direct API call failed</strong><br>\n";
                echo "Response Code: " . esc_html($response_code) . "<br>\n";
                echo "Response: " . esc_html($body) . "<br>\n";
            }
        }
        
        echo "<br>\n";
    }
    
    /**
     * Test API wrapper
     */
    private function test_api_wrapper($access_token, $refresh_token, $expires_in) {
        echo "<h4>Test 2: API Wrapper Test</h4>\n";
        
        // Store tokens in user meta (simulating OAuth flow)
        $current_user_id = get_current_user_id();
        $expires_at = time() + $expires_in;
        
        $connection_data = array(
            'user_id' => $current_user_id,
            'drchrono_user_id' => 'postman_test',
            'drchrono_username' => 'postman_user',
            'drchrono_email' => 'postman@test.com',
            'drchrono_first_name' => 'Postman',
            'drchrono_last_name' => 'Test',
            'access_token' => $this->encrypt_data($access_token),
            'refresh_token' => $this->encrypt_data($refresh_token),
            'expires_at' => $expires_at,
            'connected_at' => time(),
            'last_used' => time(),
        );
        
        // Store connection data
        update_user_meta($current_user_id, 'teledox_drchrono_connection', $connection_data);
        update_option('teledox_drchrono_connection_' . $current_user_id, $connection_data);
        
        echo "✅ <strong>Tokens stored in WordPress</strong><br>\n";
        
        // Test API wrapper
        $api = new TeleDox_DrChrono_API();
        
        if ($api->is_connected()) {
            echo "✅ <strong>API wrapper connection verified</strong><br>\n";
            
            $response = $api->get_current_user();
            
            if (is_wp_error($response)) {
                echo "❌ <strong>API wrapper call failed</strong><br>\n";
                echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
            } else {
                echo "✅ <strong>API wrapper call successful!</strong><br>\n";
                $user_data = $response['data'];
                echo "User ID: " . esc_html($user_data['id']) . "<br>\n";
                echo "Username: " . esc_html($user_data['username']) . "<br>\n";
            }
        } else {
            echo "❌ <strong>API wrapper not connected</strong><br>\n";
        }
        
        echo "<br>\n";
    }
    
    /**
     * Test various endpoints
     */
    private function test_various_endpoints($access_token) {
        echo "<h4>Test 3: Various Endpoints</h4>\n";
        
        $endpoints = array(
            'Offices' => '/api/offices',
            'Doctors' => '/api/doctors',
            'Patients' => '/api/patients',
            'Appointments' => '/api/appointments',
        );
        
        foreach ($endpoints as $name => $endpoint) {
            echo "<strong>Testing {$name}:</strong> ";
            
            $response = wp_remote_get($this->api_base_url . $endpoint, array(
                'headers' => array(
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json',
                ),
                'timeout' => 30,
            ));
            
            if (is_wp_error($response)) {
                echo "❌ Failed - " . esc_html($response->get_error_message()) . "<br>\n";
            } else {
                $response_code = wp_remote_retrieve_response_code($response);
                $body = wp_remote_retrieve_body($response);
                $data = json_decode($body, true);
                
                if ($response_code === 200 && $data) {
                    $count = isset($data['results']) ? count($data['results']) : 0;
                    echo "✅ Success - Found {$count} items (Response: {$response_code})<br>\n";
                } else {
                    echo "❌ Failed - Response: {$response_code}<br>\n";
                }
            }
        }
        
        echo "<br>\n";
    }
    
    /**
     * Simple encryption for tokens
     */
    private function encrypt_data($data) {
        $key = wp_salt('auth');
        $iv = wp_salt('secure_auth');
        return base64_encode(openssl_encrypt($data, 'AES-256-CBC', $key, 0, substr($iv, 0, 16)));
    }
    
    /**
     * Add menu for Postman testing
     */
    public function add_postman_menu() {
        add_submenu_page(
            'teledox-settings',
            'DrChrono Postman Test',
            'DrChrono Postman Test',
            'manage_options',
            'teledox-drchrono-postman',
            array($this, 'test_with_postman_tokens')
        );
    }
}

// Initialize Postman testing
$teledox_drchrono_postman = new TeleDox_DrChrono_Postman_Test();
// Enabled for token testing
add_action('admin_menu', array($teledox_drchrono_postman, 'add_postman_menu'));
