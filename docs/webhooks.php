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
<div id="section/Webhooks" class="sc-eCApnc chOOHy" data-section-id="section/Webhooks">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h1 class="sc-fujyAs kudwlS">Webhooks</h1>
</div>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">

In order to use drchrono API webhooks, you first need to have an API application on file (even if it is in Test Model). Each API webhook is associated with one API application, go to <a href="https://hmason.drchrono.com/api-management/" target="_blank" rel="noopener">here</a> to set up both API applications and webhooks!

Once you registered an API application, you will see webhook section in each saved API applications. Create a webhook and register some events there and save all the changes, then you are good to go!

</div>
</div>
</div>
<div id="section/Webhooks/Webhooks-setup" class="sc-eCApnc chOOHy" data-section-id="section/Webhooks/Webhooks-setup">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">Webhooks setup</h2>
</div>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">

All fields under webhooks section are required.

<strong>Callback URL</strong> Callback URl is used to receive all hooks when subscribed events are triggered. This should be an URL under your control.

<strong>Secret token</strong> Secret token is used to verify webhooks, this is very important, please set something with high entropy. Also we will talk more about this later.

<strong>Events</strong>

Events is used to register events you want to receiver notification when they happen. Currently we support following events.
<table>
<thead>
<tr>
<th>Event name</th>
<th>Event description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>APPOINTMENT_CREATE</code></td>
<td>We will deliver a hook any time an appointment is created</td>
</tr>
<tr>
<td><code>APPOINTMENT_MODIFY</code></td>
<td>We will deliver a hook any time an appointment is modified</td>
</tr>
<tr>
<td><code>APPOINTMENT_DELETE</code></td>
<td>We will deliver a hook any time an appointment is deleted</td>
</tr>
<tr>
<td><code>CASH_PAYMENT_DELETE</code></td>
<td>We will deliver a hook any time a patient payment is deleted</td>
</tr>
<tr>
<td><code>CLINICAL_NOTE_LOCK</code></td>
<td>We will deliver a hook any time a clinical note is locked</td>
</tr>
<tr>
<td><code>CLINICAL_NOTE_UNLOCK</code></td>
<td>We will deliver a hook any time a clinical note is unlocked</td>
</tr>
<tr>
<td><code>LAB_ORDER_CREATE</code></td>
<td>We will deliver a hook any time a lab order is created</td>
</tr>
<tr>
<td><code>LAB_ORDER_MODIFY</code></td>
<td>We will deliver a hook any time a lab order is modified</td>
</tr>
<tr>
<td><code>LAB_ORDER_DELETE</code></td>
<td>We will deliver a hook any time a lab order is deleted</td>
</tr>
<tr>
<td><code>LINE_ITEM_CREATE</code></td>
<td>We will deliver a hook any time a line item is created</td>
</tr>
<tr>
<td><code>LINE_ITEM_MODIFY</code></td>
<td>We will deliver a hook any time a line item is modified</td>
</tr>
<tr>
<td><code>LINE_ITEM_DELETE</code></td>
<td>We will deliver a hook any time a line item is deleted</td>
</tr>
<tr>
<td><code>LINE_ITEM_TRANSACTION_DELETE</code></td>
<td>We will deliver a hook any time a line item transaction is deleted</td>
</tr>
<tr>
<td><code>PATIENT_CREATE</code></td>
<td>We will deliver a hook any time a patient is created</td>
</tr>
<tr>
<td><code>PATIENT_MODIFY</code></td>
<td>We will deliver a hook any time a patient is modified</td>
</tr>
<tr>
<td><code>PATIENT_ALLERGY_CREATE</code></td>
<td>We will deliver a hook any time a patient allergy is created</td>
</tr>
<tr>
<td><code>PATIENT_ALLERGY_MODIFY</code></td>
<td>We will deliver a hook any time a patient allergy is modified</td>
</tr>
<tr>
<td><code>PATIENT_FLAG_CREATE</code></td>
<td>We will deliver a hook any time a patient flag is created</td>
</tr>
<tr>
<td><code>PATIENT_FLAG_CMODIFY</code></td>
<td>We will deliver a hook any time a patient flag is modified</td>
</tr>
<tr>
<td><code>PATIENT_PROBLEM_CREATE</code></td>
<td>We will deliver a hook any time a patient problem is created</td>
</tr>
<tr>
<td><code>PATIENT_PROBLEM_MODIFY</code></td>
<td>We will deliver a hook any time a patient problem is modified</td>
</tr>
<tr>
<td><code>PATIENT_MEDICATION_CREATE</code></td>
<td>We will deliver a hook any time a patient medication is created</td>
</tr>
<tr>
<td><code>PATIENT_MEDICATION_MODIFY</code></td>
<td>We will deliver a hook any time a patient medication is modified</td>
</tr>
<tr>
<td><code>TASK_CREATE</code></td>
<td>We will deliver a hook any time a task is created</td>
</tr>
<tr>
<td><code>TASK_MODIFY</code></td>
<td>We will deliver a hook any time a task is modified and any time creation, modification and deletion of task notes, associated task item</td>
</tr>
<tr>
<td><code>TASK_DELETE</code></td>
<td>We will deliver a hook any time a task is deleted</td>
</tr>
<tr>
<td><code>VACCINE_ADMINISTERED</code></td>
<td>We will deliver a hook any time a vaccine consent form is signed</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div id="section/Webhooks/Webhooks-verification" class="sc-eCApnc chOOHy" data-section-id="section/Webhooks/Webhooks-verification">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">Webhooks verification</h2>
</div>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">

