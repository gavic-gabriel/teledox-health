<?php
/**
 * Cart Functions for TeleDox Health Plugin
 * Handles custom cart functionality and WooCommerce integration
 * 
 * ============================================================================
 * REDIRECT ISSUE INVESTIGATION - COMPLETE FINDINGS & FUTURE REFERENCE
 * ============================================================================
 * 
 * ISSUE: Users being redirected to homepage when trying to add duplicate "1 per cart" products
 * 
 * CONTEXT: This redirect happens specifically when our custom validation blocks adding
 * a second item of the same product (implementing "1 per cart" limit). When validation
 * fails, instead of staying on the product page with an error message, users get
 * redirected to the homepage.
 * 
 * IMPORTANT FINDING: We SUCCESSFULLY implemented the "1 product per cart" limit and
 * it was working correctly - products were being blocked from being added. The only
 * remaining issue was the unwanted redirect to homepage after the validation failure.
 * 
 * NOTE: We removed the working validation code to get back to a clean debugging state.
 * When we tackle the redirect issue again, we'll need to re-implement the "1 per cart"
 * validation logic that we know works.
 * 
 * INVESTIGATION TIMELINE:
 * 1. Initially suspected WooCommerce's built-in validation/redirect
 * 2. Discovered Elementor Pro's e-redirect parameter in add-to-cart URLs
 * 3. Found Elementor Pro hooks into woocommerce_add_to_cart_redirect at priority 10
 * 4. Attempted multiple redirect prevention strategies (all failed)
 * 
 * ROOT CAUSE IDENTIFIED:
 * - Elementor Pro adds "e-redirect" parameter to add-to-cart URLs
 * - This parameter contains the current page URL (e.g., product page)
 * - Elementor Pro's filter runs AFTER WooCommerce validation
 * - When validation fails, Elementor still processes the e-redirect parameter
 * - Result: Redirect to homepage instead of staying on product page
 * 
 * TECHNICAL DETAILS:
 * - Elementor Pro hook: woocommerce_add_to_cart_redirect at priority 10
 * - URL structure: ?add-to-cart=357&quantity=1&e-redirect=https%3A%2F%2F...
 * - Elementor Pro source: modules/woocommerce/tags/woocommerce-add-to-cart.php
 * - Filter function: modules/dynamic-tags/module.php (returns e-redirect value)
 * 
 * ATTEMPTED SOLUTIONS (ALL FAILED):
 * 1. Override woocommerce_add_to_cart_redirect at priority 1 (too early)
 * 2. Override at priority 0 (before Elementor, but WooCommerce still redirects)
 * 3. Hook into wp_redirect to catch all redirects (nuclear option - failed)
 * 4. Disable WooCommerce cart redirect setting (didn't affect Elementor)
 * 5. Multi-layer protection system (conflicts and failures)
 * 
 * WHY SOLUTIONS FAILED:
 * - Elementor Pro's redirect happens AFTER WooCommerce's standard flow
 * - Our filters couldn't prevent Elementor's e-redirect processing
 * - Elementor Pro has higher priority in the WordPress ecosystem
 * - The e-redirect parameter is processed regardless of validation status
 * - Even when our validation blocks the product addition, Elementor still redirects
 * - This creates a poor UX: user gets blocked from adding product AND redirected away
 * 
 * FUTURE APPROACHES TO CONSIDER:
 * 1. Control the redirect: Instead of blocking, redirect back to same page
 * 2. Modify Elementor Pro's e-redirect parameter before it's processed
 * 3. Use JavaScript to intercept and cancel the redirect
 * 4. Contact Elementor Pro support about this behavior
 * 5. Implement custom add-to-cart flow that bypasses Elementor's redirect
 * 
 * CURRENT STATUS: Clean debugging state, "1 per cart" limit code was removed to get
 * back to clean slate. Redirect issue documented but not solved.
 * NEXT STEPS: When ready to tackle redirect, re-implement the proven "1 per cart"
 * validation logic, then focus on redirect solutions.
 * 
 * ============================================================================
 * END REDIRECT INVESTIGATION NOTES
 * ============================================================================
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Safe logging utility - prevents array to string conversion warnings
 * @param string $message The message to log
 * @param string $component The component name
 */
