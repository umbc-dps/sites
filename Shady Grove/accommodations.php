<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Undergraduate Programs | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Billing information for students looking to take UMBC's Summer 2015 courses." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Billing | Summer Programs at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/summer/billing/" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/umbcsummer.jpg" />
<meta property="og:description" content="Billing information for students looking to take UMBC's Summer 2015 courses." />


<link href="css/styles-ug.css" rel="stylesheet">
<link href="css/accordion-ug.css" rel="stylesheet">
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
<div>
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
<h1 class="remove-bottom">Student Disability Services</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    <div class="twelve columns">
      <div class="narrowchart">
        <div id="accordion"> 
    <!-- Start Content -->   
      <div class="content">
      <div class="accordionheader">
            <h4><a id="accommodations" href="#accommodations"></a>Accommodations<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
        <p>To apply for accommodations, please follow the instructions below:</p>
        <ol>
        <li>Download and complete the <a href="documents/RequestForServices.pdf" target="_blank">“Request for Services” application</a>.</li>
        <li>Bring completed application and supporting documentation from a physician/counselor to Ashley Waters in III-4135.</li>
        </ol>
        <p>Dr. Waters will then submit the application to Student Disability Services. Once your application is reviewed, Dr. Waters will receive the approved accommodations and notify you and your instructors. </p>
        <p>Please note: Shady Grove students do not need to complete a SSS Accommodation Card noting a class schedule for any semester at UMBC-Shady Grove. Dr. Waters will pull them from the system automatically approximately three weeks before the semester begins or upon receipt of your accommodations memo, whichever comes first.</p>
        </div>

      <div class="accordionheader">
            <h4><a id="eligibility" href="#eligibility"></a>Eligibility<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
          <p>UMBC-Shady Grove works very closely with Student Disability Services on the main campus to provide services for registered Shady Grove students with disabilities. Students with physical or learning disabilities who would like accommodation services and support must register with Student Disability Services as soon as possible.</p>
          <p>SDS reviews documentation of disability on a case-by-case basis. However, acceptable documentation should be current and reflect the following:</p>
  <ul>
    <li>The credentials of the evaluator</li>
    <li>A specific diagnosis</li>
    <li>The diagnostic methodology used</li>
    <li>The current functional impact on the individual</li>
    <li>The expected progression or stability of the disability</li>
    <li>Current and past accommodations, services, and/or medications</li>
    <li>Recommendations for academic or housing accommodations and services</li>
    </ul>
    <p>If you are requesting accommodations because of a temporary condition or medical injury the <a href="http://sds.umbc.edu/files/2015/11/UMBC_ADA_MedicalInquiryForm.pdf" target="_blank">Temporary Condition/Injury Form</a> can be used for medical verification.</p>
    
    <p>The following services are available to Student Disability Services participants:</p>
    <ul>
    <li>Academic advisement</li>
    <li>One-to-One peer tutoring</li>
    <li>Resources for students with disabilities such as a Braille Writer, digital recorder, Visual Tek Reading Machine, talking calculators, video phone, accessibility software, etc.</li>
    <li>Services for students with disabilities such as extended test-taking time, note-takers, readers, mobility training, American Sign Language Interpreters, etc.</li>
    <li>Individualized developmental instruction from staff specialists in study skills, communication skills, math/science, and writing.</li>
  </ul>
  <p>Shady Grove students should contact the UMBC-Shady Grove on-site representative with any questions or concerns: <strong>Dr. Ashley Waters  (301-738-6175 or <a href="mailto:awaters@umbc.edu">awaters@umbc.edu</a>).</strong></p>
  </div>

      <div class="accordionheader">
            <h4><a id="proctoring" href="#proctoring"></a>Test Proctoring<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody"> 
<p>For more information, visit the <a href="http://www.shadygrove.umd.edu/campus-services/cas/dss" target="_blank">Disability Support and Test Proctoring Services</a> site.</p>
</div>

<br clear="all">     
  
    </div>
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
  <?php include("includes/tracking.php"); ?> 
  </footer>
	</div>  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="js/scripts.js"></script> 

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