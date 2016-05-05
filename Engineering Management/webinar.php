
<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en_US"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en_US"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en_US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en_US"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Pragma" content="no-cache">
        <meta name="robots" content="noindex, nofollow">
        <meta name="google-site-verification" content="vzrjAakg3iDvsHq0JKHWRlWFQpSpNbejIQ0p9WHXZEM">
        <title>Registration</title>
        <meta name="description" content="">        <meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="http://umbc.edu/dps/css/form.css">

        <!-- Smart Banner -->
                <link rel="stylesheet" href="https://attendee.gotowebinar.com/styles/jquery.smartbanner.css">

        <!-- /Smart Banner -->



        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <style type="text/css">
            @font-face{
            font-family:"HelveticaNeueW01-45Ligh";
            src:url("/fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot?#iefix");
            src:url("/fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot?#iefix") format("eot"),url("/fonts/530dee22-e3c1-4e9f-bf62-c31d510d9656.woff") format("woff"),url("/fonts/688ab72b-4deb-4e15-a088-89166978d469.ttf") format("truetype"),url("/fonts/7816f72f-f47e-4715-8cd7-960e3723846a.svg#7816f72f-f47e-4715-8cd7-960e3723846a") format("svg");
            }
            @font-face{
            font-family:"HelveticaNeueW01-55Roma";
            src:url("/fonts/b7693a83-b861-4aa6-85e0-9ecf676bc4d6.eot?#iefix");
            src:url("/fonts/b7693a83-b861-4aa6-85e0-9ecf676bc4d6.eot?#iefix") format("eot"),url("/fonts/bcf54343-d033-41ee-bbd7-2b77df3fe7ba.woff") format("woff"),url("/fonts/b0ffdcf0-26da-47fd-8485-20e4a40d4b7d.ttf") format("truetype"),url("/fonts/da09f1f1-062a-45af-86e1-2bbdb3dd94f9.svg#da09f1f1-062a-45af-86e1-2bbdb3dd94f9") format("svg");
            }
        </style>



        <!-- build:js scripts/vendor/modernizr.js -->
        <script src="https://attendee.gotowebinar.com/scripts/modernizr/modernizr.js"></script>
        <!-- endbuild -->

        <!-- build:css styles/vendor/bootstrap.css -->
        <link rel="stylesheet" href="https://attendee.gotowebinar.com/styles/bootstrap/bootstrap.css">
        <!-- endbuild -->

        <link rel="stylesheet" href="https://attendee.gotowebinar.com/styles/main.css?Apr 29, 2015 12:52:50 PM">



        <!-- legacy stuff -->

        <!--
        <link type="text/css" rel="stylesheet" href="https://static.citrixonlinecdn.com/web-library-2/styles/modal-windows.css">
        <link type="text/css" rel="stylesheet" href="https://static.citrixonlinecdn.com/web-library-2/styles/postlogin-button.css">
        -->
                <!-- spring url css
            <link type="text/css" rel="stylesheet" href='/styles/g2wattendee.css'>
        -->
        <!--[if IE 6]><link type="text/css" rel="stylesheet" href='/styles/g2wattendee-ie6.css'><![endif]-->
        <!--[if IE 7]><link type="text/css" rel="stylesheet" href='/styles/g2wattendee-ie7.css'><![endif]-->

                                    <link rel="stylesheet" href="https://attendee.gotowebinar.com/styles/registration.css?$Apr 29, 2015 12:52:50 PM">
                    
                    

<link type="text/css" rel="stylesheet" href="https://global.gotowebinar.com/themes/css/bd0d61f0fdc3774ef4f25613cc8602ff">
                <!-- end legacy stuff -->
</head>

<body id="registration">


    <div class="container">

        <div class="row">
            <div class="hero-unit" id="content">
                


