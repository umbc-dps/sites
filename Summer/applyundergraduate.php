<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Application Process for Undergraduate Students | Summer Session at UMBC</title>

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
        <h2>Application Process for Undergraduate Students</h2>
    <!-- END Page Title -->       
	<div class="content">
		<div class="narrowchart">
			<div id="accordion">  
      
     <!-- Start Content --> 

<p>Admission decisions are sent to the e-mail address provided on your application.</p>
<p>Session I application deadline:	May 24<br>
  Session II application deadline: July 5 </p>

  <div class="accordionheader">
    <h4>How to Apply<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">
  <p>Online applications are managed by our trusted partner <a href="http://www.collegenet.com/elect/app/app" target="_blank">CollegeNET</a> and are safe and secure.</p>
  <p><a href="https://applyweb.collegenet.com/account/new/create?origin=https%3A%2F%2Fwww.applyweb.com%2Fshibboleth%2Fgatekeeper%3Fdest%3Dhttps%253A%252F%252Fwww.applyweb.com%252Fumbc%252F" target="_blank">Create</a> your CollegeNET account and keep a record of your CollegeNET user name and password. If you save and end your session before you submit your application, you will need your user name and password to regain access the application. Once you create your CollegeNET account, choose the <a href="https://www.applyweb.com/umbc/index.ftl" target="_blank">Visiting Student</a> option to log in to CollegeNET and complete the visiting student application. </p>
</div>


  <div class="accordionheader">
    <h4>Application Confirmation<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">

<p>An e-mail confirmation from CollegeNET is sent immediately after you submit your application. Once your application is forward to UMBC from CollegeNet, you will receive another email confirmation. The UMBC confirmation e-mail will include your UMBC campus ID. It typically takes 3 - 5 business days for UMBC to process applications.</p>
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