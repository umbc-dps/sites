<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Important Dates | Winter Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Important winter session dates." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCWinter">

<!-- Open Graph data -->
<meta property="og:title" content="Important Dates | Winter Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/importantdates/" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="Important winter session dates." />


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
        <h2>Important Dates</h2>
    <!-- END Page Title -->       
      <div class="content">
      
     <!-- Start Content --> 
    <p> 
<table class="dates">
    <tr>
      <td>October 24</td>
      <td>Winter session registration    begins</td>
    </tr>
    <tr>
      <td>November 24-25</td>
      <td>Campus closed for Thanksgiving holiday</td>
    </tr>
    <tr>
      <td>December 2</td>
      <td>Last day to apply for winter session scholarships</td>
    </tr>
    <tr>
      <td>December 21</td>
      <td>Last day for visiting    students to apply for winter session admission </td>
    </tr>
    <tr>
      <td>December 26 - January 2</td>
      <td>Campus closed for winter break</td>
    </tr>
    <tr>
      <td>December 30</td>
      <td>Last day students will automatically be enrolled in classes    from waitlists</td>
    </tr>
    <tr>
      <td>January 3</td>
      <td>First day of winter session</td>
    </tr>
    <tr>
      <td></td>
      <td>First day of the Schedule Adjustment Period</td>
    </tr>
    <tr>
      <td>January 6</td>
      <td>Last day of the Schedule Adjustment Period</td>
    </tr>
    <tr>
      <td></td>
      <td>Last day to add courses</td>
    </tr>
    <tr>
      <td></td>
      <td>Last day to drop a course without a grade of &ldquo;W&rdquo; on transcript</td>
    </tr>
    <tr>
      <td></td>
      <td>Last day to change grade method from or to audit</td>
    </tr>
    <tr>
      <td></td>
      <td>Last day to change from pass/fail to regular grading method</td>
    </tr>
        <tr>
          <td>january 10</td>
          <td>Last day textbooks (in the same condition as purchased) can be returned for a full refund with a sales receipt</td>
        </tr>
        <tr>
          <td>January 16</td>
          <td>Campus closed for Martin Luther King, Jr. Holiday</td>
        </tr>
    <tr>
      <td>January 18</td>
      <td>Last day to drop a course with a grade of &ldquo;W&rdquo; on transcript</td>
    </tr>
    <tr>
      <td></td>
      <td>Last day to change from regular grading method to pass/fail</td>
    </tr>
    <tr>
      <td>January 26</td>
      <td>Last day for full &ldquo;semester withdrawal&rdquo; from winter session</td>
    </tr>
    <tr>
      <td>January 27</td>
      <td>Last day of winter session</td>
    </tr>
    <tr>
      <td>January 30</td>
      <td>First day of spring 2017 semester</td>
    </tr>
    <tr>
      <td>February 1</td>
      <td>Final grades due to the Registrar</td>
    </tr>
    <tr>
      <td>February 3</td>
      <td>Final grades posted on myUMBC</td>
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