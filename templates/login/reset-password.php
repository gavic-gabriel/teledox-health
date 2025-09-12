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
            <div class="teledox-header-with-back">
                <button type="button" class="teledox-back-button" onclick="history.back()">
                    <img src="<?php echo TELEDOX_PLUGIN_URL; ?>/img/icn-back.svg" alt="Back" class="teledox-back-icon">
                </button>
                <h1><?php echo (isset($_GET['action']) && $_GET['action'] === 'rp' && isset($_GET['key']) && isset($_GET['login'])) ? 'Set Password' : 'Reset Password'; ?></h1>
            </div>
            
            <?php if (isset($_GET['action']) && $_GET['action'] === 'rp' && isset($_GET['key']) && isset($_GET['login'])): ?>
                <!-- Password Reset Entry Form -->
                <div class="teledox-welcome-section">
                    <p>Please create a new password with at lest one letter, one number and one unique character.</p>
                </div>
                
                <form id="teledox-reset-password-entry-form" class="teledox-form" method="post">
                    <?php wp_nonce_field('teledox_login_nonce', 'nonce'); ?>
                    <input type="hidden" name="rp_key" value="<?php echo esc_attr($_GET['key']); ?>">
                    <input type="hidden" name="rp_login" value="<?php echo esc_attr($_GET['login']); ?>">
                    
                    <div class="teledox-form-group">
                        <label for="pass1">New Password</label>
                        <div class="teledox-password-input">
                            <input type="password" id="pass1" name="pass1" required>
                            <button type="button" class="teledox-password-toggle" data-target="pass1">
                                <img src="<?php echo TELEDOX_PLUGIN_URL; ?>/img/icn-eye-off.svg" alt="Show Password" class="teledox-eye-icon">
                            </button>
                        </div>
                    </div>
                    
                    <div class="teledox-form-group">
                        <label for="pass2">Confirm New Password</label>
                        <div class="teledox-password-input">
                            <input type="password" id="pass2" name="pass2" required>
                            <button type="button" class="teledox-password-toggle" data-target="pass2">
                                <img src="<?php echo TELEDOX_PLUGIN_URL; ?>/img/icn-eye-off.svg" alt="Show Password" class="teledox-eye-icon">
                            </button>
                        </div>
                    </div>
                    
                    <button type="submit" class="teledox-btn teledox-btn-primary">
                        <span class="btn-text">Reset Password</span>
                        <span class="btn-loading" style="display: none;">Updating...</span>
                    </button>
                </form>
            <?php else: ?>
                <!-- Password Reset Request Form -->
                <div class="teledox-welcome-section">
                    <p><strong>Forgot Your Password?</strong><br/>
                    No worries, it happens! Just enter your email below, and we'll send you a link to reset your password. You'll be back to booking appointments and managing your care in no time!</p>
                </div>
            <?php endif; ?>
            
            <?php if (!isset($_GET['action']) || $_GET['action'] !== 'rp' || !isset($_GET['key']) || !isset($_GET['login'])): ?>
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
            <?php endif; ?>
            
            <div id="teledox-reset-success" class="teledox-success-message" style="display: none;">
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
