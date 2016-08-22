<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Summer Tutoring | Summer Programs at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="The LRC will be offering tutoring in Summer 2016.Check out all the information here!" />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Summer Tutoring | Summer Programs at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/summer/tutoring" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/2.jpg" />
<meta property="og:description" content="The LRC will be offering tutoring in Summer 2016. Check out all the information here!" />

<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/magnetic-popup.css" rel="stylesheet">
<link href="http://umbc.edu/dps/css/accordion.css" rel="stylesheet">

<!-- Javascript -->
<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

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
<div class="container column" id="main">  <div  id="summer-heading">
    <a href="index">
    <h1 class="remove-bottom">
    <img src="images/summer-heading.png" style="width:100%">
    </h1>
    </a>
  </div>


 <div class="sixteen columns">
  <div class="eleven columns alpha" style="padding-top:1em;">
  <!-- Page Title -->
    <h2>Academic Support</h2>
  <!-- END Page Title -->    
   <div class="content">
  <div class="narrowchart">
 <div id="accordion">   
   <!-- Start Content --> 
     
<p>The LRC will be offering tutoring for most Science and Math courses as well as for any Written Paper in Summer 2016.</p>

<div class="accordionheader">
  <h4>Online Writing Tutoring<i class="fa fa-angle-down"></i></h4>
</div>

 <div class="accordionbody">

<ul>
	<li>Support for ANY written assignment in ANY summer course</li>
    <li>Chat synchronously with an online tutor or submit a paper and receive asynchronous feedback</li>
    <li>All appointments must be <a href="https://umbc.mywconline.com/index.php?" target="_blank">scheduled</a> at least one day in advance</li>
    <li>Brainstorm ideas</li>
    <li>Expand and improve your outline</li>
    <li>Organize your rough draft</li>
    <li>Polish your final draft</li>
    <li>Tutors will focus on your thesis statement and organizational strategy before discussing citation issues or grammatical errors</li>
    <li>Visit the UMBC Learning Center for more <a href="http://lrc.umbc.edu/tutor/writing-center/" target="_blank">information</a></li>
    
</ul>

</div>

<div class="accordionheader">
  <h4>Math/Science Tutoring<i class="fa fa-angle-down"></i></h4>
</div>

 <div class="accordionbody">
<ul>
  <li>Tutoring provided for most 100 and 200 level biology, chemistry, and physics courses, as well as most mathematics and statistics courses</li>
  <li>Walk-in and online hours available (see list of <a href="http://lrc.umbc.edu/tutor/summer-tutoring/" target="_blank">days/times</a> for each course)</li>
  <li>All Walk-in hours will be held in the <a href="http://library.umbc.edu/wherethingsare" target="_blank">Math Lab space</a>, located behind the Reference Desk on the first floor of the library.</li>
  <li>You do not need an appointment for walk-in hours, just come by!</li>
    
</ul>

</div>


 <br>


     <!-- END Content -->
    
	</div></div></div>
        
    <!-- /eleven columns -->
	</div>
    <!-- SIDEBAR --> 
    <div class="five columns omega" style="float:right;"> 
      <?php include("includes/student-types.php"); ?>
    </div>
    <!-- /five columns omega --> 
    <!-- END TOP SIDEBAR-->
  </div>

  <footer id="site-footer" class="clearfix">
    <?php include("includes/footer.php"); ?>
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