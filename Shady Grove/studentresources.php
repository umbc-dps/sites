<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Student Resources | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Helpful resources." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Student Resources | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/studentresources" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="Helpful resources." />


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




	
.module {
  background-size: cover;
  height: 200px;
  position: relative;
  float: left;
  margin: 1%;
}


.organization{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url('images/resources/studentorganizations.jpg');
}
.organization:hover{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
	url('images/resources/studentorganizations.jpg');
}

.career{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url('images/resources/careers.jpg');
}
.career:hover{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
	url('images/resources/careers.jpg');
}

.community{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url('images/resources/servicelearning.jpg');
}
.community:hover{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
	url('images/resources/servicelearning.jpg');
}

.advising{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url('images/resources/advising.jpg');
}
.advising:hover{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
	url('images/resources/advising.jpg');
}

.veterans{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url('images/resources/veteranresources.jpg');
}
.veterans:hover{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
	url('images/resources/veteranresources.jpg');
}

.forms{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url('images/resources/forms.jpg');
}
.forms:hover{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
	url('images/resources/forms.jpg');
}

.success{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url('images/resources/successresources.jpg');
}
.success:hover{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
	url('images/resources/successresources.jpg');
}

.services{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url('images/resources/accommodations.jpg');
}
.services:hover{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
	url('images/resources/accommodations.jpg');
}

.selfserviceportal{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url('images/resources/center.jpg');
}
.selfserviceportal:hover{
  background: 
    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
	url('images/resources/center.jpg');
}

.mid h4 {
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  color: white;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 18pt;
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
      <div class="content">
      
    <!-- Start Content --> 

      <div class="alumni">
        <a href="organizations" style="text-decoration:none;color:#000">
        	<div class="module mid organization">
          		<h4>Student Organizations</h4>
       		</div>
		</a>

        <a href="internships" style="text-decoration:none;color:#000">
        	<div class="module mid career">
          		<h4>Career &amp; Internships</h4>
       		</div>
		</a>


        <a href="servicelearning" style="text-decoration:none;color:#000">
        	<div class="module mid community">
          		<h4>Service Learning &amp; Community Service</h4>
       		</div>
		</a>
	  </div>
      
	<br clear="all"><br>

	  <div class="alumni">
        <a href="advising" style="text-decoration:none;color:#000">
        	<div class="module mid advising">
          		<h4>Advising Resources</h4>
       		</div>
		</a>

	
        <a href="selfserviceportal" style="text-decoration:none;color:#000">
        	<div class="module mid selfserviceportal">
          		<h4>Self-Service Portal</h4>
       		</div>
		</a>


        <a href="forms" style="text-decoration:none;color:#000">
        	<div class="module mid forms">
          		<h4>Forms &amp; Important Contacts</h4>
       		</div>
		</a>
      </div>
      <br clear="all"><br>


      <div class="alumni">
        <a href="studentsuccess" style="text-decoration:none;color:#000">
        	<div class="module mid success">
          		<h4>Student Success Resources</h4>
       		</div>
		</a>


       <a href="veterans" style="text-decoration:none;color:#000">
        	<div class="module mid veterans">
          		<h4>Veterans Resources</h4>
       		</div>
		</a>

        <a href="accommodations" style="text-decoration:none;color:#000">
        	<div class="module mid services">
          		<h4>Support<br>
Services &amp; Accommodations</h4>
       		</div>
		</a>
	</div>
	
	<br clear="all"><br>
    
	<!-- END Content -->
            
</div>
      </div>

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
</div>
  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="js/scripts.js"></script> 
 
</body>
</html>