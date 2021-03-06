<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Social Work | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Social Work at UMBC Shady Grove." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Social Work | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/socialwork" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Social Work at UMBC Shady Grove." />


<link href="css/styles-ug.css" rel="stylesheet">
<link href="css/accordion-ug.css" rel="stylesheet">
<link href='css/magnific-popup.css' rel='stylesheet'>

<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
<link rel="stylesheet" href="css/jquery-ui.theme.css">


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
<h1 class="remove-bottom">Social Work</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->

    <!-- END Page Title -->       
      <div class="content">
      
     <!-- Start Content --> 

      <div id="cbp-fwslider" class="cbp-fwslider">
        <ul>
        
          <!-- Slide One -->
          <li id="slide1">
          <a href="visit/pd-socialwork" target="_blank"><img src="images/morris2.jpg" alt="img03" target="_blank"></a>
            <div class="carousel-caption wordwrap">
              <h3>Meet Katie Morris, LCSW-C, Program Director</h3>
             Visit with Social Work Program Director, Katie Morris, LCSW-C, and current social work students to learn more about our program and the opportunities that await you as a future social worker!
<p><a href="visit/pd-socialwork" role="button" class="web-seemore" target="_blank">RSVP Today!</a></p>
            </div>
            <p id="captionthree"><a href="visit/pd-socialwork" target="_blank">Meet Katie Morris, LCSW-C, Program Director</a></p>
          </li>
          <!-- END SLIDE ONE -->
          
          <!-- Slide Two --
          <li id="slide2">
          <a href="" target="_blank"><img src="images/alonso-students.jpg" alt="" target="_blank">
          </a>
            <div class="carousel-caption wordwrap left">
              <h3>Exciting Social Work Event!</h3>
             Join Dr. Jani as she presents on: Provision of Services to Unaccompanied Migrant Youth: 
Consideration of Context and Help-Seeking Behavior. On Friday, 4/14 in III-4206. 12:00-1:00 PM

            </div>
            <p id="captionthree"><a href"" target="_blank">Exciting Social Work Event!</a></p>
          </li>
          </li>
          <!-- END SLIDE TWO --> 
          
          <!-- Slide Three --
           <li id="slide3">
          <a href="mailto:swsa-usg@umbc.edu">
          <img src="images/social-work.jpg" alt="img03"></a>
          <div class="carousel-caption wordwrap">
              <h3>Grab a Book!</h3>
              Dean Tice will be coming down for a book swap. Bring a book that you have enjoyed or found inspirational and swap with a peer! Friday, 4/21 in III-4206. 12:00-1:00 PM. 
				
            </div>
            <p id="captionthree"><a href="mailto:swsa-usg@umbc.edu">Grab a Book!</a></p>
          </li>
         <!-- END SLIDE THREE -->
                    
         <!-- Slide Four --
          <li id="slide4">
          <a href="http://bit.ly/2mwsmT1" target="_blank">        
          <img src="images/alonso-students.jpg" alt="" target="_blank">
          </a>
            <div class="carousel-caption-right wordwrap">
              <h3>Social Work Career Roundtable</h3>
             Meet SOWK professionals who will discuss their experiences and share advice. This is an opportunity to network and discuss your career goals. 3/17 at 12pm in II-1432.
