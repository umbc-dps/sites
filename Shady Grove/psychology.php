<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Psychology | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Psychology at UMBC Shady Grove." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Psychology | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/pscyhology/" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Pscyhology at UMBC Shady Grove." />

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
<h1 class="remove-bottom">Psychology</h1>
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
          <a href="http://undergraduate.umbc.edu/apply/shady-grove.php" target="_blank">
          <img src="images/truegrit.jpg" alt="img03">
          </a>
            <div class="carousel-caption-right wordwrap">
              <h3>Apply Now & Get Priority Consideration</h3>
              Submit your Common Application and official transcripts to UMBC by our October 15th priority deadline to automatically be considered for UMBC merit scholarships!
<p><a href="http://undergraduate.umbc.edu/apply/shady-grove.php" role="button" class="web-seemore" target="_blank">Apply Today!</a></p>
            </div>
            <p id="captionthree"><a href="http://undergraduate.umbc.edu/apply/shady-grove.php" target="_blank">Apply Now & Get Priority Consideration</a></p>
          </li>
         <!-- END Slide One -->
         
          <!-- Slide Two -->
          <li id="slide2">
                    <a href="visit/pd-psychology"><img src="images/alonso-students.jpg" alt="img03" target="_blank"></a>
            <div class="carousel-caption wordwrap">
              <h3>Meet Dr. Alonso & psychology students!</h3>
              Visit with Dr. Alonso on Wed., October 12th at 4:30pm to learn about our psychology program as well as research, internship, and career opportunities.  Meet current psychology students, too!
<p><a href="visit/pd-psychology" role="button" class="web-seemore" target="_blank">RSVP Today!</a></p>
            </div>
            <p id="captionthree"><a href="visit/pd-psychology" target="_blank">Meet Dr. Alonso & psychology students!</a></p>
            
          </li>
         <!-- END Slide Two -->
         
         <!-- Slide Three --
          <li id="slide3"><a href="mailto:sgpsa-group@umbc.edu"><img src="images/PSYCHsept.jpg" alt="Psychology Monthly Meeting" target="_blank"></a>
            <div class="carousel-caption-right wordwrap">
              <h3>Monthly Meeting</h3>
              The Psychology Student Association & Tau Sigma will be hosting a joint kick-off event on Tuesday, September 20th from 11:30-1pm in III-3206. Come get involved!
<p><a href="mailto:sgpsa-group@umbc.edu" role="button" class="web-seemore" target="_blank">Have Questions?</a></p>
            </div>
            <p id="captionthree"><a href="mailto:sgpsa-group@umbc.edu" class="web-seemore">Have Questions?</a></p>
          </li>
	-- END Slide Three -->         
         
         </ul>
         </div>

    <p><strong>UMBC&rsquo;s Bachelor of Arts in Psychology </strong>provides students the analytic and interpersonal skills needed to prepare for a wide range of careers in  psychology, social services, education, and business in both the public and  private sectors. The skills and information students learn through  research may be translated into treatments, interventions, and policies that  improve the quality of life. Upper-level (300- and 400-level) psychology courses are offered on a  convenient schedule during the weekdays (generally between 9 a.m. - 7 p.m.) for  students planning to complete a bachelor's degree in psychology. Students who have completed all General Education requirements can take all of their  courses at the convenient Shady Grove campus. Additionally, research opportunities  and internships are available for UMBC-Shady Grove psychology students to enrich their  educational experiences and help prepare them for a successful future. </p>
    
    <p>Students  enrolling in the Bachelor of Arts program in Psychology at UMBC-Shady Grove will  complete approximately two years of full-time study prior to entry and complete  the remainder of their upper-level credits with UMBC-Shady Grove. Students may transfer a maximum of 60 credits  from a community college and 90 credits from a four-year school to UMBC.</p>

  
<h3>Learn More About the Program</h3>

