<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="google-site-verification" content="iNv2dm65X5VqSZjqdgzOM8zkHZU8bwycQ0ihWPQU3QA" />
<title>Winter Programs at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="View Dates and Courses for UMBC's 2016 Winter Session here!" />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Winter Programs at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/index" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/umbcsummer.jpg" />
<meta property="og:description" content="View Dates and Courses for UMBC's 2016 Winter Session here!" />

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
      <?php // include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
  <div  id="summer-heading">
    <a href="index"><h1 class="remove-bottom">Winter Session 2016</h1></a>
  </div>
  <div class="sixteen columns">
    <div class="eleven columns alpha" style="padding-top:1em;">
      <div id="cbp-fwslider" class="cbp-fwslider">
        <ul>
        
 
 
 <!-- Slide One  -->

<li id="slide1">

<a href="#"><img src="images/8.png" alt="img03" target="_blank"></a>

<div class="carousel-caption wordwrap">
    
<h3>Winter 2016 Has Concluded</h3>
<small>Thank you to all those who attended, and we invite you to join us again for Winter Session 2017!</small>
            
<!--
<p><a href="importantdates" role="button" class="web-seemore" target="_blank">Learn more</a></p>
-->

</div>

<p id="captiontwo"><a href="#" target="_blank">Winter 2016 Has Concluded</a></p>
          
</li>

          
<!-- END Slide One -->   
         
          
</ul>

        <div id="dotcontainer"></div>
      </div>
      <!-- /cbp-fwslider --></div>
    <!-- /eleven columns -->
    <div class="five columns omega" style="float:right;"> 
      <!-- SIDEBAR --> 
      <?php include("includes/student-types.php"); ?>
    <!-- /five columns omega --> 
    <!-- END TOP SIDEBAR-->
    <div style="display:inline; float:left;"> 
      <!-- NEW ROW -->
 
      <h2>Winter Session 2017</h2>
      
      <dl class="eleven columns alpha">
      <h4>Winter 2017 is January 3 - 27</h4>
      <p>Please check back in mid-September for updated information.</p>
<br>





 
</dl>
</div>

  <footer id="site-footer" class="clearfix">
    <?php include("includes/footer.php"); ?>
    <?php include("includes/tracking.php"); ?>
  </footer>
<!-- container --> 

<script src="//code.jquery.com/jquery-1.12.0.js"></script> 
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

</body>

<script>
function show_hide_me () {
  var myDate = new Date();
  var hour = myDate.getHours();
  var date = myDate.getDate();
  var month = myDate.getMonth();
  var minute = myDate.getMinutes()
    if (month == 11 && date <= 22){
       $('.remove').show();
	   $('.show').hide();
    } else {
       $('.remove').hide();
	   $('.show').show();
    }

 }

show_hide_me();
</script>


</html>