<?php
/**
 * Custom Cart Template for TeleDox Health
 * This template provides full control over cart layout while maintaining WooCommerce functionality
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
?>
<div class="sc-hKFxyN hutltu">
<h1 class="sc-fujyAs kudwlS">Introduction</h1>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">

This document is intended as a detailed reference for the precise behavior of the DrChrono API. If this is your first time using the API, start with our <a href="https://hmason.drchrono.com/api-docs-old/tutorial">tutorial</a>. If you are upgrading from a previous version, take a look at the changelog section.
<h3 id="requests">Requests</h3>
All requests must be made using the base URL <code>https:///drchrono.com</code>. For each endpoint, up to six different kinds of requests may be permitted:
<table>
<thead>
<tr>
<th>Path</th>
<th>Method</th>
<th>Side Effects</th>
<th>Success Status</th>
<th>Failure Status</th>
<th>Response Content</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>:endpoint</code></td>
<td><code>GET</code></td>
<td>None</td>
<td><code>200</code></td>
<td><code>403</code></td>
<td>Paginated list of all endpoint resources that the requester can access</td>
</tr>
<tr>
<td><code>:endpoint/:id</code></td>
<td><code>GET</code></td>
<td>None</td>
<td><code>200</code></td>
<td><code>403</code> or <code>404</code></td>
<td>Object with requested ID</td>
</tr>
<tr>
<td><code>:endpoint</code></td>
<td><code>POST</code></td>
<td>Create object</td>
<td><code>201</code></td>
<td><code>400</code>, <code>403</code>, or <code>409</code></td>
<td>Object(s) created</td>
</tr>
<tr>
<td><code>:endpoint/:id</code></td>
<td><code>PUT</code></td>
<td>Update entire object</td>
<td><code>204</code></td>
<td><code>400</code>, <code>403</code>, or <code>409</code></td>
<td>Empty</td>
</tr>
<tr>
<td><code>:endpoint/:id</code></td>
<td><code>PATCH</code></td>
<td>Update only included values of object</td>
<td><code>204</code></td>
<td><code>400</code>, <code>403</code>, or <code>409</code></td>
<td>Empty</td>
</tr>
<tr>
<td><code>:endpoint/:id</code></td>
<td><code>DELETE</code></td>
<td>Delete object</td>
<td><code>204</code></td>
<td><code>400</code> or <code>403</code></td>
<td>Empty</td>
</tr>
</tbody>
</table>
<h3 id="responses">Responses</h3>
All responses are in JSON format. Generally input may use the <code>application/json</code>, <code>application/x-www-form-urlencoded</code>, or <code>form/multipart</code> content types. The list of objects returned by a <code>GET</code> request to <code>:endpoint</code> is paginated and has the following format:
<pre><code> <span class="token punctuation">{</span>
   <span class="token string">"previous"</span><span class="token punctuation">:</span> URL or <span class="token keyword">null</span><span class="token punctuation">,</span>                    <span class="token comment">// URL of the previous page</span>
   <span class="token string">"results"</span><span class="token punctuation">:</span> array of objects<span class="token punctuation">,</span>                <span class="token comment">// these results follow the same format as `:endpoint/:id`</span>
   <span class="token string">"next"</span><span class="token punctuation">:</span> URL or <span class="token keyword">null</span>                         <span class="token comment">// URL of the next page (same as the requested URL, but with the page query parameter included)</span>
 <span class="token punctuation">}</span>
</code></pre>
Most page sizes default to 250, but can be lowered by setting the <code>page_size</code> query parameter. The 'api/appointments' endpoint is an exception to this rule as it has a max size of 20.

Some endpoints may return a <code>302</code> redirect response. Most libraries handle this incorrectly by resending the response with different headers or a different HTTP method. You will need to resend the original request with the right HTTP method and headers to the new "Location" specified by the <code>302</code> response.
<h3 id="permissions">Permissions</h3>
API access is managed using scopes and permissions. Scopes are granted to an API Application when a user authorizes and permissions are granted by a primary user to other users in their Practice Group. The scopes are granted during the OAuth process, whereas the permissions have to be granted from DrChrono web app. In order for an app to access information on behalf of a DrChrono user, the user must authorize the app for the requested scopes, and the user must have the appropriate permissions set. Each endpoint in this documentation will specify which scopes and permissions are needed for access. Scopes are labeled <code>drchrono_oauth2</code> in the AUTHORIZATIONS section of each endpoint.
<h3 id="data-types">Data Types</h3>
The data types referred to in this documentation, for both requests and responses, are listed below:
<table>
<thead>
<tr>
<th>Type</th>
<th>Example</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>boolean</td>
<td><code>true</code></td>
<td>a binary variable, having two possible values of <code>true</code> and <code>false</code></td>
</tr>
<tr>
<td>integer</td>
<td><code>123</code></td>
<td>represents some range of mathmatical integers</td>
</tr>
<tr>
<td>string</td>
<td><code>HelloWorld</code></td>
<td>sequence of characters</td>
</tr>
<tr>
<td>URL</td>
<td><code>"http://example.com/index.html"</code></td>
<td>An absolute URL, including protocol</td>
</tr>
<tr>
<td>object</td>
<td><code>{"key": "value"}</code></td>
<td>A nested object. All values that are type "object" will have a clickable dropdown of the object's format</td>
</tr>
<tr>
<td>array</td>
<td><code>[1,2]</code></td>
<td>A value may have type "array of :type"</td>
</tr>
<tr>
<td>date</td>
<td><code>"2021-02-14"</code></td>
<td>An ISO 8601 encoded date</td>
</tr>
<tr>
<td>date range</td>
<td><code>"2021-02-17/2021-02-24"</code></td>
<td>A start and end date separated by a slash</td>
</tr>
<tr>
<td>file</td>
<td><code>"https://rackcdn.com/file.ext"</code></td>
<td>When uploading, this is provided as a standard <code>multipart/form-data</code> file</td>
</tr>
<tr>
<td>base64encoded file</td>
<td><code>"https://rackcdn.com/file.ext"</code></td>
<td>When uploading, this is provided as a base64 encoded file within JSON</td>
</tr>
<tr>
<td>time</td>
<td><code>"12:34:56"</code></td>
<td>An ISO 8601 encoded time</td>
</tr>
<tr>
<td>timestamp</td>
<td><code>"2021-02-14T13:40:39"</code></td>
<td>AN ISO 8601 encoded timestamp, with no as_system_timezone</td>
</tr>
<tr>
<td>color</td>
<td><code>"#ABCDEF"</code> or <code>"rgb(12, 34, 56)"</code></td>
<td>A CSS color specified in either of these formats</td>
</tr>
<tr>
<td>decimal</td>
<td><code>"123.45"</code></td>
<td>A numeric value truncated to two decimal places. It may be passed to an endpoint as an integer, float, or string, but will always be returned as a string.</td>
</tr>
</tbody>
</table>
<h3 id="verbose-parameter">Verbose Parameter</h3>
For some endpoints, certain fields will be excluded in the response to a <code>GET</code> request unless the <code>verbose</code> query parameter is passed with the value <code>true</code>. These fields have a particularly large performance penalty. Passing <code>verbose=true</code> will include these keys in the response, but will reduce the default and maximum page sizes to 50.
<h3 id="rate-limits">Rate Limits</h3>
Applications are subject to an hourly rate limit, which will reset at the top of each hour. Requests over this limit will receive a response with code <code>429</code>. By default, applications are limited to 500 calls per hour. Contact <a href="mailto:api@drchrono.com">api@drchrono.com</a> or your account representative to request an increased rate limit.
<h3 id="endpoint-levels">Endpoint Levels</h3>
<code>Level 1 API Call(s)</code> and <code>Level 2 API(s)</code> are defined in the following table and are based on the listed <code>Endpoint</code>; the Endpoint's corresponding <code>Level</code> number listed denotes whether that Endpoint constitutes a Level 1 API Call vs. a Level 2 API Call. DrChrono's definition of Level 1 API Calls and Level 2 API Calls as listed in the following table are subject to change at DrChrono's sole discretion.
<table>
<thead>
<tr>
<th>ENDPOINT</th>
<th>Level</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>/api/allergies</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/appointments</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/appointment_profiles</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/appointment_templates</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/billing_profiles</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/care_plans</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/clinical_note_templates</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/comm_logs</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/consent_forms</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/custom_appointment_fields</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/custom_demographics</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/custom_vitals</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/doctors</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/documents</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/iframe_integration</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/implantable_devices</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/inventory_categories</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/inventory_vaccines</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/medications</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/offices</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/patients</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/patients/:id/ccda</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/patients/:id/qrda1</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/patients/:id/onpatient_access</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/patient_communications</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/patient_flag_types</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/patient_interventions</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/patient_physical_exams</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/patient_risk_assessments</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/patients_summary</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/problems</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/reminder_profiles</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/telehealth_appointments</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/users</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/user_groups</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/o/authorize</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/o/revoke_token</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/o/token</code></td>
<td>1</td>
</tr>
<tr>
<td><code>/api/amendments</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/claim_billing_notes</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/clinical_notes</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/clinical_note_field_types</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/clinical_note_field_values</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/custom_insurance_plan_names</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/eligibility_checks</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/eobs</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/fee_schedules</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/insurances</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/lab_documents</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/lab_orders</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/lab_orders_summary</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/lab_tests</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/lab_results</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/line_items</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/medications/:id/append_to_pharmacy_note</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/messages</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/offices/:id/add_exam_room</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/pateint_lab_results</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/patient_messages</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/patient_payments</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/patient_payment_log</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/patient_vaccine_records</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/prescription_messages</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/procedures</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/sublabs</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/tasks</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/task_categories</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/task_notes</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/task_templates</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/task_statuses</code></td>
<td>2</td>
</tr>
<tr>
<td><code>/api/transactions</code></td>
<td>2</td>
</tr>
</tbody>
</table>
</div>
</div>