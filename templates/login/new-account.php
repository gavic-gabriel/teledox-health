<?php
/**
 * Custom New Account Page Template
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
            <h1>New Account</h1>
            
            <form id="teledox-new-account-form" class="teledox-form" method="post">
                <?php wp_nonce_field('teledox_login_nonce', 'nonce'); ?>
                
                <div class="teledox-form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                
                <div class="teledox-form-group">
                    <label for="password">Password</label>
                    <div class="teledox-password-input">
                        <input type="password" id="password" name="password" required>
                        <button type="button" class="teledox-password-toggle" data-target="password">
                            <span class="show-text">👁️</span>
                            <span class="hide-text" style="display: none;">🙈</span>
                        </button>
                    </div>
                </div>
                
                <div class="teledox-form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <div class="teledox-password-input">
                        <input type="password" id="confirm_password" name="confirm_password" required>
                        <button type="button" class="teledox-password-toggle" data-target="confirm_password">
                            <span class="show-text">👁️</span>
                            <span class="hide-text" style="display: none;">🙈</span>
                        </button>
                    </div>
                </div>
                
                <div class="teledox-form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" 
                           placeholder="example@example.com" required>
                </div>
                
                <div class="teledox-form-group">
                    <label for="phone">Mobile Number</label>
                    <input type="tel" id="phone" name="phone" 
                           placeholder="236-555-8899" required>
                </div>
                
                <div class="teledox-form-group">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" required>
                </div>
                
                <div class="teledox-form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                
                <div class="teledox-form-group">
                    <div class="teledox-terms">
                        <p>By continuing, you agree to<br/>
                        <a href="#" target="_blank">Terms of Use</a> and <a href="#" target="_blank">Privacy Policy</a>.</p>
                    </div>
                </div>
                
                <button type="submit" class="teledox-btn teledox-btn-primary">
                    <span class="btn-text">Sign Up</span>
                    <span class="btn-loading" style="display: none;">Creating Account...</span>
                </button>
                
                <div class="teledox-form-footer">
                    <p>Already have an account? <a href="<?php echo home_url('/login/'); ?>">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>
