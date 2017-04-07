<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en';
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Professional Programs at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700,900' rel='stylesheet' type='text/css'>
<link href="includes/styles.css" rel="stylesheet">
<script src="includes/modernizr.custom.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<style>
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper2 {
	position: relative;
	padding-bottom: 150%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe, .videoWrapper2 iframe {
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
@media screen and (max-width:799px) {
.videoWrapper2 iframe {height: 275%}
.videoWrapper2 {margin-bottom: 275%}
}
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
  <div  id="pp-heading"><br><br>


    <a href="http://professionalprograms.umbc.edu"><img src="images/office-logo.png" alt="Office of Professional Programs" class="scale-with-grid first-child last-child"></a>
     </div>
  <div class="sixteen columns">
    <div class="eleven columns alpha" style="padding-top:1em;">
 
 <h3>Orientation</h3>    
<br>

<div class="videoWrapper2">
<iframe src="https://docs.google.com/forms/d/1Zjky_Vda2tWwZ-hBM37tnbrER20Pt1fU-pSPEaxk6R8/viewform?embedded=true" width="760" height="900" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>
      

   </div>


<!--- SIDEBAR --->

<div class="five columns omega add-bottom" style="float:right">
<?php include("includes/sidebar.php"); ?>      
</div>
  
<!--- END SIDEBAR --->


<?php include("includes/footer.php"); ?>
</div></div>

<div id="contents" style="display:none"></div>
 
<!-- end container -->
<script>
	var programname = "pro";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>$( "#form" ).load( "includes/contact-form.php" );</script>
<script>$( "#sidebar-contact" ).load( "includes/contact-form.php .mini-form" );</script>
<script>$( "#contents" ).load( "includes/program-info.php" );</script>

<script src="includes/scripts.js"></script> 
<script src="includes/jquery.magnific-popup.js"></script>
<script src="includes/popup.js"></script> 

<script>$.getScript("http://umbc.edu/dps/js/changeprogram.js")</script>
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>
</body>
</html>