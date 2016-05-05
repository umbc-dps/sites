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

<title>Master's in Professional Studies | Health Information Technology at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC's in-person Health Information Technology program is designed to prepare professionals  to fill a range of opportunities within the health care profession. " />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Master's in Professional Studies | Health Information Technology at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/hit/programmaster" />
<meta property="og:image" content="http://www.umbc.edu/hit/images/bk.jpg" />
<meta property="og:description" content="UMBC's in-person Health Information Technology program is designed to prepare professionals  to fill a range of opportunities within the health care profession." />



<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">

<script src="js/modernizr.custom.js"></script>

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

 <h3>Master's in Professional Studies: Health Information Technology</h3>
 <p>The ten-course master's degree combines courses in Health Information Technology strategy, policy, and management with more technical, hands-on Health Information Technology courses that allow students to develop a formal educational program that best meets their individual career development needs. </p>
 <h4>Program Requirements:</h4>
 <p> Students must complete 10 courses (30 credits) as follows: 6 required (18 credits), 4 electives (12 credits). </p>
 <ul>
   <li>Download the <a href="documents/planningform.pdf" target="_blank">Academic Planning Form</a> as unofficial guidance in planning your MPS program.</li>
 </ul>

 <h4>Required Core Courses (18 credits):</h4>
 <ul>
   <li><a href="courses.php#HIT658">HIT 658: Health Informatics – I</a></li>
   <li><a href="courses.php#HIT759">HIT 759: Health Informatics – II</a></li>
   <li><a href="courses.php#HIT663">HIT 663: Health IT Policy &amp; Administration</a></li>
   <li><a href="courses.php#HIT664">HIT 664: Health IT Law &amp; Ethics</a></li>
   <li><a href="courses.php#HIT750">HIT 750:  Data Analytics</a></li>
   <li>Capstone Project</li>
 </ul>
 
 <h4>Elective Health Information Technology Courses (12 credits), choose four such as:</h4>
<ul>
  <li>Health IT Implementation</li>
  <li>Health Information Exchange and Interoperability</li>
  <li>Health Information Privacy &amp; Security</li>
  <li>Public Health Informatics</li>
  <li>Patient Safety &amp; HIT</li>
  <li>Human Centered Computing in HIT</li>
  <li>Personalized Medicine</li>
  <li>Health Informatics Text Processing</li>
  <li>Exploration of Clinician Information Needs</li>
  <li><a href="courses.php#674">HIT 674: Process  &amp; Quality Improvement with HIT</a></li>
  <li>Other Graduate courses approved by Health IT Graduate Program Director</li>
</ul>


<div id="contents" style="display:none"></div>
<!-- END Content -->


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
	var programname = "hit";
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