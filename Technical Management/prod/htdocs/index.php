<!DOCTYPE html>
<html>
<head>

<title>Technical Management at UMBC</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC's Technical Management program provides managers with the skills needed to lead technical teams." />

<?php include("includes/tracking.php"); ?>

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Technical Management at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/dpsstage3/index/" />
<meta property="og:image" content="http://www.umbc.edu/biotech/images/bk.jpg" />
<meta property="og:description" content="UMBC's Technical Management program provides managers with the skills needed to lead technical teams." />

  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>  <link href='css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">
  <script src="js/modernizr.custom.js"></script>
  <link href="images/favicon.ico" rel="shortcut icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">

<link href='http://umbc.edu/dps/css/sf-request-info.css' rel='stylesheet'>
</head>


<body>
  <div id="skip-content">
    <a href="#main-content">Skip to Main Content</a>
  </div>
  <!-- main container -->


  <div id="container-header-background">
    <!-- umbc header -->


    <div id="container-header">
      <?php include("includes/umbc-header.php"); ?>
    </div>
    <!-- END umbc header -->
    <!-- gold toolbar -->


    <div id="site-menu-background">
      <?php include("includes/menu.php"); ?>
    </div>
    <!-- END gold toolbar -->
  </div>
  <!-- BEGIN MAIN -->
  <!-- Page Header -->
  <?php include("includes/header.php"); ?>
  <!-- END Page Header -->


  <div class="eleven columns">
    <div class="cbp-fwslider" id="cbp-fwslider">
      <ul>


<!-- SLIDE ONE -->              

<li id="slide1">

<a href="http://gradschool.umbc.edu/admissions/apply/" target="blank"><img src="images/10.jpg" alt="Apply for Spring 2017"/></a>

<div class="carousel-caption wordwrap">
<h3>Apply for Fall 2017</h3>
<small>Apply by August 1st to start in the Fall.</small>

<p><a href="http://gradschool.umbc.edu/admissions/apply/" role="button" class="web-seemore" target="_blank">Apply Now</a></p></div>

<p id="captionthree"><a href="http://gradschool.umbc.edu/admissions/apply/" target="blank">Apply for Spring 2017</a></p>

</li>

<!-- END SLIDE ONE -->   

</ul>

      <div id="dotcontainer">
      </div>
    </div>
    <!-- START Content -->


    <h3>UMBC Master's of Professional Studies in Technical Management</h3>


    <p>The goal of the program is to develop successful leaders in today’s organization. Our graduates know how to think strategically about leading people in a diverse environment, make sound ethical decisions, and utilize technology to provide a strategic advantage at an appropriate level of risk. In addition, our graduates are prepared to succeed in a rapidly changing world.</p>
	<p>The Technology Management program is built around a core set of six courses that provide the foundational knowledge in leadership, communications, ethics and project management. The core courses are supplemented with technically-oriented courses in entrepreneurship, international project management, and organizational leadership. Students can also earn certificates in systems engineering, and cyber security along with the Master’s degree. </p>

	<h3>Key Benefits</h3>
	<ul>
    <li>Flexible program allows for customizing the degree to suit your career aspirations</li>
    <li>Our industry-based instructors combine their experience with theory to provide a rich classroom experience</li>
    <li>Our small classes are taught with a mix of in-person and online instruction that provides students best of an in-classroom experience while improving work-school life balance.</li>
    </ul>

      <h3>Why UMBC?</h3>
      <ul>
      <li>UMBC is classified by the Carnegie Foundation as a Research University (High Research Activity).</li>
      <li>For six years running (2009-2014), UMBC was ranked #1 in the U.S. News and World Report's list of &quot;national up-and-coming&quot; universities.</li>
      <li>Classes are conveniently offered in the evening on UMBC's main campus, located just five minutes from BWI Airport, with easy access to I-95 and the 695 Beltway.</li>
      </ul>     
      <br clear="all">

    <!-- END Content -->

  
  </div>
  <!-- SIDEBAR -->
  <?php include("includes/sidebar.php"); ?>
  <!-- END SIDEBAR -->
  <!-- Footer -->
  <br clear="all">
<?php include("includes/footer.php"); ?>

  </footer>
  <!-- END footer -->
  <!-- END container -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="js/scripts.js"></script> 
<script src="js/jquery.cbpFWSlider.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>



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

$('#slide6').on('click', function() {
  var slideID = document.getElementById('slide6');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide6', slideURL);
});

$(".cbp-fwnext").on('hover', function() {
  ga('send', 'event', 'slider', 'button', 'next');
});
$(".cbp-fwprev").on('hover', function() {
  ga('send', 'event', 'slider', 'button', 'previous');
});
$(".cbp-fwdots").on('hover', function() {
  ga('send', 'event', 'slider', 'button', 'dots');
});
</script>



<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

<?php include("includes/sf-contact-inputs.php"); ?>

</body>

</html>