<div id="accordion">
  <h3>Suggested Transfer Pathways</h3>
    <div>
      <p>UMBC-Shady Grove has developed Suggested Transfer Pathways for students at <a href="documents/MC_PSYC_Checklist.pdf" target="_blank">Montgomery College (MC)</a> and <a href="documents/FCC_PSYC_Checklist.pdf" target="_blank">Frederick Community College (FCC)</a> who may be interested in transferring into any one of our undergraduate programs. These documents provide an academic plan of action for transfer with recommended courses specific to each of our academic programs.</p>
      <p><em>Please note that the Suggested Transfer Pathway is not intended to serve as an official articulation agreement.</em>
      </p>
	</div>

	<h3>Recommended Prerequisites</h3>
 <div>
     <p>UMBC-Shady Grove provides upper-level coursework for transfer students who have completed or are near completion of lower-level course requirements. As such, only  upper-level courses are offered at UMBC-Shady Grove specific to each of our  undergraduate programs. Most students  transferring into UMBC-Shady Grove have completed <em>at least</em> 45-50 credits  prior to transferring and many students have earned their associate  degree. The Psychology Department <strong>strongly encourages </strong>you to complete the following courses prior to transfer:</p>
    <ul>
      <li><strong>Introduction to Psychology</strong></li>
      <li><strong>English Composition</strong></li>
      <li><strong>Statistics</strong></li>
    </ul>
  <p>In addition to the above courses, the following courses must be  completed prior to graduation from UMBC. Ideally, a student will complete as  many of the courses below as possible prior to transferring to UMBC-Shady  Grove. Given that these courses are lower-level, they must be taken at an  institution other than UMBC-Shady Grove:</p>
  <ul>
    <li>3 Arts and Humanities  courses (from at least two different disciplines)</li>
    <li>3 Social Science  courses (from at least two different disciplines; Introduction to Psychology counts as 1 of 3 courses)</li>
    <li>College Algebra or  Statistics</li>
    <li>2 Science courses (at  least one must have a lab component)</li>
    <li>2 Physical Education  courses (consult advisor about exceptions)</li>
    <li>World Language  201-Level (consult advisor about exceptions)</li>
  </ul>
  <p><strong>Questions  about the Psychology Program? Please  contact Dr. Diane Alonso, Program Director, at <a href="mailto:dalonso@umbc.edu">dalonso@umbc.edu</a> or 301-738-6318. Watch the short video below to meet Dr. Alonso. </strong></p>
  
    <div class="videoWrapper">
    <iframe width="560" height="315" src="//www.youtube.com/embed/9GfpqAKXBW0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

	<h3>Major Requirements</h3>
          <div>
<p>Students pursuing a bachelor's degree must complete university requirements. Progress toward completion of  university requirements is evaluated by means of the Transfer Credit Report  (TCR) which is available online to students via <a href="http://my.umbc.edu/" target="_blank">myUMBC</a> once  admitted to the university. Progress toward major completion is evaluated in  the academic departments. University requirements include:<br></p>
<h3><strong>General Requirements:</strong><br></h3>
<ul>
<li>Minimum of 120 academic credits</li>
<li>Minimum of 2.0 grade point average</li>
<li>Two Physical Education courses</li>
<li>45 Upper Level Credits</li>
</ul>
<p>General Requirements are an important  component of study at UMBC. Please refer  to the following worksheets for guidance.</p>
<ul>
  <li>For students who entered higher education prior to Summer  2007: <a href="documents/GFRWorksheet.pdf" target="_blank">GFR  Worksheet</a></li>
  <li>For students entering higher education Summer  2007 or later: <a href="documents/GEPWorksheet.pdf" target="_blank">GEP  Worksheet</a></li>
</ul>
<h3><strong>Major Requirements:</strong></h3>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2323&returnto=556" target="_blank">Major Requirements Specific to Psychology (B.A.)</a></p>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2322&returnto=556" target="_blank">Major Requirements Specific to Psychology (B.S.)</a></p>

<h3><strong>Additional Advising Resources</strong></h3> 
<p>Additional advising resources are available <a href="advising.php"><strong>here</strong></a><strong>.</strong> For more information on degree  requirements, please contact the UMBC-Shady Grove Program Coordinator at 301-738-6184.</p>
  </div>

            <h3>Minor Requirements</h3>
          <div>
<p>In addition to completing a major, UMBC students also have  the option of completing a minor to supplement their  coursework. The minors listed below are available to all  students at UMBC-Shady Grove. <strong>Please note that all social work majors are <em>required</em> to complete a minor of their choosing.  </strong></p>

