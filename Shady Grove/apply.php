<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Undergraduate Programs | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Undergraduate and Graduate Admissions." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@uatshadygrove">

<!-- Open Graph data -->
<meta property="og:title" content="Admissions | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/apply" />
<meta property="og:image" content="http://www.umbc.edu/summer/shadygrove/meta.jpg" />
<meta property="og:description" content="Undergraduate and Graduate Admissions." />



<link href="css/styles-ug.css" rel="stylesheet">
<link href="css/accordion-ug.css" rel="stylesheet">
<link href='css/magnific-popup.css' rel='stylesheet'>

<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

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
<h1 class="remove-bottom">Admissions</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
    <!-- Start Content -->   
      <div class="content">
      
      <h2>Undergraduate Admissions</h2>
      <p>UMBC offers eligible transfer students the opportunity to earn a bachelor's degree in history, political science, psychology or social work at the Universities at Shady Grove in Rockville, MD. Students generally complete prerequisite courses and general education courses prior to transfer. UMBC is one of nine University System of Maryland institutions that offer upper-level undergraduate programs at the center.</p>
      <p>UMBC provides a unique environment for students to earn a degree in Montgomery County at The Universities at Shady Grove (USG). Students transferring from regional community colleges or four year institutions will have access to UMBC’s best faculty, dynamic learning environment, and individualized advising without commuting to Baltimore. At The Universities at Shady Grove, UMBC offers you the best of both worlds by providing our reputation in your backyard.  A dynamic mix of talented, engaged, and experienced professors teach students in small classroom sized-settings. Students complete their lower-level courses, including prerequisites and general education requirements and electives at a Maryland community college and their upper-level requirements with UMBC-Shady Grove. Classes are taught by UMBC professors, and students receive a UMBC degree upon graduation.</p>

      <p align="center">
      <a href="http://undergraduate.umbc.edu/apply/shady-grove.php" target="_blank" class="button">Apply as an Undergraduate Student</a>
      </p>

<h2>Graduate Admissions</h2>
	<p>UMBC offers master’s programs in Biotechnology, Cybersecurity, Geographic Information Systems, and Industrial/Organizational Psychology at The Universities at Shady Grove in Rockville, MD.</p>
    <p>Within these disciplines, students are offered a broad array of professionally focused master’s degree and certificate programs that address industry needs while anticipating future opportunities. Taught by highly-experienced practitioners and thought leaders in the field, students acquire the latest knowledge, skills, and preparation required to excel in the workplace. Courses are designed to fit the busy schedule of the working professional and are primarily in-person with select courses offered in hybrid format.</p>
	<p>Prospective students may apply online as a degree seeking, non-degree seeking or certificate student.</p>
      <p align="center">
      <a href="http://gradschool.umbc.edu/admissions/apply/" target="_blank" class="button">Apply as a Graduate Student</a>
      </p>
  
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
  </footer>

	</div>  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/scripts.js"></script> 
<script src="js/jquery.magnific-popup.js"></script> 
<script src="js/popup.js"></script> 

<script>
$( "#accordion" ).accordion({
      heightStyle: "content",
      active: false,
      collapsible: true,
      header:"div.accordionheader"
    });
    var hash = window.location.hash;
    var anchor = $('a[href$="'+hash+'"]');
    if (anchor.length > 0){
        anchor.click();
    }
$('h4').click(function() {
	var linkText = $(this).text();
	ga('send', 'event',  'accordion', 'click', linkText);
});
</script> 
 

<?php include("includes/tracking.php"); ?>

<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

</body>
</html>