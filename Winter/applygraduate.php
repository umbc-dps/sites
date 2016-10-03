<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Application Process for Graduate Students | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Use your smart phone, mobile device, or computer to register through myUMBC." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Application Process for Graduate Students | Winter Session at UMBC" />
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
    <h1 class="remove-bottom">
    <img src="images/winter-heading.png" style="width:100%">
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



<ul>
  <li>Use your smart phone, mobile device, or computer to register through <a href="http://my.umbc.edu/topics/classes-and-grades" target="_blank"><em>my</em>UMBC</a>.</li>

  <li>Courses with <a href="coursesprerequisites">prerequisites</a> may require permission to register.
  </li>
</ul>


  <div class="accordionheader">
    <h4>Apply Online<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">
<ul>
  <li>
    <a href="http://gradschool.umbc.edu/admissions/apply" target="_blank">First time</a> applicants, create an account, submit your
    application information and pay the application fee by credit card over a
    secure Internet connection.<br>
  </li>

  <li>
    <a href="http://gradschool.umbc.edu/admissions/apply" target="_blank">Returning</a> applicants review your activity.
  </li>

  <li>
    <a href="http://gradschool.umbc.edu/admissions/apply/" target="_blank">Apply</a> online through UMBC's Graduate School (choose Non-Degree Application)
  </li>

  <li>A non-refundable <a href=
  "http://sbs.umbc.edu/tuition-info/mandatory-fees/" target="_blank">application fee</a> of $50 is required to apply online.
  </li>
</ul>
</div>


  <div class="accordionheader">
    <h4>Submit a Paper Application<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">

<ul>
  <li>Prospective graduate students may also <a href=
  "http://gradschool.umbc.edu/students/forms/" target="_blank">download</a> a paper application, request an application by
    mail or request an application by phone at 410-455-2537.
  </li>

  <li>A non-refundable <a href=
  "http://sbs.umbc.edu/tuition-info/mandatory-fees/" target="_blank">application fee</a> of $70 is required for paper submissions. Checks
  must be made payable to UMBC and should accompany the application form.<br>
    <br>
    <strong>Mail application and payment to:</strong><br>
    UMBC<br>
    Office of Graduate Admissions<br>
    1000 Hilltop Circle<br>
    Baltimore, MD 21250
  </li>
</ul>
</div>


  <div class="accordionheader">
    <h4>Notification of Admission Decisions<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">

<ul>
  <li>UMBC sends admission decisions to the e-mail address you provide on your
  application.</li>
</ul>

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