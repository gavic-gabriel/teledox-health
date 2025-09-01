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
    
    // Get API status
    $api_status = teledox_get_api_status();
    $api = teledox_get_api();
    
    ?>
    <div class="wrap">
        <h1>TeleDox Health - API Connection</h1>
        
        <div class="teledox-api-status">
            <h2>API Connection Status</h2>
            
            <?php if (isset($api_status['error'])): ?>
                <div class="notice notice-error">
                    <p><strong>Error:</strong> <?php echo esc_html($api_status['error']); ?></p>
                </div>
            <?php else: ?>
                <table class="form-table">
                    <tr>
                        <th scope="row">Mode</th>
                        <td>
                            <span class="api-mode <?php echo $api_status['staging_mode'] ? 'staging' : 'production'; ?>">
                                <?php echo $api_status['staging_mode'] ? 'Staging' : 'Production'; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Debug Mode</th>
                        <td>
                            <span class="debug-mode <?php echo $api_status['debug_mode'] ? 'enabled' : 'disabled'; ?>">
                                <?php echo $api_status['debug_mode'] ? 'Enabled' : 'Disabled'; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">API URL</th>
                        <td>
                            <code><?php echo esc_html($api_status['api_url']); ?></code>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">API Key</th>
                        <td>
                            <?php if ($api_status['api_key_configured']): ?>
                                <span class="api-key-status configured">✓ Configured</span>
                            <?php else: ?>
                                <span class="api-key-status missing">✗ Missing</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Configuration</th>
                        <td>
                            <?php if ($api_status['configuration_valid']): ?>
                                <span class="config-status valid">✓ Valid</span>
                            <?php else: ?>
                                <span class="config-status invalid">✗ Invalid</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>
            <?php endif; ?>
        </div>
        
        <div class="teledox-api-test">
            <h2>Test API Connection</h2>
            
            <form method="post" action="">
                <?php wp_nonce_field('teledox_api_test', 'teledox_api_nonce'); ?>
                <p>Click the button below to test the API connection. This will make a test request to the health endpoint.</p>
                
                <input type="submit" name="teledox_test_api" class="button button-primary" value="Test API Connection">
            </form>
            
            <?php if (isset($_POST['teledox_test_api']) && wp_verify_nonce($_POST['teledox_api_nonce'], 'teledox_api_test')): ?>
                <div class="api-test-results">
                    <h3>Test Results</h3>
                    <?php
                    if ($api) {
                        $test_result = $api->test_connection();
                        if ($test_result) {
                            echo '<div class="notice notice-success"><p>✓ API connection test successful!</p></div>';
                        } else {
                            echo '<div class="notice notice-error"><p>✗ API connection test failed. Check the logs for details.</p></div>';
                        }
                    } else {
                        echo '<div class="notice notice-error"><p>✗ API not initialized. Check the plugin configuration.</p></div>';
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="teledox-api-info">
            <h2>API Information</h2>
            
            <div class="api-documentation">
                <h3>Available Functions</h3>
                <ul>
                    <li><code>teledox_api_request($endpoint, $method, $data, $headers)</code> - Make API requests</li>
                    <li><code>teledox_get_api()</code> - Get API instance</li>
                    <li><code>teledox_test_api_connection()</code> - Test connection</li>
                    <li><code>teledox_get_api_status()</code> - Get configuration status</li>
                </ul>
                
                <h3>Example Usage</h3>
                <pre><code>// Simple GET request
$response = teledox_api_request('users', 'GET');

// POST request with data
$data = array('name' => 'John Doe', 'email' => 'john@example.com');
$response = teledox_api_request('users', 'POST', $data);

// With custom headers
$headers = array('Custom-Header' => 'value');
$response = teledox_api_request('users', 'GET', null, $headers);

// Check response
if ($response['success']) {
    $user_data = $response['data'];
    // Process data
} else {
    $error = $response['error'];
    // Handle error
}</code></pre>
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
        
        .api-mode.staging {
            background: #ffb900;
            color: #000;
            padding: 4px 8px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .api-mode.production {
            background: #46b450;
            color: #fff;
            padding: 4px 8px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .debug-mode.enabled {
            background: #0073aa;
            color: #fff;
            padding: 4px 8px;
            border-radius: 3px;
        }
        
        .debug-mode.disabled {
            background: #666;
            color: #fff;
            padding: 4px 8px;
            border-radius: 3px;
        }
        
        .api-key-status.configured {
            color: #46b450;
            font-weight: bold;
        }
        
        .api-key-status.missing {
            color: #dc3232;
            font-weight: bold;
        }
        
        .config-status.valid {
            color: #46b450;
            font-weight: bold;
        }
        
        .config-status.invalid {
            color: #dc3232;
            font-weight: bold;
        }
        
        .api-test-results {
            margin-top: 20px;
            padding: 15px;
            background: #f9f9f9;
            border-left: 4px solid #0073aa;
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
