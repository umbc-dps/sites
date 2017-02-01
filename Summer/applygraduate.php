<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Application Process for Graduate Students | Summer Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Use your smart phone, mobile device, or computer to register through myUMBC." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Application Process for Graduate Students | Summer Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/applygraduate" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Use your smart phone, mobile device, or computer to register through myUMBC." />


<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/magnetic-popup.css" rel="stylesheet">
<link href="css/accordion.css" rel="stylesheet">

<!-- Javascript -->
<script src="js/modernizr.custom.js"></script>

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>

<div id="skip-content">
 <a href="#main-content">Skip to Main Content</a>
</div>

<div id="container-header-background">
 <!-- UMBC header -->
   <?php include("includes/umbc-header.php"); ?>
 <!-- END umbc header -->
 <div id="site-menu-background">
  <!-- gold toolbar -->
   <?php include("includes/gold-nav.php"); ?>
  <!-- END gold toolbar --> 
 </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">  <div  id="winter-heading">
    <a href="index">
    <h1 class="remove-bottom" id="summer-heading">
    <img src="images/summer-heading.png" style="width:100%">
    </h1>
    </a>
  </div>


 <div class="sixteen columns">
  <div class="eleven columns alpha" style="padding-top:1em;">
  <!-- Page Title -->
        <h2>Application Process for Graduate Students</h2>
    <!-- END Page Title -->       
	<div class="content">
		<div class="narrowchart">
			<div id="accordion">  
      
     <!-- Start Content --> 

<p>Admission decisions are sent to the e-mail address provided on your application.</p>

  <div class="accordionheader">
    <h4>Apply Online<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">
<p><a href="http://gradschool.umbc.edu/admissions/apply/" target="_blank">Apply</a> online through UMBC's Graduate School as a Non-Degree Applicant. Online applications are managed by our trusted partner, <a href="http://www.collegenet.com/elect/app/app" target="_blank">CollegeNET</a> and are safe and secure.  First time applicants must <a href="https://applyweb.collegenet.com/account/new/create?origin=https%3A%2F%2Fwww.applyweb.com%2Fcgi-bin%2Fapplymenu%3Finstcode%3Dumbcg" target="_blank">create</a> their CollegeNET account before applying.  A non-refundable application <a href="http://sbs.umbc.edu/tuition-info/mandatory-fees/" target="_blank">fee</a> of $50 is required to apply online.</p>

</div>


  <div class="accordionheader">
    <h4>Submit a Paper Application<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">

  <p>Prospective graduate students may also <a href="http://gradschool.umbc.edu/students/forms/" target="_blank">download</a> a paper application, request an application by mail, or request an application by phone at 410-455-2537.   A non-refundable application <a href="http://sbs.umbc.edu/tuition-info/mandatory-fees/" target="_blank">fee</a> of $70 is required for paper submissions. Checks must be made payable to UMBC and accompany the application form. </p>
  <p>Mail application/payment to: <br>
    <br>
    UMBC<br>
    Office of Graduate Admissions<br>
    1000 Hilltop Circle<br>
    Baltimore, MD 21250  </p>
</div>

     <!-- END Content -->
     
	</div></div></div>
        
    <!-- /eleven columns -->
	</div>
    <!-- SIDEBAR --> 
    <div class="five columns omega" style="float:right;padding-top:1em;"> 
      <?php include("includes/student-types-interior.php"); ?>
    </div>
    <!-- /five columns omega --> 
    <!-- END TOP SIDEBAR-->
  </div>

  <footer id="site-footer" class="clearfix">
	<?php include("includes/footer.php"); ?>
    <?php include("includes/social.php"); ?>
    <?php include("includes/tracking.php"); ?>
  </footer>
</div>
<!-- container --> 

<script src="//code.jquery.com/jquery-1.12.0.js"></script> 
<script src="//code.jquery.com/jquery-migrate-1.3.0.js"></script>
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
  
</body>
</html>