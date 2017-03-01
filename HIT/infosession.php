<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en';
?>

<!DOCTYPE html>
<html>
<head>

<title>Lunch & Learn | Health Information Technology at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC undergraduate students have the option of applying to the Health IT Master's program in their junior or senior year and earn up to nine graduate credits towards the degree." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Lunch & Learn | Health Information Technology at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/hit/infosession" />
<meta property="og:image" content="http://www.umbc.edu/hit/images/bk.jpg" />
<meta property="og:description" content="UMBC undergraduate students have the option of applying to the Health IT Master's program in their junior or senior year and earn up to nine graduate credits towards the degree." />

<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
<link href="css/styles.css" rel="stylesheet">

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

<link href="images/favicon.ico" rel="shortcut icon">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<style>

@media only screen and (max-width: 799px)  {
.container .eleven.columns{min-height:500px}
}
@media only screen and (min-width: 800px) and (max-width: 1023px)  {
.container .eleven.columns{min-height:1200px}
}

#talks-form p strong{color:#FFF!important}
#tfa_0-T, .supportInfo, div.lengthIndicator{
	display:none!important;
}
form#tfa_0, form#tfa_0 .section, form#tfa_0 label{background-color:transparent!important;}
form#tfa_0 label, form#tfa_0 .section, form#tfa_0 input, form#tfa_0 div{
	margin:0px!important;
	padding:0px!important;
}
form#tfa_0 div{
	width:100%;
}
form#tfa_0 input{
	width:80%!important;
	height:15px;
}
form#tfa_0 select{
	width:80%!important;
	height:25px;
}
form#tfa_0 textarea{
	width:80%!important;
	height:75px;
}
form#tfa_0{
	margin-left:10%;
}
form#tfa_0 label{
	font-weight: bold;
	padding-top:10px!important;
}
form#tfa_0 input.primaryAction{
	font-weight:bold;
	margin-top:20px!important;
	text-align:center!important;
	display:block;
	height:30px;
}
div.actions{
	display:inline-block;
	text-align:center!important;
}

</style>

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
<h3>Health Information Technology Lunch & Learn</h3>

<p>
 <strong>Date:</strong> Wednesday, March 8, 2017 <br>
 <strong>Time:</strong> 12:00 p.m. - 1:00 p.m. <br>
 <strong>Location:</strong> <a href="http://about.umbc.edu/visitors-guide/directions/" target="_blank">UMBC's Information Technology/Engineering (ITE) Building, Room 239</a>
</p>

 <p>Are you a junior or senior and considering a graduate program upon bachelor completion? UMBC undergraduate students have the option of applying to the Accelerated Bachelor’s/Master’s Program  in their junior or senior year and earn up to nine graduate credits towards the degree. </p>
 

 <strong>Accelerated Bachelor’s/Master’s Program Benefits:</strong>
 
 <ul>
 	<li>Shorten the time to degree completion</li>
 	<li>Cost savings- enroll in graduate courses at undergraduate tuition rate</li>
 	<li>Flexible learning options- courses taught in evening or in hybrid format</li>
 	<li>Gain practical knowledge and skills </li>
 </ul>


<p>Please join us to learn more about Health IT graduate program on Wed. March 8th from 12 – 1, ITE Room 239</p>

<em>
Pizza & refreshments will be served. Please RSVP so that we can provide enough pizzas!
</em>


<div id="google-form">
<?php include("includes/rsvp-form.php"); ?> 
</div>


<div id="contents" style="display:none"></div>
<!-- END Content -->


</div>
  
<!-- SIDEBAR -->
<?php include("includes/sidebar.php"); ?>
<!-- END SIDEBAR -->

<!-- footer -->
  <br clear="all">  
  <?php include("includes/footer.php"); ?>
  <?php include("includes/tracking.php"); ?>
  <br>
<!--END footer -->
</div>
<!-- container --> 


<script>
	var programname = "hit";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>$( "#form" ).load( "../dps/includes/contact-form.php" );</script>
<script>$( "#sidebar-contact" ).load( "../dps/includes/contact-form.php .sidebar-form" );</script>
<script>$( "#contents" ).load( "../dps/includes/program-info.php" );</script>

<script src="http://umbc.edu/dps/js/scripts.js"></script> 
<script src="http://umbc.edu/dps/js/jquery.cbpFWSlider.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>
<script>$.getScript("http://umbc.edu/dps/js/email.js")</script>
<!--Remove Comment for Programs without Program Guides--
<script>$('#programguide').val(''); $('#planningform').val('');</script>
-->
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>


<script>
var vars = [], hash;
    var q = document.URL.split('?')[1];
    if(q != undefined){
        q = q.split('&');
        for(var i = 0; i < q.length; i++){
            hash = q[i].split('=');
            vars.push(hash[1]);
            vars[hash[0]] = hash[1];
        }
}
var currentLocation = window.location.href.split('?')[0];
/* $("#tfa_20").attr("value", vars['email']);
$("#tfa_11").attr("value", vars['first']);
$("#tfa_12").attr("value", vars['last']); */
$("#tfa_432").attr("value", vars['utm_campaign']);
$("#tfa_428").attr("value", vars['utm_source']);
$("#tfa_430").attr("value", vars['utm_medium']);
$("#tfa_434").attr("value", vars['utm_content']);
$("#tfa_436").attr("value", vars['utm_term']);
$("#tfa_445").attr("value", currentLocation);

</script>


<script>
$('#tfa_0').submit(function() {
  ga('send', 'event', 'lead', 'submit', 'lunch_learn');
});
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_437").attr("value", clientId)
});
</script>



<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>



</body>
</html>