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

<title>Locations | Health Information Technology at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC's in-person Health Information Technology program is designed to prepare professionals  to fill a range of opportunities within the health care profession. " />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Locations | Health Information Technology at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/hit/locations" />
<meta property="og:image" content="http://www.umbc.edu/hit/images/bk.jpg" />
<meta property="og:description" content="UMBC's in-person Health Information Technology program is designed to prepare professionals  to fill a range of opportunities within the health care profession." />



<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

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

      <h3>Directions</h3>


 <ul>
   <li><a href="http://about.umbc.edu/visitors-guide/directions/" target="_blank">UMBC Campus</a> (Catonsville, MD)</li>
   <li><a href="directions.php">UMBC BW Tech South</a></li>
   <li><a href="directions2.php">Training Centers </a>(Columbia, MD)</li>
   <li><a href="directions3.php">Universities at Shady Grove</a></li>
 </ul>
 
      
<div id="contents" style="display:none"></div>
<!-- END Content -->

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
$(document).ready(function () {
	ytTracker.init();
});
</script>



</body>
</html>