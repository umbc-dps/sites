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

<title>RSVP | Systems Engineering at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC's program is designed to accelerate the development of systems engineers by providing practical, real-world experience that can be immediately applied on the job." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Advisory Board | Systems Engineering at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/se/advisoryboard" />
<meta property="og:image" content="http://www.umbc.edu/se/images/bk.jpg" />
<meta property="og:description" content="UMBC's program is designed to accelerate the development of systems engineers by providing practical, real-world experience that can be immediately applied on the job." />

<link rel="stylesheet" type="text/css" href="https://docs.google.com/static/forms/client/css/2588955203-mobile_formview_st_ltr.css">
<link href='https://docs.google.com/static/forms/client/css/4075461621-formview_st_ltr.css' type='text/css' rel='stylesheet'>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">

<script src="js/modernizr.custom.js"></script>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
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
<h3>Systems Engineering Open House </h3>

<p>
 <strong>Date:</strong> Wednesday, April 29, 2015 <br>
 <strong>Time:</strong> 5:30 p.m. - 8:00 p.m. <br>
 <strong>Location:</strong> UMBC South Campus (bwtech@UMBC South) 1450 S. Rolling Road; Halethorpe, MD 21227
</p>

 <p>
Join our Professional Programs Open House to meet the Systems Engineering Program Director and learn more about UMBC Graduate Programs in Systems Engineering.  Representatives from Financial Aid, Veteran Affairs, Graduate School, and others will be on hand to answer your questions. </p>
<p>
<strong>Use the form below to RSVP:</strong>
</p> 

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
	var programname = "se";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>$( "#form" ).load( "../dps/includes/contact-form.php" );</script>
<script>$( "#sidebar-contact" ).load( "../dps/includes/contact-form.php .sidebar-form" );</script>
<script>$( "#contents" ).load( "../dps/includes/program-info.php" );</script>

<script src="js/scripts.js"></script> 
<script src="js/jquery.cbpFWSlider.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>
<script>$.getScript("http://umbc.edu/dps/js/email.js")</script>
<!--Remove Comment for Programs without Program Guides--
<script>$('#programguide').val(''); $('#planningform').val('');</script>
-->
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>


</body>
</html>