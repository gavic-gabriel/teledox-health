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
<div id="tag/Billing" class="sc-eCApnc chOOHy" data-section-id="tag/Billing">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h1 class="sc-fujyAs kudwlS">Billing</h1>
</div>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">
<p>Create and manage billing resources</p>
</div>
</div>
</div>
<div id="tag/Billing/operation/daysheet_charges_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/daysheet_charges_list">
<div id="operation/daysheet_charges_list" class="sc-iCoGMd dolNKP" data-section-id="operation/daysheet_charges_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">daysheet_charges_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve daysheet charges report for a given date range</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”access-patient-payments”]</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="charges_date_type"><span class="property-name">charges_date_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(charges_date_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by scheduled time or date of entry if not provided. Can be one of (‘scheduled_time’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="claim_type"><span class="property-name">claim_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(claim_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by professional or institutional claims. Can be one of (‘institutional’, ‘professional’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="end_date"><span class="property-name">end_date</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(end_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>End date of report (M/D/YYYY)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="examroom_id"><span class="property-name">examroom_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(examroom_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given examroom ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office_id"><span class="property-name">office_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given office</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient_id"><span class="property-name">patient_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given patient ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="pg_mode"><span class="property-name">pg_mode</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(pg_mode)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Runs report for all providers in the practice group</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="report_type"><span class="property-name">report_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(report_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by given value. Can be one of (‘reimbursement_analysis’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="start_date"><span class="property-name">start_date</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(start_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Start date of report (M/D/YYYY)</p>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/day_sheet_charges</span></button></p>
<div class="sc-ljsmAU IXrMk" aria-hidden="true">
<div class="sc-jlZJtj QgNfY">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
<div tabindex="0" role="button">
<div class="sc-dTSzeu hyeqlU"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/eligibility_checks_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/eligibility_checks_list">
<div id="operation/eligibility_checks_list" class="sc-iCoGMd dolNKP" data-section-id="operation/eligibility_checks_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">eligibility_checks_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search past eligibility checks for patient</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“scheduling”,”manage-patients”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment_date"><span class="property-name">appointment_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment_date_range"><span class="property-name">appointment_date_range</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment_date_range)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
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
<tr class="">
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="query_date"><span class="property-name">query_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(query_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="query_date_range"><span class="property-name">query_date_range</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(query_date_range)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/eligibility_checks</span></button></p>
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
<li id="react-tabs-314" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-315">200</li>
</ul>
<div id="react-tabs-315" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-314">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“data”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
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
<div id="tag/Billing/operation/patient_authorizations_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/patient_authorizations_list">
<div id="operation/patient_authorizations_list" class="sc-iCoGMd dolNKP" data-section-id="operation/patient_authorizations_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">patient_authorizations_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search patient authorizations</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">null</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="date_range"><span class="property-name">date_range</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(date_range)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="end_date"><span class="property-name">end_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="start_date"><span class="property-name">start_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/patient_authorizations</span></button></p>
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
<li id="react-tabs-316" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-317">200</li>
</ul>
<div id="react-tabs-317" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-316">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“data”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
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
<div id="tag/Billing/operation/custom_insurance_plan_names_read" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/custom_insurance_plan_names_read">
<div id="operation/custom_insurance_plan_names_read" class="sc-iCoGMd dolNKP" data-section-id="operation/custom_insurance_plan_names_read">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">custom_insurance_plan_names_read</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve an existing custom insurance plan name</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“settings”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">Data access among practice is available</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="name"><span class="property-name">name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="user"><span class="property-name">user</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(user)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="archived"><span class="property-name">archived</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Archived)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_at"><span class="property-name">created_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>List custom appointment fields defined by the doctor with the given ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="insurance_plan_name"><span class="property-name">insurance_plan_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Insurance plan name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Custom name</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="user"><span class="property-name">user</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(User)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>User who created the custom insurance plan name</p>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/custom_insurance_plan_names/{id}</span></button></p>
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
<li id="react-tabs-318" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-319">200</li>
</ul>
<div id="react-tabs-319" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-318">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“archived”</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“insurance_plan_name”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“user”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/line_items_list_create" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/line_items_list_create">
<div id="operation/line_items_list_create" class="sc-iCoGMd dolNKP" data-section-id="operation/line_items_list_create">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">line_items_list_create</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Create a billing line items list request</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="order_by"><span class="property-name">order_by</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(order_by)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Order results by a specific field. Valid options include [id, updated_at]. Default: id.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date_range"><span class="property-name">service_date_range</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date_range)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-htmcrh khIKSp" aria-expanded="true"></button><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">201&nbsp;</strong></button>Created</p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="description"><span class="property-name">description</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Contains link to load the batch by UUID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="status"><span class="property-name">status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Status of the request. Possible values are “In progress”, “Complete”, “Failed”, “Canceled”.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(uuid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>UUID of the batch of billing line items.</p>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN iwuDdk http-verb post">post</span><span class="sc-jXcxbT hVdkvA">/api/line_items_list</span></button></p>
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
<li id="react-tabs-320" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-321">201</li>
</ul>
<div id="react-tabs-321" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-320">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“status”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“uuid”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“description”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/line_items_list_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/line_items_list_list">
<div id="operation/line_items_list_list" class="sc-iCoGMd dolNKP" data-section-id="operation/line_items_list_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">line_items_list_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve the list of billing line items</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(uuid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The UUID token for the batch of patients. This is returned in the response of the create endpoint.</p>
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
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="results"><button aria-label="expand properties"><span class="property-name">results</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(data)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>result data. only presented when the status is “completed”</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="status"><span class="property-name">status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Status of the request. Possible values are “In progress”, “Complete”, “Failed”, “Canceled”.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(uuid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>UUID of the batch of billing line items.</p>
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
<p><button class="sc-htmcrh jcAmZH" aria-expanded="true"></button><button class="sc-htmcrh jcAmZH" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">500&nbsp;</strong></button>Internal Server Error</p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="detail"><span class="property-name">detail</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Detail)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Instructions on what to do next</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="status"><span class="property-name">status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Either “Error” or “Failed”</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(UUID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The UUID used to get the data for the asynchronous request</p>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/line_items_list</span></button></p>
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
<li id="react-tabs-322" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-323">200</li>
<li id="react-tabs-324" class="tab-error" role="tab" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-325">500</li>
</ul>
<div id="react-tabs-323" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-322">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“status”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“results”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“uuid”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="react-tabs-325" class="react-tabs__tab-panel" role="tabpanel" aria-labelledby="react-tabs-324"></div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/day_sheet_patient_payments_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/day_sheet_patient_payments_list">
<div id="operation/day_sheet_patient_payments_list" class="sc-iCoGMd dolNKP" data-section-id="operation/day_sheet_patient_payments_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">day_sheet_patient_payments_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve daysheet cash report for a given date range</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”access-patient-payments”]</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="charges_date_type"><span class="property-name">charges_date_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(charges_date_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by scheduled time or date of entry if not provided. Can be one of (‘scheduled_time’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="claim_type"><span class="property-name">claim_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(claim_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by professional or institutional claims. Can be one of (‘institutional’, ‘professional’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="end_date"><span class="property-name">end_date</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(end_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>End date of report (M/D/YYYY)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="examroom_id"><span class="property-name">examroom_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(examroom_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given examroom ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="legacy"><span class="property-name">legacy</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">bool</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(legacy)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Enables backward compatibility for legacy version</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given office</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient_id"><span class="property-name">patient_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given patient ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="report_type"><span class="property-name">report_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(report_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by given value. Can be one of (‘reimbursement_analysis’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="start_date"><span class="property-name">start_date</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(start_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Start date of report (M/D/YYYY)</p>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/day_sheet_patient_payments</span></button></p>
<div class="sc-ljsmAU IXrMk" aria-hidden="true">
<div class="sc-jlZJtj QgNfY">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
<div tabindex="0" role="button">
<div class="sc-dTSzeu hyeqlU"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/eligibility_checks_read" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/eligibility_checks_read">
<div id="operation/eligibility_checks_read" class="sc-iCoGMd dolNKP" data-section-id="operation/eligibility_checks_read">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">eligibility_checks_read</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve an existing past eligibility check</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“scheduling”,”manage-patients”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment_date"><span class="property-name">appointment_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment_date_range"><span class="property-name">appointment_date_range</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment_date_range)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="query_date"><span class="property-name">query_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(query_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="query_date_range"><span class="property-name">query_date_range</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(query_date_range)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="cob_level"><span class="property-name">cob_level</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Cob level)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The level of insurance the eligibility check was run on. Can be one of the following:&nbsp;<code>Primary Insurance</code>&nbsp;or&nbsp;<code>Secondary Insurance</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="coverage_details"><span class="property-name">coverage_details</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Coverage details)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>A variable size object containing the details of the eligibility check, if returned by the clearinghouse that ran the eligibility check</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="coverage_subscriber"><span class="property-name">coverage_subscriber</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Coverage subscriber)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>A variable size object containing subscriber information, if returned by the clearinghouse that ran the eligibility check</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="eligibility"><span class="property-name">eligibility</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Eligibility)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<table>
<thead>
<tr>
<th>Value</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>'1'</code></td>
<td>Active Coverage</td>
</tr>
<tr>
<td><code>'2'</code></td>
<td>Active – Full Risk Capitation</td>
</tr>
<tr>
<td><code>'3'</code></td>
<td>Active – Services Capitated</td>
</tr>
<tr>
<td><code>'4'</code></td>
<td>Active – Services Capitated to Primary Care Physician</td>
</tr>
<tr>
<td><code>'5'</code></td>
<td>Active – Pending Investigation</td>
</tr>
<tr>
<td><code>'6'</code></td>
<td>Inactive</td>
</tr>
<tr>
<td><code>'7'</code></td>
<td>Inactive – Pending Eligibility Update</td>
</tr>
<tr>
<td><code>'8'</code></td>
<td>Inactive – Pending Investigation</td>
</tr>
<tr>
<td><code>'A'</code></td>
<td>Co-Insurance</td>
</tr>
<tr>
<td><code>'B'</code></td>
<td>Co-Payment</td>
</tr>
<tr>
<td><code>'C'</code></td>
<td>Deductible</td>
</tr>
<tr>
<td><code>'CB'</code></td>
<td>Coverage Basis</td>
</tr>
<tr>
<td><code>'D'</code></td>
<td>Benefit Description</td>
</tr>
<tr>
<td><code>'E'</code></td>
<td>Exclusions</td>
</tr>
<tr>
<td><code>'F'</code></td>
<td>Limitations</td>
</tr>
<tr>
<td><code>'G'</code></td>
<td>Out of Pocket (Stop Loss)</td>
</tr>
<tr>
<td><code>'H'</code></td>
<td>Unlimited</td>
</tr>
<tr>
<td><code>'I'</code></td>
<td>Non-Covered</td>
</tr>
<tr>
<td><code>'J'</code></td>
<td>Cost Containment</td>
</tr>
<tr>
<td><code>'K'</code></td>
<td>Reserve</td>
</tr>
<tr>
<td><code>'L'</code></td>
<td>Primary Care Provider</td>
</tr>
<tr>
<td><code>'M'</code></td>
<td>Pre-existing Condition</td>
</tr>
<tr>
<td><code>'MC'</code></td>
<td>Managed Care Coordinator</td>
</tr>
<tr>
<td><code>'N'</code></td>
<td>Services Restricted to Following Provider</td>
</tr>
<tr>
<td><code>'O'</code></td>
<td>Not Deemed a Medical Necessity</td>
</tr>
<tr>
<td><code>'P'</code></td>
<td>Benefit Disclaimer</td>
</tr>
<tr>
<td><code>'Q'</code></td>
<td>Second Surgical Opinion Required</td>
</tr>
<tr>
<td><code>'R'</code></td>
<td>Other or Additional Payor</td>
</tr>
<tr>
<td><code>'S'</code></td>
<td>Prior Year(s) History</td>
</tr>
<tr>
<td><code>'T'</code></td>
<td>Card(s) Reported Lost/Stolen</td>
</tr>
<tr>
<td><code>'U'</code></td>
<td>Contact Following Entity for Eligibility or Benefit Information</td>
</tr>
<tr>
<td><code>'V'</code></td>
<td>Cannot Process</td>
</tr>
<tr>
<td><code>'W'</code></td>
<td>Other Source of Data</td>
</tr>
<tr>
<td><code>'X'</code></td>
<td>Health Care Facility</td>
</tr>
<tr>
<td><code>'Y'</code></td>
<td>Spend Down</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>System identifier</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="payer_name"><span class="property-name">payer_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Payer name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The name of the payer as returned by the clearinghouse that ran the eligibility check</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="query_date"><span class="property-name">query_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Query date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The time at which the request was made</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="request_service_type"><span class="property-name">request_service_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Request service type)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“2”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“3”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“4”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“5”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“6”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“7”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“8”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“9”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“10”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“11”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“12”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“13”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“14”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“15”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“16”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“17”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“18”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“19”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“20”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“21”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“22”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“23”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“24”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“25”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“26”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“27”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“28”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“30”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“32”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“33”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“34”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“35”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“36”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“37”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“38”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“39”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“40”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“41”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“42”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“43”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“44”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“45”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“46”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“47”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“48”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“49”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“50”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“51”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“52”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“53”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“54”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“55”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“56”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“57”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“58”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“59”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“60”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“61”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“62”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“63”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“64”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“65”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“66”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“67”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“68”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“69”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“70”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“71”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“72”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“73”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“74”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“75”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“76”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“77”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“78”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“79”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“80”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“81”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“82”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“83”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“84”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“85”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“86”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“87”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“88”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“89”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“90”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“91”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“92”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“93”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“94”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“95”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“96”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“97”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“98”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“99”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A0”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A2”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A3”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A4”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A5”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A6”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A7”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A8”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A9”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AB”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AC”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AD”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AE”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AF”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AG”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AH”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AI”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AJ”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AK”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AL”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AM”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AN”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AO”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AQ”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AR”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B2”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B3”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BB”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BC”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BD”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BE”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BF”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BG”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BH”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BI”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BJ”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BK”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BL”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BM”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BN”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BP”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BQ”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BR”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BS”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BU”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BV”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BW”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BX”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BY”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“BZ”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“C1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CB”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CC”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CD”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CE”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CF”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CG”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CH”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CI”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CJ”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CK”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CL”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CM”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CN”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CO”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CP”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CQ”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DG”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DM”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DS”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“GF”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“GN”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“GY”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“IC”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“MH”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“NI”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“ON”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“PT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“PU”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“RN”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“RT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“TC”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“TN”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“UC”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<table>
<thead>
<tr>
<th>Value</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>'1'</code></td>
<td>Medical Care</td>
</tr>
<tr>
<td><code>'2'</code></td>
<td>Surgical</td>
</tr>
<tr>
<td><code>'3'</code></td>
<td>Consultation</td>
</tr>
<tr>
<td><code>'4'</code></td>
<td>Diagnostic X-Ray</td>
</tr>
<tr>
<td><code>'5'</code></td>
<td>Diagnostic Lab</td>
</tr>
<tr>
<td><code>'6'</code></td>
<td>Radiation Therapy</td>
</tr>
<tr>
<td><code>'7'</code></td>
<td>Anesthesia</td>
</tr>
<tr>
<td><code>'8'</code></td>
<td>Surgical Assistance</td>
</tr>
<tr>
<td><code>'9'</code></td>
<td>Other Medical</td>
</tr>
<tr>
<td><code>'10'</code></td>
<td>Blood Charges</td>
</tr>
<tr>
<td><code>'11'</code></td>
<td>Used Durable Medical Equipment</td>
</tr>
<tr>
<td><code>'12'</code></td>
<td>Durable Medical Equipment Purchase</td>
</tr>
<tr>
<td><code>'13'</code></td>
<td>Ambulatory Service Center Facility</td>
</tr>
<tr>
<td><code>'14'</code></td>
<td>Renal Supplies in the Home</td>
</tr>
<tr>
<td><code>'15'</code></td>
<td>Alternate Method Dialysis</td>
</tr>
<tr>
<td><code>'16'</code></td>
<td>Chronic Renal Disease (CRD) Equipment</td>
</tr>
<tr>
<td><code>'17'</code></td>
<td>Pre-Admission Testing</td>
</tr>
<tr>
<td><code>'18'</code></td>
<td>Durable Medical Equipment Rental</td>
</tr>
<tr>
<td><code>'19'</code></td>
<td>Pneumonia Vaccine</td>
</tr>
<tr>
<td><code>'20'</code></td>
<td>Second Surgical Opinion</td>
</tr>
<tr>
<td><code>'21'</code></td>
<td>Third Surgical Opinion</td>
</tr>
<tr>
<td><code>'22'</code></td>
<td>Social Work</td>
</tr>
<tr>
<td><code>'23'</code></td>
<td>Diagnostic Dental</td>
</tr>
<tr>
<td><code>'24'</code></td>
<td>Periodontics</td>
</tr>
<tr>
<td><code>'25'</code></td>
<td>Restorative</td>
</tr>
<tr>
<td><code>'26'</code></td>
<td>Endodontics</td>
</tr>
<tr>
<td><code>'27'</code></td>
<td>Maxillofacial Prosthetics</td>
</tr>
<tr>
<td><code>'28'</code></td>
<td>Adjunctive Dental Services</td>
</tr>
<tr>
<td><code>'30'</code></td>
<td>Health Benefit Plan Coverage</td>
</tr>
<tr>
<td><code>'32'</code></td>
<td>Plan Waiting Period</td>
</tr>
<tr>
<td><code>'33'</code></td>
<td>Chiropractic</td>
</tr>
<tr>
<td><code>'34'</code></td>
<td>Chiropractic Office Visits</td>
</tr>
<tr>
<td><code>'35'</code></td>
<td>Dental Care</td>
</tr>
<tr>
<td><code>'36'</code></td>
<td>Dental Crowns</td>
</tr>
<tr>
<td><code>'37'</code></td>
<td>Dental Accident</td>
</tr>
<tr>
<td><code>'38'</code></td>
<td>Orthodontics</td>
</tr>
<tr>
<td><code>'39'</code></td>
<td>Prosthodontics</td>
</tr>
<tr>
<td><code>'40'</code></td>
<td>Oral Surgery</td>
</tr>
<tr>
<td><code>'41'</code></td>
<td>Routine (Preventive) Dental</td>
</tr>
<tr>
<td><code>'42'</code></td>
<td>Home Health Care</td>
</tr>
<tr>
<td><code>'43'</code></td>
<td>Home Health Prescriptions</td>
</tr>
<tr>
<td><code>'44'</code></td>
<td>Home Health Visits</td>
</tr>
<tr>
<td><code>'45'</code></td>
<td>Hospice</td>
</tr>
<tr>
<td><code>'46'</code></td>
<td>Respite Care</td>
</tr>
<tr>
<td><code>'47'</code></td>
<td>Hospital</td>
</tr>
<tr>
<td><code>'48'</code></td>
<td>Hospital – Inpatient</td>
</tr>
<tr>
<td><code>'49'</code></td>
<td>Hospital – Room and Board</td>
</tr>
<tr>
<td><code>'50'</code></td>
<td>Hospital – Outpatient</td>
</tr>
<tr>
<td><code>'51'</code></td>
<td>Hospital – Emergency Accident</td>
</tr>
<tr>
<td><code>'52'</code></td>
<td>Hospital – Emergency Medical</td>
</tr>
<tr>
<td><code>'53'</code></td>
<td>Hospital – Ambulatory Surgical</td>
</tr>
<tr>
<td><code>'54'</code></td>
<td>Long Term Care</td>
</tr>
<tr>
<td><code>'55'</code></td>
<td>Major Medical</td>
</tr>
<tr>
<td><code>'56'</code></td>
<td>Medically Related Transportation</td>
</tr>
<tr>
<td><code>'57'</code></td>
<td>Air Transportation</td>
</tr>
<tr>
<td><code>'58'</code></td>
<td>Cabulance</td>
</tr>
<tr>
<td><code>'59'</code></td>
<td>Licensed Ambulance</td>
</tr>
<tr>
<td><code>'60'</code></td>
<td>General Benefits</td>
</tr>
<tr>
<td><code>'61'</code></td>
<td>In-vitro Fertilization</td>
</tr>
<tr>
<td><code>'62'</code></td>
<td>MRI/CAT Scan</td>
</tr>
<tr>
<td><code>'63'</code></td>
<td>Donor Procedures</td>
</tr>
<tr>
<td><code>'64'</code></td>
<td>Acupuncture</td>
</tr>
<tr>
<td><code>'65'</code></td>
<td>Newborn Care</td>
</tr>
<tr>
<td><code>'66'</code></td>
<td>Pathology</td>
</tr>
<tr>
<td><code>'67'</code></td>
<td>Smoking Cessation</td>
</tr>
<tr>
<td><code>'68'</code></td>
<td>Well Baby Care</td>
</tr>
<tr>
<td><code>'69'</code></td>
<td>Maternity</td>
</tr>
<tr>
<td><code>'70'</code></td>
<td>Transplants</td>
</tr>
<tr>
<td><code>'71'</code></td>
<td>Audiology Exam</td>
</tr>
<tr>
<td><code>'72'</code></td>
<td>Inhalation Therapy</td>
</tr>
<tr>
<td><code>'73'</code></td>
<td>Diagnostic Medical</td>
</tr>
<tr>
<td><code>'74'</code></td>
<td>Private Duty Nursing</td>
</tr>
<tr>
<td><code>'75'</code></td>
<td>Prosthetic Device</td>
</tr>
<tr>
<td><code>'76'</code></td>
<td>Dialysis</td>
</tr>
<tr>
<td><code>'77'</code></td>
<td>Otological Exam</td>
</tr>
<tr>
<td><code>'78'</code></td>
<td>Chemotherapy</td>
</tr>
<tr>
<td><code>'79'</code></td>
<td>Allergy Testing</td>
</tr>
<tr>
<td><code>'80'</code></td>
<td>Immunizations</td>
</tr>
<tr>
<td><code>'81'</code></td>
<td>Routine Physical</td>
</tr>
<tr>
<td><code>'82'</code></td>
<td>Family Planning</td>
</tr>
<tr>
<td><code>'83'</code></td>
<td>Infertility</td>
</tr>
<tr>
<td><code>'84'</code></td>
<td>Abortion</td>
</tr>
<tr>
<td><code>'85'</code></td>
<td>AIDS</td>
</tr>
<tr>
<td><code>'86'</code></td>
<td>Emergency Services</td>
</tr>
<tr>
<td><code>'87'</code></td>
<td>Cancer</td>
</tr>
<tr>
<td><code>'88'</code></td>
<td>Pharmacy</td>
</tr>
<tr>
<td><code>'89'</code></td>
<td>Free Standing Prescription Drug</td>
</tr>
<tr>
<td><code>'90'</code></td>
<td>Mail Order Prescription Drug</td>
</tr>
<tr>
<td><code>'91'</code></td>
<td>Brand Name Prescription Drug</td>
</tr>
<tr>
<td><code>'92'</code></td>
<td>Generic Prescription Drug</td>
</tr>
<tr>
<td><code>'93'</code></td>
<td>Podiatry</td>
</tr>
<tr>
<td><code>'94'</code></td>
<td>Podiatry – Office Visits</td>
</tr>
<tr>
<td><code>'95'</code></td>
<td>Podiatry – Nursing Home Visits</td>
</tr>
<tr>
<td><code>'96'</code></td>
<td>Professional (Physician)</td>
</tr>
<tr>
<td><code>'97'</code></td>
<td>Anesthesiologist</td>
</tr>
<tr>
<td><code>'98'</code></td>
<td>Professional (Physician) Visit – Office</td>
</tr>
<tr>
<td><code>'99'</code></td>
<td>Professional (Physician) Visit – Inpatient</td>
</tr>
<tr>
<td><code>'A0'</code></td>
<td>Professional (Physician) Visit – Outpatient</td>
</tr>
<tr>
<td><code>'A1'</code></td>
<td>Professional (Physician) Visit – Nursing Home</td>
</tr>
<tr>
<td><code>'A2'</code></td>
<td>Professional (Physician) Visit – Skilled Nursing Facility</td>
</tr>
<tr>
<td><code>'A3'</code></td>
<td>Professional (Physician) Visit – Home</td>
</tr>
<tr>
<td><code>'A4'</code></td>
<td>Psychiatric</td>
</tr>
<tr>
<td><code>'A5'</code></td>
<td>Psychiatric – Room and Board</td>
</tr>
<tr>
<td><code>'A6'</code></td>
<td>Psychotherapy</td>
</tr>
<tr>
<td><code>'A7'</code></td>
<td>Psychiatric – Inpatient</td>
</tr>
<tr>
<td><code>'A8'</code></td>
<td>Psychiatric – Outpatient</td>
</tr>
<tr>
<td><code>'A9'</code></td>
<td>Rehabilitation</td>
</tr>
<tr>
<td><code>'AA'</code></td>
<td>Rehabilitation – Room and Board</td>
</tr>
<tr>
<td><code>'AB'</code></td>
<td>Rehabilitation – Inpatient</td>
</tr>
<tr>
<td><code>'AC'</code></td>
<td>Rehabilitation – Outpatient</td>
</tr>
<tr>
<td><code>'AD'</code></td>
<td>Occupational Therapy</td>
</tr>
<tr>
<td><code>'AE'</code></td>
<td>Physical Medicine</td>
</tr>
<tr>
<td><code>'AF'</code></td>
<td>Speech Therapy</td>
</tr>
<tr>
<td><code>'AG'</code></td>
<td>Skilled Nursing Care</td>
</tr>
<tr>
<td><code>'AH'</code></td>
<td>Skilled Nursing Care – Room and Board</td>
</tr>
<tr>
<td><code>'AI'</code></td>
<td>Substance Abuse</td>
</tr>
<tr>
<td><code>'AJ'</code></td>
<td>Alcoholism</td>
</tr>
<tr>
<td><code>'AK'</code></td>
<td>Drug Addiction</td>
</tr>
<tr>
<td><code>'AL'</code></td>
<td>Vision (Optometry)</td>
</tr>
<tr>
<td><code>'AM'</code></td>
<td>Frames</td>
</tr>
<tr>
<td><code>'AN'</code></td>
<td>Routine Exam</td>
</tr>
<tr>
<td><code>'AO'</code></td>
<td>Lenses</td>
</tr>
<tr>
<td><code>'AQ'</code></td>
<td>Nonmedically Necessary Physical</td>
</tr>
<tr>
<td><code>'AR'</code></td>
<td>Experimental Drug Therapy</td>
</tr>
<tr>
<td><code>'B1'</code></td>
<td>Burn Care</td>
</tr>
<tr>
<td><code>'B2'</code></td>
<td>Brand Name Prescription Drug – Formulary</td>
</tr>
<tr>
<td><code>'B3'</code></td>
<td>Brand Name Prescription Drug – Non-Formulary</td>
</tr>
<tr>
<td><code>'BA'</code></td>
<td>Independent Medical Evaluation</td>
</tr>
<tr>
<td><code>'BB'</code></td>
<td>Partial Hospitalization (Psychiatric)</td>
</tr>
<tr>
<td><code>'BC'</code></td>
<td>Day Care (Psychiatric)</td>
</tr>
<tr>
<td><code>'BD'</code></td>
<td>Cognitive Therapy</td>
</tr>
<tr>
<td><code>'BE'</code></td>
<td>Massage Therapy</td>
</tr>
<tr>
<td><code>'BF'</code></td>
<td>Pulmonary Rehabilitation</td>
</tr>
<tr>
<td><code>'BG'</code></td>
<td>Cardiac Rehabilitation</td>
</tr>
<tr>
<td><code>'BH'</code></td>
<td>Pediatric</td>
</tr>
<tr>
<td><code>'BI'</code></td>
<td>Nursery</td>
</tr>
<tr>
<td><code>'BJ'</code></td>
<td>Skin</td>
</tr>
<tr>
<td><code>'BK'</code></td>
<td>Orthopedic</td>
</tr>
<tr>
<td><code>'BL'</code></td>
<td>Cardiac</td>
</tr>
<tr>
<td><code>'BM'</code></td>
<td>Lymphatic</td>
</tr>
<tr>
<td><code>'BN'</code></td>
<td>Gastrointestinal</td>
</tr>
<tr>
<td><code>'BP'</code></td>
<td>Endocrine</td>
</tr>
<tr>
<td><code>'BQ'</code></td>
<td>Neurology</td>
</tr>
<tr>
<td><code>'BR'</code></td>
<td>Eye</td>
</tr>
<tr>
<td><code>'BS'</code></td>
<td>Invasive Procedures</td>
</tr>
<tr>
<td><code>'BT'</code></td>
<td>Gynecological</td>
</tr>
<tr>
<td><code>'BU'</code></td>
<td>Obstetrical</td>
</tr>
<tr>
<td><code>'BV'</code></td>
<td>Obstetrical/Gynecological</td>
</tr>
<tr>
<td><code>'BW'</code></td>
<td>Mail Order Prescription Drug: Brand Name</td>
</tr>
<tr>
<td><code>'BX'</code></td>
<td>Mail Order Prescription Drug: Generic</td>
</tr>
<tr>
<td><code>'BY'</code></td>
<td>Physician Visit – Office: Sick</td>
</tr>
<tr>
<td><code>'BZ'</code></td>
<td>Physician Visit – Office: Well</td>
</tr>
<tr>
<td><code>'C1'</code></td>
<td>Coronary Care</td>
</tr>
<tr>
<td><code>'CA'</code></td>
<td>Private Duty Nursing – Inpatient</td>
</tr>
<tr>
<td><code>'CB'</code></td>
<td>Private Duty Nursing – Home</td>
</tr>
<tr>
<td><code>'CC'</code></td>
<td>Surgical Benefits – Professional (Physician)</td>
</tr>
<tr>
<td><code>'CD'</code></td>
<td>Surgical Benefits – Facility</td>
</tr>
<tr>
<td><code>'CE'</code></td>
<td>Mental Health Provider – Inpatient</td>
</tr>
<tr>
<td><code>'CF'</code></td>
<td>Mental Health Provider – Outpatient</td>
</tr>
<tr>
<td><code>'CG'</code></td>
<td>Mental Health Facility – Inpatient</td>
</tr>
<tr>
<td><code>'CH'</code></td>
<td>Mental Health Facility – Outpatient</td>
</tr>
<tr>
<td><code>'CI'</code></td>
<td>Substance Abuse Facility – Inpatient</td>
</tr>
<tr>
<td><code>'CJ'</code></td>
<td>Substance Abuse Facility – Outpatient</td>
</tr>
<tr>
<td><code>'CK'</code></td>
<td>Screening X-ray</td>
</tr>
<tr>
<td><code>'CL'</code></td>
<td>Screening laboratory</td>
</tr>
<tr>
<td><code>'CM'</code></td>
<td>Mammogram, High Risk Patient</td>
</tr>
<tr>
<td><code>'CN'</code></td>
<td>Mammogram, Low Risk Patient</td>
</tr>
<tr>
<td><code>'CO'</code></td>
<td>Flu Vaccination</td>
</tr>
<tr>
<td><code>'CP'</code></td>
<td>Eyewear and Eyewear Accessories</td>
</tr>
<tr>
<td><code>'CQ'</code></td>
<td>Case Management</td>
</tr>
<tr>
<td><code>'DG'</code></td>
<td>Dermatology</td>
</tr>
<tr>
<td><code>'DM'</code></td>
<td>Durable Medical Equipment</td>
</tr>
<tr>
<td><code>'DS'</code></td>
<td>Diabetic Supplies</td>
</tr>
<tr>
<td><code>'GF'</code></td>
<td>Generic Prescription Drug – Formulary</td>
</tr>
<tr>
<td><code>'GN'</code></td>
<td>Generic Prescription Drug – Non-Formulary</td>
</tr>
<tr>
<td><code>'GY'</code></td>
<td>Allergy</td>
</tr>
<tr>
<td><code>'IC'</code></td>
<td>Intensive Care</td>
</tr>
<tr>
<td><code>'MH'</code></td>
<td>Mental Health</td>
</tr>
<tr>
<td><code>'NI'</code></td>
<td>Neonatal Intensive Care</td>
</tr>
<tr>
<td><code>'ON'</code></td>
<td>Oncology</td>
</tr>
<tr>
<td><code>'PT'</code></td>
<td>Physical Therapy</td>
</tr>
<tr>
<td><code>'PU'</code></td>
<td>Pulmonary</td>
</tr>
<tr>
<td><code>'RN'</code></td>
<td>Renal</td>
</tr>
<tr>
<td><code>'RT'</code></td>
<td>Residential Psychiatric Treatment</td>
</tr>
<tr>
<td><code>'TC'</code></td>
<td>Transitional Care</td>
</tr>
<tr>
<td><code>'TN'</code></td>
<td>Transitional Nursery Care</td>
</tr>
<tr>
<td><code>'UC'</code></td>
<td>Urgent Care</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_type_description"><span class="property-name">service_type_description</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Service type description)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Timestamp of most recent record update</p>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/eligibility_checks/{id}</span></button></p>
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
<li id="react-tabs-326" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-327">200</li>
</ul>
<div id="react-tabs-327" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-326">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“coverage_subscriber”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“appointment”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“eligibility”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“payer_name”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“coverage_details”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“query_date”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“service_type_description”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“patient”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“request_service_type”</span>: <span class="token string">“1”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“cob_level”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/comm_logs_create" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/comm_logs_create">
<div id="operation/comm_logs_create" class="sc-iCoGMd dolNKP" data-section-id="operation/comm_logs_create">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">comm_logs_create</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Create communication (phone call) logs</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“scheduling”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-htmcrh khIKSp" aria-expanded="true"></button><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">201&nbsp;</strong></button>Created</p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Appointment related with the phone call log</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="archived"><span class="property-name">archived</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Archived)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>If this phone call log is archived or not</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="author"><span class="property-name">author</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Author)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Author of post.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="cash_charged"><span class="property-name">cash_charged</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Cash charged)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount of cash needs to be charged</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_at"><span class="property-name">created_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="duration"><span class="property-name">duration</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Duration)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Duration of the phone call</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="message"><span class="property-name">message</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Message)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Additional message for the phone call</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="scheduled_time"><span class="property-name">scheduled_time</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Scheduled time)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Date of phone call, if&nbsp;<code>appointment</code>&nbsp;is set, this field will be set as the&nbsp;<code>scheduled_time</code>&nbsp;of that appointment</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="title"><span class="property-name">title</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Title)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Title of this log</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="type"><span class="property-name">type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Type of phone call log</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN iwuDdk http-verb post">post</span><span class="sc-jXcxbT hVdkvA">/api/comm_logs</span></button></p>
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
<li id="react-tabs-328" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-329">201</li>
</ul>
<div id="react-tabs-329" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-328">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“scheduled_time”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“archived”</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“appointment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“title”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“author”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“cash_charged”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“duration”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“patient”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“message”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“type”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/comm_logs_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/comm_logs_list">
<div id="operation/comm_logs_list" class="sc-iCoGMd dolNKP" data-section-id="operation/comm_logs_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">comm_logs_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search communicatioin (phone call) logs</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“scheduling”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
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
<tr class="">
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/comm_logs</span></button></p>
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
<li id="react-tabs-330" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-331">200</li>
</ul>
<div id="react-tabs-331" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-330">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“data”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
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
<div id="tag/Billing/operation/daysheet_credits_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/daysheet_credits_list">
<div id="operation/daysheet_credits_list" class="sc-iCoGMd dolNKP" data-section-id="operation/daysheet_credits_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">daysheet_credits_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve daysheet credits/adjustments report for a given date range</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”access-patient-payments”]</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="claim_type"><span class="property-name">claim_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(claim_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by professional or institutional claims. Can be one of (‘institutional’, ‘professional’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="credits_date_type"><span class="property-name">credits_date_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(credits_date_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by posted date or deposit date. Defaults to date of entry if not provided. Can be one of (‘credit’, ‘debit’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="end_date"><span class="property-name">end_date</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(end_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>End date of report (M/D/YYYY)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="examroom_id"><span class="property-name">examroom_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(examroom_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given examroom ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office_id"><span class="property-name">office_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given office</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient_id"><span class="property-name">patient_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given patient ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="pg_mode"><span class="property-name">pg_mode</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(pg_mode)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Runs report for all providers in the practice group</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="report_type"><span class="property-name">report_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(report_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by given value. Can be one of (‘reimbursement_analysis’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="start_date"><span class="property-name">start_date</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(start_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Start date of report (M/D/YYYY)</p>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/day_sheet_credits</span></button></p>
<div class="sc-ljsmAU IXrMk" aria-hidden="true">
<div class="sc-jlZJtj QgNfY">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
<div tabindex="0" role="button">
<div class="sc-dTSzeu hyeqlU"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/transactions_list_create" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/transactions_list_create">
<div id="operation/transactions_list_create" class="sc-iCoGMd dolNKP" data-section-id="operation/transactions_list_create">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">transactions_list_create</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Create transactions list request. Use the UUID returned in the response to retrieve the batch of records. Results returned in order of id or updated_at.</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>appointment</p>
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
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>doctor</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="line_item"><span class="property-name">line_item</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(line_item)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Line item ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="order_by"><span class="property-name">order_by</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(order_by)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Order results by a specific field. Valid options include [id, updated_at]. Default: id.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="page"><span class="property-name">page</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(page)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Number of page to return. Value between 1 and max number of pages in result set.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="page_size"><span class="property-name">page_size</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Page size)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Number of results to return per page. Value between 1 and 1000.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Posted date</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>since</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="verbose"><span class="property-name">verbose</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(verbose)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>When True includes full details</p>
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
<p><button class="sc-htmcrh khIKSp" aria-expanded="true"></button><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">201&nbsp;</strong></button>Created</p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="description"><span class="property-name">description</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Contains link to load the batch by UUID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="status"><span class="property-name">status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Status of the request. Upon creation this will be “In progress”</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(uuid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>UUID of the batch of patients.</p>
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
<p><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">500&nbsp;</strong></button>Internal Server Error</p>
</div>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN iwuDdk http-verb post">post</span><span class="sc-jXcxbT hVdkvA">/api/transactions_list</span></button></p>
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
<li id="react-tabs-332" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-333">201</li>
</ul>
<div id="react-tabs-333" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-332">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“status”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“uuid”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“description”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/transactions_list_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/transactions_list_list">
<div id="operation/transactions_list_list" class="sc-iCoGMd dolNKP" data-section-id="operation/transactions_list_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">transactions_list_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search transactions in batches. Results returned in order of ID or updated_at.</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(uuid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The UUID token for the batch of transactions. This is returned in the response of the&nbsp;<code>create</code>&nbsp;endpoint.</p>
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
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="pagination"><button aria-label="expand properties"><span class="property-name">pagination</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">object</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(pagination)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>information on the total pages, current page and total count.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="results"><button aria-label="expand properties"><span class="property-name">results</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(data)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>result data. only presented when the status is “Complete”</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="status"><span class="property-name">status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Status of the request. Possible values are “In progress” or “Complete”.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(uuid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>UUID of the batch.</p>
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
<p><button class="sc-htmcrh jcAmZH" aria-expanded="true"></button><button class="sc-htmcrh jcAmZH" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">500&nbsp;</strong></button>Internal Server Error</p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="detail"><span class="property-name">detail</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Detail)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Instructions on what to do next</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="status"><span class="property-name">status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Either “Error” or “Failed”</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(UUID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The UUID used to get the data for the asynchronous request</p>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/transactions_list</span></button></p>
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
<li id="react-tabs-334" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-335">200</li>
<li id="react-tabs-336" class="tab-error" role="tab" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-337">500</li>
</ul>
<div id="react-tabs-335" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-334">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“status”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“pagination”</span>: <span class="token punctuation">{</span></p>
<ul class="obj collapsible">
<li>
<div class="hoverable collapsed"><span class="property token string">“count”</span>: <span class="token keyword">null</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“pages”</span>: <span class="token keyword">null</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“page”</span>: <span class="token keyword">null</span></div>
</li>
</ul>
<p><span class="token punctuation">}</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“results”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“uuid”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="react-tabs-337" class="react-tabs__tab-panel" role="tabpanel" aria-labelledby="react-tabs-336"></div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/patient_payments_read" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/patient_payments_read">
<div id="operation/patient_payments_read" class="sc-iCoGMd dolNKP" data-section-id="operation/patient_payments_read">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">patient_payments_read</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve an existing patient payment</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“access-patient-payments”,”billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="amount"><span class="property-name">amount</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Amount)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount of cash for this payment, cannot be zero</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>If this is absent, the apponitment will be inferred from line item</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_at"><span class="property-name">created_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_by"><span class="property-name">created_by</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created by)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="line_item"><span class="property-name">line_item</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Line item)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="notes"><span class="property-name">notes</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Notes)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="payment_method"><span class="property-name">payment_method</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Payment method)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DRCP”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CASH”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CHCK”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DBIT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CRDT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AMEX”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“VISA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“MSTR”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DISC”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“SQR1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“SQRE”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“PTPA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“ONPT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“OTHR”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p><code>"CASH", "CHCK" for Check, "DBIT" for Debit, "CRDT" for Credit Card, "AMEX" for American Express, "VISA", "MSTR" for Mastercard, "DISC" for Discover, "SQR1" for Square (legacy), "SQRE" for Square, "PTPA" for Patient Payments, "ONPT" for onpatient, "OTHR" for Other</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="payment_transaction_type"><span class="property-name">payment_transaction_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Payment transaction type)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“REF”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“COR”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“COPAY”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“COINSR”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“OTHR”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p><code>"" for Credit, "REF" for Refund, "COR" for Correction, "COPAY" for Copay, "COINSR" for Coinsurance, "OTHR" for Other</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Posted date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="received_date"><span class="property-name">received_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Received date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="trace_number"><span class="property-name">trace_number</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Trace number)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/patient_payments/{id}</span></button></p>
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
<li id="react-tabs-338" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-339">200</li>
</ul>
<div id="react-tabs-339" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-338">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“line_item”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“posted_date”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“appointment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“payment_method”</span>: <span class="token string">“DRCP”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“payment_transaction_type”</span>: <span class="token string">“”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_by”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“amount”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“notes”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“trace_number”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“patient”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“received_date”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/patient_payments_create" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/patient_payments_create">
<div id="operation/patient_payments_create" class="sc-iCoGMd dolNKP" data-section-id="operation/patient_payments_create">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">patient_payments_create</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Create patient payment</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“access-patient-payments”,”billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-htmcrh khIKSp" aria-expanded="true"></button><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">201&nbsp;</strong></button>Created</p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="amount"><span class="property-name">amount</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Amount)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount of cash for this payment, cannot be zero</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>If this is absent, the apponitment will be inferred from line item</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_at"><span class="property-name">created_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_by"><span class="property-name">created_by</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created by)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="line_item"><span class="property-name">line_item</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Line item)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="notes"><span class="property-name">notes</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Notes)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="payment_method"><span class="property-name">payment_method</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Payment method)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DRCP”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CASH”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CHCK”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DBIT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CRDT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AMEX”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“VISA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“MSTR”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DISC”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“SQR1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“SQRE”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“PTPA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“ONPT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“OTHR”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p><code>"CASH", "CHCK" for Check, "DBIT" for Debit, "CRDT" for Credit Card, "AMEX" for American Express, "VISA", "MSTR" for Mastercard, "DISC" for Discover, "SQR1" for Square (legacy), "SQRE" for Square, "PTPA" for Patient Payments, "ONPT" for onpatient, "OTHR" for Other</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="payment_transaction_type"><span class="property-name">payment_transaction_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Payment transaction type)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“REF”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“COR”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“COPAY”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“COINSR”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“OTHR”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p><code>"" for Credit, "REF" for Refund, "COR" for Correction, "COPAY" for Copay, "COINSR" for Coinsurance, "OTHR" for Other</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Posted date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="received_date"><span class="property-name">received_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Received date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="trace_number"><span class="property-name">trace_number</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Trace number)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN iwuDdk http-verb post">post</span><span class="sc-jXcxbT hVdkvA">/api/patient_payments</span></button></p>
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
<li id="react-tabs-340" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-341">201</li>
</ul>
<div id="react-tabs-341" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-340">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“line_item”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“posted_date”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“appointment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“payment_method”</span>: <span class="token string">“DRCP”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“payment_transaction_type”</span>: <span class="token string">“”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_by”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“amount”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“notes”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“trace_number”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“patient”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“received_date”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/patient_payments_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/patient_payments_list">
<div id="operation/patient_payments_list" class="sc-iCoGMd dolNKP" data-section-id="operation/patient_payments_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">patient_payments_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search patient payments</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“access-patient-payments”,”billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
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
<tr class="">
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/patient_payments</span></button></p>
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
<li id="react-tabs-342" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-343">200</li>
</ul>
<div id="react-tabs-343" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-342">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“data”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
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
<div id="tag/Billing/operation/clinical_note_field_values_list_create" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/clinical_note_field_values_list_create">
<div id="operation/clinical_note_field_values_list_create" class="sc-iCoGMd dolNKP" data-section-id="operation/clinical_note_field_values_list_create">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">clinical_note_field_values_list_create</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Create clinical note field value list request. Use the UUID returned in the response to retrieve the batch of records. Results returned in order of ID.</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“scheduling”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Appointment ID filter</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="clinical_note_template"><span class="property-name">clinical_note_template</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(clinical_note_template)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>ID of clinical note report template</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="order_by"><span class="property-name">order_by</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(order_by)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Order results by a specific field. Valid options include [id, updated_at]. Default: id.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="page"><span class="property-name">page</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Page)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Number of page to return. Value between 1 and max number of pages in result set.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="page_size"><span class="property-name">page_size</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Page size)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Number of results to return per page. Value between 1 and 20000.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Inclusive lower bound on updated_at</p>
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
<p><button class="sc-htmcrh khIKSp" aria-expanded="true"></button><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">201&nbsp;</strong></button>Created</p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="description"><span class="property-name">description</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(description)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Contains link to load the batch by UUID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="status"><span class="property-name">status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Status of the request. Upon creation this will be “In progress”</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(uuid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>UUID of the batch.</p>
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
<p><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">500&nbsp;</strong></button>Internal Server Error</p>
</div>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN iwuDdk http-verb post">post</span><span class="sc-jXcxbT hVdkvA">/api/clinical_note_field_values_list</span></button></p>
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
<li id="react-tabs-344" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-345">201</li>
</ul>
<div id="react-tabs-345" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-344">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“status”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“uuid”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“description”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/billing_profiles_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/billing_profiles_list">
<div id="operation/billing_profiles_list" class="sc-iCoGMd dolNKP" data-section-id="operation/billing_profiles_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">billing_profiles_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">

Retrieve or search billing profiles

</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions: </span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">["billing","show-billing-tab"]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access: </span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">"share_billing_profiles" need to be set for data access among practice</span></div>
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
<div class="sc-eGJWMs kHhkxY">query Parameters</div>
</div>
</div>
<div>
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
<tr class="last ">
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
</tbody>
</table>
</div>
<div>
<h3 class="sc-fIxmyt jVZBMd">Responses</h3>
<div>

<button class="sc-htmcrh khIKSp" aria-expanded="true"></button><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">200 </strong></button>OK
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

<button class="sc-htmcrh isKOph" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">500 </strong></button>Internal Server Error

&nbsp;

</div>
Example:

</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">

Method: get

API URL:/api/billing_profiles
<div>
<h3 class="sc-kEqXSa cAMyfw">Response samples</h3>
<div class="sc-cxNHIi jdxQrI" data-tabs="true">
<ul class="react-tabs__tab-list" role="tablist">
 	<li id="react-tabs-346" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-347">200</li>
</ul>
<div id="react-tabs-347" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-346">
<div>
<div class="sc-Arkif eJDRKz">

<span class="sc-cOifOu bFIVui">Content type</span>
<div class="sc-bBjRSN iPPdF">application/json</div>
<ul class="obj collapsible">
 	<li>
<div class="hoverable "><span class="property token string">"previous"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"data"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable">

<span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable">

<span class="property token string">"cpt_codes"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable">

<span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable">

<span class="property token string">"diagnosis_pointers_icd9"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable collapsed"><span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"price"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"ndc_code"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable">
<span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"ndc_package_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"units"</span>: <span class="token string">"F2"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"quantity"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"diagnosis_pointers_icd10"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable collapsed"><span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"modifiers"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable collapsed"><span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"quantity"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"archived"</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"icd9_codes"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable collapsed"><span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"name"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"hcpcs_codes"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable">

<span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable">

<span class="property token string">"diagnosis_pointers_icd9"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable collapsed"><span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"price"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"ndc_code"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable">

<span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"ndc_package_code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"units"</span>: <span class="token string">"F2"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"quantity"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"diagnosis_pointers_icd10"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable collapsed"><span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"modifiers"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable collapsed"><span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"quantity"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"created_at"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"doctor"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"updated_at"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"custom_procedure_codes"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable">
<span class="token punctuation">{</span>
<ul class="obj collapsible">
 	<li>
<div class="hoverable collapsed"><span class="property token string">"price"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"code"</span>: <span class="token string">"string"</span><span class="token punctuation">,</span></div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"quantity"</span>: <span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable">

<span class="property token string">"icd10_codes"</span>: <span class="token punctuation">[</span>
<ul class="array collapsible">
 	<li>
<div class="hoverable collapsed"><span class="token string">"string"</span></div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable collapsed"><span class="property token string">"id"</span>: <span class="token number">0</span></div></li>
</ul>
<span class="token punctuation">}</span>

</div></li>
</ul>
<span class="token punctuation">]</span><span class="token punctuation">,</span>

</div></li>
 	<li>
<div class="hoverable "><span class="property token string">"next"</span>: <span class="token string">"string"</span></div></li>
</ul>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA"></div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json"><code></code></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<style>ul {list-style-type: none;<span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;"}</style>
</div>
<div id="tag/Billing/operation/billing_profiles_read" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/billing_profiles_read">
<div id="operation/billing_profiles_read" class="sc-iCoGMd dolNKP" data-section-id="operation/billing_profiles_read">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">billing_profiles_read</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve an existing billing profiles</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_billing_profiles” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="archived"><span class="property-name">archived</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Archived)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="cpt_codes"><button aria-label="expand properties"><span class="property-name">cpt_codes</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Cpt codes)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Array of CPT Code objects</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_at"><span class="property-name">created_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="custom_procedure_codes"><button aria-label="expand properties"><span class="property-name">custom_procedure_codes</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Custom procedure codes)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Array of custom procedure code objects</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="hcpcs_codes"><button aria-label="expand properties"><span class="property-name">hcpcs_codes</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Hcpcs codes)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Array of HCPCS Code objects</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="icd10_codes"><span class="property-name">icd10_codes</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">strings</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Icd10 codes)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>ICD10 Codes represented in string format</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="icd9_codes"><span class="property-name">icd9_codes</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">strings</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Icd9 codes)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>ICD9 Codes represented in string format</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="name"><span class="property-name">name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/billing_profiles/{id}</span></button></p>
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
<li id="react-tabs-348" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-349">200</li>
</ul>
<div id="react-tabs-349" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-348">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable ">
<p><span class="property token string">“cpt_codes”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“archived”</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“icd9_codes”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token string">“string”</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“name”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“hcpcs_codes”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“custom_procedure_codes”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“icd10_codes”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token string">“string”</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/line_item_deletions_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/line_item_deletions_list">
<div id="operation/line_item_deletions_list" class="sc-iCoGMd dolNKP" data-section-id="operation/line_item_deletions_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">line_item_deletions_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search billing line item deletions. When a billing line item is deleted, a record of its original ID and the appointment it was attached to will be logged and is accessible from this resource.</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment_id"><span class="property-name">appointment_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The original appointment ID to filter results by</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The datetime to query by</p>
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
<p><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">200</strong></button></p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="next"><span class="property-name">next</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(next)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Next paginated page</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
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
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="results"><button aria-label="expand properties"><span class="property-name">results</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(data)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Result data</p>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/line_item_deletions</span></button></p>
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
<li id="react-tabs-350" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-351">200</li>
</ul>
<div id="react-tabs-351" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-350">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“results”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
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
<div id="tag/Billing/operation/transactions_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/transactions_list">
<div id="operation/transactions_list" class="sc-iCoGMd dolNKP" data-section-id="operation/transactions_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">transactions_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search insurance transactions associated with billing line items</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="line_item"><span class="property-name">line_item</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(line_item)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/transactions</span></button></p>
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
<li id="react-tabs-352" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-353">200</li>
</ul>
<div id="react-tabs-353" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-352">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“data”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
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
<div id="tag/Billing/operation/custom_insurance_plan_names_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/custom_insurance_plan_names_list">
<div id="operation/custom_insurance_plan_names_list" class="sc-iCoGMd dolNKP" data-section-id="operation/custom_insurance_plan_names_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">custom_insurance_plan_names_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search custom insurance plan names</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“settings”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">Data access among practice is available</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="name"><span class="property-name">name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="user"><span class="property-name">user</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(user)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/custom_insurance_plan_names</span></button></p>
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
<li id="react-tabs-354" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-355">200</li>
</ul>
<div id="react-tabs-355" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-354">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“data”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
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
<div id="tag/Billing/operation/daysheet_totals_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/daysheet_totals_list">
<div id="operation/daysheet_totals_list" class="sc-iCoGMd dolNKP" data-section-id="operation/daysheet_totals_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">daysheet_totals_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve daysheet totals report for a given date range</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”access-patient-payments”]</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="cash_view_type"><span class="property-name">cash_view_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(cash_view_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Includes moved cash if value of ‘simple’ is passed. Can be one of (‘simple’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="charges_date_type"><span class="property-name">charges_date_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(charges_date_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by scheduled time or date of entry if not provided. Can be one of (‘scheduled_time’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="credits_date_type"><span class="property-name">credits_date_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(credits_date_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by date of service if receives value of ‘check’ otherwise defaults to posted date. Can be one of (‘check’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="end_date"><span class="property-name">end_date</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(end_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>End date of report (M/D/YYYY)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="examroom_id"><span class="property-name">examroom_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(examroom_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given examroom ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="group_by"><span class="property-name">group_by</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(group_by)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Groups data</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office_id"><span class="property-name">office_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given office</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient_id"><span class="property-name">patient_id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient_id)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by a given patient ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="pg_mode"><span class="property-name">pg_mode</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(pg_mode)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Runs report for all providers in the practice group</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="report_type"><span class="property-name">report_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(report_type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Filters report by given value. Can be one of (‘reimbursement_analysis’, ‘ ‘)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="start_date"><span class="property-name">start_date</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(start_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Start date of report (M/D/YYYY)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="sub_group_by"><span class="property-name">sub_group_by</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(sub_group_by)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Sub-groups data</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="tertiary_group_by"><span class="property-name">tertiary_group_by</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(tertiary_group_by)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Tertiary Groups data</p>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/day_sheet_totals</span></button></p>
<div class="sc-ljsmAU IXrMk" aria-hidden="true">
<div class="sc-jlZJtj QgNfY">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
<div tabindex="0" role="button">
<div class="sc-dTSzeu hyeqlU"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/transactions_read" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/transactions_read">
<div id="operation/transactions_read" class="sc-iCoGMd dolNKP" data-section-id="operation/transactions_read">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">transactions_read</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve an existing insurance transaction</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="line_item"><span class="property-name">line_item</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(line_item)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="adjustment"><span class="property-name">adjustment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Adjustment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Adjustment from total billed</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="adjustment_group_code"><span class="property-name">adjustment_group_code</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Adjustment group code)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CO”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“OA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“PI”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“PR”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Group code for adjustment</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="adjustment_reason"><span class="property-name">adjustment_reason</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Adjustment reason)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“-3”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“-2”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“-4”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“-1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“0”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“2”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“3”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“4”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“5”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“6”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“7”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“8”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“9”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“10”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“11”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“12”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“13”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“14”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“15”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“16”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“18”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“19”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“20”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“21”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“22”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“23”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“24”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“26”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“27”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“29”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“31”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“32”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“33”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“34”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“35”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“39”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“40”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“44”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“45”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“49”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“50”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“51”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“53”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“54”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“55”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“56”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“58”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“59”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“60”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“61”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“66”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“69”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“70”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“74”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“75”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“76”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“78”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“85”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“87”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“89”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“90”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“91”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“94”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“95”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“96”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“97”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“100”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“101”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“102”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“103”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“104”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“105”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“106”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“107”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“108”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“109”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“110”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“111”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“112”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“114”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“115”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“116”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“117”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“118”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“119”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“121”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“122”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“125”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“128”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“129”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“130”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“131”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“132”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“133”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“134”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“135”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“136”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“137”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“138”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“139”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“140”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“142”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“143”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“144”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“146”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“147”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“148”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“149”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“150”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“151”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“152”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“153”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“154”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“155”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“157”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“158”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“159”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“160”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“161”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“162”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“163”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“164”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“165”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“166”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“167”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“168”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“169”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“170”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“171”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“172”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“173”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“174”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“175”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“176”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“177”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“178”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“179”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“180”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“181”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“182”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“183”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“184”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“185”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“186”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“187”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“188”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“189”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“190”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“191”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“192”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“193”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“194”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“195”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“197”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“198”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“199”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“200”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“201”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“202”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“203”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“204”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“205”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“206”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“207”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“208”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“209”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“210”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“211”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“212”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“213”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“214”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“215”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“216”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“217”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“218”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“219”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“220”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“221”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“222”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“223”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“224”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“225”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“226”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“227”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“228”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“229”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“230”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“231”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“232”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“233”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“234”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“235”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“236”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“237”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“238”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“239”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“240”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“241”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“242”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“243”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“244”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“245”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“246”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“247”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“248”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“249”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“250”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“251”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“252”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“253”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“254”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“256”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“257”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“258”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“259”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“260”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“261”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“262”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“263”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“264”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“265”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“266”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“267”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“268”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“269”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“270”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“271”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“272”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“273”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“274”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“275”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“276”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“277”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“279”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“286”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“287”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“288”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“297”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A0”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A5”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A6”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A7”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A8”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B4”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B5”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B7”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B8”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B9”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B10”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B11”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B12”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B13”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B14”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B15”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B16”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B20”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B22”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“B23”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P2”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P3”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P4”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P5”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P6”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P7”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P8”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P9”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P10”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P11”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P12”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P13”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P14”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P15”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P16”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P17”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P18”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P19”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P20”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P21”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P22”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“P23”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“W1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“W2”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“W3”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“W4”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Y1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Y2”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Y3”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Reason for adjustment</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Appointment ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="check_date"><span class="property-name">check_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Check date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Date of check</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="claim_status"><span class="property-name">claim_status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Claim status)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“0”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“2”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“3”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“4”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“5”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“10”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“13”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“15”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“16”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“17”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“19”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“20”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“21”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“22”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“23”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“25”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“27”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Status of claim</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_at"><span class="property-name">created_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Doctor ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ins_name"><span class="property-name">ins_name</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Ins name)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Can be one of the following,&nbsp;<code>1</code>(Primary Insurance),&nbsp;<code>2</code>(Secondary Insurance)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ins_paid"><span class="property-name">ins_paid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Ins paid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="insurance"><button aria-label="expand properties"><span class="property-name">insurance</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">object</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Insurance)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Information about the insurance associated with the transaction.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="line_item"><span class="property-name">line_item</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Line item)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>ID of&nbsp;<code>/api/line_item</code>&nbsp;object</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Posted date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Date when transaction is created</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="trace_number"><span class="property-name">trace_number</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Trace number)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Check number</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/transactions/{id}</span></button></p>
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
<li id="react-tabs-356" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-357">200</li>
</ul>
<div id="react-tabs-357" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-356">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable ">
<p><span class="property token string">“insurance”</span>: <span class="token punctuation">{</span></p>
<ul class="obj collapsible">
<li>
<div class="hoverable collapsed"><span class="property token string">“id_number”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“message”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“name”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><span class="token punctuation">}</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“ins_paid”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“posted_date”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“appointment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“ins_name”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“adjustment_group_code”</span>: <span class="token string">“”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“line_item”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“claim_status”</span>: <span class="token string">“”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“check_date”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“trace_number”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“adjustment_reason”</span>: <span class="token string">“-3”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“patient”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“adjustment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_at”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/procedures_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/procedures_list">
<div id="operation/procedures_list" class="sc-iCoGMd dolNKP" data-section-id="operation/procedures_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">procedures_list</h2>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="mu_date"><span class="property-name">mu_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(mu_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="mu_date_range"><span class="property-name">mu_date_range</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(mu_date_range)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/procedures</span></button></p>
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
<li id="react-tabs-358" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-359">200</li>
</ul>
<div id="react-tabs-359" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-358">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“data”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
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
<div id="tag/Billing/operation/eligibility_checks_list_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/eligibility_checks_list_list">
<div id="operation/eligibility_checks_list_list" class="sc-iCoGMd dolNKP" data-section-id="operation/eligibility_checks_list_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">eligibility_checks_list_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search eligibility checks in batches. Results returned in order of ID or updated_at.</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“scheduling”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(uuid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The UUID token for the batch of eligibility checks. This is returned in the response of the&nbsp;<code>create</code>&nbsp;endpoint.</p>
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
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="pagination"><button aria-label="expand properties"><span class="property-name">pagination</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">object</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(pagination)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>information on the total pages, current page and total count.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT sc-gSYDnn eJvdeH dLEyPf keOPIh" title="results"><button aria-label="expand properties"><span class="property-name">results</span></button></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">objects</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(data)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>result data. only presented when the status is “Complete”</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="status"><span class="property-name">status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Status of the request. Possible values are “Complete” or “In progress”.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(uuid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>UUID of the batch.</p>
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
<p><button class="sc-htmcrh jcAmZH" aria-expanded="true"></button><button class="sc-htmcrh jcAmZH" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">500&nbsp;</strong></button>Internal Server Error</p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="detail"><span class="property-name">detail</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Detail)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Instructions on what to do next</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="status"><span class="property-name">status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Either “Error” or “Failed”</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="uuid"><span class="property-name">uuid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(UUID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>The UUID used to get the data for the asynchronous request</p>
</div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="sc-jSFjdj sc-gKAaRy dYGhuI fTsuzH">
<div class="sc-EZqKI iONckA">
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/eligibility_checks_list</span></button></p>
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
<li id="react-tabs-360" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-361">200</li>
<li id="react-tabs-362" class="tab-error" role="tab" aria-selected="false" aria-disabled="false" aria-controls="react-tabs-363">500</li>
</ul>
<div id="react-tabs-361" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-360">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“status”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“pagination”</span>: <span class="token punctuation">{</span></p>
<ul class="obj collapsible">
<li>
<div class="hoverable collapsed"><span class="property token string">“count”</span>: <span class="token keyword">null</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“pages”</span>: <span class="token keyword">null</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable collapsed"><span class="property token string">“page”</span>: <span class="token keyword">null</span></div>
</li>
</ul>
<p><span class="token punctuation">}</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“results”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“uuid”</span>: <span class="token string">“string”</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="react-tabs-363" class="react-tabs__tab-panel" role="tabpanel" aria-labelledby="react-tabs-362"></div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/procedures_read" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/procedures_read">
<div id="operation/procedures_read" class="sc-iCoGMd dolNKP" data-section-id="operation/procedures_read">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">procedures_read</h2>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="mu_date"><span class="property-name">mu_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(mu_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="mu_date_range"><span class="property-name">mu_date_range</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(mu_date_range)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Appointment ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="code"><span class="property-name">code</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Code)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_at"><span class="property-name">created_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="date"><span class="property-name">date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Date of service for the procedure</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="description"><span class="property-name">description</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Description)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Doctor ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Patient ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="procedure_type"><span class="property-name">procedure_type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Procedure type)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“C”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“H”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“U”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“S”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>One of&nbsp;<code>"CPT(C)"</code>,&nbsp;<code>"HCPCS(H)"</code>,&nbsp;<code>"Custom(U)"</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="status"><span class="property-name">status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/procedures/{id}</span></button></p>
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
<li id="react-tabs-364" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-365">200</li>
</ul>
<div id="react-tabs-365" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-364">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“status”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“code”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“patient”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“description”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“procedure_type”</span>: <span class="token string">“C”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“date”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“appointment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/line_items_update" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/line_items_update">
<div id="operation/line_items_update" class="sc-iCoGMd dolNKP" data-section-id="operation/line_items_update">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">line_items_update</h2>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">204&nbsp;</strong></button>No Content</p>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN jzfCVP http-verb put">put</span><span class="sc-jXcxbT hVdkvA">/api/line_items/{id}</span></button></p>
<div class="sc-ljsmAU IXrMk" aria-hidden="true">
<div class="sc-jlZJtj QgNfY">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
<div tabindex="0" role="button">
<div class="sc-dTSzeu hyeqlU"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/line_items_partial_update" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/line_items_partial_update">
<div id="operation/line_items_partial_update" class="sc-iCoGMd dolNKP" data-section-id="operation/line_items_partial_update">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">line_items_partial_update</h2>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">204&nbsp;</strong></button>No Content</p>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN crGsiu http-verb patch">patch</span><span class="sc-jXcxbT hVdkvA">/api/line_items/{id}</span></button></p>
<div class="sc-ljsmAU IXrMk" aria-hidden="true">
<div class="sc-jlZJtj QgNfY">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
<div tabindex="0" role="button">
<div class="sc-dTSzeu hyeqlU"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/line_items_read" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/line_items_read">
<div id="operation/line_items_read" class="sc-iCoGMd dolNKP" data-section-id="operation/line_items_read">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">line_items_read</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve an existing billing line item</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date_range"><span class="property-name">service_date_range</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date_range)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Appointment ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="code"><span class="property-name">code</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Code)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="diagnosis_pointers"><span class="property-name">diagnosis_pointers</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">strings</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Diagnosis pointers)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>List of 4 diagnosis pointers</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="procedure_type"><span class="property-name">procedure_type</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Procedure type)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“C”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“H”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“U”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“S”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>One of&nbsp;<code>"CPT(C)"</code>,&nbsp;<code>"HCPCS(H)"</code>,&nbsp;<code>"Custom(U)"</code>, use 1 character identifier when using&nbsp;<code>POST</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="adjustment"><span class="property-name">adjustment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Adjustment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Adjustment from total billed</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="allowed"><span class="property-name">allowed</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Allowed)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount allowed by insurance</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="balance_ins"><span class="property-name">balance_ins</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Balance ins)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Insurance balance</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="balance_pt"><span class="property-name">balance_pt</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Balance pt)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Patient balance</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="balance_total"><span class="property-name">balance_total</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Balance total)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Total balance</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="billed"><span class="property-name">billed</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Billed)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Total billed</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="billing_status"><span class="property-name">billing_status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Billing status)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Incomplete Information”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process Emdeon”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process iHCFA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process Gateway”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process Jopari”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process Waystar”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process EPS”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected Emdeon”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected iHCFA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected Gateway”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected Jopari”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected Waystar”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected EPS”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process Payer”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Payer Acknowledged”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected Payer”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Paid in Full”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Partially Paid”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Coordination of Benefits”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“ERA Received”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“ERA Denied”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>One of&nbsp;<code>""</code>,&nbsp;<code>"Incomplete Information"</code>,&nbsp;<code>"In Process Emdeon"</code>,&nbsp;<code>"In Process iHCFA"</code>,&nbsp;<code>"In Process Gateway"</code>,&nbsp;<code>"Rejected Emdeon"</code>,&nbsp;<code>"Rejected iHCFA"</code>,&nbsp;<code>"Rejected Gateway"</code>,&nbsp;<code>"In Process Payer"</code>,&nbsp;<code>"Payer Acknowledged"</code>,&nbsp;<code>"Rejected Payer"</code>,&nbsp;<code>"Paid in Full"</code>,&nbsp;<code>"Partially Paid"</code>,&nbsp;<code>"Coordination of Benefits"</code>,&nbsp;<code>"ERA Received"</code>,&nbsp;<code>"ERA Denied"</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="denied_flag"><span class="property-name">denied_flag</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Denied flag)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="description"><span class="property-name">description</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Description)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Doctor ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="expected_reimbursement"><span class="property-name">expected_reimbursement</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Expected reimbursement)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ins_total"><span class="property-name">ins_total</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Ins total)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Total amount paid by patient’s insurers</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ins1_paid"><span class="property-name">ins1_paid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Ins1 paid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount paid by patient’s primary insurer</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ins2_paid"><span class="property-name">ins2_paid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Ins2 paid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount paid by patient’s secondary insurer</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ins3_paid"><span class="property-name">ins3_paid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Ins3 paid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount paid by patinet’s tertiary insurer</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="insurance_status"><span class="property-name">insurance_status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Insurance status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>This corresponds to the “Status/Adj Type” from billing detail screen</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="modifiers"><span class="property-name">modifiers</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">strings</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Modifiers)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>List of 4 code modifiers</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="paid_total"><span class="property-name">paid_total</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Paid total)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Total amount paid</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Patient ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Posted date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>date of line_item creation</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="price"><span class="property-name">price</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Price)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Price of procedure</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="pt_paid"><span class="property-name">pt_paid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Pt paid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount paid by patient</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="quantity"><span class="property-name">quantity</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Quantity)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Service date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Date on which the service was rendered</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="units"><span class="property-name">units</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Units)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Default to “UN”</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/line_items/{id}</span></button></p>
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
<li id="react-tabs-366" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-367">200</li>
</ul>
<div id="react-tabs-367" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-366">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“code”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“ins3_paid”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“posted_date”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“billing_status”</span>: <span class="token string">“”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“pt_paid”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“allowed”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“patient”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“adjustment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“balance_pt”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“units”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“balance_ins”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“paid_total”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“diagnosis_pointers”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token string">“string”</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“appointment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“description”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“balance_total”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“price”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“expected_reimbursement”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“ins2_paid”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“ins1_paid”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“insurance_status”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“billed”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“modifiers”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token string">“string”</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“denied_flag”</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“ins_total”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“procedure_type”</span>: <span class="token string">“C”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“service_date”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“quantity”</span>: <span class="token number">0</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/line_items_delete" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/line_items_delete">
<div id="operation/line_items_delete" class="sc-iCoGMd dolNKP" data-section-id="operation/line_items_delete">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">line_items_delete</h2>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">204&nbsp;</strong></button>No Content</p>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN bVkru http-verb delete">delete</span><span class="sc-jXcxbT hVdkvA">/api/line_items/{id}</span></button></p>
<div class="sc-ljsmAU IXrMk" aria-hidden="true">
<div class="sc-jlZJtj QgNfY">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
<div tabindex="0" role="button">
<div class="sc-dTSzeu hyeqlU"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/patient_payment_log_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/patient_payment_log_list">
<div id="operation/patient_payment_log_list" class="sc-iCoGMd dolNKP" data-section-id="operation/patient_payment_log_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">patient_payment_log_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search patient payment logs</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
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
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/patient_payment_log</span></button></p>
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
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“data”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
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
<div id="tag/Billing/operation/patient_payment_log_read" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/patient_payment_log_read">
<div id="operation/patient_payment_log_read" class="sc-iCoGMd dolNKP" data-section-id="operation/patient_payment_log_read">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">patient_payment_log_read</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve an existing patient payment log</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="action"><span class="property-name">action</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Action)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“C”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“U”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“D”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“F”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“A”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p><code>C</code>(Create),&nbsp;<code>U</code>(Update),&nbsp;<code>D</code>(Delete),&nbsp;<code>F</code>(Fill),&nbsp;<code>A</code>(Autofill)</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="amount"><span class="property-name">amount</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Amount)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>ID of appointment associated with the payment</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_by"><span class="property-name">created_by</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created by)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>ID of user who created the payment</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="payment_method"><span class="property-name">payment_method</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Payment method)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DRCP”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CASH”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CHCK”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DBIT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“CRDT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“AMEX”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“VISA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“MSTR”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“DISC”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“SQR1”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“SQRE”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“PTPA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“ONPT”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“OTHR”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p><code>"CASH", "CHCK" for Check, "DBIT" for Debit, "CRDT" for Credit Card, "AMEX" for American Express, "VISA", "MSTR" for Mastercard, "DISC" for Discover, "SQR1" for Square (legacy), "SQRE" for Square, "PTPA" for Patient Payments, "ONPT" for onpatient, "OTHR" for Other</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="source"><span class="property-name">source</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Source)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/patient_payment_log/{id}</span></button></p>
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
<li id="react-tabs-370" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-371">200</li>
</ul>
<div id="react-tabs-371" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-370">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“appointment”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“payment_method”</span>: <span class="token string">“DRCP”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_by”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“source”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“amount”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“action”</span>: <span class="token string">“C”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“patient”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/comm_logs_update" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/comm_logs_update">
<div id="operation/comm_logs_update" class="sc-iCoGMd dolNKP" data-section-id="operation/comm_logs_update">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">comm_logs_update</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Update an existing communication (phone call) logs</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“scheduling”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">204&nbsp;</strong></button>No Content</p>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN jzfCVP http-verb put">put</span><span class="sc-jXcxbT hVdkvA">/api/comm_logs/{id}</span></button></p>
<div class="sc-ljsmAU IXrMk" aria-hidden="true">
<div class="sc-jlZJtj QgNfY">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
<div tabindex="0" role="button">
<div class="sc-dTSzeu hyeqlU"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/comm_logs_partial_update" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/comm_logs_partial_update">
<div id="operation/comm_logs_partial_update" class="sc-iCoGMd dolNKP" data-section-id="operation/comm_logs_partial_update">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">comm_logs_partial_update</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Update an existing communication (phone call) logs</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“scheduling”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"></button><button class="sc-htmcrh fllTnD" disabled="disabled" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">204&nbsp;</strong></button>No Content</p>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN crGsiu http-verb patch">patch</span><span class="sc-jXcxbT hVdkvA">/api/comm_logs/{id}</span></button></p>
<div class="sc-ljsmAU IXrMk" aria-hidden="true">
<div class="sc-jlZJtj QgNfY">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
<div tabindex="0" role="button">
<div class="sc-dTSzeu hyeqlU"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="tag/Billing/operation/comm_logs_read" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/comm_logs_read">
<div id="operation/comm_logs_read" class="sc-iCoGMd dolNKP" data-section-id="operation/comm_logs_read">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">comm_logs_read</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve an existing communication (phone call) logs</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“scheduling”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">path&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Appointment related with the phone call log</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="archived"><span class="property-name">archived</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Archived)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>If this phone call log is archived or not</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="author"><span class="property-name">author</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Author)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Author of post.</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="cash_charged"><span class="property-name">cash_charged</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Cash charged)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount of cash needs to be charged</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="created_at"><span class="property-name">created_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Created at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="duration"><span class="property-name">duration</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Duration)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Duration of the phone call</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="message"><span class="property-name">message</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Message)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Additional message for the phone call</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="scheduled_time"><span class="property-name">scheduled_time</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Scheduled time)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Date of phone call, if&nbsp;<code>appointment</code>&nbsp;is set, this field will be set as the&nbsp;<code>scheduled_time</code>&nbsp;of that appointment</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="title"><span class="property-name">title</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Title)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Title of this log</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="type"><span class="property-name">type</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Type)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Type of phone call log</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/comm_logs/{id}</span></button></p>
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
<li id="react-tabs-372" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-373">200</li>
</ul>
<div id="react-tabs-373" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-372">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“scheduled_time”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“archived”</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“appointment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“title”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“created_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“author”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“cash_charged”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“duration”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“patient”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“message”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“type”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/line_items_create" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/line_items_create">
<div id="operation/line_items_create" class="sc-iCoGMd dolNKP" data-section-id="operation/line_items_create">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">line_items_create</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Create billing line item for appointments</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-htmcrh khIKSp" aria-expanded="true"></button><button class="sc-htmcrh khIKSp" aria-expanded="true"><strong class="sc-fWWYYk fepHIR">201&nbsp;</strong></button>Created</p>
<div class="sc-cbeScs fNvcGj">
<h5 class="sc-iqAclL iupIzr">Response Schema:&nbsp;<span class="sc-cBoqAE lRfdj">application/json</span></h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Appointment ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="code"><span class="property-name">code</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Code)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="diagnosis_pointers"><span class="property-name">diagnosis_pointers</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">strings</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Diagnosis pointers)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>List of 4 diagnosis pointers</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="procedure_type"><span class="property-name">procedure_type</span><p></p>
<div class="sc-oeezt sc-hhIiOg bkbCTW kXduun">required</div>
</td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Procedure type)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“C”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“H”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“U”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“S”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>One of&nbsp;<code>"CPT(C)"</code>,&nbsp;<code>"HCPCS(H)"</code>,&nbsp;<code>"Custom(U)"</code>, use 1 character identifier when using&nbsp;<code>POST</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="adjustment"><span class="property-name">adjustment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Adjustment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Adjustment from total billed</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="allowed"><span class="property-name">allowed</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Allowed)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount allowed by insurance</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="balance_ins"><span class="property-name">balance_ins</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Balance ins)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Insurance balance</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="balance_pt"><span class="property-name">balance_pt</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Balance pt)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Patient balance</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="balance_total"><span class="property-name">balance_total</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Balance total)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Total balance</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="billed"><span class="property-name">billed</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Billed)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Total billed</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="billing_status"><span class="property-name">billing_status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Billing status)</span></div>
<div><span class="sc-laZMeE dmLkmF">Enum:</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Incomplete Information”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process Emdeon”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process iHCFA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process Gateway”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process Jopari”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process Waystar”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process EPS”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected Emdeon”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected iHCFA”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected Gateway”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected Jopari”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected Waystar”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected EPS”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“In Process Payer”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Payer Acknowledged”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Rejected Payer”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Paid in Full”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Partially Paid”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“Coordination of Benefits”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“ERA Received”</span>&nbsp;<span class="sc-laZMeE sc-ckTSus dmLkmF cDPDUw">“ERA Denied”</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>One of&nbsp;<code>""</code>,&nbsp;<code>"Incomplete Information"</code>,&nbsp;<code>"In Process Emdeon"</code>,&nbsp;<code>"In Process iHCFA"</code>,&nbsp;<code>"In Process Gateway"</code>,&nbsp;<code>"Rejected Emdeon"</code>,&nbsp;<code>"Rejected iHCFA"</code>,&nbsp;<code>"Rejected Gateway"</code>,&nbsp;<code>"In Process Payer"</code>,&nbsp;<code>"Payer Acknowledged"</code>,&nbsp;<code>"Rejected Payer"</code>,&nbsp;<code>"Paid in Full"</code>,&nbsp;<code>"Partially Paid"</code>,&nbsp;<code>"Coordination of Benefits"</code>,&nbsp;<code>"ERA Received"</code>,&nbsp;<code>"ERA Denied"</code></p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="denied_flag"><span class="property-name">denied_flag</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">boolean</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Denied flag)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="description"><span class="property-name">description</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Description)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="doctor"><span class="property-name">doctor</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Doctor)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Doctor ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="expected_reimbursement"><span class="property-name">expected_reimbursement</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Expected reimbursement)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="id"><span class="property-name">id</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(ID)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ins_total"><span class="property-name">ins_total</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Ins total)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Total amount paid by patient’s insurers</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ins1_paid"><span class="property-name">ins1_paid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Ins1 paid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount paid by patient’s primary insurer</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ins2_paid"><span class="property-name">ins2_paid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Ins2 paid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount paid by patient’s secondary insurer</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="ins3_paid"><span class="property-name">ins3_paid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Ins3 paid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount paid by patinet’s tertiary insurer</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="insurance_status"><span class="property-name">insurance_status</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Insurance status)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>This corresponds to the “Status/Adj Type” from billing detail screen</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="modifiers"><span class="property-name">modifiers</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-iNiQyp dmLkmF isTLDY">Array of&nbsp;</span><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">strings</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Modifiers)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>List of 4 code modifiers</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="paid_total"><span class="property-name">paid_total</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Paid total)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Total amount paid</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Patient ID</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Posted date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>date of line_item creation</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="price"><span class="property-name">price</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Price)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Price of procedure</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="pt_paid"><span class="property-name">pt_paid</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Pt paid)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Amount paid by patient</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="quantity"><span class="property-name">quantity</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">number</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Quantity)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Service date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Date on which the service was rendered</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="units"><span class="property-name">units</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Units)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf">
<p>Default to “UN”</p>
</div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="updated_at"><span class="property-name">updated_at</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(Updated at)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN iwuDdk http-verb post">post</span><span class="sc-jXcxbT hVdkvA">/api/line_items</span></button></p>
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
<li id="react-tabs-374" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-375">201</li>
</ul>
<div id="react-tabs-375" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-374">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“code”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“ins3_paid”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“updated_at”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“posted_date”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“billing_status”</span>: <span class="token string">“”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“pt_paid”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“allowed”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“patient”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“adjustment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“id”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“doctor”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“balance_pt”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“units”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“balance_ins”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“paid_total”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“diagnosis_pointers”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token string">“string”</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“appointment”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“description”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“balance_total”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“price”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“expected_reimbursement”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“ins2_paid”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“ins1_paid”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“insurance_status”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“billed”</span>: <span class="token number">0</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“modifiers”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token string">“string”</span></div>
</li>
</ul>
<p><span class="token punctuation">]</span><span class="token punctuation">,</span></p>
</div>
</li>
<li>
<div class="hoverable "><span class="property token string">“denied_flag”</span>: <span class="token boolean">true</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“ins_total”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“procedure_type”</span>: <span class="token string">“C”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“service_date”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable "><span class="property token string">“quantity”</span>: <span class="token number">0</span></div>
</li>
</ul>
<p><code><span class="token punctuation">}</span></code></p>
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
<div id="tag/Billing/operation/line_items_list" class="sc-eCApnc kzhJjR" data-section-id="tag/Billing/operation/line_items_list">
<div id="operation/line_items_list" class="sc-iCoGMd dolNKP" data-section-id="operation/line_items_list">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">line_items_list</h2>
<div class="sc-iGkqmO jEmHgI">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd">
<p>Retrieve or search billing line items</p>
</div>
</div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">permissions:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">[“billing”,”show-billing-tab”]</span></div>
<div class="sc-iJCRrE sc-ciSkZP sc-jHNicF ifDxYI dYAYxd bMmwdY"><span class="sc-laZMeE dmLkmF">practice-access:&nbsp;</span><span class="sc-laZMeE sc-ckTSus sc-fbIWvP dmLkmF cDPDUw">“share_patients” need to be set for data access among practice</span></div>
<div class="sc-fcmMJX kATJMa">
<div class="sc-jUfyBS eSyZIh">
<h5 class="sc-iqAclL sc-fuISkM iupIzr cHQuCr">Authorizations:</h5>
</div>
<div class="sc-jQAxuV bAtUrU"><span class="sc-daBunf WYtGZ"><span class="sc-dsXzNU eZDctt"><i>drchrono_oauth2</i></span></span></div>
</div>
<div>
<h5 class="sc-iqAclL iupIzr">query&nbsp;Parameters</h5>
<table class="sc-hHEiqL iZJLLY">
<tbody>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="appointment"><span class="property-name">appointment</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(appointment)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="office"><span class="property-name">office</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(office)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
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
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="patient"><span class="property-name">patient</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">integer</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(patient)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="posted_date"><span class="property-name">posted_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(posted_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="service_date"><span class="property-name">service_date</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(service_date)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
</div>
</div>
</td>
</tr>
<tr class="last ">
<td class="sc-hBMUJo sc-fFSPTT eJvdeH dLEyPf" title="since"><span class="property-name">since</span></td>
<td class="sc-bkbkJK gaTxIt">
<div>
<div><span class="sc-laZMeE sc-jffHpj dmLkmF lVyis">string</span><span class="sc-laZMeE sc-eJocfa dmLkmF NHbWE">&nbsp;(since)</span></div>
<div>
<div class="sc-iJCRrE sc-ciSkZP ifDxYI wfptf"></div>
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
<p><button class="sc-eEVmNe gXhEov"><span class="sc-fmdNqN izOCLq http-verb get">get</span><span class="sc-jXcxbT hVdkvA">/api/line_items</span></button></p>
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
<li id="react-tabs-376" class="tab-success react-tabs__tab--selected" tabindex="0" role="tab" aria-selected="true" aria-disabled="false" aria-controls="react-tabs-377">200</li>
</ul>
<div id="react-tabs-377" class="react-tabs__tab-panel react-tabs__tab-panel--selected" role="tabpanel" aria-labelledby="react-tabs-376">
<div>
<div class="sc-Arkif eJDRKz">
<p><span class="sc-cOifOu bFIVui">Content type</span></p>
<div class="sc-bBjRSN iPPdF">application/json</div>
</div>
<div class="sc-jgPyTC fuJtcf">
<div class="sc-jNnpgg jIfccS">
<div class="sc-giAqHp hIuvjA">
<div class="sc-carFqZ hBWCUB">Copy</div>
<p><button>Expand all</button><button>Collapse all</button></p>
</div>
<div class="sc-iJCRrE ifDxYI sc-dPaNzc gKPxXE">
<div class="redoc-json">
<p><code><span class="token punctuation">{</span></code></p>
<ul class="obj collapsible">
<li>
<div class="hoverable "><span class="property token string">“previous”</span>: <span class="token string">“string”</span><span class="token punctuation">,</span></div>
</li>
<li>
<div class="hoverable ">
<p><span class="property token string">“data”</span>: <span class="token punctuation">[</span></p>
<ul class="array collapsible">
<li>
<div class="hoverable collapsed"><span class="token punctuation">{</span><span class="token punctuation">}</span></div>
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