<p><a href="http://bit.ly/2mwsmT1" role="button" class="web-seemore" target="_blank">RSVP Today!</a></p>
            </div>
            <p id="captionthree"><a href="http://bit.ly/2mwsmT1" target="_blank">Social Work Career Roundtable</a></p>
          </li>
         <!-- END SLIDE FOUR -->
         
         <!-- Slide Five --
          <li id="slide5">
          <a href="mailto:swsa-usg@umbc.edu"><img src="images/social-work.jpg" alt="img03"></a>
            <div class="carousel-caption wordwrap">
              <h3>Phi Alpha & SWSA Host: SOWK Grad Panel!</h3>
              This is a great opportunity to learn about the various MSW programs in our area. Friday, October 28th from 12:00PM-1:00PM in III-2220. Food & drinks provided! 
				<p><a href="mailto:swsa-usg@umbc.edu" role="button" class="web-seemore" target="_blank">Have Questions?</a></p>
            </div>
            <p id="captionthree"><a href="mailto:swsa-usg@umbc.edu">Phi Alpha & SWSA Host: SOWK Grad Panel!</a></p>
          </li>
	<!-- END SLIDE FIVE -->         
         
         </ul>
         </div>

    <p><strong>UMBC&rsquo;s Bachelor of Arts in Social Work </strong> offers a unique environment of small  class sizes, close faculty and student collaboration, and a diverse student  population. Our fully accredited program is responsible for preparing  social work professionals in generalist practices with individuals, families, groups and communities through hands-on field placement and community  outreach. More than 80 percent of graduates go on to graduate and  professional schools. Additionally, many of our graduates work  at mental health and addictions agencies, schools, shelters, community-based  programs, prisons, health care and advocacy organizations.</p>
    
    <p>Students  enrolling in the Bachelor of Arts program in Social Work at UMBC-Shady Grove will  complete approximately two years of full-time study prior to entry and complete  the remainder of their upper-level credits with UMBC-Shady Grove. Students may transfer a maximum of 60 credits  from a community college and 90 credits from a four-year school to UMBC.</p>

  
<h3>Learn More About the Program</h3>

<div id="accordion">
  <h3>Suggested Transfer Pathways</h3>
    <div>
      <p>UMBC-Shady Grove has developed Suggested Transfer Pathways for students at <a href="documents/MC_SOWK_Checklist.pdf" target="_blank">Montgomery College (MC)</a> and <a href="documents/FCC_SOWK_Checklist.pdf" target="_blank">Frederick Community College (FCC)</a> who may be interested in transferring into any one of our four undergraduate programs. We have also developed recommendations for students who are transferring from <a href="documents/Recommended Checklist_SocialWork.pdf" target="_blank">other schools</a>. These documents provide an academic plan of action for transfer with recommended courses specific to each of our academic programs.</p>
      <p><em>Please note that the Suggested Transfer Pathway is not intended to serve as an official articulation agreement.</em>
      </p>
	</div>

	<h3>Recommended Prerequisites</h3>
 <div>
     <p>UMBC-Shady Grove provides upper-level coursework for transfer students who have completed or are near completion of lower-level course requirements. As such, only  upper-level courses are offered at UMBC-Shady Grove specific to each of our  undergraduate programs. Most students  transferring into UMBC-Shady Grove have completed <em>at least</em> 45-50 credits  prior to transferring and many students have earned their Associate  Degree. <strong><em>Please note that the Social Work Department requires a minimum 2.5 GPA for transfer to UMBC-Shady Grove.</em> </strong>The Social Work Department also<strong> strongly encourages</strong> you to complete the following courses prior to transfer:</p>
    <ul>
		<li><strong>Introduction to Sociology</strong></li>
		<li><strong>Introduction to Psychology</strong></li>
		<li><strong>English Composition</strong></li>
		<li><strong>General or Human Biology (with Lab)</strong></li>
		<li><strong>Statistics</strong></li>
		<li><strong>Political Science or Economics</strong></li>
    </ul>
    
  <p>In addition to the above courses, the following courses must be  completed prior to graduation from UMBC. Ideally, a student will complete as  many of the courses below as possible prior to transferring to UMBC-Shady  Grove. Given that these courses are lower-level, they must be taken at an  institution other than UMBC-Shady Grove:</p>
  <ul>
    <li>3 Arts and Humanities  courses (from at least two different disciplines)</li>
    <li> Statistics</li>
    <li>1 Science (lab or non lab), in addition to General or Human Biology<br><br>
    OR</li>
    <li>2 Science courses, (at least one must have a lab component. General or Human Biology counts as 1 of 2 courses)</li>
    <li>2 Physical Education  courses (consult advisor about exceptions)</li>
    <li>World Language Intermediate-Level (consult advisor about exceptions)</li>
  </ul>
   <p><strong>Questions  about the Social Work Program? Please  contact Ms. Katie Morris, LCSW-C, Program Director, at <a href="mailto:kath@umbc.edu">kath@umbc.edu</a> or 301-738-6312. Watch the short video below to meet Ms. Morris.</strong></p>
   
   <div class="videoWrapper">
   <iframe width="560" height="315" src="//www.youtube.com/embed/F6-o0Snyw-A" frameborder="0" allowfullscreen></iframe>
   </div>
