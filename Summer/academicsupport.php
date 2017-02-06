<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Academic Support | Summer Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC is dedicated to student success. Here are the academic support resources available for Summer Session 2017." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Academic Support | Summer Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/summer/academicsupport" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/tutoring.jpg" />
<meta property="og:description" content="UMBC is dedicated to student success. Here are the academic support resources available for Summer Session 2017." />

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
        <h2>Academic Support</h2>
        
    <!-- END Page Title -->       
	<div class="content">
		<div class="narrowchart">
			<div id="accordion">  
      
     <!-- Start Content --> 
<p>UMBC is dedicated to student success. The Learning Resources Center <a href="http://lrc.umbc.edu" target="_blank">(LRC)</a> provides assistance outside of class to improve study skills, facilitate content understanding, and to build a strong foundation for self-directed learning, an important skill for professionals in every field.</p>

  <div class="accordionheader">
    <h4>The Math Lab<i class="fa fa-angle-down"></i></h4>
    <strong>(Biology, Chemistry, Mathematics, Physics and Statistics tutoring)</strong>
  </div>

<div class="accordionbody">
The LRC provides tutoring for most 100 and 200 level biology, chemistry, and physics courses, as well as most mathematics and statistics courses.  Walk-in and online hours are <a href="http://lrc.umbc.edu/tutor/summer-tutoring/" target="_blank">available</a> and will be held in the Math Lab space <a href="http://library.umbc.edu/wherethingsare" target="_blank">located</a> behind the Reference Desk on the first floor of the library.  You do not need an appointment for walk-in hours, just come by!
</div>


  <div class="accordionheader">
    <h4>Online Writing Tutoring<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">

The LRC provides support for ANY written assignment in ANY summer course.  Chat synchronously with an online tutor or submit a paper and receive asynchronous feedback.  Tutors will focus on your thesis statement and organizational strategy before discussing citation issues or grammatical errors.  All appointments must be <a href="https://umbc.mywconline.com/index.php?" target="_blank">scheduled</a> at least one day in advance.

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