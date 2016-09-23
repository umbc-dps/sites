<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Financial Aid | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Financial aid may be available for eligible UMBC students who are making satisfactory academic progress." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Financial Aid | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/financialaid" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Financial aid may be available for eligible UMBC students who are making satisfactory academic progress." />


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
        <h2>Financial Aid</h2>
    <!-- END Page Title -->       
   <div class="content">
  <div class="narrowchart">
 <div id="accordion">       
     <!-- Start Content --> 
     
  <p>Financial aid (loans and/or grants) may be available for eligible UMBC students who are making satisfactory academic progress (SAP).</p>
  <p>Students are encouraged to contact their financial aid counselor to discuss winter and fall financial aid eligibility.</p>

  <div class="accordionheader">
  <h4>Pell Grant Eligibility<i class="fa fa-angle-down"></i></h4>
 </div>

 <div class="accordionbody">
<p>Pell Grant recipients who are enrolled for less than 12 credits in fall may be eligible for additional Pell Grant funds based on their combined fall and winter enrollment. Pell Grant recipients enrolled full time for the fall semester will receive their maximum Pell Grant and therefore, will not have additional eligibility based on winter enrollment.</p>

<p>Pell eligible students are encouraged to contact their financial aid counselor to discuss their fall and winter enrollment plans.</p>
</div>

  <div class="accordionheader">
  <h4>Federal Stafford Loan Eligibility<i class="fa fa-angle-down"></i></h4>
 </div>

 <div class="accordionbody">
<p>Students who enroll in fall and winter terms for less than 6 credit hours in either term may be eligible to use their combined enrollment for Federal Stafford Loan eligibility if the total combined enrollment is 6 credit hours or more.</p>
</div>

<br>
<p>Visit <a href="http://financialaid.umbc.edu/" target="_blank">financialaid.umbc.edu</a> (under "Special Programs") or call 410-455-2387 for more information.</p>

</div>

<br>
<br>

<h5 align="right"><strong>Find out about <a href="scholarships">Scholarships</a>!</strong></h4><br>
</div>

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