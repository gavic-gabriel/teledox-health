/**
 * TeleDox Health Custom Login JavaScript
 * Version 1.2.01
 */

(function($) {
    'use strict';

    // Initialize when document is ready
    $(document).ready(function() {
        initPasswordToggles();
        initFormValidation();
        initFormSubmissions();
        initPhoneFormatting();
    });

    /**
     * Initialize password visibility toggles
     */
    function initPasswordToggles() {
        $('.teledox-password-toggle').on('click', function() {
            const button = $(this);
            const targetId = button.data('target');
            const input = $('#' + targetId);
            const icon = button.find('.teledox-eye-icon');

            if (input.attr('type') === 'password') {
                input.attr('type', 'text');
                icon.addClass('eye-visible');
                button.attr('aria-label', 'Hide Password');
            } else {
                input.attr('type', 'password');
                icon.removeClass('eye-visible');
                button.attr('aria-label', 'Show Password');
            }
        });
    }

    /**
     * Initialize form validation
     */
    function initFormValidation() {
        // Real-time email validation
        $('#email').on('blur', function() {
            validateEmail($(this));
        });

        // Real-time password confirmation
        $('#confirm_password').on('input', function() {
            validatePasswordConfirmation();
        });

        // Real-time phone validation
        $('#phone').on('blur', function() {
            validatePhone($(this));
        });

        // Real-time password strength
        $('#password').on('input', function() {
            validatePasswordStrength($(this));
        });
    }

    /**
     * Initialize form submissions
     */
    function initFormSubmissions() {
        // Login form
        $('#teledox-login-form').on('submit', function(e) {
            e.preventDefault();
            handleLogin();
        });

        // Reset password form
        $('#teledox-reset-password-form').on('submit', function(e) {
            e.preventDefault();
            handlePasswordReset();
        });

        // Reset password entry form (when user clicks link from email)
        $('#teledox-reset-password-entry-form').on('submit', function(e) {
            e.preventDefault();
            handlePasswordResetEntry();
        });

        // New account form
        $('#teledox-new-account-form').on('submit', function(e) {
            e.preventDefault();
            handleNewAccount();
        });
    }

    /**
     * Initialize phone number formatting
     */
    function initPhoneFormatting() {
        $('#phone').on('input', function() {
            let value = $(this).val().replace(/\D/g, '');
            
            if (value.length >= 6) {
                value = value.replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3');
            } else if (value.length >= 3) {
                value = value.replace(/(\d{3})(\d{0,3})/, '$1-$2');
            }
            
            $(this).val(value);
        });
    }

    /**
     * Handle login form submission
     */
    function handleLogin() {
        const form = $('#teledox-login-form');
        const submitBtn = form.find('button[type="submit"]');
        
        if (!validateLoginForm()) {
            return;
        }

        setButtonLoading(submitBtn, true);

        const formData = {
            action: 'teledox_login',
            nonce: teledox_login_ajax.nonce,
            email_or_phone: $('#email_or_phone').val(),
            password: $('#password').val(),
            remember: $('#remember').is(':checked') ? 1 : 0
        };

        $.ajax({
            url: teledox_login_ajax.ajax_url,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    // Redirect will be handled by PHP
                    window.location.href = response.data.redirect_url || '/my-account/';
                } else {
                    showErrorMessage(response.data || teledox_login_ajax.messages.error);
                }
            },
            error: function() {
                showErrorMessage(teledox_login_ajax.messages.error);
            },
            complete: function() {
                setButtonLoading(submitBtn, false);
            }
        });
    }

    /**
     * Handle password reset form submission
     */
    function handlePasswordReset() {
        const form = $('#teledox-reset-password-form');
        const submitBtn = form.find('button[type="submit"]');
        const email = $('#email').val();

        if (!validateEmail($('#email'))) {
            return;
        }

        setButtonLoading(submitBtn, true);

        const formData = {
            action: 'teledox_reset_password',
            nonce: teledox_login_ajax.nonce,
            email: email
        };

        $.ajax({
            url: teledox_login_ajax.ajax_url,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    // Show success message
                    $('.teledox-welcome-section').hide();
                    form.hide();
                    $('#teledox-reset-success').show();
                } else {
                    showErrorMessage(response.data || teledox_login_ajax.messages.error);
                }
            },
            error: function() {
                showErrorMessage(teledox_login_ajax.messages.error);
            },
            complete: function() {
                setButtonLoading(submitBtn, false);
            }
        });
    }

    /**
     * Handle password reset entry form submission
     */
    function handlePasswordResetEntry() {
        const form = $('#teledox-reset-password-entry-form');
        const submitBtn = form.find('button[type="submit"]');
        const pass1 = $('#pass1').val();
        const pass2 = $('#pass2').val();
        const rpKey = $('input[name="rp_key"]').val();
        const rpLogin = $('input[name="rp_login"]').val();

        // Validate passwords
        if (pass1.length < 6) {
            showErrorMessage('Password must be at least 6 characters long');
            return;
        }

        if (pass1 !== pass2) {
            showErrorMessage('Passwords do not match');
            return;
        }

        setButtonLoading(submitBtn, true);

        const formData = {
            action: 'teledox_reset_password_entry',
            nonce: teledox_login_ajax.nonce,
            pass1: pass1,
            pass2: pass2,
            rp_key: rpKey,
            rp_login: rpLogin
        };

        $.ajax({
            url: teledox_login_ajax.ajax_url,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    // Show success message
                    $('.teledox-welcome-section').hide();
                    form.hide();
                    $('.teledox-form-footer').hide();
                    $('#teledox-reset-success').show();
                    
                    // Update success message for password reset completion
                    $('#teledox-reset-success p').html('<strong>Password Reset Complete!</strong><br/>Your password has been successfully updated. You can now log in with your new password.');
                    $('#teledox-reset-success a').attr('href', teledox_login_ajax.login_url).text('Log In');
                } else {
                    showErrorMessage(response.data || 'Password reset failed. Please try again.');
                }
            },
            error: function() {
                showErrorMessage('An error occurred. Please try again.');
            },
            complete: function() {
                setButtonLoading(submitBtn, false);
            }
        });
    }

    /**
     * Handle new account form submission
     */
    function handleNewAccount() {
        const form = $('#teledox-new-account-form');
        const submitBtn = form.find('button[type="submit"]');

        if (!validateNewAccountForm()) {
            return;
        }

        setButtonLoading(submitBtn, true);

        const formData = {
            action: 'teledox_new_account',
            nonce: teledox_login_ajax.nonce,
            full_name: $('#full_name').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            date_of_birth: $('#date_of_birth').val(),
            gender: $('#gender').val(),
            password: $('#password').val(),
            confirm_password: $('#confirm_password').val()
        };

        $.ajax({
            url: teledox_login_ajax.ajax_url,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    // Redirect to My Account
                    window.location.href = response.data.redirect_url || '/my-account/';
                } else {
                    showErrorMessage(response.data || teledox_login_ajax.messages.error);
                }
            },
            error: function() {
                showErrorMessage(teledox_login_ajax.messages.error);
            },
            complete: function() {
                setButtonLoading(submitBtn, false);
            }
        });
    }

    /**
     * Validate login form
     */
    function validateLoginForm() {
        let isValid = true;

        // Clear previous errors
        clearFormErrors();

        // Validate email/phone
        const emailOrPhone = $('#email_or_phone').val().trim();
        if (!emailOrPhone) {
            showFieldError('#email_or_phone', teledox_login_ajax.messages.required_field);
            isValid = false;
        }

        // Validate password
        const password = $('#password').val();
        if (!password) {
            showFieldError('#password', teledox_login_ajax.messages.required_field);
            isValid = false;
        }

        return isValid;
    }

    /**
     * Validate new account form
     */
    function validateNewAccountForm() {
        let isValid = true;

        // Clear previous errors
        clearFormErrors();

        // Validate full name
        const fullName = $('#full_name').val().trim();
        if (!fullName) {
            showFieldError('#full_name', teledox_login_ajax.messages.required_field);
            isValid = false;
        }

        // Validate email
        if (!validateEmail($('#email'))) {
            isValid = false;
        }

        // Validate phone
        if (!validatePhone($('#phone'))) {
            isValid = false;
        }

        // Validate date of birth
        const dateOfBirth = $('#date_of_birth').val();
        if (!dateOfBirth) {
            showFieldError('#date_of_birth', teledox_login_ajax.messages.required_field);
            isValid = false;
        } else {
            // Check if user is at least 18 years old
            const birthDate = new Date(dateOfBirth);
            const today = new Date();
            const age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            
            if (age < 18) {
                showFieldError('#date_of_birth', 'You must be at least 18 years old to create an account.');
                isValid = false;
            }
        }

        // Validate gender
        const gender = $('#gender').val();
        if (!gender) {
            showFieldError('#gender', teledox_login_ajax.messages.required_field);
            isValid = false;
        }

        // Validate password
        if (!validatePasswordStrength($('#password'))) {
            isValid = false;
        }

        // Validate password confirmation
        if (!validatePasswordConfirmation()) {
            isValid = false;
        }

        return isValid;
    }

    /**
     * Validate email field
     */
    function validateEmail(field) {
        const email = field.val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        if (!email) {
            showFieldError(field, teledox_login_ajax.messages.required_field);
            return false;
        }
        
        if (!emailRegex.test(email)) {
            showFieldError(field, teledox_login_ajax.messages.invalid_email);
            return false;
        }
        
        clearFieldError(field);
        return true;
    }

    /**
     * Validate phone field
     */
    function validatePhone(field) {
        const phone = field.val().replace(/\D/g, '');
        
        if (!phone) {
            showFieldError(field, teledox_login_ajax.messages.required_field);
            return false;
        }
        
        if (phone.length !== 10) {
            showFieldError(field, 'Please enter a valid 10-digit phone number.');
            return false;
        }
        
        clearFieldError(field);
        return true;
    }

    /**
     * Validate password strength
     */
    function validatePasswordStrength(field) {
        const password = field.val();
        
        if (!password) {
            showFieldError(field, teledox_login_ajax.messages.required_field);
            return false;
        }
        
        if (password.length < 8) {
            showFieldError(field, 'Password must be at least 8 characters long.');
            return false;
        }
        
        clearFieldError(field);
        return true;
    }

    /**
     * Validate password confirmation
     */
    function validatePasswordConfirmation() {
        const password = $('#password').val();
        const confirmPassword = $('#confirm_password').val();
        
        if (!confirmPassword) {
            showFieldError('#confirm_password', teledox_login_ajax.messages.required_field);
            return false;
        }
        
        if (password !== confirmPassword) {
            showFieldError('#confirm_password', teledox_login_ajax.messages.password_mismatch);
            return false;
        }
        
        clearFieldError('#confirm_password');
        return true;
    }

    /**
     * Show field error
     */
    function showFieldError(fieldSelector, message) {
        const field = $(fieldSelector);
        const formGroup = field.closest('.teledox-form-group');
        
        formGroup.addClass('error');
        
        let errorElement = formGroup.find('.error-message');
        if (errorElement.length === 0) {
            errorElement = $('<div class="error-message"></div>');
            formGroup.append(errorElement);
        }
        
        errorElement.text(message);
    }

    /**
     * Clear field error
     */
    function clearFieldError(fieldSelector) {
        const field = $(fieldSelector);
        const formGroup = field.closest('.teledox-form-group');
        
        formGroup.removeClass('error');
        formGroup.find('.error-message').remove();
    }

    /**
     * Clear all form errors
     */
    function clearFormErrors() {
        $('.teledox-form-group').removeClass('error');
        $('.error-message').remove();
    }

    /**
     * Show error message
     */
    function showErrorMessage(message) {
        // Remove existing error messages
        $('.teledox-error-message').remove();
        
        // Create and show new error message
        const errorHtml = `
            <div class="teledox-error-message">
                <p>${message}</p>
            </div>
        `;
        
        $('.teledox-form').before(errorHtml);
        
        // Scroll to error message
        $('html, body').animate({
            scrollTop: $('.teledox-error-message').offset().top - 100
        }, 500);
    }

    /**
     * Set button loading state
     */
    function setButtonLoading(button, loading) {
        if (loading) {
            button.addClass('loading').prop('disabled', true);
        } else {
            button.removeClass('loading').prop('disabled', false);
        }
    }

})(jQuery);