function teledox_safe_log($message, $component = 'cart') {
    // Ensure message is a string
    if (!is_string($message)) {
        $message = 'Non-string message: ' . gettype($message) . ' - ' . print_r($message, true);
    }
    
    // Log the safe message
    msg_teledox_health($message, $component);
}

/**
 * Safe string conversion utility
 * @param mixed $value The value to convert to string
 * @param string $default Default value if conversion fails
 * @return string Safe string representation
 */
function teledox_safe_string($value, $default = 'unknown') {
    if (is_string($value)) {
        return $value;
    }
    
    if (is_numeric($value)) {
        return (string) $value;
    }
    
    if (is_bool($value)) {
        return $value ? 'true' : 'false';
    }
    
    if (is_array($value)) {
        return 'array(' . count($value) . ' items)';
    }
    
    if (is_object($value)) {
        return 'object(' . get_class($value) . ')';
    }
    
    if (is_null($value)) {
        return 'null';
    }
    
    return $default;
}

/**
 * Safe array keys conversion
 * @param array $array The array to get keys from
 * @return string Safe string representation of array keys
 */
function teledox_safe_array_keys($array) {
    if (!is_array($array)) {
        return 'not_an_array';
    }
    
    $keys = array_keys($array);
    if (empty($keys)) {
        return 'empty_array';
    }
    
    return implode(', ', $keys);
}

/**
 * Initialize cart functionality
 */
function teledox_init_cart() {
    // Prevent multiple initializations
    static $initialized = false;
    if ($initialized) {
        teledox_safe_log('Cart init function already called, skipping duplicate', 'cart');
        return;
    }
    $initialized = true;
    
    // Add debugging
    teledox_safe_log('Cart init function called', 'cart');
    
    // Debug constants
    teledox_safe_log('TELEDOX_PLUGIN_DIR: ' . (defined('TELEDOX_PLUGIN_DIR') ? TELEDOX_PLUGIN_DIR : 'NOT DEFINED'), 'cart');
    teledox_safe_log('TELEDOX_CSS_URI: ' . (defined('TELEDOX_CSS_URI') ? TELEDOX_CSS_URI : 'NOT DEFINED'), 'cart');
    teledox_safe_log('TELEDOX_JS_URI: ' . (defined('TELEDOX_JS_URI') ? TELEDOX_JS_URI : 'NOT DEFINED'), 'cart');
    teledox_safe_log('TELEDOX_CSS_VERSION: ' . (defined('TELEDOX_CSS_VERSION') ? TELEDOX_CSS_VERSION : 'NOT DEFINED'), 'cart');
    teledox_safe_log('TELEDOX_JS_SCRIPTS_VERSION: ' . (defined('TELEDOX_JS_SCRIPTS_VERSION') ? TELEDOX_JS_SCRIPTS_VERSION : 'NOT DEFINED'), 'cart');
    
    // Check if WooCommerce is active - use multiple methods
    $woocommerce_active = false;
    
    // Method 1: Check if class exists
    if (class_exists('WooCommerce')) {
        $woocommerce_active = true;
        teledox_safe_log('WooCommerce detected via class_exists', 'cart');
    }
    
    // Method 2: Check if function exists
    if (!$woocommerce_active && function_exists('WC')) {
        $woocommerce_active = true;
        teledox_safe_log('WooCommerce detected via WC() function', 'cart');
    }
    
    // Method 3: Check if plugin is active
    if (!$woocommerce_active && function_exists('is_plugin_active') && is_plugin_active('woocommerce/woocommerce.php')) {
        $woocommerce_active = true;
        teledox_safe_log('WooCommerce detected via plugin check', 'cart');
    }
    
    if (!$woocommerce_active) {
        teledox_safe_log('WooCommerce not active, cart functions disabled', 'cart');
        return;
    }
    
    teledox_safe_log('WooCommerce is active, proceeding with cart initialization', 'cart');
    
    // Add AJAX handlers (only if not already added)
    if (!has_action('wp_ajax_teledox_update_cart_item_quantity')) {
        add_action('wp_ajax_teledox_update_cart_item_quantity', 'teledox_update_cart_item_quantity');
        add_action('wp_ajax_nopriv_teledox_update_cart_item_quantity', 'teledox_update_cart_item_quantity');
    }
    
    if (!has_action('wp_ajax_teledox_remove_cart_item')) {
        add_action('wp_ajax_teledox_remove_cart_item', 'teledox_remove_cart_item');
        add_action('wp_ajax_nopriv_teledox_remove_cart_item', 'teledox_remove_cart_item');
    }
    
    // Hook into WooCommerce cart display (only if not already added)
    if (!has_filter('woocommerce_locate_template', 'teledox_override_cart_template')) {
        add_filter('woocommerce_locate_template', 'teledox_override_cart_template', 10, 3);
    }
    
    // Cart assets are now handled in functions.php to avoid conflicts
    
    // Add cart shortcode (only if not already added)
    if (!shortcode_exists('teledox_cart')) {
        add_shortcode('teledox_cart', 'teledox_cart_shortcode');
    }
    

    
    // Add debugging for add to cart validation to identify double message source
    if (!has_filter('woocommerce_add_to_cart_validation', 'teledox_debug_add_to_cart_validation')) {
        add_filter('woocommerce_add_to_cart_validation', 'teledox_debug_add_to_cart_validation', 1, 5);
    }
    
        // Prevent WooCommerce from showing duplicate remove item messages
    if (!has_filter('woocommerce_cart_item_removed', 'teledox_prevent_duplicate_remove_messages')) {
        add_filter('woocommerce_cart_item_removed', 'teledox_prevent_duplicate_remove_messages', 1, 1);
    }

    // Prevent duplicate validation messages by filtering notices after WooCommerce adds them
    // Use 'wp' hook to run after WooCommerce has processed everything
    

    // Debug: Check if filter is already hooked
    $current_filters = has_filter('woocommerce_cart_item_removed', 'teledox_prevent_duplicate_remove_messages');
    teledox_safe_log("Filter hook status: " . ($current_filters ? "HOOKED {$current_filters} times" : "NOT HOOKED"), 'cart');
    
    teledox_safe_log('Cart functionality initialized', 'cart');
    
    // Register custom error handler to catch array to string conversion warnings
    set_error_handler('teledox_error_handler');
    
    // Add console logging for debugging
    add_action('wp_footer', 'teledox_add_debug_script');
}
// Run cart initialization after WooCommerce is fully loaded
add_action('plugins_loaded', 'teledox_init_cart', 20);

