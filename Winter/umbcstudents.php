<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>UMBC Students | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Taking winter  session courses is a great way to get ahead, boost your GPA or focus on a  difficult course." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="UMBC Students | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/umbcstudents" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Taking winter  session courses is a great way to get ahead, boost your GPA or focus on a  difficult course." />


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
        <h2>UMBC Students</h2>
    <!-- END Page Title -->       
         <div class="content">
   <div class="narrowchart">
  <div id="accordion">
      
     <!-- Start Content --> 
     
<h4>Taking Winter  Session courses is a great way to get ahead, boost your GPA or focus on a  difficult course.</h4>
<ul>
  <li>Earn up to 4.5 credits during winter session. </li>
  <li>To register for more than 4.5 credits per session, <a href="excesscredit" target="_blank">approval  is needed</a>.</li>
  <li>Currently enrolled UMBC students are eligible to register - no additional application is necessary.</li>
  <li>Advising is recommended, but not required.</li>
</ul>

<div class="accordionheader">
	<h4>Fall Graduation/Winter Registration<i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">

<ul>
<li>If you have applied to graduate in fall 2016, you will be blocked from registering in future terms.</li>

<li>To register in winter session, you must first submit an <a href="http://registrar.umbc.edu/contact/" target="_blank">RT ticket</a> to the Registrar’s Office to request permission to enroll.</li>
</ul>
</div>

<div class="accordionheader">
	<h4>Four Year Guide to Graduation<i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">
<p>Review UMBC’s <a href="https://apps.my.umbc.edu/pathways/" target="_blank">academic pathways</a> to see what courses are required for each major. Many general education and required courses are offered in the summer and winter sessions to help you stay on track and graduate on time.</p>
</div>

<div class="accordionheader">
	<h4>Scholarships <i class="fa fa-angle-down"></i> and Financial Aid</h4>
</div>

<div class="accordionbody">
<ul>
  <li>A limited number of full and partial tuition  <a href="scholarships" target="_blank">scholarships are available</a>.</li>
  <li>Consult with your advisor to see if you are eligible for winter <a href="financialaid" target="_blank">financial aid</a>.</li>
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