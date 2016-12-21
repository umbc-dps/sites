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

<style>
#mobile-site-menu-expander{display:none}
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
     
     
     <br>

<h4 style="text-align:center">The Universities at Shady Grove (USG) Open House is taking place<br> <strong>Saturday, October 29th</strong> from <strong>8:30am-12:00pm.</strong></h4>

<br>

<h4 style="text-align:center">8:30am: Check-in (Building II)<br>
9:00am: Welcome (Building II)<br>
9:30am-12:00pm: Open House & Information Fair<br> (Camille Kendall Academic Center; Building III)</h4>

<br>

<ul>
  <li>Visit with our Program Directors! At the USG Open House, you will have an opportunity to meet and discuss your next steps in the transfer process with our <strong>History, Political Science, Psychology,</strong> and <strong>Social Work Program Directors</strong>.  </li>
  <li>Interested in applying to one of UMBC-Shady Grove's undergraduate programs for Spring 2017? Meet with Chelsea Moyer, Program Coordinator, from <strong>10:30am-11:30am (Building III, Room 3211) </strong>to receive assistance in beginning your Common Application!</li>
  <li>Additionally, if you would like in-depth, step-by-step information regarding the transfer process, application, and admission process as well as financial aid and scholarship opportunities, UMBC-Shady Grove will be hosting an <strong>Undergraduate Information Session</strong> on October 29th following the Open House from <strong>12:30pm-1:30pm</strong> in the <strong>Camille Kendall Academic Center (Building III), Room 3156</strong>.</li> 
</ul> 

<p style="text-align:center">
<a href="https://shadygrove.askadmissions.net/Portal/EI/Registration?gid=623577be02fcccb9f145b5a16c1a01b3c9aea7&__utma=251398980.201769580.1471963298.1476384250.1476384257.60&__utmb=251398980.2.10.1476384257&__utmc=251398980&__utmx=-&__utmz=251398980.1476384257.60.11.utmcsr=carousel%7Cutmccn=open%20house%20fall%202016%7Cutmcmd=carousel%20undergrad%20oh&__utmv=251398980.anonymous%20user%7C1=User%20roles=anonymous%20user=1&__utmk=249306948" class="button" target="_blank" style="font-size:150%">RSVP For the General USG Open House</a>
</p>

<p style="text-align:center"> 
  <a href="http://www.umbc.edu/shadygrove/visit/infosession" target="_blank" class="button" style="font-size:150%">RSVP to Attend the Info Session</a>
</p>
  
  <h5 style="text-align:center">We look forward to meeting you soon!</h5>
  <p style="text-align:center">Please plan to park in the Traville Gateway Garage. You may access a map of directions <a href="http://www.shadygrove.umd.edu/about-usg/directions-transportation" target="_blank">here</a>.</p>
     
     
     
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

 
</body>
</html>