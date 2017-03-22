

<!DOCTYPE html>
<html>
<head>

<title>Advisory Board | Systems Engineering at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC's program is designed to accelerate the development of systems engineers by providing practical, real-world experience that can be immediately applied on the job." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Advisory Board | Systems Engineering at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/se/advisoryboard" />
<meta property="og:image" content="http://www.umbc.edu/se/images/bk.jpg" />
<meta property="og:description" content="UMBC's program is designed to accelerate the development of systems engineers by providing practical, real-world experience that can be immediately applied on the job." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">
<link href="http://umbc.edu/dps/css/accordion.css" rel="stylesheet">
<link href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet prefetch'>

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

<link href="images/favicon.ico" rel="shortcut icon">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
 <style> .accordionbody ul{ margin-left:25px; } </style> 
 
<link href='http://umbc.edu/dps/css/sf-request-info.css' rel='stylesheet'>

</head>
 
 
 <body> 
 
 <div id="skip-content"> <a href="#main-content">Skip to Main Content</a> </div> <!-- main container --> <div id="container-header-background"> <!-- umbc header --> <div id="container-header"> <?php include("includes/umbc-header.php"); ?> </div> <!-- END umbc header --> <!-- gold toolbar --> <div id="site-menu-background"> <?php include("includes/menu.php"); ?> </div> <!-- END gold toolbar --> </div> <!-- BEGIN MAIN --> <!-- Page Header -->

 <?php include("includes/header.php"); ?>
 
<!-- END Page Header --> <div class="eleven columns"> <div class="narrowchart"> <div id="accordion"> 
<!-- START Content --> 
<h3>Advisory Board</h3> 
<p><strong>Digital Innovation, Inc.</strong><br>
  Michele Ritondo</p>
<p><strong>Leidos</strong><br>
  Michael Simms, Vice President, Defense, Intelligence and Security Operation</p>
<p><strong>Lockheed Martin Information Systems and Global Solutions</strong><br>
  John Mears, Senior Fellow</p>
<p><strong>Lockheed Martin Integrated Systems and Solutions and Lockheed Martin Maritime Systems and Sensors</strong><br>
  Roland Brooks, Systems Engineering Manager, ISS</p>
<p><strong>MITRE</strong><br>
  Daniel DeMarinis, Director of Strategic Initiatives (Retired)</p>
<p><strong>NASA Goddard</strong><br>
  David Everett, Senior Systems Engineer</p>
<p><strong>Northrop Grumman Electronic Systems</strong><br>
  Rebecca Torzone, Director C4ISR Systems Engineering <br>
  Aaron Copeland, Director, Systems Engineering</p>
<p><strong>TASC</strong><br>
  Donald York, Ph.D, Senior Systems Engineer</p>
          
          

<!-- END CONTENT -->

        </div>
      </div>
    </div>
    <!-- SIDEBAR -->
    <?php include("includes/sidebar.php"); ?><!-- END SIDEBAR -->
    <!-- footer -->
    <br clear="all">
    <br>  <?php include("includes/footer.php"); ?>
  <?php include("includes/tracking.php"); ?>
<br>
    <!--END footer -->
  </div>
  <!-- container -->



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



<script src="http://umbc.edu/dps/js/scripts.js"></script> 
<script src="http://umbc.edu/dps/js/jquery.cbpFWSlider.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>


<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>


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

<?php include("includes/sf-contact-inputs.php"); ?>

</body>

</html>