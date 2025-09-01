# TeleDox Health Custom Cart

This plugin provides a fully customizable cart layout for WooCommerce that gives you complete control over the appearance and functionality while maintaining all WooCommerce features.

## Features

- **Custom Cart Template**: Complete control over cart layout and design
- **AJAX Quantity Updates**: Real-time quantity changes without page reload
- **AJAX Item Removal**: Remove items with smooth animations
- **Responsive Design**: Mobile-friendly layout that adapts to all screen sizes
- **Custom Styling**: Full CSS control over every element
- **WooCommerce Integration**: Maintains all WooCommerce functionality and hooks

## How It Works

### 1. Template Override
The plugin automatically overrides the default WooCommerce cart template (`cart/cart.php`) with our custom template located at `templates/cart.php`.

### 2. Custom Styling
All cart styling is controlled through `css/cart.css`, giving you complete design freedom.

### 3. JavaScript Functionality
Cart interactions (quantity updates, item removal) are handled by `js/cart.js` using AJAX.

## Usage

### Automatic Integration
The custom cart will automatically replace the default WooCommerce cart on any cart page.

### Shortcode Usage
You can also display the custom cart anywhere using the shortcode:

```
[teledox_cart]
```

Optional parameters:
- `show_header="true/false"` - Show/hide cart header
- `show_summary="true/false"` - Show/hide cart summary
- `show_actions="true/false"` - Show/hide cart action buttons

Example:
```
[teledox_cart show_header="false" show_summary="true"]
```

## Customization

### CSS Customization
Edit `css/cart.css` to modify:
- Colors and typography
- Layout and spacing
- Animations and transitions
- Responsive breakpoints

### Template Customization
Modify `templates/cart.php` to change:
- HTML structure
- Content display
- WooCommerce data usage

### JavaScript Customization
Edit `js/cart.js` to modify:
- Cart interactions
- AJAX behavior
- User experience enhancements

## File Structure

```
teledox-health/
├── templates/
│   └── cart.php              # Custom cart template
├── css/
│   └── cart.css              # Cart styling
├── js/
│   └── cart.js               # Cart functionality
└── includes/
    └── cart-functions.php    # PHP integration functions
```

## WooCommerce Hooks Used

- `woocommerce_locate_template` - Template override
- `wp_ajax_teledox_update_cart_item_quantity` - Quantity updates
- `wp_ajax_teledox_remove_cart_item` - Item removal
- `wp_enqueue_scripts` - Asset loading
- `init` - Functionality initialization

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile responsive
- Graceful degradation for older browsers

## Dependencies

- WordPress 5.0+
- WooCommerce 3.0+
- jQuery (included with WordPress)
- PHP 7.4+

## Troubleshooting

### Cart Not Displaying
1. Ensure WooCommerce is active
2. Check that the cart page is set in WooCommerce settings
3. Verify template files exist in the correct locations

### Styling Not Applied
1. Check CSS file path in `cart-functions.php`
2. Verify CSS version number is correct
3. Clear any caching plugins

### AJAX Not Working
1. Check browser console for JavaScript errors
2. Verify nonce creation and verification
3. Ensure WooCommerce AJAX endpoints are accessible

## Support

For issues or questions, check the plugin logs using the `msg_teledox_health()` function or contact the development team.
