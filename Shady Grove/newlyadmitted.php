<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Admitted Student Checklist | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Welcome to UMBC Shady Grove!" />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Admitted Student Checklist | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/newlyadmitted" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Welcome to UMBC Shady Grove!" />



<link href="css/styles-ug.css" rel="stylesheet">
<link href="css/accordion-ug.css" rel="stylesheet">
<link href='css/magnific-popup.css' rel='stylesheet'>

<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>


<script src="js/modernizr.custom.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


<style type="text/css">
@media screen and (min-width:800px) {
html{
	position: relative;
	height:100%;
}
html::after {
  content: "";
  background: url(images/bg/<?php echo $selectedBg; ?>) no-repeat;
  background-size:cover;
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: fixed;
  z-index: -1;  
  background-attachment:fixed;
}
}

</style>



</head>
<body>
<div id="full-page">
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php //include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading">
<a href="index">
<h1 class="remove-bottom">Student Resources</h1>
</a>
  </div>
    <div class="ten columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    

        <div id="accordion"> 
    <!-- Start Content -->   
      <div class="content">
<h3>Admitted Student Checklist</h3>
            
<p>Congratulations on your admission to UMBC at The Universities at Shady Grove!  We look forward to welcoming you to the UMBC-Shady Grove community and meeting you at Orientation and Course Selection Day. Should you have any questions related to the Admitted Student Checklist, please contact Chelsea Moyer,  Assistant Director of Undergraduate Recruitment and Retention, at <a href="mailto:csmoyer@umbc.edu">csmoyer@umbc.edu</a> or 301-738-6184.</p>

<p>As you begin your educational journey at UMBC, please refer to the checklist below to get started with next steps:</p>

<div class="accordionheader">
	<h4>
		<i class="fa fa-check-square-o floatleft" aria-hidden="true"></i> Step 1<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>Accept your offer of admission online via your <a href="http://my.umbc.edu/" target="_blank">myUMBC</a> account. If you applied for federal student aid, please click <a href="http://www.umbc.edu/financialaid/new_transfers.html" target="_blank">here</a> for a step-by-step guide to assist transfer students with the financial aid process.</p>
</div>

<div class="accordionheader">
            <h4><i class="fa fa-check-square-o floatleft" aria-hidden="true"></i> Step 2<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>Submit your enrollment intent deposit through your <a href="http://my.umbc.edu" target="_blank">myUMBC account</a>. This deposit reserves your space in the incoming class and is applied toward both tuition and orientation.</p>
</div>

<div class="accordionheader">
            <h4><i class="fa fa-check-square-o floatleft" aria-hidden="true"></i> Step 3<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>Register <a href="https://secure.vzorientation.com/UMBC/default.aspx" target="_blank">here</a> for an upcoming, <strong>mandatory </strong>Orientation &amp; Course Selection Day. Your academic and social life begins with the Orientation Program. This day-long event is designed to provide you with the opportunity to meet both current and new UMBC students, faculty and staff; learn more about academic options and requirements; begin planning your academic career; register for classes; and learn more about financial aid, billing and student life.</p>
</div>

<div class="accordionheader">
            <h4><i class="fa fa-check-square-o floatleft" aria-hidden="true"></i> Step 4<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>Contact your Program  Director to set up a pre-orientation appointment prior to the Orientation &amp; Course Selection Day. This appointment will allow you to meet with your  Program Director to develop a preliminary academic plan of action before registering  for classes during Orientation Course Selection Day.</p>

<ul>
<li>History Program Director - <strong>Dr. Andrew Nolan</strong>, <a href="mailto:nolan@umbc.edu">nolan@umbc.edu</a></li>

<li>Political Science Program Director - <strong>Dr. Sunil Dasgupta</strong>, <a href="mailto:sunildasgupta@umbc.edu">sunildasgupta@umbc.edu</a></li>

<li>Psychology Program Director - <strong>Dr. Diane Alonso</strong>, <a href="mailto:dalonso@umbc.edu">dalonso@umbc.edu</a></li>

<li>Social Work Program Director - <strong>Ms. Katherine Morris, LCSW-C</strong>, <a href="mailto:kath@umbc.edu">kath@umbc.edu</a></li>
</ul>

</div>

<div class="accordionheader">
            <h4><i class="fa fa-check-square-o floatleft" aria-hidden="true"></i> Step 5<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>Submit the mandatory <a href="http://www.umbc.edu/uhs/forms/MandatoryImmForm.pdf" target="_blank"> UMBC Health Form</a> to University Health Services prior to the start of classes. Additionally, students must submit proof of health insurance or enroll in the University Health Insurance Plan by the required deadline. Financial charges may ensue if not submitted. For more information, contact UMBC University Health Services (UHS) at <a href="http://www.umbc.edu/uhs/" target="_blank">umbc.edu/uhs</a> or 401-455-2542.</p>
		  </div>
    </div> 
    </div>
    </div>


    
	<!-- END Content -->


    <!-- /ten columns -->
    <div class="six columns omega"> 
    <!-- SIDEBAR --> 
      <aside class="six columns add-bottom" style="margin-top:1em;">
      <p style="text-align:center">
      <img src="images/UMBCPresident_FreemanHrabowski.jpg" alt="UMBC President Freeman Hrabowski" style="width: 200px;">
      </p>
	  <p><em>Welcome to UMBC! I am delighted that you will be joining our exciting campus at Shady Grove, where you will find a diverse and inquisitive community of learners. Orientation marks the beginning of one of the most important journeys of your life. I challenge you to take advantage  of all that the University has to offer and allow yourself to be  inspired!</em>
      </p>
	  <p>
      	<strong><em>Freeman A. Hrabowski, III<br>President, UMBC</em></strong>
      </p>
	</aside>
</div>


    <!-- /six columns  --> 


    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("includes/footer-ug.php"); ?> 
  </footer>

	</div>      

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
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
 

<?php include("includes/tracking.php"); ?>

<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

</body>
</html>