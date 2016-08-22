<!DOCTYPE html>
<html>
<head>

<title>UMBC-Shady Grove Undergraduate Preview Night | Directions</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Join us for Preview Night to learn important information regarding transfer requirements, application deadlines, scholarships, and financial aid opportunities." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="UMBC-Shady Grove Undergraduate Preview Night | Directions" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/preview/forumdirections2015" />
<meta property="og:image" content="http://umbc.edu/shadygrove/preview2/images/preview-fb.png" />
<meta property="og:description" content="Join us for Preview Night to learn important information regarding transfer requirements, application deadlines, scholarships, and financial aid opportunities." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
<link href="css/accordion.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="js/modernizr.custom.js"></script>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<style>
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.accordionbody { padding-top:5px; }
.accordionbody img { padding: 0px 10px 5px 0px; width: 200px }
.accordionbody ul{ margin-left:25px; }
#mobile-site-menu-expander {display:none}

</style>
</head>
<body>
  <div id="skip-content">
    <a href="#main-content">Skip to Main Content</a>
  </div>

<!-- main container -->
<div id="container-header-background">

<!-- umbc header -->
<div id="container-header">
 <?php include("includes/umbc-header.php"); ?>
</div>
<!-- END umbc header -->

<!-- gold toolbar -->
<div id="site-menu-background">

</div>
<!-- END gold toolbar -->

</div>

<!-- BEGIN MAIN -->

<!-- Page Header -->
  <div class="container column">
    <div class="sixteen columns">      
<a href="index" style="text-decoration:none" id="breadcrumb">
    <h1 class="home-header" id="dps" style="border:0;"><img alt="Instructional Systems Development" class="scale-with-grid" src="images/logo.png">
    <div align="center" style="border-top:2px #E9AB13 solid"></div></h1></a>
    </div>
<!-- END Page Header -->

<div class="ten columns" style="min-height:900px">
  
<!-- START Content -->
<h3><img src="images/forum.jpg" alt="ISD Now  Forum: What Does It Take to Be a Successful Consultant?" style="width:100%"></h3>
 
<p>
<h4>
<strong>WHEN:</strong> Wednesday, November 4, 6:00 - 8:30 PM<br>
<strong>WHERE:</strong> UMBC Ballroom, University Center, 3rd Floor
</h4> 
</p>

<h3>Directions & Parking to Main Campus:</h3>

<p><strong>Location:</strong> University Center Ballroom, 3rd Floor, 1000 Hilltop Circle, Baltimore, MD 21250
 
<p><strong>From the North:</strong><br>
  Take Interstate 95 to Route 166 (Exit 47B, Catonsville) or take Interstate 83 to the Baltimore Beltway (I-695, west) and then take Exit 12C (Wilkens Avenue, west); follow the signs to UMBC.</p>
<p><strong>From the South</strong>: <br>
  Take Interstate 95 to Route 166 (Exit 47B, Catonsville); follow signs to UMBC.</p>
<p>Please follow the signs for visitor parking: Administration Drive Garage (Gated on bottom, handicap accessible and metered on upper deck), and Commons Drive Garage (metered). Gated lots will cost you $.50 after 3:30 p.m. and metered lots will cost you $2 per hour. The University Center Building is located in the center of campus. Follow signs for the ISD Now Forum.</p>

 <div class="google-maps">     
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3089.495664469086!2d-76.71331429999996!3d39.25431889999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81dca33a3a319%3A0x98011a95f2996341!2sUniversity+Center%2C+Halethorpe%2C+MD+21227!5e0!3m2!1sen!2sus!4v1440699179159" width="600" height="450" frameborder="0" style="border:0"></iframe>
      </div>
<br>

<!-- END Content -->
</div>

<!-- SIDEBAR -->

<?php include("includes/sidebar-forum.php"); ?>

<!-- END SIDEBAR -->
<!-- footer -->
<br clear="all">
    
<?php include("includes/footer.php"); ?>
<?php include("includes/tracking.php"); ?>

<br>
    <!--END footer -->
  </div>
  <!-- container -->
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="js/scripts.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content",
      active:false,
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