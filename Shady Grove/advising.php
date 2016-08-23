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
<meta name="description" content="Academic Advising at UMBC." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@uatshadygrove">

<!-- Open Graph data -->
<meta property="og:title" content="Advising Resources | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/advising/" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Academic Advising at UMBC." />



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
<h1 class="remove-bottom">Advising Resources</h1>
</a>
  </div>
    <div class="sixteen columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
      <div class="narrowchart">
        <div id="accordion"> 
        
    <!-- Start Content -->   
      <div class="content">
      <h3>Advisors</h3>
<p>Academic Advising at UMBC starts with an Orientation Advisor  specifically trained to help you with securing a strategic course schedule to  launch your academic career. However, once you begin your study here at  UMBC-Shady Grove, you will then have the opportunity to work with a faculty member  and/or professional advisor affiliated with your chosen academic discipline.  Please see a list of advisors per program listed below:</p>

<div class="accordionheader">
            <h4><a id="undergraduate" href="#undergraduate"></a>Undergraduate Advisors<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<table width="70%" border="0" cellpadding="10" cellspacing="10">
  <tr>
    <td>
        <h5>History</h5>
         <ul>
         	<li>Dr. Andrew Nolan, <a href="mailto:nolan@umbc.edu">nolan@umbc.edu</a> (Program Director)</li>
        	<li>Dr. Melissa Blair, <a href="mailto:mfblair@umbc.edu">mfblair@umbc.edu</a></li>
        </ul>
        <h5>Political Science</h5>
          <ul>
          	<li>Dr. Sunil Dasgupta, <a href="mailto:sunildasgupta@umbc.edu">sunildasgupta@umbc.edu</a> (Program Director)</li>
            </ul>
        <h5>Psychology</h5>
        <ul>
        	<li>Dr. Diane Alonso, <a href="mailto:dalonso@umbc.edu">dalonso@umbc.edu</a> (Program  Director)</li>
        	<li>Dr. Donald Knight, <a href="mailto:dknigh1@umbc.edu">dknigh1@umbc.edu</a></li>
            <li>Dr. Karen Watkins-Lewis, <a href="mailto:kwatkin1@umbc.edu">kwatkin1@umbc.edu</a></li>     
        	<li>Mr. Caleb Grabowski, <a href="mailto:cgrab1@umbc.edu">cgrab1@umbc.edu</a></li>
            </ul>
        	  <h5>Social Work</h5>
        	  <ul><li>Ms. Jeanette Hoover, LCSW-C, <a href="mailto:jhoover@umbc.edu">jhoover@umbc.edu</a></li>
        	  <li>Ms. Katie Leiser, LCSW-C, <a href="mailto:leiser@umbc.edu">leiser@umbc.edu</a></li>
        	  <li>Ms. Katherine Morris, LCSW-C, <a href="mailto:kath@umbc.edu">kath@umbc.edu</a> (Program Director)</li>
        	  <li>Dr. Laura Ting, <a href="mailto:lting@umbc.edu">lting@umbc.edu</a></li>
              </ul>
      	  </td>
  </tr>
</table>

<p><strong>If you have questions or concerns about advising services, please contact Tim Cox, Assistant Director of Advising and Student Success, at <a href="mailto:thcox@umbc.edu">thcox@umbc.edu</a> or 301-738-6281.</strong></p> 
</div>

<div class="accordionheader">
            <h4><a id="graduate" href="#graduate"></a>Graduate Advisors<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<table width="70%" border="0" cellpadding="10" cellspacing="10">
  <tr>
    <td>
        <h6>Biotechnology</h6>
        <ul>
        	<li>Dr. Steve Miller, <a href="mailto:stmiller@umbc.edu">stmiller@umbc.edu</a> (Graduate Program Director)</li>
            <li>
          Dr. Sheldon Broedel, <a href="mailto:broedel@umbc.edu">broedel@umbc.edu</a> (Associate Graduate  Program Director)</li>
          </ul>
        <h5>Cybersecurity</h5>
        <ul><li> Mr. Behnam Shariati, <a href="mailto:shariati@umbc.edu">shariati@umbc.edu</a> (Assistant Graduate Program Director)</li></ul>
        <h5>Geographic  Information Systems</h5>
        <ul><li>Dr. Erwin Villiger, <a href="mailto:villiger@umbc.edu">villiger@umbc.edu</a> (Program Director)</li></ul>
        <h5>I/O Psychology</h5>
        <ul>
          <li>Dr. Elliot Lasson, <a href="mailto:elasson@umbc.edu">elasson@umbc.edu</a> (Graduate Program Director)</li></ul>
     </td>
  </tr>
</table>
</p>
</div>

<br>
<p><strong>Important note:</strong> While one faculty member or professional  advisor will provide registration clearance for you each semester, we encourage  students to seek additional academic and career planning from various members  of the UMBC academic and administrative community. High-Performing UMBC  students gather information, recommendations and guidance from a host of  faculty, advisors and administrators- keen to help them maximize the  opportunities and resources available at UMBC. Additionally, we encourage  students to actively pursue conversations and meetings with academic advisors,  faculty, and staff throughout the entire academic year. Advising sessions about  registration are certainly important, yet on-going conversations and planning  about graduate school, independent study, and/or gaining entry into a  particular profession can (and should) take place at various times and in  various formats (including email, telephone, etc.).</p>  


<p>Before   making your advising appointment, check your <a href="http://registrar.umbc.edu/academic-calendar/registration-appointments/" target="_blank">registration eligibility</a>.</p>   

      <h3>Advising Guides</h3>
<p>Please use the advising guides below to help you prepare for  your advising meetings and to track your progress throughout your time at  UMBC-Shady Grove:</p>

<div class="accordionheader">
            <h4><a id="undergraduate-programs" href="#undergraduate-programs"></a>Undergraduate Programs<i class="fa fa-angle-down"></i></h4>
          </div>
          <div class="accordionbody">
<ul>
  <li><a href="documents/HistoryAdvisingGuide.pdf" target="_blank">History</a></li>
  <li><a href="documents/PoliticalScienceAdvisingGuide.pdf" target="_blank">Political Science</a></li>
  <li><a href="documents/PsychologyAdvisingGuide.pdf" target="_blank">Psychology</a></li>
  <li><a href="documents/SocialWorkAdvisingGuide.pdf" target="_blank">Social Work</a></li>
</ul>
</div>

<div class="accordionheader">
            <h4><a id="graduate-programs" href="#graduate-programs"></a>Graduate Programs<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<ul>
  <li><a href="biotech/documents/planningform.pdf" target="_blank">Biotechnology</a></li>
  <li><a href="cyber/documents/planningform.pdf" target="_blank">Cybersecurity</a></li>
  <li><a href="gis/documents/planningform.pdf" target="_blank">Geographic Information Systems</a></li>
  <li><a href="io/documents/planningform.pdf" target="_blank">Industrial Organizational Psychology</a></li>
</ul>
</div>

  <br>

      </div>
    </div> 
    </div>
    </div>
    </div>
	<!-- END Content -->


    <!-- /eleven columns -->


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