<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Division of Professional Studies | UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php include("includes/tracking.php"); ?>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
<link href="includes/styles.css" rel="stylesheet">
<link href='includes/magnific-popup.css' rel='stylesheet'>

<style>
#videooverlay {
	position: relative;
	width: 1040px;
	margin: auto
}
#pp-heading {
	background-color: transparent;
	postion: absolute;
	padding-top: 2em;
	margin-left: 2em
}
body {
	background-color: #000;
}
.hero-video {
	position: relative;
	/* padding: 10em 0px; */
	min-width: 100%;
}
#video-container {
	position: absolute;
	top: 50px;
	margin-top: -225px;
	left: 0;
	height: 100%;
	overflow: hidden;
	z-index: -1;
	min-width: 100%;
}
video {
	min-width: 100%;
}
.fillWidth {
	width: 100%
}
/* 1025 breakpoint */
#site-footer {
	position: absolute;
	top: 650px;
	background: #434141;
	margin: 0;
	width: 100%;
	color: #fff;
}
#messages {
	width: 100%;
}
#messages div {
	display: block;
	float: none;

}

 @media only screen and (max-width:40em) {
.heroVideo {
	height: 700px;
	padding: 3rem 0;
	background: url(images/landingSmall.jpg) center top no-repeat;
}
#messages div {
	width: 24%;
	margin: 10px;
	display: inline;
	float: left
}
#videooverlay {width:400px}
}
@media only screen and (min-width:40.063em) and (max-width:64em) {
.heroVideo {
	height: 550px;
	padding: 0 0 6rem 0;
	background: url(images/landingMedium.jpg) center top no-repeat
}
#messages {
	width: 60%;
	margin-left:200px;
}
#messages div {
	width: 20%;
	margin: 10px;
	display: inline;
	float: left;
}
#videooverlay {width:400px; margin-left:26px}
}
@media only screen and (min-width:64.063em) {

div#messages {position: relative; padding-left:10%}

#messages {
	width: 65%;
}
#messages div {
	width: 20%;
	margin: 10px;
	display: inline;
	float: left
}
#pp-heading {
	background-color: transparent;
	postion: absolute;
	top: -400px;
	left: 20px;
}
.heroVideo {
	position: relative;
	padding: 0 0 25em 0
}
.heroVideo #video-container {
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	overflow: hidden;
}
.heroVideo video {
	position: absolute;
	z-index: 0
}
.heroVideo video.fillWidth {
	width: 100%
}
.heroVideo .fill {
	padding-bottom: 10em
}
}

 
 @media screen and (max-width:640px) {
#messages p, #messages h3, #messages ul {
	margin-left: 5px;
	margin-bottom: 1em;
}
#videooverlay h1, #videooverlay h2 {
	width: 400px;
	height: 1em;
	margin-bottom: 5px;
}
#videooverlay {
	width: 400px;
}
#messages {margin-left:10px; }
#messages div {
	display: block;
	float: none;
	margin-right: 10px; 
	width:100%
}
}

#messages p, #messages h3, #messages ul {
	text-align: left;
	list-style: square;
	list-style-position: inside
}
</style>
<script src="includes/modernizr.custom.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>
<body>
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <div id="container-header"><!-- main container -->
    <header id="umbc-header">
    <!-- umbc header -->
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
  <div id="site-menu-background">
    <nav role="navigation" id="site-menu"><!-- gold toolbar -->
      <ul id="menu-main" class="menu">
        <li><a href="http://professionalprograms.umbc.edu">Professional Programs</a></li>
        <li><a href="http://umbc.edu/shadygrove">Universities at Shady Grove</a></li>
        <li><a href="http://umbc.edu/summer">Summer Session</a></li>
        <li><a href="http://umbc.edu/eli">English Language Institute</a></li>
        <li><a href="http://www.umbctraining.com/">Professional Training</a></li>
        <li><a href="http://shrivercenter.umbc.edu">Shriver Center</a>
      </ul>
    </nav>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- 
BEGIN MAIN
<img src="https://clubwproduct.s3.amazonaws.com/videos/landing/landingNew.jpg" ng-src="images/placeholder.jpg" alt="Your browser does not support the <code>video</code> element" height="1080" width="1920"></video>
                <img src="images/placeholder.jpg" ng-src="images/placeholder.jpg" alt="Your browser does not support the <code>video</code> element" class="fill" height="auto" width="100%">
                
                