<!-- Modal -->
<div class="modal fade" id="timezone-modal" tabindex="-1" role="dialog" aria-labelledby="timezone-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title">Select Your Time Zone</h2>
            </div>
            <div class="modal-body">
                <p>
                                                                <input type="hidden" id="training-key" value="6377942962783407617" />
                    
                    <select id="timezone" class="form-control">
                                                    <option value="Pacific/Samoa" >&#40;GMT-11:00&#41; Midway Island&#44; Samoa</option>
                                                    <option value="Pacific/Honolulu" >&#40;GMT-10:00&#41; Hawaii</option>
                                                    <option value="America/Anchorage" >&#40;GMT-08:00&#41; Alaska</option>
                                                    <option value="America/Phoenix" >&#40;GMT-07:00&#41; Arizona</option>
                                                    <option value="America/Los_Angeles" >&#40;GMT-07:00&#41; Pacific Time &#40;US and Canada&#41;&#59;Tijuana</option>
                                                    <option value="America/Denver" >&#40;GMT-06:00&#41; Mountain Time &#40;US and Canada&#41;</option>
                                                    <option value="America/Bogota" >&#40;GMT-05:00&#41; Bogota&#44; Lima&#44; Quito</option>
                                                    <option value="America/Chicago" >&#40;GMT-05:00&#41; Central Time &#40;US and Canada&#41;</option>
                                                    <option value="America/Mexico_City" >&#40;GMT-05:00&#41; Mexico City</option>
                                                    <option value="America/Caracas" >&#40;GMT-04:30&#41; Caracas&#44; La Paz</option>
                                                    <option value="America/New_York" >&#40;GMT-04:00&#41; Eastern Time &#40;US and Canada&#41;</option>
                                                    <option value="America/Indianapolis" >&#40;GMT-04:00&#41; Indiana &#40;East&#41;</option>
                                                    <option value="America/Guyana" >&#40;GMT-04:00&#41; Georgetown</option>
                                                    <option value="America/Santiago" >&#40;GMT-04:00&#41; Santiago</option>
                                                    <option value="America/Sao_Paulo" >&#40;GMT-03:00&#41; Brasilia</option>
                                                    <option value="America/Halifax" >&#40;GMT-03:00&#41; Atlantic Time &#40;Canada&#41;</option>
                                                    <option value="America/Buenos_Aires" >&#40;GMT-03:00&#41; Buenos Aires</option>
                                                    <option value="America/St_Johns" >&#40;GMT-02:30&#41; Newfoundland</option>
                                                    <option value="Atlantic/Cape_Verde" >&#40;GMT-01:00&#41; Cape Verde Is.</option>
                                                    <option value="GMT" >&#40;GMT&#41; Greenwich Mean Time</option>
                                                    <option value="Atlantic/Azores" >&#40;GMT&#43;00:00&#41; Azores</option>
                                                    <option value="Africa/Malabo" >&#40;GMT&#43;01:00&#41; West Central Africa</option>
                                                    <option value="Africa/Casablanca" >&#40;GMT&#41; Casablanca&#44; Monrovia</option>
                                                    <option value="Europe/London" >&#40;GMT&#41; Dublin&#44; Edinburgh&#44; Lisbon&#44; London</option>
                                                    <option value="Europe/Brussels" >&#40;GMT&#43;02:00&#41; Brussels&#44; Copenhagen&#44; Madrid&#44; Paris</option>
                                                    <option value="Europe/Amsterdam" >&#40;GMT&#43;02:00&#41; Amsterdam&#44; Berlin&#44; Bern&#44; Rome&#44; Stockholm&#44; Vienna</option>
                                                    <option value="Europe/Prague" >&#40;GMT&#43;02:00&#41; Belgrade&#44; Bratislava&#44; Budapest&#44; Ljubljana&#44; Prague</option>
                                                    <option value="Africa/Harare" >&#40;GMT&#43;02:00&#41; Harare&#44; Pretoria</option>
                                                    <option value="Europe/Warsaw" >&#40;GMT&#43;02:00&#41; Sarajevo&#44; Skopje&#44; Sofija&#44; Vilnius&#44; Warsaw&#44; Zagreb</option>
                                                    <option value="Asia/Jerusalem" >&#40;GMT&#43;03:00&#41; Jerusalem</option>
                                                    <option value="Europe/Bucharest" >&#40;GMT&#43;03:00&#41; Bucharest</option>
                                                    <option value="Asia/Baghdad" >&#40;GMT&#43;03:00&#41; Baghdad</option>
                                                    <option value="Europe/Minsk" >&#40;GMT&#43;03:00&#41; Minsk</option>
                                                    <option value="Asia/Kuwait" >&#40;GMT&#43;03:00&#41; Kuwait&#44; Riyadh</option>
                                                    <option value="Africa/Nairobi" >&#40;GMT&#43;03:00&#41; Nairobi</option>
                                                    <option value="Europe/Athens" >&#40;GMT&#43;03:00&#41; Athens&#44; Istanbul</option>
                                                    <option value="Africa/Cairo" >&#40;GMT&#43;03:00&#41; Cairo</option>
                                                    <option value="Europe/Moscow" >&#40;GMT&#43;03:00&#41; Moscow&#44; St. Petersburg&#44; Volgograd</option>
                                                    <option value="Europe/Helsinki" >&#40;GMT&#43;03:00&#41; Helsinki&#44; Riga&#44; Tallinn</option>
                                                    <option value="Asia/Tbilisi" >&#40;GMT&#43;04:00&#41; Baku&#44;Tbilisi&#44; Yerevan</option>
                                                    <option value="Asia/Muscat" >&#40;GMT&#43;04:00&#41; Abu Dhabi&#44; Muscat</option>
                                                    <option value="Asia/Tehran" >&#40;GMT&#43;04:30&#41; Tehran</option>
                                                    <option value="Asia/Kabul" >&#40;GMT&#43;04:30&#41; Kabul</option>
                                                    <option value="Asia/Karachi" >&#40;GMT&#43;05:00&#41; Islamabad&#44; Karachi&#44; Tashkent</option>
                                                    <option value="Asia/Yekaterinburg" >&#40;GMT&#43;05:00&#41; Yekaterinburg</option>
                                                    <option value="Asia/Colombo" >&#40;GMT&#43;05:30&#41; SriJayawardenepura</option>
                                                    <option value="Asia/Calcutta" >&#40;GMT&#43;05:30&#41; Calcutta&#44; Chennai&#44; Mumbai&#44; New Delhi</option>
                                                    <option value="Asia/Katmandu" >&#40;GMT&#43;05:45&#41; Kathmandu</option>
                                                    <option value="Asia/Novosibirsk" >&#40;GMT&#43;06:00&#41; Almaty&#44; Novosibirsk</option>
                                                    <option value="Asia/Dhaka" >&#40;GMT&#43;06:00&#41; Astana&#44; Dhaka</option>
                                                    <option value="Asia/Rangoon" >&#40;GMT&#43;06:30&#41; Rangoon</option>
                                                    <option value="Asia/Jakarta" >&#40;GMT&#43;07:00&#41; Hanoi&#44; Jakarta</option>
                                                    <option value="Asia/Bangkok" >&#40;GMT&#43;07:00&#41; Bangkok</option>
                                                    <option value="Asia/Krasnoyarsk" >&#40;GMT&#43;07:00&#41; Krasnoyarsk</option>
                                                    <option value="Asia/Taipei" >&#40;GMT&#43;08:00&#41; Taipei</option>
                                                    <option value="Australia/Perth" >&#40;GMT&#43;08:00&#41; Perth</option>
                                                    <option value="Asia/Singapore" >&#40;GMT&#43;08:00&#41; Kuala Lumpur&#44; Singapore</option>
                                                    <option value="Asia/Irkutsk" >&#40;GMT&#43;08:00&#41; Irkutsk&#44; Ulaan Bataar</option>
                                                    <option value="Asia/Shanghai" >&#40;GMT&#43;08:00&#41; Beijing&#44; Chongqing&#44; Hong Kong&#44; Urumqi</option>
                                                    <option value="Asia/Seoul" >&#40;GMT&#43;09:00&#41; Seoul</option>
                                                    <option value="Asia/Tokyo" >&#40;GMT&#43;09:00&#41; Osaka&#44; Sapporo&#44; Tokyo</option>
                                                    <option value="Asia/Yakutsk" >&#40;GMT&#43;09:00&#41; Yakutsk</option>
                                                    <option value="Australia/Darwin" >&#40;GMT&#43;09:30&#41; Darwin</option>
                                                    <option value="Australia/Adelaide" >&#40;GMT&#43;09:30&#41; Adelaide</option>
                                                    <option value="Australia/Hobart" >&#40;GMT&#43;10:00&#41; Hobart</option>
                                                    <option value="Australia/Sydney" >&#40;GMT&#43;10:00&#41; Canberra&#44; Melbourne&#44; Sydney</option>
                                                    <option value="Pacific/Guam" >&#40;GMT&#43;10:00&#41; Guam&#44; Port Moresby</option>
                                                    <option value="Asia/Magadan" >&#40;GMT&#43;10:00&#41; Magadan&#44; Solomon Is.&#44; New Caledonia</option>
                                                    <option value="Asia/Vladivostok" >&#40;GMT&#43;10:00&#41; Vladivostok</option>
                                                    <option value="Australia/Brisbane" >&#40;GMT&#43;10:00&#41; Brisbane</option>
                                                    <option value="Pacific/Auckland" >&#40;GMT&#43;12:00&#41; Auckland&#44; Wellington</option>
                                                    <option value="Pacific/Fiji" >&#40;GMT&#43;12:00&#41; Fiji&#44; Kamchatka&#44; Marshall Is.</option>
                                                    <option value="Pacific/Tongatapu" >&#40;GMT&#43;13:00&#41; Nukualofa</option>
                                            </select>
                </p>
            </div>
            <div class="modal-footer">
                <span><button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button></span>
                <span><button id="timezone-modal-set" type="button" class="btn btn-primary">Set Time Zone</button></span>
            </div>
        </div>
    </div>
