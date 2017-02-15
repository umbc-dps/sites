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
<meta property="og:url" content="http://www.umbc.edu/shadygrove/visit/index" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Opportunities for prospective Undergraduate and Graduate students to attend information sessions and meet the faculty." />


<link href="../css/styles-ug.css" rel="stylesheet">
<link href="../css/accordion-ug.css" rel="stylesheet">
<link href='../css/magnific-popup.css' rel='stylesheet'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="..js/modernizr.custom.js"></script>
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

a.button{font-size:10pt}
.divider{border-right:1px solid #000; }
.seven{padding: 25px;}

@media 
only screen and (max-width: 1023px),
(min-device-width: 800px) and (max-device-width: 1023px)  {
	.divider{
	border-bottom:1px solid #000; 
	border-top:none; 
	border-left: none;
	border-right:none
	}
	.seven{padding: 0px;}
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
<a href="../index">
<h1 class="remove-bottom">Visit Us</h1>
</a>
  </div>
    <div class="sixteen columns" style="padding-top:1em;">   
    <div id="accordion">
      <div class="content" style="text-align:center">
      
     <!-- Start Content -->  

<div class="ug">
	<h3><strong>Undergraduate Events</strong></h3>

<p>All in-person sessions will be held in the Camille Kendall Academic Center (Building III).<strong> <br>
For a campus map, directions and parking information, please click <a href="http://shadygrove.umd.edu/about-usg/directions-transportation" target="_blank">here</a>.</strong></p>

<p>If you have questions, please contact: Chelsea Moyer at 301-738-6184. </strong></p>


	<div class="accordionheader">
		<h4>Prospective Undergraduate In-Person Information Sessions<i class="fa fa-angle-down"></i></h4>
	</div>
    
	<div class="accordionbody">
<p>
	Tuesday, February 21, 11:00am<br>
    Friday, March 24, 1:00pm<br>
	Saturday, April 22: 12:30pm<br>
	Thursday, May 18, 3:00pm<br>
	  <br>
	  <a href="infosession" target="_blank" class="button btn-sm">
	    Info Session RSVP</a></p>
</div>


	<div class="accordionheader">
		<h4>Visit with Undergraduate Program Directors<i class="fa fa-angle-down"></i></h4>
	</div>
    
	<div class="accordionbody">
<p>
		<strong>History:</strong><br>
		Thursday, February 23, 5:00pm<br>
		Wednesday, April 12, 1:00pm</p>      
	<p>
    	<strong>Political Science:</strong><br>
		Wednesday, February 8, 12:00pm<br>
		Wednesday, February 15, 12:00pm<br>
		Wednesday, February 22, 12:00pm<br>
		Wednesday, March 1, 12:00pm</p>  
	
    <p>
        <strong>Psychology:</strong><br>
		Wednesday, February 22, 5:30pm<br>
		Thursday, April 13, 12:30pm<br>
    </p>
	<p>
        <strong>Social Work:</strong><br>
		Tuesday, February 14, 12:00pm<br>	
		Tuesday, March 28, 5:30pm<br>
		Friday, April 28, 12:00pm</p>
  
  <a href="pd" target="_blank" class="button btn-sm"> 
  		
        Visit Undergraduate Program Directors</a>
        
</div>



<div class="accordionheader">
		<h4>Undergraduate Information Session Webinar<i class="fa fa-angle-down"></i></h4>
	</div>
    
	<div class="accordionbody">
<p>
	Thursday, March 16 at 12:00pm</p>
	    
    <a href="https://attendee.gotowebinar.com/register/1618054885695459841" target="_blank" class="button btn-sm">
	    Register here</a>
</div>
       

<hr>
</div>
<h3><strong>Graduate Events</strong></h3>
   
 
<p>All in-person sessions will be held in the Camille Kendall Academic Center (Building III).<strong> <br>
For a campus map, directions and parking information, please click <a href="http://shadygrove.umd.edu/about-usg/directions-transportation" target="_blank">here</a>.</strong></p>

<p>If you have questions, please contact: Rickeysha Jones at 301-738-6285. </strong></p>

	<div class="accordionheader">
		<h4>Industrial/Organizational Psychology Info Session<i class="fa fa-angle-down"></i></h4>
	</div>
    
<div class="accordionbody"> 
<p>    
Check back soon for new opportunities.</p>
</div>

	<div class="accordionheader">
		<h4>Geographic Information Systems Info Session<i class="fa fa-angle-down"></i></h4>
	</div>
    
<div class="accordionbody"> 
<p>    
Tuesday, April 6, 2017, 6-7:30 PM</p>

<p><a href="http://www.umbc.edu/shadygrove/gis/infosession?utm_campaign=infosession_spring17&utm_source=umbc.edu&utm_medium=referral&utm_content=sg_visit_us" target="_blank" class="button btn-sm">
	    Info Session RSVP</a></p>

</div>

	<div class="accordionheader">
		<h4>Cybersecurity Info Session<i class="fa fa-angle-down"></i></h4>
	</div>
    
<div class="accordionbody"> 
<p>    
Tuesday, April 6, 2017, 6-7:30 PM</p>

<p><a href="http://www.umbc.edu/shadygrove/cyber/infosession?utm_campaign=infosession_spring17&utm_source=umbc.edu&utm_medium=referral&utm_content=sg_visit_us" target="_blank" class="button btn-sm">
	    Info Session RSVP</a></p>

</div>

	<div class="accordionheader">
		<h4>Biotechnology Info Session<i class="fa fa-angle-down"></i></h4>
	</div>
    
    <div class="accordionbody"> 
<p>
	Check back soon for more info session opportunities.
</p>
</div>

	<div class="accordionheader">
		<h4>Cybersecurity Talks<i class="fa fa-angle-down"></i></h4>
	</div>
    
    <div class="accordionbody"> 
<p>
	Thursday, February 23, 2017, 6-7:30 PM
    
    <p><a href="http://www.umbc.edu/shadygrove/cyber/talks?utm_campaign=cybertalks_spring17&utm_source=umbc.edu&utm_medium=referral&utm_content=sg_visit_us" target="_blank" class="button btn-sm">
	   Event RSVP</a></p>
    
    
</p>
</div>


</div>


<br clear="all">


</div>
</div>
<br clear="all">



<!-- END Content -->


    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("../includes/footer-ug.php"); ?> 
  <?php include("../includes/tracking.php"); ?> 
  </footer>
	</div>  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="../js/scripts.js"></script> 

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

<script>
/* Creates Hash Functionality */
    var hash2 = window.location.hash.substring(1).replace('%20',' ');
	$( document ).ready(function() {
		ga('send', 'event', 'hash', 'hash', hash2);
	});
	
	$( document ).ready(function() {
        if (hash2 == 'grad') {
			$('.ug').hide();
	}});
</script>
 
</body>
</html>