<p>Please click on the links below for University requirements  specific to  minors requiring coursework available at UMBC-Shady Grove. Other minor options may be explored as well. You should meet with your <a href="advising.php">academic  advisor</a> to discuss how your minor of interest may best fit your degree  plan.</p>
<p><strong>Minor Requirements:</strong></p>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2331&returnto=556" target="_blank">Psychology  Minor</a></p>
        </div>

            <h3>Faculty</h3>
          <div>
	<h4>Diane Alonso, Ph.D.</h4>
    <p>Program Director<br>
	<strong>Department:</strong> Psychology<br>
	<strong>Phone:</strong> 301-738-6318<br>
    <strong>Email:</strong> <a href="mailto:dalonso@umbc.edu">dalonso@umbc.edu</a><br>
	<strong>Office:</strong> Bldg III, Room 4145</p>
    
    <p><img src="images/faculty/UMBC_ShadyGrove_DianeAlonso.gif" align="left" style="padding-right:5px">Diane Alonso, Ph.D., serves as the UMBC Psychology Department's Program Director at the Universities at Shady Grove. She started the undergraduate program at the Center in 2004 and the Graduate I/O Psychology program in 2007. Diane is a lifetime Maryland resident and received her undergraduate degree (B.S.) in Computer Science and her graduate degrees (M.S. and Ph.D.) in Psychology from the University of Maryland, College Park (UMCP). With a background in Cognitive Psychology and Human Factors/Usability, Diane has over 10 years experience working in the industry both for IBM's Federal Systems Division and for Computer Sciences Corporation (CSC)'s Health and Human Services Division. While employed at CSC, Diane performed usability work for clients such as the National Institutes of Health (NIH), the Nuclear Regulatory Commission (NRC), the Department of Education, and the Food and Drug Administration (FDA). She also created and led a successful training program for new software implemented for the Center for Medicare and Medicaid Systems (MMCS).</p>
    <p> In addition to her vocation, Diane's avocation is musical theater. For over 15 years she performed locally in community and professional theaters in the D.C. and surrounding metro areas. In 1992, during a production of an original version of the &quot;Phantom of the Opera&quot; at Toby's Dinner Theater in Columbia, Maryland, Diane met  her future husband, <a href="http://www.tomalonso.com" target="_blank">Tom Alonso</a>, the very talented composer of the commissioned production. They were married a year later and now have two beautiful daughters.</p>

<hr>
<h4>Faculty</h4>
      <p><strong>Banks, Dr. David</strong><br>
      Email: </strong> <a href="mailto:drbanks@umbc.edu">drbanks@umbc.edu</a><br>
     <strong>Undergraduate Courses:</strong> PSYC 387 (Community Psychology)<br>
	<strong>Research Areas:</strong> Family and community violence, personalized health, and public health.</p>
<hr>
	  <p><strong><a href="http://drrobingoldstein.com/about/" target="_blank">Goldstein, Dr. Robin</a></strong><br>
      <strong>Email:</strong> <a href="mailto:go@umbc.edu">go@umbc.edu</a><br>
<strong>Undergraduate Courses:</strong> PSYC 304 (Adolescent Psychology), PSYC 308 (Child Maltreatment), PSYC 382 (Child and Adolescent Psychopathology), PSYC 407 (Advanced Child Psychology), PSYC 409 (Development and Education)<br>
<strong>Research Areas:</strong> Child and Adolescent Development</p>
<hr>
	 <p><strong>Knight, Dr. Donald</strong><br>
      Email: </strong> <a href="mailto:dknigh1@umbc.edu">dknigh1@umbc.edu</a><br>
     <strong>Undergraduate Courses:</strong> PSYC 211 (The Science and Profession of Psychology), PSYC 309 (Psychology: Exploration of the Discipline and Careers), PSYC 320 (Psychological Assessments), PSYC 345 (Introduction to Clinical Psychology and Psychotherapy)</p>
<hr>
	  <p><strong>LaFontaine, Dr. Sue Ellen</strong><br>
      Email: </strong> <a href="mailto:suelnlaf@umbc.edu">suelnlaf@umbc.edu</a><br>
     <strong>Undergraduate Courses:</strong> PSYC 305 (Exceptional Child)</p>
