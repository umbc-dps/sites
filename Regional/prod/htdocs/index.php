<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en';
?>

<!DOCTYPE html>
<html>
<head>

<title>UMBC's Regional Graduate Tuition Rate</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC is introducing new tuition benefits for select graduate programs for students living out-of-state. Our goal is to provide a new regional graduate tuition rate so that people like you can earn their graduate degree from UMBC and receive in-state tuition rates, while living over the Maryland line." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@umbc_dps">

<!-- Open Graph data -->
<meta property="og:title" content="UMBC's Regional Graduate Tuition Rate" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://regional.umbc.edu" />
<meta property="og:image" content="http://professionalprograms.umbc.edu/images/3.jpg" />
<meta property="og:description" content="UMBC is introducing new tuition benefits for select graduate programs for students living out-of-state. Our goal is to provide a new regional graduate tuition rate so that people like you can earn their graduate degree from UMBC and receive in-state tuition rates, while living over the Maryland line." />

<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700,900' rel='stylesheet' type='text/css'>
<link href="includes/styles.css" rel="stylesheet">
<link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>

<?php include("includes/tracking.php"); ?> 
<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<style>
.programs li{
	margin:0px;
	list-style-type:none!important;
	margin-left:0px!important;
	padding:6px;
	font-size:11pt!important;
	border-bottom:1px #CCC solid;
}
.programs li:hover{
	background-color:#FFCC00;
}
.programs li:hover a{
	color: #000!important;
}
.programs a li{
	text-decoration:none!important;
}
.programs a{
	text-decoration:none!important;
}
.details {
	font-size:11px;
	padding-bottom:6px;
	font-weight:normal;
	padding-top:0px;
	line-height:11px;
	margin-top:0;
	}

.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
select#program[hidden]{display:block}
.programlabel{display:block}
select#program option.not-pro, select#program option.usg{display:none}
.five td { padding-bottom:10px;}
.five td select, .five td input, .five td textarea {width:90%!important}
.five iframe{transform:scale(0.85);-webkit-transform:scale(0.85);transform-origin:0 0;-webkit-transform-origin:0 0;}
.five label{font-weight:bold}
.five td input[type=submit]{margin-left:15%}
</style>

</head>

<body>
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <div id="container-header"><!-- main container -->
    <header id="umbc-header"><!-- umbc header -->
      <div id="umbc-logo"><a href="http://umbc.edu" title="UMBC: An Honors University in Maryland"><span>UMBC: An Honors University in Maryland</span></a></div>
      <nav role="navigation" id="umbc-nav" >
        <ul id="umbc-nav-items">      <li id="umbc-nav-50">
        <a href="http://50.umbc.edu">UMBC50</a>
      </li>
    
      <li id="umbc-nav-azindex">
        <a href="http://umbc.edu/siteindex">A-Z Index</a>
      </li>


      <li id="umbc-nav-myumbc">
        <a href="http://my.umbc.edu">myUMBC</a>
      </li>


      <li id="umbc-nav-events">
        <a href="http://my.umbc.edu/events">Events</a>
      </li>


      <li id="umbc-nav-directory">
        <a href="http://umbc.edu/search/directory">Directory</a>
      </li>


      <li id="umbc-nav-maps">
        <a href="http://about.umbc.edu/visitors-guide/campus-map">Maps</a>
      </li>
        </ul>
        <form role="search" id="umbc-nav-search" action="http://www.umbc.edu/stats/searchthru/" method="get">
          <div id="umbc-nav-search-input">
            <label for="umbc-nav-search-query">Search UMBC</label>
            <input type="hidden" name="cx" value="008589878477221853669:fglxypz-c8m" />
            <input type="hidden" name="ie" value="UTF-8" />
            <input id="umbc-nav-search-query" type="text" placeholder="Search" autocomplete="off" name="q" size="250" maxlength="250">
            <input id="umbc-nav-search-submit" type="submit" value="">
          </div>
        </form>
      </nav>
    </header>
    <header role="banner" id="site-header" > <a href="#" id="mobile-site-menu-expander"> <span class="mobile-site-menu-expander-bar"></span> <span class="mobile-site-menu-expander-bar"></span> <span class="mobile-site-menu-expander-bar"></span> </a> </header>
  </div>
  <!-- END umbc header -->
  <div id="site-menu-background" style="background-color:#FFCC00;">
    <nav role="navigation" id="site-menu"><!-- gold toolbar -->
    <div style="width:100%; background-color:#FFCC00; height:30px">
    </div>
    </nav>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- 