</div>

<div class="page-header">
<div class="branding-image">
    <img src="http://images.gotowebinar.com/bd0d61f0fdc3774ef4f25613cc85f4b8" alt="UMBC Engineering Management and Systems Engineering Virtual Information Session" class="img-responsive">
</div>
<h1>UMBC Engineering Management and Systems Engineering Virtual Information Session</h1>
</div>

<form id="registrationForm" action="https://attendee.gotowebinar.com/registration.tmpl" method="POST" role="form">
    <div class="trainingTimesBox clearfix">
                <img class="LoadingDiv" src="https://attendee.gotowebinar.com/images/spinner.gif"/>
                                <div class="row col-md-12">
                <ol id="training-times" class="trainingTimes">
	    		    	        	        	                                                            	        <li class="next">Wed, Jun 3, 2015 12:00 PM - 1:00 PM EDT</li>
	     </ol>
            </div>
            <div class="row col-md-12">
                <a href="#" class="launch-tz-modal">Show in My Time Zone</a>
            </div>
            </div>
<hr>
<div class="description trainingDescription" >
            <div class="clearfix">
                <span>Where can a Master's Degree or Graduate Certificate in Engineering Management or Systems Engineering take you?
<br>
<br>Join us for the session to learn about UMBC's Engineering Management and Systems Engineering programs. The session will provide an overview of our innovative curriculum and practice-oriented instruction, designed for working professionals.
<br>
<br>Learn about admissions, curriculum, class format and the engineering career outlook.</span>
        </div>
</div>
<hr>
    <script>
        var regLinks = regLinks || {};
        regLinks.more = 'Read more';
        regLinks.less = 'Read less';
    </script>


            
            

<p class="requiredMessage">Required field</p>

                <input type="hidden" name="registrant.source" value="">
                <input type="hidden" name="registrant.timeZone" value="">

