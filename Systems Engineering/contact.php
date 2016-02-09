<!DOCTYPE html>
<html>
<head>

<title>Contact Us | Systems Engineering at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC's program is designed to accelerate the development of systems engineers by providing practical, real-world experience that can be immediately applied on the job." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Contact Us | Systems Engineering at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/se/contact" />
<meta property="og:image" content="http://www.umbc.edu/se/images/bk.jpg" />
<meta property="og:description" content="UMBC's program is designed to accelerate the development of systems engineers by providing practical, real-world experience that can be immediately applied on the job." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">

<script src="js/modernizr.custom.js"></script>

<link href="images/favicon.ico" rel="shortcut icon">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>

<body>
  <div id="skip-content">
    <a href="#main-content">Skip to Main Content</a>
  </div>
  <!-- main container -->


  <div id="container-header-background">
    <!-- umbc header -->


    <div id="container-header">
      <?php include("includes/umbc-header.php"); ?>
    </div>
    <!-- END umbc header -->
    <!-- gold toolbar -->


    <div id="site-menu-background">
      <?php include("includes/menu.php"); ?>
    </div>
    <!-- END gold toolbar -->
  </div>
  <!-- BEGIN MAIN -->
  <!-- Page Header -->

 <?php include("includes/header.php"); ?>
 
<!-- END Page Header -->


    <div class="eleven columns">
      <!-- START Content -->

 <h3>Contact Us</h3>

<script>
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


<link rel="alternate" type="text/xml+oembed" href="https://docs.google.com/forms/d/1bJlEgWtbP8RgiyFn6d7tpNamF-0JxflvMRj1ASvvK2c/oembed?url=https://docs.google.com/forms/d/1bJlEgWtbP8RgiyFn6d7tpNamF-0JxflvMRj1ASvvK2c/viewform&amp;format=xml">
<meta itemprop="url" content="https://docs.google.com/forms/d/1bJlEgWtbP8RgiyFn6d7tpNamF-0JxflvMRj1ASvvK2c/viewform">
<meta itemprop="embedUrl" content="https://docs.google.com/forms/d/1bJlEgWtbP8RgiyFn6d7tpNamF-0JxflvMRj1ASvvK2c/viewform?embedded=true">

<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe"
style="display:none;" onload="if(submitted)
{window.location='thankyou';}"></iframe>

