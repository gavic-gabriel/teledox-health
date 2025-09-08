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
    $access_token = 'K38p9QnMgPlzr7Gz0QOM35aFhY5iGd';
    $api_base_url = 'https://app.drchrono.com';
    
    echo "<h3>Testing Token: " . esc_html(substr($access_token, 0, 20)) . "...</h3>\n";
    
    // Performance optimization notice
    echo "<div style='background-color: #fff3cd; border: 1px solid #ffc107; border-radius: 5px; padding: 15px; margin: 10px 0;'>\n";
    echo "<strong>⚡ Performance Optimization:</strong> Most tests now load on button press to improve page load speed. Only essential tests run automatically.\n";
    echo "</div>\n";
    
    // Add CSS for 3-column layout
    echo "<style>
        .test-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 20px 0;
            width: 99%;
            max-width: 99%;
        }
        .test-section {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .test-section h4 {
            margin-top: 0;
            color: #0073aa;
            border-bottom: 2px solid #0073aa;
            padding-bottom: 10px;
        }
        .test-section code {
            background-color: #e1ecf4;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 0.9em;
        }
        .test-button {
            background-color: #0073aa;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }
        .test-button:hover {
            background-color: #005a87;
        }
        .test-button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .test-result {
            margin-top: 15px;
            padding: 10px;
            border-radius: 4px;
            font-size: 14px;
        }
        .test-result.success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        .test-result.error {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }
        .test-result.info {
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            color: #0c5460;
        }
        @media (max-width: 1200px) {
            .test-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 768px) {
            .test-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>\n";
    
    // Start the test grid
    echo "<div class='test-grid'>\n";
    
    // Test 1: Get current user
    echo "<div class='test-section'>\n";
    echo "<h4>Test 1: Get Current User</h4>\n";
    echo "<code>GET /api/users/current</code><br><br>\n";
    
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
    echo "</div>\n"; // Close Test 1 section
    
    // Test 2: Get offices
    echo "<div class='test-section'>\n";
    echo "<h4>Test 2: Get Offices</h4>\n";
    echo "<code>GET /api/offices</code><br><br>\n";
    
    // AJAX button for offices test
    if (true) {
        echo "<button onclick='runTest(\"offices\")' class='test-button' id='offices-btn'>Test Offices</button>\n";
        echo "<div id='offices-result' class='test-result' style='display: none;'></div>\n";
    }
    echo "</div>\n"; // Close Test 2 section
    
    // Test 3: Get doctors
    echo "<div class='test-section'>\n";
    echo "<h4>Test 3: Get Doctors</h4>\n";
    echo "<code>GET /api/doctors</code><br><br>\n";
    
    // AJAX button for doctors test
    if (true) {
        echo "<button onclick='runTest(\"doctors\")' class='test-button' id='doctors-btn'>Test Doctors</button>\n";
        echo "<div id='doctors-result' class='test-result' style='display: none;'></div>\n";
    }
    echo "</div>\n"; // Close Test 3 section
    
    // Test 4: Get patients (first 5)
    echo "<div class='test-section'>\n";
    echo "<h4>Test 4: Get Patients</h4>\n";
    echo "<code>GET /api/patients (first 5)</code><br><br>\n";
    
    // AJAX button for patients test
    if (true) {
        echo "<button onclick='runTest(\"patients\")' class='test-button' id='patients-btn'>Test Patients</button>\n";
        echo "<div id='patients-result' class='test-result' style='display: none;'></div>\n";
    }
    echo "</div>\n"; // Close Test 4 section
    
    // Test 5: Check Availability
    echo "<div class='test-section'>\n";
    echo "<h4>Test 5: Check Availability</h4>\n";
    echo "<code>GET /api/availability</code><br><br>\n";
    
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
    echo "</div>\n"; // Close Test 5 section
    
    // Test 6: Get Billing Profiles
    echo "<div class='test-section'>\n";
    echo "<h4>Test 6: Get Billing Profiles</h4>\n";
    echo "<code>GET /api/billing_profiles</code><br><br>\n";
    
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
    echo "</div>\n"; // Close Test 6 section
    
    // Test 7: Get Consent Forms
    echo "<div class='test-section'>\n";
    echo "<h4>Test 7: Get Consent Forms</h4>\n";
    echo "<code>GET /api/consent_forms</code><br><br>\n";
    
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
    echo "</div>\n"; // Close Test 7 section
    
    // Test 8: Get Patient Payment Logs
    echo "<div class='test-section'>\n";
    echo "<h4>Test 8: Get Patient Payment Logs</h4>\n";
    echo "<code>GET /api/patient_payment_log</code><br><br>\n";
    
    // Get doctor ID from the API class
    $drchrono_api = new TeleDox_DrChrono_API();
    $doctor_id = $drchrono_api->get_drchrono_doctor_id();
    
    if ($doctor_id) {
        $payment_url = $api_base_url . '/api/patient_payment_log?doctor=' . $doctor_id . '&page_size=8';
        
        $response = wp_remote_get($payment_url, array(
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
            echo "Doctor ID Filter: " . esc_html($doctor_id) . "<br>\n";
            
            if ($response_code === 200 && $data) {
                $count = isset($data['results']) ? count($data['results']) : 0;
                echo "✅ <strong>SUCCESS!</strong> Found {$count} payment log entries<br>\n";
                
                // Show pagination info
                if (isset($data['next']) && $data['next']) {
                    echo "📄 <strong>Pagination:</strong> More results available (next page exists)<br>\n";
                }
                if (isset($data['previous']) && $data['previous']) {
                    echo "📄 <strong>Pagination:</strong> Previous page exists<br>\n";
                }
                
                if ($count > 0) {
                    echo "<strong>Payment Log Summary:</strong><br>\n";
                    echo "<details style=\"margin-top: 10px;\">\n";
                    echo "<summary style=\"cursor: pointer; font-weight: bold; padding: 5px; background-color: #f0f0f0; border: 1px solid #ccc; border-radius: 3px;\">Click to view payment log summary</summary>\n";
                    echo "<div style=\"margin-top: 10px; padding: 10px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 3px;\">\n";
                    
                    // Analyze the data to provide a summary
                    $payment_methods = array();
                    $total_amount = 0;
                    $actions = array();
                    $sources = array();
                    
                    foreach ($data['results'] as $payment) {
                        // Count payment methods
                        if (isset($payment['payment_method'])) {
                            $method = $payment['payment_method'];
                            $payment_methods[$method] = ($payment_methods[$method] ?? 0) + 1;
                        }
                        
                        // Sum total amounts
                        if (isset($payment['amount'])) {
                            $total_amount += floatval($payment['amount']);
                        }
                        
                        // Count actions
                        if (isset($payment['action'])) {
                            $action = $payment['action'];
                            $actions[$action] = ($actions[$action] ?? 0) + 1;
                        }
                        
                        // Count sources
                        if (isset($payment['source'])) {
                            $source = $payment['source'];
                            $sources[$source] = ($sources[$source] ?? 0) + 1;
                        }
                    }
                    
                    echo "<strong>Data Analysis Summary:</strong><br>\n";
                    echo "• Total Payment Entries: {$count}<br>\n";
                    echo "• Total Amount: $" . number_format($total_amount, 2) . "<br>\n";
                    
                    if (!empty($payment_methods)) {
                        echo "• Payment Methods:<br>\n";
                        foreach ($payment_methods as $method => $count) {
                            echo "&nbsp;&nbsp;&nbsp;- {$method}: {$count} entries<br>\n";
                        }
                    }
                    
                    if (!empty($actions)) {
                        echo "• Actions:<br>\n";
                        foreach ($actions as $action => $count) {
                            echo "&nbsp;&nbsp;&nbsp;- {$action}: {$count} entries<br>\n";
                        }
                    }
                    
                    if (!empty($sources)) {
                        echo "• Sources:<br>\n";
                        foreach ($sources as $source => $count) {
                            echo "&nbsp;&nbsp;&nbsp;- {$source}: {$count} entries<br>\n";
                        }
                    }
                    
                    echo "<br><em>Note: Full payment log data available but not displayed to keep interface manageable.</em><br>\n";
                    echo "</div>\n";
                    echo "</details>\n";
                }
            } else {
                echo "❌ <strong>Failed</strong><br>\n";
                echo "Response: " . esc_html($body) . "<br>\n";
            }
        }
    } else {
        echo "❌ <strong>Failed</strong> - No doctor ID available<br>\n";
    }
    echo "</div>\n"; // Close Test 8 section
    
    // Test 9: Patient Management (Create & Delete)
    echo "<div class='test-section'>\n";
    echo "<h4>Test 9: Patient Management</h4>\n";
    echo "<code>POST /api/patients</code> | <code>GET /api/patients/{id}</code> | <code>DELETE /api/patients/{id}</code><br><br>\n";
    
    // Add CSS for tabs
    echo "<style>
        .tab-container {
            margin-top: 15px;
        }
        .tab-buttons {
            display: flex;
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
        }
        .tab-button {
            background: none;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            color: #666;
            border-bottom: 3px solid transparent;
            transition: all 0.3s;
        }
        .tab-button.active {
            color: #0073aa;
            border-bottom-color: #0073aa;
            background-color: #f0f8ff;
        }
        .tab-button:hover {
            color: #0073aa;
            background-color: #f9f9f9;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        .delete-warning {
            background-color: #fff3cd;
            border: 1px solid #ffc107;
            border-radius: 5px;
            padding: 15px;
            margin: 15px 0;
            color: #856404;
        }
        .delete-warning strong {
            color: #721c24;
        }
    </style>\n";
    
    // Tab container
    echo "<div class='tab-container'>\n";
    echo "<div class='tab-buttons'>\n";
    echo "<button class='tab-button active' onclick='switchTab(\"create-tab\", this)'>Create Patient</button>\n";
    echo "<button class='tab-button' onclick='switchTab(\"delete-tab\", this)'>Delete Patient</button>\n";
    echo "</div>\n";
    
    // Tab switching JavaScript
    echo "<script>
        function switchTab(tabId, button) {
            // Hide all tab contents
            var contents = document.querySelectorAll('.tab-content');
            contents.forEach(function(content) {
                content.classList.remove('active');
            });
            
            // Remove active class from all buttons
            var buttons = document.querySelectorAll('.tab-button');
            buttons.forEach(function(btn) {
                btn.classList.remove('active');
            });
            
            // Show selected tab and activate button
            document.getElementById(tabId).classList.add('active');
            button.classList.add('active');
        }
        
        // AJAX function for running tests
        function runTest(testType) {
            var button = document.getElementById(testType + '-btn');
            var resultDiv = document.getElementById(testType + '-result');
            
            // Disable button and show loading
            button.disabled = true;
            button.textContent = 'Testing...';
            resultDiv.style.display = 'block';
            resultDiv.innerHTML = '<div class=\"test-result info\">🔄 Running test...</div>';
            
            // Make AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', ajaxurl, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    // Re-enable button
                    button.disabled = false;
                    button.textContent = 'Test ' + testType.charAt(0).toUpperCase() + testType.slice(1);
                    
                    if (xhr.status === 200) {
                        try {
                            var response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                resultDiv.innerHTML = response.data;
                            } else {
                                resultDiv.innerHTML = '<div class=\"test-result error\">❌ Error: ' + response.data + '</div>';
                            }
                        } catch (e) {
                            resultDiv.innerHTML = '<div class=\"test-result error\">❌ Error parsing response</div>';
                        }
                    } else {
                        resultDiv.innerHTML = '<div class=\"test-result error\">❌ Request failed with status: ' + xhr.status + '</div>';
                    }
                }
            };
            
            // Send request
            var data = 'action=teledox_run_test&test_type=' + testType + '&nonce=' + ajax_nonce;
            xhr.send(data);
        }
        
        // Patient management AJAX functions
        function createPatient() {
            var form = document.getElementById('patient-create-form');
            var resultDiv = document.getElementById('patient-create-result');
            var button = document.getElementById('create-patient-btn');
            
            // Disable button and show loading
            button.disabled = true;
            button.textContent = 'Creating Patient...';
            resultDiv.style.display = 'block';
            resultDiv.innerHTML = '<div class=\"test-result info\">🔄 Creating patient...</div>';
            
            // Get form data
            var formData = new FormData(form);
            formData.append('action', 'teledox_patient_action');
            formData.append('patient_action', 'create');
            formData.append('nonce', ajax_nonce);
            
            // Make AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', ajaxurl, true);
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    // Re-enable button
                    button.disabled = false;
                    button.textContent = 'Create Patient';
                    
                    if (xhr.status === 200) {
                        try {
                            var response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                resultDiv.innerHTML = response.data;
                            } else {
                                resultDiv.innerHTML = '<div class=\"test-result error\">❌ Error: ' + response.data + '</div>';
                            }
                        } catch (e) {
                            resultDiv.innerHTML = '<div class=\"test-result error\">❌ Error parsing response</div>';
                        }
                    } else {
                        resultDiv.innerHTML = '<div class=\"test-result error\">❌ Request failed with status: ' + xhr.status + '</div>';
                    }
                }
            };
            
            xhr.send(formData);
        }
        
        function lookupPatient(patientId) {
            var resultDiv = document.getElementById('lookup-result-' + patientId);
            
            resultDiv.style.display = 'block';
            resultDiv.innerHTML = '<div class=\"test-result info\">🔄 Looking up patient...</div>';
            
            // Make AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', ajaxurl, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        try {
                            var response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                resultDiv.innerHTML = response.data;
                            } else {
                                resultDiv.innerHTML = '<div class=\"test-result error\">❌ Error: ' + response.data + '</div>';
                            }
                        } catch (e) {
                            resultDiv.innerHTML = '<div class=\"test-result error\">❌ Error parsing response</div>';
                        }
                    } else {
                        resultDiv.innerHTML = '<div class=\"test-result error\">❌ Request failed with status: ' + xhr.status + '</div>';
                    }
                }
            };
            
            var data = 'action=teledox_patient_action&patient_action=lookup&patient_id=' + patientId + '&nonce=' + ajax_nonce;
            xhr.send(data);
        }
        
        function lookupForDelete() {
            var patientId = document.getElementById('delete-patient-id').value;
            var resultDiv = document.getElementById('delete-result');
            
            if (!patientId) {
                resultDiv.innerHTML = '<div class=\"test-result error\">❌ Please enter a Patient ID</div>';
                resultDiv.style.display = 'block';
                return;
            }
            
            resultDiv.style.display = 'block';
            resultDiv.innerHTML = '<div class=\"test-result info\">🔄 Looking up patient for deletion...</div>';
            
            // Make AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', ajaxurl, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        try {
                            var response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                resultDiv.innerHTML = response.data;
                            } else {
                                resultDiv.innerHTML = '<div class=\"test-result error\">❌ Error: ' + response.data + '</div>';
                            }
                        } catch (e) {
                            resultDiv.innerHTML = '<div class=\"test-result error\">❌ Error parsing response</div>';
                        }
                    } else {
                        resultDiv.innerHTML = '<div class=\"test-result error\">❌ Request failed with status: ' + xhr.status + '</div>';
                    }
                }
            };
            
            var data = 'action=teledox_patient_action&patient_action=lookup_for_delete&patient_id=' + patientId + '&nonce=' + ajax_nonce;
            xhr.send(data);
        }
        
        function confirmDeletePatient(patientId) {
            var resultDiv = document.getElementById('delete-result');
            
            resultDiv.innerHTML = '<div class=\"test-result info\">🔄 Deleting patient...</div>';
            
            // Make AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', ajaxurl, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        try {
                            var response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                resultDiv.innerHTML = response.data;
                            } else {
                                resultDiv.innerHTML = '<div class=\"test-result error\">❌ Error: ' + response.data + '</div>';
                            }
                        } catch (e) {
                            resultDiv.innerHTML = '<div class=\"test-result error\">❌ Error parsing response</div>';
                        }
                    } else {
                        resultDiv.innerHTML = '<div class=\"test-result error\">❌ Request failed with status: ' + xhr.status + '</div>';
                    }
                }
            };
            
            var data = 'action=teledox_patient_action&patient_action=confirm_delete&patient_id=' + patientId + '&nonce=' + ajax_nonce;
            xhr.send(data);
        }
    </script>\n";
    
    // Add AJAX variables
    echo "<script>
        var ajaxurl = '" . admin_url('admin-ajax.php') . "';
        var ajax_nonce = '" . wp_create_nonce('teledox_test_nonce') . "';
    </script>\n";
    
    // Create Patient Tab
    echo "<div id='create-tab' class='tab-content active'>\n";
    
    // Add CSS for the patient creation form
    echo "<style>
        .patient-form {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px 0;
        }
        .patient-form input, .patient-form select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .patient-form button {
            background-color: #0073aa;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin: 5px 5px 5px 0;
        }
        .patient-form button:hover {
            background-color: #005a87;
        }
        .patient-result {
            background-color: #e7f3ff;
            border: 1px solid #0073aa;
            border-radius: 5px;
            padding: 15px;
            margin: 10px 0;
        }
        .patient-lookup {
            background-color: #fff3cd;
            border: 1px solid #ffc107;
            border-radius: 5px;
            padding: 15px;
            margin: 10px 0;
        }
    </style>\n";
    
    // Check if we're processing a patient creation request
    if (isset($_POST['create_patient']) && wp_verify_nonce($_POST['patient_nonce'], 'create_patient_action')) {
        // Get doctor ID from the API class
        $drchrono_api = new TeleDox_DrChrono_API();
        $doctor_id = $drchrono_api->get_drchrono_doctor_id();
        
        if ($doctor_id) {
            // Sanitize form data
            $first_name = sanitize_text_field($_POST['first_name']);
            $last_name = sanitize_text_field($_POST['last_name']);
            $gender = sanitize_text_field($_POST['gender']);
            $date_of_birth = sanitize_text_field($_POST['date_of_birth']);
            $email = sanitize_email($_POST['email']);
            $cell_phone = sanitize_text_field($_POST['cell_phone']);
            
            // Prepare patient data
            $patient_data = array(
                'doctor' => $doctor_id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'gender' => $gender,
                'date_of_birth' => $date_of_birth
            );
            
            // Add optional fields if provided
            if (!empty($email)) {
                $patient_data['email'] = $email;
            }
            if (!empty($cell_phone)) {
                $patient_data['cell_phone'] = $cell_phone;
            }
            
            // Create patient via API
            $response = wp_remote_post($api_base_url . '/api/patients', array(
                'headers' => array(
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json',
                ),
                'body' => json_encode($patient_data),
                'timeout' => 30,
            ));
            
            if (is_wp_error($response)) {
                echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
                echo "❌ <strong>Patient Creation Failed</strong><br>\n";
                echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
                echo "</div>\n";
            } else {
                $response_code = wp_remote_retrieve_response_code($response);
                $body = wp_remote_retrieve_body($response);
                $data = json_decode($body, true);
                
                if ($response_code === 201 && $data && isset($data['id'])) {
                    $patient_id = $data['id'];
                    echo "<div class='patient-result'>\n";
                    echo "✅ <strong>Patient Created Successfully!</strong><br>\n";
                    echo "<strong>Patient ID:</strong> " . esc_html($patient_id) . "<br>\n";
                    echo "<strong>Name:</strong> " . esc_html($first_name . ' ' . $last_name) . "<br>\n";
                    echo "<strong>Gender:</strong> " . esc_html($gender) . "<br>\n";
                    echo "<strong>Date of Birth:</strong> " . esc_html($date_of_birth) . "<br>\n";
                    if (!empty($email)) {
                        echo "<strong>Email:</strong> " . esc_html($email) . "<br>\n";
                    }
                    if (!empty($cell_phone)) {
                        echo "<strong>Phone:</strong> " . esc_html($cell_phone) . "<br>\n";
                    }
                    echo "<strong>Response Code:</strong> " . esc_html($response_code) . "<br>\n";
                    echo "</div>\n";
                    
                    // Store patient ID for lookup
                    echo "<div class='patient-lookup'>\n";
                    echo "<strong>🔍 Patient Lookup</strong><br>\n";
                    echo "Click the button below to retrieve and verify the patient we just created:<br><br>\n";
                    echo "<form method='post' style='display: inline;'>\n";
                    echo wp_nonce_field('lookup_patient_action', 'lookup_nonce', true, false);
                    echo "<input type='hidden' name='lookup_patient_id' value='" . esc_attr($patient_id) . "'>\n";
                    echo "<button type='submit' name='lookup_patient'>Lookup Patient ID: " . esc_html($patient_id) . "</button>\n";
                    echo "</form>\n";
                    echo "</div>\n";
                } else {
                    echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
                    echo "❌ <strong>Patient Creation Failed</strong><br>\n";
                    echo "Response Code: " . esc_html($response_code) . "<br>\n";
                    echo "Response: " . esc_html($body) . "<br>\n";
                    echo "</div>\n";
                }
            }
        } else {
            echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
            echo "❌ <strong>Failed</strong> - No doctor ID available<br>\n";
            echo "</div>\n";
        }
    }
    
    // Check if we're processing a patient lookup request
    if (isset($_POST['lookup_patient']) && wp_verify_nonce($_POST['lookup_nonce'], 'lookup_patient_action')) {
        $patient_id = sanitize_text_field($_POST['lookup_patient_id']);
        
        if ($patient_id) {
            // Lookup patient via API
            $response = wp_remote_get($api_base_url . '/api/patients/' . $patient_id, array(
                'headers' => array(
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json',
                ),
                'timeout' => 30,
            ));
            
            if (is_wp_error($response)) {
                echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
                echo "❌ <strong>Patient Lookup Failed</strong><br>\n";
                echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
                echo "</div>\n";
            } else {
                $response_code = wp_remote_retrieve_response_code($response);
                $body = wp_remote_retrieve_body($response);
                $data = json_decode($body, true);
                
                if ($response_code === 200 && $data) {
                    echo "<div class='patient-result'>\n";
                    echo "✅ <strong>Patient Retrieved Successfully!</strong><br>\n";
                    echo "<strong>Patient ID:</strong> " . esc_html($data['id']) . "<br>\n";
                    echo "<strong>Name:</strong> " . esc_html($data['first_name'] . ' ' . $data['last_name']) . "<br>\n";
                    echo "<strong>Gender:</strong> " . esc_html($data['gender']) . "<br>\n";
                    echo "<strong>Date of Birth:</strong> " . esc_html($data['date_of_birth']) . "<br>\n";
                    if (!empty($data['email'])) {
                        echo "<strong>Email:</strong> " . esc_html($data['email']) . "<br>\n";
                    }
                    if (!empty($data['cell_phone'])) {
                        echo "<strong>Phone:</strong> " . esc_html($data['cell_phone']) . "<br>\n";
                    }
                    echo "<strong>Doctor ID:</strong> " . esc_html($data['doctor']) . "<br>\n";
                    echo "<strong>Response Code:</strong> " . esc_html($response_code) . "<br>\n";
                    echo "</div>\n";
                } else {
                    echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
                    echo "❌ <strong>Patient Lookup Failed</strong><br>\n";
                    echo "Response Code: " . esc_html($response_code) . "<br>\n";
                    echo "Response: " . esc_html($body) . "<br>\n";
                    echo "</div>\n";
                }
            }
        }
    }
    
    // Display patient creation form
    echo "<div class='patient-form'>\n";
    echo "<strong>📝 Create New Test Patient</strong><br><br>\n";
    echo "<form id='patient-create-form'>\n";
    
    echo "<label><strong>First Name *</strong></label><br>\n";
    echo "<input type='text' name='first_name' value='Test' required><br><br>\n";
    
    echo "<label><strong>Last Name *</strong></label><br>\n";
    echo "<input type='text' name='last_name' value='Patient' required><br><br>\n";
    
    echo "<label><strong>Gender *</strong></label><br>\n";
    echo "<select name='gender' required>\n";
    echo "<option value='Male'>Male</option>\n";
    echo "<option value='Female'>Female</option>\n";
    echo "<option value='Other'>Other</option>\n";
    echo "<option value='Prefer not to say'>Prefer not to say</option>\n";
    echo "</select><br><br>\n";
    
    echo "<label><strong>Date of Birth *</strong></label><br>\n";
    echo "<input type='date' name='date_of_birth' value='1990-01-01' required><br><br>\n";
    
    echo "<label><strong>Email (Optional)</strong></label><br>\n";
    echo "<input type='email' name='email' value='test@example.com'><br><br>\n";
    
    echo "<label><strong>Cell Phone (Optional)</strong></label><br>\n";
    echo "<input type='tel' name='cell_phone' value='555-123-4567'><br><br>\n";
    
    echo "<button type='button' id='create-patient-btn' onclick='createPatient()'>Create Patient</button>\n";
    echo "</form>\n";
    echo "<div id='patient-create-result' class='test-result' style='display: none; margin-top: 15px;'></div>\n";
    echo "</div>\n";
    echo "</div>\n"; // Close create-tab
    
    // Delete Patient Tab
    echo "<div id='delete-tab' class='tab-content'>\n";
    
    // Warning message
    echo "<div class='delete-warning'>\n";
    echo "<strong>⚠️ WARNING:</strong> This will permanently delete a patient from DrChrono. This action cannot be undone!\n";
    echo "</div>\n";
    
    // Check if we're processing a patient lookup for deletion
    if (isset($_POST['lookup_for_delete']) && wp_verify_nonce($_POST['delete_nonce'], 'delete_patient_action')) {
        $patient_id = sanitize_text_field($_POST['delete_patient_id']);
        
        if ($patient_id) {
            // Lookup patient via API to show details before deletion
            $response = wp_remote_get($api_base_url . '/api/patients/' . $patient_id, array(
                'headers' => array(
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json',
                ),
                'timeout' => 30,
            ));
            
            if (is_wp_error($response)) {
                echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
                echo "❌ <strong>Patient Lookup Failed</strong><br>\n";
                echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
                echo "</div>\n";
            } else {
                $response_code = wp_remote_retrieve_response_code($response);
                $body = wp_remote_retrieve_body($response);
                $data = json_decode($body, true);
                
                if ($response_code === 200 && $data) {
                    // Show patient details and confirmation form
                    echo "<div class='patient-result' style='background-color: #fff3cd; border-color: #ffc107;'>\n";
                    echo "<strong>🔍 Patient Found - Confirm Deletion</strong><br><br>\n";
                    echo "<strong>Patient Details:</strong><br>\n";
                    echo "<strong>ID:</strong> " . esc_html($data['id']) . "<br>\n";
                    echo "<strong>Name:</strong> " . esc_html($data['first_name'] . ' ' . $data['last_name']) . "<br>\n";
                    echo "<strong>Gender:</strong> " . esc_html($data['gender']) . "<br>\n";
                    echo "<strong>Date of Birth:</strong> " . esc_html($data['date_of_birth']) . "<br>\n";
                    if (!empty($data['email'])) {
                        echo "<strong>Email:</strong> " . esc_html($data['email']) . "<br>\n";
                    }
                    if (!empty($data['cell_phone'])) {
                        echo "<strong>Phone:</strong> " . esc_html($data['cell_phone']) . "<br>\n";
                    }
                    echo "<strong>Doctor ID:</strong> " . esc_html($data['doctor']) . "<br><br>\n";
                    
                    // Confirmation form
                    echo "<div class='delete-warning' style='margin: 15px 0;'>\n";
                    echo "<strong>⚠️ FINAL WARNING:</strong> This will permanently delete this patient record. This action cannot be undone!\n";
                    echo "</div>\n";
                    
                    echo "<form method='post' style='margin-top: 15px;'>\n";
                    echo wp_nonce_field('delete_patient_action', 'delete_nonce', true, false);
                    echo "<input type='hidden' name='confirm_delete_patient_id' value='" . esc_attr($patient_id) . "'>\n";
                    echo "<button type='submit' name='confirm_delete_patient' style='background-color: #dc3545; color: white; padding: 12px 24px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;'>YES, DELETE THIS PATIENT PERMANENTLY</button>\n";
                    echo "</form>\n";
                    echo "</div>\n";
                } else {
                    echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
                    echo "❌ <strong>Patient Not Found</strong><br>\n";
                    echo "Response Code: " . esc_html($response_code) . "<br>\n";
                    echo "Patient ID: " . esc_html($patient_id) . " does not exist or you don't have permission to access it.<br>\n";
                    echo "</div>\n";
                }
            }
        } else {
            echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
            echo "❌ <strong>Failed</strong> - Patient ID is required<br>\n";
            echo "</div>\n";
        }
    }
    
    // Check if we're processing a confirmed delete request
    if (isset($_POST['confirm_delete_patient']) && wp_verify_nonce($_POST['delete_nonce'], 'delete_patient_action')) {
        $patient_id = sanitize_text_field($_POST['confirm_delete_patient_id']);
        
        if ($patient_id) {
            // Delete patient via API
            $response = wp_remote_request($api_base_url . '/api/patients/' . $patient_id, array(
                'method' => 'DELETE',
                'headers' => array(
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json',
                ),
                'timeout' => 30,
            ));
            
            if (is_wp_error($response)) {
                echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
                echo "❌ <strong>Patient Deletion Failed</strong><br>\n";
                echo "Error: " . esc_html($response->get_error_message()) . "<br>\n";
                echo "</div>\n";
            } else {
                $response_code = wp_remote_retrieve_response_code($response);
                
                if ($response_code === 204) {
                    echo "<div class='patient-result' style='background-color: #d4edda; border-color: #c3e6cb;'>\n";
                    echo "✅ <strong>Patient Successfully Deleted</strong><br>\n";
                    echo "Patient ID: " . esc_html($patient_id) . " has been permanently removed from DrChrono.<br>\n";
                    echo "Response Code: " . esc_html($response_code) . " (No Content)<br>\n";
                    echo "</div>\n";
                } else {
                    echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
                    echo "❌ <strong>Patient Deletion Failed</strong><br>\n";
                    echo "Response Code: " . esc_html($response_code) . "<br>\n";
                    $body = wp_remote_retrieve_body($response);
                    if ($body) {
                        echo "Response: " . esc_html($body) . "<br>\n";
                    }
                    echo "</div>\n";
                }
            }
        } else {
            echo "<div class='patient-result' style='background-color: #f8d7da; border-color: #dc3545;'>\n";
            echo "❌ <strong>Failed</strong> - Patient ID is required<br>\n";
            echo "</div>\n";
        }
    }
    
    // Display patient deletion form
    echo "<div class='patient-form'>\n";
    echo "<strong>🗑️ Delete Patient</strong><br><br>\n";
    echo "<form id='patient-delete-form'>\n";
    
    echo "<label><strong>Patient ID *</strong></label><br>\n";
    echo "<input type='text' id='delete-patient-id' placeholder='Enter Patient ID to lookup and delete' required><br><br>\n";
    
    echo "<button type='button' onclick='lookupForDelete()' style='background-color: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;'>Lookup Patient & Confirm Deletion</button>\n";
    echo "</form>\n";
    echo "<div id='delete-result' class='test-result' style='display: none; margin-top: 15px;'></div>\n";
    echo "</div>\n";
    echo "</div>\n"; // Close delete-tab
    
    echo "</div>\n"; // Close tab-container
    echo "</div>\n"; // Close Test 9 section
    echo "</div>\n"; // Close test-grid
    
    // Summary
    echo "<div style='margin-top: 30px; padding: 20px; background-color: #e7f3ff; border: 1px solid #b3d9ff; border-radius: 8px;'>\n";
    echo "<h3>Summary</h3>\n";
    echo "<p>If all tests passed, the token is working correctly!</p>\n";
    echo "<p><strong>Next steps:</strong></p>\n";
    echo "<ul>\n";
    // echo "<li>Use the full test interface: <a href='admin.php?page=teledox-drchrono-postman'>DrChrono Postman Test</a></li>\n";
    echo "<li>Test the API wrapper: <a href='admin.php?page=teledox-drchrono-tests'>DrChrono Tests</a></li>\n";
    echo "<li>TODO: Set up webhooks for real-time updates</li>\n";
    echo "</ul>\n";
    echo "</div>\n";
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
    $access_token = 'K38p9QnMgPlzr7Gz0QOM35aFhY5iGd'; // Your token from Postman
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