/**
 * Add debug script to footer
 */
function teledox_add_debug_script() {
    if (is_cart() || has_shortcode(get_the_content(), 'teledox_cart')) {
        echo '<script>console.log("[TeleDox Debug] Cart functions loaded, checking initialization...");</script>';
    }
}

/**
 * Custom error handler to catch and log PHP warnings
 */
function teledox_error_handler($errno, $errstr, $errfile, $errline) {
    if ($errno === E_WARNING && strpos($errstr, 'Array to string conversion') !== false) {
        teledox_safe_log("PHP WARNING CAUGHT: {$errstr} in {$errfile} on line {$errline}", 'error');
        
        // Get backtrace to see where this warning originated
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 5);
        foreach ($backtrace as $index => $trace) {
            if (isset($trace['function']) && $trace['function'] !== 'teledox_error_handler') {
                teledox_safe_log("Warning backtrace {$index}: {$trace['function']} in {$trace['file']}:{$trace['line']}", 'error');
            }
        }
    }
    
    // Don't suppress the warning, just log it
    return false;
}


/**
 * Override WooCommerce cart template
 */
function teledox_override_cart_template($template, $template_name, $template_path) {
    teledox_safe_log("Template override called: {$template_name}", 'cart');
    
    if ($template_name === 'cart/cart.php') {
        teledox_safe_log('Attempting to override cart template', 'cart');
        
        $custom_template = TELEDOX_PLUGIN_DIR . '/templates/cart.php';
        teledox_safe_log("Looking for custom template at: {$custom_template}", 'cart');
        
        if (file_exists($custom_template)) {
            teledox_safe_log('Custom cart template found, overriding', 'cart');
            return $custom_template;
        } else {
            teledox_safe_log('Custom cart template not found at: ' . $custom_template, 'error');
        }
    }
    return $template;
}



/**
 * Cart shortcode
 */