<form action="https://docs.google.com/forms/d/1bJlEgWtbP8RgiyFn6d7tpNamF-0JxflvMRj1ASvvK2c/formResponse" method="POST" target="hidden_iframe" onsubmit="submitted=true; ga('send', 'event', 'inquiry', 'submit', 'contact_us'); trackConversionEvent('0.00','USD');">


        <p>Thank you for your interest in the UMBC Cybersecurity programs. If you'd like additional information or have a question, please complete the following form and click submit.</p>


        <table border="0" id="contact">

          <tr>
            <th width="45%">
            </th>

            <th width="45%">
            </th>
          </tr>


          <tr>
            <td>First Name:*</td>

            <td><input type="text" name="entry.2043034092" value=""  id="entry_2043034092" dir="auto" aria-label="First Name  " title="">
            </td>
          </tr>


          <tr>
            <td>Last Name:*</td>

            <td><input type="text" name="entry.1555015214" value=""  id="entry_1555015214" dir="auto" aria-label="Last Name  " title="">
            </td>
          </tr>


          <tr>
            <td>Email Address:*</td>

            <td><input type="text" name="entry.1417278992" value=""  id="entry_1417278992" dir="auto" aria-label="Email  " title="">
            </td>
          </tr>


          <tr id="address1">
            <td>Home Address:</td>

            <td><input type="text" name="entry.1498373377" value=""  id="entry_1498373377" dir="auto" aria-label="Home Address  " title="">
            </td>
          </tr>


          <tr id="city1">
            <td>City:</td>

            <td><input type="text" name="entry.518834064" value=""  id="entry_518834064" dir="auto" aria-label="City  " title="">
            </td>
          </tr>


          <tr id="state1">
            <td>State:</td>

            <td><select name="entry.1553723854" id="entry_1553723854" aria-label="State  " title="">
              <option value="AL">
                AL
              </option>

              <option value="AK">
                AK
              </option>

              <option value="AZ">
                AZ
              </option>

              <option value="AR">
                AR
              </option>

              <option value="CA">
                CA
              </option>

              <option value="CO">
                CO
              </option>

              <option value="CT">
                CT
              </option>

              <option value="DE">
                DE
              </option>

              <option value="DC">
                DC
              </option>

              <option value="FL">
                FL
              </option>


              <option value="GA">
                GA
              </option>

              <option value="HI">
                HI
              </option>

              <option value="ID">
                ID
              </option>

              <option value="IL">
                IL
              </option>

              <option value="IN">
                IN
              </option>

              <option value="IA">
                IA
              </option>

              <option value="KS">
                KS
              </option>

              <option value="KY">
                KY
              </option>

              <option value="LA">
                LA
              </option>

              <option value="ME">
                ME
              </option>

              <option selected value="MD">
                MD
              </option>

              <option value="MA">
                MA
              </option>

              <option value="MI">
                MI
              </option>

              <option value="MN">
                MN
              </option>

              <option value="MS">
                MS
              </option>

              <option value="MO">
                MO
              </option>

              <option value="MT">
                MT
              </option>

              <option value="NE">
                NE
              </option>

              <option value="NV">
                NV
              </option>

              <option value="NH">
                NH
              </option>

              <option value="NJ">
                NJ
              </option>

              <option value="NM">
                NM
              </option>

              <option value="NY">
                NY
              </option>

              <option value="NC">
                NC
              </option>

              <option value="ND">
                ND
              </option>

              <option value="OH">
                OH
              </option>

              <option value="OK">
                OK
              </option>

              <option value="OR">
                OR
              </option>

              <option value="PA">
                PA
              </option>

              <option value="RI">
                RI
              </option>

              <option value="SC">
                SC
              </option>

              <option value="SD">
                SD
              </option>

              <option value="TN">
                TN
              </option>

              <option value="TX">
                TX
              </option>

              <option value="UT">
                UT
              </option>

              <option value="VT">
                VT
              </option>

              <option value="VA">
                VA
              </option>

              <option value="WA">
                WA
              </option>

              <option value="WV">
                WV
              </option>

              <option value="WI">
                WI
              </option>

              <option value="WY">
                WY
              </option>
            </select>
            </td>
          </tr>


          <tr>
            <td>Postal Code:</td>

            <td><input type="text" name="entry.1362897093" value=""  id="entry_1362897093" dir="auto" aria-label="Postal Code  " title="">
            </td>
          </tr>


          <tr>
            <td>Anticipated start date:*</td>

            <td valign="middle">
            <select name="entry.307531422" id="entry_307531422" aria-label="Anticipated Start Date  ">
            <option value="Please Select One"></option>
            <option value="Spring 2016">Spring 2016</option>
            <option value="Fall 2016">Fall 2016</option> 
            <option value="Spring 2017">Spring 2017</option> 
            <option value="Fall 2017">Fall 2017</option> 
            <option value="Unknown">Unknown</option></select>
            </td>
          </tr>


          <tr>
            <td>How did you hear about us:*</td>

            <td valign="middle">
            <select name="entry.1449239186" id="entry_1449239186" aria-label="How did you hear about us?  ">
            <option value="Please Select One"></option>
            <option value="Email">Email</option> 
            <option value="Flyer/Poster">Flyer/Poster</option> 
            <option value="Friend/Associate">Friend/Associate</option> 
            <option value="Individual Visit">Individual Visit</option> 
            <option value="Internet Radio">Internet Radio</option> 
            <option value="Internet Search">Internet Search</option> 
            <option value="Publication">Publication</option> 
            <option value="Social Media Networks">Social Media Networks</option> 
            <option value="Transfer Day">Transfer Day</option></select>
            </td>
          </tr>


          <tr>
            <td>
            </td>
          </tr>


          <tr>
           <td valign="middle">
           <select name="entry.2050645103" id="entry_2050645103" aria-label="Program  " hidden>
           <option value=""></option>
           <option value="Biotechnology (Catonsville)" id="bio">Biotechnology (Catonsville)</option> 
           <option value="Biotechnology (Shady Grove)" id="bio-sg">Biotechnology (Shady Grove)</option> 
           <option value="Cybersecurity (Catonsville)" id="cyber">Cybersecurity (Catonsville)</option> 
           <option value="Cybersecurity (Shady Grove)" id="cyber-sg">Cybersecurity (Shady Grove)</option> 
           <option value="Health Information Technology" id="hit">Health Information Technology</option> 
           <option value="Engineering Management" id="engm">Engineering Management</option> 
           <option value="Systems Engineering" id="se">Systems Engineering</option> 
           <option value="Geographic Information Systems" id="gis">Geographic Information Systems</option> 
           <option value="IO Psychology" id="io">IO Psychology</option> 
           <option value="ISD" id="isd">ISD</option> 
           <option value="English Language Institute" id="eli">English Language Institute</option> 
           <option value="Music Entrepreneurship" id="music">Music Entrepreneurship</option> 
           <option value="Professional Training" id="pro">Professional Training</option> 
           <option value="Summer and Winter Sessions" id="sw">Summer and Winter Sessions</option> 
           <option value="TESOL" id="tesol">TESOL</option></select>
