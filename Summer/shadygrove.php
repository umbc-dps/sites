<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Shady Grove Courses | Summer Session at UMBC</title>
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
        <h2>Universities at Shady Grove</h2>
    <!-- END Page Title -->       
      <div class="content">
      	<div class="narrowchart">
         	<div id="accordion">
     <!-- Start Content --> 
     
<p>The <a href="http://www.umbc.edu/shadygrove/">Universities at Shady Grove (USG)</a> is a University System of  Maryland regional center <a href="https://www.shadygrove.umd.edu/about-usg/directions-transportation">located</a> in Rockville, MD.  It&rsquo;s a convenient way for students living in  Montgomery County and surrounding areas to take UMBC classes without driving to  the main campus.</p>

<p>USG parking <a href="https://shadygrove.umd.edu/about-usg/directions-transportation/parking">permits</a> are required on <a href="https://shadygrove.umd.edu/about-usg/campus-map-tour/printable-campus-map">campus</a>.  Public transportation <a href="https://shadygrove.umd.edu/about-usg/directions-transportation/public-transportation">options</a> are also available.</p>

<p>View <a href="all-courses#shady%20grove">Shady Grove courses</a> offered this summer.  UMBC <a href="all-courses#online">online courses</a> are also  open to USG students.</p>

<div class="accordionheader">
	<h4>Who can attend<i class="fa fa-angle-down"></i></h4>
  </div>
    
<div class="accordionbody">
<p>During summer and winter sessions, classes  at the&nbsp;Universities at Shady Grove are open to&nbsp;<strong>all</strong> UMBC  students, including:  main campus UMBC  students, current UMBC at USG students, incoming transfer students, and visiting  students from other college and universities.</p>
</div>

<div class="accordionheader">
	<h4>Parking and public transportation<i class="fa fa-angle-down"></i></h4>
  </div>
    
<div class="accordionbody">
	<p>USG parking <a href="https://shadygrove.umd.edu/about-usg/directions-transportation/parking" target="_blank">permits</a> are required on <a href="https://shadygrove.umd.edu/about-usg/campus-map-tour/printable-campus-map" target="_blank">campus</a>.  Public transportation <a href="https://shadygrove.umd.edu/about-usg/directions-transportation/public-transportation" target="_blank">options</a> are also available.</p>
</div>


</div></div>
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