<div id="studentInformation">
<div class="row">
                <input type="hidden" id="webinar" name="webinar" value="6377942962783407617" > 		
			        <div class="form-group col-sm-6  required ">

                        <label id="registrant.givenNameLabel" class="control-label"     >First Name</label>
        <input type="text" id="registrant.givenName" class="form-control maxCharLimit" name="registrant.givenName" value=""             maxlength="128"
            tabindex="2"
     />
        </div>
																
        		
				        <div class="form-group col-sm-6  required ">

                        <label id="registrant.surnameLabel" class="control-label"     >Last Name</label>
        <input type="text" id="registrant.surname" class="form-control maxCharLimit" name="registrant.surname" value=""             maxlength="128"
            tabindex="3"
     />
        </div>
															
                </div>
        <div class="row">
    		
					        <div class="form-group col-sm-6  required ">

                        <label id="registrant.emailLabel" class='control-label'     >Email Address</label> <a href="#" id="emailNotice" class="mouseover questionMark"></a>
    <input type="email" id="registrant.email" class='form-control maxCharLimit' name="registrant.email" value=""             maxlength="128"
            tabindex="4"
    >
    </div>
 														
        	
						        <div class="form-group col-sm-6  hide2">

                        <label id="registrant.addressLabel" class="control-label"     >Street Address</label>
        <input type="text" id="registrant.address" class="form-control maxCharLimit" name="registrant.address" value=""             maxlength="128"
            tabindex="5"
     />
        </div>
													
                </div>
        <div class="row">
    	
							        <div class="form-group col-sm-6  hide2">

                        <label id="registrant.cityLabel" class="control-label"     >City</label>
        <input type="text" id="registrant.city" class="form-control maxCharLimit" name="registrant.city" value=""             maxlength="128"
            tabindex="6"
     />
        </div>
												
        	
									        	        <div class="form-group col-sm-6  hide2">
        <label id="registrant.stateLabel" class="control-label "     >State/Province</label>
        <select id="registrant.state" class="form-control" name="registrant.state"             tabindex="7"
    >
                                            <option value="" selected="selected">
                Choose One...            </option>
                                        <option value="Alabama" >
                Alabama
            </option>
                                <option value="Alaska" >
                Alaska
            </option>
                                <option value="Alberta" >
                Alberta
            </option>
                                <option value="Arizona" >
                Arizona
            </option>
                                <option value="Arkansas" >
                Arkansas
            </option>
                                <option value="British Columbia" >
                British Columbia
            </option>
                                <option value="California" >
                California
            </option>
                                <option value="Colorado" >
                Colorado
            </option>
                                <option value="Connecticut" >
                Connecticut
            </option>
                                <option value="Delaware" >
                Delaware
            </option>
                                <option value="District of Columbia" >
                District of Columbia
            </option>
                                <option value="Florida" >
                Florida
            </option>
                                <option value="Georgia" >
                Georgia
            </option>
                                <option value="Guam" >
                Guam
            </option>
                                <option value="Hawaii" >
                Hawaii
            </option>
                                <option value="Idaho" >
                Idaho
            </option>
                                <option value="Illinois" >
                Illinois
            </option>
                                <option value="Indiana" >
                Indiana
            </option>
                                <option value="Iowa" >
                Iowa
            </option>
                                <option value="Kansas" >
                Kansas
            </option>
                                <option value="Kentucky" >
                Kentucky
            </option>
                                <option value="Louisiana" >
                Louisiana
            </option>
                                <option value="Maine" >
                Maine
            </option>
                                <option value="Manitoba" >
                Manitoba
            </option>
                                <option value="Maryland" >
                Maryland
            </option>
                                <option value="Massachusetts" >
                Massachusetts
            </option>
                                <option value="Michigan" >
                Michigan
            </option>
                                <option value="Minnesota" >
                Minnesota
            </option>
                                <option value="Mississippi" >
                Mississippi
            </option>
                                <option value="Missouri" >
                Missouri
            </option>
                                <option value="Montana" >
                Montana
            </option>
                                <option value="Nebraska" >
                Nebraska
            </option>
                                <option value="Nevada" >
                Nevada
            </option>
                                <option value="New Brunswick" >
                New Brunswick
            </option>
                                <option value="Newfoundland" >
                Newfoundland
            </option>
                                <option value="New Hampshire" >
                New Hampshire
            </option>
                                <option value="New Jersey" >
                New Jersey
            </option>
                                <option value="New Mexico" >
                New Mexico
            </option>
                                <option value="New York" >
                New York
            </option>
                                <option value="North Carolina" >
                North Carolina
            </option>
                                <option value="North Dakota" >
                North Dakota
            </option>
                                <option value="Northwest Territories" >
                Northwest Territories
            </option>
                                <option value="Nova Scotia" >
                Nova Scotia
            </option>
                                <option value="Nunavut" >
                Nunavut
            </option>
                                <option value="Ohio" >
                Ohio
            </option>
                                <option value="Oklahoma" >
                Oklahoma
            </option>
                                <option value="Ontario" >
                Ontario
            </option>
                                <option value="Oregon" >
                Oregon
            </option>
                                <option value="Pennsylvania" >
                Pennsylvania
            </option>
                                <option value="Prince Edward Island" >
                Prince Edward Island
            </option>
                                <option value="Puerto Rico" >
                Puerto Rico
            </option>
                                <option value="Quebec" >
                Quebec
            </option>
                                <option value="Rhode Island" >
                Rhode Island
            </option>
                                <option value="Saskatchewan" >
                Saskatchewan
            </option>
                                <option value="South Carolina" >
                South Carolina
            </option>
                                <option value="South Dakota" >
                South Dakota
            </option>
                                <option value="Tennessee" >
                Tennessee
            </option>
                                <option value="Texas" >
                Texas
            </option>
                                <option value="Utah" >
                Utah
            </option>
                                <option value="Vermont" >
                Vermont
            </option>
                                <option value="Virginia" >
                Virginia
            </option>
                                <option value="Virgin Islands" >
                Virgin Islands
            </option>
                                <option value="Washington" >
                Washington
            </option>
                                <option value="West Virginia" >
                West Virginia
            </option>
                                <option value="Wisconsin" >
                Wisconsin
            </option>
                                <option value="Wyoming" >
                Wyoming
            </option>
                                <option value="Yukon" >
                Yukon
            </option>
                                        <option value="__" >
                Other            </option>
                </select>
            </div>
											
                </div>
        <div class="row">
    	
										        <div class="form-group col-sm-6 hide2 ">

                        <label id="registrant.zipLabel" class="control-label"     >Zip/Postal Code</label>
        <input type="text" id="registrant.zip" class="form-control maxCharLimit" name="registrant.zip" value=""             maxlength="128"
            tabindex="8"
     />
        </div>
									
        	
										        	        <div class="form-group col-sm-6  hide2">
        <label id="registrant.countryLabel" class="control-label "     >Country</label>
        <select id="registrant.country" class="form-control" name="registrant.country"             tabindex="9"
    >
                                            <option value="" selected="selected">
                Choose One...            </option>
                                        <option value="Albania" >
                Albania
            </option>
                                <option value="Algeria" >
                Algeria
            </option>
                                <option value="American Samoa" >
                American Samoa
            </option>
                                <option value="Andorra" >
                Andorra
            </option>
                                <option value="Angola" >
                Angola
            </option>
                                <option value="Anguilla" >
                Anguilla
            </option>
                                <option value="Antarctica" >
                Antarctica
            </option>
                                <option value="Antigua and Barbuda" >
                Antigua and Barbuda
            </option>
                                <option value="Argentina" >
                Argentina
            </option>
                                <option value="Armenia" >
                Armenia
            </option>
                                <option value="Aruba" >
                Aruba
            </option>
                                <option value="Australia" >
                Australia
            </option>
                                <option value="Austria" >
                Austria
            </option>
                                <option value="Azerbaijan" >
                Azerbaijan
            </option>
                                <option value="Bahamas" >
                Bahamas
            </option>
                                <option value="Bahrain" >
                Bahrain
            </option>
                                <option value="Bangladesh" >
                Bangladesh
            </option>
                                <option value="Barbados" >
                Barbados
            </option>
                                <option value="Belarus" >
                Belarus
            </option>
                                <option value="Belgium" >
                Belgium
            </option>
                                <option value="Belize" >
                Belize
            </option>
                                <option value="Benin" >
                Benin
            </option>
                                <option value="Bermuda" >
                Bermuda
            </option>
                                <option value="Bhutan" >
                Bhutan
            </option>
                                <option value="Bolivia" >
                Bolivia
            </option>
                                <option value="Bosnia-Herzegovina" >
                Bosnia-Herzegovina
            </option>
                                <option value="Botswana" >
                Botswana
            </option>
                                <option value="Bouvet Island" >
                Bouvet Island
            </option>
                                <option value="Brazil" >
                Brazil
            </option>
                                <option value="Brunei Darussalam" >
                Brunei Darussalam
            </option>
                                <option value="Bulgaria" >
                Bulgaria
            </option>
                                <option value="Burkina Faso" >
                Burkina Faso
            </option>
                                <option value="Burundi" >
                Burundi
            </option>
                                <option value="Cambodia" >
                Cambodia
            </option>
                                <option value="Cameroon" >
                Cameroon
            </option>
                                <option value="Canada" >
                Canada
            </option>
                                <option value="Cape Verde" >
                Cape Verde
            </option>
                                <option value="Cayman Islands" >
                Cayman Islands
            </option>
                                <option value="Chad" >
                Chad
            </option>
                                <option value="Chile" >
                Chile
            </option>
                                <option value="China" >
                China
            </option>
                                <option value="Christmas Island" >
                Christmas Island
            </option>
                                <option value="Colombia" >
                Colombia
            </option>
                                <option value="Comoros" >
                Comoros
            </option>
                                <option value="Congo" >
                Congo
            </option>
                                <option value="Cook Islands" >
                Cook Islands
            </option>
                                <option value="Costa Rica" >
                Costa Rica
            </option>
                                <option value="Cote d&#39;Ivoire" >
                Cote d'Ivoire
            </option>
                                <option value="Croatia" >
                Croatia
            </option>
                                <option value="Cyprus" >
                Cyprus
            </option>
                                <option value="Czech Republic" >
                Czech Republic
            </option>
                                <option value="Denmark" >
                Denmark
            </option>
                                <option value="Djibouti" >
                Djibouti
            </option>
                                <option value="Dominica" >
                Dominica
            </option>
                                <option value="Dominican Republic" >
                Dominican Republic
            </option>
                                <option value="East Timor" >
                East Timor
            </option>
                                <option value="Ecuador" >
                Ecuador
            </option>
                                <option value="Egypt" >
                Egypt
            </option>
                                <option value="El Salvador" >
                El Salvador
            </option>
                                <option value="Equatorial Guinea" >
                Equatorial Guinea
            </option>
                                <option value="Eritrea" >
                Eritrea
            </option>
                                <option value="Estonia" >
                Estonia
            </option>
                                <option value="Ethiopia" >
                Ethiopia
            </option>
                                <option value="Falkland Islands" >
                Falkland Islands
            </option>
                                <option value="Faroe Islands" >
                Faroe Islands
            </option>
                                <option value="Fiji" >
                Fiji
            </option>
                                <option value="Finland" >
                Finland
            </option>
                                <option value="France" >
                France
            </option>
                                <option value="French Guiana" >
                French Guiana
            </option>
                                <option value="French Polynesia" >
                French Polynesia
            </option>
                                <option value="Gabon" >
                Gabon
            </option>
                                <option value="Gambia" >
                Gambia
            </option>
                                <option value="Georgia" >
                Georgia
            </option>
                                <option value="Germany" >
                Germany
            </option>
                                <option value="Ghana" >
                Ghana
            </option>
                                <option value="Gibraltar" >
                Gibraltar
            </option>
                                <option value="Greece" >
                Greece
            </option>
                                <option value="Greenland" >
                Greenland
            </option>
                                <option value="Grenada" >
                Grenada
            </option>
                                <option value="Guadeloupe" >
                Guadeloupe
            </option>
                                <option value="Guam" >
                Guam
            </option>
                                <option value="Guatemala" >
                Guatemala
            </option>
                                <option value="Guinea" >
                Guinea
            </option>
                                <option value="Guinea-Bissau" >
                Guinea-Bissau
            </option>
                                <option value="Guyana" >
                Guyana
            </option>
                                <option value="Haiti" >
                Haiti
            </option>
                                <option value="Honduras" >
                Honduras
            </option>
                                <option value="Hong Kong" >
                Hong Kong
            </option>
                                <option value="Hungary" >
                Hungary
            </option>
                                <option value="Iceland" >
                Iceland
            </option>
                                <option value="India" >
                India
            </option>
                                <option value="Indonesia" >
                Indonesia
            </option>
                                <option value="Ireland" >
                Ireland
            </option>
                                <option value="Israel" >
                Israel
            </option>
                                <option value="Italy" >
                Italy
            </option>
                                <option value="Jamaica" >
                Jamaica
            </option>
                                <option value="Japan" >
                Japan
            </option>
                                <option value="Jordan" >
                Jordan
            </option>
                                <option value="Kazakhstan" >
                Kazakhstan
            </option>
                                <option value="Kenya" >
                Kenya
            </option>
                                <option value="Kiribati" >
                Kiribati
            </option>
                                <option value="Korea &#40;South&#41;" >
                Korea (South)
            </option>
                                <option value="Korea&#44; Republic of" >
                Korea, Republic of
            </option>
                                <option value="Kuwait" >
                Kuwait
            </option>
                                <option value="Kyrgyzstan" >
                Kyrgyzstan
            </option>
                                <option value="Laos" >
                Laos
            </option>
                                <option value="Latvia" >
                Latvia
            </option>
                                <option value="Lebanon" >
                Lebanon
            </option>
                                <option value="Lesotho" >
                Lesotho
            </option>
                                <option value="Liberia" >
                Liberia
            </option>
                                <option value="Liechtenstein" >
                Liechtenstein
            </option>
                                <option value="Lithuania" >
                Lithuania
            </option>
                                <option value="Luxembourg" >
                Luxembourg
            </option>
                                <option value="Macau" >
                Macau
            </option>
                                <option value="Macedonia" >
                Macedonia
            </option>
                                <option value="Madagascar" >
                Madagascar
            </option>
                                <option value="Malawi" >
                Malawi
            </option>
                                <option value="Malaysia" >
                Malaysia
            </option>
                                <option value="Maldives" >
                Maldives
            </option>
                                <option value="Mali" >
                Mali
            </option>
                                <option value="Malta" >
                Malta
            </option>
                                <option value="Marshall Islands" >
                Marshall Islands
            </option>
                                <option value="Martinique" >
                Martinique
            </option>
                                <option value="Mauritania" >
                Mauritania
            </option>
                                <option value="Mauritius" >
                Mauritius
            </option>
                                <option value="Mayotte" >
                Mayotte
            </option>
                                <option value="Mexico" >
                Mexico
            </option>
                                <option value="Micronesia" >
                Micronesia
            </option>
                                <option value="Moldova&#44; Republic of" >
                Moldova, Republic of
            </option>
                                <option value="Monaco" >
                Monaco
            </option>
                                <option value="Mongolia" >
                Mongolia
            </option>
                                <option value="Montserrat" >
                Montserrat
            </option>
                                <option value="Morocco" >
                Morocco
            </option>
                                <option value="Mozambique" >
                Mozambique
            </option>
                                <option value="Myanmar" >
                Myanmar
            </option>
                                <option value="Namibia" >
                Namibia
            </option>
                                <option value="Nauru" >
                Nauru
            </option>
                                <option value="Nepal" >
                Nepal
            </option>
                                <option value="Netherlands" >
                Netherlands
            </option>
                                <option value="Netherlands Antilles" >
                Netherlands Antilles
            </option>
                                <option value="New Caledonia" >
                New Caledonia
            </option>
                                <option value="New Zealand" >
                New Zealand
            </option>
                                <option value="Nicaragua" >
                Nicaragua
            </option>
                                <option value="Niger" >
                Niger
            </option>
                                <option value="Nigeria" >
                Nigeria
            </option>
                                <option value="Niue" >
                Niue
            </option>
                                <option value="Norfolk Island" >
                Norfolk Island
            </option>
                                <option value="Norway" >
                Norway
            </option>
                                <option value="Oman" >
                Oman
            </option>
                                <option value="Pakistan" >
                Pakistan
            </option>
                                <option value="Palau" >
                Palau
            </option>
                                <option value="Panama" >
                Panama
            </option>
                                <option value="Papua New Guinea" >
                Papua New Guinea
            </option>
                                <option value="Paraguay" >
                Paraguay
            </option>
                                <option value="Peru" >
                Peru
            </option>
                                <option value="Philippines" >
                Philippines
            </option>
                                <option value="Pitcairn" >
                Pitcairn
            </option>
                                <option value="Poland" >
                Poland
            </option>
                                <option value="Portugal" >
                Portugal
            </option>
                                <option value="Puerto Rico" >
                Puerto Rico
            </option>
                                <option value="Qatar" >
                Qatar
            </option>
                                <option value="Reunion" >
                Reunion
            </option>
                                <option value="Romania" >
                Romania
            </option>
                                <option value="Russian Federation" >
                Russian Federation
            </option>
                                <option value="Rwanda" >
                Rwanda
            </option>
                                <option value="Saint Kitts and Nevis" >
                Saint Kitts and Nevis
            </option>
                                <option value="Saint Lucia" >
                Saint Lucia
            </option>
                                <option value="Samoa &#40;Independent&#41;" >
                Samoa (Independent)
            </option>
                                <option value="San Marino" >
                San Marino
            </option>
                                <option value="Sao Tome and Principe" >
                Sao Tome and Principe
            </option>
                                <option value="Saudi Arabia" >
                Saudi Arabia
            </option>
                                <option value="Senegal" >
                Senegal
            </option>
                                <option value="Serbia" >
                Serbia
            </option>
                                <option value="Seychelles" >
                Seychelles
            </option>
                                <option value="Sierra Leone" >
                Sierra Leone
            </option>
                                <option value="Singapore" >
                Singapore
            </option>
                                <option value="Slovakia" >
                Slovakia
            </option>
                                <option value="Slovenia" >
                Slovenia
            </option>
                                <option value="Solomon Islands" >
                Solomon Islands
            </option>
                                <option value="Somalia" >
                Somalia
            </option>
                                <option value="South Africa" >
                South Africa
            </option>
                                <option value="Spain" >
                Spain
            </option>
                                <option value="Sri Lanka" >
                Sri Lanka
            </option>
                                <option value="St. Helena" >
                St. Helena
            </option>
                                <option value="Suriname" >
                Suriname
            </option>
                                <option value="Swaziland" >
                Swaziland
            </option>
                                <option value="Sweden" >
                Sweden
            </option>
                                <option value="Switzerland" >
                Switzerland
            </option>
                                <option value="Taiwan" >
                Taiwan
            </option>
                                <option value="Tajikistan" >
                Tajikistan
            </option>
                                <option value="Tanzania" >
                Tanzania
            </option>
                                <option value="Thailand" >
                Thailand
            </option>
                                <option value="Togo" >
                Togo
            </option>
                                <option value="Tokelau" >
                Tokelau
            </option>
                                <option value="Tonga" >
                Tonga
            </option>
                                <option value="Trinidad and Tobago" >
                Trinidad and Tobago
            </option>
                                <option value="Tunisia" >
                Tunisia
            </option>
                                <option value="Turkey" >
                Turkey
            </option>
                                <option value="Turkmenistan" >
                Turkmenistan
            </option>
                                <option value="Tuvalu" >
                Tuvalu
            </option>
                                <option value="Uganda" >
                Uganda
            </option>
                                <option value="Ukraine" >
                Ukraine
            </option>
                                <option value="United Arab Emirates" >
                United Arab Emirates
            </option>
                                <option value="United Kingdom" >
                United Kingdom
            </option>
                                <option value="United States" >
                United States
            </option>
                                <option value="Uruguay" >
                Uruguay
            </option>
                                <option value="Uzbekistan" >
                Uzbekistan
            </option>
                                <option value="Vanuatu" >
                Vanuatu
            </option>
                                <option value="Vatican City" >
                Vatican City
            </option>
                                <option value="Venezuela" >
                Venezuela
            </option>
                                <option value="Viet Nam" >
                Viet Nam
            </option>
                                <option value="Virgin Islands &#40;U.S.&#41;" >
                Virgin Islands (U.S.)
            </option>
                                <option value="Western Sahara" >
                Western Sahara
            </option>
                                <option value="Yemen" >
                Yemen
            </option>
                                <option value="Zambia" >
                Zambia
            </option>
                                <option value="Zimbabwe" >
                Zimbabwe
            </option>
                                        <option value="__" >
                Other            </option>
                </select>
            </div>
										
                </div>
        <div class="row">
    	
											        <div class="form-group col-sm-6  hide2">

                        <label id="registrant.phoneLabel" class="control-label"     >Phone Number</label>
        <input type="text" id="registrant.phone" class="form-control maxCharLimit" name="registrant.phone" value=""             maxlength="128"
            tabindex="10"
     />
        </div>
								
        	
														        <div class="form-group col-sm-6  hide2">

                        <label id="registrant.jobTitleLabel" class="control-label"     >Job Title</label>
        <input type="text" id="registrant.jobTitle" class="form-control maxCharLimit" name="registrant.jobTitle" value=""             maxlength="128"
            tabindex="11"
     />
        </div>
					
                </div>
        <div class="row">
    	
													        <div class="form-group col-sm-6  hide2">

                        <label id="registrant.organizationLabel" class="control-label"     >Organization</label>
        <input type="text" id="registrant.organization" class="form-control maxCharLimit" name="registrant.organization" value=""             maxlength="128"
            tabindex="12"
     />
        </div>
						
        	
										                        <div class="form-group col-sm-6  hide2">
    <label id="registrant.industryLabel" class="control-label"     >Industry</label>
    <select id="registrant.industry" class="form-control" name="registrant.industry"             tabindex="13"
    >
                                            <option value="" selected="selected">
                Choose One...            </option>
                
                        <option value="Accounting" >
                Accounting
            </option>
        
                        <option value="Advertising/Marketing/PR" >
                Advertising/Marketing/PR
            </option>
        
                        <option value="Aerospace &amp; Defense" >
                Aerospace &amp; Defense
            </option>
        
                        <option value="Banking &amp; Securities" >
                Banking &amp; Securities
            </option>
        
                        <option value="Call Center Outsourcing" >
                Call Center Outsourcing
            </option>
        
                        <option value="Consulting" >
                Consulting
            </option>
        
                        <option value="Education" >
                Education
            </option>
        
                        <option value="Energy&#44; Chemical&#44; Utilities" >
                Energy&#44; Chemical&#44; Utilities
            </option>
        
                        <option value="Financial Services - Other" >
                Financial Services - Other
            </option>
        
                        <option value="Government - Federal" >
                Government - Federal
            </option>
        
                        <option value="Government - State &amp; Local" >
                Government - State &amp; Local
            </option>
        
                        <option value="High Tech - Hardware" >
                High Tech - Hardware
            </option>
        
                        <option value="High Tech - ISP" >
                High Tech - ISP
            </option>
        
                        <option value="High Tech - Other" >
                High Tech - Other
            </option>
        
                        <option value="Hospital&#44; Clinic&#44; Doctor Office" >
                Hospital&#44; Clinic&#44; Doctor Office
            </option>
        
                        <option value="Hospitality&#44; Travel&#44; Tourism" >
                Hospitality&#44; Travel&#44; Tourism
            </option>
        
                        <option value="Insurance" >
                Insurance
            </option>
        
                        <option value="Legal" >
                Legal
            </option>
        
                        <option value="Manufacturing" >
                Manufacturing
            </option>
        
                        <option value="Medical&#44; Pharma&#44; Biotech" >
                Medical&#44; Pharma&#44; Biotech
            </option>
        
                        <option value="Real Estate" >
                Real Estate
            </option>
        
                        <option value="Retail" >
                Retail
            </option>
        
                        <option value="Software - Finance" >
                Software - Finance
            </option>
        
                        <option value="Software - Healthcare" >
                Software - Healthcare
            </option>
        
                        <option value="Software - Other" >
                Software - Other
            </option>
        
                        <option value="Support Outsourcing" >
                Support Outsourcing
            </option>
        
                        <option value="Telecommunications" >
                Telecommunications
            </option>
        
                        <option value="Transportation &amp; Distribution" >
                Transportation &amp; Distribution
            </option>
        
                        <option value="VAR/Systems Integrator" >
                VAR/Systems Integrator
            </option>
                                        <option value="Other" >
                Other            </option>
            </select>
    </div>
    						
                </div>
        <div class="row">
    	
																	
        </div>
