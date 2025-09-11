<?php
/**
 * Custom Reset Password Sent Page Template
 * TeleDox Health - Version 1.2.01
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="teledox-login-container">
    <div class="teledox-login-wrapper">
        <div class="teledox-login-form-container">
            <h1>Reset Password</h1>
            
            <div class="teledox-success-message">
                <h2>Check your email.</h2>
                <p>We've sent you a link to reset your password. Please check your inbox (and spam folder, just in case). Follow the instructions in the email to create a new password and get back into your account.</p>
                
                <a href="<?php echo home_url('/reset-password/'); ?>" class="teledox-btn teledox-btn-secondary">Reset Password</a>
                
                <div class="teledox-form-footer">
                    <p>Don't have an account? <a href="<?php echo home_url('/new-account/'); ?>">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
