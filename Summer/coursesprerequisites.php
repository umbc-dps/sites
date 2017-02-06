<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Course Prerequisites | Summer Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Students must have successfully satisfied the UMBC prerequisite requirements -- or be currently enrolled in the prerequisite course(s) -- before registering in courses with prerequisite requirements." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Course Prerequisites | Summer Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/summer/courseprerequisites" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/transcripts.jpg" />
<meta property="og:description" content="Students must have successfully satisfied the UMBC prerequisite requirements -- or be currently enrolled in the prerequisite course(s) -- before registering in courses with prerequisite requirements." />


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
  <h2>Course Prerequisites</h2>
    <!-- END Page Title --> 
          
  <div class="content">
  <div class="narrowchart">
  <div id="accordion">    
      
     <!-- Start Content --> 
      
<p>You must have successfully satisfied the UMBC prerequisite requirements or be currently enrolled in the prerequisite course(s) before registering in summer 2017 courses with prerequisite requirements.</p>

<p>View <a href="all-courses#Has%20Prerequisite">courses with prerequisites</a> and <a href="all-courses#No%20Prerequisite">courses without prerequisites</a> offered this summer.</p>


<div class="accordionheader">
    <h4>Minimum grade requirements<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">

<p>If you wish to take a summer course that has a prerequisite requirement, and you are currently enrolled in the prerequisite course during the spring semester, you will be granted permission to enroll in the summer course. However, you may be required to verify that your final grade in the spring course meets the minimum grade requirement for the summer course. If the minimum grade criteria is not earned in the spring course, <strong>you must drop your summer course</strong>. Please be aware of the schedule adjustment <a href="http://umbc.edu/summer/importantdates" target="_blank">deadlines</a> and the <a href="http://umbc.edu/summer/financialdates" target="_blank">refund</a> schedule <strong>BEFORE</strong> you enroll.</p>
</div>
  
  <div class="accordionheader">
<h4>How to request a prerequisite override – visiting students<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">

<p>Visiting students who attempt to enroll in a course with prerequisite course requirements will initially be BLOCKED from registering. UMBC’s online registration system cannot automatically verify that the prerequisites have been met at a visiting student’s home institution, even when a transcript has been submitted.</p>

<p>If you receive a registration error indicating that you do not have the appropriate prerequisites to enroll in a summer class, or that you need consent to register, submit a <a href="http://in-eforms-prd1.ps.umbc.edu/psw-content-forms-server/fs?form=efDPS_CoursePermissions" target="_blank">request</a> to the Office of Summer and Winter Programs to have your transcript reviewed. If you have successfully met the prerequisite requirements at your home institution, you will be granted a prerequisite override that will enable you to register.</p>

<p>A prerequisite override does <strong>NOT</strong> guarantee your enrollment in the course. Once you are granted permission to enroll, you must register as soon as possible to secure your seat in the class. <a href="contact" target="_blank">Contact</a> the Office of Summer and Winter Programs for assistance.
</p>
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