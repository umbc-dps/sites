<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Submit Your News! | UMBC Professional Programs</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Has something noteworthy happened that you'd like to share with us? Please use the form below to tell your story & we'll reach out to you to discuss the best outlet to share it." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Submit Your News! | UMBC Professional Programs" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/dps/news" />
<meta property="og:image" content="http://www.umbc.edu/dps/images/noteworthy.jpg" />
<meta property="og:description" content="Has something noteworthy happened that you'd like to share with us? Please use the form below to tell your story & we'll reach out to you to discuss the best outlet to share it." />


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700,900' rel='stylesheet' type='text/css'>
<link href="includes/styles.css" rel="stylesheet">
<script src="includes/modernizr.custom.js"></script>
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

/* #Contact
=================================================== */
table#contact{ width: 90% }
table#contact input[type="text"],  table#contact select#campus{ width: 95%; height:20px; font-size:12pt }
table#contact .other{width: 70%!important}
table#contact td {
	padding: 10px 0px 5px 0px; 
	font-size:12pt
	}
table#contact label { font-weight: bold }


.contact, .alumni-video{display:none!important}
#contact textarea{width:95%!important; height:100px;}
#contact .story_td{height:100px; vertical-align:middle!important}
#contact .story_td em{display:block; font-size:10pt; font-weight:normal}

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


    <a href="http://umbc.edu/dps"><img src="images/dpslogo-tr.png" alt="Division of Professional Studies Home Page" class="scale-with-grid first-child last-child"></a>
     </div>
  <div class="sixteen columns">
    <div class="eleven columns alpha" style="padding-top:1em;">
 
 <h3>Share Your News!</h3>    
<p>Has something noteworthy happened that you'd like to share with us? Please use the form below to tell your story & we'll reach out to you to discuss the best outlet to share it.</p>

<div id="form">
	<form method="post" id="newsform" onsubmit="submitted=true; return redirect(); ga('send', 'event', 'activity', 'submit', 'news_submission');">    
	<?php include("includes/news-form.php"); ?> 
    </form> 
</div>
      

</div>


<hr>


<?php include("includes/footer.php"); ?>
</div></div>
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="includes/scripts.js"></script> 
<?php include("includes/tracking.php"); ?>
<script src="includes/jquery.cbpFWSlider.js"></script> 
<script src="includes/popup.js"></script> 

<script>$.getScript("http://umbc.edu/dps/includes/news-google.js")</script>
<script> 
$( function() {
$( '#cbp-fwslider' ).cbpFWSlider();
$( '#cbp-fwslider' ).cbpFWSlider('interval');
 
} ); 
</script>

<script>
function redirect() {
  window.location.replace("confirm.php");
  return false;
}
</script>



</body>
</html>