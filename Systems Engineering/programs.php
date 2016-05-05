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

<title>Programs | Systems Engineering at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC offers System Engineering programs where learned knowledge and skills can be immediately applied to your workplace." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Programs | Systems Engineering at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/se/programs" />
<meta property="og:image" content="http://www.umbc.edu/se/images/bk.jpg" />
<meta property="og:description" content="UMBC offers System Engineering programs where learned knowledge and skills can be immediately applied to your workplace." />

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
 <p><em>UMBC offers System Engineering programs where learned knowledge and skills can be immediately applied to your workplace.</em></p>
 <p>Tailored through ongoing industry collaboration to address the practical aspects of systems engineering (SE), UMBC&rsquo;s Systems Engineering Graduate Programs comprise courses designed and taught by senior systems engineers for working engineers. With a broad-based curriculum, training in the Systems Engineering programs involves an emphasis on problem solving and practical applications, introducing and applying SE skills that students can use on the job.</p>

<h4>Master's Programs</h4>
 <UL>
   <li><a href="programmaster.php">Master's of Science in Systems Engineering</a> (30 credits)</li>
   <li><a href="mssecyber.php">Master's of Science in Systems Engineering with Certificate in Cybersecurity</a> (30 credits)</li>
   <li><a href="msee.php">Master's of Science in Electrical Engineering: Systems Engineering Track</a> (30 credits)</li>
   <li><a href="mscs.php">Master's of Science in Computer Science: Systems Engineering Track</a> (33 credits)</li>
   <li><a href="http://www.umbc.edu/engm/programmaster" target="_blank">Master's of Science in Engineering Management: Systems Engineering Track</a> (30 credits)</li>
      <LI>Download the <a href="documents/planningform.pdf" target="_blank">Academic Planning Form</a> as unofficial guidance in planning your MS program. </LI>
 </UL>

<h4>Certificate Program</h4>
<ul>
   <li><a href="certificate.php">Post-Baccalaureate Certificate in Systems Engineering</a> (15 credits)</li>
      <LI>Download the <a href="documents/planningform-cert.pdf" target="_blank">Academic Planning Form</a> as unofficial guidance in planning your certificate program. </LI>
   </ul>
 

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