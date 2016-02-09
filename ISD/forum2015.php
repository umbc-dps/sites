<!DOCTYPE html>
<html>
<head>

<title>ISD Now Forum 2015: What Does It Take to be a Successful Consultant?</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Join us for the ISD Now Forum and hear from a panel of successful consultants who will discuss the competencies necessary in an ever-changing environment." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@isdnow">

<!-- Open Graph data -->
<meta property="og:title" content="ISD Now Forum 2015: What Does It Take to be a Successful Consultant?" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/isd/forum2015" />
<meta property="og:image" content="http://umbc.edu/isd/images/isdnow-fb.png" />
<meta property="og:description" content="Join us for the ISD Now Forum and hear from a panel of successful consultants who will discuss the competencies necessary in an ever-changing environment." />

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
 
<p>Consultants in the learning and performance field provide solutions for clients who want cost effective solutions to their challenging and complex business issues.</p>
 
<h4>What does it take to be an effective consultant? </h4>
  <p>Join us for the ISD Now Forum and hear from a panel of successful consultants who will discuss the competencies necessary in an ever-changing environment.</p>
  
  
<h4>Who Should Attend?</h4>
<p>Individuals interested in becoming a consultant, learning more about the field, or wanting to improve current consulting skills.
</p>

<h4>Join us for this free event to learn:</h4>
<ul>
  <li>What makes a consultant successful?</li>
  <li>How do you prepare to be a consultant?</li>
  <li>What are the career paths for a consultant?</li>
  <li>How does someone become a consultant in a specialized field such as instructional design or eLearning?</li>
  <li>What are the trends and issues facing clients and consultants today?</li>
  <li>What separates successful consultants from ineffective ones?</li>
</ul>

<!-- END Content -->
</div>

<!-- SIDEBAR -->



<?php  include("includes/sidebar-forum.php"); ?>

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