--> 
<!-- START VIDEO -->
<div class="heroVideo">
  <div id="videooverlay">
    <div id="pp-heading">
      <h1 class="remove-bottom"><img src="images/dpslogo-tr-wh-ds.png"></h1>
		<div style="height:300px;"></div>
      <!-- <p><img src="images/dps-logo.jpg" alt="Division of Professional Studies Home Page" class="scale-with-grid first-child last-child" height="29" width="348"></p>--> 
    </div>
  </div>
  <!-- /pp-heading -->
  <div id="video-container">
    <video autoplay loop class="fillWidth">
      <source src="video/DPS-Site-Video-3-2016.mp4" type="video/mp4">
      <source src="video/DPS-Site-Video-6-2015.ogv" type="video/ogv">
      <source src="video/DPS-Site-Video-3-2016.webm" type="video/webm">
      <img src="images/placeholder.jpg"  alt="Your browser does not support the <code>video</code> element. You should try Firefox." height="1080" width="1920"> </video>
  </div>
</div>
<!-- /VIDEO --> 
<!-- <div class="container column" id="main"> --> 

<!-- </div>/container -->

<footer id="site-footer" class="clearfix">
  <div style="background-color:#000;">
    <div style="margin:auto;" id="messages">
    
      <div>
        <a href="http://professionalprograms.umbc.edu" style="text-decoration:none"><h3 class="home-heading">Professional Programs</h3></a>
      <p>Offering a broad array of professionally focused master’s degrees and post-baccalaureate certificates.</p>
      </div>
     
      <div>
        <a href="http://umbc.edu/shadygrove" style="text-decoration:none"><h3 class="home-heading">The Universities at Shady Grove</h3></a>
       <p>UMBC offers several undergraduate and graduate programs at The Universities at Shady Grove in Rockville, MD.</p>
      </div>
      
       <div>
        <a href="http://umbc.edu/summer" style="text-decoration:none">
        <h3 class="home-heading">Summer Session 2016</h3></a>
       <p>Summer Session is a great way for current, incoming and visiting students to earn credit and move one step toward graduation.</p>
      </div>
      
      <div>
        <a href="http://umbc.edu/eli" style="text-decoration:none">
        <h3 class="home-heading">English Language Institute</h3></a>
        <p>Offering an intensive English program, academic English program, mini-sessions, part-time study, and group programs.
      </div>
      
      <br class="clear">
      
    </div>
  </div>
  <div style="padding-top:1em;">
   <a href="http://twitter.com/umbc_dps" target="_blank"><img src="images/sm-twitter-gold-clear.png" alt="twitter" width="40" height="40"></a>
    <a href="http://facebook.com/UMBCProfessionalGradPrograms" target="_blank"><img src="images/sm-fb-gold-clear.png" alt="facebook"  width="40" height="40"></a>
     <a href="https://www.youtube.com/channel/UCLVsMMEHLDtrRaDaZrkiSNA" target="_blank"><img src="images/sm-yt-gold-clear.png" alt="YouTube"  width="40" height="40"></a>
      <a href="http://my.umbc.edu/groups/dps" target="_blank"><img src="images/sm-myUMBC-gold-clear.png" alt="myUMBC"  width="40" height="40"></a>
       <a href="contact.php" class="video"><img src="images/sm-contact-gold-clear.png" alt="Contact"  width="40" height="40"></a></div>
       
  <p>&copy; 2015 UMBC Division of Professional Studies<br>
    1000 Hilltop Circle, Sherman Hall East 4th Floor, Baltimore, MD 21250 |
    410-455-2336  |  Email: <a href="mailto:dps@umbc.edu">dps@umbc.edu</a><br>
    <a href="locations">Locations</a> | <a href="departments">DPS Departmental Pages</a> | <a href="staffdirectory">DPS Staff Directory</a><br>
    UMBC is an Equal Opportunity and Affirmative Action Institution</p>
</footer>

<!-- container --> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="includes/scripts.js"></script> 


<script src="includes/jquery.magnific-popup.js"></script>
<script src="includes/popup.js"></script> 

</body>
</html>