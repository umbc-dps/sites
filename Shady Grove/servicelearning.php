<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Service Learning | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Service learning at UMBC Shady Grove." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Service Learning | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/servicelearning" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="Service learning at UMBC Shady Grove." />


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
<h1 class="remove-bottom">Service Learning</h1>
</a>
</div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
    <!-- Start Content -->   
      <div class="content">
      <h4>Getting Started</h4>
<p>Service-Learning engages students in weekly service with a designated service placement.  Through this sustained partnership, students build relationships with those whom they serve.  Service-Learning also allows students the opportunity to engage in formal and informal reflections on their service, which enables students to connect their service with their learning.  </p>
<p> Participating in service-learning through the Shriver Center enhances a  student&rsquo;s resume and their contribution also appears on their official academic  transcript. Every student who participates in service-learning receives a zero  credit practicum notation on their transcript to reflect their semester of  engagement in the community. With structured opportunities to reflect upon  service, students are able to learn through an exchange of experiences while  providing quality service to the community.</p>
  <h6>Step  1:</h6>
  <p>Become familiar with some of our service sites and form an idea of what  kind of organization you are interested in serving. Please also read <a href="documents/PoliciesofProfessionalConductforStudents.pdf" target="_blank">Policies of Professional Conduct for Students</a></p>
  <h6>Step 2:</h6><p> Contact  the placement representative to determine if the placement is a good fit for  you.</p>
  <h6>Step 3:</h6>
  <p> If you  and the placement representative decide to move forward with the partnership,  contact Ashley Waters at <a href="mailto:awaters@umbc.edu">awaters@umbc.edu</a> to discuss your interests and sign up for service. Service enrollment includes signing up for  the 096 Practicum, a zero-credit course that is graded Pass/Fail. The 096 Practicum will appear on your  official academic transcript, acknowledging your participation in a  university-sanctioned service placement.</p>
  <h6>Step 4:</h6><p> Reconnect  with your site supervisor and begin service! Your supervisor may be a staff  member or volunteer coordinator at the community organization. Additionally,  some organizations require you to take additional steps before you are able to  serve, such as completing a volunteer application, background check, or health  clearance.</p>
  <h6>Step 5:</h6><p> Complete  the necessary requirements throughout the semester and contact Ashley Waters  with any questions along the way.</p>    
  
<h4>Service Learning Forms and Placements</h4>
<ul>
<li><a href="documents/prac096registration.pdf" target="_blank">PRAC 096 Registration Form</a></li>
<li><a href="documents/prac096syllabus.pdf" target="_blank">PRAC 096 Syllabus</a></li>
<li><a href="documents/goalsexpectations.pdf" target="_blank">PRAC 096 Expectations and Learning Objectives Form</a></li>
<li><a href="documents/servicelearningtimesheet.pdf" target="_blank">Service Learning Timesheet</a></li>
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