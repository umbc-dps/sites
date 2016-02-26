<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Summer Programs at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Page description. No longer than 155 characters." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Title Here" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.example.com/" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/umbcsummer.jpg" />
<meta property="og:description" content="Description Here" />


<link href="includes/styles.css" rel="stylesheet">
<link href="includes/accordion.css" rel="stylesheet">
<script src="includes/modernizr.custom.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
<style>table.dates{width:100%}</style>
</head>
<body>
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
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
    <a href="index"><h1 class="remove-bottom">Summer Session 2016</h1></a>
  </div>
  <div class="sixteen columns">
    <div class="eleven columns alpha" style="padding-top:1em;">
    <!-- Page Title -->
        <h2>Page Title</h2>
    <!-- END Page Title -->       
      <div class="content">
   <div class="narrowchart">
  <div id="accordion">      
     <!-- Start Content --> 
     
  <div class="accordionheader">
    <h4>Heading<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">
    <p>Header Body</p>
  </div>
  
  <div class="accordionheader">
    <h4>Heading 2<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">
    <p>Header Body</p>
  </div>
  
  <div class="accordionheader">
    <h4>Heading 3<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">
    <p>Header Body</p>
  </div>
      

     <!-- END Content -->
            </div></div>
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
</div>
  <footer id="site-footer" class="clearfix">
    <?php include("includes/footer.php"); ?>
    <?php include("includes/tracking.php"); ?>
  </footer>
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="includes/scripts.js"></script> <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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