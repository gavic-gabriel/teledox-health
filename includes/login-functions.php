<?php
/**
 * Custom Login Functions for TeleDox Health
 * Handles custom login flow, page creation, and template redirects
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Create custom login pages on plugin activation
 */
function teledox_create_login_pages() {
    $pages = array(
        'login' => array(
            'title' => 'Login',
            'slug' => 'login',
            'content' => '[teledox_login_form]',
            'template' => 'login'
        ),
        'reset-password' => array(
            'title' => 'Reset Password',
            'slug' => 'reset-password', 
            'content' => '[teledox_reset_password_form]',
            'template' => 'reset-password'
        ),
        'reset-sent' => array(
            'title' => 'Reset Password',
            'slug' => 'reset-sent',
            'content' => '[teledox_reset_sent_message]',
            'template' => 'reset-sent'
        ),
        'new-account' => array(
            'title' => 'New Account',
            'slug' => 'new-account',
            'content' => '[teledox_new_account_form]',
            'template' => 'new-account'
        )
    );
    
    foreach ($pages as $key => $page_data) {
        // Check if page already exists
        $existing_page = get_page_by_path($page_data['slug']);
        
        if (!$existing_page) {
            $page_id = wp_insert_post(array(
                'post_title' => $page_data['title'],
                'post_name' => $page_data['slug'],
                'post_content' => $page_data['content'],
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_author' => 1
            ));
            
            if ($page_id && !is_wp_error($page_id)) {
                // Set custom template
                update_post_meta($page_id, '_wp_page_template', 'teledox-' . $page_data['template'] . '.php');
                msg_teledox_health("Created login page: {$page_data['title']} (ID: {$page_id})", 'login');
            }
        } else {
            msg_teledox_health("Login page already exists: {$page_data['title']} (ID: {$existing_page->ID})", 'login');
        }
    }
}

/**
 * Handle template redirects for custom login pages
 */
function teledox_template_redirect() {
    if (is_page()) {
        global $post;
        
        $template_map = array(
            'login' => 'login.php',
            'reset-password' => 'reset-password.php', 
            'reset-sent' => 'reset-sent.php',
            'new-account' => 'new-account.php'
        );
        
        if (isset($template_map[$post->post_name])) {
            $template_file = TELEDOX_PLUGIN_DIR . '/templates/login/' . $template_map[$post->post_name];
            
            if (file_exists($template_file)) {
                load_template($template_file);
                exit;
            }
        }
    }
}
add_action('template_redirect', 'teledox_template_redirect');

/**
 * Enqueue login-specific styles and scripts
 */
function teledox_enqueue_login_assets() {
    if (is_page(array('login', 'reset-password', 'reset-sent', 'new-account'))) {
        wp_enqueue_style(
            'teledox-login-css',
            TELEDOX_CSS_URI . 'login.css',
            array(),
            '1.2.01'
        );
        
        wp_enqueue_script(
            'teledox-login-js',
            TELEDOX_JS_URI . 'login.js',
            array('jquery'),
            '1.2.01',
            true
        );
        
        // Localize script for AJAX
        wp_localize_script('teledox-login-js', 'teledox_login_ajax', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('teledox_login_nonce'),
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
}
add_action('wp_enqueue_scripts', 'teledox_enqueue_login_assets');

/**
 * Handle login form submission
 */
function teledox_handle_login() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'teledox_login_nonce')) {
        wp_die('Security check failed');
    }
    
    $email_or_phone = sanitize_text_field($_POST['email_or_phone']);
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;
    
    // Try to find user by email first, then by phone
    $user = get_user_by('email', $email_or_phone);
    
    if (!$user) {
        // Try to find by phone number (stored in user meta)
        $users = get_users(array(
            'meta_key' => 'teledox_phone',
            'meta_value' => $email_or_phone
        ));
        
        if (!empty($users)) {
            $user = $users[0];
        }
    }
    
    if ($user && wp_check_password($password, $user->user_pass, $user->ID)) {
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID, $remember);
        
        // Return JSON response for AJAX
        wp_send_json_success(array(
            'message' => 'Login successful',
            'redirect_url' => wc_get_page_permalink('myaccount')
        ));
    } else {
        wp_send_json_error('Invalid email/phone or password');
    }
}
add_action('wp_ajax_teledox_login', 'teledox_handle_login');
add_action('wp_ajax_nopriv_teledox_login', 'teledox_handle_login');

/**
 * Handle password reset request
 */