// AJAX handler for running tests
add_action('wp_ajax_teledox_run_test', 'teledox_handle_test_request');

function teledox_handle_test_request() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'teledox_test_nonce')) {
        wp_die('Security check failed');
    }
    
    // Check permissions
    if (!current_user_can('manage_options')) {
        wp_die('Insufficient permissions');
    }
    
    $test_type = sanitize_text_field($_POST['test_type']);
    $access_token = 'K38p9QnMgPlzr7Gz0QOM35aFhY5iGd';
    $api_base_url = 'https://app.drchrono.com';
    
    $response_html = '';
    
    switch ($test_type) {
        case 'offices':
            $response = wp_remote_get($api_base_url . '/api/offices', array(
                'headers' => array(
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json',
                ),
                'timeout' => 30,
            ));
            
            if (is_wp_error($response)) {
                $response_html = '<div class=\"test-result error\">❌ <strong>Request failed</strong><br>Error: ' . esc_html($response->get_error_message()) . '</div>';
            } else {
                $response_code = wp_remote_retrieve_response_code($response);
                $body = wp_remote_retrieve_body($response);
                $data = json_decode($body, true);
                
                if ($response_code === 200 && $data) {
                    $count = isset($data['results']) ? count($data['results']) : 0;
                    $response_html = '<div class=\"test-result success">✅ <strong>SUCCESS!</strong> Found ' . $count . ' offices<br>';
                    if ($count > 0) {
                        $response_html .= 'First office: ' . esc_html($data['results'][0]['name']) . '<br>';
                    }
                    $response_html .= 'Response Code: ' . esc_html($response_code) . '</div>';
                } else {
                    $response_html = '<div class=\"test-result error\">❌ <strong>Failed</strong><br>Response: ' . esc_html($body) . '</div>';
                }
            }
            break;
            
        case 'doctors':
            $response = wp_remote_get($api_base_url . '/api/doctors', array(
                'headers' => array(
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json',
                ),
                'timeout' => 30,
            ));
            
            if (is_wp_error($response)) {
                $response_html = '<div class=\"test-result error\">❌ <strong>Request failed</strong><br>Error: ' . esc_html($response->get_error_message()) . '</div>';
            } else {
                $response_code = wp_remote_retrieve_response_code($response);
                $body = wp_remote_retrieve_body($response);
                $data = json_decode($body, true);
                
                if ($response_code === 200 && $data) {
                    $count = isset($data['results']) ? count($data['results']) : 0;
                    $response_html = '<div class=\"test-result success">✅ <strong>SUCCESS!</strong> Found ' . $count . ' doctors<br>';
                    if ($count > 0) {
                        $response_html .= 'First doctor: ' . esc_html($data['results'][0]['first_name'] . ' ' . $data['results'][0]['last_name']) . '<br>';
                    }
                    $response_html .= 'Response Code: ' . esc_html($response_code) . '</div>';
                } else {
                    $response_html = '<div class=\"test-result error\">❌ <strong>Failed</strong><br>Response: ' . esc_html($body) . '</div>';
                }
            }
            break;
            
        case 'patients':
            $response = wp_remote_get($api_base_url . '/api/patients?page_size=5', array(
                'headers' => array(
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json',
                ),
                'timeout' => 30,
            ));
            
            if (is_wp_error($response)) {
                $response_html = '<div class=\"test-result error\">❌ <strong>Request failed</strong><br>Error: ' . esc_html($response->get_error_message()) . '</div>';
            } else {
                $response_code = wp_remote_retrieve_response_code($response);
                $body = wp_remote_retrieve_body($response);
                $data = json_decode($body, true);
                
                if ($response_code === 200 && $data) {
                    $count = isset($data['results']) ? count($data['results']) : 0;
                    $response_html = '<div class=\"test-result success">✅ <strong>SUCCESS!</strong> Found ' . $count . ' patients<br>';
                    if ($count > 0) {
                        // $response_html .= 'First patient: ' . esc_html($data['results'][0]['first_name'] . ' ' . $data['results'][0]['last_name']) . '<br>';
                    }
                    $response_html .= 'Response Code: ' . esc_html($response_code) . '</div>';
                } else {
                    $response_html = '<div class=\"test-result error\">❌ <strong>Failed</strong><br>Response: ' . esc_html($body) . '</div>';
                }
            }
            break;
            
        default:
            $response_html = '<div class=\"test-result error\">❌ <strong>Invalid test type</strong></div>';
    }
    
    wp_send_json_success($response_html);
}