</div>

	<h3>Major Requirements</h3>
          <div>
<p>Students pursuing a bachelor's degree must complete university requirements. Progress toward completion of  university requirements is evaluated by means of the Transfer Credit Report  (TCR) which is available online to students via <a href="http://my.umbc.edu/" target="_blank">myUMBC</a> once  admitted to the university. Progress toward major completion is evaluated in  the academic departments. University requirements include:<br></p>
<h4><strong>General Requirements:</strong><br></h4>
<ul>
<li>Minimum of 120 academic credits</li>
<li>Minimum of 2.0 grade point average</li>
<li>Two Physical Education courses</li>
<li>45 Upper Level Credits</li>
</ul>
<p>General Requirements are an important  component of study at UMBC. Please refer  to the following worksheets for guidance.</p>
<ul>
  <li>For students who entered higher education prior to Summer  2007: <a href="documents/GFRWorksheet.pdf" target="_blank">GFR  Worksheet</a></li>
  <li>For students entering higher education Summer 2007 or later: <a href="documents/GEPWorksheet.pdf" target="_blank">GEP  Worksheet</a></li>
</ul>
<h4><strong>Major Requirements:</strong></h4>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2333&returnto=556" target="_blank">Major Requirements Specific to Social Work</a></p>

<h4><strong>Additional Advising Resources</strong></h4>
<p>Additional advising resources are available <strong><a href="advising" target="_blank">here</a></strong>. For more information on degree  requirements, please contact the UMBC-Shady Grove  Assistant Director of Undergraduate Recruitment and Retention at 301-738-6184.</p>
  </div>

            <h3>Minor Requirements</h3>
          <div>
<p>In addition to completing a major, UMBC students also have  the option of completing a minor to supplement their  coursework. The minors listed below are available to all  students at UMBC-Shady Grove.  <strong>Please note that all social work majors are <em>required</em> to complete a minor of their choosing.  </strong></p>
<p>Please click on the links below for University requirements  specific to  minors requiring course work available at UMBC-Shady Grove. Other minor options may be explored as well. You should meet with your <a href="advising">academic advisor</a> to discuss how your minor of interest may best fit your degree  plan.</p>
<p><strong>Minor Requirements:</strong></p>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2334&returnto=556" target="_blank">Social  Welfare Minor</a></p>
<p><a href="http://sociology.umbc.edu/academic-program-requirements-socy/" target="_blank">Sociology  Minor</a></p>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2305&returnto=556" target="_blank">Political Science Minor</a></p>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2331&returnto=556" target="_blank">Psychology Minor</a></p>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2237&returnto=556" target="_blank">History Minor</a></p>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2360&returnto=556" target="_blank">Public History Minor</a></p>
        </div>

            <h3>Faculty</h3>
          <div>
	<h4>Katherine Morris, M.S.W.</h4>
    <p><strong>Program Director</strong><br>
	<strong>Department:</strong> Social Work<br>
	<strong>Phone:</strong> 301-738-6312<br>
    <strong>Email: </strong><a href="mailto:kath@umbc.edu">kath@umbc.edu</a><br>
	<strong>Office:</strong> Bldg III, Room 4141</p>
    
    <p><img src="images/faculty/UMBC_ShadyGrove_KatieMorris.gif" align="left" style="padding-right:5px">Katherine Morris, M.S.W., is Program Director of Social Work at the Universities at Shady Grove in Rockville, MD. Ms. Morris has a B.A. in Psychology from the College of the Holy Cross in Worcester, MA and an M.S.W. from the University of Pennsylvania. Prior to her employment with UMBC, she worked as a therapist providing cognitive behavioral and motivational enhancement therapy to individuals with alcohol and substance dependence in Philadelphia. In 2001, Ms. Morris moved to Maryland and was employed as a therapist at a mental health rehabilitation program in Prince George's County, where she worked with individuals with persistent mental illness in individual and group settings. She currently teaches Information Technology in Social Work as well as the Methods sequence.</p>
   <p><strong>Courses: </strong>SOWK 240 (Information Technology in Social Work); SOWK 397 (Methods 1)</p>
   <p><strong>Research/Clinical Areas: </strong>Enhancing student writing and student success among first generation and bilingual students</p>

