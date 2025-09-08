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
		<div id="tag/Clinical/operation/consent_forms_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Clinical/operation/consent_forms_list">
<div id="operation/consent_forms_list" class="sc-iCoGMd dolNKP" data-section-id="operation/consent_forms_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">consent_forms_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search patient consent forms</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“manage-patients”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_consent_forms” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX ktUTZi">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV fkfFYQ"><span class="sc-daBunf hrAoIj"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i>&nbsp;(<code class="sc-hOPeYd faLZAF">patients:read</code><code class="sc-hOPeYd faLZAF">patients:write</code>)</span></span></div>
</div>
<div class="sc-gsWcmt eyYdAe">
<h5>&nbsp;OAuth2:&nbsp;drchrono_oauth2</h5>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd"></div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<div class="sc-GvhzO kSqeJg"><b>Flow type:&nbsp;</b><code>authorizationCode</code></div>
<div class="sc-GvhzO kSqeJg"><strong>Authorization URL:&nbsp;</strong><code><a href="https://drchrono.com/o/authorize/" target="_blank" rel="noopener noreferrer">https://drchrono.com/o/authorize/</a></code></div>
<div class="sc-GvhzO kSqeJg"><b>Token URL:&nbsp;</b><code>https://drchrono.com/o/token/</code></div>
<div><b>Required scopes:&nbsp;</b><code>patients:read</code>&nbsp;<code>patients:write</code></div>
<div class="sc-GvhzO kSqeJg"><b>Scopes:</b></div>
<div class="sc-bXexck kmvQjn">
<ul>
<li><code>billing:patient-payment:read</code>&nbsp;-View patient payment information</li>
<li><code>billing:read</code>&nbsp;-View billing information.</li>
<li><code>patients:read</code>&nbsp;-View detailed patient information.</li>
<li><code>user:write</code>&nbsp;-Edit select account information, such as creating new exam rooms.</li>
<li><code>messages:write</code>&nbsp;-Create and modify messages in your message center.</li>
<li><code>messages:read</code>&nbsp;-View messages in your message center.</li>
<li><code>tasks:write</code>&nbsp;-Create and modify tasks in your tasks center</li>
<li><code>tasks:read</code>&nbsp;-View tasks in your tasks center</li>
<li><code>labs:write</code>&nbsp;-Create and modify patient lab orders and results.</li>
<li><code>patients:write</code>&nbsp;-Create patients and modify detailed patient information.</li>
<li><code>settings:write</code>&nbsp;-Create resources that requires Settings permission, such as custom fields.</li>
<li><code>billing:patient-payment:write</code>&nbsp;-Modify patient payment information</li>
<li><code>clinical:write</code>&nbsp;-Create and modify clinical information, such as vitals, clinical notes, medications and diagnoses.</li>
<li><code>patients:summary:write</code>&nbsp;-Create new patients and set their name, chart_id, age, and gender.</li>
<li><code>calendar:read</code>&nbsp;-View your appointments.</li>
<li><code>user:read</code>&nbsp;-View your basic information.</li>
<li><code>billing:write</code>&nbsp;-Modify billing information.</li>
<li><code>settings:read</code>&nbsp;-View resources that requires Settings permission, such as custom fields.</li>
<li><code>labs:read</code>&nbsp;-View patient lab orders and results.</li>
<li><code>calendar:write</code>&nbsp;-Schedule appointments and modify the data associated with them.</li>
<li><code>patients:summary:read</code>&nbsp;-View summary information about your patients. This includes patients’ name, chart_id, age, and gender.</li>
<li><code>clinical:read</code>&nbsp;-View clinical information, such as vitals, clinical notes, medications and diagnoses.</li>
</ul>
</div>
<div class="sc-eGJWMs kHhkxY"><a class="sc-csTbgd kglWtV">See less</a></div>
</div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="cursor"><span class="property-name">cursor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Cursor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The pagination cursor value.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="page_size"><span class="property-name">page_size</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Page size)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Number of results to return per page.</p>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h3 class="sc-fIxmyt jVZBMd">Responses</h3>
<div>
<p><button class="sc-htmcrh khIKSp" aria-expanded="true"></button><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">200&nbsp;</strong></button>OK</p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="data"><button aria-label="expand properties"><span class="property-name">data</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(data)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>result data</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="next"><span class="property-name">next</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(next)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Next Paginated page</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="previous"><span class="property-name">previous</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(previous)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Previous paginated page</p>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div>
<p><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">400&nbsp;</strong></button>Bad Request</p>
</div>
<div>
<p><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">401&nbsp;</strong></button>Unauthorized</p>
</div>
<div>
<p><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">403&nbsp;</strong></button>Permission Denied</p>
</div>
<div>
<p><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">404&nbsp;</strong></button>Not Found</p>
</div>
<div>
<p><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">405&nbsp;</strong></button>Method Not Allowed</p>
</div>
<div>
<p><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">500&nbsp;</strong></button>Internal Server Error</p>
</div>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/consent_forms</span></button></p>
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
<li id="react-tabs-84" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-85">200</li>
</ul>
<div id="react-tabs-85" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-84">
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable">
<p><span class="property token string">“data”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable">
<p><span class="token punctuation">{</span></p>
<ul class="obj collapsible">
<li>
<div class="hoverable collapsed"><span class="property token string">“archived”</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“is_mandatory”</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“uri”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“doctor”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“created_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“title”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“assign_by_default”</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“order”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“id”</span>: <span class="token number">0</span></div>
</li>
</ul>
<p><span class="token punctuation">}</span></p>
</div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“next”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
<style>ul {list-style-type: none;<span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"}</style>
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

		
