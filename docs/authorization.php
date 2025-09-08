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
<div id="section/Authorization" class="sc-eCApnc chOOHy" data-section-id="section/Authorization">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h1 class="sc-fujyAs kudwlS">Authorization</h1>
</div>
</div>
</div>
<div id="section/Authorization/Initial-authorization" class="sc-eCApnc chOOHy" data-section-id="section/Authorization/Initial-authorization">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">Initial authorization</h2>
</div>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">

There are three main steps in the OAuth 2.0 authentication workflow:
<ol>
 	<li>Redirect the provider to the authorization page.</li>
 	<li>The provider authorizes your application and is redirected back to your web application.</li>
 	<li>Your application exchanges the <code>authorization_code</code> that came with the redirect for an <code>access_token</code> and <code>refresh_token</code>.</li>
</ol>
<h3 id="step-1-redirect-to-drchrono">Step 1: Redirect to drchrono</h3>
The first step is redirecting your user to drchrono, typically with a button labeled "Connect to drchrono" or "Login with drchrono". This is just a link that takes your user to the following URL:
<pre><code>https<span class="token punctuation">:</span><span class="token operator">/</span><span class="token operator">/</span>drchrono<span class="token punctuation">.</span>com<span class="token operator">/</span>o<span class="token operator">/</span>authorize<span class="token operator">/</span><span class="token operator">?</span>redirect_uri<span class="token operator">=</span>REDIRECT_URI_ENCODED<span class="token operator">&amp;</span>response_type<span class="token operator">=</span>code<span class="token operator">&amp;</span>client_id<span class="token operator">=</span>CLIENT_ID_ENCODED<span class="token operator">&amp;</span>scope<span class="token operator">=</span>SCOPES_ENCODED
</code></pre>
<ul>
 	<li><code>REDIRECT_URI_ENCODED</code> is the URL-encoded version of the redirect URI (as registered for your application and used in later steps).</li>
 	<li><code>CLIENT_ID_ENCODED</code> is the URL-encoded version of your application's client ID.</li>
 	<li><code>SCOPES_ENCODED</code> is a URL-encoded version of a space-separated list of scopes, which can be found in each endpoint or omitted to default to all scopes.</li>
</ul>
The <code>scope</code> parameter consists of an optional, space-separated list of scopes your application is requesting. If omitted, all scopes will be requested.

Scopes are of the form <code>BASE_SCOPE:[read|write]</code> where <code>BASE_SCOPE</code> is any of <code>user</code>, <code>calendar</code>, <code>patients</code>, <code>patients:summary</code>, <code>billing</code>, <code>clinical</code> and <code>labs</code>. You should request only the scopes you need. For instance, an application which sends "Happy Birthday!" emails to a doctor's patients on their birthdays would use the scope parameter <code>"patients:summary:read"</code>, while one that allows patients to schedule appointments online would need at least <code>"patients:summary:read patients:summary:write calendar:read calendar:write clinical:read clinical:write"</code>.
<h3 id="step-2-provider-authorization">Step 2: Provider authorization</h3>
After logging in (if necessary), the provider will be presented with a screen with your application's name and the list of permissions you requested (via the <code>scope</code> parameter).

When they click the "Authorize" button, they will be redirected to your redirect URI with a <code>code</code> query parameter appended, which contains an authorization code to be used in step 3. If they click the "Cancel" button, they will be redirected to your redirect URI with <code>error=access_denied</code> instead.

Note: This authorization code expires extremely quickly, so you must perform step 3 immediately, ideally before rendering the resulting page for the end user.
<h3 id="step-3-token-exchange">Step 3: Token exchange</h3>
The <code>code</code> obtained from step 2 is usable exactly once to obtain an access token and refresh token. Here is an example token exchange in Python:
<pre><code>import datetime<span class="token punctuation">,</span> pytz<span class="token punctuation">,</span> requests

<span class="token keyword">if</span> <span class="token string">'error'</span> <span class="token keyword">in</span> get_params<span class="token punctuation">:</span>
    raise <span class="token function">ValueError</span><span class="token punctuation">(</span><span class="token string">'Error authorizing application: %s'</span> <span class="token operator">%</span> get_params<span class="token punctuation">[</span>error<span class="token punctuation">]</span><span class="token punctuation">)</span>

