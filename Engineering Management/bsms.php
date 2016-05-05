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

<title>Accelerated BS/MS Degree | Engineering Management at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Students benefit by shortening the time to degree completion, experience the cost savings of taking graduate courses, experience flexible learning options, and gain practical knowledge and skills." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Accelerated BS/MS Degree Option | Engineering Management at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/engm/bsms" />
<meta property="og:image" content="http://www.umbc.edu/engm/images/bk.jpg" />
<meta property="og:description" content="Students benefit by shortening the time to degree completion, experience the cost savings of taking graduate courses, experience flexible learning options, and gain practical knowledge and skills." />

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

<!-- BEGIN MAIN --><!-- Page Header -->

 <?php include("includes/header.php"); ?>
 
<!-- END Page Header --><div class="eleven columns">
  
<!-- START Content --> 
 <h3>Accelerated BS/MS Degree Option</h3>
<p>UMBC undergraduate students have the option of applying to the Engineering Management Master's program in their junior or senior year and earn up to <em>nine credits</em> towards the degree. Students benefit by shortening the time to degree completion, experience the cost savings of taking graduate courses at undergraduate tuition rates, experience flexible learning options (many courses taught in evening or in hybrid format), and gain practical knowledge and skills. </p>
 <h4>Admissions Requirements:</h4>

 <ol>
   <li>Minimum undergraduate GPA of 3.0. If less than 3.0, admission consideration based on Graduate Program Director's discretion.</li>
   <li>Apply and be admitted at least one semester prior to completion of bachelor's degree (preferable to apply at start of junior year).</li>
   <li>Maintain good academic standing throughout the duration of undergraduate degree.</li>                 
   </ol>
   
 <h4>Application Process:</h4>
 <ul>
   <li>Contact <a href="mailto:mooretg@umbc.edu">Dr. Thomas Moore</a>, Graduate Program Director to discuss interest and plan of study.</li>
   <li>Complete the <a href="http://gradschool.umbc.edu/files/2015/10/accelerated_BA_MA_application_form.pdf" target="_blank">Accelerated Bachelor's/Master's Application Form</a>.</li>
   <li>Submit copy of undergraduate transcripts to Graduate School.</li>
   <li>One semester prior to completion of bachelor's degree, submit an <a href="https://www.applyweb.com/umbcg" target="_blank">application</a> for the Master's in Engineering Management program to the Graduate School. The graduate school application fee is waived ($50 online/$70 paper).</li>
   <li>Once admitted, complete transfer of credits <a href="http://gradschool.umbc.edu/files/2015/10/request_transfer_credit_REV_MAR_12_2013.pdf" target="_blank">form</a> to Graduate School for nine credits.</li>
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
	var programname = "engm";
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