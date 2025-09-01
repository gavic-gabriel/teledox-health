<?php
/**
 * Custom Cart Template for TeleDox Health
 * This template provides full control over cart layout while maintaining WooCommerce functionality
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Ensure WooCommerce is active
if (!class_exists('WooCommerce')) {
    return;
}

// Ensure WooCommerce cart is available
if (!function_exists('WC') || !WC()->cart) {
    echo '<p>WooCommerce cart is not available. Please ensure WooCommerce is active.</p>';
    return;
}

// Get cart contents
$cart_items = WC()->cart->get_cart();
$cart_total = WC()->cart->get_total();
$cart_subtotal = WC()->cart->get_subtotal();
$cart_tax_total = WC()->cart->get_total_tax();
$cart_shipping_total = WC()->cart->get_shipping_total();
?>

<div class="teledox-cart-container">
    <!-- DEBUG: Template loaded successfully -->
    <div style="background: #e8f4fd; padding: 10px; margin: 10px 0; border: 1px solid #007cba; border-radius: 4px; font-size: 12px;">
        <strong>DEBUG:</strong> Cart template loaded at <?php echo current_time('H:i:s'); ?>
    </div>
    
    <div class="teledox-cart-header">
        <h2><?php esc_html_e('Your Cart', 'teledox-health'); ?></h2>
        <p class="cart-count"><?php printf(esc_html__('%d items', 'teledox-health'), WC()->cart->get_cart_contents_count()); ?></p>
    </div>

    <?php if (!empty($cart_items)) : ?>
        <div class="teledox-cart-items">
            <?php foreach ($cart_items as $cart_item_key => $cart_item) : ?>
                <?php
                $product = $cart_item['data'];
                $product_id = $cart_item['product_id'];
                $product_permalink = apply_filters('woocommerce_cart_item_permalink', $product->is_visible() ? $product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $product->get_image(), $cart_item, $cart_item_key);
                $product_name = apply_filters('woocommerce_cart_item_name', $product->get_name(), $cart_item, $cart_item_key);
                $product_price = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($product), $cart_item, $cart_item_key);
                $product_subtotal = apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($product, $cart_item['quantity']), $cart_item, $cart_item_key);
                ?>

                <div class="teledox-cart-item" data-cart-item-key="<?php echo esc_attr($cart_item_key); ?>">
                    <div class="cart-item-image">
                        <?php if ($product_permalink) : ?>
                            <a href="<?php echo esc_url($product_permalink); ?>">
                                <?php echo $thumbnail; ?>
                            </a>
                        <?php else : ?>
                            <?php echo $thumbnail; ?>
                        <?php endif; ?>
                    </div>

                    <div class="cart-item-details">
                        <div class="cart-item-name">
                            <?php if ($product_permalink) : ?>
                                <a href="<?php echo esc_url($product_permalink); ?>">
                                    <?php echo esc_html($product_name); ?>
                                </a>
                            <?php else : ?>
                                <?php echo esc_html($product_name); ?>
                            <?php endif; ?>
                        </div>

                        <div class="cart-item-meta">
                            <?php echo wc_get_formatted_cart_item_data($cart_item); ?>
                        </div>

                        <div class="cart-item-price">
                            <?php echo $product_price; ?>
                        </div>
                    </div>

                    <div class="cart-item-quantity">
                        <div class="quantity-controls">
                            <button type="button" class="quantity-btn minus" data-action="decrease">-</button>
                            <input type="number" 
                                   class="quantity-input" 
                                   value="<?php echo esc_attr($cart_item['quantity']); ?>" 
                                   min="1" 
                                   data-cart-item-key="<?php echo esc_attr($cart_item_key); ?>"
                                   data-product-id="<?php echo esc_attr($product_id); ?>" />
                            <button type="button" class="quantity-btn plus" data-action="increase">+</button>
                        </div>
                    </div>

                    <div class="cart-item-subtotal">
                        <?php echo $product_subtotal; ?>
                    </div>

                    <div class="cart-item-remove">
                        <button type="button" class="remove-item-btn" data-cart-item-key="<?php echo esc_attr($cart_item_key); ?>">
                            <span class="remove-icon">×</span>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="teledox-cart-summary">
            <div class="cart-summary-row">
                <span class="summary-label"><?php esc_html_e('Subtotal:', 'teledox-health'); ?></span>
                <span class="summary-value"><?php echo wc_price($cart_subtotal); ?></span>
            </div>

            <?php if ($cart_tax_total > 0) : ?>
                <div class="cart-summary-row">
                    <span class="summary-label"><?php esc_html_e('Tax:', 'teledox-health'); ?></span>
                    <span class="summary-value"><?php echo wc_price($cart_tax_total); ?></span>
                </div>
            <?php endif; ?>

            <?php if ($cart_shipping_total > 0) : ?>
                <div class="cart-summary-row">
                    <span class="summary-label"><?php esc_html_e('Shipping:', 'teledox-health'); ?></span>
                    <span class="summary-value"><?php echo wc_price($cart_shipping_total); ?></span>
                </div>
            <?php endif; ?>

            <div class="cart-summary-row total">
                <span class="summary-label"><?php esc_html_e('Total:', 'teledox-health'); ?></span>
                <span class="summary-value"><?php echo $cart_total; ?></span>
            </div>
        </div>

        <div class="teledox-cart-actions">
            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="continue-shopping-btn">
                <?php esc_html_e('Continue Shopping', 'teledox-health'); ?>
            </a>
            
            <a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="proceed-checkout-btn">
                <?php esc_html_e('Proceed to Checkout', 'teledox-health'); ?>
            </a>
        </div>

    <?php else : ?>
        <div class="teledox-empty-cart">
            <div class="empty-cart-icon">🛒</div>
            <h3><?php esc_html_e('Your cart is empty', 'teledox-health'); ?></h3>
            <p><?php esc_html_e('Looks like you haven\'t added any items to your cart yet.', 'teledox-health'); ?></p>
            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="start-shopping-btn">
                <?php esc_html_e('Start Shopping', 'teledox-health'); ?>
            </a>
        </div>
    <?php endif; ?>
</div>
