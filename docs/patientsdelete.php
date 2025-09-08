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
<div id="tag/Clinical/operation/patients_delete" class="sc-eCApnc kzhJjR" data-section-id="tag/Clinical/operation/patients_delete">
<div id="operation/patients_delete" class="sc-iCoGMd dolNKP" data-section-id="operation/patients_delete">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">patients_delete</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">

Delete an existing patient

</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions: </span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">["manage-patients"]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access: </span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">"share_patients" need to be set for data access among practice</span></div>
<div class="sc-fcmMJX ktUTZi">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV fkfFYQ"><span class="sc-daBunf hrAoIj"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i> (<code class="sc-hOPeYd faLZAF">patients:read</code><code class="sc-hOPeYd faLZAF">patients:write</code>)</span></span></div>
</div>
<div class="sc-gsWcmt eyYdAe">
<h5> OAuth2: drchrono_oauth2</h5>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd"></div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<div class="sc-GvhzO kSqeJg"><b>Flow type: </b><code>authorizationCode</code></div>
<div class="sc-GvhzO kSqeJg"><strong>Authorization URL: </strong><code><a href="https://drchrono.com/o/authorize/" target="_blank" rel="noopener noreferrer">https://drchrono.com/o/authorize/</a></code></div>
<div class="sc-GvhzO kSqeJg"><b>Token URL: </b><code>https://drchrono.com/o/token/</code></div>
<div><b>Required scopes: </b><code>patients:read</code> <code>patients:write</code></div>
<div class="sc-GvhzO kSqeJg"><b>Scopes:</b></div>
<div class="sc-bXexck kmvQjn">
<ul>
 	<li><code>billing:patient-payment:read</code> -View patient payment information</li>
 	<li><code>billing:read</code> -View billing information.</li>
 	<li><code>patients:read</code> -View detailed patient information.</li>
 	<li><code>user:write</code> -Edit select account information, such as creating new exam rooms.</li>
 	<li><code>messages:write</code> -Create and modify messages in your message center.</li>
 	<li><code>messages:read</code> -View messages in your message center.</li>
 	<li><code>tasks:write</code> -Create and modify tasks in your tasks center</li>
 	<li><code>tasks:read</code> -View tasks in your tasks center</li>
 	<li><code>labs:write</code> -Create and modify patient lab orders and results.</li>
 	<li><code>patients:write</code> -Create patients and modify detailed patient information.</li>
 	<li><code>settings:write</code> -Create resources that requires Settings permission, such as custom fields.</li>
 	<li><code>billing:patient-payment:write</code> -Modify patient payment information</li>
 	<li><code>clinical:write</code> -Create and modify clinical information, such as vitals, clinical notes, medications and diagnoses.</li>
 	<li><code>patients:summary:write</code> -Create new patients and set their name, chart_id, age, and gender.</li>
 	<li><code>calendar:read</code> -View your appointments.</li>
 	<li><code>user:read</code> -View your basic information.</li>
 	<li><code>billing:write</code> -Modify billing information.</li>
 	<li><code>settings:read</code> -View resources that requires Settings permission, such as custom fields.</li>
 	<li><code>labs:read</code> -View patient lab orders and results.</li>
 	<li><code>calendar:write</code> -Schedule appointments and modify the data associated with them.</li>
 	<li><code>patients:summary:read</code> -View summary information about your patients. This includes patients' name, chart_id, age, and gender.</li>
 	<li><code>clinical:read</code> -View clinical information, such as vitals, clinical notes, medications and diagnoses.</li>
</ul>
</div>
</div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="chart_id"><span class="property-name">chart_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (chart_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="date_of_birth"><span class="property-name">date_of_birth</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (date_of_birth)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="email"><span class="property-name">email</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (email)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ethnicity"><span class="property-name">ethnicity</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (ethnicity)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="first_name"><span class="property-name">first_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (first_name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="gender"><span class="property-name">gender</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (gender)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="last_name"><span class="property-name">last_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (last_name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="preferred_language"><span class="property-name">preferred_language</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (preferred_language)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="race"><span class="property-name">race</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (race)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
</tbody>
</table>
</div>
<div>
<h3 class="sc-fIxmyt jVZBMd">Responses</h3>
<div>

<button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">204 </strong></button>No Content

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">400 </strong></button>Bad Request

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">401 </strong></button>Unauthorized

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">403 </strong></button>Permission Denied

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">404 </strong></button>Not Found

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">405 </strong></button>Method Not Allowed

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">500 </strong></button>Internal Server Error

&nbsp;

</div>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">delete  <span class="sc-jXcxbT hVdkvA">/api/patients/{id}</span></div>
</div>
</div>
</div>
<div id="tag/Clinical/operation/patients_ccda_async" class="sc-eCApnc kzhJjR" data-section-id="tag/Clinical/operation/patients_ccda_async">
<div id="operation/patients_ccda_async" class="sc-iCoGMd dolNKP" data-section-id="operation/patients_ccda_async">
<div class="sc-hKFxyN hutltu">
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd"></div>
</div>
</div>
</div>
</div>
<style>ul {list-style-type: none !important;}</style>