// AJAX handler for patient management actions
add_action('wp_ajax_teledox_patient_action', 'teledox_handle_patient_action');

function teledox_handle_patient_action() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'teledox_test_nonce')) {
        wp_die('Security check failed');
    }
    
    // Check permissions
    if (!current_user_can('manage_options')) {
        wp_die('Insufficient permissions');
    }
    
    $patient_action = sanitize_text_field($_POST['patient_action']);
    $access_token = 'K38p9QnMgPlzr7Gz0QOM35aFhY5iGd';
    $api_base_url = 'https://app.drchrono.com';
    $response_html = '';
    
    switch ($patient_action) {
        case 'create':
            // Handle patient creation
            $drchrono_api = new TeleDox_DrChrono_API();
            $doctor_id = $drchrono_api->get_drchrono_doctor_id();
            
            if ($doctor_id) {
                $first_name = sanitize_text_field($_POST['first_name']);
                $last_name = sanitize_text_field($_POST['last_name']);
                $gender = sanitize_text_field($_POST['gender']);
                $date_of_birth = sanitize_text_field($_POST['date_of_birth']);
                $email = sanitize_email($_POST['email']);
                $cell_phone = sanitize_text_field($_POST['cell_phone']);
                
                $patient_data = array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'gender' => $gender,
                    'date_of_birth' => $date_of_birth,
                    'doctor' => $doctor_id,
                    'email' => $email,
                    'cell_phone' => $cell_phone
                );
                
                $response = wp_remote_post($api_base_url . '/api/patients', array(
                    'headers' => array(
                        'Authorization' => 'Bearer ' . $access_token,
                        'Content-Type' => 'application/json',
                    ),
                    'body' => json_encode($patient_data),
                    'timeout' => 30,
                ));
                
                if (is_wp_error($response)) {
                    $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Patient Creation Failed</strong><br>Error: ' . esc_html($response->get_error_message()) . '</div>';
                } else {
                    $response_code = wp_remote_retrieve_response_code($response);
                    $body = wp_remote_retrieve_body($response);
                    $data = json_decode($body, true);
                    
                    if ($response_code === 201 && $data) {
                        $response_html = '<div class="patient-result" style="background-color: #d4edda; border-color: #c3e6cb;">✅ <strong>Patient Successfully Created!</strong><br>';
                        $response_html .= '<strong>Patient ID:</strong> ' . esc_html($data['id']) . '<br>';
                        $response_html .= '<strong>Name:</strong> ' . esc_html($data['first_name'] . ' ' . $data['last_name']) . '<br>';
                        $response_html .= '<strong>Gender:</strong> ' . esc_html($data['gender']) . '<br>';
                        $response_html .= '<strong>Date of Birth:</strong> ' . esc_html($data['date_of_birth']) . '<br>';
                        if (!empty($data['email'])) {
                            $response_html .= '<strong>Email:</strong> ' . esc_html($data['email']) . '<br>';
                        }
                        if (!empty($data['cell_phone'])) {
                            $response_html .= '<strong>Phone:</strong> ' . esc_html($data['cell_phone']) . '<br>';
                        }
                        $response_html .= '<strong>Doctor ID:</strong> ' . esc_html($data['doctor']) . '<br>';
                        $response_html .= '<strong>Response Code:</strong> ' . esc_html($response_code) . '<br>';
                        $response_html .= '<br><button onclick="lookupPatient(' . esc_js($data['id']) . ')" class="test-button" style="background-color: #28a745;">Lookup Created Patient</button>';
                        $response_html .= '<div id="lookup-result-' . esc_js($data['id']) . '" class=\"test-result" style="display: none; margin-top: 10px;"></div>';
                        $response_html .= '</div>';
                    } else {
                        $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Patient Creation Failed</strong><br>Response Code: ' . esc_html($response_code) . '<br>Response: ' . esc_html($body) . '</div>';
                    }
                }
            } else {
                $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Failed</strong> - No doctor ID available</div>';
            }
            break;
            
        case 'lookup':
            // Handle patient lookup
            $patient_id = sanitize_text_field($_POST['patient_id']);
            
            if ($patient_id) {
                $response = wp_remote_get($api_base_url . '/api/patients/' . $patient_id, array(
                    'headers' => array(
                        'Authorization' => 'Bearer ' . $access_token,
                        'Content-Type' => 'application/json',
                    ),
                    'timeout' => 30,
                ));
                
                if (is_wp_error($response)) {
                    $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Patient Lookup Failed</strong><br>Error: ' . esc_html($response->get_error_message()) . '</div>';
                } else {
                    $response_code = wp_remote_retrieve_response_code($response);
                    $body = wp_remote_retrieve_body($response);
                    $data = json_decode($body, true);
                    
                    if ($response_code === 200 && $data) {
                        $response_html = '<div class="patient-result" style="background-color: #d4edda; border-color: #c3e6cb;">✅ <strong>Patient Lookup Successful!</strong><br>';
                        $response_html .= '<strong>Patient ID:</strong> ' . esc_html($data['id']) . '<br>';
                        $response_html .= '<strong>Name:</strong> ' . esc_html($data['first_name'] . ' ' . $data['last_name']) . '<br>';
                        $response_html .= '<strong>Gender:</strong> ' . esc_html($data['gender']) . '<br>';
                        $response_html .= '<strong>Date of Birth:</strong> ' . esc_html($data['date_of_birth']) . '<br>';
                        if (!empty($data['email'])) {
                            $response_html .= '<strong>Email:</strong> ' . esc_html($data['email']) . '<br>';
                        }
                        if (!empty($data['cell_phone'])) {
                            $response_html .= '<strong>Phone:</strong> ' . esc_html($data['cell_phone']) . '<br>';
                        }
                        $response_html .= '<strong>Doctor ID:</strong> ' . esc_html($data['doctor']) . '<br>';
                        $response_html .= '<strong>Response Code:</strong> ' . esc_html($response_code) . '</div>';
                    } else {
                        $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Patient Lookup Failed</strong><br>Response Code: ' . esc_html($response_code) . '<br>Response: ' . esc_html($body) . '</div>';
                    }
                }
            } else {
                $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Failed</strong> - Patient ID is required</div>';
            }
            break;
            
        case 'lookup_for_delete':
            // Handle patient lookup for deletion
            $patient_id = sanitize_text_field($_POST['patient_id']);
            
            if ($patient_id) {
                $response = wp_remote_get($api_base_url . '/api/patients/' . $patient_id, array(
                    'headers' => array(
                        'Authorization' => 'Bearer ' . $access_token,
                        'Content-Type' => 'application/json',
                    ),
                    'timeout' => 30,
                ));
                
                if (is_wp_error($response)) {
                    $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Patient Lookup Failed</strong><br>Error: ' . esc_html($response->get_error_message()) . '</div>';
                } else {
                    $response_code = wp_remote_retrieve_response_code($response);
                    $body = wp_remote_retrieve_body($response);
                    $data = json_decode($body, true);
                    
                    if ($response_code === 200 && $data) {
                        $response_html = '<div class="patient-result" style="background-color: #fff3cd; border-color: #ffc107;">';
                        $response_html .= '<strong>🔍 Patient Found - Confirm Deletion</strong><br><br>';
                        $response_html .= '<strong>Patient Details:</strong><br>';
                        $response_html .= '<strong>ID:</strong> ' . esc_html($data['id']) . '<br>';
                        $response_html .= '<strong>Name:</strong> ' . esc_html($data['first_name'] . ' ' . $data['last_name']) . '<br>';
                        $response_html .= '<strong>Gender:</strong> ' . esc_html($data['gender']) . '<br>';
                        $response_html .= '<strong>Date of Birth:</strong> ' . esc_html($data['date_of_birth']) . '<br>';
                        if (!empty($data['email'])) {
                            $response_html .= '<strong>Email:</strong> ' . esc_html($data['email']) . '<br>';
                        }
                        if (!empty($data['cell_phone'])) {
                            $response_html .= '<strong>Phone:</strong> ' . esc_html($data['cell_phone']) . '<br>';
                        }
                        $response_html .= '<strong>Doctor ID:</strong> ' . esc_html($data['doctor']) . '<br><br>';
                        
                        $response_html .= '<div class="delete-warning" style="margin: 15px 0;">';
                        $response_html .= '<strong>⚠️ FINAL WARNING:</strong> This will permanently delete this patient record. This action cannot be undone!';
                        $response_html .= '</div>';
                        
                        $response_html .= '<button onclick="confirmDeletePatient(' . esc_js($patient_id) . ')" style="background-color: #dc3545; color: white; padding: 12px 24px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">YES, DELETE THIS PATIENT PERMANENTLY</button>';
                        $response_html .= '</div>';
                    } else {
                        $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Patient Not Found</strong><br>Response Code: ' . esc_html($response_code) . '<br>Patient ID: ' . esc_html($patient_id) . ' does not exist or you don\'t have permission to access it.</div>';
                    }
                }
            } else {
                $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Failed</strong> - Patient ID is required</div>';
            }
            break;
            
        case 'confirm_delete':
            // Handle confirmed patient deletion
            $patient_id = sanitize_text_field($_POST['patient_id']);
            
            if ($patient_id) {
                $response = wp_remote_request($api_base_url . '/api/patients/' . $patient_id, array(
                    'method' => 'DELETE',
                    'headers' => array(
                        'Authorization' => 'Bearer ' . $access_token,
                        'Content-Type' => 'application/json',
                    ),
                    'timeout' => 30,
                ));
                
                if (is_wp_error($response)) {
                    $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Patient Deletion Failed</strong><br>Error: ' . esc_html($response->get_error_message()) . '</div>';
                } else {
                    $response_code = wp_remote_retrieve_response_code($response);
                    
                    if ($response_code === 204) {
                        $response_html = '<div class="patient-result" style="background-color: #d4edda; border-color: #c3e6cb;">✅ <strong>Patient Successfully Deleted</strong><br>Patient ID: ' . esc_html($patient_id) . ' has been permanently removed from DrChrono.<br>Response Code: ' . esc_html($response_code) . ' (No Content)</div>';
                    } else {
                        $body = wp_remote_retrieve_body($response);
                        $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Patient Deletion Failed</strong><br>Response Code: ' . esc_html($response_code) . '<br>';
                        if ($body) {
                            $response_html .= 'Response: ' . esc_html($body) . '<br>';
                        }
                        $response_html .= '</div>';
                    }
                }
            } else {
                $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Failed</strong> - Patient ID is required</div>';
            }
            break;
            
        default:
            $response_html = '<div class="patient-result" style="background-color: #f8d7da; border-color: #dc3545;">❌ <strong>Invalid patient action</strong></div>';
    }
    
    wp_send_json_success($response_html);
}
