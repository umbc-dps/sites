<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Billing | Summer Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Winter session billing details." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Billing | Summer Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/billing" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Winter session billing details." />


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
        <h2>Billing</h2>
    <!-- END Page Title -->       
	<div class="content">
		<div class="narrowchart">
			<div id="accordion">  
      
     <!-- Start Content --> 
<p>UMBC bills students electronically - paper bills are not issued for <a href="tuition">tuition and fees</a>.  E-bills are <a href="http://sbs.umbc.edu/billing/e-billing-schedule/" target="_blank">available</a> on the first business day of each month, and are due on the 20th of each month.  Late fees are assessed on the 25th of each month.</p>

  <div class="accordionheader">
    <h4>How to view your bill<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">
<a  href="http://my.umbc.edu/" target="_blank">Log-in</a> to <em>my</em>UMBC and highlight the "Topics" menu.  Select "Billing &amp; Personal Finances", and then select <a href="http://sbs.umbc.edu/billing/account-inquiry/" target="_blank">&quot;Account Inquiry&quot;</a>.
</div>


  <div class="accordionheader">
    <h4>How to pay your bill<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">

<a  href="http://my.umbc.edu/" target="_blank">Log-in</a> to <em>my</em>UMBC and highlight the "Topics" menu.  Select "Billing &amp; Personal Finances" and then select <a href="http://sbs.umbc.edu/payments/" target="_blank">&quot;Payments &amp; Billing&quot;</a>.
</div>


  <div class="accordionheader">
    <h4>Optional payment plan<i class="fa fa-angle-down"></i></h4>
  </div>

<div class="accordionbody">

<p>Pay your tuition with an interest free <a href="http://sbs.umbc.edu/payment-plan-faq/" target="_blank">installment</a> plan.  Enroll by 04/19/2017 to spread your bill over 3 payment dates: 4/20/17, 5/19/17, and 6/20/17.  Enroll by 5/19/17 to spread your bill over 2 payment dates: 5/20/17 and 6/20/17.</p>
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