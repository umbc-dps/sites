<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Division of Professional Studies at UMBC Order Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700,900' rel='stylesheet' type='text/css'>
<link href="../includes/styles.css" rel="stylesheet">
<script src="../includes/modernizr.custom.js"></script>
<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
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
.programs li a{
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
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
</head>
<body>
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <div id="container-header"><!-- main container -->
    <header id="umbc-header"><!-- umbc header -->
      <div id="umbc-logo"><a href="http://umbc.edu" title="UMBC: An Honors University in Maryland"><span>UMBC: An Honors University in Maryland</span></a></div>
      <nav role="navigation" id="umbc-nav" >
        <ul id="umbc-nav-items">
          <li id="umbc-nav-azindex"><a href="http://umbc.edu/siteindex">A-Z Index</a></li>
          <li id="umbc-nav-myumbc"><a href="http://my.umbc.edu">myUMBC</a></li>
          <li id="umbc-nav-events"><a href="http://my.umbc.edu/events">Events</a></li>
          <li id="umbc-nav-directory"><a href="http://umbc.edu/search/directory">Directory</a></li>
          <li id="umbc-nav-maps"><a href="http://about.umbc.edu/visitors-guide/campus-map/">Maps</a></li>
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
  <div  id="pp-heading"><br>
    <a href="http://umbc.edu/dps"><img src="../images/dpslogo-tr.png" alt="Division of Professional Studies Home Page" class="scale-with-grid first-child last-child"></a><br>
  </div>
  <div class="sixteen columns">
    <h4>DPS Orders Form
    </h4> 
    <p>&nbsp;</p>
    <p>Thank you for submitting your order. </p>
    <p>If you would like to submit an additional order, please <a href="index.php">click here</a>.</p>
    <p>If you would like to be redirected to the Division of Professional Studies homepage, please <a href="../index.php">click here</a>.</p>
    <hr>


  <footer id="site-footer" class="clearfix" style="font-size:8pt">
  
                <center>
     <a href="http://twitter.com/umbc_dps"><img src="../images/twitter.png" alt="twitter" width="25" height="25"></a> 
     
     <a href="http://facebook.com/UMBCProfessionalGradPrograms"><img src="../images/facebook.png"  width="25" height="25" alt="facebook"></a> 
     
     <a href="https://www.youtube.com/channel/UCLVsMMEHLDtrRaDaZrkiSNA"><img src="../images/youtube.png" alt="YouTube"  width="25" height="25"></a> 
     
     <a href="http://my.umbc.edu/groups/dps"><img src="../images/myUMBC.png" alt="myUMBC" height="25"></a></center> 
     
    <p>&copy; <script>document.write(new Date().getFullYear())</script> UMBC Division of Professional Studies · 
      1000 Hilltop Circle, Sherman Hall East 4th Floor, Baltimore, MD 21250 · 410-455-2336 ·  Email: <a href="mailto:dps@umbc.edu">dps@umbc.edu</a><br>
      <a href="locations.php">Locations</a> · <a href="departments.php">DPS Departmental Pages</a> · <a href="staffdirectory.php">DPS Staff Directory</a>      <br>
</p>
      

  </footer>
</div></div>
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="includes/scripts.js"></script> 
<?php include("includes/tracking.php"); ?>
<script src="includes/jquery.cbpFWSlider.js"></script> 
<script src="includes/popup.js"></script> 
<script> 
$( function() {
$( '#cbp-fwslider' ).cbpFWSlider();
$( '#cbp-fwslider' ).cbpFWSlider('interval');
 
} ); 
</script>
</body>
</html>