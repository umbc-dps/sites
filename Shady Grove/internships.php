<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Internships | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Internships for UMBC students." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Internships | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/internships" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="Internships for UMBC students." />


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
<h1 class="remove-bottom">Student Resources</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
    <!-- Start Content -->   
      <div class="content">
      <h3>Internships</h3>
<p>UMBC students have the opportunity to step outside the  boundaries of the classroom and experience the real world through internships.  In addition to gaining valuable work experience, many students may also be  eligible to receive upper-level credits in their major. Internships allow students to network with  professionals in their field, which helps in the job search process after  graduation.</p>

<p>To schedule an appointment for assistance with resumes, cover letters, mock interviews, internship placements, and more, contact the USG Career &amp; Internship Services Center at 301-738-6338 or via <a href="mailto:usgcareerservices@umd.edu">e-mail</a>.</p>

<h4>Resources:</h4>
<ul>
	<li><a href="documents/PoliciesofProfessionalConductforStudents.pdf" target="_blank">Policies of Professional Conduct for Students</a></li>
	<li><a href="documents/GettingStartedGuide.pdf" target="_blank">How to Get Started - Introduction to Internships and Research</a><br>
	</li>
	<li>Find an  internship outside of UMBCworks? Convert it to a UMBC internship <a href="documents/InternshipConversionPacket.pdf" target="_blank">here</a>.</li>
	<li>PRAC 98/99 (Internship and Research) Course Forms:</li>
		<ul>
			<li><a href="documents/pracsyllabus.pdf" target="_blank">Syllabus for Summer 2016</a></li>
		</ul>
   </ul>
  
      </div>
    </div> 
	<!-- END Content -->


    <!-- /eleven columns -->
    <div class="four columns omega"> 
    <!-- SIDEBAR --> 
      <?php include("includes/ss-sidebar.php"); ?>
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