function teledox_handle_password_reset() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'teledox_login_nonce')) {
        msg_teledox_health('Password reset failed: Security check failed', 'login');
        wp_die('Security check failed');
    }
    
    $email = sanitize_email($_POST['email']);
    msg_teledox_health("Password reset requested for email: {$email}", 'login');
    
    if (!is_email($email)) {
        msg_teledox_health("Password reset failed: Invalid email address: {$email}", 'login');
        wp_send_json_error('Invalid email address');
        return;
    }
    
    $user = get_user_by('email', $email);
    
    if ($user) {
        msg_teledox_health("User found for password reset: User ID {$user->ID}, Username: {$user->user_login}", 'login');
        
        // Generate reset key
        $key = get_password_reset_key($user);
        
        if (!is_wp_error($key)) {
            msg_teledox_health("Password reset key generated successfully for user {$user->ID}", 'login');
            
            // Send reset email (you can customize this)
            $reset_url = add_query_arg(array(
                'action' => 'rp',
                'key' => $key,
                'login' => rawurlencode($user->user_login)
            ), home_url('/reset-password/'));
            
            $subject = 'Password Reset - TeleDox Health';
            $message = "Hello,\n\nYou requested a password reset for your TeleDox Health account.\n\n";
            $message .= "Click the link below to reset your password:\n";
            $message .= $reset_url . "\n\n";
            $message .= "If you didn't request this, please ignore this email.\n\n";
            $message .= "Best regards,\nTeleDox Health Team";
            
            $mail_result = wp_mail($email, $subject, $message);
            
            if ($mail_result) {
                msg_teledox_health("Password reset email sent successfully to {$email} for user {$user->ID}", 'login');
                wp_send_json_success('Reset email sent');
            } else {
                msg_teledox_health("Password reset email failed to send to {$email} for user {$user->ID}", 'login');
                wp_send_json_error('Failed to send reset email');
            }
        } else {
            $error_message = $key->get_error_message();
            msg_teledox_health("Password reset key generation failed for user {$user->ID}: {$error_message}", 'login');
            wp_send_json_error('Unable to generate reset key');
        }
    } else {
        msg_teledox_health("Password reset failed: Email not found in system: {$email}", 'login');
        wp_send_json_error('Email not found');
    }
}
add_action('wp_ajax_teledox_reset_password', 'teledox_handle_password_reset');
add_action('wp_ajax_nopriv_teledox_reset_password', 'teledox_handle_password_reset');

/**
 * Test function to check if wp_mail() is working
 */
function teledox_test_wp_mail() {
    // Check if PHP mail function is available
    if (!function_exists('mail')) {
        msg_teledox_health('PHP mail function is not available', 'login');
        return false;
    }
    
    msg_teledox_health('PHP mail function is available', 'login');
    
    // Test wp_mail with a simple message
    $test_email = 'test@gavicstrategies.com'; // Change this to your email for testing
    $subject = 'TeleDox Health - Mail Test';
    $message = 'This is a test email to verify that wp_mail() is working correctly.';
    
    msg_teledox_health("Testing wp_mail() with email: {$test_email}", 'login');
    
    $result = wp_mail($test_email, $subject, $message);
    
    if ($result) {
        msg_teledox_health('wp_mail() test: SUCCESS - Mail sent successfully', 'login');
        return true;
    } else {
        msg_teledox_health('wp_mail() test: FAILED - Mail failed to send', 'login');
        return false;
    }
}

/**
 * AJAX handler for mail test
 */
function teledox_handle_test_mail() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'teledox_test_mail')) {
        wp_die('Security check failed');
    }
    
    if (!current_user_can('manage_options')) {
        wp_die('Insufficient permissions');
    }
    
    $result = teledox_test_wp_mail();
    
    if ($result) {
        wp_send_json_success('Mail test completed successfully. Check logs for details.');
    } else {
        wp_send_json_error('Mail test failed. Check logs for details.');
    }
}
add_action('wp_ajax_teledox_test_mail', 'teledox_handle_test_mail');

/**
 * Handle new account creation
 */
