<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Visit Us | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Opportunities for prospective Undergraduate and Graduate students to attend information sessions and meet the faculty." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@uatshadygrove">

<!-- Open Graph data -->
<meta property="og:title" content="Visit Us | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/visit/infosession" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Opportunities for prospective Undergraduate and Graduate students to attend information sessions and meet the faculty." />


<link href="../css/styles-ug.css" rel="stylesheet">
<link href="../css/event.css" rel="stylesheet">

<script src="../js/modernizr.custom.js"></script>
<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">


<style type="text/css">
@media screen and (min-width:800px) {

html{

	position: relative;

	height:100%;

}

html::after {
  content: "";
  background: url(../images/bg/<?php echo $selectedBg; ?>) no-repeat;
  background-size:cover;
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: fixed;
  z-index: -1;  
  background-attachment:fixed;
}

}

/*Mobile Responsive iFrame*/
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
@media screen and (max-width:799px) {
.videoWrapper2 iframe {height: 275%}
.videoWrapper2 {margin-bottom: 275%}
}
</style>



</head>
<body>
<div id="full-page">
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("../includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php //include("../includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading">
<a href="index">
<h1 class="remove-bottom">Undergraduate Info Session</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
    <!-- Start Content -->   
      <div class="content">
		<div class="videoWrapper2">
			<iframe src="https://docs.google.com/forms/d/1lY86-enrQxgjxPER70wCOvBnt0vlqVHItBM37312F2o/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
		<br>
	  </div>
	</div>
      	<!-- END Content -->


    <!-- /eleven columns -->
    <div class="four columns omega"> 
    <!-- SIDEBAR --> 
      <?php include("../includes/ss-sidebar.php"); ?>
    <!-- /five columns  --> 


    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("../includes/footer-ug.php"); ?> 
  <?php include("../includes/tracking.php"); ?> 
  </footer>
	</div>  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="../js/scripts.js"></script> 
 
</body>
</html>