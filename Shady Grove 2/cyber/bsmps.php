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
<title>Admissions: Accelerated BS/MPS Program Option | Cybersecurity | UMBC at Shady Grove</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Apply for admission to an accelerated course of study leading to the Bachelor of Science in Computer Science and Master of Professional Studies in Cybersecurity degrees." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Admissions: Accelerated BS/MPS Program Option | Cybersecurity | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/cyber/bsmps" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/bk.jpg" />
<meta property="og:description" content="Apply for admission to an accelerated course of study leading to the Bachelor of Science in Computer Science and Master of Professional Studies in Cybersecurity degrees." />

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

 <?php include("includes/header.php"); ?>
 
<!-- END Page Header -->

  <div class="eleven columns">
  
<!-- START Content --> 
 <h3>Accelerated BS/MPS Program Option</h3>
 <p><em>Note: For Academic Year 2015/16 this program is only offered to CMSC students.</em></p>
 <p>UMBC undergraduate students have the option of applying to the BS/MPS program in their junior or senior year and may take up to nine graduate credits that can be applied to both their undergraduate and graduate degrees. Students benefit by shortening the time to degree completion, experience the cost savings of taking graduate courses at undergraduate tuition rates, experience flexible learning options (some courses taught in evening or in hybrid format) and gain practical knowledge and skills.</p>
 
<h4>Admissions Requirements</h4>
 <UL>
   <li>Minimum undergraduate GPA of 3.0.  (An average of 3.5 or higher in computer science courses)</li>
   <li>Students typically apply to the Accelerated BS/MPS after completing CMSC 313, 331 and 341. <br>
     <strong>Students are required to complete the following courses before applying:</strong></li>
   <ul>
     <li>Math 151,152, 221</li>
     <li>CMSC 201, 202, 203</li>
     <li>CMSC 313, 331, 341</li>
   </ul>
   <li>Maintain good academic standing throughout the duration of undergraduate degree.</li> 
 </UL>
 

 <h4>Application Process</h4> 
 <ul>
   <li>Complete Cybersecurity Program Application to <a href="documents/bsmps.pdf">Accelerated BS/MPS Form</a></li>
   <li>Complete the Graduate School <a href="http://gradschool.umbc.edu/files/2015/10/accelerated_BA_MA_application_form.pdf" target="_blank">Accelerated Bachelor's/Master's Application Form</a></li>
   <li>Submit copy of undergraduate transcripts to Graduate School</li>
   <li>Submit required documentation to your CSEE Undergraduate Advisor for preliminary review and approval. If approved your application will be reviewed by the Cybersecurity Graduate Program Director and a final admission decision will be made.</li>
   <li>One semester prior to completion of your bachelor's degree, submit an <a href="https://www.applyweb.com/umbcg" target="_blank">application</a> for the Master's in Professional Studies: Cybersecurity program to the Graduate School. The graduate school application fee is waived ($50 online/$70 paper).</li>
   <li>Once admitted to the MPS in Cybersecurity, complete transfer of credits <a href="http://gradschool.umbc.edu/files/2015/10/request_transfer_credit_REV_MAR_12_2013.pdf" target="_blank">form</a> to Graduate School for nine credits. </li>
 </ul>

 

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
</body>
</html>