function teledox_handle_new_account() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'teledox_login_nonce')) {
        wp_die('Security check failed');
    }
    
    $full_name = sanitize_text_field($_POST['full_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $date_of_birth = sanitize_text_field($_POST['date_of_birth']);
    $gender = sanitize_text_field($_POST['gender']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Validation
    if (empty($full_name) || empty($email) || empty($phone) || empty($date_of_birth) || empty($gender) || empty($password)) {
        wp_send_json_error('All fields are required');
        return;
    }
    
    if (!is_email($email)) {
        wp_send_json_error('Invalid email address');
        return;
    }
    
    if ($password !== $confirm_password) {
        wp_send_json_error('Passwords do not match');
        return;
    }
    
    if (strlen($password) < 8) {
        wp_send_json_error('Password must be at least 8 characters long');
        return;
    }
    
    // Check if user already exists
    if (email_exists($email)) {
        wp_send_json_error('An account with this email already exists');
        return;
    }
    
    // Check if phone already exists
    $existing_phone = get_users(array(
        'meta_key' => 'teledox_phone',
        'meta_value' => $phone
    ));
    
    if (!empty($existing_phone)) {
        wp_send_json_error('An account with this phone number already exists');
        return;
    }
    
    // Create WordPress user
    $user_id = wp_create_user($email, $password, $email);
    
    if (is_wp_error($user_id)) {
        wp_send_json_error('Unable to create account: ' . $user_id->get_error_message());
        return;
    }
    
    // Update user meta
    update_user_meta($user_id, 'first_name', $full_name);
    update_user_meta($user_id, 'teledox_phone', $phone);
    update_user_meta($user_id, 'teledox_date_of_birth', $date_of_birth);
    
    // Set user role as customer
    $user = new WP_User($user_id);
    $user->set_role('customer');
    
    // Check/create patient in DrChrono API
    $api_result = teledox_handle_patient_creation($user_id, $full_name, $email, $phone, $date_of_birth, $gender);
    
    if (is_wp_error($api_result)) {
        // Log error but don't fail user creation
        msg_teledox_health('API error during patient creation: ' . $api_result->get_error_message(), 'login');
    }
    
    // Auto-login the user
    wp_set_current_user($user_id);
    wp_set_auth_cookie($user_id);
    
    wp_send_json_success(array(
        'message' => 'Account created successfully',
        'redirect_url' => wc_get_page_permalink('myaccount')
    ));
}
add_action('wp_ajax_teledox_new_account', 'teledox_handle_new_account');
add_action('wp_ajax_nopriv_teledox_new_account', 'teledox_handle_new_account');

/**
 * Handle patient creation/lookup in DrChrono API
 */
function teledox_handle_patient_creation($user_id, $full_name, $email, $phone, $date_of_birth, $gender = 'Other') {
    if (!class_exists('TeleDox_DrChrono_API')) {
        return new WP_Error('api_unavailable', 'DrChrono API not available');
    }
    
    $api = new TeleDox_DrChrono_API();
    
    if (!$api->is_connected()) {
        return new WP_Error('api_not_connected', 'DrChrono API not connected');
    }
    
    // Get doctor ID for patient creation
    $doctor_id = $api->get_drchrono_doctor_id();
    if (!$doctor_id) {
        msg_teledox_health("No doctor ID available for patient creation", 'login');
        return new WP_Error('no_doctor_id', 'No doctor ID available');
    }
    
    // First, try to find existing patient by email using API search
    $existing_patients = $api->get_patients(array('email' => $email));
    
    if (!is_wp_error($existing_patients) && isset($existing_patients['data']['results']) && !empty($existing_patients['data']['results'])) {
        // Search through results to find exact email match
        foreach ($existing_patients['data']['results'] as $patient) {
            if (isset($patient['email']) && $patient['email'] === $email) {
                update_user_meta($user_id, 'teledox_patient_id', $patient['id']);
                msg_teledox_health("Linked existing patient {$patient['id']} to user {$user_id} (email match)", 'login');
                return true;
            }
        }
    }
    
    // Try to find by phone using API search
    $existing_patients = $api->get_patients(array('phone' => $phone));
    
    if (!is_wp_error($existing_patients) && isset($existing_patients['data']['results']) && !empty($existing_patients['data']['results'])) {
        // Search through results to find exact phone match
        foreach ($existing_patients['data']['results'] as $patient) {
            if (isset($patient['cell_phone']) && $patient['cell_phone'] === $phone) {
                update_user_meta($user_id, 'teledox_patient_id', $patient['id']);
                msg_teledox_health("Linked existing patient {$patient['id']} to user {$user_id} (phone match)", 'login');
                return true;
            }
        }
    }
    
    // Split full name into first and last name
    $name_parts = explode(' ', trim($full_name), 2);
    $first_name = $name_parts[0];
    $last_name = isset($name_parts[1]) ? $name_parts[1] : '';
    
    // Create new patient with required fields
    $patient_data = array(
        'doctor' => $doctor_id,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'gender' => $gender,
        'email' => $email,
        'cell_phone' => $phone,
        'date_of_birth' => $date_of_birth
    );
    
    $new_patient = $api->make_request('/api/patients', 'POST', $patient_data);
    
    if (!is_wp_error($new_patient)) {
        $response_code = $new_patient['response_code'] ?? 'Unknown';
        $data = $new_patient['data'] ?? null;
        
        if ($response_code === 201 && $data && isset($data['id'])) {
            update_user_meta($user_id, 'teledox_patient_id', $data['id']);
            msg_teledox_health("Created new patient {$data['id']} for user {$user_id}", 'login');
            return true;
        } else {
            $error_message = "API returned code {$response_code}";
            if ($data && isset($data['error'])) {
                $error_message .= ": " . $data['error'];
            }
            msg_teledox_health("Failed to create patient for user {$user_id}: {$error_message}", 'login');
            return new WP_Error('patient_creation_failed', $error_message);
        }
    } else {
        $error_message = $new_patient->get_error_message();
        msg_teledox_health("Failed to create patient for user {$user_id}: {$error_message}", 'login');
        return new WP_Error('patient_creation_failed', $error_message);
    }
}

/**
 * Add login pages to activation hook
 */
add_action('teledox_plugin_activated', 'teledox_create_login_pages');
