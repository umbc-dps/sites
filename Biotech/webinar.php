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

<title>Getting a Job in Biotechnology | Biotechnology at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Join us for a webinar as Dr. Stephen Miller, Program Director of UMBC Biotechnology Graduate Programs, discusses the key elements of landing one of these Biotechnology jobs. " />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Getting a Job in Biotechnology | Biotechnology at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/biotech/webinar" />
<meta property="og:image" content="http://www.umbc.edu/biotech/images/bk.jpg" />
<meta property="og:description" content="Join us for a webinar as Dr. Stephen Miller, Program Director of UMBC Biotechnology Graduate Programs, discusses the key elements of landing one of these Biotechnology jobs. " />
<link href='https://docs.google.com/static/forms/client/css/4075461621-formview_st_ltr.css' type='text/css' rel='stylesheet'>


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

  
<link rel="shortcut icon" href="images/favicon.ico">

<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<style>
#registrationForm textarea { width:95%; margin:0px}
#registrationForm label { font-weight: bold }
#registrationForm input, #registrationForm select { width: 95%; height: 25px; font-size: 11pt; margin-bottom: 15px;}
.sectionFooter input {height: 40px!important; width: 100px!important; text-shadow:none; }
.form-group, .formField {border:0}
.ss-q-title{ 
font-weight: 600; 
font-size:10pt;
	}
.requiredMessage{text-align:right; font-style:italic; padding-right: 15px}
.container .eleven.columns{min-height:1150px}

@media only screen and (max-width: 799px)  {
.container .eleven.columns{min-height:500px}
}
@media only screen and (min-width: 800px) and (max-width: 1023px)  {
.container .eleven.columns{min-height:1150px}
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
<h3>Getting a Job in Biotechnology</h3>

<h5>Wednesday, Oct 21, 2015 12:00 p.m. - 1:00 p.m.</h5>



 <div id="google-form">
 <?php include("includes/webinar-form.php"); ?> 
</div>
</p>
 <!-- END Content -->

  <div id="contents" style="display:none"></div>

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
	var programname = "bio";
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