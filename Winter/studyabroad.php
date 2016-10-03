<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Study Abroad | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Study abroad opportunities." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Study Abroad | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/studyabroad" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Spain Travel Study 2017." />


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
        <h2>Travel Study 2017</h2>
    <!-- END Page Title -->       
      <div class="content">
      
     <!-- Start Content --> 

<h4>Spain</h4>
<h4>March 17-26, 2017</h4>

<p><img src="images/spain.jpg" style="width:100%"/></p>

<p>Join the UMBC Ancient Studies Department this spring for their 51 st annual study tour, and see Spain from Barcelona to Merida (and all points between!):</p>

<ul>
<li>Carrer del Pardis (four columns from a temple of Augustus) and the Roman Walls</li>
	<li>Plaça Vila de Madrid (Roman Necropolis)	  </li>
	<li>Picasso Museum	  </li>
	<li>Forum of Caesaraugusta and the Museum of the Public Baths</li>
	<li>Moorish palace and fortification Alcazaba </li>
And much, much more!

</ul>

<h4>Earn UMBC Credits</h4>
<p>The trip can be taken as a three-credit course in the Winter 2017 term (ANCS 301) - winter session tuition applies. Scholarships are available to Ancient Studies majors who take the course for credit.
</p>

<h4>Apply Soon!</h4>
<p>Spaces are limited, so reserve yours today! An initial deposit of $350.00 is due by <strong>Monday, September 26, 2016</strong>.</p>

<p>For more information (including a detailed itinerary and application) visit the <a href="http://ancientstudies.umbc.edu/files/2016/08/Info-and-Application-Forms-Spain-2017-1.pdf" target="_blank">Ancient Studies Department website</a>.</p>



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