<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Summer STEM at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Summer STEM at UMBC promotes academic success in science, technology, engineering and mathematics." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="About | Summer STEM at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/summer/stem" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/umbcsummer.jpg" />
<meta property="og:description" content="Summer STEM at UMBC promotes academic success in science, technology, engineering and mathematics." />

<link href="../css/styles.css" rel="stylesheet">
<link href="../css/stem-style.css" rel="stylesheet">
<script src="../includes/modernizr.custom.js"></script>
<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
</head>
<body>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("../includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->

	  <?php include("../includes/gold-nav.php"); ?>
         
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading-stem">
  <a href="http://umbc.edu/summer/stem">
    <h1 class="remove-bottom">Summer STEM</h1>
  </a>
</div>  

<div class="sixteen columns">
	<div class="eleven columns alpha" style="padding-top:1em;">
		<div id="cbp-fwslider" class="cbp-fwslider">

<ul>
        
<!-- Slide One -->
         
<li id="slide1">
	<a href="..">
		<img src="../images/reu-workshop-slider.jpg" alt="img02"/>
	</a>
	<div class="carousel-caption-right wordwrap">
		<h3>Summer Session 2017</h3>
		<small>Earn up to 16 credits during Summer Session. Session starts May 30.</small>
		<p>
			<a href=".." role="button" class="web-seemore" target="_blank">Learn More</a>
		</p>
	</div>
  <!-- Update Mobile Content -->
	<p id="captionone">
		<a href="http://www.umbc.edu/summer">
			Summer Session starts May 30
		</a>
	</p>
</li>

<!-- END Slide One -->
                 

<!-- Slide Two --
          
<li id="slide2">
	<a href="http://www.umbc.edu/summer/events#S2">
    	<img src="../images/SURF2014-9228.jpg" alt="img01"/>
	</a> 

	<div class="carousel-caption wordwrap">
		<h3>2016 Summer Undergrad Research Fest (SURF)</h3>
		<small>Students present their summer research in an oral presentations or a poster sessions during this exciting event, taking place on August 10, 2016</small>
		<p>
			<a href="http://surf.umbc.edu/" role="button" class="web-seemore" target="_blank">Learn More</a>
		</p>
	</div>

	<p id="captiontwo">
    	<a href="http://surf.umbc.edu">Summer Undergraduate Research Fest</a>
	</p>
</li>
          
          -- END Slide Two -->
         
</ul>
<div id="dotcontainer"></div>
</div>
      
<!-- /cbp-fwslider -->
</div>
<!-- /eleven columns -->
    
<div class="five columns omega" style="float:right;"> 
<!-- SIDEBAR -->
      <?php include("../includes/stem-menu.php"); ?>
</div>
<!-- /five columns omega --> 
<!-- END TOP SIDEBAR-->

<div style="display:inline; float:left;"> 
	<dl class="eleven columns alpha">
<h3><strong>Summer STEM 2017</strong></h3>
<h6>Summer STEM at UMBC promotes academic success in science, technology, engineering and mathematics by providing high-quality, introductory STEM courses and academic support during UMBC's summer sessions. Summer STEM at UMBC offers the required courses STEM majors need to graduate on time and is open to visiting students, incoming new students, and current UMBC students.</h6>

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

<br>

<p style="font-size:7pt; text-align:center">Summer STEM at UMBC is a collaborative effort between the <a href="http://www.umbc.edu/CNMS/" target="_blank">College of Natural and Mathematical Sciences</a>,<br> and the <a href="http://www.umbc.edu/summer/" target="_blank">Office of Summer, Winter &amp; Special Programs</a>.</p>


        <br><br>
<br>


</dl>

</div>
</div>
</div>     

<footer id="site-footer" class="clearfix">
  <?php include("../includes/footer.php"); ?>
  <?php include("../includes/social.php"); ?>
  <?php include("../includes/tracking.php"); ?>
</footer>
<!-- container --> 


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="../includes/scripts.js"></script> 
<script src="../includes/jquery.cbpFWSlider.js"></script> 
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
</body>
</html>