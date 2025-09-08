<?php
/**
 * DrChrono Authorization Interface
 * Provides UI for connecting/disconnecting to DrChrono
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class TeleDox_DrChrono_Auth {
    
    private $client_id = 'dhkPSo9D7KKwzsUhmu2UY1Qtvwu5pQwLx7F4vNzZ';
    private $redirect_uri;
    private $api;
    
    public function __construct() {
        $this->redirect_uri = home_url('/wp-content/plugins/teledox-health/includes/drchrono-callback.php');
        $this->api = new TeleDox_DrChrono_API();
        
        add_action('wp_ajax_teledox_disconnect_drchrono', array($this, 'handle_disconnect'));
    }
    
    /**
     * Render the DrChrono connection interface
     */
    public function render_connection_interface() {
        $is_connected = $this->api->is_connected();
        $connection_info = $this->api->get_connection_info();
        
        ?>
        <div class="teledox-drchrono-connection">
            <h3>DrChrono Integration</h3>
            
            <?php if ($is_connected && $connection_info): ?>
                <div class="connection-status connected">
                    <div class="status-indicator">
                        <span class="dashicons dashicons-yes-alt" style="color: #46b450;"></span>
                        <strong>Connected to DrChrono</strong>
                    </div>
                    
                    <div class="connection-details">
                        <p><strong>User:</strong> <?php echo esc_html($connection_info['drchrono_first_name'] . ' ' . $connection_info['drchrono_last_name']); ?></p>
                        <p><strong>Email:</strong> <?php echo esc_html($connection_info['drchrono_email']); ?></p>
                        <p><strong>Username:</strong> <?php echo esc_html($connection_info['drchrono_username']); ?></p>
                        <p><strong>Connected:</strong> <?php echo esc_html(date('Y-m-d H:i:s', $connection_info['connected_at'])); ?></p>
                        <p><strong>Last Used:</strong> <?php echo esc_html(date('Y-m-d H:i:s', $connection_info['last_used'])); ?></p>
                        
                        <?php if ($connection_info['is_expired']): ?>
                            <p class="token-expired"><strong>Status:</strong> <span style="color: #d63638;">Token Expired</span></p>
                        <?php else: ?>
                            <p class="token-valid"><strong>Status:</strong> <span style="color: #46b450;">Token Valid</span></p>
                        <?php endif; ?>
                    </div>
                    
                    <div class="connection-actions">
                        <button type="button" class="button button-secondary" id="test-drchrono-connection">
                            Test Connection
                        </button>
                        <button type="button" class="button button-secondary" id="refresh-drchrono-token">
                            Refresh Token
                        </button>
                        <button type="button" class="button button-primary" id="disconnect-drchrono">
                            Disconnect
                        </button>
                    </div>
                </div>
            <?php else: ?>
                <div class="connection-status disconnected">
                    <div class="status-indicator">
                        <span class="dashicons dashicons-warning" style="color: #d63638;"></span>
                        <strong>Not Connected to DrChrono</strong>
                    </div>
                    
                    <div class="connection-info">
                        <p>Connect your DrChrono account to enable integration features.</p>
                        <p><strong>Required Scopes:</strong></p>
                        <ul>
                            <li>patients:summary:read - Read patient summary information</li>
                            <li>patients:summary:write - Write patient summary information</li>
                            <li>calendar:read - Read appointment calendar</li>
                            <li>calendar:write - Write appointment calendar</li>
                            <li>clinical:read - Read clinical notes</li>
                            <li>clinical:write - Write clinical notes</li>
                        </ul>
                    </div>
                    
                    <div class="connection-actions">
                        <a href="<?php echo esc_url($this->get_authorization_url()); ?>" class="button button-primary">
                            Connect to DrChrono
                        </a>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Test Results -->
            <div id="drchrono-test-results" style="display: none; margin-top: 20px;">
                <h4>Connection Test Results</h4>
                <div id="test-results-content"></div>
            </div>
        </div>
        
        <style>
        .teledox-drchrono-connection {
            background: #fff;
            border: 1px solid #ccd0d4;
            border-radius: 4px;
            padding: 20px;
            margin: 20px 0;
        }
        
        .connection-status {
            margin-bottom: 20px;
        }
        
        .status-indicator {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .status-indicator .dashicons {
            margin-right: 8px;
            font-size: 20px;
        }
        
        .connection-details {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        
        .connection-details p {
            margin: 5px 0;
        }
        
        .connection-info {
            margin-bottom: 15px;
        }
        
        .connection-info ul {
            margin-left: 20px;
        }
        
        .connection-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .token-expired {
            background: #fef7f7;
            border: 1px solid #f1aeb5;
            padding: 10px;
            border-radius: 4px;
        }
        
        .token-valid {
            background: #f0f8f0;
            border: 1px solid #a7d4a7;
            padding: 10px;
            border-radius: 4px;
        }
        </style>
        
        <script>
        jQuery(document).ready(function($) {
            // Test connection
            $('#test-drchrono-connection').on('click', function() {
                var button = $(this);
                button.prop('disabled', true).text('Testing...');
                
                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'teledox_test_drchrono_connection',
                        nonce: '<?php echo wp_create_nonce('teledox_drchrono_test'); ?>'
                    },
                    success: function(response) {
                        $('#drchrono-test-results').show();
                        $('#test-results-content').html(response.data);
                    },
                    error: function() {
                        $('#drchrono-test-results').show();
                        $('#test-results-content').html('<p style="color: #d63638;">Test failed. Please try again.</p>');
                    },
                    complete: function() {
                        button.prop('disabled', false).text('Test Connection');
                    }
                });
            });
            
            // Disconnect
            $('#disconnect-drchrono').on('click', function() {
                if (confirm('Are you sure you want to disconnect from DrChrono? This will remove all stored connection data.')) {
                    var button = $(this);
                    button.prop('disabled', true).text('Disconnecting...');
                    
                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        data: {
                            action: 'teledox_disconnect_drchrono',
                            nonce: '<?php echo wp_create_nonce('teledox_drchrono_disconnect'); ?>'
                        },
                        success: function(response) {
                            if (response.success) {
                                location.reload();
                            } else {
                                alert('Disconnect failed: ' + response.data);
                                button.prop('disabled', false).text('Disconnect');
                            }
                        },
                        error: function() {
                            alert('Disconnect failed. Please try again.');
                            button.prop('disabled', false).text('Disconnect');
                        }
                    });
                }
            });
        });
        
        // Add toggle function for JSON response
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
        </script>
        <?php
    }
    
    /**
     * Get authorization URL for OAuth2 flow
     */
    private function get_authorization_url() {
        $scopes = array(
            'patients:summary:read',
            'patients:summary:write',
            'calendar:read',
            'calendar:write',
            'clinical:read',
            'clinical:write'
        );
        
        $params = array(
            'redirect_uri' => $this->redirect_uri,
            'response_type' => 'code',
            'client_id' => $this->client_id,
            'scope' => implode(' ', $scopes),
        );
        
        return 'https://drchrono.com/o/authorize/?' . http_build_query($params);
    }
    
    /**
     * Handle disconnect request
     */
    public function handle_disconnect() {
        check_ajax_referer('teledox_drchrono_disconnect', 'nonce');
        
        if (!current_user_can('manage_options')) {
            wp_die('Insufficient permissions');
        }
        
        $result = $this->api->disconnect();
        
        if ($result) {
            wp_send_json_success('Disconnected successfully');
        } else {
            wp_send_json_error('Disconnect failed');
        }
    }
    
    /**
     * Handle test connection request
     */
    public function handle_test_connection() {
        check_ajax_referer('teledox_drchrono_test', 'nonce');
        
        if (!current_user_can('manage_options')) {
            wp_die('Insufficient permissions');
        }
        
        $response = $this->api->get_current_user();
        
        if (is_wp_error($response)) {
            $output = '<div style="color: #d63638;">';
            $output .= '<p><strong>Connection Test Failed</strong></p>';
            $output .= '<p>Error: ' . esc_html($response->get_error_message()) . '</p>';
            $output .= '</div>';
        } else {
            $user_data = $response['data'];
            $output = '<div style="color: #46b450;">';
            $output .= '<p><strong>Connection Test Successful</strong></p>';
            $output .= '<p>User ID: ' . esc_html($user_data['id']) . '</p>';
            $output .= '<p>Username: ' . esc_html($user_data['username']) . '</p>';
            $output .= '<p>Response Code: ' . esc_html($response['response_code']) . '</p>';
            $output .= '<h4><a href="#" onclick="toggleJsonResponse(); return false;" style="text-decoration: none; color: #0073aa;">Full JSON Response: <span id="json-toggle">▼</span></a></h4>';
            $output .= '<div id="json-response" style="display: none;">';
            $output .= '<pre style="background: #f9f9f9; padding: 15px; border: 1px solid #ddd; border-radius: 4px; overflow-x: auto; font-size: 12px;">';
            $output .= esc_html(json_encode($user_data, JSON_PRETTY_PRINT));
            $output .= '</pre>';
            $output .= '</div>';
            $output .= '</div>';
        }
        
        wp_send_json_success($output);
    }
}

// Initialize the auth interface
$teledox_drchrono_auth = new TeleDox_DrChrono_Auth();

// Add AJAX handlers
add_action('wp_ajax_teledox_test_drchrono_connection', array($teledox_drchrono_auth, 'handle_test_connection'));
