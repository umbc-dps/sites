<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Shady Grove Courses | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="The Universities at Shady Grove (USG) is a University System  of Maryland regional center located in Rockville, MD." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Shady Grove Courses | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/shadygrove" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="The Universities at Shady Grove (USG) is a University System  of Maryland regional center located in Rockville, MD." />


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
        <h2>Shady Grove Courses</h2>
    <!-- END Page Title -->       
      <div class="content">
      
     <!-- Start Content --> 
     
<p>The Universities at Shady Grove (USG) is a University System  of Maryland regional center located in Rockville, MD.</p>

<h4>During Summer and Winter Sessions, USG is Open to:</h4>

<ul>
  <li>Main campus UMBC students</li>
  <li>Current UMBC at USG students</li>
  <li>Incoming transfer students</li>
  <li>Visiting students from other college and universities</li>
</ul>


<h4>Course Listing</h4>
<ul>
  <li>View <a href="all-courses#shady%20grove" target="_blank">winter courses</a> offered at UMBC-Shady Grove</li>
	<li>Online courses are also available to USG students</li>
</ul>

<h4>Resources</h4>
<ul>
  <li><a href="http://shadygrove.umd.edu/about/visit/public-transportation">Public transportation</a></li>
  <li><a href="http://shadygrove.umd.edu/about/visit/campus-map">Campus map</a></li>
  <li><a href="http://shadygrove.umd.edu/about/visit/parking">Parking information</a></li>
</ul>

<p><em>During summer and winter sessions, classes at the <a href="http://umbc.edu/shadygrove" target="_blank">Universities at Shady Grove</a> are open to all UMBC students. It’s a convenient way for students living in Montgomery County and surrounding areas to take UMBC classes without driving to the main campus. </em></p>

<p><em>During the fall/spring semesters, only those students admitted to a designated USG degree program may attend classes at USG.</em></p>

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