</div>

<hr class="skinny">
<div class="alert alert-info hide">
    <p class="registrationWarning">Webinar organizers are prohibited from soliciting confidential personal information &#40;credit card information&#44; social security numbers&#44; etc.&#41; in the registration form. This questionnaire is not intended to handle sensitive data.</p>
</div>

<div id="customQuestions" class="row">

    		    	                	                    		<div class="formField ">

		                <input type="hidden" name="customRegistrationSubmission.answers&#91;0&#93;.questionKey" value="17246028">
        			<div class="form-group  col-sm-12">
            	    <label id="customRegistrationSubmission.answers_0.selectedOptionsLabel" class="control-label "     >How did you learn about the information session?</label>
    <select id="customRegistrationSubmission.answers_0.selectedOptions" class="form-control" name="customRegistrationSubmission.answers&#91;0&#93;.selectedOptions"             tabindex="15"
    >
			<option value="">
			Choose One...		</option>
	
                    <option value="17246029" >
            Email
        </option>
                    <option value="17246030" >
            Facebook
        </option>
                    <option value="17246031" >
            Radio/Internet Radio
        </option>
                    <option value="17246032" >
            LinkedIn
        </option>
                    <option value="17246033" >
            Other
        </option>
    	</select>
    </div>
				</div>
		    	                	                    		<div class="formField ">

		                <input type="hidden" name="customRegistrationSubmission.answers&#91;1&#93;.questionKey" value="17246034">
                                           <div class="form-group  col-sm-12">
                    		                	<label for="customRegistrationSubmission.answers_1.text" class="control-label  "     >Is there any specific information you would like addressed during the session?</label>
        <input type="text" id="customRegistrationSubmission.answers_1.text" name="customRegistrationSubmission.answers&#91;1&#93;.text" class="form-control maxCharLimit"             maxlength="128"
            tabindex="16"
     value="" />
                    </div>
				</div>
	</div>
