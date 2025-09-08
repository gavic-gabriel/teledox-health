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
<div id="tag/Clinical/operation/patients_create" class="sc-eCApnc kzhJjR" data-section-id="tag/Clinical/operation/patients_create">
<div id="operation/patients_create" class="sc-iCoGMd dolNKP" data-section-id="operation/patients_create">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">patients_create</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">

Create patient

</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions: </span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">["manage-patients"]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access: </span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">"share_patients" need to be set for data access among practice</span></div>
<div class="sc-fcmMJX ktUTZi">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV fkfFYQ"><span class="sc-daBunf hrAoIj"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i> (<code class="sc-hOPeYd faLZAF">patients:read</code><code class="sc-hOPeYd faLZAF">patients:write</code>)</span></span></div>
</div>
<div class="sc-gsWcmt eyYdAe">
<h5> OAuth2: drchrono_oauth2</h5>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd"></div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<div class="sc-GvhzO kSqeJg"><b>Flow type: </b><code>authorizationCode</code></div>
<div class="sc-GvhzO kSqeJg"><strong>Authorization URL: </strong><code><a href="https://drchrono.com/o/authorize/" target="_blank" rel="noopener noreferrer">https://drchrono.com/o/authorize/</a></code></div>
<div class="sc-GvhzO kSqeJg"><b>Token URL: </b><code>https://drchrono.com/o/token/</code></div>
<div><b>Required scopes: </b><code>patients:read</code> <code>patients:write</code></div>
<div class="sc-GvhzO kSqeJg"><b>Scopes:</b></div>
<div class="sc-bXexck kmvQjn">
<ul>
 	<li><code>billing:patient-payment:read</code> -View patient payment information</li>
 	<li><code>billing:read</code> -View billing information.</li>
 	<li><code>patients:read</code> -View detailed patient information.</li>
 	<li><code>user:write</code> -Edit select account information, such as creating new exam rooms.</li>
 	<li><code>messages:write</code> -Create and modify messages in your message center.</li>
 	<li><code>messages:read</code> -View messages in your message center.</li>
 	<li><code>tasks:write</code> -Create and modify tasks in your tasks center</li>
 	<li><code>tasks:read</code> -View tasks in your tasks center</li>
 	<li><code>labs:write</code> -Create and modify patient lab orders and results.</li>
 	<li><code>patients:write</code> -Create patients and modify detailed patient information.</li>
 	<li><code>settings:write</code> -Create resources that requires Settings permission, such as custom fields.</li>
 	<li><code>billing:patient-payment:write</code> -Modify patient payment information</li>
 	<li><code>clinical:write</code> -Create and modify clinical information, such as vitals, clinical notes, medications and diagnoses.</li>
 	<li><code>patients:summary:write</code> -Create new patients and set their name, chart_id, age, and gender.</li>
 	<li><code>calendar:read</code> -View your appointments.</li>
 	<li><code>user:read</code> -View your basic information.</li>
 	<li><code>billing:write</code> -Modify billing information.</li>
 	<li><code>settings:read</code> -View resources that requires Settings permission, such as custom fields.</li>
 	<li><code>labs:read</code> -View patient lab orders and results.</li>
 	<li><code>calendar:write</code> -Schedule appointments and modify the data associated with them.</li>
 	<li><code>patients:summary:read</code> -View summary information about your patients. This includes patients' name, chart_id, age, and gender.</li>
 	<li><code>clinical:read</code> -View clinical information, such as vitals, clinical notes, medications and diagnoses.</li>
