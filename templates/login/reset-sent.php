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
            <div class="teledox-header-with-back">
                <button type="button" class="teledox-back-button" onclick="history.back()">
                    <img src="<?php echo TELEDOX_PLUGIN_URL; ?>/img/icn-back.svg" alt="Back" class="teledox-back-icon">
                </button>
                <h1>Reset Password</h1>
            </div>
            
            <div class="teledox-success-message">
                <p><strong>Check your email.</strong><br/>We've sent you a link to reset your password. Please check your inbox (and spam folder, just in case). Follow the instructions in the email to create a new password and get back into your account.</p>
                
                <a href="<?php echo home_url('/reset-password/'); ?>" class="teledox-btn teledox-btn-primary">Reset Password</a>
                
                <div class="teledox-form-footer">
                    <p>Don't have an account? <a href="<?php echo home_url('/new-account/'); ?>">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