<hr>
<h4>Faculty</h4>
<p><strong>Kusmaul, Dr. Nancy</strong><br>
	<strong>Courses: </strong>SOWK 369: Contemporary Issues, Cultures, and Social Work Practices in Aging<br>
	<strong>Research/Clinical Areas: </strong>Direct care workers in organizations, particularly nursing home certified nursing assistant</p>
<hr>
<p><strong><a href="mailto:lharfoot@umbc.edu">Harfoot, Lisa</a></strong><br>
	<strong>Courses: </strong>SOWK 389 (Human Behavior 2); SOWK 372 (Social Work and Healthcare)<br>
	<strong>Research/Clinical Areas: </strong>Aging and healthcare</p>
<hr>
<p><strong><a href="mailto:jhoover@umbc.edu">Hoover, Jeanette</a> </strong><br>
    <strong>Department: </strong>Social Work<br>
    <strong>Phone: </strong>301-738-6108<br>
    <strong>Office:</strong> Bldg III, Room 4137<br>
    <strong>Courses:</strong> SOWK 388 (Human Behavior and the Social Environment 1); SOWK 481(Social Work Methods 2); SOWK 438 (Social Work Methods 3); and SOWK 386 ( Social Work Practice with Families)</p>
<hr>
<p><strong>Jani,  Dr. Jayshree </strong><br>
    <strong>Courses: </strong>Sowk 260: Introduction to Social Welfare, social policy and social work<br>
<strong>Clinical/Research Interests:</strong> Diversity, culture, immigrants and refugees, critical theory</strong></p>
<hr>
<p><strong><a href="mailto:leiser@umbc.edu">Leiser, Kathleen</a></strong><br>
	<strong>Department:</strong> Social Work<br>
	<strong>Phone:</strong> 301-738-6304<br>
	<strong>Office:</strong> Bldg III, Room 4139<br>
	<strong>Courses: </strong>SOWK 480 (Field 1);  SOWK 482 (Field 2)</p>
<hr>
<p><strong><a href="mailto:jokund1@umbc.edu">Okundaye, Dr. Joshua</a></strong><br>
<strong>Courses:</strong> Sowk 374: Social Work with Immigrants and Refugees<br>
<strong>Clinical/Research Interests:</strong> Spirituality, addictive behaviors, immigrants and refugees
</p>
<hr>
<p><strong>Schmit, Stephanie</strong><br>
    <strong>Courses:</strong> SOWK 260: Introduction to Social Welfare, Social Policy and Social Work I<br>
    <strong>Research/Clinical Areas: </strong>Child care and early education policy including federal programs, funding, and data analysis.</p>
<hr>
<p><strong><a href="mailto:jshannon@umbc.edu">Shannon, James (Jim)</a></strong><br>
    <strong>Courses:</strong> SOWK 360 (Social Welfare, Social Policy and Social Work 2); SOWK 375 (Social Work and the Criminal Justice System)<br>
   <strong>Research/Clinical Areas: </strong> Corrections and social welfare policy</p>
<hr>
<p><strong><a href="mailto:LTing@umbc.edu">Ting, Dr. Laura</a></strong><br>
    <strong>Courses:</strong> SOWK 397 (Methods 1); SOWK 470 (Social Work Research)<br>
    <strong>Research/Clincial Areas: </strong>Intimate partner violence, cross cultural issues, and substance use</p>
<hr>
<p><strong><a href="mailto:Priscilla_Villavicencio@mcpsmd.org">Villavicencio, Priscilla</a></strong><br>
      <strong>Courses: </strong> SOWK 240 (Information Technology in Social Work)<br>
      <strong>Research/Clinical Areas:</strong> Trauma, domestic violence, and children's mental health</p>
