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

<title>Directions | Instructional Systems Development at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="These programs may be completed completely online and is geared for those who design, deliver, support, and measure training, learning, and performance within organizations." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@isdnow">

<!-- Open Graph data -->
<meta property="og:title" content="Directions | Instructional Systems Development at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/isd/directions3" />
<meta property="og:image" content="http://umbc.edu/isd/images/current/2.jpg" />
<meta property="og:description" content="These programs may be completed completely online and is geared for those who design, deliver, support, and measure training, learning, and performance within organizations." />

<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

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
  <div class="container column">
    <div class="sixteen columns">      
<a href="index" style="text-decoration:none" id="breadcrumb">
            <h1 class="home-header" id="dps" style="border:0;"><img alt="Instructional Systems Development" class="scale-with-grid" src="images/logo.png"><div align="center" style="border-top:2px #E9AB13 solid"></div></h1></a>
    </div>
<!-- END Page Header -->

  <div class="eleven columns">
  
<!-- START Content --> 
 <h3>Directions</h3>

 <ul>
   <li><a href="directions">Directions to UMBC BW Tech South</a></li>
   <li><a href="directions2">Training Centers</a></li>
   <li><a href="directions4">Universities at Shady Grove</a></li>
 </ul>
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
	var programname = "isd";
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