<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Financing Your Education | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Tuition, financial aid, and scholarships." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Financing Your Education | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygroveiste/financing" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Tuition, financial aid, and scholarships." />



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
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
    <!-- Start Content --> 
          <h3>Financing Your Education</h3> 
    <div id="accordion"> 
      <div class="content">
      <div class="accordionheader">
            <h4><a id="a" href="#a"></a>Tuition &amp; Fees<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p>Students attending UMBC&rsquo;s academic programs offered at The Universities at Shady Grove (USG) receive the same quality education that they would if attending our main campus. Therefore, students also pay the same tuition. However, because the facilities and services  available to students differ between the two locations, students attending USG  have a different fee structure than our main campus.</p>
      <p><strong>To view the current Fall 2016 tuition and fees schedule, please <a href="http://sbs.umbc.edu/fall-2016-tuition/" target="_blank">click here</a>. </strong></p>
      <p>In order  to estimate your educational expenses for the upcoming year, please refer to  our <a href="http://financialaid.umbc.edu/cost-calculators/" target="_blank">UMBC cost calculator</a>, an interactive tool specifically designed to meet the needs of each student in  determining out-of-pocket expenses.</p>
      </div>
      
      <div class="accordionheader">
            <h4><a id="b" href="#b"></a>Financial Aid<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">      
      <p>Several types of financial aid are available, including grants, scholarships, and loans.</p>
    <center>
      <div style="background-color:#C0C0C0; padding:5px; text-align:center; width:50%; align:center">
			<p><br>
			<strong>FAFSA Code: 002105<br />
            FAFSA Priority Deadline: February 14</strong></p>
     </div> 
   </center>
<br><br>


      <p>For a step-by-step tool that will<strong> guide transfer students through the financial aid process</strong> and  information on <strong>UMBC scholarships  available to transfer students</strong>, please click <a href="http://financialaid.umbc.edu/transfers/" target="_blank">here</a>.</p>
      <p><strong>Every UMBC student is assigned a financial aid counselor</strong>. To contact your specific financial aid  counselor, please click <a href="http://financialaid.umbc.edu/contact/" target="_blank">here</a> for assignments by the first initial of your last name. </p>
      </div>

      <div class="accordionheader">
            <h4><a id="c" href="#c"></a>Scholarships<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p>For <strong>scholarship opportunities for current undergraduate and graduate students</strong> through UMBC, please click <a href="http://financialaid.umbc.edu/scholarships/" target="_blank">here</a>.</p>
      <p>UMBC-Shady Grove students are also encouraged to complete the <strong>Universities at Shady Grove (USG) Scholarship Application</strong>. These scholarships are available to eligible USG students through private donors for both the fall and spring semesters. Please click <a href="http://shadygrove.umd.edu/admissions/financial-aid/scholarships" target="_blank">here</a> to access additional information.</p>
      </div>
      
      <div class="accordionheader">
            <h4><a id="a" href="#a"></a>Billing<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p>Student Business Services (SBS) is the office that <strong>bills students, collects tuition and fees, and issues student refunds</strong>. They process student payments, tuition remission, military waivers, and post payments to student accounts from outside agencies. For more information, including information on payment plans, accepted forms of payment, and refund processes, click <a href="http://sbs.umbc.edu/" target="_blank">here</a>.</p>
      </div>
  
    </div>
    </div>
    </div>


	<!-- END Content -->


    <!-- /eleven columns -->
    <div class="four columns omega"> 
    <!-- SIDEBAR --> 
      <?php include("includes/ss-sidebar.php"); ?>
    <!-- /five columns  --> 


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