<hr>
<p><strong><a href="mailto:wiechelt@umbc.edu">Wiechelt, Dr. Shelly</a></strong><br>
    <strong>Courses:</strong> SOWK 470: Social Work Research, SOWK 395: Addictive Behavior Patterns<br>
    <strong>Research/Clinical Areas:</strong> Substance abuse, trauma, diverse populations</p>
<hr>
<p><strong>Diebel, Kersha</strong><br>
    <strong>Courses:</strong> SOWK 260: Introduction to Social Welfare, Social Policy and Social Work I<br>
    <strong>Research/Clinical Areas: </strong>Reproductive health, social & economic development, community organizing, and health policy.</p>
<hr> 
<p><strong>Elie, Oswald</strong><br>
    <strong>Courses:</strong> SOWK 372 Social Work and Healthcare<br>
    <strong>Research/Clinical Areas: </strong>Substance Abuse, Traumatic Brain Injury (TBI), Mental Health, Military and Civilian Healthcare.</p>
<hr>
<p><strong>Kemah, Tenneh Johnson</strong><br>
    <strong>Courses:</strong> SOWK 360 Social Welfare, Social Policy and Social Work 2<br>
    <strong>Research/Clinical Areas: </strong>Substance Abuse, Traumatic Brain Injury (TBI), Mental Health, Military and Civilian Healthcare.</p>

</div>  
</div>
</div><br clear-"all">
</div>


	<!-- END Content -->
    
	<!-- /eleven columns -->

    <div class="four columns"> 
    <!-- SIDEBAR --> 
      <?php include("includes/student-types.php"); ?>
    <!-- /five columns  --> 
    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("includes/footer-ug.php"); ?> 
  </footer>

</div>

<!-- container --> 

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/jquery.cbpFWSlider.js"></script> 
<script src="js/scripts.js"></script> 
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>

<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  $(function() {
  $( "#accordion" ).accordion({
		heightStyle: "content",
		active: false,
		collapsible: true,
	  });
	  var hash = window.location.hash;
	  var anchor = $('a[href$="'+hash+'"]');
	  if (anchor.length > 0){
		  anchor.click();
	  }
  $('h3').click(function() {
	  var linkText = $(this).text();
	  ga('send', 'event',  'accordion', 'click', linkText);
  });
  });
$( function() {
    var isPaused = false;
    $( '#cbp-fwslider' ).cbpFWSlider()
      .on({
        mouseenter: function() { isPaused = true; },
        mouseleave: function() { isPaused = false; }
                        });

    setInterval(function() {
        if (isPaused) return; // do nothing when paused

        if(jQuery('.cbp-fwnext').css('display') != 'none')
            jQuery('.cbp-fwnext').click();
        else
            jQuery('.cbp-fwdots span:first-child').click();
    }, 5000);
});
</script>

<script>
$('#cbp-fwslider').on('click', function() {
  ga('send', 'event', 'slider', 'slide', {'nonInteraction': 1});
});
$('#slide1').on('click', function() {
  var slideID = document.getElementById('slide1');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide1', slideURL);
});
$('#slide2').on('click', function() {
  var slideID = document.getElementById('slide2');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide2', slideURL);
});
$('#slide3').on('click', function() {
  var slideID = document.getElementById('slide3');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide3', slideURL);
});
$('#slide4').on('click', function() {
  var slideID = document.getElementById('slide4');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide4', slideURL);
});

$('#slide5').on('click', function() {
  var slideID = document.getElementById('slide5');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide5', slideURL);
});

$('#slide6').on('click', function() {
  var slideID = document.getElementById('slide6');
  var slideLink = slideID.getElementsByTagName('a')[0];
  var slideURL = slideLink.href;
  ga('send', 'event', 'slider', 'slide6', slideURL);
});

$(".cbp-fwnext").on('hover', function() {
  ga('send', 'event', 'slider', 'button', 'next');
});
$(".cbp-fwprev").on('hover', function() {
  ga('send', 'event', 'slider', 'button', 'previous');
});
$(".cbp-fwdots").on('hover', function() {
  ga('send', 'event', 'slider', 'button', 'dots');
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