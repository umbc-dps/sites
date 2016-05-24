<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>GEP Courses | Summer Programs at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="GEP Courses are required for undergraduate program requirements. Check out what is offered this winter." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="GEP Courses | Summer Programs at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/summer/gepcourses" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/2.jpg" />
<meta property="og:description" content="GEP Courses are offered during UMBC's 2016 Summer Session. Check out what is offered here!" />

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
<style>
table.dates{width:100%}
td:first-child{text-align:left;}
</style>
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
<div class="container column" id="main">  <div  id="summer-heading">
    <a href="index">
    <h1 class="remove-bottom">
    <img src="images/summer-heading.png" style="width:100%">
    </h1>
    </a>
  </div>


  <div class="sixteen columns">
    <div class="eleven columns alpha" style="padding-top:1em;">
    <!-- Page Title -->
        <h2>General Education Program (GEP) Courses</h2>

    <!-- END Page Title -->       
      <div class="content">
<ul>
<li>UMBC undergraduate students are required to complete a series of general education courses as part of the foundation of a liberal arts education. </li>
<li>General Education Programs (GEP) applies to students who began their higher education (after high school graduation) in the fall 2007 semester or later.</li>
<li>Full descriptions of <a href="http://oue.umbc.edu/home/general-education" target="_blank">GEP requirements</a>.
</li>
<li>Students who began their higher education between the summer 1996 and spring 2007 semesters should complete the General Foundation Requirements (GFR). </li>
  <li>View summer 2016 <a href="all-courses#gep">GEP courses offered</a>.</li>
</ul>


      </div>


     <!-- END Content -->
     

        
    <!-- /eleven columns -->
	</div>
    <!-- SIDEBAR --> 
    <div class="five columns omega" style="float:right;"> 
      <?php include("includes/student-types.php"); ?>
    </div>
    <!-- /five columns omega --> 
    <!-- END TOP SIDEBAR-->
  </div>

  <footer id="site-footer" class="clearfix">
    <?php include("includes/footer.php"); ?>
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