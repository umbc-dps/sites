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

<title>Info Session | Engineering Management at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Learn more about UMBC Graduate Programs in Engineering Management. Representatives from Financial Aid, Veteran Affairs, Graduate School, and others will be on hand to answer your questions. " />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Info Session | Engineering Management at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/engm/infosession" />
<meta property="og:image" content="http://www.umbc.edu/engm/images/bk.jpg" />
<meta property="og:description" content="Learn more about UMBC Graduate Programs in Engineering Management. Representatives from Financial Aid, Veteran Affairs, Graduate School, and others will be on hand to answer your questions." />

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
#google-form textarea { width:95%; margin:0px}
#google-form h1{display:none}
#ss-submit, #ss-reset { width: 25% }
.ss-form-entry input, .ss-form-entry select { width: 95%; height: 20px; font-size: 10pt; margin-bottom: 15px;}
.ss-q-title{ font-weight: 600; 
font-size:10pt;
	}
.ss-required-asterisk{text-align:right; font-style:italic; padding-right: 15px}
.container .eleven.columns{min-height:1100px}

@media only screen and (max-width: 799px)  {
.container .eleven.columns{min-height:500px}
}
@media only screen and (min-width: 800px) and (max-width: 1023px)  {
.container .eleven.columns{min-height:1250px}
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

<!-- BEGIN MAIN --><!-- Page Header -->

 <?php include("includes/header.php"); ?>
 
<!-- END Page Header --><div class="eleven columns">
  
<!-- START Content --> 
<h3>Engineering Management Info Session </h3>

<p>
 <strong>Date:</strong> Thursday, October 29, 2015 <br>
 <strong>Time:</strong> 6:30 p.m. - 7:30 p.m. <br>
 <strong>Location:</strong> <a href="http://about.umbc.edu/visitors-guide/directions/" target="_blank">UMBC, Sherman Hall East, Classroom 464</a></p>

<h4>Why Engineering Management at UMBC?</h4>
 <p>Join us to meet the Engineering Management Program Director and learn more about UMBC Graduate Programs in Engineering Management. The session will provide an overview of our innovative curriculum and practice-oriented instruction, designed for working professionals.</p>


 <div id="google-form">
 <?php include("includes/rsvp-form.php"); ?> 
</div>
</p>

<div id="contents" style="display:none"></div>
<!-- END CONTENT -->


</div>
  
<!-- SIDEBAR -->
 <?php include("includes/sidebar.php"); ?>
<!-- END SIDEBAR -->

<!-- footer -->
  <br clear="all">  <?php include("includes/footer.php"); ?>
  <?php include("includes/tracking.php"); ?>

  <br>
<!--END footer -->
</div>
<!-- container --> 


<script>
	var programname = "engm";
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
$(document).ready(function () {
	ytTracker.init();
});
</script>



</body>
</html>