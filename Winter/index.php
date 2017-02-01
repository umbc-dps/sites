<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="google-site-verification" content="iNv2dm65X5VqSZjqdgzOM8zkHZU8bwycQ0ihWPQU3QA" />
<title>Winter Programs at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="View Dates and Courses for UMBC's 2016 Summer Session here!" />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Winter Programs at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/index" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/umbcsummer.jpg" />
<meta property="og:description" content="View Dates and Courses for UMBC's 2016 Summer Session here!" />

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
<div id="skip-content"> <a href="#main-content">Skip to Main Content</a> </div>
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
  <div id="winter-heading"> <a href="index.php">
    <h1 class="remove-bottom"> <img src="images/winter-heading.png" style="width:100%"> <!-- Winter Session 2017 --> 
    </h1>
    </a> </div>
  <div class="sixteen columns">
    <div class="eleven columns alpha" style="padding-top:1em;">
      <div id="cbp-fwslider" class="cbp-fwslider">
        <ul>

         <!-- Slide One  -->
          
          <li id="slide1">  <a href="https://new.dineoncampus.com/UMBC/where-to-eat"><img src="images/food.jpg" alt="UMBC Winter Dining" target="_blank"></a>
            <div class="carousel-caption wordwrap">
              <h3>Winter Dining Options & Hours</h3>
              <small>View dining options for Winter Session.</small>
              <p><a href="https://new.dineoncampus.com/UMBC/where-to-eat" role="button" class="web-seemore" target="_blank">Learn more</a></p>
            </div>
            <p id="captiontwo"><a href="https://new.dineoncampus.com/UMBC/where-to-eat" target="_blank">Winter Dining Options & Hours</a></p>
          </li>
          
          <!-- END Slide One --> 
          
          <!-- Slide Two -->
          
          <li id="slide2"> <a href="http://my.umbc.edu/groups/seb/events"><img src="images/1.jpg" alt="Winter Events" target="_blank"></a>
            <div class="carousel-caption-right wordwrap">
              <h3>Winter Session Events</h3>
              <small>UMBC's Student Events Board hosts events all Winter long.</small>
              <p><a href="http://my.umbc.edu/groups/seb/events" role="button" class="web-seemore" target="_blank">Learn more</a></p>
            </div>
            <p id="captiontwo"><a href="http://my.umbc.edu/groups/seb/events" target="_blank">Winter Session Events</a></p>
          </li>
          
          <!-- END Slide Two --> 
          
          
        </ul>
        <div id="dotcontainer"></div>
      </div>
      <!-- /cbp-fwslider --></div>
    <!-- /eleven columns -->
    <div class="five columns omega" style="float:right;"> 
      <!-- SIDEBAR -->
      <?php include("includes/student-types-interior.php"); ?>
    <!-- /five columns omega --> 
    <!-- END TOP SIDEBAR-->
    <div style="display:inline; float:left;"> 
      <!-- NEW ROW -->
      
      <dl class="eleven columns alpha">
        <br>
        <h3><strong>Winter Session 2017</strong></h3>
        <h4>January 3 - 27</h4>
        <p>View your final grades via your <em><a href="http://my.umbc.edu/" target="_blank">myUMBC</a></em> account.</p>
        
        <p>Order official UMBC transcripts through <a href="http://registrar.umbc.edu/services/records/" target="_blank">Parchment Inc.</a>, UMBC&rsquo;s online transcript partner.  Unofficial transcripts can be downloaded and printed through <em>my</em>UMBC.</p>
        
        <p><a href="https://my.umbc.edu/alerts" target="_blank">Sign-up for E2Campus</a>, an emergency alert text-messaging system that notifies subscribers of any campus-related emergency (such as a potential safety hazard or campus closure due to weather).</p>
        
        <p>Be sure to join us again for <a href="http://www.umbc.edu/summer/" target="_blank">Summer Session 2017</a>!</p>
      </dl>
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