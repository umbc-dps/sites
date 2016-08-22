<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Political Science | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Political Science at UMBC Shady Grove." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Political Science | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/politiclascience/" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="Political Science at UMBC Shady Grove." />


<link href="css/styles-ug.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.theme.css">
<script src="js/modernizr.custom.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


<style type="text/css">
@media screen and (min-width:800px) {
body{
background: url(images/bg/<?php echo $selectedBg; ?>) no-repeat;
background-size: cover;
background-attachment:fixed;
}
}
.programs li{
	margin:0px;
	list-style-type:none!important;
	margin-left:0px!important;
	padding:6px;
	font-size:11pt!important;
	border-bottom:1px #CCC solid;
}
.programs li:hover{
	background-color:#FFCC00;
}
.programs li:hover a{
	color: #000!important;
}
.programs a li{
	text-decoration:none!important;
}
.programs a{
	text-decoration:none!important;
}

.ui-tabs-nav {
	background:#FFF!important;
	font-family: "Avenir-Medium", "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 9pt;

}
#tabs li a{padding:3px 5px;}
#tabs{font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;}

/*Mobile Responsive iFrame*/
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper2 {
	position: relative;
	padding-bottom: 150%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe, .videoWrapper2 iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
@media screen and (max-width:799px) {
.videoWrapper2 iframe {height: 275%}
.videoWrapper2 {margin-bottom: 275%}
}	
</style>

</head>
<body>
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->

    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading">
<a href="index">
<h1 class="remove-bottom">Political Science</h1>
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
          <li id="slide1"><a href="visit/pd-politicalscience"><img src="images/sunil-students.jpg" alt="img03" target="_blank"></a>
            <div class="carousel-caption wordwrap">
              <h3>Attend Wednesday Wipeout!</h3>
              Meet Dr. Dasgupta and engage in discussion surrounding current local, state, and national events with UMBC-Shady Grove students!  Make connections and learn more about our political science program!
<p><a href="visit/pd-politicalscience" role="button" class="web-seemore" target="_blank">RSVP to Attend Here!</a></p>
            </div>
            <p id="captionthree"><a href="visit/pd-politicalscience" target="_blank">Attend Wednesday Wipeout!</a></p>
          </li>
         <!-- END Slide One -->
         
          <!-- Slide Two --
          <li id="slide2"><a href="https://www.surveymonkey.com/s/2VR5G27"><img src="images/1.jpg" alt="img03" target="_blank"></a>
            <div class="carousel-caption-right wordwrap">
              <h3>Event at Shady Grove</h3>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae quam commodo, porta orci et.
<p><a href="" role="button" class="web-seemore" target="_blank">Attend!</a></p>
            </div>
            <p id="captionthree"><a href="" target="_blank">Event at Shady Grove</a></p>
          </li>
         -- END Slide Two -->
         
         <!-- Slide Three --
          <li id="slide3"><a href="https://www.surveymonkey.com/s/2VR5G27"><img src="images/2.jpg" alt="img03" target="_blank"></a>
            <div class="carousel-caption-right wordwrap">
              <h3>Event at Shady Grove</h3>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae quam commodo, porta orci et.
<p><a href="" role="button" class="web-seemore" target="_blank">Attend!</a></p>
            </div>
            <p id="captionthree"><a href="" target="_blank">Event at Shady Grove</a></p>
          </li>
	-- END Slide Three -->         
         
         </ul>
         </div>


<p><strong>UMBC&rsquo;s Bachelor of Arts in Political Science </strong>prepares students to become a part of the "business" of the Washington metropolitan area. Students learn about the central problems of politics such as the distribution of power and authority in society and the aggregation of preferences across large populations as well as develop analytical and writing skills. The program offers courses in pre-law, public policy, and international affairs that enable students to focus on their core interests and pursue practical learning opportunities through internships at federal, state, and local agencies, and at international and non-governmental organizations. </p>

<p>Students enrolling in the Bachelor of Arts program in Political Science at UMBC-Shady Grove will complete approximately two years of full-time study prior to entry and complete the remainder of their upper-level credits with UMBC-Shady Grove. Students may transfer a maximum of 60 credits from a two-year school and 90 credits from a four-year school to UMBC.</p>

  
<h3>Learn More About the Program</h3>

<div id="accordion">
  <h3>Suggested Transfer Pathways</h3>
    <div>
      <p>UMBC-Shady Grove has developed Suggested Transfer Pathways for students at <a href="documents/MC_POLI_Checklist.pdf" target="_blank">Montgomery College (MC)</a> and <a href="documents/FCC_POLI_Checklist.pdf" target="_blank">Frederick Community College (FCC)</a> who may be interested in transferring into any one of our undergraduate programs.  These documents provide an academic plan of action for transfer with recommended courses specific to each of our academic programs.</p>
      <p><em>Please note that the Suggested Transfer Pathway is not intended to serve as an official articulation agreement.</em>
      </p>
	</div>

	<h3>Recommended Prerequisites</h3>
 <div>
     <p>UMBC-Shady Grove provides upper-level coursework for transfer students who have completed or are near completion of lower-level course requirements.</span>  As such, only  upper-level courses are offered at UMBC-Shady Grove specific to each of our  undergraduate programs. Most students  transferring into UMBC-Shady Grove have completed <em>at least</em> 45-50 credits  prior to transfer and many students have earned their associate  degree. The Political Science Department <strong>strongly encourages</strong> you to complete the following courses prior to transfer:</p>
      <ul>
        <li><strong>American Government</strong></li>
        <li><strong>Two 200-level Political Science Courses</strong></li>
        <li><strong>English Composition</strong></li>
      </ul>
  <p>In addition to the above courses, the following courses must be  completed prior to graduation from UMBC. Ideally, a student will complete as  many of the courses below as possible prior to transferring to UMBC-Shady  Grove. Given that these courses are lower-level, they must be taken at an  institution other than UMBC-Shady Grove:</p>
  <ul>
    <li>3 Arts and Humanities  courses (from at least two different disciplines)</li>
    <li>3 Social Science  courses (from at least two different disciplines)</li>
    <li>College Algebra or  Statistics</li>
    <li>2 Science courses (at  least one must have a lab component)</li>
    <li>2 Physical Education  courses (consult advisor about exceptions)</li>
    <li>World Language  201-Level (consult advisor about exceptions)</li>
  </ul>
  <p><strong>Questions about the Political  Science Program? Please contact Dr. Sunil  Dasgupta, Program Director, at <a href="mailto:sunildasgupta@umbc.edu">sunildasgupta@umbc.edu</a> or 301-738-6313. Watch the short video below to meet Dr. Dasgupta.</strong></p>

<div class="videoWrapper">
<iframe width="560" height="315" src="//www.youtube.com/embed/8gI4AaEVhv0" frameborder="0" allowfullscreen></iframe>
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
<p>General Requirements are an important  component of study at UMBC.  Please refer  to the following worksheets for guidance.</p>
<ul>
  <li>For students who entered higher education prior to Summer  2007: <a href="documents/GFRWorksheet.pdf" target="_blank">GFR  Worksheet</a></li>
  <li>For students entering higher education Summer  2007 or later: <a href="documents/GEPWorksheet.pdf" target="_blank">GEP  Worksheet</a></li>
</ul>
<h3><strong>Major Requirements:</strong></h3>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2304&returnto=556" target="_blank">Major Requirements Specific to Political Science</a></p>

<h3><strong>Additional Advising Resources</strong></h3>
<p>Additional advising resources are available <strong><a href="advising.php" target="_blank">here</a></strong>. For more information on degree  requirements, please contact the UMBC-Shady Grove Program Coordinator at 301-738-6184.</p>
  </div>

            <h3>Minor Requirements</h3>
          <div>
<p>In addition to completing a major, UMBC students also have  the option of completing a minor to supplement their  coursework. The minors listed below are available to all  students at UMBC-Shady Grove. <strong>Please note that all social work majors are <em>required</em> to complete a minor of their choosing.  </strong></p>
<p>Please click on the links below for University requirements  specific to  minors requiring coursework available at UMBC-Shady Grove. Other minor options may be explored as well. You should meet with your <a href="advising.php" target="_blank">academic  advisor</a> to discuss how your minor of interest may best fit your degree  plan.</p>
<p><strong>Minor Requirements:</strong></p>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2305&returnto=556" target="_blank">Political  Science Minor</a><br />
</p>
        </div>

            <h3>Faculty</h3>
          <div>
	<h4>Dr. Sunil Dasgupta</h4>
    <p>Program Director<br>
	<strong>Department:</strong> Political Science<br>
	<strong>Phone:</strong> 301-738-6313 <br>
    <strong>Email:</strong> <a href="mailto:sunildasgupta@umbc.edu">sunildasgupta@umbc.edu</a><br>
	<strong>Office:</strong> Bldg III, Room 4151</p>
    
    <p><img src="images/faculty/UMBC_ShadyGrove_SunilDasgupta.gif" align="left" style="padding-right:5px">Dr. Sunil Dasgupta is the  Program Director of UMBC&rsquo;s Political Science program at the Universities at  Shady Grove. He teaches international relations, foreign policy, and security  studies as well as introductory courses in political science. In his teaching,  Dr. Dasgupta has developed innovative pedagogical approaches using online  instruction and new technologies.</p>
	<p>Dr. Dasgupta&rsquo;s research  focuses on insurgency and civil wars, civil-military relations, defense  R&amp;D, and Asian security issues. His work has appeared in <em>Foreign  Affairs, Current History, </em>the<em> Washington Quarterly,</em> and the <em>New  York Times</em>, among others. He is co-author, with Stephen P. Cohen, of <em>Arming Without Aiming: India&rsquo;s Military Modernization</em> (Brookings Press,  2010). His paper, &ldquo;Regional Politics and the Prospects of Stability in  Afghanistan,&rdquo; was published in April 2013 by the United States Institute of  Peace.</p>
    <p>Before joining UMBC at USG in  2009, Dr. Dasgupta taught international relations and security studies at the  George Washington and Georgetown Universities. Prior to his academic career,  Dr. Dasgupta worked as a news reporter covering national security and military  affairs and wrote a column on business and economics. He remains a non-resident  senior fellow at the Brookings Institution in Washington D.C. Click <a href="http://www.brookings.edu/experts/dasguptas" target="_blank">here</a> to view  Dr. Dasgupta's publications on his Brookings page.</p>
    <p>Dr. Dasgupta has an M.A.  and Ph.D. in Political Science from the University of Illinois at  Urbana-Champaign.</p>

<hr>
<h4>Faculty</h4>
<ul>
    <li><a href="mailto:bnewton@umbc.edu">Newton, J.D., Brent</a></li>
    <li><a href="mailto:jstraus@umbc.edu">Straus, Dr. Jacob</a></li>
    <li><a href="mailto:ronaldw@umbc.edu">Walters, Ronald</a></li>
</ul>
</div>  
</div><br clear="all">

<!-- END Content -->
            
</div>
  </div>

    <!-- /eleven columns -->
    <div class="four columns"> 
    <!-- SIDEBAR --> 
      <?php include("includes/student-types.php"); ?>
    <!-- /five columns  --> 
    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("includes/footer-ug.php"); ?> 
  <?php include("includes/tracking.php"); ?> 
  </footer>
	</div>

</div>
  
    

  
<!-- container --> 

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/jquery.cbpFWSlider.js"></script> 
<script src="js/scripts.js"></script> 

<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true,
	  heightStyle: "content",
	  active:false
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
</body>
</html>