<?php
/**
 * API Settings Page for TeleDox Health
 * Provides interface for testing and managing API connections
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add API settings submenu
 */
function teledox_add_api_settings_menu() {
    add_submenu_page(
        'teledox-settings',
        'API Connection',
        'API Connection',
        'manage_options',
        'teledox-api-settings',
        'teledox_api_settings_page'
    );
}
add_action('admin_menu', 'teledox_add_api_settings_menu');

/**
 * API Settings Page
 */
function teledox_api_settings_page() {
    // Handle form submissions
    if (isset($_POST['teledox_test_api'])) {
        teledox_handle_api_test();
    }
    
    // Get DrChrono API status
    $drchrono_api = new TeleDox_DrChrono_API();
    $drchrono_connected = $drchrono_api->is_connected();
    $drchrono_user_id = $drchrono_api->get_drchrono_user_id();
    $drchrono_username = $drchrono_api->get_drchrono_username();
    $drchrono_doctor_id = $drchrono_api->get_drchrono_doctor_id();
    
    ?>
    <div class="wrap">
        <h1>TeleDox Health - API Connection</h1>
        
        <div class="teledox-api-status">
            <h2>DrChrono API Connection Status</h2>
            
            <?php if (!$drchrono_connected): ?>
                <div class="notice notice-warning">
                    <p><strong>Not Connected:</strong> DrChrono API is not connected. Please connect using the <a href="admin.php?page=teledox-settings">TeleDox Health Settings</a> page.</p>
                </div>
            <?php else: ?>
                <table class="form-table">
                    <tr>
                        <th scope="row">Connection Status</th>
                        <td>
                            <span class="connection-status connected">✓ Connected</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">DrChrono User ID</th>
                        <td>
                            <code><?php echo esc_html($drchrono_user_id ?: 'Not available'); ?></code>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Username</th>
                        <td>
                            <code><?php echo esc_html($drchrono_username ?: 'Not available'); ?></code>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Doctor ID</th>
                        <td>
                            <code><?php echo esc_html($drchrono_doctor_id ?: 'Not available'); ?></code>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">API Base URL</th>
                        <td>
                            <code>https://app.drchrono.com</code>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Token Status</th>
                        <td>
                            <span class="token-status valid">✓ Valid</span>
                        </td>
                    </tr>
                </table>
            <?php endif; ?>
        </div>
        
        <div class="teledox-api-test">
            <h2>Test DrChrono API Connection</h2>
            
            <form method="post" action="">
                <?php wp_nonce_field('teledox_api_test', 'teledox_api_nonce'); ?>
                <p>Click the button below to test the DrChrono API connection. This will make a test request to the /api/users/current endpoint.</p>
                
                <input type="submit" name="teledox_test_api" class="button button-primary" value="Test DrChrono API Connection">
            </form>
            
            <?php if (isset($_POST['teledox_test_api']) && wp_verify_nonce($_POST['teledox_api_nonce'], 'teledox_api_test')): ?>
                <div class="api-test-results">
                    <h3>Test Results</h3>
                    <?php
                    if ($drchrono_connected) {
                        $test_result = $drchrono_api->get_current_user();
                        if (!is_wp_error($test_result) && isset($test_result['data'])) {
                            echo '<div class="notice notice-success"><p>✓ DrChrono API connection test successful!</p></div>';
                            echo '<div class="test-details">';
                            echo '<h4>User Information:</h4>';
                            echo '<ul>';
                            echo '<li><strong>User ID:</strong> ' . esc_html($test_result['data']['id']) . '</li>';
                            echo '<li><strong>Username:</strong> ' . esc_html($test_result['data']['username']) . '</li>';
                            echo '<li><strong>Is Doctor:</strong> ' . ($test_result['data']['is_doctor'] ? 'Yes' : 'No') . '</li>';
                            echo '<li><strong>Is Staff:</strong> ' . ($test_result['data']['is_staff'] ? 'Yes' : 'No') . '</li>';
                            if (isset($test_result['data']['doctor'])) {
                                echo '<li><strong>Doctor ID:</strong> ' . esc_html($test_result['data']['doctor']) . '</li>';
                            }
                            echo '</ul>';
                            echo '</div>';
                        } else {
                            echo '<div class="notice notice-error"><p>✗ DrChrono API connection test failed. Check the logs for details.</p></div>';
                            if (is_wp_error($test_result)) {
                                echo '<p><strong>Error:</strong> ' . esc_html($test_result->get_error_message()) . '</p>';
                            }
                        }
                    } else {
                        echo '<div class="notice notice-error"><p>✗ DrChrono API not connected. Please connect first using the <a href="admin.php?page=teledox-settings">TeleDox Health Settings</a> page.</p></div>';
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="teledox-api-info">
            <h2>DrChrono API Information</h2>
            
            <div class="api-documentation">
                <h3>Available DrChrono Functions</h3>
                <ul>
                    <li><code>TeleDox_DrChrono_API()</code> - Initialize DrChrono API instance</li>
                    <li><code>$api->get_current_user()</code> - Get current user information</li>
                    <li><code>$api->get_offices()</code> - Get office information</li>
                    <li><code>$api->get_doctors()</code> - Get doctor information</li>
                    <li><code>$api->get_patients()</code> - Get patient information</li>
                    <li><code>$api->get_appointments()</code> - Get appointment information</li>
                    <li><code>$api->is_connected()</code> - Check connection status</li>
                </ul>
                
                <h3>Example Usage</h3>
                <pre><code>// Initialize DrChrono API
$api = new TeleDox_DrChrono_API();

// Check if connected
if ($api->is_connected()) {
    // Get current user
    $user = $api->get_current_user();
    
    // Get offices
    $offices = $api->get_offices();
    
    // Get doctors
    $doctors = $api->get_doctors();
    
    // Get patients (first 10)
    $patients = $api->get_patients(array('page_size' => 10));
    
    // Check response
    if (!is_wp_error($user) && isset($user['data'])) {
        $user_data = $user['data'];
        echo "User: " . $user_data['username'];
    }
} else {
    echo "DrChrono API not connected";
}</code></pre>
                
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="admin.php?page=teledox-settings">TeleDox Health Settings</a> - Connect/Disconnect DrChrono</li>
                    <li><a href="admin.php?page=teledox-drchrono-tests">DrChrono Integration Tests</a> - Comprehensive testing</li>
                    <li><a href="admin.php?page=teledox-drchrono-quick">Quick DrChrono Test</a> - Quick API testing</li>
                </ul>
            </div>
        </div>
    </div>
    
    <style>
        .teledox-api-status,
        .teledox-api-test,
        .teledox-api-info {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #ccd0d4;
            border-radius: 4px;
        }
        
        .connection-status.connected {
            background: #46b450;
            color: #fff;
            padding: 4px 8px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .connection-status.disconnected {
            background: #dc3232;
            color: #fff;
            padding: 4px 8px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .token-status.valid {
            background: #46b450;
            color: #fff;
            padding: 4px 8px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .token-status.invalid {
            background: #dc3232;
            color: #fff;
            padding: 4px 8px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .api-test-results {
            margin-top: 20px;
            padding: 15px;
            background: #f9f9f9;
            border-left: 4px solid #0073aa;
        }
        
        .test-details {
            margin-top: 15px;
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        
        .test-details h4 {
            margin-top: 0;
            color: #0073aa;
        }
        
        .test-details ul {
            margin: 10px 0;
            padding-left: 20px;
        }
        
        .test-details li {
            margin: 5px 0;
        }
        
        .api-documentation pre {
            background: #f1f1f1;
            padding: 15px;
            border-radius: 3px;
            overflow-x: auto;
        }
        
        .api-documentation code {
            background: #f1f1f1;
            padding: 2px 4px;
            border-radius: 2px;
        }
    </style>
    <?php
}

/**
 * Handle API test submission
 */
function teledox_handle_api_test() {
    if (!wp_verify_nonce($_POST['teledox_api_nonce'], 'teledox_api_test')) {
        wp_die('Security check failed');
    }
    
    if (!current_user_can('manage_options')) {
        wp_die('Insufficient permissions');
    }
    
    // Test will be performed in the display function
    msg_teledox_health('API connection test requested by admin', 'api');
}
