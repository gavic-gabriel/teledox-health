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
                echo "First patient: " . esc_html($data['results'][0]['first_name'] . ' ' . $data['results'][0]['last_name']) . "<br>\n";
            }
        } else {
            echo "❌ <strong>Failed</strong><br>\n";
            echo "Response: " . esc_html($body) . "<br>\n";
        }
    }
    
    echo "<br>\n";
    
    // Summary
    echo "<h3>Summary</h3>\n";
    echo "<p>If all tests passed, your token is working correctly!</p>\n";
    echo "<p><strong>Next steps:</strong></p>\n";
    echo "<ul>\n";
    echo "<li>Use the full test interface: <a href='admin.php?page=teledox-drchrono-postman'>DrChrono Postman Test</a></li>\n";
    echo "<li>Test the API wrapper: <a href='admin.php?page=teledox-drchrono-tests'>DrChrono Tests</a></li>\n";
    echo "<li>Set up webhooks for real-time updates</li>\n";
    echo "</ul>\n";
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
