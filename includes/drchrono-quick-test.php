<?php
/**
 * Quick DrChrono Token Test
 * Test the token directly without forms
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Quick test function
function teledox_quick_test_drchrono() {
    if (!current_user_can('manage_options')) {
        wp_die('Insufficient permissions');
    }
    
    echo "<h2>Quick DrChrono Token Test</h2>\n";
    
    // Your token from Postman
    $access_token = 'CXGznSEYjrgR5x5z9WGQKDvnGHbPaC';
    $api_base_url = 'https://app.drchrono.com';
    
    echo "<h3>Testing Token: " . esc_html(substr($access_token, 0, 20)) . "...</h3>\n";
    
    // Test 1: Get current user
    echo "<h4>Test 1: GET /api/users/current</h4>\n";
    
    $response = wp_remote_get($api_base_url . '/api/users/current', array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $access_token,
            'Content-Type' => 'application/json',
        ),
        'timeout' => 30,
    ));
    
    if (is_wp_error($response)) {
        echo "❌ <strong>Request failed</strong><br>\n";
        echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
    } else {
        $response_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        echo "Response Code: " . esc_html($response_code) . "<br>\n";
        
        if ($response_code === 200 && $data) {
            echo "✅ <strong>SUCCESS!</strong><br>\n";
            echo "User ID: " . esc_html($data['id']) . "<br>\n";
            echo "Username: " . esc_html($data['username']) . "<br>\n";
            echo "Is Doctor: " . ($data['is_doctor'] ? 'Yes' : 'No') . "<br>\n";
            echo "Is Staff: " . ($data['is_staff'] ? 'Yes' : 'No') . "<br>\n";
        } else {
            echo "❌ <strong>Failed</strong><br>\n";
            echo "Response: " . esc_html($body) . "<br>\n";
        }
    }
    
    echo "<br>\n";
    
    // Test 2: Get offices
    echo "<h4>Test 2: GET /api/offices</h4>\n";
    
    $response = wp_remote_get($api_base_url . '/api/offices', array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $access_token,
            'Content-Type' => 'application/json',
        ),
        'timeout' => 30,
    ));
    
    if (is_wp_error($response)) {
        echo "❌ <strong>Request failed</strong><br>\n";
        echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
    } else {
        $response_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        echo "Response Code: " . esc_html($response_code) . "<br>\n";
        
        if ($response_code === 200 && $data) {
            $count = isset($data['results']) ? count($data['results']) : 0;
            echo "✅ <strong>SUCCESS!</strong> Found {$count} offices<br>\n";
            
            if ($count > 0) {
                echo "First office: " . esc_html($data['results'][0]['name']) . "<br>\n";
            }
        } else {
            echo "❌ <strong>Failed</strong><br>\n";
            echo "Response: " . esc_html($body) . "<br>\n";
        }
    }
    
    echo "<br>\n";
    
    // Test 3: Get doctors
    echo "<h4>Test 3: GET /api/doctors</h4>\n";
    
    $response = wp_remote_get($api_base_url . '/api/doctors', array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $access_token,
            'Content-Type' => 'application/json',
        ),
        'timeout' => 30,
    ));
    
    if (is_wp_error($response)) {
        echo "❌ <strong>Request failed</strong><br>\n";
        echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
    } else {
        $response_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        echo "Response Code: " . esc_html($response_code) . "<br>\n";
        
        if ($response_code === 200 && $data) {
            $count = isset($data['results']) ? count($data['results']) : 0;
            echo "✅ <strong>SUCCESS!</strong> Found {$count} doctors<br>\n";
            
            if ($count > 0) {
                echo "First doctor: " . esc_html($data['results'][0]['first_name'] . ' ' . $data['results'][0]['last_name']) . "<br>\n";
            }
        } else {
            echo "❌ <strong>Failed</strong><br>\n";
            echo "Response: " . esc_html($body) . "<br>\n";
        }
    }
    
    echo "<br>\n";
    
    // Test 4: Get patients (first 5)
    echo "<h4>Test 4: GET /api/patients (first 5)</h4>\n";
    
    $response = wp_remote_get($api_base_url . '/api/patients?page_size=5', array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $access_token,
            'Content-Type' => 'application/json',
        ),
        'timeout' => 30,
    ));
    
    if (is_wp_error($response)) {
        echo "❌ <strong>Request failed</strong><br>\n";
        echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
    } else {
        $response_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        echo "Response Code: " . esc_html($response_code) . "<br>\n";
        
        if ($response_code === 200 && $data) {
            $count = isset($data['results']) ? count($data['results']) : 0;
            echo "✅ <strong>SUCCESS!</strong> Found {$count} patients<br>\n";
            
            if ($count > 0) {
                //echo "First patient: " . esc_html($data['results'][0]['first_name'] . ' ' . $data['results'][0]['last_name']) . "<br>\n";
            }
        } else {
            echo "❌ <strong>Failed</strong><br>\n";
            echo "Response: " . esc_html($body) . "<br>\n";
        }
    }
    
    echo "<br>\n";
    
    // Test 5: Check Availability
    echo "<h4>Test 5: Check Availability</h4>\n";
    
    // Add CSS for the calendar popup
    echo "<style>
        .availability-popup {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        .availability-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 400px;
            border-radius: 5px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover {
            color: black;
        }
        .date-picker, .duration-selector {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .check-availability-btn {
            background-color: #0073aa;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .check-availability-btn:hover {
            background-color: #005a87;
        }
        .availability-results {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
            max-height: 300px;
            overflow-y: auto;
        }
        .time-slot {
            background-color: #e7f3ff;
            margin: 5px 0;
            padding: 8px;
            border-radius: 3px;
            border-left: 4px solid #0073aa;
        }
    </style>\n";
    
    // Add JavaScript for the popup functionality
    echo "<script>
        function openAvailabilityPopup() {
            document.getElementById('availabilityPopup').style.display = 'block';
        }
        
        function closeAvailabilityPopup() {
            document.getElementById('availabilityPopup').style.display = 'none';
        }
        
        function checkAvailability() {
            const date = document.getElementById('availabilityDate').value;
            const duration = document.getElementById('availabilityDuration').value;
            
            if (!date) {
                alert('Please select a date');
                return;
            }
            
            const resultsDiv = document.getElementById('availabilityResults');
            resultsDiv.innerHTML = '<p>Checking availability for ' + date + ' (Duration: ' + duration + ' minutes)...</p>';
            
            // Make AJAX request to check availability
            const xhr = new XMLHttpRequest();
            xhr.open('POST', ajaxurl, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        displayAvailabilityResults(response.data);
                    } else {
                        resultsDiv.innerHTML = '<p style=\"color: red;\">Error: ' + response.data + '</p>';
                    }
                }
            };
            
            const data = 'action=teledox_check_availability&date=' + encodeURIComponent(date) + '&duration=' + encodeURIComponent(duration) + '&nonce=' + '" . wp_create_nonce('teledox_availability_nonce') . "';
            xhr.send(data);
        }
        
        function displayAvailabilityResults(data) {
            const resultsDiv = document.getElementById('availabilityResults');
            let html = '<h4>Availability Results for ' + data.date + '</h4>';
            html += '<p><strong>Doctor ID:</strong> ' + data.doctor + '</p>';
            html += '<p><strong>Duration:</strong> ' + data.duration + ' minutes</p>';
            
            if (data.open_slots && data.open_slots.length > 0) {
                html += '<h5>Available Time Slots:</h5>';
                data.open_slots.forEach(function(slot) {
                    html += '<div class=\"time-slot\">';
                    html += '<strong>' + slot.start + ' - ' + slot.end + '</strong>';
                    if (slot.availability && slot.availability.length > 0) {
                        html += '<br>Available: ';
                        slot.availability.forEach(function(avail, index) {
                            if (index > 0) html += ', ';
                            html += avail.start + '-' + avail.end;
                        });
                    }
                    html += '</div>';
                });
            } else {
                html += '<p>No available time slots for this date.</p>';
            }
            
            resultsDiv.innerHTML = html;
        }
        
        // Close popup when clicking outside
        window.onclick = function(event) {
            const popup = document.getElementById('availabilityPopup');
            if (event.target === popup) {
                closeAvailabilityPopup();
            }
        }
    </script>\n";
    
    echo "<button onclick=\"openAvailabilityPopup()\" class=\"button button-primary\">Check Availability</button>\n";
    
    // Availability popup HTML
    echo "<div id=\"availabilityPopup\" class=\"availability-popup\">\n";
    echo "<div class=\"availability-content\">\n";
    echo "<span class=\"close\" onclick=\"closeAvailabilityPopup()\">&times;</span>\n";
    echo "<h3>Check Doctor Availability</h3>\n";
    echo "<p>Select a date and duration to check availability:</p>\n";
    echo "<input type=\"date\" id=\"availabilityDate\" class=\"date-picker\" min=\"" . date('Y-m-d') . "\">\n";
    echo "<select id=\"availabilityDuration\" class=\"duration-selector\">\n";
    echo "<option value=\"15\">15 minutes</option>\n";
    echo "<option value=\"30\">30 minutes</option>\n";
    echo "<option value=\"45\">45 minutes</option>\n";
    echo "<option value=\"60\" selected>60 minutes</option>\n";
    echo "</select>\n";
    echo "<button onclick=\"checkAvailability()\" class=\"check-availability-btn\">Check Availability</button>\n";
    echo "<div id=\"availabilityResults\" class=\"availability-results\"></div>\n";
    echo "</div>\n";
    echo "</div>\n";
    
    echo "<br>\n";
    
    // Test 6: Get Billing Profiles
    echo "<h4>Test 6: Get Billing Profiles</h4>\n";
    
    $response = wp_remote_get($api_base_url . '/api/billing_profiles', array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $access_token,
            'Content-Type' => 'application/json',
        ),
        'timeout' => 30,
    ));
    
    if (is_wp_error($response)) {
        echo "❌ <strong>Request failed</strong><br>\n";
        echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
    } else {
        $response_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        echo "Response Code: " . esc_html($response_code) . "<br>\n";
        
        if ($response_code === 200 && $data) {
            $count = isset($data['results']) ? count($data['results']) : 0;
            echo "✅ <strong>SUCCESS!</strong> Found {$count} billing profiles<br>\n";
            
            if ($count > 0) {
                echo "<strong>Billing Profiles:</strong><br>\n";
                echo "<details style=\"margin-top: 10px;\">\n";
                echo "<summary style=\"cursor: pointer; font-weight: bold; padding: 5px; background-color: #f0f0f0; border: 1px solid #ccc; border-radius: 3px;\">Click to view all {$count} billing profiles with detailed codes</summary>\n";
                echo "<div style=\"margin-top: 10px; padding: 10px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 3px;\">\n";
                foreach ($data['results'] as $index => $profile) {
                    $profile_num = $index + 1;
                    echo "{$profile_num}. <strong>Name:</strong> " . esc_html($profile['name']) . " | <strong>ID:</strong> " . esc_html($profile['id']) . "<br>\n";
                    
                    // Show CPT codes if available
                    if (isset($profile['cpt_codes']) && !empty($profile['cpt_codes'])) {
                        echo "&nbsp;&nbsp;&nbsp;CPT Codes:<br>\n";
                        foreach ($profile['cpt_codes'] as $cpt_index => $cpt) {
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . ($cpt_index + 1) . ". Code: " . esc_html($cpt['code']);
                            if (isset($cpt['price'])) {
                                echo " | Price: \${$cpt['price']}";
                            }
                            if (isset($cpt['quantity'])) {
                                echo " | Quantity: {$cpt['quantity']}";
                            }
                            if (isset($cpt['modifiers']) && !empty($cpt['modifiers'])) {
                                echo " | Modifiers: " . implode(', ', $cpt['modifiers']);
                            }
                            if (isset($cpt['diagnosis_pointers_icd9']) && !empty($cpt['diagnosis_pointers_icd9'])) {
                                echo " | ICD-9 Pointers: " . implode(', ', $cpt['diagnosis_pointers_icd9']);
                            }
                            if (isset($cpt['diagnosis_pointers_icd10']) && !empty($cpt['diagnosis_pointers_icd10'])) {
                                echo " | ICD-10 Pointers: " . implode(', ', $cpt['diagnosis_pointers_icd10']);
                            }
                            if (isset($cpt['ndc_code']) && !empty($cpt['ndc_code'])) {
                                echo " | NDC Codes: " . count($cpt['ndc_code']) . " codes";
                            }
                            echo "<br>\n";
                        }
                    }
                    
                    // Show HCPCS codes if available
                    if (isset($profile['hcpcs_codes']) && !empty($profile['hcpcs_codes'])) {
                        echo "&nbsp;&nbsp;&nbsp;HCPCS Codes:<br>\n";
                        foreach ($profile['hcpcs_codes'] as $hcpcs_index => $hcpcs) {
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . ($hcpcs_index + 1) . ". Code: " . esc_html($hcpcs['code']);
                            if (isset($hcpcs['price'])) {
                                echo " | Price: \${$hcpcs['price']}";
                            }
                            if (isset($hcpcs['quantity'])) {
                                echo " | Quantity: {$hcpcs['quantity']}";
                            }
                            if (isset($hcpcs['modifiers']) && !empty($hcpcs['modifiers'])) {
                                echo " | Modifiers: " . implode(', ', $hcpcs['modifiers']);
                            }
                            if (isset($hcpcs['diagnosis_pointers_icd9']) && !empty($hcpcs['diagnosis_pointers_icd9'])) {
                                echo " | ICD-9 Pointers: " . implode(', ', $hcpcs['diagnosis_pointers_icd9']);
                            }
                            if (isset($hcpcs['diagnosis_pointers_icd10']) && !empty($hcpcs['diagnosis_pointers_icd10'])) {
                                echo " | ICD-10 Pointers: " . implode(', ', $hcpcs['diagnosis_pointers_icd10']);
                            }
                            if (isset($hcpcs['ndc_code']) && !empty($hcpcs['ndc_code'])) {
                                echo " | NDC Codes: " . count($hcpcs['ndc_code']) . " codes";
                            }
                            echo "<br>\n";
                        }
                    }
                    
                    // Show ICD9 codes if available
                    if (isset($profile['icd9_codes']) && !empty($profile['icd9_codes'])) {
                        echo "&nbsp;&nbsp;&nbsp;ICD-9 Codes: " . implode(', ', $profile['icd9_codes']) . "<br>\n";
                    }
                    
                    // Show ICD10 codes if available
                    if (isset($profile['icd10_codes']) && !empty($profile['icd10_codes'])) {
                        echo "&nbsp;&nbsp;&nbsp;ICD-10 Codes: " . implode(', ', $profile['icd10_codes']) . "<br>\n";
                    }
                    
                    // Show custom procedure codes if available
                    if (isset($profile['custom_procedure_codes']) && !empty($profile['custom_procedure_codes'])) {
                        echo "&nbsp;&nbsp;&nbsp;Custom Procedure Codes:<br>\n";
                        foreach ($profile['custom_procedure_codes'] as $custom_index => $custom) {
                            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . ($custom_index + 1) . ". Code: " . esc_html($custom['code']);
                            if (isset($custom['price'])) {
                                echo " | Price: \${$custom['price']}";
                            }
                            if (isset($custom['quantity'])) {
                                echo " | Quantity: {$custom['quantity']}";
                            }
                            echo "<br>\n";
                        }
                    }
                    
                    echo "<br>\n";
                }
                echo "</div>\n";
                echo "</details>\n";
            }
        } else {
            echo "❌ <strong>Failed</strong><br>\n";
            echo "Response: " . esc_html($body) . "<br>\n";
        }
    }
    
    echo "<br>\n";
    
    // Test 7: Get Consent Forms
    echo "<h4>Test 7: Get Consent Forms</h4>\n";
    
    $response = wp_remote_get($api_base_url . '/api/consent_forms', array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $access_token,
            'Content-Type' => 'application/json',
        ),
        'timeout' => 30,
    ));
    
    if (is_wp_error($response)) {
        echo "❌ <strong>Request failed</strong><br>\n";
        echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
    } else {
        $response_code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        echo "Response Code: " . esc_html($response_code) . "<br>\n";
        
        if ($response_code === 200 && $data) {
            $count = isset($data['results']) ? count($data['results']) : 0;
            echo "✅ <strong>SUCCESS!</strong> Found {$count} consent forms<br>\n";
            
            if ($count > 0) {
                echo "<strong>Consent Forms Summary:</strong><br>\n";
                echo "<details style=\"margin-top: 10px;\">\n";
                echo "<summary style=\"cursor: pointer; font-weight: bold; padding: 5px; background-color: #f0f0f0; border: 1px solid #ccc; border-radius: 3px;\">Click to view all {$count} consent forms</summary>\n";
                echo "<div style=\"margin-top: 10px; padding: 10px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 3px;\">\n";
                foreach ($data['results'] as $index => $form) {
                    $form_num = $index + 1;
                    echo "{$form_num}. <strong>Title:</strong> " . esc_html($form['title']) . " | <strong>ID:</strong> " . esc_html($form['id']) . "<br>\n";
                    echo "&nbsp;&nbsp;&nbsp;Order: " . esc_html($form['order']) . " | Mandatory: " . ($form['is_mandatory'] ? 'Yes' : 'No') . " | Archived: " . ($form['archived'] ? 'Yes' : 'No') . "<br>\n";
                    echo "&nbsp;&nbsp;&nbsp;Created: " . esc_html($form['created_at']) . " | Updated: " . esc_html($form['updated_at']) . "<br>\n";
                    echo "<br>\n";
                }
                echo "</div>\n";
                echo "</details>\n";
            }
        } else {
            echo "❌ <strong>Failed</strong><br>\n";
            echo "Response: " . esc_html($body) . "<br>\n";
        }
    }
    
    echo "<br>\n";
    
    // Summary
    echo "<h3>Summary</h3>\n";
    echo "<p>If all tests passed, the token is working correctly!</p>\n";
    echo "<p><strong>Next steps:</strong></p>\n";
    echo "<ul>\n";
    // echo "<li>Use the full test interface: <a href='admin.php?page=teledox-drchrono-postman'>DrChrono Postman Test</a></li>\n";
    echo "<li>Test the API wrapper: <a href='admin.php?page=teledox-drchrono-tests'>DrChrono Tests</a></li>\n";
    echo "<li>TODO: Set up webhooks for real-time updates</li>\n";
    echo "</ul>\n";
}

// AJAX handler for availability check
add_action('wp_ajax_teledox_check_availability', 'teledox_handle_availability_check');

function teledox_handle_availability_check() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'teledox_availability_nonce')) {
        wp_die('Security check failed');
    }
    
    if (!current_user_can('manage_options')) {
        wp_die('Insufficient permissions');
    }
    
    $date = sanitize_text_field($_POST['date']);
    $duration = sanitize_text_field($_POST['duration']);
    
    if (empty($date)) {
        wp_send_json_error('Date is required');
        return;
    }
    
    // Validate date format
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
        wp_send_json_error('Invalid date format');
        return;
    }
    
    // Validate duration (default to 60 if not provided or invalid)
    $allowed_durations = array('15', '30', '45', '60');
    if (empty($duration) || !in_array($duration, $allowed_durations)) {
        $duration = '60'; // Default to 60 minutes
    }
    
    // Get the stored doctor ID from the API class
    $api = new TeleDox_DrChrono_API();
    $doctor_id = $api->get_drchrono_doctor_id();
    
    if (!$doctor_id) {
        wp_send_json_error('Doctor ID not found. Please ensure you are connected to DrChrono.');
        return;
    }
    
    // Make API request to check availability
    $access_token = 'CXGznSEYjrgR5x5z9WGQKDvnGHbPaC'; // Your token from Postman
    $api_base_url = 'https://app.drchrono.com';
    
    $params = array(
        'date' => $date,
        'doctor' => $doctor_id,
        'duration' => $duration
    );
    
    $url = $api_base_url . '/api/availability?' . http_build_query($params);
    
    $response = wp_remote_get($url, array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $access_token,
            'Content-Type' => 'application/json',
        ),
        'timeout' => 30,
    ));
    
    if (is_wp_error($response)) {
        wp_send_json_error('Request failed: ' . $response->get_error_message());
        return;
    }
    
    $response_code = wp_remote_retrieve_response_code($response);
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    
    if ($response_code === 200 && $data) {
        wp_send_json_success($data);
    } else {
        wp_send_json_error('API request failed. Response: ' . $body);
    }
}

// Add menu for quick test
add_action('admin_menu', function() {
    add_submenu_page(
        'teledox-settings',
        'Quick DrChrono Test',
        'Quick DrChrono Test',
        'manage_options',
        'teledox-drchrono-quick',
        'teledox_quick_test_drchrono'
    );
});
