<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tuition & Fees | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Winter session tuition is based on UMBC’s standard part-time credit rate for Maryland residents and non-residents." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Tuition & Fees | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/tuition" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Winter session tuition is based on UMBC’s standard part-time credit rate for Maryland residents and non-residents." />


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
        <h2>Tuition & Fees</h2>
    <!-- END Page Title -->       
   <div class="content">
  <div class="narrowchart">
 <div id="accordion">  
      
     <!-- Start Content --> 
     
<p>Winter session tuition is based on UMBC’s standard part-time credit rate for Maryland residents and non-residents. Only two mandatory fees – an auxiliary facilities fee and a flat $20 winter session fee – are charged in winter session – a substantial cost savings for winter students.</p>

<p class="tuition-links"><strong>See Costs For:</strong> <a href="#" class="tuition-link-md">Maryland Resident - Undergraduate</a> | <a href="#" class="tuition-link-non">Non-Maryland Resident - Undergraduate</a></p>

<?php include("includes/tuition-charts.php"); ?>

<br>

<div class="accordionheader">
	<h4>Graduate Tuition Rates<i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">
<p>For graduate tuition rates visit the Student Business Services <a href="http://sbs.umbc.edu/" target="_blank">website</a>.</p> 
</div>

<div class="accordionheader">
	<h4>Schedule Adjustment<i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">
<ul>
  <li>During <a href="scheduleadjustment">schedule adjustment period</a> use the &quot;swap&quot; option to
  simultaneously add and drop a class (with the same number of credits) without
  financial or academic penalty.
  </li>

  <li>If you add a course on the <a href="importantdates">
    first day of the session</a> or later, a non-refundable $20 <a href=
    "http://sbs.umbc.edu/billing/late-fees/" target="_blank">late registration
    fee</a> will be charged.
  </li>
</ul>
</div>

<div class="accordionheader">
	<h4>Refund Schedule<i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">
      <ul>
        <li>Tuition and auxiliary fees are fully refunded through the <a href="importantdates">first day of the session</a>.</li>
        <li>After the first day of the session, refunds are <a href="financialdates">pro-rated</a> based on the date the course was dropped.</li>
      </ul>
</div>

<div class="accordionheader">
	<h4>Financial Aid<i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">
  <ul>
    <li><a href="financialaid">Financial aid</a> may be available to Pell Grant eligible UMBC students who are making satisfactory academic progress (SAP).</li>
  </ul>
</div>

<div class="accordionheader">
	<h4>Pay Your Bill<i class="fa fa-angle-down"></i></h4>
</div>

<div class="accordionbody">
  <ul>
    <li>Bill information can be <a href="billing">found here</a></li>
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
$( document ).ready(function() {
	if (hash == '#non-resident') {
		$('.non-resident').show();
		$('.resident').hide();
	}
	else {
	$('.resident').show();
	$('.non-resident').hide();
}});
$('.tuition-link-non').click(function() {
	$('.non-resident').show();
	$('.resident').hide();
});
$('.tuition-link-md').click(function() {
	$('.non-resident').hide();
	$('.resident').show();
});
$('.tuition-links a').click(function() {
	var mdText = $(this).text();
	ga('send', 'event',  'details', 'click', mdText);
});

</script> 
  
</body>
</html>