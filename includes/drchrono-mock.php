<?php
/**
 * DrChrono Mock OAuth for Local Testing
 * This allows you to test the API without needing ngrok
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class TeleDox_DrChrono_Mock {
    
    /**
     * Mock OAuth flow for local testing
     * This simulates the OAuth process without external callbacks
     */
    public function mock_oauth_flow() {
        if (!current_user_can('manage_options')) {
            wp_die('Insufficient permissions');
        }
        
        // Check if we're in mock mode
        if (!isset($_GET['mock_oauth']) || $_GET['mock_oauth'] !== '1') {
            return;
        }
        
        echo "<h2>DrChrono Mock OAuth Flow</h2>\n";
        echo "<p>This simulates the OAuth flow for local testing.</p>\n";
        
        if (isset($_POST['mock_authorize'])) {
            $this->process_mock_authorization();
        } else {
            $this->show_mock_authorization_form();
        }
    }
    
    /**
     * Show mock authorization form
     */
    private function show_mock_authorization_form() {
        ?>
        <form method="post" action="">
            <h3>Mock DrChrono Authorization</h3>
            <p>This simulates the DrChrono authorization screen.</p>
            
            <table class="form-table">
                <tr>
                    <th scope="row">Mock User ID</th>
                    <td>
                        <input type="text" name="mock_user_id" value="12345" class="regular-text" />
                        <p class="description">Simulated DrChrono user ID</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Mock Username</th>
                    <td>
                        <input type="text" name="mock_username" value="testuser" class="regular-text" />
                        <p class="description">Simulated DrChrono username</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Mock Email</th>
                    <td>
                        <input type="email" name="mock_email" value="test@example.com" class="regular-text" />
                        <p class="description">Simulated DrChrono email</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Mock First Name</th>
                    <td>
                        <input type="text" name="mock_first_name" value="Test" class="regular-text" />
                        <p class="description">Simulated first name</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Mock Last Name</th>
                    <td>
                        <input type="text" name="mock_last_name" value="User" class="regular-text" />
                        <p class="description">Simulated last name</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Mock Access Token</th>
                    <td>
                        <input type="text" name="mock_access_token" value="mock_access_token_12345" class="regular-text" />
                        <p class="description">Simulated access token</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Mock Refresh Token</th>
                    <td>
                        <input type="text" name="mock_refresh_token" value="mock_refresh_token_12345" class="regular-text" />
                        <p class="description">Simulated refresh token</p>
                    </td>
                </tr>
            </table>
            
            <p class="submit">
                <input type="submit" name="mock_authorize" class="button-primary" value="Authorize Mock Connection" />
            </p>
        </form>
        <?php
    }
    
    /**
     * Process mock authorization
     */
    private function process_mock_authorization() {
        $current_user_id = get_current_user_id();
        
        // Create mock connection data
        $connection_data = array(
            'user_id' => $current_user_id,
            'drchrono_user_id' => sanitize_text_field($_POST['mock_user_id']),
            'drchrono_username' => sanitize_text_field($_POST['mock_username']),
            'drchrono_email' => sanitize_email($_POST['mock_email']),
            'drchrono_first_name' => sanitize_text_field($_POST['mock_first_name']),
            'drchrono_last_name' => sanitize_text_field($_POST['mock_last_name']),
            'access_token' => $this->encrypt_data(sanitize_text_field($_POST['mock_access_token'])),
            'refresh_token' => $this->encrypt_data(sanitize_text_field($_POST['mock_refresh_token'])),
            'expires_at' => time() + 3600, // 1 hour from now
            'connected_at' => time(),
            'last_used' => time(),
        );
        
        // Store mock connection data
        update_user_meta($current_user_id, 'teledox_drchrono_connection', $connection_data);
        update_option('teledox_drchrono_connection_' . $current_user_id, $connection_data);
        
        echo "<div class='notice notice-success'><p>✅ Mock DrChrono connection established successfully!</p></div>\n";
        echo "<p><a href='admin.php?page=teledox-settings' class='button'>Go to Settings</a></p>\n";
        
        if (function_exists('msg_teledox_health')) {
            msg_teledox_health('Mock DrChrono connection established', 'DrChrono Mock');
        }
    }
    
    /**
     * Mock API responses for testing
     */
    public function mock_api_response($endpoint, $method = 'GET') {
        // Return mock data based on endpoint
        switch ($endpoint) {
            case '/api/users/current':
                return array(
                    'data' => array(
                        'id' => 12345,
                        'username' => 'testuser',
                        'email' => 'test@example.com',
                        'first_name' => 'Test',
                        'last_name' => 'User',
                        'is_doctor' => true,
                        'is_staff' => false,
                    ),
                    'response_code' => 200,
                    'headers' => array(),
                );
                
            case '/api/offices':
                return array(
                    'data' => array(
                        'results' => array(
                            array(
                                'id' => 1,
                                'name' => 'Test Office',
                                'address' => '123 Test St',
                                'city' => 'Test City',
                                'state' => 'TS',
                                'zip_code' => '12345',
                            ),
                        ),
                        'next' => null,
                        'previous' => null,
                    ),
                    'response_code' => 200,
                    'headers' => array(),
                );
                
            case '/api/doctors':
                return array(
                    'data' => array(
                        'results' => array(
                            array(
                                'id' => 1,
                                'first_name' => 'Dr. Test',
                                'last_name' => 'Doctor',
                                'email' => 'dr.test@example.com',
                            ),
                        ),
                        'next' => null,
                        'previous' => null,
                    ),
                    'response_code' => 200,
                    'headers' => array(),
                );
                
            case '/api/patients':
                return array(
                    'data' => array(
                        'results' => array(
                            array(
                                'id' => 1,
                                'first_name' => 'John',
                                'last_name' => 'Doe',
                                'date_of_birth' => '1990-01-01',
                                'email' => 'john.doe@example.com',
                            ),
                        ),
                        'next' => null,
                        'previous' => null,
                    ),
                    'response_code' => 200,
                    'headers' => array(),
                );
                
            case '/api/appointments':
                return array(
                    'data' => array(
                        'results' => array(
                            array(
                                'id' => 1,
                                'patient' => 1,
                                'doctor' => 1,
                                'office' => 1,
                                'scheduled_time' => '2024-01-15T10:00:00',
                                'duration' => 30,
                                'status' => 'Confirmed',
                            ),
                        ),
                        'next' => null,
                        'previous' => null,
                    ),
                    'response_code' => 200,
                    'headers' => array(),
                );
                
            default:
                return new WP_Error('mock_endpoint', 'Mock endpoint not implemented: ' . $endpoint);
        }
    }
    
    /**
     * Simple encryption for mock data
     */
    private function encrypt_data($data) {
        $key = wp_salt('auth');
        $iv = wp_salt('secure_auth');
        return base64_encode(openssl_encrypt($data, 'AES-256-CBC', $key, 0, substr($iv, 0, 16)));
    }
    
    /**
     * Add mock testing to admin menu
     */
    public function add_mock_menu() {
        add_submenu_page(
            'teledox-settings',
            'DrChrono Mock OAuth',
            'DrChrono Mock OAuth',
            'manage_options',
            'teledox-drchrono-mock',
            array($this, 'mock_oauth_flow')
        );
    }
}

// Initialize mock functionality
$teledox_drchrono_mock = new TeleDox_DrChrono_Mock();
add_action('admin_menu', array($teledox_drchrono_mock, 'add_mock_menu'));
