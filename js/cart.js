/**
 * TeleDox Health Custom Cart JavaScript
 * Handles cart interactions and updates
 */

console.log('[TeleDox Cart] JavaScript file loaded');

jQuery(document).ready(function($) {
    'use strict';

    console.log('[TeleDox Cart] jQuery ready, initializing cart...');

    // Cart functionality
    const TeleDoxCart = {
        init: function() {
            console.log('[TeleDox Cart] Initializing cart functionality...');
            this.bindEvents();
            this.log('Cart initialized');
            console.log('[TeleDox Cart] Cart initialization complete');
        },

        bindEvents: function() {
            console.log('[TeleDox Cart] Binding events...');
            
            // Quantity change events
            $(document).on('click', '.quantity-btn', this.handleQuantityChange.bind(this));
            $(document).on('change', '.quantity-input', this.handleQuantityInputChange.bind(this));
            
            // Remove item events
            $(document).on('click', '.remove-item-btn', this.handleRemoveItem.bind(this));
            
            // Prevent form submission on enter key in quantity inputs
            $(document).on('keydown', '.quantity-input', this.handleQuantityKeydown.bind(this));
            
            console.log('[TeleDox Cart] Events bound successfully');
        },

        handleQuantityChange: function(e) {
            e.preventDefault();
            const $btn = $(e.currentTarget);
            const $input = $btn.siblings('.quantity-input');
            const action = $btn.data('action');
            const currentValue = parseInt($input.val()) || 1;
            
            let newValue = currentValue;
            
            if (action === 'increase') {
                newValue = currentValue + 1;
            } else if (action === 'decrease') {
                newValue = Math.max(1, currentValue - 1);
            }
            
            if (newValue !== currentValue) {
                $input.val(newValue);
                this.updateCartItemQuantity($input);
            }
        },

        handleQuantityInputChange: function(e) {
            const $input = $(e.currentTarget);
            const value = parseInt($input.val()) || 1;
            
            // Ensure minimum value of 1
            if (value < 1) {
                $input.val(1);
            }
            
            this.updateCartItemQuantity($input);
        },

        handleQuantityKeydown: function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                $(e.currentTarget).blur();
            }
        },

        handleRemoveItem: function(e) {
            e.preventDefault();
            const $btn = $(e.currentTarget);
            const cartItemKey = $btn.data('cart-item-key');
            
            // Remove item immediately without confirmation (like WooCommerce default)
            this.removeCartItem(cartItemKey);
        },

        updateCartItemQuantity: function($input) {
            const cartItemKey = $input.data('cart-item-key');
            const productId = $input.data('product-id');
            const quantity = parseInt($input.val()) || 1;
            
            this.log('Updating quantity for item: ' + cartItemKey + ' to: ' + quantity);
            
            // Show loading state
            const $cartItem = $input.closest('.teledox-cart-item');
            $cartItem.addClass('updating');
            
            // Make AJAX request to update cart
            $.ajax({
                url: wc_add_to_cart_params.ajax_url,
                type: 'POST',
                data: {
                    action: 'teledox_update_cart_item_quantity',
                    cart_item_key: cartItemKey,
                    quantity: quantity,
                    product_id: productId,
                    nonce: wc_add_to_cart_params.nonce
                },
                success: function(response) {
                    if (response.success) {
                        TeleDoxCart.handleQuantityUpdateSuccess(response.data);
                    } else {
                        TeleDoxCart.handleQuantityUpdateError(response.data);
                    }
                },
                error: function(xhr, status, error) {
                    TeleDoxCart.handleQuantityUpdateError('Network error occurred');
                    console.error('Cart update error:', error);
                },
                complete: function() {
                    $cartItem.removeClass('updating');
                }
            });
        },

        removeCartItem: function(cartItemKey) {
            this.log('Removing item: ' + cartItemKey);
            
            const $cartItem = $('[data-cart-item-key="' + cartItemKey + '"]');
            $cartItem.addClass('removing');
            
            $.ajax({
                url: wc_add_to_cart_params.ajax_url,
                type: 'POST',
                data: {
                    action: 'teledox_remove_cart_item',
                    cart_item_key: cartItemKey,
                    nonce: wc_add_to_cart_params.nonce
                },
                success: function(response) {
                    if (response.success) {
                        TeleDoxCart.handleRemoveItemSuccess(response.data);
                    } else {
                        TeleDoxCart.handleRemoveItemError(response.data);
                    }
                },
                error: function(xhr, status, error) {
                    TeleDoxCart.handleRemoveItemError('Network error occurred');
                    console.error('Cart remove error:', error);
                },
                complete: function() {
                    $cartItem.removeClass('removing');
                }
            });
        },

        handleQuantityUpdateSuccess: function(data) {
            this.log('Quantity updated successfully');
            
            // Update cart totals and item subtotals
            if (data.cart_totals) {
                this.updateCartTotals(data.cart_totals);
            }
            
            // Show success message
            this.showMessage('Quantity updated successfully', 'success');
            
            // Trigger cart updated event
            $(document).trigger('teledox_cart_updated', [data]);
        },

        handleQuantityUpdateError: function(error) {
            this.log('Quantity update error: ' + error);
            this.showMessage('Failed to update quantity: ' + error, 'error');
        },

        handleRemoveItemSuccess: function(data) {
            this.log('=== REMOVE ITEM SUCCESS DEBUG START ===');
            this.log('Item removed successfully');
            this.log('Data received:', data);
            
            // Remove the item from DOM
            const $cartItem = $('[data-cart-item-key="' + data.cart_item_key + '"]');
            this.log('Found cart item in DOM:', $cartItem.length > 0);
            
            $cartItem.fadeOut(300, function() {
                $(this).remove();
                
                // Check if cart is empty
                if ($('.teledox-cart-item').length === 0) {
                    TeleDoxCart.showEmptyCart();
                }
            });
            
            // Update cart totals
            if (data.cart_totals) {
                this.updateCartTotals(data.cart_totals);
            }
            
            // Show success message
            this.log('About to show success message');
            this.showMessage('Item removed from cart', 'success');
            this.log('Success message shown');
            
            // Trigger cart updated event
            $(document).trigger('teledox_cart_updated', [data]);
            this.log('=== REMOVE ITEM SUCCESS DEBUG END ===');
        },

        handleRemoveItemError: function(error) {
            this.log('Remove item error: ' + error);
            this.showMessage('Failed to remove item: ' + error, 'error');
        },

        updateCartTotals: function(totals) {
            // Update cart summary
            if (totals.subtotal) {
                $('.cart-summary-row .summary-value').each(function() {
                    const $row = $(this).closest('.cart-summary-row');
                    const label = $row.find('.summary-label').text().toLowerCase();
                    
                    if (label.includes('subtotal')) {
                        $(this).html(totals.subtotal);
                    } else if (label.includes('tax') && totals.tax) {
                        $(this).html(totals.tax);
                    } else if (label.includes('shipping') && totals.shipping) {
                        $(this).html(totals.shipping);
                    } else if (label.includes('total')) {
                        $(this).html(totals.total);
                    }
                });
            }
            
            // Update cart count
            if (totals.item_count !== undefined) {
                $('.cart-count').text(totals.item_count + ' items');
            }
        },

        showEmptyCart: function() {
            const emptyCartHTML = `
                <div class="teledox-empty-cart">
                    <div class="empty-cart-icon">🛒</div>
                    <h3>Your cart is empty</h3>
                    <p>Looks like you haven't added any items to your cart yet.</p>
                    <a href="${wc_add_to_cart_params.shop_url}" class="start-shopping-btn">Start Shopping</a>
                </div>
            `;
            
            $('.teledox-cart-items').replaceWith(emptyCartHTML);
        },

        showMessage: function(message, type) {
            this.log('=== SHOW MESSAGE DEBUG ===');
            this.log('Message:', message);
            this.log('Type:', type);
            this.log('Current message count:', $('.teledox-cart-message').length);
            
            const messageClass = 'teledox-cart-message ' + type;
            const $message = $('<div class="' + messageClass + '">' + message + '</div>');
            
            this.log('Created message element:', $message.length > 0);
            
            $('.teledox-cart-container').prepend($message);
            
            this.log('Message added to DOM. New count:', $('.teledox-cart-message').length);
            
            // Auto-remove message after 5 seconds
            setTimeout(function() {
                $message.fadeOut(300, function() {
                    $(this).remove();
                });
            }, 5000);
            
            this.log('=== SHOW MESSAGE DEBUG END ===');
        },

        log: function(message) {
            if (window.console && console.log) {
                console.log('[TeleDox Cart] ' + message);
            }
        }
    };

    // Initialize cart
    TeleDoxCart.init();

    // Make cart instance globally available
    window.TeleDoxCart = TeleDoxCart;
});
