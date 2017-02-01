<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Winter Session Course Load | Summer Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="During winter session you can register for no more than  4.5 credits, due to the condensed length of the term." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Winter Session Course Load | Summer Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/excesscredit" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="During winter session you can register for no more than  4.5 credits, due to the condensed length of the term." />


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
        <h2>Excess Credits</h2>
    <!-- END Page Title -->       
  <div class="content">
  <div class="narrowchart">
  <div id="accordion">
     <!-- Start Content --> 
<p>Highly motivated and academically strong students may be granted permission to enroll in more than the designated maximum summer/winter course load limits.  Advanced approval is required by both your primary major advisor and the Office of Academic and Pre-Professional Advising to enroll in excess credits.</p>
<div class="accordionheader">
    <h4>Summer Session  Course Load<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">
<p>During the summer, register for up to 16 total credits (8 credits maximum for each session).  Attempts to enroll in more than 8 credits per session are blocked.</p>
  </div>  
     
<div class="accordionheader">
    <h4>Winter Session Course Load<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">
<p>Due to winter session’s condensed length, 4.5 is the maximum allowed credits.  Attempts to enroll in more than 4.5 credits are blocked.</p>
</div>

<div class="accordionheader">
    <h4>How to Request Excess Credit Approval<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">
<p><a href="http://registrar.umbc.edu/files/2015/03/NEW-Excess-Credits-Form_3_10_15nm.pdf" target="_blank">Download</a> and complete an "Enroll for Excess Credit" form.  Consult with your primary major advisor to verify he/she agrees to approve the additional credits, and obtain your advisor's signature on the form.  E-mail the completed/signed form to the Office of Academic and Pre-Professional <a href="http://advising.umbc.edu/" target="_blank">Advising</a> at <a href="mailto:arc@umbc.edu" target="new">arc@umbc.edu</a>.  Please allow at least one week for review.  Decisions are sent to the e-mail provided on your request.</p>
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