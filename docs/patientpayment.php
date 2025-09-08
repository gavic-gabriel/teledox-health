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
<div id="tag/Billing/operation/patient_payment_log_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/patient_payment_log_list">
<div id="operation/patient_payment_log_list" class="sc-iCoGMd dolNKP" data-section-id="operation/patient_payment_log_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">patient_payment_log_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">

Retrieve or search patient payment logs

</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions: </span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">["billing","show-billing-tab"]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access: </span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">"share_patients" need to be set for data access among practice</span></div>
<div class="sc-fcmMJX ktUTZi">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV fkfFYQ"><span class="sc-daBunf hrAoIj"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i> (<code class="sc-hOPeYd faLZAF">billing:read</code><code class="sc-hOPeYd faLZAF">billing:write</code>)</span></span></div>
</div>
<div class="sc-gsWcmt eyYdAe">
<h5> OAuth2: drchrono_oauth2</h5>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd"></div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<div class="sc-GvhzO kSqeJg"><b>Flow type: </b><code>authorizationCode</code></div>
<div class="sc-GvhzO kSqeJg"><strong>Authorization URL: </strong><code><a href="https://drchrono.com/o/authorize/" target="_blank" rel="noopener noreferrer">https://drchrono.com/o/authorize/</a></code></div>
<div class="sc-GvhzO kSqeJg"><b>Token URL: </b><code>https://drchrono.com/o/token/</code></div>
<div><b>Required scopes: </b><code>billing:read</code> <code>billing:write</code></div>
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
<h5 class="sc-iqAclL iupIzr">query Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="cursor"><span class="property-name">cursor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Cursor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

The pagination cursor value.

</div>
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="page_size"><span class="property-name">page_size</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (Page size)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Number of results to return per page.

</div>
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
<div><button class="sc-htmcrh khIKSp" aria-expanded="true"></button><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">200 </strong></button>OK
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema: <span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="data"><button aria-label="expand properties"><span class="property-name">data</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of </span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (data)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

result data

</div>
</div>
</div></td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="next"><span class="property-name">next</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (next)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Next Paginated page

</div>
</div>
</div></td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="previous"><span class="property-name">previous</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE"> (previous)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">

Previous paginated page

</div>
</div>
</div></td>
</tr>
</tbody>
</table>
</div>
</div>
<div><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">400 </strong></button>Bad Request

</div>
<div><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">401 </strong></button>Unauthorized

</div>
<div><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">403 </strong></button>Permission Denied

</div>
<div><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">404 </strong></button>Not Found

</div>
<div><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">405 </strong></button>Method Not Allowed

</div>
<div><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">500 </strong></button>Internal Server Error

</div>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA"><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/patient_payment_log</span></button>
<div class="sc-ljsmAU IXrMk" aria-hidden="true">
<div class="sc-jlZJtj QgNfY">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
<div tabindex="0" role="button">
<div class="sc-dTSzeu hyeqlU"></div>
</div>
</div>
</div>
</div>
<div>
<h3 class="sc-kEqXSa cAMyfw">Response samples</h3>
<div class="sc-cxNHIi jdxQrI" data-tabs="true">
<ul class="react-tabs__tab-list" role="tablist">
 	<li id="react-tabs-368" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-369">200</li>
</ul>
<div id="react-tabs-369" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-368">
<div class="sc-Arkif eJDRKz"><span class="sc-cOifOu bFIVui">Content type</span>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json"><code><span class="token punctuation">{</span></code>
<ul class="obj collapsible">
 	<li>
<div class="hoverable "><span class="property token string">"previous"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable"><span class="property token string">"data"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable"><span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"appointment"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"doctor"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"payment_method"</span>: <span class="token string">"DRCP"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"updated_at"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"created_by"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"source"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"amount"</span>: <span class="token number">0</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"action"</span>: <span class="token string">"C"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"patient"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"id"</span>: <span class="token number">0</span></div></li>
</ul>
<span class="token punctuation">}</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable "><span class="property token string">"next"</span>: <span class="token string">"string"</span></div></li>
</ul>
<code><span class="token punctuation">}</span></code></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/patient_payment_log_read" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/patient_payment_log_read">
<div id="operation/patient_payment_log_read" class="sc-iCoGMd dolNKP" data-section-id="operation/patient_payment_log_read">
<div class="sc-hKFxyN hutltu">
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd"></div>
</div>
</div>
</div>
</div>
<style>ul {list-style-type: none;<span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"}</style>