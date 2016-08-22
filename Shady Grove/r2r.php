<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>R2R | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC Shady Grove's transfer access process." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="R2R | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/r2r" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="UMBC Shady Grove's transfer access process." />


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

.alumni div { float: left; width: 31%; text-align: center; }

	@media 
	only screen and (max-width: 1023px),
	(min-device-width: 800px) and (max-device-width: 1023px)  {
	
.alumni div { display: block; width: 98%; height: 200px; padding-bottom:10px; text-align:center}
.alumni div:hover { background-size: cover; }
	}
	
.module {
  background: 
    linear-gradient(
      rgba(0, 0, 0, 0.6),
      rgba(0, 0, 0, 0.6)
    ),
    url('http://umbc.edu/isd/images/current/advising.jpg');
  background-size: cover;
  height: 200px;
  position: relative;
  float: left;
  margin: 1%;
}

.module:hover{
  background: 
    linear-gradient(
      rgba(0, 0, 0, 0),
      rgba(0, 0, 0, 0)
    ),
	url('http://umbc.edu/isd/images/current/advising.jpg');
}
	

.mid h4 {
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  color: white;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);
}

#mobile-site-menu-expander{display:none}
.accordionheader{background-color: transparent!important; margin-top:8px; margin-left:20px; margin-right:40px;}
.accordionbody{margin-left:60px; margin-right: 40px;}
.accordionheader h4{font-weight:normal}
i, .ui-state-active i{float:left!important; margin-right:15px}
.benefits{background-color:#FAC02C; padding: 15px}

.btn3 {
  -webkit-border-radius: 20;
  -moz-border-radius: 20;
  border-radius: 20px;
  color: #FAC02C !important;
  background-color: #000;
  padding: 25px 30px 25px 30px;
  font-size: 12pt;
  text-decoration: none;
  font-weight:bold;
}
.btn3:hover {
  color: #FFF !important;
  text-decoration: none;
}
.btn4 {
  -webkit-border-radius: 20;
  -moz-border-radius: 20;
  border-radius: 20px;
  color: #000 !important;
  background-color: #FAC02C;
  padding: 25px 30px 25px 30px;
  font-size: 12pt;
  text-decoration: none;
  font-weight:bold;
}
.btn4:hover {
  color: #FFF !important;
  text-decoration: none;
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
<a href="index">
</a>
    <div class="sixteen columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
    <!-- Start Content -->   
    <br>
    <br>
    
  </p>
  <h3 style="text-align:center">
    <a href="index">
      <img src="images/header3.png" alt="Open House" style="width:100%;">
      </a></h3>

  <p><strong>Raptor to Retriever (R2R) is a transfer access program designed to streamline the transfer process between MC and UMBC-Shady Grove.  The program offers students a structured pathway for attaining an associate degree and a baccalaureate degree. </strong></p>

<div class="benefits">
    <h3>Program Benefits</h3>
    <p>Upon acceptance into one of UMBC's programs at USG, students who complete all program requirements will receive the following benefits:</p>
    <ul>
      <li>UMBC admissions application fee waiver</li>
      <li>Priority UMBC-Shady Grove new student orientation program registration</li>
      <li>Priority UMBC-Shady Grove pre-orientation advising and first semester course registration</li>
      <li>Membership in the R2R Peer Network </li>
      <li>Purple and gold graduation cords to wear at UMBC graduation </li>
      <li>Student-focused and success-driven programming and applied learning opportunities</li>
    </ul>
    <p><em><strong>Note:</strong> Students must adhere to all UMBC admissions procedures and UMBC-Shady Grove program specific requirements.</em></p>
    </div>

    <hr style="height:4px;border:none;color:#333;background-color:#333;" />

  <h3>Admission Requirements</h3>
  <ul>
    <li>Completed Application (Fall deadline: June 15; Spring deadline: November 15)</li>
    <li>Minimum 2.0 MC GPA with an indicated interest in one of UMBC’s four undergraduate programs offered at USG: <a href="history" target="_blank">History</a>, <a href="politicalscience" target="_blank">Political Science</a>, <a href="psychology" target="_blank">Psychology</a>, and/or <a href="socialwork" target="_blank">Social Work</a></li>
    <li> Earned 12-36 credits by the end of the semester of application</li>
    <li>Additional selection criteria (i.e. level of commitment to program and professional/academic/co-curricular involvement) will be used and garnered through the application process</li>
  </ul>
  <br clear="all">
  
  <p align="center">
    <a href="https://docs.google.com/forms/d/1PSRkMHXm5dVisMvNxJICeX_xsAYV-ZhJFyvCcLCwtHs/viewform?c=0&w=1&usp=mail_form_link" target="_blank" class="btn3">APPLY TO R2R HERE!</a></p>
        <br clear="all">
        
    <hr style="height:4px;border:none;color:#333;background-color:#333;" />
  <h3>Program Requirements</h3>
  <ul>
    <li>Signed and completed individualized Success Agreement (SA)</li>
    <li>Completion of required modules, events, and  trainings</li>
    <li>Semesterly advising sessions with MC and UMBC  representatives</li>
    <li>Fall Retreat</li>
    <li>Three workshops (at least one must be  USG-offered)</li>
    <li>Completion of an Associate Degree from MC with a  minimum cumulative GPA of 2.0</li>
  </ul>
  <p><br>
    <hr style="height:4px;border:none;color:#333;background-color:#333;" />
    
    <br>
  </p>
  <p align="center">
    <a href="mailto:R2R@umbc.edu" class="btn4">Contact Us: R2R@umbc.edu</a>
  </p>
  <p><br clear="all">
  </p>
</blockquote>
    </div>
</div>
</div>

	<!-- END Content -->


    <!-- /eleven columns -->
    <div class="four columns omega"> 

    <!-- /five columns  --> 


    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("includes/footer-ug.php"); ?> 
  <?php include("includes/tracking.php"); ?> 
  </footer>
	</div>  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="js/scripts.js"></script> 
 
</body>
</html>