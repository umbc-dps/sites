<aside class="six columns add-bottom" style="background-color: #f9e1a7">
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

<link rel="alternate" type="text/xml+oembed" href="https://docs.google.com/forms/d/1Z0U1oC-Sdg2Kg--BJkjhE8ti1zQ8fsqA9ZJsLt4mkvo/oembed?url=https://docs.google.com/forms/d/1Z0U1oC-Sdg2Kg--BJkjhE8ti1zQ8fsqA9ZJsLt4mkvo/viewform&amp;format=xml">


<form action="https://docs.google.com/forms/d/1Z0U1oC-Sdg2Kg--BJkjhE8ti1zQ8fsqA9ZJsLt4mkvo/formResponse" method="POST" id="ss-form" target="_self" onsubmit="ga('send', 'event', 'lead', 'submit', 'poli-pd-visit');">
<div class="errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-section-header">
<div class="ss-form-entry">

</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1835283191"><div class="ss-q-title">First Name
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1835283191" value="" class="ss-q-short" id="entry_1835283191" dir="auto" aria-label="First Name  " aria-required="true" required="" title="">
<div class="error-message" id="1384618980_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_741179195"><div class="ss-q-title">Last Name
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.741179195" value="" class="ss-q-short" id="entry_741179195" dir="auto" aria-label="Last Name  " aria-required="true" required="" title="">
<div class="error-message" id="841743357_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1155602363"><div class="ss-q-title">Email Address
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1155602363" value="" class="ss-q-short" id="entry_1155602363" dir="auto" aria-label="Email Address  " aria-required="true" required="" title="">
<div class="error-message" id="994189642_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1250508937"><div class="ss-q-title">Phone
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1250508937" value="" class="ss-q-short" id="entry_1250508937" dir="auto" aria-label="Phone  " aria-required="true" required="" title="">
<div class="error-message" id="1539045506_errorMessage"></div>
<div class="required-message"></div>
</div></div></div> 

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-select"><div class="ss-form-entry">

<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<select name="entry.82693912" id="entry_82693912" aria-label="Please Select Program of Interest:  " aria-required="true" required hidden>
<option value=""></option>
<option value="History">History</option> 
<option value="Political Science" selected>Political Science</option> <option value="Psychology">Psychology</option> 
<option value="Social Work">Social Work</option>
</select>
<div class="required-message"></div></div></div></div>

 <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-select"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_370625178"><div class="ss-q-title">Term and Year Applying:
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<select name="entry.370625178" id="entry_370625178" aria-label="Term and Year Applying:  " aria-required="true" required>
<option value=""></option>
<option value="Spring 2016">Spring 2016</option> 
<option value="Fall 2016">Fall 2016</option> 
<option value="Spring 2017">Spring 2017</option> 
<option value="Fall 2017">Fall 2017</option> 
<option value="Spring 2018">Spring 2018</option> 
<option value="Fall 2018">Fall 2018</option>
</select>
<div class="required-message"></div></div></div></div> 

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-select"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_865173428"><div class="ss-q-title">Please select Visit with Undergraduate Program Director
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<select name="entry.865173428" id="entry_865173428" aria-label="Please select Visit with Undergraduate Program Director  " aria-required="true" required><option value=""></option>
<option value="History: Thursday, February 23: 5:00pm">History: Thursday, February 23: 5:00pm</option> <option value="History: Wednesday, April 12: 1:00pm">History: Wednesday, April 12: 1:00pm</option> <option value="Political Science: Wednesday, November 30: 12:00pm">Political Science: Wednesday, November 30: 12:00pm</option> <option value="Political Science: Wednesday, December 7: 12:00pm">Political Science: Wednesday, December 7: 12:00pm</option> <option value="Political Science: Wednesday, February 8: 12:00pm">Political Science: Wednesday, February 8: 12:00pm</option> <option value="Political Science: Wednesday, February 15: 12:00pm">Political Science: Wednesday, February 15: 12:00pm</option> <option value="Political Science: Wednesday, February 22: 12:00pm">Political Science: Wednesday, February 22: 12:00pm</option> <option value="Political Science: Wednesday, March 1: 12:00pm">Political Science: Wednesday, March 1: 12:00pm</option> <option value="Political Science: Wednesday, March 8: 12:00pm">Political Science: Wednesday, March 8: 12:00pm</option>  <option value="Psychology: Wednesday, February 22: 5:30pm">Psychology: Wednesday, February 22: 5:30pm</option> <option value="Psychology: Thursday, April 13: 12:30pm">Psychology: Thursday, April 13: 12:30pm</option> <option value="Social Work: Tuesday, February 14: 12:00pm">Social Work: Tuesday, February 14: 12:00pm</option> <option value="Social Work: Wednesday, March 28: 5:30pm">Social Work: Wednesday, March 28: 5:30pm</option> <option value="Social Work: Friday, April 28: 12:00pm">Social Work: Friday, April 28: 12:00pm</option></select>

<div class="required-message"></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-select"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1590355167"><div class="ss-q-title">How did you hear about UMBC-Shady Grove?
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<select name="entry.1590355167" id="entry_1590355167" aria-label="How did you hear about UMBC-Shady Grove?  " aria-required="true" required><option value=""></option>
<option value="Email">Email</option> <option value="Transfer Fair">Transfer Fair</option> <option value="Class Visit">Class Visit</option> <option value="Friend/Relative">Friend/Relative</option> <option value="Web Search">Web Search</option> <option value="Social Media">Social Media</option> <option value="Radio">Radio</option> <option value="Others">Others</option></select>
<div class="required-message"></div></div></div></div>
<input type="hidden" name="draftResponse" value="[,,&quot;-3042036659386602464&quot;]
">
<input type="hidden" name="pageHistory" value="0">

<input type="hidden" name="fvv" value="0">


<input type="hidden" name="fbzx" value="-3042036659386602464">

<br>
<input type="submit" name="submit" value="I Want to Attend!" id="ss-submit" class="jfk-button jfk-button-action ">
</form>

</p>
</aside>

<aside class="six columns add-bottom">
<a class="btn" href="http://www.shadygrove.umd.edu/about-usg/directions-transportation" target="_blank">Directions/Parking</a>
</aside>


<aside class="six columns add-bottom">
<p style="text-align:center">
If you have questions, please contact:<br>
<a href="mailto:csmoyer@umbc.edu">Chelsea Moyer</a> at 301-738-6184.
</p>
</aside>

