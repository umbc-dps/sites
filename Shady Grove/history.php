<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>History | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="History at UMBC Shady Grove" />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="History | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/history" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="History at UMBC Shady Grove" />

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
<h1 class="remove-bottom">History</h1>
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
                      <a href="visit/pd-history" target="_blank">
            	<img src="images/andrew-nolan.png" alt="img03">
            </a>
                        <div class="carousel-caption-right wordwrap">
                          <h3>Meet Dr. Nolan, Program Director</h3>
                          Visit with Dr. Nolan to learn about our history program as well as internship and career opportunities in the history field.  Meet current history students, too!
            <p><a href="visit/pd-history" class="web-seemore" target="_blank">RSVP Today!</a></p>
                        </div>
                        <p id="captionone"><a href="visit/pd-history" target="_blank">Meet Dr. Nolan, Program Director</a></p>
          </li>
         <!-- END Slide One -->
        
         
          <!-- Slide Two -->
          <li id="slide2">
            <a href="https://www.youtube.com/watch?v=7xOc2rYLcws" class="video">
            	<img src="images/hist-slide.jpg" alt="img03">
            </a>
                        <div class="carousel-caption wordwrap">
                          <h3>History in the making at UMBC!</h3>
                          Think studying history is solely about focusing on the past? Check out how UMBC-Shady Grove History students apply what they learn in the classroom to "real world" opportunities today! 
            <p><a href="https://www.youtube.com/watch?v=7xOc2rYLcws" class="web-seemore video">View Video!</a></p>
                        </div>
                        <p id="captionthree"><a href="https://www.youtube.com/watch?v=7xOc2rYLcws" class="video">History in the making at UMBC!</a></p>
          </li>
         <!-- END Slide Two -->
         
       
        
         </ul>
         </div>

<p>With an emphasis on international historical perspectives, <strong>UMBC&rsquo;s Bachelor of Arts in History</strong> at the  Universities at Shady Grove is designed to provide a broad overview of the  human past by exploring how different peoples have built their worlds and made  sense of them over time. UMBC History  Alumni have enjoyed success in business, government, education, law, and public  policy—and as entrepreneurs. </p>

<p>The History Program also offers a <a href="http://history.umbc.edu/undergraduate-program/" target="_blank">minor in public history</a>, a  field which brings together historians with partners and audiences to engage in  productive conversations about the value and usefulness of the past. The public history minor introduces students to  a wide breadth of practices, including historic sites documentation, cultural  resources management, historic preservation planning, oral history, museum  studies, and digital history. All of our  students are encouraged to engage in active learning and research experiences  in the many museums, historical societies and government agencies in the  Washington-Baltimore metropolitan area.</p>

<p>Students  enrolling in the Bachelor of Arts program in History at UMBC-Shady Grove will  complete approximately two years of full-time study prior to entry and complete  the remainder of their upper-level credits with UMBC-Shady Grove. Students may transfer a maximum of 60 credits  from a community college and 90 credits from a four-year school to UMBC. </p>

  
<h3>Learn More About the Program</h3>

<div id="accordion">
  <h3>Suggested Transfer Pathways</h3>
    <div>
      <p>UMBC-Shady Grove has developed Suggested Transfer Pathways for students at <a href="documents/MC_HIST_Checklist.pdf" target="_blank">Montgomery College (MC)</a> and <a href="documents/FCC_HIST_Checklist.pdf" target="_blank">Frederick Community College (FCC)</a> who may be interested in transferring into any one of our four undergraduate programs. We have also developed recommendations for students who are transferring from <a href="documents/Recommended Checklist_History.pdf" target="_blank">other schools</a>. These documents provide an academic plan of action for transfer and a semester-by-semester outline of the recommended course progression specific to each of our academic programs.</p>
      <p><em>Please note that the Suggested Transfer Pathway is not intended to serve as an official articulation agreement.</em>
      </p>
	</div>

	<h3>Recommended Prerequisites</h3>
 <div>
     <p>UMBC-Shady Grove provides upper-level coursework for transfer students who have completed or are near completion of lower-level course requirements. As such, only  upper-level courses are offered at UMBC-Shady Grove specific to each of our  undergraduate programs. Most students  transferring into UMBC-Shady Grove have completed <em>at least</em> 45-50 credits  prior to transferring and many students have earned their Associate  Degree. The History Department <strong>strongly encourages</strong> you to complete the following courses prior to transfer:</p>
  <ul>
    <li><strong>U.S. History</strong></li>
    <li><strong>History of Western Civilization</strong></li>
    <li><strong>World History or East Asian History</strong></li>
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
  <p><strong>Questions  about the History Program? Please  contact Dr. Andrew Nolan, Program Director, at <a href="mailto:nolan@umbc.edu">nolan@umbc.edu</a> or 301-738-6182. Watch the short video below to meet Dr. Nolan.</strong></p>
  
