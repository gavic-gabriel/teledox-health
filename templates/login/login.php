<?php
/**
 * Custom Login Page Template
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
                <h1>Log In</h1>
            </div>
            
            <div class="teledox-welcome-section">
                <h2>Welcome</h2>
                <p><strong>Hey there, welcome to TeleDox!</strong><br/>
                We make it easy to get personalized Bioidentical Hormone Replacement Therapy (BHRT) from the comfort of your home. No waiting rooms, just real care. Ready to feel like yourself again? Let's get started!</p>
            </div>
            
            <?php if (isset($_GET['login_error'])): ?>
                <div class="teledox-error-message">
                    <p>Invalid email/phone or password. Please try again.</p>
                </div>
            <?php endif; ?>
            
            <form id="teledox-login-form" class="teledox-form" method="post">
                <?php wp_nonce_field('teledox_login_nonce', 'nonce'); ?>
                
                <div class="teledox-form-group">
                    <label for="email_or_phone">Email or Mobile Number</label>
                    <input type="text" id="email_or_phone" name="email_or_phone" 
                           placeholder="example@example.com" required>
                </div>
                
                <div class="teledox-form-group">
                    <label for="password">Password</label>
                    <div class="teledox-password-input">
                        <input type="password" id="password" name="password" required>
                        <button type="button" class="teledox-password-toggle" data-target="password">
                            <img src="<?php echo TELEDOX_PLUGIN_URL; ?>/img/icn-eye-off.svg" alt="Show Password" class="teledox-eye-icon">
                        </button>
                    </div>
                    <div class="teledox-remember-forgot-row">
                        <label class="teledox-checkbox-label">
                            <input type="checkbox" name="remember" value="1">
                            <span class="checkmark"></span>
                            Remember me
                        </label>
                        <div class="teledox-form-links">
                            <a href="<?php echo home_url('/reset-password/'); ?>">Forgot password?</a>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="teledox-btn teledox-btn-primary">
                    <span class="btn-text">Log In</span>
                    <span class="btn-loading" style="display: none;">Please wait...</span>
                </button>
                
                <div class="teledox-form-footer">
                    <p>Don't have an account? <a href="<?php echo home_url('/new-account/'); ?>">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>