<hr class="skinny">
	<div id="comments" class="formField">
		<div class="form-group ">
                            <label id="registrant.commentsLabel" class="control-label"     >Questions &amp; Comments</label>
        <textarea id="registrant.comments" name="registrant.comments" class="form-control maxCharLimit"             cols="0"
            maxlength="255"
            tabindex="17"
            rows="0"
     ></textarea>
    </div>
</div>
<div class="alert alert-info">
    <p>By clicking this button&#44; you submit your information to the webinar organizer&#44; who will use it to communicate with you regarding this event and their other services.</p>
</div>

<div class="sectionFooter">
    <input type="submit" id="registration.submit.button" name="registration.submit.button" value="Register"
                tabindex="18"
            class="btn btn-primary"  onMouseDown="ga('send', 'event', 'lead', 'submit', 'webinar');"
        />
</div>
</form>
	<div id="balloon_emailNotice" class="tip infoBalloon hide">
		<div id="balloon_emailNotice_content" class="content">
			<a onclick="$('balloon_emailNotice').hide(); return false;" href="#" class="close">Close</a>
    Your information will be submitted to the webinar organizer&#44; who will use it to communicate with you regarding this event and their other services.		</div>
		<div id="balloon_emailNotice_carat" class="left"></div>
	</div>
	<div id="balloon_payInfo" class="tip infoBalloon hide">
		<div id="balloon_payInfo_content" class="content">
			<a onclick="$('balloon_payInfo').hide(); return false;" href="#" class="close">Close</a>
    Pay for this webinar via PayPal using your credit card or your PayPal account.		</div>
		<div id="balloon_payInfo_carat" class="left"></div>
	</div>
            </div>
        </div>

    </div>

    <footer>
        <div class="container">
            <div class="row">
                
