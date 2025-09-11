<?php
/**
 * Custom Reset Password Page Template
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
            
            <div class="teledox-welcome-section">
                <p>Forgot Your Password?<br/>
                No worries, it happens! Just enter your email below, and we'll send you a link to reset your password. You'll be back to booking appointments and managing your care in no time!</p>
            </div>
            
            <form id="teledox-reset-password-form" class="teledox-form" method="post">
                <?php wp_nonce_field('teledox_login_nonce', 'nonce'); ?>
                
                <div class="teledox-form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" 
                           placeholder="example@example.com" required>
                </div>
                
                <button type="submit" class="teledox-btn teledox-btn-primary">
                    <span class="btn-text">Reset Password</span>
                    <span class="btn-loading" style="display: none;">Sending...</span>
                </button>
                
                <div class="teledox-form-footer">
                    <p>Don't have an account? <a href="<?php echo home_url('/new-account/'); ?>">Sign Up</a></p>
                </div>
            </form>
            
            <div id="teledox-reset-success" class="teledox-success-message" style="display: none;">
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