</ul>
</div>
</div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="allow_duplicates"><span class="property-name">allow_duplicates</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (allow_duplicates)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Override duplicate check

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="chart_id"><span class="property-name">chart_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (chart_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="date_of_birth"><span class="property-name">date_of_birth</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (date_of_birth)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="email"><span class="property-name">email</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (email)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ethnicity"><span class="property-name">ethnicity</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (ethnicity)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="first_name"><span class="property-name">first_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (first_name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="gender"><span class="property-name">gender</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (gender)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="last_name"><span class="property-name">last_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (last_name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="preferred_language"><span class="property-name">preferred_language</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (preferred_language)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="race"><span class="property-name">race</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (race)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (since)</span></div>
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

<button class="sc-htmcrh khIKSp" aria-expanded="true"></button><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">201 </strong></button>Created
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema: <span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="gender"><span class="property-name">gender</span>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Gender)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">""</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"Male"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"Female"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"Other"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"UNK"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"ASKU"</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

One of <code>"Male"</code>, <code>"Female"</code>, or <code>"Other"</code>

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="address"><span class="property-name">address</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Address)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="auto_accident_insurance"><button aria-label="expand properties"><span class="property-name">auto_accident_insurance</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">object</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (AutoAccidentInsurance)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="cell_phone"><span class="property-name">cell_phone</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Cell phone)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="chart_id"><span class="property-name">chart_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Chart id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Automatically set using first &amp; last name if absent

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="city"><span class="property-name">city</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (City)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="copay"><span class="property-name">copay</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Copay)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_at"><span class="property-name">created_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Created at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="custom_demographics"><button aria-label="expand properties"><span class="property-name">custom_demographics</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of </span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Custom demographics)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="date_of_birth"><span class="property-name">date_of_birth</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Date of birth)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="date_of_death"><span class="property-name">date_of_death</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Date of death)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Available when show_inactive is passed

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="date_of_first_appointment"><span class="property-name">date_of_first_appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Date of first appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Date of first patient visit.

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="date_of_last_appointment"><span class="property-name">date_of_last_appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Date of last appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Date of previous patient visit

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="default_pharmacy"><span class="property-name">default_pharmacy</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Default pharmacy)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

ncpdp id of patient's default pharmacy

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="disable_sms_messages"><span class="property-name">disable_sms_messages</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Disable sms messages)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

If True, suppress SMS/Txt messages to this patient even if we have a cell phone # for them.

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="email"><span class="property-name">email</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Email)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="emergency_contact_name"><span class="property-name">emergency_contact_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Emergency contact name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="emergency_contact_phone"><span class="property-name">emergency_contact_phone</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Emergency contact phone)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="emergency_contact_relation"><span class="property-name">emergency_contact_relation</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Emergency contact relation)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="employer"><span class="property-name">employer</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Employer)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="employer_address"><span class="property-name">employer_address</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Employer address)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="employer_city"><span class="property-name">employer_city</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Employer city)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="employer_state"><span class="property-name">employer_state</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Employer state)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Two-letter abbreviation

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="employer_zip_code"><span class="property-name">employer_zip_code</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Employer zip code)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ethnicity"><span class="property-name">ethnicity</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Ethnicity)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"blank"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"hispanic"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"not_hispanic"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"declined"</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

One of <code>"blank"</code>, <code>"hispanic"</code>, <code>"not_hispanic"</code> or <code>"declined"</code>

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="first_name"><span class="property-name">first_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (First name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="gender_identity_code"><span class="property-name">gender_identity_code</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Gender Identity code)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="gender_identity_description"><span class="property-name">gender_identity_description</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Gender Identity description)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="home_phone"><span class="property-name">home_phone</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Home phone)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="last_name"><span class="property-name">last_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Last name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="medication_history_consent"><span class="property-name">medication_history_consent</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Medication history consent)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="middle_name"><span class="property-name">middle_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Middle name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="nick_name"><span class="property-name">nick_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Nick name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Common name for patient, should be used instead of first name if supplied.

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office_phone"><span class="property-name">office_phone</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Office phone)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="offices"><span class="property-name">offices</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of </span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integers</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Offices)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

