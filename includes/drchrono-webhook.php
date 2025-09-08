<?php
/**
 * DrChrono Webhook Handler
 * Handles incoming webhooks from DrChrono
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class TeleDox_DrChrono_Webhook {
    
    private $webhook_secret = '~zb?)TS3#a2jV}2b5#/X;8d0';
    
    public function __construct() {
        add_action('init', array($this, 'handle_webhook_request'));
    }
    
    /**
     * Handle incoming webhook requests
     */
    public function handle_webhook_request() {
        // Check if this is a webhook request
        if (!isset($_GET['teledox_webhook']) || $_GET['teledox_webhook'] !== 'drchrono') {
            return;
        }
        
        // Only allow POST requests
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            exit('Method not allowed');
        }
        
        // Get headers
        $event = isset($_SERVER['HTTP_X_DRCHRONO_EVENT']) ? $_SERVER['HTTP_X_DRCHRONO_EVENT'] : '';
        $signature = isset($_SERVER['HTTP_X_DRCHRONO_SIGNATURE']) ? $_SERVER['HTTP_X_DRCHRONO_SIGNATURE'] : '';
        $delivery_id = isset($_SERVER['HTTP_X_DRCHRONO_DELIVERY']) ? $_SERVER['HTTP_X_DRCHRONO_DELIVERY'] : '';
        
        // Get request body
        $body = file_get_contents('php://input');
        $data = json_decode($body, true);
        
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->log_error('Invalid JSON in webhook body');
            http_response_code(400);
            exit('Invalid JSON');
        }
        
        // Handle verification request
        if ($event === 'PING' || isset($_GET['msg'])) {
            $this->handle_verification($_GET['msg'] ?? '');
            return;
        }
        
        // Verify webhook signature
        if (!$this->verify_signature($signature, $body)) {
            $this->log_error('Invalid webhook signature');
            http_response_code(401);
            exit('Unauthorized');
        }
        
        // Process the webhook
        $this->process_webhook($event, $data, $delivery_id);
        
        // Return success
        http_response_code(200);
        exit('OK');
    }
    
    /**
     * Handle webhook verification
     */
    private function handle_verification($msg) {
        if (empty($msg)) {
            http_response_code(400);
            exit('Missing verification message');
        }
        
        // Generate HMAC signature
        $secret_token = hash_hmac('sha256', $msg, $this->webhook_secret);
        
        // Return verification response
        header('Content-Type: application/json');
        echo json_encode(array('secret_token' => $secret_token));
        exit;
    }
    
    /**
     * Verify webhook signature
     */
    private function verify_signature($signature, $body) {
        if (empty($signature)) {
            return false;
        }
        
        $expected_signature = hash_hmac('sha256', $body, $this->webhook_secret);
        
        return hash_equals($expected_signature, $signature);
    }
    
    /**
     * Process webhook data
     */
    private function process_webhook($event, $data, $delivery_id) {
        $this->log_success("Received webhook: {$event} (Delivery: {$delivery_id})");
        
        // Log the webhook data for debugging
        if (function_exists('msg_teledox_health')) {
            msg_teledox_health("Webhook Data: " . json_encode($data), 'DrChrono Webhook');
        }
        
        // Process based on event type
        switch ($event) {
            case 'APPOINTMENT_CREATE':
                $this->handle_appointment_create($data);
                break;
                
            case 'APPOINTMENT_MODIFY':
                $this->handle_appointment_modify($data);
                break;
                
            case 'APPOINTMENT_DELETE':
                $this->handle_appointment_delete($data);
                break;
                
            case 'PATIENT_CREATE':
                $this->handle_patient_create($data);
                break;
                
            case 'PATIENT_MODIFY':
                $this->handle_patient_modify($data);
                break;
                
            case 'CLINICAL_NOTE_LOCK':
                $this->handle_clinical_note_lock($data);
                break;
                
            case 'CLINICAL_NOTE_UNLOCK':
                $this->handle_clinical_note_unlock($data);
                break;
                
            case 'LAB_ORDER_CREATE':
                $this->handle_lab_order_create($data);
                break;
                
            case 'LAB_ORDER_MODIFY':
                $this->handle_lab_order_modify($data);
                break;
                
            case 'LAB_ORDER_DELETE':
                $this->handle_lab_order_delete($data);
                break;
                
            case 'TASK_CREATE':
                $this->handle_task_create($data);
                break;
                
            case 'TASK_MODIFY':
                $this->handle_task_modify($data);
                break;
                
            case 'TASK_DELETE':
                $this->handle_task_delete($data);
                break;
                
            default:
                $this->log_error("Unhandled webhook event: {$event}");
                break;
        }
    }
    
    /**
     * Handle appointment creation
     */
    private function handle_appointment_create($data) {
        $appointment = $data['object'] ?? null;
        if (!$appointment) {
            return;
        }
        
        $this->log_success("New appointment created: ID {$appointment['id']} for patient {$appointment['patient']}");
        
        // Store appointment data
        $this->store_webhook_data('appointment_create', $appointment);
        
        // Trigger custom action for other plugins/themes
        do_action('teledox_drchrono_appointment_created', $appointment);
    }
    
    /**
     * Handle appointment modification
     */
    private function handle_appointment_modify($data) {
        $appointment = $data['object'] ?? null;
        if (!$appointment) {
            return;
        }
        
        $this->log_success("Appointment modified: ID {$appointment['id']}");
        
        // Store appointment data
        $this->store_webhook_data('appointment_modify', $appointment);
        
        // Trigger custom action
        do_action('teledox_drchrono_appointment_modified', $appointment);
    }
    
    /**
     * Handle appointment deletion
     */
    private function handle_appointment_delete($data) {
        $appointment = $data['object'] ?? null;
        if (!$appointment) {
            return;
        }
        
        $this->log_success("Appointment deleted: ID {$appointment['id']}");
        
        // Store appointment data
        $this->store_webhook_data('appointment_delete', $appointment);
        
        // Trigger custom action
        do_action('teledox_drchrono_appointment_deleted', $appointment);
    }
    
    /**
     * Handle patient creation
     */
    private function handle_patient_create($data) {
        $patient = $data['object'] ?? null;
        if (!$patient) {
            return;
        }
        
        $this->log_success("New patient created: ID {$patient['id']} - {$patient['first_name']} {$patient['last_name']}");
        
        // Store patient data
        $this->store_webhook_data('patient_create', $patient);
        
        // Trigger custom action
        do_action('teledox_drchrono_patient_created', $patient);
    }
    
    /**
     * Handle patient modification
     */
    private function handle_patient_modify($data) {
        $patient = $data['object'] ?? null;
        if (!$patient) {
            return;
        }
        
        $this->log_success("Patient modified: ID {$patient['id']} - {$patient['first_name']} {$patient['last_name']}");
        
        // Store patient data
        $this->store_webhook_data('patient_modify', $patient);
        
        // Trigger custom action
        do_action('teledox_drchrono_patient_modified', $patient);
    }
    
    /**
     * Handle clinical note lock
     */
    private function handle_clinical_note_lock($data) {
        $note = $data['object'] ?? null;
        if (!$note) {
            return;
        }
        
        $this->log_success("Clinical note locked: ID {$note['id']}");
        
        // Store note data
        $this->store_webhook_data('clinical_note_lock', $note);
        
        // Trigger custom action
        do_action('teledox_drchrono_clinical_note_locked', $note);
    }
    
    /**
     * Handle clinical note unlock
     */
    private function handle_clinical_note_unlock($data) {
        $note = $data['object'] ?? null;
        if (!$note) {
            return;
        }
        
        $this->log_success("Clinical note unlocked: ID {$note['id']}");
        
        // Store note data
        $this->store_webhook_data('clinical_note_unlock', $note);
        
        // Trigger custom action
        do_action('teledox_drchrono_clinical_note_unlocked', $note);
    }
    
    /**
     * Handle lab order creation
     */
    private function handle_lab_order_create($data) {
        $lab_order = $data['object'] ?? null;
        if (!$lab_order) {
            return;
        }
        
        $this->log_success("Lab order created: ID {$lab_order['id']}");
        
        // Store lab order data
        $this->store_webhook_data('lab_order_create', $lab_order);
        
        // Trigger custom action
        do_action('teledox_drchrono_lab_order_created', $lab_order);
    }
    
    /**
     * Handle lab order modification
     */
    private function handle_lab_order_modify($data) {
        $lab_order = $data['object'] ?? null;
        if (!$lab_order) {
            return;
        }
        
        $this->log_success("Lab order modified: ID {$lab_order['id']}");
        
        // Store lab order data
        $this->store_webhook_data('lab_order_modify', $lab_order);
        
        // Trigger custom action
        do_action('teledox_drchrono_lab_order_modified', $lab_order);
    }
    
    /**
     * Handle lab order deletion
     */
    private function handle_lab_order_delete($data) {
        $lab_order = $data['object'] ?? null;
        if (!$lab_order) {
            return;
        }
        
        $this->log_success("Lab order deleted: ID {$lab_order['id']}");
        
        // Store lab order data
        $this->store_webhook_data('lab_order_delete', $lab_order);
        
        // Trigger custom action
        do_action('teledox_drchrono_lab_order_deleted', $lab_order);
    }
    
    /**
     * Handle task creation
     */
    private function handle_task_create($data) {
        $task = $data['object'] ?? null;
        if (!$task) {
            return;
        }
        
        $this->log_success("Task created: ID {$task['id']}");
        
        // Store task data
        $this->store_webhook_data('task_create', $task);
        
        // Trigger custom action
        do_action('teledox_drchrono_task_created', $task);
    }
    
    /**
     * Handle task modification
     */
    private function handle_task_modify($data) {
        $task = $data['object'] ?? null;
        if (!$task) {
            return;
        }
        
        $this->log_success("Task modified: ID {$task['id']}");
        
        // Store task data
        $this->store_webhook_data('task_modify', $task);
        
        // Trigger custom action
        do_action('teledox_drchrono_task_modified', $task);
    }
    
    /**
     * Handle task deletion
     */
    private function handle_task_delete($data) {
        $task = $data['object'] ?? null;
        if (!$task) {
            return;
        }
        
        $this->log_success("Task deleted: ID {$task['id']}");
        
        // Store task data
        $this->store_webhook_data('task_delete', $task);
        
        // Trigger custom action
        do_action('teledox_drchrono_task_deleted', $task);
    }
    
    /**
     * Store webhook data for logging/debugging
     */
    private function store_webhook_data($event_type, $data) {
        $webhook_log = get_option('teledox_drchrono_webhook_log', array());
        
        $webhook_log[] = array(
            'timestamp' => time(),
            'event_type' => $event_type,
            'data' => $data,
        );
        
        // Keep only last 100 webhook entries
        if (count($webhook_log) > 100) {
            $webhook_log = array_slice($webhook_log, -100);
        }
        
        update_option('teledox_drchrono_webhook_log', $webhook_log);
    }
    
    /**
     * Get webhook URL for DrChrono configuration
     */
    public static function get_webhook_url() {
        return home_url('/?teledox_webhook=drchrono');
    }
    
    /**
     * Log success messages
     */
    private function log_success($message) {
        if (function_exists('msg_teledox_health')) {
            msg_teledox_health('SUCCESS', 'DrChrono Webhook', $message);
        } else {
            error_log('TeleDox DrChrono Webhook Success: ' . $message);
        }
    }
    
    /**
     * Log error messages
     */
    private function log_error($message) {
        if (function_exists('msg_teledox_health')) {
            msg_teledox_health('ERROR', 'DrChrono Webhook', $message);
        } else {
            error_log('TeleDox DrChrono Webhook Error: ' . $message);
        }
    }
}

// Initialize the webhook handler
new TeleDox_DrChrono_Webhook();
