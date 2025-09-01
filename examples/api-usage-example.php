<?php
/**
 * API Usage Examples for TeleDox Health
 * This file demonstrates how to use the API connection system
 */

// Example 1: Simple GET request
function example_get_users() {
    $response = teledox_api_request('users', 'GET');
    
    if ($response['success']) {
        $users = $response['data'];
        // Process users data
        return $users;
    } else {
        // Handle error
        error_log('Failed to get users: ' . $response['error']);
        return false;
    }
}

// Example 2: POST request with data
function example_create_user($user_data) {
    $data = array(
        'name' => $user_data['name'],
        'email' => $user_data['email'],
        'role' => $user_data['role']
    );
    
    $response = teledox_api_request('users', 'POST', $data);
    
    if ($response['success']) {
        $new_user = $response['data'];
        // Process new user data
        return $new_user;
    } else {
        // Handle error
        error_log('Failed to create user: ' . $response['error']);
        return false;
    }
}

// Example 3: PUT request to update data
function example_update_user($user_id, $update_data) {
    $endpoint = "users/{$user_id}";
    $response = teledox_api_request($endpoint, 'PUT', $update_data);
    
    if ($response['success']) {
        $updated_user = $response['data'];
        // Process updated user data
        return $updated_user;
    } else {
        // Handle error
        error_log('Failed to update user: ' . $response['error']);
        return false;
    }
}

// Example 4: DELETE request
function example_delete_user($user_id) {
    $endpoint = "users/{$user_id}";
    $response = teledox_api_request($endpoint, 'DELETE');
    
    if ($response['success']) {
        // User deleted successfully
        return true;
    } else {
        // Handle error
        error_log('Failed to delete user: ' . $response['error']);
        return false;
    }
}

// Example 5: Request with custom headers
function example_get_user_with_custom_headers($user_id) {
    $endpoint = "users/{$user_id}";
    $headers = array(
        'Accept-Language' => 'en-US',
        'X-Request-ID' => uniqid()
    );
    
    $response = teledox_api_request($endpoint, 'GET', null, $headers);
    
    if ($response['success']) {
        $user = $response['data'];
        // Process user data
        return $user;
    } else {
        // Handle error
        error_log('Failed to get user: ' . $response['error']);
        return false;
    }
}

// Example 6: Batch operations
function example_batch_create_users($users_array) {
    $results = array();
    
    foreach ($users_array as $user_data) {
        $response = teledox_api_request('users', 'POST', $user_data);
        
        if ($response['success']) {
            $results[] = array(
                'success' => true,
                'data' => $response['data']
            );
        } else {
            $results[] = array(
                'success' => false,
                'error' => $response['error']
            );
        }
    }
    
    return $results;
}

// Example 7: Error handling with retry logic
function example_robust_api_call($endpoint, $method = 'GET', $data = null) {
    $max_attempts = 3;
    $attempt = 1;
    
    while ($attempt <= $max_attempts) {
        $response = teledox_api_request($endpoint, $method, $data);
        
        if ($response['success']) {
            return $response;
        }
        
        // Check if it's a retryable error
        if ($response['status_code'] >= 500) {
            if ($attempt < $max_attempts) {
                $wait_time = pow(2, $attempt - 1); // Exponential backoff
                sleep($wait_time);
                $attempt++;
                continue;
            }
        }
        
        // Non-retryable error or max attempts reached
        break;
    }
    
    return $response;
}

// Example 8: API health monitoring
function example_monitor_api_health() {
    $api = teledox_get_api();
    
    if ($api) {
        $status = $api->get_config_status();
        $health = $api->get_health_status();
        
        return array(
            'config_status' => $status,
            'health_status' => $health
        );
    }
    
    return false;
}

// Example 9: Custom timeout for specific requests
function example_long_running_request($endpoint) {
    $api = teledox_get_api();
    
    if ($api) {
        // Set longer timeout for this specific request
        $api->set_timeout(120); // 2 minutes
        
        $response = $api->make_request($endpoint, 'GET');
        
        // Reset timeout to default
        $api->set_timeout(30);
        
        return $response;
    }
    
    return false;
}

// Example 10: Logging API requests for debugging
function example_logged_api_request($endpoint, $method, $data = null) {
    // Log the request
    msg_teledox_health("Making API request: {$method} {$endpoint}", 'api');
    
    $response = teledox_api_request($endpoint, $method, $data);
    
    // Log the response
    if ($response['success']) {
        msg_teledox_health("API request successful: {$endpoint}", 'api');
    } else {
        msg_teledox_health("API request failed: {$endpoint} - {$response['error']}", 'api');
    }
    
    return $response;
}

// Usage examples:
/*
// Get all users
$users = example_get_users();

// Create a new user
$new_user = example_create_user(array(
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'role' => 'patient'
));

// Update user
$updated_user = example_update_user(123, array('name' => 'Jane Doe'));

// Delete user
$deleted = example_delete_user(123);

// Get API health
$health = example_monitor_api_health();
*/