In order to make sure the callback URL in webhook is under your control, we added a verification step before we send any hooks out to you.

Verification can be done by clicking "Verify webhook" button in webhooks setup page. After you click the button, we will send a <code>GET</code> request to the callback URL, along with a parameter called <code>msg</code>.

Please use your webhook's secret token as hash key and SHA-256 as digest constructor, hash the <code>msg</code> value with <a href="https://tools.ietf.org/html/rfc2104.html">HMAC algorithm</a>. And we expect a <code>200</code> JSON response, in JSON response body, there should be a key called <code>secret_token</code> existing, and its value should be equal to the <strong>hashed</strong> <code>msg</code>. Otherwise, verification will fail.

Here is an example webhook verification in Python:
<pre><code>import hashlib<span class="token punctuation">,</span> hmac

def <span class="token function">webhook_verify</span><span class="token punctuation">(</span>request<span class="token punctuation">)</span><span class="token punctuation">:</span>
    secret_token <span class="token operator">=</span> hmac<span class="token punctuation">.</span><span class="token keyword">new</span><span class="token punctuation">(</span>WEBHOOK_SECRET_TOKEN<span class="token punctuation">,</span> request<span class="token punctuation">.</span>GET<span class="token punctuation">[</span><span class="token string">'msg'</span><span class="token punctuation">]</span><span class="token punctuation">,</span> hashlib<span class="token punctuation">.</span>sha256<span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">hexdigest</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
    <span class="token keyword">return</span> <span class="token function">json_response</span><span class="token punctuation">(</span><span class="token punctuation">{</span>
        <span class="token string">'secret_token'</span><span class="token punctuation">:</span> secret_token
    <span class="token punctuation">}</span><span class="token punctuation">)</span>
</code></pre>
<div class="alert alert-warning"><b>Note:</b> Verification will be needed when webhook is first created and anytime callback URl is changed.</div>
</div>
</div>
</div>
<div id="section/Webhooks/Webhooks-header-and-body" class="sc-eCApnc chOOHy" data-section-id="section/Webhooks/Webhooks-header-and-body">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">Webhooks header and body</h2>
</div>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">

<strong>Header</strong>
<table>
<thead>
<tr>
<th>Key</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>X-drchrono-event</code></td>
<td>Event that triggered this hook, could be any one event above or <code>PING</code></td>
</tr>
<tr>
<td><code>X-drchrono-signature</code></td>
<td>Secret token associated with this webhook</td>
</tr>
<tr>
<td><code>X-drchrono-delivery</code></td>
<td>ID of this delivery</td>
</tr>
</tbody>
</table>
<strong>Body</strong>
<table>
<thead>
<tr>
<th>Key</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>receiver</code></td>
<td>This will be an JSON representation of the webhook</td>
</tr>
<tr>
<td><code>object</code></td>
<td>This will be an JSON representation of the object related to the triggered event, this would share same serializer as drchrono API</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div id="section/Webhooks/Webhooks-ping-and-deliveries" class="sc-eCApnc chOOHy" data-section-id="section/Webhooks/Webhooks-ping-and-deliveries">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">Webhooks ping and deliveries</h2>
</div>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">

Webhooks ping and deliveries will be sent as <code>POST</code> requests.

<strong>PING</strong>:

You can always ping your webhook to check things, by clicking the "Ping webhook" button in webhook setup page. And a hook with header <code>X-drchrono-event: PING</code> would be sent to the callback URL.

<strong>Deliveries</strong>:

You can check recent deliveries by clicking the "deliveries" link in webhook setup page. And you can resend a hook by clicking "redeliver" button after select a specific delivery.

</div>
</div>
</div>
<div id="section/Webhooks/Webhooks-delivery-mechanism" class="sc-eCApnc chOOHy" data-section-id="section/Webhooks/Webhooks-delivery-mechanism">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">Webhooks delivery mechanism</h2>
</div>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">

We will delivery a hook the moment a subscribed event is triggered. We will not record any response header or body you send back after you receive the hook. However we only consider the response status code. We will consider any <code>2xx</code> responses as successfully delivered. Any other responses, like <code>302</code> would be considered failing. And we will try to redeliver unsuccessfully delivered hooks 3 times, first redeliver happens at 1 hour after the initial event, second redeliver happens 3 hours after the initial event, and the third redeliver happens 7 hours after the initial event. After these intents, if the delivery is still unsuccessful, you have to redeliver it by hand.

</div>
</div>
</div>
<div id="section/Webhooks/Webhooks-security" class="sc-eCApnc chOOHy" data-section-id="section/Webhooks/Webhooks-security">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">Webhooks security</h2>
</div>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">

You may want to secure your webhooks to only consider requests send out from drchrono. And this is where <code>secret_token</code> is needed in request header. Try to set the <code>secret_token</code> to something with high entropy, a good example could be taking the output of <code>ruby -rsecurerandom -e 'puts SecureRandom.hex(20)'</code>. After this, you might want to verify all request headers you received on your server with this token.

</div>
</div>
</div>