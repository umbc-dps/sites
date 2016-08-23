<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Forms | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Forms and important contacts." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrovec">

<!-- Open Graph data -->
<meta property="og:title" content="Forms | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/forms" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="Forms and important contacts." />



<link href="css/styles-ug.css" rel="stylesheet">
<link href="css/accordion-ug.css" rel="stylesheet">
<link href='css/magnific-popup.css' rel='stylesheet'>

<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="js/modernizr.custom.js"></script>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


<style type="text/css">
@media screen and (min-width:800px) {
html{
	position: relative;
	height:100%;
}
html::after {
  content: "";
  background: url(images/bg/<?php echo $selectedBg; ?>) no-repeat;
  background-size:cover;
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: fixed;
  z-index: -1;  
  background-attachment:fixed;
}
}




	


</style>



</head>
<body>
<div id="full-page">
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php //include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading">
<a href="index">
<h1 class="remove-bottom">Student Resources</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
    <!-- Start Content -->   
      <div class="content">
      <h3>Forms</h3>
<p>Please see below for frequently accessed forms and links for  UMBC students:</p>
<ul>
  <li><a href="http://registrar.umbc.edu/forms/transfer-request-forms/" target="_blank">Verification of Transferability</a></li>
  
  <li><a href="http://registrar.umbc.edu/forms/transfer-request-forms/" target="_blank">Evaluation of  Transfer Credits</a></li>
  
  <li><a href="http://registrar.umbc.edu/forms/records-updaterequest-forms/" target="_blank">Declaration/Change  of Major</a></li>
  
  <li><a href="http://registrar.umbc.edu/forms/records-updaterequest-forms/" target="_blank">Enrollment  Verification</a></li>
  
  <li><a href="http://registrar.umbc.edu/forms/records-updaterequest-forms/" target="_blank">Personal  Information Update</a></li>
  
  <li><a href="http://registrar.umbc.edu/forms/course-work-forms/" target="_blank">Enroll  for Excess Credits</a></li>
  
  <li><a href="http://registrar.umbc.edu/forms/enrollment-forms/" target="_blank">Inter-Institutional  Enrollment</a></li>
  
  <li><a href="http://registrar.umbc.edu/forms/exceptionappeals-request-forms/" target="_blank">Request  for Exception to Enrollment Policy</a></li>
  
  <li><a href="http://registrar.umbc.edu/forms/exceptionappeals-request-forms/" target="_blank">Time  Conflict Exceptions</a></li>
  
  <li><a href="http://registrar.umbc.edu/forms/exceptionappeals-request-forms/" target="_blank">Residency Petition</a></li>
  
  <li><a href="http://financialaid.umbc.edu/paperforms/" target="_blank">Authorization to Disclose Information (FERPA  Release) </a></li>
  
  <li><a href="http://www.umbc.edu/uhs/forms/MandatoryImmForm.pdf" target="_blank">Mandatory UMBC Health Form</a></li>
  
  <li><a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=31195501" target="_blank">Foreign  Language Waiver</a></li>
  
  <li><a href="https://rt.umbc.edu/SelfService/RequestHelp.html" target="_blank">OIT Help Ticket</a></li>
</ul>

<h3>Important UMBC Contacts:</h3>

<h6><a href="http://www.umbc.edu/undergraduate/" target="_blank">Office of Undergraduate Admissions and  Orientation</a></h6>

<ul>
	<li>410-455-2292</li>
	<li><a href="mailto:admissions@umbc.edu">admissions@umbc.edu</a></li>
</ul>

<h6><a href="http://gradschool.umbc.edu/" target="_blank">Graduate School</a></h6>
<ul>
	<li>410-455-2537</li>
	<li><a href="mailto:gradschool@umbc.edu">gradschool@umbc.edu</a></li>
</ul>

<h6><a href="http://www.umbc.edu/sbs/" target="_blank">Student  Business Services</a> (Billing)</h6>
<ul>
    <li>410-455-2288</li>
	<li><a href="mailto:sbs@umbc.edu">sbs@umbc.edu</a></li>
</ul>

<h6><a href="http://www.umbc.edu/financialaid/" target="_blank">Office of Financial Aid &amp;  Scholarships</a></h6>
<ul>
	<li>410-455-2387</li>
</ul>

<h6><a href="http://www.umbc.edu/sss/" target="_blank">Student  Support Services</a></h6>
	<ul><li>410-455-2459</li></ul>
    
<h6><a href="http://www.umbc.edu/registrar/" target="_blank">Office of the  Registrar</a></h6>
	<ul><li>410-455-2500</li></ul>

<h6><a href="http://www.umbc.edu/advising/index.html" target="_blank">Office for Academic and Pre-Professional Advising</a></h6>		
	<ul><li>410-455-2729</li></ul>

<h6><a href="http://commencement.umbc.edu/" target="_blank">Commencement</a></h6>
	<ul><li>410-455-1000</li></ul>

<h6><a href="http://doit.umbc.edu/" target="_blank">DoIT  Technology Support Center</a></h6>
	<ul><li>410-455-3838</li></ul>  

      </div>
    </div> 
	<!-- END Content -->


    <!-- /eleven columns -->
    <div class="four columns omega"> 
    <!-- SIDEBAR --> 
      <?php include("includes/ss-sidebar.php"); ?>
    <!-- /five columns  --> 


    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("includes/footer-ug.php"); ?> 
  </footer>

	</div>  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/scripts.js"></script> 
<script src="js/jquery.magnific-popup.js"></script> 
<script src="js/popup.js"></script> 

<script>
$( "#accordion" ).accordion({
      heightStyle: "content",
      active: false,
      collapsible: true,
      header:"div.accordionheader"
    });
    var hash = window.location.hash;
    var anchor = $('a[href$="'+hash+'"]');
    if (anchor.length > 0){
        anchor.click();
    }
$('h4').click(function() {
	var linkText = $(this).text();
	ga('send', 'event',  'accordion', 'click', linkText);
});
</script> 
 

<?php include("includes/tracking.php"); ?>

<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

</body>
</html>