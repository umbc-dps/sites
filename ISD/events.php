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

<title>Our Events | Instructional Systems Development at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC’s Instructional Systems Development Graduate Programs provide opportunities to connect with students, alumni, ISD professionals, and program staff through its ISD Now Forums and Webinars." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@isdnow">

<!-- Open Graph data -->
<meta property="og:title" content="Our Events | Instructional Systems Development at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/isd/events" />
<meta property="og:image" content="http://umbc.edu/isd/images/current/2.jpg" />
<meta property="og:description" content="UMBC’s Instructional Systems Development Graduate Programs provide opportunities to connect with students, alumni, ISD professionals, and program staff through its ISD Now Forums and Webinars." />
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">
 
<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

<link href="images/favicon.ico" rel="shortcut icon">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">

  <style>
  .alumni div { display: block; width:50%;  padding-left: 25%; padding-bottom:20px; text-align:center}
.alumni h4{padding-bottom:0px!important; margin-bottom:-20px !important;}

	@media 
	only screen and (max-width: 1023px),
	(min-device-width: 800px) and (max-device-width: 1023px)  {
		.alumni div{width: 100%; padding-left: 0px}
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


  <div class="container column">
    <div class="sixteen columns">
      <a href="index" style="text-decoration:none" id="breadcrumb">
            <h1 class="home-header" id="dps" style="border:0;"><img alt="Instructional Systems Development" class="scale-with-grid" src="images/logo.png"><div align="center" style="border-top:2px #E9AB13 solid"></div></h1></a>
    </div>
    <!-- END Page Header -->


    <div class="eleven columns">
      <!-- START Content -->

      <h3>Our Events</h3>


      <p>UMBC’s Instructional Systems Development Graduate Programs provide opportunities to connect with students, alumni, ISD professionals, and program staff through its ISD Now Forums and Webinars.</p>
<br>

      <div class="alumni">
        <div>
          <h4><a href="forum" style="text-decoration:none;color:#000">ISD Now Forum</a>
          </h4>
          <br>
          <a href="forum"><img src="images/isdForum-2014.jpg" width="165"></a><br>
          <br>

          The ISD Now Forum is an event, free to the community, that provides an opportunity for individuals working or interested in training, education, business, government and the non-profit sector to share ideas and dialogue on topics of importance.</div>

<hr>

        <div>
          <h4><a href="webinars" style="text-decoration:none;color:#000">ISD Now Webinars</a>
          </h4>
          <br>
          <a href="webinars"><img src="images/ISD-Now-Webinar1.jpg" width="165"></a><br>
        UMBC’s ISD Now Webinar Series is an online forum to share ideas and information on topics related to workplace learning, organizational productivity, performance and business. </div>

<hr>

        <div>
          <h4><a href="studentawards" style="text-decoration:none;color:#000">Student Awards</a>
          </h4>
          <br>
          <a href="studentawards"><img src="images/melissa-huber.jpg" width="165"></a><br>
          <strong>          Dr. J. Marvin Cook Award:</strong><br>
This annual award is presented to an outstanding student who has demonstrated academic excellence, service and entrepreneurship.</div>
      </div><br>

      <div id="contents" style="display:none"></div>

<!-- END Content -->


    </div>
    <!-- SIDEBAR -->
    <?php include("includes/sidebar.php"); ?><!-- END SIDEBAR -->
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