IDs of every office this patient has been to

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="patient_flags"><button aria-label="expand properties"><span class="property-name">patient_flags</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of </span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Patient flags)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Possible patient flag type that can be attached to the patient

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="patient_flags_attached"><button aria-label="expand properties"><span class="property-name">patient_flags_attached</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of </span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Patient flags attached)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Patient flags attached to the patient

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient_payment_profile"><span class="property-name">patient_payment_profile</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Patient payment profile)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">""</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"Cash"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"Insurance"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"Insurance Out of Network"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"Auto Accident"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"Worker's Comp"</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

One of <code>""</code>, <code>"Cash"</code>, <code>"Insurance"</code>, <code>"Insurance Out of Network"</code>, <code>"Auto Accident"</code> or <code>"Worker's Comp"</code>.
<strong>Note:</strong> Patient must already have either <code>primary_insurance</code> or <code>secondary_insurance</code> or new <code>primary_insurance</code> or <code>secondary_insurance</code> is passed in request if <code>Insurance</code>, <code>Auto Accident</code> or <code>Worker's Comp</code> payment profiles are chosen.

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient_photo"><span class="property-name">patient_photo</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Patient photo)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient_photo_date"><span class="property-name">patient_photo_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Patient photo date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Cannot be passed without <code>patient_photo</code>

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient_status"><span class="property-name">patient_status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Patient status)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"A"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"I"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"D"</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

One of <code>"A"</code> (active), <code>"I"</code> (inactive), <code>"D"</code> (inactive-deceased)

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="preferred_language"><span class="property-name">preferred_language</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Preferred language)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"blank"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"eng"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"zho"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"fra"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"ita"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"jpn"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"por"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"rus"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"spa"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"other"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"unknown"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"declined"</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Use ISO 639 alpha-3 codes

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="preferred_language_code"><span class="property-name">preferred_language_code</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Preferred language code)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="preferred_language_description"><span class="property-name">preferred_language_description</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Preferred language description)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="preferred_pharmacies"><span class="property-name">preferred_pharmacies</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of </span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">strings</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Preferred pharmacies)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

ncpdp id of patient's preferred pharmacies

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="primary_care_physician"><span class="property-name">primary_care_physician</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Primary care physician)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Referring doctor for this patient

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="primary_insurance"><button aria-label="expand properties"><span class="property-name">primary_insurance</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">object</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (PrimaryInsurance)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

<strong>Warning:</strong> Changing insurance information may make past appointments unbillable. Insurance data is also <strong>unvalidated</strong>; you should use the <a href="https://hmason.drchrono.com/api-docs/#apiinsurances"><code>/api/insurances</code></a> endpoint to find the appropriate insurance payer.

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="pronouns"><span class="property-name">pronouns</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Pronouns)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">""</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"LA29518-0"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"LA29519-8"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"LA29520-6"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"LA29523-0"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"LA29521-4"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"LA29515-6"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"LA29516-4"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"LA29517-2"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"LA29522-2"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"LA29524-8"</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="race"><span class="property-name">race</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Race)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"blank"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"indian"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"asian"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"black"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"hawaiian"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"white"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"other"</span> <span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">"declined"</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

One of <code>"blank"</code>, <code>"indian"</code>, <code>"asian"</code>, <code>"black"</code>, <code>"hawaiian"</code>, <code>"white"</code> or <code>"declined"</code>

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="race_subcategories"><button aria-label="expand properties"><span class="property-name">race_subcategories</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of </span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Race subcategories)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="referring_doctor"><button aria-label="expand properties"><span class="property-name">referring_doctor</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">object</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="referring_source"><span class="property-name">referring_source</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Referring source)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Referring source.

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="responsible_party_email"><span class="property-name">responsible_party_email</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Responsible party email)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="responsible_party_name"><span class="property-name">responsible_party_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Responsible party name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="responsible_party_phone"><span class="property-name">responsible_party_phone</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Responsible party phone)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="responsible_party_relation"><span class="property-name">responsible_party_relation</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Responsible party relation)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="secondary_insurance"><button aria-label="expand properties"><span class="property-name">secondary_insurance</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">object</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (SecondaryInsurance)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