<hr>		
      <p><strong>Lichvar, Dr. Emily</strong><br>
      Email: </strong> <a href="mailto:elichvar@umbc.edu">elichvar@umbc.edu</a><br>
     <strong>Undergraduate Courses:</strong> PSYC 211 (The Science and Profession of Psychology) and PSYC 307 (The Psychology of Aging)<br>
	<strong>Research Areas:</strong> Addiction and substance abuse in the areas of prevention, treatment, and integrating systems of care for adolescents and families; Attention Deficit and Hyperactivity Disorder (ADHD) in adolescence</p>
<hr>
      <p><strong>Lynch, Dr. Minda</strong><br>
      <strong>Email: </strong><a href="mailto:mrlynch@umbc.edu">mrlynch@umbc.edu</a><br>
     <strong>Undergraduate Courses: </strong>PSYC 375 (Neuroanatomy),  PSYC 390 (Neuropsychopharmacology) and a Special Topics Course entitled "The Neuroscience of Resilience"<br>
      <strong> Research Areas: </strong>Multidisciplinary Neurosciences, Neuropsychopharmacology</p>
<hr>
      <p><strong>Rudow, Edward</strong><br>
     <strong>Email: </strong><a href="mailto:erudow@umbc.edu">erudow@aol.com</a><br>
     <strong>Undergraduate Courses:</strong> PSYC 320 (Assessment), PSYC 324 (Interviewing), PSYC 346 (Industrial/Organizational), PSYC 360 (Motivation), PSYC 380 (Personality), PSYC 393 (Diversity in the Workplace), PSYC 393 (Consumer Behavior)<br>
     <strong>Research Areas:</strong>Employee Attitude Assessment</p>
<hr>
      <p><strong>Tarner, Dr. Nina L.</strong><br>
     <strong>Email: </strong><a href="mailto:tarner@umbc.edu">tarner@umbc.edu</a><br>
      <strong>Undergraduate Courses: </strong>PSYC 210 (Psychology of Learning), PSYC 335 (Physiological Psychology), PSYC 357 (Psychology of Women), PSYC 370 (Sensation &amp; Perception), PSYC 385 (Health,Psychology), PSYC 393 (Abnormal Psychology in Film), PSYC 463 (Eating: Normal and Abnormal)<br>
      <strong>Research Areas: </strong>Forensic Psychology, Cognitive Psychology, Animal Learning</p>
<hr>
      <p><strong>Watkins-Lewis, Dr. Karen</strong><br>
       <strong>Email: </strong><a href="mailto:kwatkin1@umbc.edu">kwatkin1@umbc.edu</a><br>
        Phone: 301-738-6075<br>
        Office: Bldg III, Room 4149</p>
      <p>Karen Watkins-Lewis, Ph.D., serves as a full-time Instructor in the UMBC Psychology Department at the Universities at Shady Grove. Karen received her undergraduate degree in Mechanical Engineering and her doctorate degree in Developmental Psychology from Howard University in Washington, DC. Her research areas of interest are socio-cultural child development and the processes of parenting as it relates to the mental health and academic success of children in underserved communities. While pursuing her graduate degree, Karen worked as a research associate with the Center for Research on the Education of Students Placed at Risk (currently known as CAPSTONE) at Howard University. She has completed post doctoral fellowships with the Child Development Institute at the University of Maryland, College Park and the National Center for Research on Early Childhood Education at the University of Virginia. She has co-authored several peer reviewed publications and book chapters in the areas of socio-cultural child development and education. Karen has over 5 years of experience as a lecturer in psychology and human development, and has served as an Instructor and mentor for two student scholars programs: the Child Advocacy Scholars program at the University of Maryland, College Park and the Meyerhoff Scholars program at the University of Maryland, Baltimore County.</p>
      <p>Karen currently resides in the Washington, DC metro area. She lives with her husband of 23 years, Gilbert Lewis, Jr., and has three beautiful daughters: Morgan, Maya, and Michelle &quot;Kai.&quot;</p>

</div>  
</div>
</div><br clear="all">
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