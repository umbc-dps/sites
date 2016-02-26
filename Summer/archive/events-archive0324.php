<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Summer Programs at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="includes/styles.css" rel="stylesheet">
<script src="includes/modernizr.custom.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
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
        <h2>Events</h2>
    <!-- END Page Title -->       
      <div class="content">
      
     <!-- Start Content --> 
<p>There's more to summer than what happens in the classroom. Have fun, and be part of a dynamic learning community while you discover what it takes to be a successful  professional. <br>
<em>Check back soon for details on Summer Session 2015 events. </em></p>
<h3><img src="images/summer-stem-logo-1.PNG" style="height:20px"> Summer STEM Events </h3>
<p><em>Summer STEM at UMBC hosts regular events, including workshops, seminars, and social events. </em></p>

<p><strong>August 5</strong> - The eighteenth annual <a href="http://surf.umbc.edu" target="_blank">UMBC Summer Undergraduate Research Festival</a> showcases undergraduate student research in many STEM disciplines and promotes future student research.</p>
<p>&nbsp;</p>

<h3>Student Events Board Events</h3>
UMBC's <a href="http://seb.umbc.edu/">Student Events Board (seb)</a> hosts regular events on-campus during summer session, as well as various bus trips.
</h4>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  
  
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

<script src="../includes/scripts.js"></script> <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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