response <span class="token operator">=</span> requests<span class="token punctuation">.</span><span class="token function">post</span><span class="token punctuation">(</span><span class="token string">'https://drchrono.com/o/token/'</span><span class="token punctuation">,</span> data<span class="token operator">=</span><span class="token punctuation">{</span>
    <span class="token string">'code'</span><span class="token punctuation">:</span> get_params<span class="token punctuation">[</span><span class="token string">'code'</span><span class="token punctuation">]</span><span class="token punctuation">,</span>
    <span class="token string">'grant_type'</span><span class="token punctuation">:</span> <span class="token string">'authorization_code'</span><span class="token punctuation">,</span>
    <span class="token string">'redirect_uri'</span><span class="token punctuation">:</span> <span class="token string">'http://mytestapp.com/redirect_uri'</span><span class="token punctuation">,</span>
    <span class="token string">'client_id'</span><span class="token punctuation">:</span> <span class="token string">'abcdefg12345'</span><span class="token punctuation">,</span>
    <span class="token string">'client_secret'</span><span class="token punctuation">:</span> <span class="token string">'abcdefg12345'</span><span class="token punctuation">,</span>
<span class="token punctuation">}</span><span class="token punctuation">)</span>
response<span class="token punctuation">.</span><span class="token function">raise_for_status</span><span class="token punctuation">(</span><span class="token punctuation">)</span>
data <span class="token operator">=</span> response<span class="token punctuation">.</span><span class="token function">json</span><span class="token punctuation">(</span><span class="token punctuation">)</span>

# Save these <span class="token keyword">in</span> your database associated with the user
access_token <span class="token operator">=</span> data<span class="token punctuation">[</span><span class="token string">'access_token'</span><span class="token punctuation">]</span>
refresh_token <span class="token operator">=</span> data<span class="token punctuation">[</span><span class="token string">'refresh_token'</span><span class="token punctuation">]</span>
expires_timestamp <span class="token operator">=</span> datetime<span class="token punctuation">.</span>datetime<span class="token punctuation">.</span><span class="token function">now</span><span class="token punctuation">(</span>pytz<span class="token punctuation">.</span>utc<span class="token punctuation">)</span> <span class="token operator">+</span> datetime<span class="token punctuation">.</span><span class="token function">timedelta</span><span class="token punctuation">(</span>seconds<span class="token operator">=</span>data<span class="token punctuation">[</span><span class="token string">'expires_in'</span><span class="token punctuation">]</span><span class="token punctuation">)</span>
</code></pre>
You now have all you need to make API requests authenticated as that provider. When using this access token, you'll only be able to access the data that the user has access to and that you have been granted permissions for.

</div>
</div>
</div>
<div id="section/Authorization/Refreshing-an-access-token" class="sc-eCApnc chOOHy" data-section-id="section/Authorization/Refreshing-an-access-token">
<div class="sc-iCoGMd dolNKP">
<div class="sc-hKFxyN hutltu">
<h2 class="sc-pNWdM kfOTos">Refreshing an access token</h2>
</div>
</div>
<div class="sc-hKFxyN bmhiuK">
<div class="sc-iJCRrE sc-ciSkZP ifDxYI dYAYxd redoc-markdown ">

Access tokens only last 48 hours (given in seconds in the <code>'expires_in'</code> key in the token exchange step above), so they occasionally need to be refreshed. It would be inconvenient to ask the user to re-authorize every time, so instead you can use the refresh token like the original authorization to obtain a new access token. Replace the <code>code</code> parameter with <code>refresh_token</code>, change the value <code>grant_type</code> from <code>authorization_code</code> to <code>refresh_token</code>, and omit the <code>redirect_uri</code> parameter.

Example in Python:
<pre><code><span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span>
response <span class="token operator">=</span> requests<span class="token punctuation">.</span><span class="token function">post</span><span class="token punctuation">(</span><span class="token string">'https://drchrono.com/o/token/'</span><span class="token punctuation">,</span> data<span class="token operator">=</span><span class="token punctuation">{</span>
    <span class="token string">'refresh_token'</span><span class="token punctuation">:</span> <span class="token function">get_refresh_token</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">,</span>
    <span class="token string">'grant_type'</span><span class="token punctuation">:</span> <span class="token string">'refresh_token'</span><span class="token punctuation">,</span>
    <span class="token string">'client_id'</span><span class="token punctuation">:</span> <span class="token string">'abcdefg12345'</span><span class="token punctuation">,</span>
    <span class="token string">'client_secret'</span><span class="token punctuation">:</span> <span class="token string">'abcdefg12345'</span><span class="token punctuation">,</span>
<span class="token punctuation">}</span><span class="token punctuation">)</span>
<span class="token punctuation">.</span><span class="token punctuation">.</span><span class="token punctuation">.</span></code></pre>
</div>
</div>
</div>