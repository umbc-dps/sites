<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Undergraduate Programs | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Undergraduate programs at UMBC." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Undergraduate Programs | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/ug" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="Undergraduate programs at UMBC." />


<link href="css/styles-ug.css" rel="stylesheet">
<script src="js/modernizr.custom.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


<style type="text/css">
@media screen and (min-width:800px) {
html{
	position: relative;
	height:100%;
}
html::after {
  content: "";
  background: url(images/bg/<?php echo $selectedBg; ?>) no-repeat;
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
.programs li{
	margin:0px;
	list-style-type:none!important;
	margin-left:0px!important;
	padding:6px;
	font-size:11pt!important;
	border-bottom:1px #CCC solid;
}
.programs li:hover{
	background-color:#F9B631;
	color: #000!important;
}
.programs a li{
	text-decoration:none!important;
}
.programs a{
	text-decoration:none!important;
}
#usgheading1 {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
	color:#FFF!important;
	position:absolute;
	margin-top:15px;
	padding-left:10px;
	line-height: 1.1em;
	background-color:transparent;
	z-index:2;
}

</style>



</head>
<body>
<div id="full-page">
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php //include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading">
<a href="index">
<h1 class="remove-bottom">Undergraduate Programs</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->

    <!-- END Page Title -->       
      <div class="content">
      
     <!-- Start Content --> 
   
<p>UMBC provides a unique environment for students to earn a degree in Montgomery County at The Universities at Shady Grove (USG). Students transferring from regional community colleges or four year institutions will have access to UMBC&rsquo;s best faculty, dynamic learning environment, and individualized advising without commuting to Baltimore. At USG, UMBC offers you the best of both worlds by providing <em>our reputation in your backyard.</em> A dynamic mix of talented, engaged and experienced professors teach students in small classroom sized-settings. Students complete their lower-level courses, including prerequisites and general education requirements and electives at a Maryland community college and their upper level requirements with UMBC-Shady Grove. Classes are taught by UMBC professors, and students receive a UMBC degree upon graduation.</li> 
  </p>
  
  <h3>Majors</h3>

 <div class="programs">
      <ul>
        <a href="history"><li>History</li></a>
        <a href="politicalscience"><li>Political Science</li></a>
        <a href="psychology"><li>Psychology</li></a>
        <a href="socialwork"><li>Social Work</li></a>                
        
       </ul>
       </div>
       
  <h3>Pre-Admission Programs</h3>

 <div class="programs">
      <ul>
        <a href="http://undergraduate.umbc.edu/apply/tsa-usg.php" target="_blank"><li>Transfer Student Alliance (TSA)</li></a>
        <a href="r2r" target="_blank"><li>Raptor to Retriever (R2R)</li></a>  
       </ul>
       </div>       
<!-- END Content -->
            
</div>
      </div>

    <!-- /eleven columns -->
    <div class="four columns omega"> 
    <!-- SIDEBAR --> 
      <?php include("includes/student-types.php"); ?>
    <!-- /five columns  --> 


    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("includes/footer-ug.php"); ?> 
  <?php include("includes/tracking.php"); ?> 
  </footer>
	</div>
</div>
  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="js/scripts.js"></script> 
 
</body>
</html>