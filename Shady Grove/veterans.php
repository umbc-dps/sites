<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Veteran Resources | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC-Shady Grove welcomes all veterans, active duty military and dependents." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Veteran Resources | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/veterans/" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="UMBC-Shady Grove welcomes all veterans, active duty military and dependents." />



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
.boxed {
	width: 250px ;
	border: 2px solid black ;
	padding: 25 px ;
	margin: auto ;
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
<h1 class="remove-bottom">Veteran Resources</h1>
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
      
<h4><a href="http://www.umbc.edu/veterans/" target="_blank">UMBC Veteran Services</a></h4> 

<p>UMBC-Shady Grove welcomes all veterans, active duty military  and dependents. We are committed to  providing the best possible educational experience and service to assist you in  achieving your academic and personal goals. As a UMBC-Shady Grove student, you will have access to UMBC Veteran  Services, as well as USG&rsquo;s Office of Veterans&rsquo; Resources, working together to  ensure your success. UMBC will facilitate all application, certification, and  application of benefits. USG is your on-site resource for common questions,  network building, and referrals as necessary. Please see the resources below:</p>

    <center>
      <div style="background-color:#C0C0C0; padding:5px; text-align:center; width:50%; align:center">
			<p><br>
			<strong>Whitney West<br>
  <a href="mailto:wwest@umbc.edu">wwest@umbc.edu</a>
  </strong>
  </p>
  </div>
  </center>
<br>

<div class="accordionheader">
            <h4><a id="benefits" href="#benefits"></a>Educational Benefits<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
    <h5>Yellow Ribbon Program</h5>
    <p>UMBC actively supports our  veterans and their families by proudly participating in the Veterans  Administration Yellow Ribbon Program. UMBC's participation in the Yellow Ribbon  Program provides additional funding to nonresident, 100% eligible Post-9/11 GI  Bill recipients who are not on active duty. To be eligible for award consideration,  students must have a VA Certificate of Eligibility and a UMBC Semester  Certification Form on file in the Registrar's Office.</p>
    <p>Awards are made on a first-come, first-served basis; a maximum of five (5)  participants (four undergrad and one graduate) are provided up to $500 per  semester, which is matched by the VA (for a total benefit of up to $1000 per  semester). Yellow Ribbon funding is only available for the fall and spring  semesters at UMBC.</p>
    <p>To apply for the UMBC Yellow Ribbon Program, <a href="http://registrar.umbc.edu/contact" target="_blank">submit a request</a>. In the &quot;Select a Topic&quot; drop down  menu, choose &quot;Veterans Certification&quot; and click &quot;Create a  Ticket.&quot; Please type &quot;Yellow Ribbon Program&quot; in the subject box.  Requests must be made during the registration period for the upcoming semester.  Requesting participation in the Yellow Ribbon Program through this process does  not guarantee funding. A waitlist will be kept each semester until all funding  has been awarded.</p>
    <p>If you have questions about this or other veterans programs and services,  please email <a href="mailto:veterans@umbc.edu">veterans@umbc.edu</a>.</p>
    
 <h5>Additional Resources</h5>
 <ul>
 <li><a href="http://veterans.umbc.edu/benefits/" target="_blank">Educational Benefits</a></li>
  <li><a href="http://veterans.umbc.edu/financial-services/" target="_blank">Financial Services</a></li>
  <li><a href="http://veterans.umbc.edu/resources/" target="_blank">Career Resources</a></li>
  <li><a href="http://www.umbc.edu/ocss/get_connected/vets2vets.html" target="_blank">Vets 2 Vets  Program</a> <em>(some programming only  offered on our Main Campus)</em></li>
  <li><a href="http://veterans.umbc.edu/faq/" target="_blank">Frequently  Asked Questions</a></li>
</ul>
</div>

<div class="accordionheader">
            <h4><a id="resources" href="#resources"></a>USG Office of Veterans&rsquo; Resources<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
   <ul>
   <li><a href="http://shadygrove.umd.edu/student-services/office-of-student-services/information-for-veterans" target="_blank">USG Office of Veterans&rsquo; Resources</a></li>
  <li><strong>Center  for Vets:</strong> Located in Building III, Room 2241A, this room is exclusively  available for student veterans as a space to connect with other vets, relax,  study, and find information about various student resources.</li>
  <li><strong>USG Vets  Student Organization</strong>
All  students who are veterans of the military are welcome to join the USG Vets. USG  Vets is the student organization instituted to address the number one concern  for veterans attending college – fitting in. Veterans come to college with a  depth and breadth of experience that most undergraduate students do not have,  and as a result, often face a challenge in connecting with other undergrad or  grad students. Given the importance of establishing a network of students,  colleagues, and friends while in college, the USG Vets serves as an  organization that enables connections to be made organically with veterans and  non-veterans. For more information about the organization and opportunities to  get involved, please contact <a href="mailto:usgvets@gmail.com">usgvets@gmail.com</a>.</li>
</ul>
</div>

<div class="accordionheader">
            <h4><a id="gov" href="#gov"></a>Local, State, and Federal Resources<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<ul>
	<li><a href=	"http://shadygrove.umd.edu/student-services/office-of-student-services/information-for-veterans" target="_blank">Local, State, and Federal Resources</a></li>
	<li><a href="https://www.ebenefits.va.gov/ebenefits-portal/downloads/eBenefits_factsheet.pdf" target="_blank">eBenefits Fact Sheet</a></li>
</ul>    
</div>  
  
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