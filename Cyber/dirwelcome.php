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

<title>Director's Welcome | Cybersecurity at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="The Master’s in Professional Studies in Cybersecurity prepares experienced professionals to fill management and leadership roles." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Director's Welcome | Cybersecurity at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/cyber/dirwelcome" />
<meta property="og:image" content="http://www.umbc.edu/cyber/images/bk.jpg" />
<meta property="og:description" content="The Master’s in Professional Studies in Cybersecurity prepares experienced professionals to fill management and leadership roles." />

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

 <div class="eleven columns sc-content">
 
<!-- START Content -->
 <h3>Director's Welcome </h3>
 <h4>Welcome to UMBC&rsquo;s Graduate Cybersecurity Program!</h4>
 <p>As the world continues growing more interconnected and dependent on the Internet and other networked technologies, our ability to maintain the security, stability, assurance, and resiliency of this critical information environment - including the safety and security of our own data - is challenged regularly. Accomplishing this goal, and fulfilling a critical need for our nation, requires professionals that are knowledgeable about these concerns and can apply that knowledge effectively and proactively to reach that objective in ways that extend far beyond the "bits and bytes" of cyberspace.</p>
 <p>
In meeting this challenge, UMBC's Graduate Cybersecurity Program reflects the nature of the modern cybersecurity environment by taking an interdisciplinary approach to cybersecurity education. For master's degree students, the curriculum includes courses both on cybersecurity topics and ways to put that knowledge into practice as leaders or practitioners in the cyber domain. From there, master's degree students can select a variety of technical or non-technical electives to meet their particular educational or professional needs.  By contrast, our post-baccalaureate certificate program is a four-course sequence that provides a broad academic exposure to assorted cyber-related topics for students not necessarily seeking a full graduate degree in the field.
</p>
<p>
However, education at UMBC begins, not ends, in the classroom. While successfully completing your studies is the primary goal as a student, you may also consider contributing to cybersecurity research efforts at our Cyber Defense Lab, joining our intercollegiate cyber-defense competition team, taking advantage of professional opportunities and resources provided by our Career Services Center, or participating in other activities and opportunities that can help you reach your desired academic and professional goals.</p>
<p>
I encourage you to explore our academic program offerings and contact us with any questions. 'Cyber' is a prominent and expanding industry both in Maryland and across the globe -- and we look forward to helping advance your career in this exciting field!</p>

<p>
Cordially,<br>
Dr. Richard F. Forno<br>
Director, UMBC Graduate Cybersecurity Program<br>
Assistant Director, UMBC Center for Cybersecurity</p>    
<div id="contents" style="display:none"> </div>

</div>
<!-- END Content -->
    
 
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
	var programname = "cyber";
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