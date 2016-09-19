<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Administrative Support Contact Information | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Winter session contact information." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Administrative Support Contact Information | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/deptcontact/" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Winter session contact information." />


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
        <h2>Administrative Support Contact Information</h2>
    <!-- END Page Title -->       
      <div class="content">
      
     <!-- Start Content --> 
     
     
     <h4><strong>Academic Policy</strong></h4>
     <p><a href="http://academicpolicy.umbc.edu/home/whom-do-i-contact/">Academic  Standards and Policy Administration</a><br>
       410-455-3874
       </p>
       
     <h4><strong>Advising</strong></h4>
     <p><a href="http://www.umbc.edu/advising/">Academic and Pre-Professional Advising</a><br>
       410-455-2729</p>
       
     <h4><strong>Registration, Drop/Withdrawal, Transcripts</strong></h4>
     <p><a href="http://registrar.umbc.edu/">Registrar&rsquo;s Office</a><br>
       410-455-2500</p>
       
     <h4><strong>Billing and Student Accounts</strong></h4>
     <p><a href="http://www.umbc.edu/bursar/">Student Business Services</a><br>
       410-455-2288</p>
       
     <h4><strong>Financial Aid and FAFSA</strong></h4>
     <p><a href="http://www.umbc.edu/financialaid/">Financial Aid and Scholarships</a><br>
       410-455-2387</p>
       
     <h4><strong><em>my</em></strong><strong>UMBC, Computer  and Technology Assistance</strong></h4>
     <p><a href="http://www.umbc.edu/doit/">Division  of Information Technology</a><br>
       410-455-3838</p>

     <!-- END Content -->
     
	</div>
        
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