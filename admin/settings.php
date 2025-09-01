<?php

// Register the menu
function teledox_add_admin_menu() {
    add_menu_page(
        'TeleDox Health Settings', // Page title
        'TeleDox Health', // Menu title
        'manage_options', // Capability required
        'teledox-settings', // Menu slug
        'teledox_settings_page', // Function to display the page
        TELEDOX_PLUGIN_URL . 'img/teledox.svg', // Icon
        30 // Position
    );
}
add_action('admin_menu', 'teledox_add_admin_menu');

// Register settings
function teledox_register_settings() {
    register_setting('teledox_options', 'teledox_debug_mode');
    register_setting('teledox_options', 'teledox_staging_mode');
}
add_action('admin_init', 'teledox_register_settings');

// Create the settings page
function teledox_settings_page() {
    ?>
    <div class="wrap">
        <h1>TeleDox Health Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('teledox_options');
            do_settings_sections('teledox_options');
            ?>
            <table class="form-table">
                <!-- <tr valign="top">
                    <th scope="row">Page ID</th>
                    <td>
                        <input type="text" name="teledox_page_id" 
                               value="<?php echo esc_attr(get_option('teledox_page_id')); ?>" 
                               class="regular-text" />
                        <p class="description">Enter the Page ID (e.g., 22)</p>
                    </td>
                </tr> -->
                <!-- <tr valign="top">
                    <th scope="row">API URL</th>
                    <td>
                        <input type="text" name="teledox_api_url" 
                               value="<?php echo esc_attr(get_option('teledox_api_url')); ?>" 
                               class="regular-text" />
                        <p class="description">Enter the API URL (e.g., https://api.example.com)</p>
                    </td>
                </tr> -->
                <!-- <tr valign="top">
                    <th scope="row">API Key</th>
                    <td>
                        <input type="password" name="teledox_api_key" 
                               value="<?php echo esc_attr(get_option('teledox_api_key')); ?>" 
                               class="regular-text" />
                        <p class="description">Enter your API key</p>
                    </td>
                </tr> -->
                <!-- <tr valign="top">
                    <th scope="row">Footer Name</th>
                    <td>
                        <input type="text" name="teledox_footer_name" 
                               value="<?php echo esc_attr(get_option('teledox_footer_name')); ?>" 
                               class="regular-text" />
                        <p class="description">Enter the Name for the footer (e.g., Anchor Healthcare)</p>
                    </td>
                </tr> -->
                <!-- <tr valign="top">
                    <th scope="row">API URL</th>
                    <td>
                        <input type="text" name="teledox_footer_url" 
                               value="<?php echo esc_attr(get_option('teledox_footer_url')); ?>" 
                               class="regular-text" />
                        <p class="description">Enter the URL for the Footer Name (e.g., https://anchorhealhcare.com)</p>
                    </td>
                </tr> -->
                <!-- <tr valign="top">
                    <th scope="row">Uploads Path</th>
                    <td>
                        <input type="text" name="teledox_uploads_path" 
                               value="<?php echo esc_attr(get_option('teledox_uploads_path')); ?>" 
                               class="regular-text" />
                        <p class="description">Enter the uploads path (e.g., /wp-content/uploads/ah-uploads/)</p>
                    </td>
                </tr> -->
                <!-- <tr valign="top">
                    <th scope="row">GTM Head Code</th>
                    <td>
                        <textarea name="teledox_gtm_head" rows="6" cols="80" class="large-text code"><?php echo esc_textarea(get_option('teledox_gtm_head')); ?></textarea>
                        <p class="description">Enter the complete GTM head code (script tag and content). This will be added to the &lt;head&gt; section of all pages.</p>
                    </td>
                </tr> -->
                <!-- <tr valign="top">
                    <th scope="row">GTM Body Code</th>
                    <td>
                        <textarea name="teledox_gtm_body" rows="6" cols="80" class="large-text code"><?php echo esc_textarea(get_option('teledox_gtm_body')); ?></textarea>
                        <p class="description">Enter the complete GTM body code (noscript tag and content). This will be added immediately after the &lt;body&gt; tag on all pages.</p>
                    </td>
                </tr> -->
                <!-- <tr valign="top">
                    <th scope="row">OpenPhone Inbox Status</th>
                    <td>
                        <label>
                            <input type="checkbox" name="teledox_openphone_inboxstatus" 
                                   value="1" <?php checked(1, get_option('teledox_openphone_inboxstatus'), true); ?> />
                            Set to done
                        </label>
                        <p class="description">Change status of the message from "open" to "done"</p>
                    </td>
                </tr> -->
                <tr valign="top">
                    <th scope="row">Debug Mode</th>
                    <td>
                        <label>
                            <input type="checkbox" name="teledox_debug_mode" 
                                   value="1" <?php checked(1, get_option('teledox_debug_mode'), true); ?> />
                            Enable debug mode
                        </label>
                        <p class="description">Enable detailed logging for troubleshooting</p>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Staging Mode</th>
                    <td>
                        <label>
                            <input type="checkbox" name="teledox_staging_mode" 
                                   value="1" <?php checked(1, get_option('teledox_staging_mode'), true); ?> />
                            Enable staging settings
                        </label>
                        <p class="description">Connect to staging resources</p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// Function to get settings (use this instead of direct constants)
function teledox_get_setting($key) {
    switch ($key) {
        // case 'page_id':
        //     return get_option('teledox_page_id', '16'); // Fallback to constant if not set
        // case 'api_url':
            // return get_option('teledox_api_url', teledox_API_URL); // Fallback to constant if not set
        // case 'api_key':
            // return get_option('teledox_api_key', teledox_API_KEY); // Fallback to constant if not set
        // case 'footer_name':
        //     return get_option('teledox_footer_name', 'Anchor Healthcare'); // Fallback to constant if not set
        // case 'footer_url':
        //     return get_option('teledox_footer_url', 'https://anchorhealthcare.com'); // Fallback to constant if not set   
        // case 'uploads_path':
            // return get_option('teledox_uploads_path', WP_CONTENT_DIR . '/uploads/ah-uploads/'); // Fallback to default
        case 'debug_mode':
            return get_option('teledox_debug_mode', false);
        case 'staging_mode':
            return get_option('teledox_staging_mode', false);
        default:
            return null;
    }
}
/*
// Instead of teledox_API_URL, use:
$api_url = teledox_get_setting('api_url');

// Instead of teledox_API_KEY, use:
$api_key = teledox_get_setting('api_key');

// For uploads path:
$uploads_path = teledox_get_setting('uploads_path');

// For openphone inbox status:
if (teledox_get_setting('openphone_inboxstatus')) {
    // Do debug stuff
}

// For debug mode:
if (teledox_get_setting('debug_mode')) {
    // Do debug stuff
}

// For staging mode:
if (teledox_get_setting('staging_mode')) {
    // Enable staging stuff
}
*/