<div class="legal">
    <div id="copyright">
        <p>©1997-2015 Citrix Systems, Inc. All rights reserved.</p>
                <p>View the <a href='http://www.gotomeeting.com/fec/privacyPopUp?#g2w_pop' rel='external'>GoToWebinar Privacy Policy</a>.</p>
    </div>
    <div id="privacyNotice">
        <p>To review the webinar organizer&#39;s privacy policy or opt out of their other communications&#44; contact the webinar organizer directly.</p>
        <p>Safeguarding your email address and webinar registration information is taken seriously at GoToWebinar. GoToWebinar will not sell or rent this information.</p>
    </div>
</div>            </div>
        </div>
    </footer>

<input type="hidden" id="outlookCalendarMessage" value="Outlook&lt;sup&gt;&amp;reg&#59;&lt;/sup&gt; Calendar" />
    <input type="hidden" id="googleCalendarMessage" value="Google Calendar&amp;&#35;8482" />
    <input type="hidden" id="yahooCalendarMessage" value="Yahoo&#33;&lt;sup&gt;&amp;reg&#59;&lt;/sup&gt; Calendar" />
    <input type="hidden" id="hotmailCalendarMessage" value="Outlook.com Calendar" />
    <input type="hidden" id="icalCalendarMessage" value="iCal&lt;sup&gt;&amp;reg&#59;&lt;/sup&gt;" />

