<script type="text/javascript"> 
   var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); 
   document.write("<script src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'>" + "</sc" + "ript>"); 
</script> 

<script type='text/javascript'>
var pageTracker = _gat._getTracker("UA-1756263-12");
pageTracker._trackPageview();

//
// This is a function that I "borrowed" from the urchin.js file.
// It parses a string and returns a value.  I used it to get
// data from the __utmz cookie
//
function _uGC(l,n,s) {
 if (!l || l=="" || !n || n=="" || !s || s=="") return "-";
 var i,i2,i3,c="-";
 i=l.indexOf(n);
 i3=n.indexOf("=")+1;
 if (i > -1) {
  i2=l.indexOf(s,i); if (i2 < 0) { i2=l.length; }
  c=l.substring((i+i3),i2);
 }
 return c;
}

// 
// Get the __utmz cookie value. This is the cookies that 
// stores all campaign information. 
// 
var z = _uGC(document.cookie, '__utmz=', ';'); 
// 
// The cookie has a number of name-value pairs. 
// Each identifies an aspect of the campaign. 
// 
// utmcsr  = campaign source 
// utmcmd  = campaign medium 
// utmctr  = campaign term (keyword) 
// utmcct  = campaign content  
// utmccn  = campaign name 
// utmgclid = unique identifier used when AdWords auto tagging is enabled 
// 
// This is very basic code. It separates the campaign-tracking cookie 
// and populates a variable with each piece of campaign info. 
// 
var source  = _uGC(z, 'utmcsr=', '|'); 
var medium  = _uGC(z, 'utmcmd=', '|'); 
var term    = _uGC(z, 'utmctr=', '|'); 
var content = _uGC(z, 'utmcct=', '|'); 
var campaign = _uGC(z, 'utmccn=', '|'); 
var gclid   = _uGC(z, 'utmgclid=', '|'); 
// 
// The gclid is ONLY present when auto tagging has been enabled. 
// All other variables, except the term variable, will be '(not set)'. 
// Because the gclid is only present for Google AdWords we can 
// populate some other variables that would normally 
// be left blank. 
// 
if (gclid !="-") { 
      source = 'google'; 
      medium = 'cpc'; 
} 
// Data from the custom segmentation cookie can also be passed 
// back to your server via a hidden form field 
var csegment = _uGC(document.cookie, '__utmv=', ';'); 
if (csegment != '-') { 
      var csegmentex = /[1-9]*?\.(.*)/;
      csegment    = csegment.match(csegmentex); 
      csegment    = csegment[1]; 
} else { 
      csegment = '(not set)'; 
} 

//
// One more bonus piece of information.  
// We're going to extract the number of visits that the visitor
// has generated.  It's also stored in a cookie, the __utma cookis
// 
var a = _uGC(document.cookie, '__utma=', ';');
var aParts = a.split(".");
var nVisits = aParts[5];

</script> 


