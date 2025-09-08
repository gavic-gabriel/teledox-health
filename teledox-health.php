<?php
/**
 * Plugin Name: TeleDox Health
 * Plugin URI: https://teledoxhealth.com
 * Description: Expand core functionality of the TeleDox Health platform.
 * Version: 1.1.01
 * Author: GAVIC Strategies
 * Author URI: https://gavicstrategies.com
 * Text Domain: teledox-health
 *
 * @package TeleDox Health
 */

// Define Constants
defined('ABSPATH') || exit; // Exit if accessed directly
define('TELEDOX_PLUGIN_URL', plugins_url('/', __FILE__));
define('TELEDOX_PLUGIN_DIR', dirname(__FILE__));
//define( 'TELEDOX_TEMPLATE_PATH', plugin_dir_path( __FILE__ ) . 'templates/' );
define( 'TELEDOX_URL_PATH', plugins_url( 'teledox-health' )  );
define( 'TELEDOX_CSS_URI', plugins_url( 'teledox-health' ) . '/css/' );
define( 'TELEDOX_JS_URI', plugins_url( 'teledox-health' ) . '/js/' );

function msg_teledox_health($message, $component = "plugin", $program = "teledox_health") {
	$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
	foreach(explode("\n", $message) as $line) {
		$syslog_message = "<22>" . date('M d H:i:s ') . $program . ' ' . $component . ': ' . $line;
		socket_sendto($sock, $syslog_message, strlen($syslog_message), 0, 'logs2.papertrailapp.com', 22623);
	}
	socket_close($sock);
}

// Include Settings Page
if (file_exists(dirname(__FILE__) . '/admin/settings.php')) {
    include_once dirname(__FILE__) . '/admin/settings.php';
} else {
    msg_teledox_health('Settings file not found', 'error');
}

// Original API
// define( 'TELEDOX_API_URL', 'https://cf-web-api-868745391880.us-east1.run.app/' );
if (teledox_get_setting('staging_mode')) {
    // Stagining API
    define( 'TELEDOX_API_URL', 'https://example.com' );
    define( 'TELEDOX_API_KEY', 'XXXXXXXXXXXXXXXXXXX' );
    // msg_teledox_health(TELEDOX_API_URL, 'plugin');
} else {
    // Production API
    define( 'TELEDOX_API_URL', 'https://example.com' );
    define( 'TELEDOX_API_KEY', 'XXXXXXXXXXXXXXXXXXX' );
}

function teledox_activate_plugin(){
	msg_teledox_health('Plugin Activated', 'plugin');
}
register_activation_hook( __FILE__, "teledox_activate_plugin" );

function teledox_deactivate_plugin(){
	msg_teledox_health('Plugin Deactivated', 'plugin');
}
register_deactivation_hook( __FILE__, "teledox_deactivate_plugin" );

// Add settings link on plugin page
function teledox_settings_link($links) {
    $settings_link = '<a href="admin.php?page=teledox-settings">Settings</a>';
    array_unshift($links, $settings_link);
    return $links;
}
$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", "teledox_settings_link");

// Add simple cart shortcode for testing
add_shortcode('teledox_cart_simple', 'teledox_cart_simple_shortcode');
function teledox_cart_simple_shortcode($atts) {
    return '<div style="background: #e8f4fd; padding: 20px; border: 2px solid #007cba; margin: 20px 0; border-radius: 8px;">
        <h3>🎉 TeleDox Cart Shortcode Working!</h3>
        <p>This is a simple test shortcode to verify functionality.</p>
        <p>Current time: ' . current_time('Y-m-d H:i:s') . '</p>
        <p>Plugin directory: ' . TELEDOX_PLUGIN_DIR . '</p>
        <p><strong>Shortcode: [teledox_cart_simple]</strong></p>
    </div>';
}

// File Includes
if (file_exists(dirname(__FILE__) . '/includes/functions.php')) {
    include_once dirname(__FILE__) . '/includes/functions.php';
    msg_teledox_health('Functions file loaded successfully', 'plugin');
} else {
    msg_teledox_health('Functions file not found', 'error');
}

if (file_exists(dirname(__FILE__) . '/includes/api-diagnostic.php')) {
    require_once dirname(__FILE__) . '/includes/api-diagnostic.php';
    msg_teledox_health('API diagnostic file loaded successfully', 'plugin');
} else {
    msg_teledox_health('API diagnostic file not found', 'error');
}

if (file_exists(dirname(__FILE__) . '/includes/cart-functions.php')) {
    include_once dirname(__FILE__) . '/includes/cart-functions.php';
    msg_teledox_health('Cart functions file loaded successfully', 'plugin');
} else {
    msg_teledox_health('Cart functions file not found', 'error');
}

if (file_exists(dirname(__FILE__) . '/includes/api-connection.php')) {
    include_once dirname(__FILE__) . '/includes/api-connection.php';
    msg_teledox_health('API connection file loaded successfully', 'plugin');
} else {
    msg_teledox_health('API connection file not found', 'error');
}

if (file_exists(dirname(__FILE__) . '/admin/api-settings.php')) {
    include_once dirname(__FILE__) . '/admin/api-settings.php';
    msg_teledox_health('API settings file loaded successfully', 'plugin');
} else {
    msg_teledox_health('API settings file not found', 'error');
}

// DrChrono Integration
if (file_exists(dirname(__FILE__) . '/includes/drchrono-api.php')) {
    include_once dirname(__FILE__) . '/includes/drchrono-api.php';
    msg_teledox_health('DrChrono API file loaded successfully', 'plugin');
} else {
    msg_teledox_health('DrChrono API file not found', 'error');
}

if (file_exists(dirname(__FILE__) . '/includes/drchrono-auth.php')) {
    include_once dirname(__FILE__) . '/includes/drchrono-auth.php';
    msg_teledox_health('DrChrono Auth file loaded successfully', 'plugin');
} else {
    msg_teledox_health('DrChrono Auth file not found', 'error');
}

if (file_exists(dirname(__FILE__) . '/includes/drchrono-webhook.php')) {
    include_once dirname(__FILE__) . '/includes/drchrono-webhook.php';
    msg_teledox_health('DrChrono Webhook file loaded successfully', 'plugin');
} else {
    msg_teledox_health('DrChrono Webhook file not found', 'error');
}

if (file_exists(dirname(__FILE__) . '/includes/drchrono-test.php')) {
    include_once dirname(__FILE__) . '/includes/drchrono-test.php';
    msg_teledox_health('DrChrono Test file loaded successfully', 'plugin');
} else {
    msg_teledox_health('DrChrono Test file not found', 'error');
}

if (file_exists(dirname(__FILE__) . '/includes/drchrono-mock.php')) {
    include_once dirname(__FILE__) . '/includes/drchrono-mock.php';
    msg_teledox_health('DrChrono Mock file loaded successfully', 'plugin');
} else {
    msg_teledox_health('DrChrono Mock file not found', 'error');
}

if (file_exists(dirname(__FILE__) . '/includes/drchrono-postman-test.php')) {
    include_once dirname(__FILE__) . '/includes/drchrono-postman-test.php';
    msg_teledox_health('DrChrono Postman Test file loaded successfully', 'plugin');
} else {
    msg_teledox_health('DrChrono Postman Test file not found', 'error');
}

if (file_exists(dirname(__FILE__) . '/includes/drchrono-quick-test.php')) {
    include_once dirname(__FILE__) . '/includes/drchrono-quick-test.php';
    msg_teledox_health('DrChrono Quick Test file loaded successfully', 'plugin');
} else {
    msg_teledox_health('DrChrono Quick Test file not found', 'error');
}

