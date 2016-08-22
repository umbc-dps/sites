<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Excess Credit | Summer Programs at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="This UMBC 2016 Summer Session, you can take up to 16 credits each summer session." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Excess Credit | Summer Programs at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/summer/excesscredit" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/2.jpg" />
<meta property="og:description" content="This UMBC 2016 Summer Session, you can take up to 16 credits each summer session." />

<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/magnetic-popup.css" rel="stylesheet">
<link href="http://umbc.edu/dps/css/accordion.css" rel="stylesheet">

<!-- Javascript -->
<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

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
        <h2>Summer/Winter Session Course Load</h2>
    <!-- END Page Title -->       
  <div class="content">
  <div class="narrowchart">
  <div id="accordion">
     <!-- Start Content --> 
     
<div class="accordionheader">
    <h4>Summer session  course load<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">
<ul>
  <li>During the summer, you can register for up to 16 total  credits (no more than 8 credits in each of the two summer sessions).</li>
  <li>If you attempt to enroll in more than 8 credits per  session, you will be blocked during online registration.</li>
</ul>
  </div>  
     
<div class="accordionheader">
    <h4>Winter session course load<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">
<ul>
  <li>During winter session you can register for no more than  4.5 credits, due to the condensed length of the term.</li>
  <li>If you attempt to enroll in more than 4.5 credits, you  will be blocked during online registration.</li>
</ul>
<h4>Course load exceptions</h4>
<ul>
  <li>Highly motivated and academically strong students <strong>may</strong> be granted permission to enroll in  more than the designated course load limits.</li>
  <li>Advanced approval is required by both the student's  primary major advisor and the Office of Academic and Pre-Professional Advising  to enroll in excess credits.</li>
</ul>
  </div>  
     
<div class="accordionheader">
    <h4>How to request excess credit approval<i class="fa fa-angle-down"></i></h4>
  </div>

  <div class="accordionbody">
<ul>
  <li><a href="http://registrar.umbc.edu/files/2015/03/NEW-Excess-Credits-Form_3_10_15nm.pdf">Download</a> and complete an &quot;Enroll for  Excess Credit&quot; form.</li>
  <li>Consult with your primary major advisor to verify  he/she agrees to approve the additional credits.</li>
  <li>Obtain your advisor's signature on the form.</li>
  <li>E-mail the completed and signed form to the Office of  Academic and Pre-Professional Advising for review at arc@umbc.edu.</li>
  <li>Please allow at least a week before the start of  classes to process your request.</li>
  <li>The Office of Academic and Pre-Professional Advising  will notify you by e-mail regarding whether your request to enroll in excess  credits is approved.</li>
</ul>
  </div>  
     
<p>

    <h5>Questions about the excess credits process should be directed to:</h5>

Office for Academic and Pre-Professional Advising<br>
  Room 102 Academic Services Bldg<br>
  410-455-2729<br>
  <a href="mailto:arc@umbc.edu">arc@umbc.edu</a></p>


     <!-- END Content -->
     
	</div></div></div>
        
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