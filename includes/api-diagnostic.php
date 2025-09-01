<?php
// api-diagnostic.php

// Basic security check
if (!defined('ABSPATH')) {
    die('Direct access not permitted');
}

function run_api_diagnostics() {
    // Get the same URL and headers as in the main function
    $user_id = 'robert-moghim-md';
    $video_id = 'spinal-cord-stimulation-percutaneous';
    $api_url = TELEDOX_API_URL . '/video_metadata_by_slug/' . $user_id . '/' . $video_id;
    
    msg_teledox_health("Starting API diagnostics for URL: " . $api_url, 'api-diagnostic');
    
    // Initialize cURL
    $ch = curl_init($api_url);
    
    // Get the headers from your existing function
    $headers = get_teledox_api_headers('json');
    $curl_headers = [];
    foreach ($headers['headers'] as $key => $value) {
        $curl_headers[] = "$key: $value";
    }
    
    // Set cURL options
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_VERBOSE => true,
        CURLOPT_HTTPHEADER => $curl_headers,
        CURLOPT_TIMEOUT => 30
    ]);
    
    // Create temp file for verbose output
    $verbose = fopen('php://temp', 'w+');
    curl_setopt($ch, CURLOPT_STDERR, $verbose);
    
    // Start timing
    $start_time = microtime(true);
    
    // Execute request
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    
    // End timing
    $total_time = microtime(true) - $start_time;
    
    // Log timing information
    msg_teledox_health("=== Timing Information ===", 'api-diagnostic');
    msg_teledox_health("DNS Lookup Time: " . number_format($info['namelookup_time'], 4) . " seconds", 'api-diagnostic');
    msg_teledox_health("Connect Time: " . number_format($info['connect_time'], 4) . " seconds", 'api-diagnostic');
    msg_teledox_health("Pre-transfer Time: " . number_format($info['pretransfer_time'], 4) . " seconds", 'api-diagnostic');
    msg_teledox_health("Start Transfer Time: " . number_format($info['starttransfer_time'], 4) . " seconds", 'api-diagnostic');
    msg_teledox_health("Total cURL Time: " . number_format($info['total_time'], 4) . " seconds", 'api-diagnostic');
    msg_teledox_health("Total Execution Time: " . number_format($total_time, 4) . " seconds", 'api-diagnostic');

    // Log response information
    msg_teledox_health("=== Response Information ===", 'api-diagnostic');
    msg_teledox_health("HTTP Code: " . $info['http_code'], 'api-diagnostic');
    msg_teledox_health("Content Type: " . $info['content_type'], 'api-diagnostic');
    msg_teledox_health("Response Size: " . number_format($info['size_download'] / 1024, 2) . " KB", 'api-diagnostic');
    msg_teledox_health("Speed: " . number_format($info['speed_download'] / 1024, 2) . " KB/s", 'api-diagnostic');

    // Log request information
    msg_teledox_health("=== Request Information ===", 'api-diagnostic');
    msg_teledox_health("URL: " . $info['url'], 'api-diagnostic');
    msg_teledox_health("Method: " . ($info['request_size'] ? 'POST' : 'GET'), 'api-diagnostic');
    
    // Log headers
    msg_teledox_health("=== Request Headers ===", 'api-diagnostic');
    foreach ($curl_headers as $header) {
        msg_teledox_health($header, 'api-diagnostic');
    }

    // Get verbose output
    rewind($verbose);
    $verbose_log = stream_get_contents($verbose);
    
    // Log verbose output
    msg_teledox_health("=== Verbose Log ===", 'api-diagnostic');
    msg_teledox_health($verbose_log, 'api-diagnostic');
    
    curl_close($ch);
    fclose($verbose);
}

// Add an admin menu item to run diagnostics
add_action('admin_menu', function() {
    add_submenu_page(
        'tools.php',
        'API Diagnostics',
        'API Diagnostics',
        'manage_options',
        'api-diagnostics',
        function() {
            echo '<div class="wrap">';
            echo '<h1>API Diagnostics</h1>';
            if (isset($_POST['run_diagnostics'])) {
                run_api_diagnostics();
                echo '<div class="notice notice-info"><p>Diagnostics completed. Check the logs for results.</p></div>';
            }
            echo '<form method="post">';
            echo '<p><input type="submit" name="run_diagnostics" class="button button-primary" value="Run Diagnostics"></p>';
            echo '</form>';
            echo '</div>';
        }
    );
});
