

<!DOCTYPE html>
<html>
<head>

<title>Advisory Board | Engineering Management at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Our Engineering program combines a practical business approach with an in-depth technical concentration and emphasizes how to lead people and manage complex projects." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Advisory Board | Engineering Management at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/engm/advisoryboard" />
<meta property="og:image" content="http://www.umbc.edu/engm/images/bk.jpg" />
<meta property="og:description" content="Our Engineering program combines a practical business approach with an in-depth technical concentration and emphasizes how to lead people and manage complex projects." />



  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">
  <link href="http://umbc.edu/dps/css/accordion.css" rel="stylesheet">
  <script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>
  <link href="images/favicon.ico" rel="shortcut icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet prefetch'>
  <style>
h4{margin-left:-5px}
  </style>

<link href='http://umbc.edu/dps/css/sf-request-info.css' rel='stylesheet'>
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
      <?php include("includes/menu.php"); ?>
    </div>
    <!-- END gold toolbar -->
  </div>
  <!-- BEGIN MAIN --><!-- Page Header -->

 <?php include("includes/header.php"); ?>
 
<!-- END Page Header --><div class="eleven columns">
      <div class="narrowchart">
        <div id="accordion">
          <!-- START Content -->

          <h3>Advisory Board</h3>
          
<h4>Industry/Government Members:</h4>

<p><strong>Daniel DeMarinis</strong><br> 
  Director of Strategic Initiatives, MITRE</p>
  
<p><strong>John Donohue</strong><br>
Division Chief/580, NASA Goddard Space Flight Center </p>

<p><strong>Gerald Doyle</strong><br>
Chief, Systems Engineering Center, DISA</p>

<p><strong>Robert Fenton</strong><br>
Director,Technical Operations, BAE Systems (Retired)</p>

<p><strong>Toby Gouker, Ph.D.</strong><br>
Chief Strategy Officer, Longview International Technology Solutions </p>

<p><strong>Anita Griner</strong><br>
Deputy Director, Data Sharing &amp; Partnership Group<br>
Center for Program Integrity Centers<br>
Medicare and Medicaid Services</p>

<p><strong>Joshua D. Israel<br>
</strong>Aviation Business Manager, 
JPMO-IP </p>
<p><strong> Illysa Izenberg<br>
</strong>Founder, 
Strategy and Training Partners</p>
<p> <strong>Irene Knott</strong><br>
   Senior Project Manager, 
   Whiting-Turner Contracting Company</p>
<p><strong>Martin Leshin<br>
</strong>President, 
Varen Technologies</p>
<p><strong>Michael Oliver, Esq., <br>
</strong>Oliver and Grimsley, LLC</p>
<p><strong> James Peter<br>
 </strong>Project Manager, 
 JHU - Applied Physics Laboratory </p>
<p><strong>Eric Peristein<br>
</strong>President, PMI Baltimore Chapter</p>
<p><strong>Jeff Ray, J.D. <br>
</strong>Senior Systems Engineer, 
Northrop Grumman</p>
<p><strong> Lawrence Stout, Ph.D.<br>
</strong>Branch Chief Microphotonics<br>
Sensors and Electron Devices Directorate<br>
Army Research Laboratory </p>
<h4>Northrop Grumman Representatives:</h4>
<p><strong>Charles Adams</strong><br>
Director Combat Avionics Upgrades - ISR&amp;T Division</p>

<p><strong>Scott Gardner <br>
</strong>Director, Programs and  Operations, 
   N.G. Electronic Systems </p>
<p><strong> William Martini, Ph.D.<br>
</strong>Technical Director, Xetron </p>
 <h4>UMBC Representatives:</h4>
 <p><strong>Chris Steele, Ph.D.</strong><br>
   Senior Associate Vice Provost, 
   Division of Professional Studies</p>
<p><strong>Richard Wilson</strong><br>
   Ethics Instructor<br>
 </p>

          

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