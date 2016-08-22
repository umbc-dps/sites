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

<title>Directions | Cybersecurity | UMBC at Shady Grove</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="The Master’s in Professional Studies in Cybersecurity prepares experienced professionals to fill management and leadership roles." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Directions | Cybersecurity | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/cyber/directions" />
<meta property="og:image" content="http://www.umbc.edu/cyber/images/bk.jpg" />
<meta property="og:description" content="The Master’s in Professional Studies in Cybersecurity prepares experienced professionals to fill management and leadership roles." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='../css/magnific-popup.css' rel='stylesheet'>
<link href="../css/styles.css" rel="stylesheet">
<link href="../css/accordion.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="../js/modernizr.custom.js"></script>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png"></head>
<body>
  <div id="skip-content">
    <a href="#main-content">Skip to Main Content</a>
  </div>

<!-- main container -->
<div id="container-header-background">

<!-- umbc header -->
<div id="container-header"> <?php include("../includes/umbc-header.php"); ?>
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

 
<?php include("../includes/header.php"); ?>

 
<!-- END Page Header -->

  <div class="eleven columns">
  
<!-- START Content -->
<h3>Directions to The Universities at Shady Grove</h3>
<p>The  Professional Master’s in Cybersecurity Program is  offered at UMBC at The Universities at  Shady Grove, located in Rockville, MD. </p>
<p> 
Universities at Shady Grove<BR>
9630 Gudelsky Drive<BR>
Rockville, MD 20850
</p>

       <div class="google-maps">     
<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d3096.5902098338684!2d-77.200227!3d39.093030999999996!3m2!1i1024!2i768!4f13.1!2m1!1sumbc+shady+grove!5e0!3m2!1sen!2sus!4v1424875882356" width="600" height="450" frameborder="0" style="border:0"></iframe>
      </div>
 <br>
 <br>

 
<div id="contents" style="display:none"></div>
<!-- END Content -->
 </div>
  
<!-- SIDEBAR -->
 <?php include("includes/sidebar.php"); ?>

<!-- END SIDEBAR -->

<!-- footer -->
  <br clear="all">
    <?php include("../includes/footer.php"); ?>
  <br>
<!--END footer -->
</div>
<!-- container --> 


<script>
	var programname = "cyber-sg";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>$( "#form" ).load( "../../dps/includes/contact-form.php" );</script>
<script>$( "#sidebar-contact" ).load( "../../dps/includes/contact-form.php .sidebar-form" );</script>
<script>$( "#contents" ).load( "../../dps/includes/program-info.php" );</script>

<script src="../js/scripts.js"></script> 
<script src="../js/jquery.cbpFWSlider.js"></script>
<script src="../js/jquery.magnific-popup.js"></script>
<script src="../js/popup.js"></script>
<script>$.getScript("http://umbc.edu/dps/js/email.js")</script>
<!--Remove Comment for Programs without Program Guides--
<script>$('#programguide').val(''); $('#planningform').val('');</script>
-->
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>



<?php include("includes/tracking.php"); ?>

<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

</body>
</html>