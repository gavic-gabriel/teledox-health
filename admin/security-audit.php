<?php
/**
 * Security Audit Page for TeleDox Health
 * Provides interface for viewing DrChrono API security audit logs
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add Security Audit submenu
 */
function teledox_add_security_audit_menu() {
    add_submenu_page(
        'teledox-settings',
        'Security Audit',
        'Security Audit',
        'manage_options',
        'teledox-security-audit',
        'teledox_security_audit_page'
    );
}
add_action('admin_menu', 'teledox_add_security_audit_menu');

/**
 * Security Audit Page
 */
function teledox_security_audit_page() {
    // Handle form submissions
    if (isset($_POST['teledox_clear_audit_logs'])) {
        teledox_handle_clear_audit_logs();
    }
    
    // Get DrChrono API instance
    $drchrono_api = new TeleDox_DrChrono_API();
    $audit_logs = $drchrono_api->get_audit_logs(200); // Get last 200 entries
    
    ?>
    <div class="wrap">
        <h1>TeleDox Health - Security Audit Logs</h1>
        
        <div class="teledox-security-audit">
            <div class="audit-controls">
                <h2>DrChrono API Security Audit Logs</h2>
                
                <form method="post" action="" style="display: inline-block; margin-bottom: 20px;">
                    <?php wp_nonce_field('teledox_clear_audit_logs', 'teledox_audit_nonce'); ?>
                    <p>Clear audit logs older than 90 days to maintain database performance.</p>
                    <input type="submit" name="teledox_clear_audit_logs" class="button button-secondary" 
                           value="Clear Old Audit Logs" 
                           onclick="return confirm('Are you sure you want to clear old audit logs? This action cannot be undone.');">
                </form>
            </div>
            
            <?php if (is_wp_error($audit_logs)): ?>
                <div class="notice notice-error">
                    <p><strong>Error:</strong> <?php echo esc_html($audit_logs->get_error_message()); ?></p>
                </div>
            <?php elseif (empty($audit_logs)): ?>
                <div class="notice notice-info">
                    <p><strong>No audit logs found.</strong> Audit logs will appear here as DrChrono API operations are performed.</p>
                </div>
            <?php else: ?>
                <div class="audit-logs-table">
                    <table class="wp-list-table widefat fixed striped">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 150px;">Timestamp</th>
                                <th scope="col" style="width: 200px;">Action</th>
                                <th scope="col" style="width: 100px;">User ID</th>
                                <th scope="col" style="width: 150px;">IP Address</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (array_reverse($audit_logs) as $log): ?>
                                <tr>
                                    <td><?php echo esc_html(date('Y-m-d H:i:s', $log['timestamp'])); ?></td>
                                    <td>
                                        <span class="audit-action audit-action-<?php echo esc_attr(str_replace('_', '-', $log['action'])); ?>">
                                            <?php echo esc_html(ucwords(str_replace('_', ' ', $log['action']))); ?>
                                        </span>
                                    </td>
                                    <td><?php echo esc_html($log['user_id'] ?? 'N/A'); ?></td>
                                    <td><?php echo esc_html($log['ip_address'] ?? 'N/A'); ?></td>
                                    <td>
                                        <?php if (!empty($log['data'])): ?>
                                            <details>
                                                <summary>View Details</summary>
                                                <pre style="font-size: 11px; margin-top: 5px; max-height: 200px; overflow-y: auto;"><?php echo esc_html(json_encode($log['data'], JSON_PRETTY_PRINT)); ?></pre>
                                            </details>
                                        <?php else: ?>
                                            <em>No additional data</em>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="audit-summary">
                    <h3>Security Summary</h3>
                    <p><strong>Total Audit Entries:</strong> <?php echo count($audit_logs); ?></p>
                    <p><strong>Last 24 Hours:</strong> <?php echo count(array_filter($audit_logs, function($log) { return $log['timestamp'] > (time() - DAY_IN_SECONDS); })); ?></p>
                    <p><strong>Last 7 Days:</strong> <?php echo count(array_filter($audit_logs, function($log) { return $log['timestamp'] > (time() - (7 * DAY_IN_SECONDS)); })); ?></p>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="teledox-security-info">
            <h2>Security Information</h2>
            
            <div class="security-features">
                <h3>Enhanced Security Features</h3>
                <ul>
                    <li><strong>Enhanced Encryption:</strong> Uses AES-256-CBC with random IV and custom key derivation</li>
                    <li><strong>Access Control:</strong> API data access restricted to administrators</li>
                    <li><strong>Connection Expiration:</strong> Automatic cleanup of expired connections (30 days)</li>
                    <li><strong>Audit Logging:</strong> Comprehensive logging of all API operations</li>
                    <li><strong>Rate Limiting Protection:</strong> Built-in handling of API rate limits</li>
                    <li><strong>Secure Storage:</strong> Connection data encrypted in WordPress database</li>
                </ul>
                
                <h3>Monitoring Recommendations</h3>
                <ul>
                    <li>Regularly review audit logs for suspicious activity</li>
                    <li>Monitor for unusual API request patterns</li>
                    <li>Check for failed authentication attempts</li>
                    <li>Verify connection data expiration and cleanup</li>
                    <li>Review user access patterns and permissions</li>
                </ul>
            </div>
        </div>
    </div>
    
    <style>
        .teledox-security-audit,
        .teledox-security-info {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #ccd0d4;
            border-radius: 4px;
        }
        
        .audit-controls {
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        
        .audit-logs-table {
            margin: 20px 0;
        }
        
        .audit-action {
            padding: 2px 8px;
            border-radius: 3px;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
        }
        
        .audit-action-connection-connected {
            background: #d4edda;
            color: #155724;
        }
        
        .audit-action-connection-disconnected {
            background: #f8d7da;
            color: #721c24;
        }
        
        .audit-action-token-refresh {
            background: #fff3cd;
            color: #856404;
        }
        
        .audit-action-api-request {
            background: #d1ecf1;
            color: #0c5460;
        }
        
        .audit-action-connection-cleanup {
            background: #f8d7da;
            color: #721c24;
        }
        
        .audit-summary {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 4px;
            margin-top: 20px;
        }
        
        .audit-summary h3 {
            margin-top: 0;
            color: #0073aa;
        }
        
        .security-features ul {
            margin: 10px 0;
            padding-left: 20px;
        }
        
        .security-features li {
            margin: 8px 0;
        }
        
        .security-features h3 {
            color: #0073aa;
            margin-top: 20px;
        }
        
        .security-features h3:first-child {
            margin-top: 0;
        }
    </style>
    <?php
}

/**
 * Handle clear audit logs submission
 */
function teledox_handle_clear_audit_logs() {
    if (!wp_verify_nonce($_POST['teledox_audit_nonce'], 'teledox_clear_audit_logs')) {
        wp_die('Security check failed');
    }
    
    if (!current_user_can('manage_options')) {
        wp_die('Insufficient permissions');
    }
    
    $drchrono_api = new TeleDox_DrChrono_API();
    $result = $drchrono_api->clear_old_audit_logs(90);
    
    if (is_wp_error($result)) {
        add_action('admin_notices', function() use ($result) {
            echo '<div class="notice notice-error"><p><strong>Error:</strong> ' . esc_html($result->get_error_message()) . '</p></div>';
        });
    } else {
        add_action('admin_notices', function() {
            echo '<div class="notice notice-success"><p><strong>Success:</strong> Old audit logs have been cleared.</p></div>';
        });
    }
    
    msg_teledox_health('Audit logs cleared by admin', 'drchrono_audit');
}
