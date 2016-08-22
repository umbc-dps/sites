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
      <div class="content" style="text-align:center">
      
     <!-- Start Content -->  
<div class="seven columns divider" style="padding-top:1em;">  
<h3><strong>Undergraduate</strong></h3>

<p>All in-person sessions will be held in the Camille Kendall Academic Center (Building III).<strong> <br>
For a campus map, directions and parking information, please click <a href="http://shadygrove.umd.edu/about/visit" target="_blank">here</a>.</strong></p>

<p>If you have questions, please contact: Chelsea Moyer at 301-738-6184. </strong></p>


<h5><strong>UMBC-Shady Grove<br>
Undergraduate Preview Night</strong></h5>
<p>
Thursday, September 29, 2016, 6 p.m.</p>

 <a href="http://www.umbc.edu/shadygrove/preview/" target="_blank" class="button btn-sm">
	    Preview Night RSVP</a>


<hr>

<h5><strong>Prospective Undergraduate In-Person<br>
Information Sessions</strong></h5>

<p>Wednesday, September 14, 1 p.m. <br>
	Saturday, October 29, 12:30 p.m.<br>
	Thursday, November 17, 3 p.m. <br>
	Tuesday, December 6, 10:30 a.m. <br>
	  <br>
	  <a href="infosession" target="_blank" class="button btn-sm">
	    Info Session RSVP</a></p>
<hr>
<h5><strong>Visit with Undergraduate Program Directors</strong></h5>
<p>
		<strong>History:</strong><br>
		Wednesday, October 5, 12 p.m.<br>
		Tuesday, November 1, 5:30 p.m.</p>      
	<p>
    	<strong>Political Science:</strong><br>
		Wednesday, September 7, 12 p.m. <br>
		Wednesday, September 14, 12 p.m. <br>
		Wednesday, September 21, 12 p.m. <br>
		Wednesday, September 28, 12 p.m. <br>
		Wednesday, October 5, 12 p.m.</p>
	
    <p>
        <strong>Psychology:</strong><br>
		Wednesday, October 12, 4:30 p.m. <br>
		Thursday, November 3, 12 p.m.</p>
	<p>
        <strong>Social Work:</strong><br>
		Wednesday, September 21, 4:30 p.m. <br> 
		Wednesday, November 9, 12:30 p.m.</p>
  
  <a href="pd" target="_blank" class="button btn-sm"> 
  		
        Visit Undergraduate Program Directors</a>
        
        <hr>
        
<h5><strong>UMBC-Shady Grove<br>
Information Webinar</strong></h5>
<p>
Wednesday, October 12, 2016 - 12 p.m.
</p>
 <a href="https://attendee.gotowebinar.com/register/810559248515057154" target="_blank" class="button btn-sm">
	    Webinar RSVP</a>
</div>
<br>

<div class="seven columns" style="padding-top:0.1em;">  
<h3><strong>Graduate</strong></h3>
<p>All in-person sessions will be held in the Camille Kendall Academic Center (Building III).<strong> <br>
For a campus map, directions and parking information, please click <a href="http://shadygrove.umd.edu/about/visit" target="_blank">here</a>.</strong></p>

<p>If you have questions, please contact: Rickeysha Jones at 301-738-6285. </strong></p>

<h5><strong>Industrial/Organizational Psychology</strong></h5>
<strong>Date:</strong> Wednesday, October 19<br>
<strong>Time:</strong> 6 p.m. - 7:30 p.m.<br>
<strong>Location:</strong> Building III-3241<br>
<strong><a href="../io/infosession" target="_blank">RSVP</a></strong>


<p>
<h5><strong>Geographic Information Systems</strong></h5>
<strong>Date:</strong> Saturday, October 1<br>
<strong>Time:</strong> 11 a.m. - 12:30 p.m.<br>
<strong>Location:</strong> Building III-4206<br>
<strong><a href="../gis/infosession" target="_blank">RSVP</a></strong>
</p>
     
<p>
<h5><strong>Cybersecurity</strong></h5>
<strong>Date:</strong> Saturday, October 1<br>
<strong>Time:</strong> 11 a.m. - 12:30 p.m.<br>
<strong>Location:</strong> Building III-4230<br>
<strong><a href="../cyber/infosession" target="_blank">RSVP</a></strong>
</p>
       
<p>
<h5><strong>Biotechnology</strong></h5>
Check back soon for more info session opportunities.
</p>

<br>
</div>


<br clear="all"><br>
<em><strong>UMBC turns 50 on September 19, 2016. <a href="http://50.umbc.edu/" target="_blank">Celebrate with us</a>!</strong></em>

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
  $(function() {
    $( "#tabs" ).tabs();
  });
</script>
 
</body>
</html>