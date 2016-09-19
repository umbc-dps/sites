<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Financial Dates | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Important winter session financial dates." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Financial Dates | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/financialdates/" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Important winter session financial dates." />


<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>
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
<div class="container column" id="main">  <div  id="winter-heading">
    <a href="index">
    <h1 class="remove-bottom">
    <img src="images/winter-heading.png" style="width:100%">
    </h1>
    </a>
  </div>


 <div class="sixteen columns">
  <div class="eleven columns alpha" style="padding-top:1em;">
    <!-- Page Title -->
        <h2>Financial Dates</h2>
    <!-- END Page Title -->       
      <div class="content">
      
     <!-- Start Content --> 
     
<p>  
<h4>When Do I Pay My Bill?</h4>

<table class="f-dates">
  <tr>
    <td>Register by</td>
    <td>E-bill Available on myUMBC</td>
    <td>Pay E-bill by</td>
    <td>Late Fees Charged On</td>
  </tr>
  <tr>
    <td>Nov 30</td>
    <td>Dec 1</td>
    <td>Dec 20</td>
    <td>Dec 25</td>
  </tr>
  <tr>
    <td>Dec 31</td>
    <td>Jan 1</td>
    <td>Jan 20</td>
    <td>Jan 25</td>
  </tr>
  <tr>
    <td>After    December 31</td>
    <td>Feb 1</td>
    <td>Feb 20</td>
    <td>Feb 25</td>
  </tr>
  </table>
</p>



<p>    
<h4>Refund Schedule</h4>
<table class="f-dates">
<tr>
  <td>Course Drop Date</td>
  <td>Refund %</td>
</tr>
    <tr>
      <td>By January 3</td>
      <td>100%</td>
    </tr>
    <tr>
      <td>January 4</td>
      <td>75%</td>
    </tr>
    <tr>
      <td>January 5</td>
      <td>50%</td>
    </tr>
    <tr>
      <td>January 6</td>
      <td>25%</td>
    </tr>
    <tr>
      <td colspan="2"><em>No refunds provided after January 6</em></td>
    </tr>
</table>
</p>

     <!-- END Content -->
     
	</div>
        
    <!-- /eleven columns -->
	</div>
    <!-- SIDEBAR --> 
    <div class="five columns omega" style="float:right;padding-top:1em;"> 
      <?php include("includes/student-types-interior.php"); ?>
    </div>
    <!-- /five columns omega --> 
    <!-- END TOP SIDEBAR-->
  </div>

  <footer id="site-footer" class="clearfix">
	<?php include("includes/footer.php"); ?>
    <?php include("includes/social.php"); ?>
    <?php include("includes/tracking.php"); ?>
  </footer>
</div>
<!-- container --> 

<script src="//code.jquery.com/jquery-1.12.0.js"></script> 
<script src="//code.jquery.com/jquery-migrate-1.3.0.js"></script>
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
  
</body>
</html>