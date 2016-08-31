<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Apply Graduate | Winter Programs at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Application Process for Graduate Students for UMBC's 2016 Winter Session. You can apply online or submit a paper application." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Apply Graduate | Winter Programs at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/applygraduate" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/2.jpg" />
<meta property="og:description" content="Application Process for UMBC's Graduate Students for the 2016 Winter Session. Apply by December 21." />


<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/magnetic-popup.css" rel="stylesheet">
<link href="css/accordion.css" rel="stylesheet">

<!-- Javascript -->
<script src="js/modernizr.custom.js"></script>

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>

<div id="skip-content">
<a href="#main-content">Skip to Main Content</a>
</div>

<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
  <div  id="summer-heading">
    <a href="index"><h1 class="remove-bottom">Winter Session 2016</h1></a>
  </div>

  <div class="sixteen columns">
    <div class="eleven columns alpha" style="padding-top:1em;">
    <!-- Page Title -->
        <h2>Application Process for Graduate Students</h2>
    <!-- END Page Title -->    
    <div id="accordion">  
      <div class="content">
      
     <!-- Start Content -->
     
<p>Our admissions application is currently being updated to incorporate new
changes to the Maryland in-state residency section of the application. When you
completed your application, you were not asked to provide your permanent
address, as this question was inadvertently omitted from the online form.</p>

<p>In order to classify you as an in-state resident for tuition purposes, we
must have the following information on file:</p>

<ol>
  <li>Your permanent address</li>

  <li>Length of time at permanent address (years and months)</li>

  <li>If less than 12 months, provide previous address</li>

  <li>Length of time at previous address (years and months)</li>
</ol>

<p><strong>Please <a href=
"../undergraduate/pdf/residency_appfnl06_with_ID.pdf">download</a> the
residency form, complete the permanent address question (#1) and sign the
form.</strong></p>

<p>Please email the signed residency form as soon as possible to <a href=
"mailto:winter@umbc.edu">winter@umbc.edu</a>.</p>

<p>You can also fax the form to 410-455-1344 or mail the form to:</p>

<p>Office of Summer, Winter and Special Programs<br>
University of Maryland, Baltimore County<br>
Sherman Hall 453<br>
1000 Hilltop Circle<br>
Baltimore, MD 21250</p>

<p>Please be aware that you will remain classified as an out-of-state resident
until we can update your student file with your permanent address.</p>

<p>If you have any questions or concerns, please do not hesitate to contact our
office. We apologize for any inconvenience, and thank you for cooperation.</p>
</div>
     <!-- END Content -->
            
        <div id="dotcontainer"></div>
      </div>
      <!-- /cbp-fwslider --></div>
    <!-- /eleven columns -->
    <div class="five columns omega" style="float:right;"> 
           <!-- SIDEBAR --> 
      <?php include("includes/student-types.php"); ?>
    <!-- /five columns omega --> 
    <!-- END TOP SIDEBAR-->
   
   
  </div>
</div>

  <footer id="site-footer" class="clearfix">
    <?php include("includes/footer.php"); ?>
    <?php include("includes/tracking.php"); ?>
  </footer>
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="includes/scripts.js"></script> 

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