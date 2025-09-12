<?php

// Version numbers for cache busting
define('TELEDOX_CSS_VERSION', '1.2.06');
define('TELEDOX_JS_AJAX_VERSION', '1.0');
define('TELEDOX_JS_SCRIPTS_VERSION', '1.0.51');

function teledox_scripts() {
    // Register and enqueue plugin CSS
    wp_register_style('teledox_css', TELEDOX_CSS_URI . 'styles.css', array('bst_css'), TELEDOX_CSS_VERSION . '.' . time());
    wp_enqueue_style('teledox_css');
    msg_teledox_health('Plugin stylesheet loaded', 'plugin_css');

    // Register and enqueue cart CSS
    wp_register_style('teledox_cart_css', TELEDOX_CSS_URI . 'cart.css', array(), TELEDOX_CSS_VERSION . '.' . time());
    wp_enqueue_style('teledox_cart_css');
    msg_teledox_health('Cart stylesheet loaded', 'plugin_css');

    // Register and enqueue main script with the dependency
    wp_register_script('teledox-search-scripts', TELEDOX_PLUGIN_URL . 'js/scripts.js', TELEDOX_JS_SCRIPTS_VERSION . '.' . time(), true);
    wp_enqueue_script('teledox-search-scripts');
    msg_teledox_health('Plugin scripts loaded', 'plugin_js');

    // Register and enqueue cart script
    wp_register_script('teledox_cart_js', TELEDOX_JS_URI . 'cart.js', array('jquery'), TELEDOX_JS_SCRIPTS_VERSION . '.' . time(), true);
    wp_enqueue_script('teledox_cart_js');
    
    // Register and enqueue login CSS and JS for login pages
    if (is_page(array('login', 'reset-password', 'reset-sent', 'new-account'))) {
        wp_enqueue_style('teledox_login_css', TELEDOX_CSS_URI . 'login.css', array(), TELEDOX_CSS_VERSION . '.' . time());
        wp_enqueue_script('teledox_login_js', TELEDOX_JS_URI . 'login.js', array('jquery'), TELEDOX_JS_SCRIPTS_VERSION . '.' . time(), true);
        
        // Localize login script for AJAX
        wp_localize_script('teledox_login_js', 'teledox_login_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('teledox_login_nonce'),
            'login_url' => home_url('/login/'),
            'messages' => array(
                'loading' => 'Please wait...',
                'error' => 'An error occurred. Please try again.',
                'success' => 'Success!',
                'invalid_email' => 'Please enter a valid email address.',
                'password_mismatch' => 'Passwords do not match.',
                'required_field' => 'This field is required.'
            )
        ));
    }
    
    // Localize cart script with necessary data
    wp_localize_script('teledox_cart_js', 'wc_add_to_cart_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('teledox_cart_nonce'),
        'shop_url' => wc_get_page_permalink('shop')
    ));
    
    msg_teledox_health('Cart scripts loaded', 'plugin_js');
}
add_action('wp_enqueue_scripts', 'teledox_scripts');

function display_year() {
    $year = date('Y');
    return $year;
}
add_shortcode('year', 'display_year'); 
//[year]

function get_teledox_api_headers($content_type = 'json') {
    $base_headers = array(
        'x-api-key' => TELEDOX_API_KEY,
        'User-Agent' => 'WordPress/' . get_bloginfo('version') . '; ' . get_bloginfo('url')
    );

    switch ($content_type) {
        case 'png':
            return array(
                'headers' => array_merge($base_headers, array(
                    'Accept' => 'image/png',
                    'Content-Type' => 'image/png'
                ))
            );
        case 'json':
        default:
            return array(
                'headers' => array_merge($base_headers, array(
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ))
            );
    }
}

add_theme_support( 'post-thumbnails' );
add_image_size('img-download-retina', 100, 100, true);
add_image_size('img-featured-listing', 280, 158, true);
add_image_size('img-playlist-listing', 579, 327, true);
add_image_size('img-all-vids-listing', 380, 215, true);

// Add test shortcode for debugging
add_shortcode('teledox_test', 'teledox_test_shortcode');

function teledox_test_shortcode($atts) {
    return '<div style="background: #f0f0f0; padding: 20px; border: 2px solid #007cba; margin: 20px 0;">
        <h3>TeleDox Test Shortcode Working!</h3>
        <p>If you can see this, shortcodes are functioning properly.</p>
        <p>Current time: ' . current_time('Y-m-d H:i:s') . '</p>
        <p>Plugin directory: ' . TELEDOX_PLUGIN_DIR . '</p>
    </div>';
}