</td>
          </tr>


          <tr>
            <td>Questions/Comments:</td>
          </tr>


          <tr>
            <td colspan="2">
            <textarea name="entry.473186908" rows="3" class="formtext2" id="entry_473186908" dir="auto" aria-label="Questions/Comments  " style="width:100%">
</textarea>
            </td>
          </tr>


<input type="hidden" name="draftResponse" value="[,,&quot;2774206768638502948&quot;]">
<input type="hidden" name="pageHistory" value="0">
<input type="hidden" name="fvv" value="0">
<input type="hidden" name="fbzx" value="2774206768638502948">




          <tr>
            <td align="center" colspan="2">
            	<input type="submit" name="submit" value="Submit" style="width:100px; height:auto" class="jfk-button jfk-button-action ">
            </td>
          </tr>



          <tr>
            <td colspan="2" style="border-bottom: 2px #E9AB13 solid;"><strong>For more information on the program, please contact:</strong>
            </td>
          </tr>


          <tr>
            <td align="left" valign="top">
              <p><strong>Kim Y. Edmonds</strong><br>
Program Coordinator<br>
<a href="mailto:kedmonds@umbc.edu"  target="_blank">kedmonds@umbc.edu</a><br>
<a href="tel:410-455-3445" value="+14104553445" target="_blank">410-455-3445</a></p>
            </td>

            <td align="left" valign="top">
              <p><strong>Dr. Thomas Moore</strong><br>
                Graduate Program Director<br>
              <a href="mailto:mooretg@umbc.edu">mooretg@umbc.edu</a></p>
            </td>
          </tr>
        </table>
      </form>
    </div>
    <!-- SIDEBAR -->
    <?php include("includes/sidebar.php"); ?><!-- END SIDEBAR -->
    <!-- footer -->
    <br clear="all">  <?php include("includes/footer.php"); ?>
  <?php include("includes/tracking.php"); ?>
<br>
    <!--END footer -->
  </div>
  <!-- container -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="js/scripts.js"></script> 
<script src="js/jquery.cbpFWSlider.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>
<script>
var val = 'Systems Engineering';
$('#entry_2050645103').val(val);
</script>


</body>
</html>