<strong>Warning:</strong> Changing insurance information may make past appointments unbillable. Insurance data is also <strong>unvalidated</strong>; you should use the <a href="https://hmason.drchrono.com/api-docs/#apiinsurances"><code>/api/insurances</code></a> endpoint to find the appropriate insurance payer.

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="social_security_number"><span class="property-name">social_security_number</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Social security number)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="state"><span class="property-name">state</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (State)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Two-letter abbreviation

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="tertiary_insurance"><button aria-label="expand properties"><span class="property-name">tertiary_insurance</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">object</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (TertiaryInsurance)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

<strong>Warning:</strong> Changing insurance information may make past appointments unbillable. Insurance data is also <strong>unvalidated</strong>; you should use the <a href="https://hmason.drchrono.com/api-docs/#apiinsurances"><code>/api/insurances</code></a> endpoint to find the appropriate insurance payer.

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="workers_comp_insurance"><button aria-label="expand properties"><span class="property-name">workers_comp_insurance</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">object</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (WorkerCompInsurance)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="zip_code"><span class="property-name">zip_code</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Zip code)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
</tbody>
</table>
</div>
</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">400 </strong></button>Bad Request

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">401 </strong></button>Unauthorized

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">403 </strong></button>Permission Denied

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">404 </strong></button>Not Found

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">405 </strong></button>Method Not Allowed

</div>
<div>

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">500 </strong></button>Internal Server Error

</div>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">

<button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN iwuDdk http-verb post">post</span><span class="sc-jXcxbT hVdkvA">/api/patients</span></button>

</div>
<div>
<h3 class="sc-kEqXSa cAMyfw">Response samples</h3>
<div class="sc-cxNHIi jdxQrI" data-tabs="true">
<ul class="react-tabs__tab-list" role="tablist">
 	<li id="react-tabs-108" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-109">201</li>
</ul>
<div id="react-tabs-109" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-108">
<div>
<div class="sc-Arkif eJDRKz">

<span class="sc-cOifOu bFIVui">Content type</span>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">

