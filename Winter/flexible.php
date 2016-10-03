<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GEP Courses | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Winter session GEP course offerings and requirements." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="We're Flexible | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/flexible" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="We're flexible!" />


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
        <h2>We're Flexible!</h2>
    <!-- END Page Title -->       
	<div class="content">
		<div class="narrowchart">
      
     <!-- Start Content --> 

<h5>So, you know we offer  <a href="https://highpoint-prd.ps.umbc.edu/app/catalog/classSearch">traditional in-person classes</a> at our main Catonsville campus  during the winter, but did you know that we also offer courses fully online, in  a hybrid format and at the Universities at Shady Grove in Rockville, MD?</h5>

<p><h5>We  think it's nice to have options. We're sure you do too!</h5></p>

<h4>Hybrid Courses</h4>
<ul>
  <li>Hybrid courses blend in-person and online learning.</li>
  <li>Most hybrid courses reduce in-class time and require  more self-directed learning.</li>
  <li>View winter 2016 <a href="hybridcourses">hybrid  courses offered</a>.</li>
</ul>

<h4>Online Courses</h4>
<ul>
  <li>Online courses use Blackboard (UMBC's course management  system) and emphasize self-directed student learning.</li>
  <li>Students do not come to campus for class meetings, but  instead manage their own learning online.</li>
  <li>In the Schedule of Classes, &ldquo;Days &amp; Times&rdquo; are  listed as &ldquo;TBA&rdquo; for online courses.</li>
  <li>View winter 2016 <a href="onlinecourses">online  courses offered</a>.</li>
</ul>

<h4>Shady Grove Courses</h4>
<p>The Universities at Shady Grove (USG) is a University System  of Maryland regional center located in Rockville, MD.</p>
<ul>
  <li>During summer and winter sessions, USG is open to Main  campus UMBC students, Current UMBC at USG students, Incoming transfer students,  Visiting students from other college and universities.</li>
  <li>View winter 2016 <a href="shadygrovecourses">courses  offered at UMBC-Shady Grove</a>.</li>
</ul>



     <!-- END Content -->
     
	</div></div>
        
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