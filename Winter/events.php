<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Events | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="There's more to winter at UMBC than what happens in the classroom." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Events | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/events" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="There's more to winter at UMBC than what happens in the classroom." />


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
        <h2>Events</h2>
    <!-- END Page Title -->       
        <div class="content">
  <div class="narrowchart">
 <div id="accordion">
     <!-- Start Content --> 
<p>There's more to winter at UMBC than what happens in the classroom. Have fun, and be part of a dynamic learning community while you discover what it takes to be a successful professional.
</p>

<div class="accordionheader">
  <h4>Student Events Board Events<i class="fa fa-angle-down"></i></h4>
</div>

 <div class="accordionbody">
 
<p>UMBC's <a href="http://my.umbc.edu/groups/seb/events" target="_blank">Student Events Board (seb)</a> hosts regular events on-campus during winter session.</p>

</div>

<div class="accordionheader">
  <h4>Retriever Activity Center (RAC)<i class="fa fa-angle-down"></i></h4>
</div>

 <div class="accordionbody">
<p><strong>Winter Session Hours of Operation</strong><br>
January 3 - January 27*<br>
Mondays through Fridays: 7am-9pm<br>
Saturdays and Sundays: 12pm-6pm</p>

<p>*The RAC will be CLOSED Monday, January 16 for the MLK Jr. Holiday</p>


<p>NOTE: Track, RAC Gymnasium and/or Cardio Balcony may be closed due to PHED classes and/or Varsity practices.</p>

</div>

<div class="accordionheader">
  <h4>UMBC Fitness and Wellness Classes<i class="fa fa-angle-down"></i></h4>
</div>

 <div class="accordionbody">
<p>All group fitness class participants are required to sign-in and sign-out in the binder provided at each class. All classes are <a href="http://my.umbc.edu/groups/fitness-at-therac/events" target="_blank">FREE </a>to all student, faculty/staff and RAC members. </p>

</div>


</div>
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