<code><span class="token punctuation">{</span></code>
<ul class="obj collapsible">
 	<li>
<div class="hoverable "><span class="property token string">"medication_history_consent"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"last_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"emergency_contact_phone"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"primary_care_physician"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"date_of_first_appointment"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"tertiary_insurance"</span>: <span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_group_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_id_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_claim_office_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_address"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_state"</span>: <span class="token string">"AL"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_social_security"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"photo_front"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_last_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_middle_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_date_of_birth"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_company"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"is_subscriber_the_patient"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_plan_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"patient_relationship_to_subscriber"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_gender"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"photo_back"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_suffix"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_zip_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_city"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_plan_type"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_payer_id"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_country"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_first_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_group_number"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"patient_flags_attached"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable">

<span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"archived"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"flag_text"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"created_at"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"flag_type"</span>: <span class="token number">0</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"updated_at"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"id"</span>: <span class="token number">0</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable "><span class="property token string">"updated_at"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"custom_demographics"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable">

<span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"field_type"</span>: <span class="token number">0</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"updated_at"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"value"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable "><span class="property token string">"referring_source"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"responsible_party_relation"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"zip_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"id"</span>: <span class="token number">0</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"employer_city"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"employer_state"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"city"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"first_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"middle_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"doctor"</span>: <span class="token number">0</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"race_subcategories"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable">

<span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"description"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable "><span class="property token string">"disable_sms_messages"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"employer"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"preferred_language_description"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"patient_flags"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable">

<span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"archived"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"doctor"</span>: <span class="token number">0</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"color"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"created_at"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"updated_at"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"priority"</span>: <span class="token number">0</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"id"</span>: <span class="token number">0</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable "><span class="property token string">"date_of_birth"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"ethnicity"</span>: <span class="token string">"blank"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"home_phone"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"pronouns"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"patient_status"</span>: <span class="token string">"A"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"patient_photo_date"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"gender_identity_description"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"email"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"responsible_party_email"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"patient_photo"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"responsible_party_phone"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"state"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"secondary_insurance"</span>: <span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_group_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_id_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_claim_office_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_address"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_state"</span>: <span class="token string">"AL"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_social_security"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"photo_front"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_last_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_middle_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_date_of_birth"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_company"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"is_subscriber_the_patient"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_plan_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"patient_relationship_to_subscriber"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_gender"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"photo_back"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_suffix"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_zip_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_city"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_plan_type"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_payer_id"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_country"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_first_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_group_number"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable "><span class="property token string">"date_of_last_appointment"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"preferred_language_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"patient_payment_profile"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"date_of_death"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"social_security_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"auto_accident_insurance"</span>: <span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_claim_rep_city"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_claim_rep_state"</span>: <span class="token string">"AL"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_claim_rep_address"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_will_require_therapy_rec"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_middle_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_still_under_care"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_significant_injury_notes"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_first_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_address"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_disabled_from_date"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_company"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_disabled_to_date"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_similar_condition_date"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_case_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_claim_rep_is_insurer"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_payer_address"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_last_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_social_security"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_phone_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_city"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_significant_injury"</span>: <span class="token string">"YES"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_similar_condition_notes"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_payer_id"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_payer_state"</span>: <span class="token string">"AL"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_zip_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_payer_zip"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_payer_city"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_will_require_therapy"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_date_of_accident"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_date_of_birth"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_suffix"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_subscriber_state"</span>: <span class="token string">"AL"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_return_to_work_date"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_notes"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_policy_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_is_subscriber_the_patient"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_claim_rep_zip"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_state_of_occurrence"</span>: <span class="token string">"AL"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_treatment_duration"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_had_similar_condition"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_patient_relationship_to_subscriber"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"auto_accident_claim_rep_name"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable "><span class="property token string">"address"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"chart_id"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"referring_doctor"</span>: <span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"fax"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"last_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"middle_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"suffix"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"first_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"provider_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"specialty"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"provider_qualifier"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"phone"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"address"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"npi"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"email"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"primary_insurance"</span>: <span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_group_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_id_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_claim_office_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_address"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_state"</span>: <span class="token string">"AL"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_social_security"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"photo_front"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_last_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_middle_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_date_of_birth"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_company"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"is_subscriber_the_patient"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_plan_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"patient_relationship_to_subscriber"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_gender"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"photo_back"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_suffix"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_zip_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_city"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_plan_type"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_payer_id"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_country"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"subscriber_first_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"insurance_group_number"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable "><span class="property token string">"preferred_language"</span>: <span class="token string">"blank"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"responsible_party_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"nick_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"copay"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"created_at"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"emergency_contact_relation"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"gender_identity_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"office_phone"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"employer_address"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"race"</span>: <span class="token string">"blank"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"offices"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable collapsed"><span class="token number">0</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"preferred_pharmacies"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable collapsed"><span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable "><span class="property token string">"emergency_contact_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"gender"</span>: <span class="token string">""</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"default_pharmacy"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"cell_phone"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"employer_zip_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"workers_comp_insurance"</span>: <span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_payer_city"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_payer_id"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_group_name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_wcb"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_carrier_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_notes"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"property_and_casualty_agency_claim_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_state_of_occurrence"</span>: <span class="token string">"AL"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_payer_zip"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_wcb_rating_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_case_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_group_number"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_company"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_payer_address"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_date_of_accident"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"workers_comp_payer_state"</span>: <span class="token string">"AL"</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<code><span class="token punctuation">}</span></code>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<style>ul {list-style-type: none !important;}</style>