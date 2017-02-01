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

<title>Student Resources | Systems Engineering at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC's program is designed to accelerate the development of systems engineers by providing practical, real-world experience that can be immediately applied on the job." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Student Resources | Systems Engineering at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/se/studentresources" />
<meta property="og:image" content="http://www.umbc.edu/se/images/bk.jpg" />
<meta property="og:description" content="UMBC's program is designed to accelerate the development of systems engineers by providing practical, real-world experience that can be immediately applied on the job." />

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

 <?php include("includes/header.php"); ?>
 
<!-- END Page Header -->

  <div class="eleven columns">
  
<!-- START Content -->
 <h3>Student Resources</h3>
 <p>Welcome to UMBC. We are happy to have you as part of our community.  Below you will find links to some important information that will familiarize  you with UMBC.</p>
 
 <ul>
   <li>Create your <a href="https://webadmin.umbc.edu/admin//User/Create" target="_blank">myUMBC</a> account as soon as  possible. You will use your myUMBC account to register for classes, to access  your student account, to pay for parking and much more.</li>
   <li>Register for classes: Go to  myUMBC, Topics, Classes &amp; Grades and Student Schedule &amp; Registration.  Follow the instructions to enroll in your selected course(s). </li>
   <li>Seek academic advising:  Contact your Graduate Program Director for  advising.
     <ul>
       <li><a href="documents/planningform.pdf"  target="_blank">M.S. Academic Planning Form</a></li>
       <li><a href="documents/planningform-cert.pdf" target="_blank">Post-Baccalaureate Certificate Planning Form</a></li>
     </ul>
   </li>
   <li><a href="http://campuscard.umbc.edu/" target="_blank">Apply  for the UMBC Card</a>: This  photo ID card provides access to a number of campus services and facilities. Go  to Communication Services located in University Center, Room 112 to apply for  your card.</li>
   <li><a href="http://my.umbc.edu/topics/parking-and-transportation" target="_blank">Apply for Parking Permit</a>: All students  attending classes on campus are required to secure a parking permit. </li>
   <li>Submit required health forms to <a href="http://www.umbc.edu/uhs/" target="_blank">University Health  Services</a>. Find out which forms are  required for you to enroll in classes.</li>
 </ul>
 
 <h4>Other Useful  Resources for Students: </h4>
 <ul>
 <li><a href="http://gradschool.umbc.edu/">Graduate School </a></li>
 <li><a href="http://registrar.umbc.edu/">Registrar's Office </a>(graduate catalog, academic calendar, registration, transcript requests)</li>
 <li><a href="http://sbs.umbc.edu/">Student Business Services</a> (billing information, payment, loans, and e-refunds)</li>
 <li><a href="http://careers.umbc.edu/">Career Services</a></li>
 <li><a href="http://ies.umbc.edu/">International Education Services</a> (job searching, researching and networking, resume writing and interviewing)</li>
 <li><a href="http://shrivercenter.umbc.edu/">The Shriver Center</a> (internships)</li>
 
   <li><a href="http://www.umbc.edu/veterans/" target="_blank">Veterans/Military Benefits Information</a></li>
   <li><a href="http://aok.lib.umbc.edu/services/gradStudents/" target="_blank">Library Services for Graduate Students</a></li>
   <li><a href="http://www.dineoncampus.com/umbc/" target="_blank">Dining Options</a></li>
   <li><a href="http://about.umbc.edu/visitors-guide/campus-map/" target="_blank">Campus Maps</a></li>
   <li><a href="http://www.umbc.edu/financialaid/" target="_blank">Financial Aid</a></li>
   <li><a href="http://bookstore.umbc.edu/home.aspx">Bookstore</a></li>
   <li><a href="http://about.umbc.edu/visitors-guide/directions/" target="_blank">UMBC/ Public Transportation</a></li>
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