function teledox_cart_shortcode($atts) {
    teledox_safe_log('Cart shortcode called', 'cart');
    
    $atts = shortcode_atts(array(
        'show_header' => 'true',
        'show_summary' => 'true',
        'show_actions' => 'true'
    ), $atts);
    
    ob_start();
    
    // Include the cart template
    $template_path = TELEDOX_PLUGIN_DIR . '/templates/cart.php';
    teledox_safe_log("Shortcode template path: {$template_path}", 'cart');
    
    if (file_exists($template_path)) {
        include $template_path;
        teledox_safe_log('Cart template included successfully', 'cart');
    } else {
        teledox_safe_log('Cart template not found at: ' . $template_path, 'error');
        echo '<p>Cart template not found. Please check the plugin installation.</p>';
    }
    
    return ob_get_clean();
}

/**
 * AJAX handler for updating cart item quantity
 */
function teledox_update_cart_item_quantity() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'teledox_cart_nonce')) {
        wp_die('Security check failed');
    }
    
    $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
    $quantity = intval($_POST['quantity']);
    $product_id = intval($_POST['product_id']);
    
    // Validate quantity
    if ($quantity < 1) {
        wp_send_json_error('Invalid quantity');
        return;
    }
    
    // Update cart item quantity
    $cart_item = WC()->cart->get_cart_item($cart_item_key);
    if (!$cart_item) {
        wp_send_json_error('Cart item not found');
        return;
    }
    
    // Update quantity
    WC()->cart->set_quantity($cart_item_key, $quantity);
    
    // Calculate updated totals
    $cart_totals = teledox_get_cart_totals();
    
    // Get updated item subtotal
    $updated_item = WC()->cart->get_cart_item($cart_item_key);
    $item_subtotal = WC()->cart->get_product_subtotal($updated_item['data'], $quantity);
    
    $response_data = array(
        'success' => true,
        'cart_totals' => $cart_totals,
        'item_subtotal' => $item_subtotal,
        'message' => 'Quantity updated successfully'
    );
    
    teledox_safe_log('Cart item quantity updated: ' . $cart_item_key . ' to ' . $quantity, 'cart');
    
    wp_send_json_success($response_data);
}

/**
 * AJAX handler for removing cart item
 */
function teledox_remove_cart_item() {
    teledox_safe_log("=== AJAX REMOVE ITEM DEBUG START ===", 'cart');
    teledox_safe_log("POST data: " . print_r($_POST, true), 'cart');
    
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'teledox_cart_nonce')) {
        teledox_safe_log('Security check failed', 'cart');
        wp_die('Security check failed');
    }
    
    $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
    teledox_safe_log("Processing cart item key: {$cart_item_key}", 'cart');
    
    // Remove cart item
    $removed = WC()->cart->remove_cart_item($cart_item_key);
    
    if (!$removed) {
        teledox_safe_log('Failed to remove item', 'cart');
        wp_send_json_error('Failed to remove item');
        return;
    }
    
    // Calculate updated totals
    $cart_totals = teledox_get_cart_totals();
    
    $response_data = array(
        'success' => true,
        'cart_item_key' => $cart_item_key,
        'cart_totals' => $cart_totals,
        'message' => 'Item removed successfully'
    );
    
    teledox_safe_log('Cart item removed: ' . $cart_item_key, 'cart');
    teledox_safe_log("=== AJAX REMOVE ITEM DEBUG END ===", 'cart');
    
    wp_send_json_success($response_data);
}

/**
 * Get formatted cart totals
 */
function teledox_get_cart_totals() {
    $cart = WC()->cart;
    
    return array(
        'subtotal' => wc_price($cart->get_subtotal()),
        'tax' => $cart->get_total_tax() > 0 ? wc_price($cart->get_total_tax()) : '',
        'shipping' => $cart->get_shipping_total() > 0 ? wc_price($cart->get_shipping_total()) : '',
        'total' => $cart->get_total(),
        'item_count' => $cart->get_cart_contents_count()
    );
}

/**
 * Check if current page is cart page
 */
function teledox_is_cart_page() {
    $is_cart = is_cart() || (function_exists('is_woocommerce') && is_woocommerce() && is_cart());
    teledox_safe_log("Cart page check: is_cart()=" . (is_cart() ? 'true' : 'false') . ", is_woocommerce()=" . (function_exists('is_woocommerce') && is_woocommerce() ? 'true' : 'false') . ", result=" . ($is_cart ? 'true' : 'false'), 'cart');
    return $is_cart;
}

