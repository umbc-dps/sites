<aside class="six columns add-bottom" id="one">
<h3 style="color:#fff;">Register</h3>
<p>
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

<!--
<link rel="alternate" type="text/xml+oembed" href="https://docs.google.com/forms/d/12fdVdWQys6skoQ9NCUx3RxCQ6qGWDvgmWA5kkgPxEgg/oembed?url=https://docs.google.com/forms/d/12fdVdWQys6skoQ9NCUx3RxCQ6qGWDvgmWA5kkgPxEgg/viewform&amp;format=xml">

<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe"
style="display:none;" onload="if(submitted)
{window.location='http://umbc.edu/isd/forumthankyou2015';}"></iframe>

<form action="https://docs.google.com/forms/d/12fdVdWQys6skoQ9NCUx3RxCQ6qGWDvgmWA5kkgPxEgg/formResponse" method="POST" id="ss-form" target="hidden_iframe" onsubmit="submitted=true; ga('send', 'event', 'lead', 'submit', 'isd-now-registration'); trackConversionEvent('0.00','USD'); twttr.conversion.trackPid('ntg1j', { tw_sale_amount: 0, tw_order_quantity: 0 });">

<div class="ss-required-asterisk" aria-hidden="true">* Required</div>

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text">
<div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_2109974497">
<div class="ss-q-title">First Name
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span>
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div>
</label>
<input type="text" name="entry.2109974497" value="" class="ss-q-short" id="entry_2109974497" dir="auto" aria-label="First Name  " aria-required="true" required="" title="">
<div class="error-message" id="23476653_errorMessage"></div>
</div></div></div>

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text">
<div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_722192688">
<div class="ss-q-title">Last Name
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div>
</label>
<input type="text" name="entry.722192688" value="" class="ss-q-short" id="entry_722192688" dir="auto" aria-label="Last Name  " aria-required="true" required="" title="">
<div class="error-message" id="1322231477_errorMessage"></div>
</div></div></div>

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text">
<div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_2054798228">
<div class="ss-q-title">Email
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span>
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div>
</label>
<input type="text" name="entry.2054798228" value="" class="ss-q-short" id="entry_2054798228" dir="auto" aria-label="Email  " aria-required="true" required="" title="">
<div class="error-message" id="739040131_errorMessage"></div>
</div></div></div>

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text">
<div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1886241311">
<div class="ss-q-title">Job Title</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div>
</label>
<input type="text" name="entry.1886241311" value="" class="ss-q-short" id="entry_1886241311" dir="auto" aria-label="Job Title  " title="">
<div class="error-message" id="1532993211_errorMessage"></div>
</div></div></div>

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text">
<div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1916594224">
<div class="ss-q-title">Organization/Employer</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div>
</label>
<input type="text" name="entry.1916594224" value="" class="ss-q-short" id="entry_1916594224" dir="auto" aria-label="Organization/Employer  " title="">
<div class="error-message" id="828968571_errorMessage"></div>
</div></div></div>

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-select">
<div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_575373458">
<div class="ss-q-title">How did you hear about the event?</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div>
</label>
<select name="entry.575373458" id="entry_575373458" aria-label="How did you hear about the event?  ">
<option value=""></option>
<option value="Email">Email</option>
<option value="Social Media">Social Media</option>
<option value="ISD Website">ISD Website</option>
<option value="Poster">Poster</option>
<option value="Friend/Colleague">Friend/Colleague</option>
<option value="Other">Other</option>
</select>
</div></div></div>

<input type="hidden" name="draftResponse" value="[,,&quot;7830873128239921290&quot;]">
<input type="hidden" name="pageHistory" value="0">
<input type="hidden" name="fvv" value="0">
<input type="hidden" name="fbzx" value="7830873128239921290">

<br />
<input type="submit" name="submit" value="I Want to Attend!" id="ss-submit" class="jfk-button jfk-button-action ">


<script type='text/javascript' src='/static/forms/client/js/1748265221-formviewer_prd.js'></script>
<script type="text/javascript">
H5F.setup(document.getElementById('ss-form'));
          _initFormViewer(
            "[100,,[]\n]\n");
</script>
</form>

</p>
</aside>
-->


<p>Registration for this event has closed. This event has already taken place.</p>
 <a href="forum#2015" class="btn" style="margin-left:5px;">Watch the video from ISD Now 2015</a>
</p>
</aside>


<aside class="six columns add-bottom" id="one">
<h3 style="color:#fff;">Contact Us</h3>
<p style="text-align:center">
<strong>Renee Eisenhuth</strong> &bull; <a href="mailto:reisen@umbc.edu">reisen@umbc.edu</a> &bull; 
443-543-5446 
</p>
</aside>

<aside class="six columns add-bottom">
<a class="btn" href="forum2015">Forum Information</a>
</aside>

<aside class="six columns add-bottom">
<a class="btn" href="forumspeakers2015">Speaker Bios</a>
</aside>

<aside class="six columns add-bottom">
<a class="btn" href="forumdirections2015">Directions/Parking</a>
</aside>

<aside class="six columns add-bottom" id="social">
<div>   
<center>  
      <a href="http://my.umbc.edu" target="_blank"><img src="images/myUMBC.png" alt="myUMBC" height="30"></a>
       
      <a href="https://twitter.com/ISDNow" target="_blank"><img src="images/twitter.png" alt="twitter" width="30" height="30"></a> 
      
      <a href="http://www.facebook.com/ISDNow" target="_blank"><img src="images/facebook.png"  width="30" height="30" alt="facebook"></a> 
      
      <a href="http://www.youtube.com/user/UMBCISD" target="_blank"><img src="images/youtube.png" alt="YouTube"  width="30" height="30"></a>  
      
      <a href="http://www.linkedin.com/groups/ISD-Now-2777386" target="_blank"><img src="images/linkedin.png" alt="LinkedIn"  width="30" height="30"></a>  
      <br />
<h5>Use <strong><a href="https://twitter.com/search?q=ISDNow" target="_blank" style="text-decoration:none; color:#E9AB13">#ISDNow</a></strong> to join the conversation!</h5>
</center>     
</div>   
</aside>


<aside class="six columns add-bottom">
<p style="font-size:8pt;">
<strong>PLEASE NOTE:</strong>
This is a free event. Refreshments will be served. Also, this event will be videotaped and photographed. 
<br />
<br />
<em>Sponsored by the <a href="index" target="_blank">UMBC ISD-Training Systems Graduate Program</a></em>
</p>
</aside>