BEGIN MAIN
-->
<div class="container column" id="main">
  <div  id="pp-heading">
     <a href="http://umbc.edu/dps"><img src="images/logo.png" alt="UMBC Regional Tuition Rate" class="scale-with-grid first-child last-child" style="margin-top:10px; width:80%"></a>
</div>
  <div class="sixteen columns">
    <div class="eleven columns alpha" style="padding-top:1em;">
      <div id="cbp-fwslider" class="cbp-fwslider">
        <ul>

<!-- SLIDE ONE -->

<li id="slide1">

<img src="images/graduation.jpg" alt="UMBC Regional Tuition Rate"/>

<div class="carousel-caption wordwrap" style="width: 38%; left:0px; height:65%; margin-top:20px; padding-top:25px;">
<h3 style="margin-bottom:-15px;">Announcing New Regional Graduate Tuition Rate</h3>
<small>Starting Fall 2017, those in DC, Virginia, Delaware & Pennsylvania may qualify to pay a lower tuition rate.</small>

</div>

<!--
<p><a href="http://umbc.edu/openhouse?utm_campaign=openhouse_spring17&utm_source=umbc.edu&utm_medium=referral&utm_content=pp_carousel" role="button" class="web-seemore" target="_blank">Save Your Spot!</a></p></div>
-->

<p id="captionthree"><a href="#">Announcing New Regional Tuition Rate</a></p>

</li>

<!---- END SLIDE ONE ---->

<!-- SLIDE TWO --

<li id="slide2">

<a href="https://lieu.house.gov/media-center/press-releases/congressman-lieu-welcomes-senior-brookings-fellow-diana-parr-dc-team" target="_blank">
<img src="images/DianeParr.jpg" width="640" height="370" alt=""/></a>

<div class="carousel-caption-right wordwrap">
<h3>Congressman Welcomes Diana Parr to DC</h3>
<small>Diana Parr, adjunct instructor for the Cybersecurity Graduate Program was selected to join Congressman Ted W. Lieu's legislative team in Capitol Hill.</small>

<p><a href="https://lieu.house.gov/media-center/press-releases/congressman-lieu-welcomes-senior-brookings-fellow-diana-parr-dc-team" role="button" class="web-seemore" target="_blank">Find Out More</a></p></div>

<p id="captionthree"><a href="https://lieu.house.gov/media-center/press-releases/congressman-lieu-welcomes-senior-brookings-fellow-diana-parr-dc-team" target="_blank">Congressman Lieu Welcomes Diana Parr to DC Team</h3>
</a></p>

</li>

---- END SLIDE TWO ----> 
              

              

  
        </ul>
        <div id="dotcontainer"></div>
      </div>
      <p class="clearfix">UMBC is introducing new tuition benefits for select graduate programs for students living out-of-state. Our goal is to provide a new regional graduate tuition rate so that people like you can earn their graduate degree from UMBC and receive in-state tuition rates, while living over the Maryland line. UMBC is focused on accessibility and affordability. See the listing below for participating programs.</p>
      
      <p>Maryland tuition rates will be applicable to students living in DC, Delaware, and select counties in Virginia and Pennsylvania starting fall 2017. Any resident of the District of Columbia or Delaware is eligible. For Pennsylvania, the rate applies to residents of Adams, York, and Lancaster counties. For Northern Virginia, the rate applies to residents of Arlington, Clarke, Culpeper, Fairfax, Fauquier, Loudoun, Prince William, Rappahannock, Spotsylvania, Stafford, and Warren counties and the cities of Alexandria, Fairfax, Falls Church, Fredericksburg, Manassas, and Manassas Park.</p>
      
      <h3><strong>Applicable Programs:</strong></h3>
      <hr>

      