/**
 * Get cart item count for display
 */
function teledox_get_cart_count() {
    if (function_exists('WC') && WC()->cart) {
        return WC()->cart->get_cart_contents_count();
    }
    return 0;
}

/**
 * Add cart count to menu items (optional)
 */
function teledox_add_cart_count_to_menu($items, $args) {
    // Check if cart count display is enabled (you can add this to settings later)
    $show_cart_in_menu = true; // Set to false to disable completely
    
    if (!$show_cart_in_menu) {
        return $items;
    }
    
    // Only add to specific theme locations - adjust these for your theme
    $allowed_locations = array('primary', 'main-menu', 'primary-menu', 'header-menu');
    
    if (in_array($args->theme_location, $allowed_locations)) {
        $cart_count = teledox_get_cart_count();
        if ($cart_count > 0) {
            $cart_link = '<a href="' . wc_get_cart_url() . '" class="cart-menu-item">';
            $cart_link .= 'Cart <span class="cart-count-badge">' . $cart_count . '</span>';
            $cart_link .= '</a>';
            
            // Add cart link to the end of the menu
            $items .= '<li class="menu-item cart-menu-item">' . $cart_link . '</li>';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'teledox_add_cart_count_to_menu', 10, 2);



/**
 * Customize cart page title
 */
function teledox_cart_page_title($title) {
    if (teledox_is_cart_page()) {
        return 'Your Shopping Cart';
    }
    return $title;
}
add_filter('woocommerce_page_title', 'teledox_cart_page_title');








/**
 * Debug add to cart validation to identify double message source
 */
function teledox_debug_add_to_cart_validation($passed, $product_id, $quantity) {
    // Static counter to track how many times this function is called
    static $call_count = 0;
    $call_count++;
    
    teledox_safe_log("=== VALIDATION DEBUG START (Call #{$call_count}) ===", 'cart');
    teledox_safe_log("Product ID: {$product_id}, Quantity: {$quantity}, Passed: " . ($passed ? 'true' : 'false'), 'cart');
    
    $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 10);
    teledox_safe_log("Backtrace type: " . gettype($backtrace), 'cart');
    teledox_safe_log("Backtrace count: " . count($backtrace), 'cart');
    
    $caller_info = '';
    
    foreach ($backtrace as $index => $trace) {
        teledox_safe_log("Trace {$index} type: " . gettype($trace), 'cart');
        if (is_array($trace)) {
            teledox_safe_log("Trace {$index} keys: " . implode(', ', array_keys($trace)), 'cart');
            if (isset($trace['function'])) {
                teledox_safe_log("Trace {$index} function type: " . gettype($trace['function']), 'cart');
                teledox_safe_log("Trace {$index} function value: " . print_r($trace['function'], true), 'cart');
            }
        }
        
        if (isset($trace['function']) && $trace['function'] !== 'teledox_debug_add_to_cart_validation') {
            $caller_info .= $trace['function'] . ' -> ';
        }
    }
    
    teledox_safe_log("Final caller_info type: " . gettype($caller_info), 'cart');
    teledox_safe_log("Final caller_info value: " . print_r($caller_info, true), 'cart');
    
    // Ensure caller_info is a string and add debugging
    if (!is_string($caller_info)) {
        teledox_safe_log("WARNING: caller_info is not a string, type: " . gettype($caller_info), 'cart');
        if (is_array($caller_info)) {
            teledox_safe_log("WARNING: caller_info is an array: " . print_r($caller_info, true), 'cart');
        }
        $caller_info = 'unknown';
    }
    
    // Ensure all variables are safe for concatenation
    $safe_product_id = is_scalar($product_id) ? $product_id : 'unknown';
    $safe_quantity = is_scalar($quantity) ? $quantity : 'unknown';
    $safe_passed = is_bool($passed) ? ($passed ? 'true' : 'false') : 'unknown';
    
    teledox_safe_log("Add to cart validation called - Product: {$safe_product_id}, Quantity: {$safe_quantity}, Passed: {$safe_passed}, Caller: {$caller_info}", 'cart');
    
    // If validation failed, log the current notices to see what messages are being added
    if (!$passed) {
        $notices = wc_get_notices();
        if (!empty($notices)) {
            foreach ($notices as $type => $messages) {
                foreach ($messages as $message) {
                    teledox_safe_log("Notice ({$type}): {$message}", 'cart');
                }
            }
        }
    }
    
    teledox_safe_log("=== VALIDATION DEBUG END (Call #{$call_count}) ===", 'cart');
    return $passed;
}





/**
 * Log cart state after a product is added to the cart.
 * This function is hooked into woocommerce_add_to_cart action.
 */
function teledox_log_cart_after_addition($cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data) {
    teledox_safe_log("=== CART ADDITION DEBUG START ===", 'validation_test');
    teledox_safe_log("Product ID: {$product_id}, Quantity: {$quantity}", 'validation_test');
    teledox_safe_log("Cart Item Key: {$cart_item_key}", 'validation_test');
    teledox_safe_log("Variation ID: {$variation_id}", 'validation_test');
    teledox_safe_log("Variation Data (JSON): " . json_encode($variation), 'validation_test');
    teledox_safe_log("Cart Item Data (JSON): " . json_encode($cart_item_data), 'validation_test');

    $cart = WC()->cart;
    teledox_safe_log("Current Cart Contents (JSON): " . json_encode($cart->get_cart()), 'validation_test');
    
    // Get the full cart item data for detailed product information
    $cart_contents = $cart->get_cart();
    if (isset($cart_contents[$cart_item_key])) {
        $full_cart_item = $cart_contents[$cart_item_key];
        teledox_safe_log("Full Cart Item Data (JSON): " . json_encode($full_cart_item), 'validation_test');
        
        // COMMENTED OUT: Detailed print_r output for complex WooCommerce objects
        // This shows all the detailed data that json_encode cannot serialize, including:
        // - Data stores (report-revenue-stats, etc.)
        // - Complex object structures
        // - All internal WooCommerce data
        // Uncomment this line if you need to see the complete object data structure
        // teledox_safe_log("Full Cart Item Data (print_r): " . print_r($full_cart_item, true), 'validation_test');
    }
    
    teledox_safe_log("Current Cart Totals: " . $cart->get_cart_contents_count(), 'validation_test');
    teledox_safe_log("Current Cart Subtotal: " . $cart->get_subtotal(), 'validation_test');
    teledox_safe_log("Current Cart Total: " . $cart->get_total(), 'validation_test');
    teledox_safe_log("Current Cart Tax: " . $cart->get_total_tax(), 'validation_test');
    teledox_safe_log("Current Cart Shipping: " . $cart->get_shipping_total(), 'validation_test');
    teledox_safe_log("=== CART ADDITION DEBUG END ===", 'validation_test');
}

// Hook into validation at priority 10 to implement our custom quantity limit
add_filter('woocommerce_add_to_cart_validation', 'teledox_test_validation_hook', 10, 3);

// Hook into cart update to see final state after product is added
add_action('woocommerce_add_to_cart', 'teledox_log_cart_after_addition', 10, 6);

/**
 * Prevent WooCommerce from showing duplicate remove item messages
 * This ensures only our custom message shows
 */
function teledox_prevent_duplicate_remove_messages($cart_item_key) {
    teledox_safe_log("=== REMOVE MESSAGE DEBUG START ===", 'cart');
    
    // Add backtrace to see where this function is being called from
    $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 5);
    teledox_safe_log("Remove backtrace type: " . gettype($backtrace), 'cart');
    teledox_safe_log("Remove backtrace count: " . count($backtrace), 'cart');
    
    $caller_info = '';

    foreach ($backtrace as $index => $trace) {
        teledox_safe_log("Remove trace {$index} type: " . gettype($trace), 'cart');
        if (is_array($trace)) {
            teledox_safe_log("Remove trace {$index} keys: " . implode(', ', array_keys($trace)), 'cart');
            if (isset($trace['function'])) {
                teledox_safe_log("Remove trace {$index} function type: " . gettype($trace['function']), 'cart');
                teledox_safe_log("Remove trace {$index} function value: " . print_r($trace['function'], true), 'cart');
            }
        }
        
        if (isset($trace['function']) && $trace['function'] !== 'teledox_prevent_duplicate_remove_messages') {
            $caller_info .= $trace['function'] . ' -> ';
        }
    }
    
    teledox_safe_log("Remove final caller_info type: " . gettype($caller_info), 'cart');
    teledox_safe_log("Remove final caller_info value: " . print_r($caller_info, true), 'cart');
    
    // Ensure caller_info is a string and add debugging
    if (!is_string($caller_info)) {
        teledox_safe_log("WARNING: caller_info is not a string, type: " . gettype($caller_info), 'cart');
        if (is_array($caller_info)) {
            teledox_safe_log("WARNING: caller_info is an array: " . print_r($caller_info, true), 'cart');
        }
        $caller_info = 'unknown';
    }
    
    teledox_safe_log("=== REMOVE ITEM MESSAGE DEBUG START ===", 'cart');
    teledox_safe_log("Cart item key: {$cart_item_key}", 'cart');
    teledox_safe_log("Function called from: {$caller_info}", 'cart');
    teledox_safe_log("Memory usage: " . memory_get_usage(true), 'cart');
    
    // Log all current notices before filtering
    $notices = wc_get_notices();
    teledox_safe_log("Current notices count: " . (is_array($notices) ? count($notices) : 'notices not array'), 'cart');
    
    if (!empty($notices) && is_array($notices)) {
        foreach ($notices as $type => $messages) {
            teledox_safe_log("Notice type '{$type}' has " . count($messages) . " messages", 'cart');
            foreach ($messages as $index => $message) {
                teledox_safe_log("  [{$type}][{$index}]: {$message}", 'cart');
            }
        }
        
        // Remove any 'success' notices that might be about item removal
        if (isset($notices['success'])) {
            $original_count = count($notices['success']);
            teledox_safe_log("Filtering {$original_count} success notices", 'cart');
            
            $filtered_success = array_filter($notices['success'], function($notice) {
                // Remove notices that contain common remove item text
                $remove_texts = array(
                    'removed from cart',
                    'item removed',
                    'cart item removed',
                    'removed from your cart'
                );
                
                foreach ($remove_texts as $text) {
                    if (stripos($notice, $text) !== false) {
                        teledox_safe_log("Filtering out notice: {$notice}", 'cart');
                        return false; // Filter out this notice
                    }
                }
                teledox_safe_log("Keeping notice: {$notice}", 'cart');
                return true; // Keep other success notices
            });
            
            $filtered_count = count($filtered_success);
            teledox_safe_log("After filtering: {$filtered_count} success notices remain", 'cart');
            
            // Update the notices
            $notices['success'] = $filtered_success;
            wc_set_notices($notices);
        }
    } else {
        teledox_safe_log("No notices found or notices not in expected format", 'cart');
    }
    
    teledox_safe_log("=== REMOVE ITEM MESSAGE DEBUG END ===", 'cart');
    return $cart_item_key;
}





