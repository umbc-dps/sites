<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GEP Courses | Summer Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Winter session GEP course offerings and requirements." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="We're Flexible | Summer Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/flexible" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="We're flexible!" />


<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<link href="../css/magnetic-popup.css" rel="stylesheet">
<link rel="stylesheet" href="../css/jquery.modal.css" type="text/css" media="screen" />

<!-- Javascript -->
<script src="../js/modernizr.custom.js"></script>


<!-- Favicons -->
<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">


<style>
.accordionheader {color:#000; margin-top:8px; text-align: left;}
.accordionbody {background: transparent; padding-top:10px;}
.accordionbody ul li {list-style:square}
.accordionheader:hover{cursor:pointer}
.accordionheader h4{font-size:24pt; font-weight:bold; padding:5px; line-height:14pt}
</style>

</head>




<body>

<div id="skip-content">
 <a href="#main-content">Skip to Main Content</a>
</div>

<div id="container-header-background">
 <!-- UMBC header -->
   <?php include("../includes/umbc-header.php"); ?>
 <!-- END umbc header -->
 <div id="site-menu-background">
  <!-- gold toolbar -->
   <?php include("../includes/gold-nav.php"); ?>
  <!-- END gold toolbar --> 
 </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
  <div  id="winter-heading">
    <a href="http://www.umbc.edu/summer/specialprograms">
    <h1 class="remove-bottom" id="summer-heading" style="background-color:#FFBD21">
    <img src="../images/specialprograms-baltimore.png" style="width:100%">
    </h1>
    </a>
  </div>


<div class="sixteen columns" style="padding-top:1em;">

   <div class="content">
  <div class="narrowchart">
 <div id="accordion">   
   <!-- Start Content --> 


 <img src="../images/baltimore_xlg.jpg" style="width:98%; padding:5px">
  <h4>Discover Baltimore</h4>
 <p>Baltimore, our “neighbor to the north,” offers wide-ranging opportunities as a living classroom where you can discover many facets of this historic and complex city. Get off campus and engage in hands-on experiential learning by exploring Baltimore’s urban neighborhoods, its rich and complex racial history, architectural heritage and vibrant street culture, museums and civically engaged contemporary art, and diverse musical and literary traditions. Some summer classes will regularly meet downtown in UMBC’s new city classroom near Hollins Market, where you can actively learn and discover first-hand what makes Baltimore such a unique and special city. </p>


<ul><strong>Courses:</strong><br><br>
<li>AFST 100: Introduction to the Black  Experience</li>
<li> AMST 310: Gender and Inequality in America</li>
<li>ANTH 311: Urban Anthropology</li>
<li>ART 216: Studies  in Visual Culture:  Prehistory through  the 1750s</li>
<li>ART 392: Topics  in Art or Media I:  Soundscapes:  Baltimore</li>
<li>GWST 310: Gender and Inequality in America</li>
<li>HIST 411: Service  Learning in Public History:  Explore  Baltimore Heritage</li>
<li>MUSC 333: Race and Jazz</li>
</ul>
</div>  
 
 
     <!-- END Content -->
     
	</div></div>
        
    <!-- /eleven columns -->
	</div>

  </div>

  <footer id="site-footer" class="clearfix">
	<?php include("../includes/footer.php"); ?>
    <?php include("../includes/social.php"); ?>
    <?php include("../includes/tracking.php"); ?>
  </footer>
</div>
<!-- container --> 

<script src="//code.jquery.com/jquery-1.12.0.js"></script> 
<script src="//code.jquery.com/jquery-migrate-1.3.0.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../js/jquery.modal.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/scripts.js"></script> 
<script src="../js/jquery.magnific-popup.js"></script>
<script src="../js/popup.js"></script>
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