<div class="programs" style="margin-top:-30px">
      <ul>
        <a href="http://www.umbc.edu/biotech/costs.php" target="_blank"><li>Biotechnology</li></a>
        <a href="http://www.umbc.edu/cyber/costs.php" target="_blank"><li>Cybersecurity</li></a>
        <a href="http://www.umbc.edu/shadygrove/cyber/costs.php" target="_blank"><li>Cybersecurity at Shady Grove</li></a>
        <a href="http://www.umbc.edu/engm/costs.php" target="_blank"><li>Engineering Management</li></a>
        <a href="http://www.umbc.edu/shadygrove/gis/costs.php" target="_blank"><li>Geographic Information Systems</li></a>
        <a href="http://www.umbc.edu/hit/costs.php" target="_blank"><li>Health Information Technology</li></a>
        <a href="http://www.umbc.edu/shadygrove/io/costs.php" target="_blank"><li>Industrial/Organizational Psychology</li></a>
        <a href="http://www.umbc.edu/se/costs.php" target="_blank"><li>Systems Engineering</li></a>
        <a href="http://techm.umbc.edu/costs.php" target="_blank"><li>Technical Management</li></a>
      </ul>
</div>

<p><strong>Note:</strong> The regional tuition rate cannot be applied retroactively or to any semester prior to August 2017.</p>
</div>

<!--- SIDEBAR --->

<div>
<?php include("includes/sidebar.php"); ?>      
</div>
  
<!--- END SIDEBAR --->
<br>
<!--- END FOOTER --->

</div>
  <footer id="site-footer" class="clearfix" style="font-size:8pt">
  
                <center>
     <a href="http://twitter.com/umbc_dps" target="_blank"><img src="images/twitter.png" alt="twitter" width="25" height="25"></a> 
     
     <a href="http://facebook.com/UMBCProfessionalGradPrograms" target="_blank"><img src="images/facebook.png"  width="25" height="25" alt="facebook"></a> 
     
     <a href="https://www.youtube.com/channel/UCLVsMMEHLDtrRaDaZrkiSNA" target="_blank"><img src="images/youtube.png" alt="YouTube"  width="25" height="25"></a> 
     
     <a href="http://my.umbc.edu/groups/dps" target="_blank"><img src="images/myUMBC.png" alt="myUMBC" height="25"></a></center>    <p>&copy; <script>document.write(new Date().getFullYear())</script> UMBC Division of Professional Studies · 
      1000 Hilltop Circle, Sherman Hall East 4th Floor, Baltimore, MD 21250 · 410-455-2336 ·  Email: <a href="mailto:dps@umbc.edu">dps@umbc.edu</a><br>
      <a href="http://www.umbc.edu/dps/locations">Locations</a> · <a href="http://www.umbc.edu/dps/departments">DPS Departmental Pages</a> · <a href="http://www.umbc.edu/dps/staffdirectory">DPS Staff Directory</a>      <br>
</p>
      

  </footer>
</div></div>
<!-- container --> 
<script>
	var programname = "pro";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<!-- Because of subdirectory, Professional Programs cannot reference DPS -->
<script>$( "#form" ).load( "includes/contact-form.php" );</script>
<script>$( "#sidebar-contact" ).load( "includes/contact-form.php .mini-form" );</script>
<script>$( "#contents" ).load( "includes/program-info.php" );</script>



<script src="http://umbc.edu/dps/js/scripts.js"></script> 
<script src="http://umbc.edu/dps/js/jquery.cbpFWSlider.js"></script>
<script src="includes/jquery.magnific-popup.js"></script>
<script src="includes/popup.js"></script>

<script>$.getScript("http://umbc.edu/dps/js/changeprogram.js")</script>
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>


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

<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>
  
</body>
</html>