/**
 * Test function to verify validation hook is firing
 * This will help us debug the duplicate message issue
 */
function teledox_test_validation_hook($passed, $product_id, $quantity) {
    teledox_safe_log("=== VALIDATION HOOK TEST ===", 'validation_test');
    teledox_safe_log("Called with passed={$passed}, product_id={$product_id}, quantity={$quantity}", 'validation_test');
    
    // Log cart state before adding product
    $cart = WC()->cart;
    $cart_items = $cart->get_cart();
    $total_items = count($cart_items);
    
    teledox_safe_log("CART INSPECTION: Total items in cart: {$total_items}", 'validation_test');
    
    foreach ($cart_items as $cart_item_key => $cart_item) {
        $item_product_id = $cart_item['product_id'];
        $item_quantity = $cart_item['quantity'];
        teledox_safe_log("CART INSPECTION: Item {$cart_item_key} - Product ID: {$item_product_id}, Quantity: {$item_quantity}", 'validation_test');
    }
    
    // Just log - don't block anything yet
    teledox_safe_log("VALIDATION: Allowing addition (no blocking yet)", 'validation_test');
    return $passed;
}



// Hook into WooCommerce validation (just for logging)
add_filter('woocommerce_add_to_cart_validation', 'teledox_test_validation_hook', 10, 3);

// Hook into WooCommerce add to cart (for after-addition logging)
add_action('woocommerce_add_to_cart', 'teledox_log_cart_after_addition', 10, 6);