<script type="text/javascript">
          /**
 * @license
 *
 * H5F 1.1.1
 * See https://github.com/ryanseddon/H5F/ for details.
 *
 * Copyright (c) 2013 Ryan Seddon
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */
(function(e,t){"function"==typeof define&&define.amd?define(t):"object"==typeof module&&module.exports?module.exports=t():e.H5F=t()})(this,function(){var e,t,a,i,n,r,l,s,o,u,d,c,v,p,f,m,b,h,g,y,w,C,N,A,E,$,x=document,k=x.createElement("input"),q=/^[a-zA-Z0-9.!#$%&'*+-\/=?\^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,M=/[a-z][\-\.+a-z]*:\/\//i,L=/^(input|select|textarea)$/i;return r=function(e,t){var a=!e.nodeType||!1,i={validClass:"valid",invalidClass:"error",requiredClass:"required",placeholderClass:"placeholder",onSubmit:Function.prototype,onInvalid:Function.prototype};if("object"==typeof t)for(var r in i)t[r]===void 0&&(t[r]=i[r]);if(n=t||i,a)for(var s=0,o=e.length;o>s;s++)l(e[s]);else l(e)},l=function(a){var i,r=a.elements,l=r.length,c=!!a.attributes.novalidate;if(g(a,"invalid",o,!0),g(a,"blur",o,!0),g(a,"input",o,!0),g(a,"keyup",o,!0),g(a,"focus",o,!0),g(a,"change",o,!0),g(a,"click",u,!0),g(a,"submit",function(i){return e=!0,t||c||a.checkValidity()?(n.onSubmit.call(a,i),void 0):(w(i),void 0)},!1),!v())for(a.checkValidity=function(){return d(a)};l--;)i=!!r[l].attributes.required,"fieldset"!==r[l].nodeName.toLowerCase()&&s(r[l])},s=function(e){var t=e,a=h(t),n={type:t.getAttribute("type"),pattern:t.getAttribute("pattern"),placeholder:t.getAttribute("placeholder")},r=/^(email|url)$/i,l=/^(input|keyup)$/i,s=r.test(n.type)?n.type:n.pattern?n.pattern:!1,o=p(t,s),u=m(t,"step"),v=m(t,"min"),b=m(t,"max"),g=!(""===t.validationMessage||void 0===t.validationMessage);t.checkValidity=function(){return d.call(this,t)},t.setCustomValidity=function(e){c.call(t,e)},t.validity={valueMissing:a,patternMismatch:o,rangeUnderflow:v,rangeOverflow:b,stepMismatch:u,customError:g,valid:!(a||o||u||v||b||g)},n.placeholder&&!l.test(i)&&f(t)},o=function(e){var t=C(e)||e,a=/^(input|keyup|focusin|focus|change)$/i,r=/^(submit|image|button|reset)$/i,l=/^(checkbox|radio)$/i,u=!0;!L.test(t.nodeName)||r.test(t.type)||r.test(t.nodeName)||(i=e.type,v()||s(t),t.validity.valid&&(""!==t.value||l.test(t.type))||t.value!==t.getAttribute("placeholder")&&t.validity.valid?(A(t,[n.invalidClass,n.requiredClass]),N(t,n.validClass)):a.test(i)?t.validity.valueMissing&&A(t,[n.requiredClass,n.invalidClass,n.validClass]):t.validity.valueMissing?(A(t,[n.invalidClass,n.validClass]),N(t,n.requiredClass)):t.validity.valid||(A(t,[n.validClass,n.requiredClass]),N(t,n.invalidClass)),"input"===i&&u&&(y(t.form,"keyup",o,!0),u=!1))},d=function(t){var a,i,r,l,s,u=!1;if("form"===t.nodeName.toLowerCase()){a=t.elements;for(var d=0,c=a.length;c>d;d++)i=a[d],r=!!i.attributes.disabled,l=!!i.attributes.required,s=!!i.attributes.pattern,"fieldset"!==i.nodeName.toLowerCase()&&!r&&(l||s&&l)&&(o(i),i.validity.valid||u||(e&&i.focus(),u=!0,n.onInvalid.call(t,i)));return!u}return o(t),t.validity.valid},c=function(e){var t=this;t.validationMessage=e},u=function(e){var a=C(e);a.attributes.formnovalidate&&"submit"===a.type&&(t=!0)},v=function(){return E(k,"validity")&&E(k,"checkValidity")},p=function(e,t){if("email"===t)return!q.test(e.value);if("url"===t)return!M.test(e.value);if(t){var i=e.getAttribute("placeholder"),n=e.value;return a=RegExp("^(?:"+t+")$"),n===i?!1:""===n?!1:!a.test(e.value)}return!1},f=function(e){var t={placeholder:e.getAttribute("placeholder")},a=/^(focus|focusin|submit)$/i,r=/^(input|textarea)$/i,l=/^password$/i,s=!!("placeholder"in k);s||!r.test(e.nodeName)||l.test(e.type)||(""!==e.value||a.test(i)?e.value===t.placeholder&&a.test(i)&&(e.value="",A(e,n.placeholderClass)):(e.value=t.placeholder,g(e.form,"submit",function(){i="submit",f(e)},!0),N(e,n.placeholderClass)))},m=function(e,t){var a=parseInt(e.getAttribute("min"),10)||0,i=parseInt(e.getAttribute("max"),10)||!1,n=parseInt(e.getAttribute("step"),10)||1,r=parseInt(e.value,10),l=(r-a)%n;return h(e)||isNaN(r)?"number"===e.getAttribute("type")?!0:!1:"step"===t?e.getAttribute("step")?0!==l:!1:"min"===t?e.getAttribute("min")?a>r:!1:"max"===t?e.getAttribute("max")?r>i:!1:void 0},b=function(e){var t=!!e.attributes.required;return t?h(e):!1},h=function(e){var t=e.getAttribute("placeholder"),a=/^(checkbox|radio)$/i,i=!!e.attributes.required;return!(!i||""!==e.value&&e.value!==t&&(!a.test(e.type)||$(e)))},g=function(e,t,a,i){E(window,"addEventListener")?e.addEventListener(t,a,i):E(window,"attachEvent")&&window.event!==void 0&&("blur"===t?t="focusout":"focus"===t&&(t="focusin"),e.attachEvent("on"+t,a))},y=function(e,t,a,i){E(window,"removeEventListener")?e.removeEventListener(t,a,i):E(window,"detachEvent")&&window.event!==void 0&&e.detachEvent("on"+t,a)},w=function(e){e=e||window.event,e.stopPropagation&&e.preventDefault?(e.stopPropagation(),e.preventDefault()):(e.cancelBubble=!0,e.returnValue=!1)},C=function(e){return e=e||window.event,e.target||e.srcElement},N=function(e,t){var a;e.className?(a=RegExp("(^|\\s)"+t+"(\\s|$)"),a.test(e.className)||(e.className+=" "+t)):e.className=t},A=function(e,t){var a,i,n="object"==typeof t?t.length:1,r=n;if(e.className)if(e.className===t)e.className="";else for(;n--;)a=RegExp("(^|\\s)"+(r>1?t[n]:t)+"(\\s|$)"),i=e.className.match(a),i&&3===i.length&&(e.className=e.className.replace(a,i[1]&&i[2]?" ":""))},E=function(e,t){var a=typeof e[t],i=RegExp("^function|object$","i");return!!(i.test(a)&&e[t]||"unknown"===a)},$=function(e){for(var t=document.getElementsByName(e.name),a=0;t.length>a;a++)if(t[a].checked)return!0;return!1},{setup:r}});

        </script>


<div class="ss-form-container"><div class="ss-header-image-container"><div class="ss-header-image-image"><div class="ss-header-image-sizer"></div></div></div>
<div class="ss-top-of-page"><div class="ss-form-heading"><h1 class="ss-form-title" dir="ltr"> </h1>


<div class="ss-required-asterisk" aria-hidden="true">* Required</div></div></div>
<div class="ss-form">

<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe"
style="display:none;" onload="if(submitted)
{window.location='http://www.umbc.edu/engm/confirm';}"></iframe>

<form action="https://docs.google.com/forms/d/1fwdCh3Kc8M2sRA0uu2HMsyJR1hwe__ns_YJrzAQ49po/formResponse" method="POST" id="ss-form" target="hidden_iframe" 
onsubmit="submitted=true; document.getElementById('entry_1189643643').value = campaign;
document.getElementById('entry_641574304').value = source;
document.getElementById('entry_85175956').value = medium;
document.getElementById('entry_1981633415').value = content;
document.getElementById('entry_206233947').value = term;
document.getElementById('entry_289975315').value = gclid;
ga('send', 'event', 'lead', 'submit', 'infosession');
trackConversionEvent('0.00','USD');">

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1150361143"><div class="ss-q-title">First Name
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1150361143" value="" class="ss-q-short" id="entry_1150361143" dir="auto" aria-label="First Name  " aria-required="true" required="" title="">
<div class="error-message" id="747157663_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_289066688"><div class="ss-q-title">Last Name
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.289066688" value="" class="ss-q-short" id="entry_289066688" dir="auto" aria-label="Last Name  " aria-required="true" required="" title="">
<div class="error-message" id="1928230516_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_255730786"><div class="ss-q-title">Email Address
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.255730786" value="" class="ss-q-short" id="entry_255730786" dir="auto" aria-label="Email Address  " aria-required="true" required="" title="">
<div class="error-message" id="433804097_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-select"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1364888174"><div class="ss-q-title">How did you find out about the Information Session?
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<select name="entry.1364888174" id="entry_1364888174" aria-label="How did you find out about the Information Session?  " aria-required="true" required=""><option value=""></option>
<option value="Web search">Web search</option> <option value="Email">Email</option> <option value="Facebook">Facebook</option> <option value="LinkedIn">LinkedIn</option> <option value="Twitter">Twitter</option> <option value="Pandora Radio Ad">Pandora Radio Ad</option> <option value="Other Radio Ad">Other Radio Ad</option> <option value="Friend/Colleague">Friend/Colleague</option> <option value="Postcard">Postcard</option> <option value="Other">Other</option></select>
<div class="required-message"></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_899007490"><div class="ss-q-title">Is there any specific information you would like addressed during the session?
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<textarea name="entry.899007490" rows="8" cols="0" class="ss-q-long" id="entry_899007490" dir="auto" aria-label="Is there any specific information you would like addressed during the session?  "></textarea>
<div class="error-message" id="13324202_errorMessage"></div>
<div class="required-message"></div>
</div></div></div>

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1189643643"><div class="ss-q-title">
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1189643643" value="" class="ss-q-short" id="entry_1189643643" dir="auto" aria-label="Campaign  " title="" hidden>

<div class="error-message" id="1716514519_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> 

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_641574304"><div class="ss-q-title">
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.641574304" value="" class="ss-q-short" id="entry_641574304" dir="auto" aria-label="Source  " title="" hidden>
<div class="error-message" id="1919650033_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_85175956"><div class="ss-q-title">
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.85175956" value="" class="ss-q-short" id="entry_85175956" dir="auto" aria-label="Medium  " title="" hidden>
<div class="error-message" id="1076838382_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1981633415"><div class="ss-q-title">
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1981633415" value="" class="ss-q-short" id="entry_1981633415" dir="auto" aria-label="Content  " title="" hidden>
<div class="error-message" id="705356034_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_206233947"><div class="ss-q-title">
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.206233947" value="" class="ss-q-short" id="entry_206233947" dir="auto" aria-label="Term  " title="" hidden>
<div class="error-message" id="1025154073_errorMessage"></div>
<div class="required-message"></div>
</div></div></div>

<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.289975315" value="" class="ss-q-short" id="entry_289975315" dir="auto" aria-label="gclid  " title="" hidden>
<div class="error-message" id="1201181047_errorMessage"></div>
<div class="required-message"></div>


<input type="hidden" name="draftResponse" value="[,,&quot;3266425537752361327&quot;]
">
<input type="hidden" name="pageHistory" value="0">
<input type="hidden" name="fvv" value="0">
<input type="hidden" name="fbzx" value="3266425537752361327">

<center>
<input type="reset" name="reset" value="Clear" id="ss-reset" class="jfk-button jfk-button-action">
<input type="submit" name="submit" value="I Want to Attend! " id="ss-submit" class="jfk-button jfk-button-action " style="background-color:#E9AB13; color: #FFF; text-shadow:none">
</center>
</form>
</div>


<script type='text/javascript' src='/static/forms/client/js/1383748348-formviewer_prd.js'></script>
<script type="text/javascript">H5F.setup(document.getElementById('ss-form'));
          _initFormViewer(
            "[100,,[]\n]\n");</script></div>
            

            