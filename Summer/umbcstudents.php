<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>UMBC Students | Summer Session at UMBC</title>
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Winter session GEP course offerings and requirements." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="GEP Courses | Summer Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/gep" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Winter session GEP course offerings and requirements." />


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
        <h2>Current UMBC Students</h2>
    <!-- END Page Title -->       
         <div class="content">
   <div class="narrowchart">
  <div id="accordion">
      
     <!-- Start Content --> 
<p>Registration for current UMBC students begins <strong>March 6</strong>.  No additional application is necessary.  Advising is recommended, but not required.</p>


<div class="accordionheader">
	<h4>If you are blocked from Summer registration<i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">
<p>If  you applied for spring 2017 graduation you will be blocked from summer 2017  registration, and will need to submit an <a href="http://registrar.umbc.edu/contact/" target="_blank">RT ticket</a> to the  Registrar&rsquo;s Office to request summer 2017 registration permission.  If you did not apply for spring graduation  and are unable to register for summer session, <a href="contact">contact</a> the Office of Summer/Winter  Programs.
</p>
</div>


<div class="accordionheader">
	<h4>Registering for session II with session I prerequisites <i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">
<p>A prerequisite  course <a href="coursesprerequisites">override</a> is  required for Session II courses if you are registered for the prerequisite  course in Session I <em>(Example: Taking CHEM  101 in session I and trying to register for CHEM 102 in session II</em>).  You will be required to drop your session II  course(s) if you do not earn the required session I grade.

</p>
</div>

<div class="accordionheader">
	<h4>Four-year degree planning guide<i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">
<p><a href="https://apps.my.umbc.edu/pathways/" target="_blank">Academic  Pathways</a> provides a four-year guide to degree planning that  includes course requirements by major.  Many general education (GEP) and required courses  are offered in the summer and winter sessions to help you stay on track and  graduate on time.</p>
</div>

<div class="accordionheader">
	<h4>Scholarships and financial aid<i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">
<p>A  limited number of full and partial tuition <a href="scholarships">scholarships</a> are available.  Consult with your advisor to see if you are  eligible for summer <a href="financialaid">financial aid</a>.</p>
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