<div class="videoWrapper"><iframe width="560" height="315" src="//www.youtube.com/embed/euwdu66XS0M" frameborder="0" allowfullscreen></iframe>
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
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2236&returnto=556" target="_blank">Major Requirements Specific to History</a></p>

<h3><strong>Additional Advising Resources</strong></h3>
<p>Additional advising resources are available <a href="advising.php"><strong>here</strong></a><strong>.</strong> For more information on degree  requirements, please contact the UMBC-Shady Grove  Assistant Director of Undergraduate Recruitment and Retention at 301-738-6184.</p>
  </div>

            <h3>Minor Requirements</h3>
          <div>
<p>In addition to completing a major, UMBC students also have  the option of completing a minor to supplement their  coursework. The minors listed below are available to all  students at UMBC-Shady Grove. <strong>Please note that all social work majors are <em>required</em> to complete a minor of their choosing.  </strong></p>
<p>Please click on the links below for University requirements  specific to  minors requiring coursework available at UMBC-Shady Grove. Other minor options may be explored as well. You should meet with your <a href="advising.php">academic advisor</a> to discuss how your minor of interest may best fit your degree  plan.</p>
<p><strong>Minor Requirements:</strong></p>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2237&returnto=556" target="_blank">History  Minor</a></p>
<p><a href="http://catalog.umbc.edu/preview_program.php?catoid=12&poid=2360&returnto=556" target="_blank">Public  History Minor</a></p>
        </div>

            <h3>Faculty</h3>
          <div>
	<h4>Dr. Andrew Nolan</h4>
    <p>Program Director<br>
	<strong>Department:</strong> History<br>
	<strong>Phone:</strong> 301-738-6182<br>
    <strong>Email:</strong> <a href="mailto:nolan@umbc.edu">nolan@umbc.edu</a><br>
	<strong>Office:</strong> Bldg III, Room 4155</p>
    
    <p><img src="images/faculty/UMBC_ShadyGrove_AndrewNolan.gif" align="left" style="padding-right:5px">Dr. Andrew Nolan is the History Program Director for UMBC at the Universities at Shady Grove. His teaching focuses on modern U.S. history, cultural and constitutional history, and historical writing and research methods. He is currently working on a book that explores the 1925 Scopes trial as a symbolic opening in an ongoing debate over the nature of the modern American nation. This research also resulted in an article titled &ldquo;Making Modern Men: The Scopes Trial, Masculinity and Progress in the 1920s United States,&rdquo; which he published in the April 2007 edition of <em>Gender &amp; History </em>.</p>
    
    <p>He is currently focusing on developing the  program at Shady Grove, which  shepherds students through the third- and fourth-years of their college careers and provide them with the UMBC history degree grounded in critical thinking, analytical reading, and clear writing. In his spare time, he will continue to research his next project, which explores popular representations of human evolution—and dinosaurs—in U.S. culture.</p>

<br>

<h4>Melissa Blair</h4>
    <p>Lecturer and Public History Minor Coordinator<br>
	<strong>Department:</strong> History<br>
	<strong>Phone:</strong> 301-738-6283<br>
    <strong>Email:</strong> <a href="mailto:mfblair@umbc.edu">mfblair@umbc.edu</a><br>
	<strong>Office:</strong> Bldg III, Room 4131 </p>
    
    <p><img src="images/faculty/UMBC_ShadyGrove_MelissaBlair.jpg" align="left" style="padding-right:5px">Melissa Blair studies the history of architecture, landscapes, and material culture. Her research and teaching relate to the cultural and architectural history of eighteenth- and nineteenth-century America and to the field of public history. She is co-author with Richard Striner of Washington and Baltimore Art Deco: A Design History of Neighboring Cities (Johns Hopkins University Press, 2014). Prior to joining the Department of History, she worked for more than 15 years as an architectural historian and historic preservationist for a variety of public, private, and nonprofit organizations. Her current research focuses on the Mid-Atlantic region’s rural buildings and landscapes, the farming patterns that shaped them, and their preservation. She is responsible for the public history minor for UMBC’s B.A. in history at the Universities at Shady Grove.</p>

<h4>Faculty</h4>
<ul>
	<li><a href="mailto:jwbirk@umbc.edu">John Birkenmeier</a></li>
    <li><a href="mailto:dkern@umbc.edu">Darcy Kern</a></li>
    <li><a href="mailto:laney@umbc.edu">Monique Laney</a></li>
    <li><a href="mailto:juloakes@umbc.edu">Julie Oakes</a></li>
    <li><a href="mailto:oyen@umbc.edu">Meredith Oyen</a></li>
    <li><a href="mailto:smith@umbc.edu">Susan Smith</a></li>
    <li><a href="mailto:dzimring@umbc.edu">David Ziring</a></li>
</ul>
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