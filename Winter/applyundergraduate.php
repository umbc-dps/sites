<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Application Process for Undergraduate Students | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Online applications are managed by CollegeNET, UMBC's application hosting service partner." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Application Process for Undergraduate Students | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/applyundergraduate" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Online applications are managed by CollegeNET, UMBC's application hosting service partner." />


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
        <h2>Application Process for Undergraduate Students</h2>
    <!-- END Page Title -->       
	<div class="content">
		<div class="narrowchart">
			<div id="accordion">  
      
     <!-- Start Content --> 

<p>Online applications are managed by CollegeNET, UMBC's  application hosting service partner. CollegeNET's online application process is  safe and secure.</p>

  <div class="accordionheader">
    <h4>How to Apply as a Visiting Undergraduate Student<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">
<ul>
  <li>Go to UMBC's <a href="https://www.applyweb.com/apply/umbc/">Undergraduate  Admissions Main Menu</a> page.</li>
  <li>Create your CollegeNET account.</li>
  <li>Keep a record of your CollegeNET user name and password. If you save and end your session before you submit your application, you will need your user name and password to regain access the application.</li>
  <li>Once you have created your CollegeNET account, choose the <strong>Visiting Student</strong> option.</li>
  <li>Log in to CollegeNET and complete the visiting student application.</li>
  <li>If you plan on taking a course with a <a href="coursesprerequisites">prerequisite requirement</a>, upload a copy your transcript showing that you have completed (or will complete) the prerequisite course requirement(s)  prior to the start of the session.
  </li>
  <li>Submit a $50 non-refundable application fee by credit  card over a secure Internet connection.</li>
</ul>
</div>


  <div class="accordionheader">
    <h4>Application Confirmation<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">

<ul>
  <li>You will receive an e-mail confirmation from CollegeNET  immediately after you submit your application.</li>
  <li>You will receive a confirmation from UMBC (sent to the e-mail address you provide) once CollegeNet forwards your application to UMBC.</li>
  <li>Once received, it typically takes 3 - 5 business days  to process online applications.</li>
  <li>The UMBC confirmation e-mail will include your UMBC  campus ID.</li>
</ul>
</div>


  <div class="accordionheader">
    <h4>Admission Decisions<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">

<ul>
  <li>UMBC sends admission decisions to the e-mail address  provided on your application.</li>
  <li>Once admitted, you must  <a href="https://webadmin.umbc.edu/admin/User/Create">create</a> a <em>my</em>UMBC account to register for  classes using your UMBC campus ID.</li>
  <li> <a href="faq">Learn more</a> about <em>my</em>UMBC.</li>
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