<script src="https://attendee.gotowebinar.com//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="https://attendee.gotowebinar.com/scripts/jquery/jquery.min.js"><\/script>')</script>
<script src="https://attendee.gotowebinar.com/scripts/jquery/jquery.color-2.1.2.min.js"></script>
<script src="https://attendee.gotowebinar.com/scripts/jquery/jquery.expander.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.4/jstz.min.js"></script>

<script src="https://attendee.gotowebinar.com/scripts/scriptaculous/jquery.smartbanner.js"></script>
<script src="https://attendee.gotowebinar.com/scripts/bootstrap/bootstrap.js"></script>
<script src="https://attendee.gotowebinar.com/scripts/app.js?Apr 29, 2015 12:52:50 PM"></script>
<script src="https://attendee.gotowebinar.com/scripts/page/registration.js?Apr 29, 2015 12:52:50 PM"></script>



<script src="https://attendee.gotowebinar.com/scripts/loadMessages.js?Apr 29, 2015 12:52:50 PM"></script>
<script src="https://attendee.gotowebinar.com/scripts/framework/jquery.i18n.properties-min.js"></script>
<script src="https://attendee.gotowebinar.com/scripts/framework/moment/moment.js"></script>
<script src="https://attendee.gotowebinar.com/scripts/framework/moment/moment-timezone.js"></script>
<script src="https://attendee.gotowebinar.com/scripts/framework/moment/moment-tz-builder.js"></script>
<script src="https://attendee.gotowebinar.com/scripts/common_utils.js"></script>

<!-- Facebook Tracking Pixel -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '474030342731967']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=474030342731967&amp;ev=PixelInitialized" /></noscript>
</html>


<!-- Twitter Code for Remarketing Tag -->
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
twttr.conversion.trackPid('l4pxk');
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l4pxk&p_id=Twitter" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l4pxk&p_id=Twitter" />
</noscript>

<script  src="https://attendee.gotowebinar.com/scripts/page/addThisEvent.js?Apr 29, 2015 12:52:50 PM" ></script>

        <script type="text/javascript">

        var _0xa9ed=["\x61\x6F\x6B\x36\x62\x63\x33\x70\x31\x7A\x78\x38\x6E\x31\x72\x71\x6D\x6D\x75\x77","\x4F\x75\x74\x6C\x6F\x6F\x6B\x20\x43\x61\x6C\x65\x6E\x64\x61\x72","\x47\x6F\x6F\x67\x6C\x65\x20\x43\x61\x6C\x65\x6E\x64\x61\x72","\x59\x61\x68\x6F\x6F\x20\x43\x61\x6C\x65\x6E\x64\x61\x72","\x48\x6F\x74\x6D\x61\x69\x6C\x20\x43\x61\x6C\x65\x6E\x64\x61\x72","\x69\x43\x61\x6C\x20\x43\x61\x6C\x65\x6E\x64\x61\x72","\x46\x61\x63\x65\x62\x6F\x6F\x6B\x20\x45\x76\x65\x6E\x74","\x6F\x75\x74\x6C\x6F\x6F\x6B\x2C\x67\x6F\x6F\x67\x6C\x65\x2C\x69\x63\x61\x6C","","\x73\x65\x74\x74\x69\x6E\x67\x73"];addthisevent[_0xa9ed[9]]({license:_0xa9ed[0],mouse:false,css:false,outlook:{show:true,text:document.getElementById('outlookCalendarMessage').value},google:{show:true,text:document.getElementById('googleCalendarMessage').value},yahoo:{show:true,text:document.getElementById('yahooCalendarMessage').value},hotmail:{show:true,text:document.getElementById('hotmailCalendarMessage').value},ical:{show:true,text:document.getElementById('icalCalendarMessage').value},facebook:{show:false,text:_0xa9ed[6]},dropdown:{order:"outlook,google,ical,yahoo,hotmail"}});
    </script>
   

</body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1756263-12', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

</script>


<!-- Bing Tracking Code -->
<script>
(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5013621"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");
</script>
<noscript><img src="//bat.bing.com/action/0?ti=5013621&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>


</html>