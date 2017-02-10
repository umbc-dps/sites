<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="google-site-verification" content="iNv2dm65X5VqSZjqdgzOM8zkHZU8bwycQ0ihWPQU3QA" />
<title>Summer Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="View Dates and Courses for UMBC's 2016 Summer Session here!" />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Summer Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/summer" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/umbcsummer.jpg" />
<meta property="og:description" content="View Dates and Courses for UMBC's 2017 Summer Session here!" />

<!-- CSS -->
<link href="css/styles.css" rel="stylesheet">
<link href="css/magnetic-popup.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>

<!-- Javascript -->
<script src="js/modernizr.custom.js"></script>

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<style>
.homepage{display:block!important}
</style>
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
<div class="container column" id="main">
	<div id="winter-heading"> 
        <a href="index.php">
        <h1 class="remove-bottom" id="summer-heading"> 
            <img src="images/summer-heading.png" style="width:100%"> 
            <!-- Winter Session 2017 --> 
        </h1>
        </a> 
	</div>
    
<div class="sixteen columns">
	<div class="eleven columns alpha" style="padding-top:1em;">
		<div id="cbp-fwslider" class="cbp-fwslider">

<ul>
<!-- Slide One -->
<li id="slide1">  
	<a href="courses">
    	<img src="images/6.jpg" alt="Registration begins March 6.">
    </a>
	<div class="carousel-caption wordwrap">
		<h3>Summer Session 2017</h3>
		<small>Registration begins March 6.</small><br>
        <a href="courses" role="button" class="web-seemore" target="_blank">View Courses</a></p>
	</div>
	<p id="captiontwo">
        <a href="courses" target="_blank">
        View Courses
        </a>
	</p>
</li>
<!-- END Slide One --> 
          

<!-- Slide Two -->
<li id="slide2">
	<a href="http://gritgoing.umbc.edu/featured-course-animal-behavior/" target="_blank">
    	<img src="images/featured/biol480.jpg" alt="Featured Course: Animal Behavior">
	</a>
	<div class="carousel-caption wordwrap">
		<h3>Featured Course: Animal Behavior <br>(BIOL 480)</h3>
		<small>Explore the fascinating ways animals interact with each other and their environments. (Writing Intensive GEP)</small>
		<p><a href="http://gritgoing.umbc.edu/featured-course-animal-behavior/" role="button" class="web-seemore" target="_blank">Learn more</a></p>
	</div>
	<p id="captiontwo">
    	<a href="http://gritgoing.umbc.edu/featured-course-animal-behavior/" target="_blank">Featured Course: Animal Behavior</a>
	</p>
</li>
<!-- END Slide Two -->           
</ul>
<div id="dotcontainer"></div>
</div>
      
<!-- /cbp-fwslider -->
</div>
<!-- /eleven columns -->
    
<div class="five columns omega" style="float:right;"> 
<!-- SIDEBAR -->
<?php include("includes/student-types.php"); ?>

</div>
<!-- /five columns omega --> 
<!-- END TOP SIDEBAR-->

<div style="display:inline; float:left;"> 
	<dl class="eleven columns alpha">
		<br>
        <h2><strong>Registration Begins March 6</strong></h2>
        <em><h4>Graduate on time (or early)!</h4></em>
        <p>Visiting students from other colleges and universities must first <a href="visitingstudents">apply to UMBC</a> and be admitted before you can register.</p>


        <h5><strong>Summer Session Dates</strong></h5>
        <table class="f-dates">
          <tr>
            <td>Session</td>
            <td>Start Date</td>
            <td>4 Weeks Ends</td>
            <td>6 Weeks Ends</td>
            <td>8 Weeks Ends</td>
            <td>12 Weeks Ends</td>
          </tr>
          <tr>
            <td>I</td>
            <td>May 30</td>
            <td>June 23</td>
            <td>July 07</td>
            <td>July 21</td>
            <td>August 18</td>
          </tr>
          <tr>
            <td>II</td>
            <td>July 10</td>
            <td>August 04</td>
            <td>August 18</td>
            <td></td>
            <td></td>
          </tr>
        </table>
        <br><br>
<br>


</dl>

</div>
</div>
</div>     
</div> 

<footer id="site-footer" class="clearfix">
  <?php include("includes/footer.php"); ?>
  <?php include("includes/social.php"); ?>
  <?php include("includes/tracking.php"); ?>
</footer>
<!-- container --> 

<script src="//code.jquery.com/jquery-1.12.0.js"></script> 
<script src="//code.jquery.com/jquery-migrate-1.3.0.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<script src="js/scripts.js"></script> 
<script src="js/jquery.magnific-popup.js"></script> 
<script src="js/popup.js"></script> 
<script src="js/jquery.cbpFWSlider.js"></script> 
<script>
$( function() {
    var isPaused = false;
    $( '#cbp-fwslider' ).cbpFWSlider()
      .on({
        mouseenter: function() { isPaused = true; },
        mouseleave: function() { isPaused = false; }
                        });

    setInterval(function() {
        if (isPaused) return; // do nothing when paused

        if(jQuery('.cbp-fwnext').css('display') != 'none')
            jQuery('.cbp-fwnext').click();
        else
            jQuery('.cbp-fwdots span:first-child').click();
    }, 5000);
});
</script> 
<script>
$('#cbp-fwslider').on('click', function() {
  ga('send', 'event', 'slider', 'slide', {'nonInteraction': 1});
});
$('#slide1').on('click', function() {
  var slideID = document.getElementById('slide1');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide1', slideURL);
});
$('#slide2').on('click', function() {
  var slideID = document.getElementById('slide2');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide2', slideURL);
});
$('#slide3').on('click', function() {
  var slideID = document.getElementById('slide3');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide3', slideURL);
});
$('#slide4').on('click', function() {
  var slideID = document.getElementById('slide4');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide4', slideURL);
});
$('#slide5').on('click', function() {
  var slideID = document.getElementById('slide5');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide5', slideURL);
});
</script>
</body>
</html>