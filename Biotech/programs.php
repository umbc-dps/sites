<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en';
?>

<!DOCTYPE html>
<html lang="en">
  <head>

<title>Programs | Biotechnology at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC offers a variety of options for biotechnology professionals and individuals interested in career advancement." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Programs |  Biotechnology at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/biotech/programs" />
<meta property="og:image" content="http://www.umbc.edu/biotech/images/bk.jpg" />
<meta property="og:description" content="UMBC offers a variety of options for biotechnology professionals and individuals interested in career advancement." />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
 <h3>Programs</h3>

 <p>UMBC offers a variety of options for biotechnology professionals and individuals interested in career advancement. All courses are taught by experts in the fields of biotechnology and business with oversight from an industry-led advisory board.</p>

<h4>Master's Programs</h4>
 <UL>
   <li><a href="programmaster.php">Master's  in Professional Studies (M.P.S.): Biotechnology</a>* (30 credits)<br>
<em>* <a href="programmaster2">New core & track options</a> starting Fall 2016</em></li>
 <ul>
 	<li>Regulatory Track</li>
    <li>Bioprocessing Track</li>
 </ul>
   <li><a href="http://biology.umbc.edu/grad/graduate-programs/apmb/" target="_blank">Master's of Science in Applied Molecular Biology</a> (31 credits)</li>
   <li>Download the <a href="documents/planningform.pdf" target="_blank">Academic Planning Form</a> as unofficial guidance in planning your MS program.</li>
 </UL>

 
 <h4>Certificate Programs</h4>
 <UL>
   <li><a href="programcert.php">Post-Baccalaureate Certificate in Professional Studies: Biotechnology Management</a> (12 credits)</li>
   <li><a href="programcert2.php">Post-Baccalaureate Certificate in Biochemical Regulatory Engineering</a> (12 credits)</li>
   <li>Download the <a href="documents/planningform.pdf" target="_blank">Academic Planning Form</a> as unofficial guidance in planning your certificate program.</li>
 </UL>
 
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