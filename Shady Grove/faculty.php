<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Faculty Resources | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC Shady Grove Faculty Resources" />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Faculty Resources | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/faculty" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="UMBC Shady Grove Faculty Resources" />

<link href="css/styles-ug.css" rel="stylesheet">
<link href='css/magnific-popup.css' rel='stylesheet'>
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




	


div.accordionheader{background-color: #ffdda0;}
.accordionheader {color:#000; margin-top:8px; text-align: left;}
.accordionbody
.accordionbody ul li {list-style:square}
.accordionheader:hover{cursor:pointer}

i { 
	float:right;
	padding:5px;
    -webkit-transition:all 300ms ease-in 0s;
    -moz-transition: all 300ms ease-in 0s;
    -o-transition: all 300ms ease-in 0s;
	transition: all 300ms ease-in 0s;}

.ui-state-active i {
    color: #000;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}
.accordionheader h4{font-size:12pt; padding:5px; line-height:14pt}

.style21 {font-size: 12px}
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
<h1 class="remove-bottom">Faculty Resources</h1>
</a>
  </div>
    <div class="sixteen columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
      <div class="narrowchart">
        <div id="accordion"> 
        
    <!-- Start Content -->   
      <div class="content">
      
      <h3>Faculty Resources</h3>
      	<div class="accordionheader">
            <h4><a id="a" href="#a"></a>Important Links<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
 			<ul>
				<li><a href="http://www.umbc.edu/fdc/" target="_blank">UMBC Faculty Development Center</a></li>
      <li><a href="http://provost.umbc.edu/faculty-handbook/" target="_blank">UMBC Faculty  Handbook</a></li>
      		</ul>
          </div>
          
       <div class="accordionheader">    
           <h4>Handouts and &quot;Cheat Sheets&quot;:<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
        <ul>
          <li><a href="http://www.umbc.edu/fdc/teaching_learning.php" target="_blank">Teaching  and Learning Topics</a></li>
          <li><a href="http://www.cmu.edu/teaching/solveproblem/index.html" target="_blank">Solving a  Teaching Problem</a></li>
          <li><a href="documents/TheSyllabusasaTeachingTool.pdf" target="_blank">The  Syllabus as a Teaching Tool</a></li>
          <li><a href="documents/TeachingEffectivelyandEfficiently.pdf" target="_blank">Teaching  Effectively and Efficiently</a></li>
          <li><a href="documents/PromotingStudentsAbilitytoRetainInformationandApplyIt.pdf" target="_blank">Promoting  Students' Ability to Retain Information and Apply it in New Situation</a></li>
        </ul></div>
          
       <div class="accordionheader">    
			<h4>Top Teaching Books:<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
		<ul>
          <li>Ambrose, S,  et al. (2010) <strong>How learning works: Seven research-based principles for smart  teaching</strong>. San Francisco: Jossey-Bass. </li>
          <li>Angelo, T.  A., &amp; Cross, K. P. (1993). <strong>Classroom assessment  techniques: A handbook for college teachers</strong> (Second Ed.). San  Francisco: Jossey-Bass. </li>
          <li>Bain, K.  (2004). <strong>What the best college teachers do</strong>. Cambridge, MA:  Harvard University Press. </li>
          <li>Barkley, E.  (2009) <strong>Student engagement techniques: A handbook for college faculty</strong>.  San Francisco: Jossey-Bass. </li>
          <li>Bean, J. C.  (2011). <strong>Engaging ideas: The professor's guide to integrating writing,  critical thinking, and active learning in the classroom</strong> (Second  edition). San Francisco: Jossey-Bass. </li>
          <li>Nilson, L.  (2010) <strong>Teaching at its best: A research-based resource for college  instructors</strong> (Third edition). San Francisco: Jossey-Bass. </li>
          <li>Walvoord, B.  E., &amp; Anderson, V. J. (2010). <strong>Effective grading: A tool for  learning and assessment in college </strong>(Second edition). San Francisco:  Jossey-Bass.</li>
        </ul></div>
          
       <div class="accordionheader">
        
      <h4>Recorded Development Sessions:<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
        <ul>
          <li><a class="video" href="https://www.youtube.com/watch?v=AIxPjRv0S0I">iPads in the Classroom</a></li>
          <li><a class="video" href="http://www.youtube.com/watch?v=4ZuKNRiANOg">Viewing  Class and Grade Rosters</a></li>
        </ul>
        </div>
        
        
      <div class="accordionheader">
        
      <h4>USG Faculty  Resources<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <ul>
      	<li><a href="http://www.shadygrove.umd.edu/faculty/faculty-resources" target="_blank">Shady Grove Faculty Resources</a></li>
        <li><a href="http://www.shadygrove.umd.edu/library/services/streaming-video" target="_blank">Films on  Demand</a></li>
        <li><a href="documents/FOD-VideoIntegrationTips.pdf" target="_blank">Integration</a></li>
        <li><a href="documents/FOD-UMBCwalkthrough.pdf" target="_blank">Features</a></li>
      </ul>  
      </div>
    <br clear="all">      
      
      
      <h3>Faculty FAQs</h3>

<div class="accordionheader">
            <h4><a id="a" href="#a"></a>myUMBC, Classes and Grades<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p><strong>I forgot my myUMBC account password.  What do I do?</strong></p>
      <ul>
        <li>Click <a href="https://webadmin.umbc.edu/admin/Security/PasswordAssistance" target="_blank">here</a>.</li>
        <li>Enter the  information requested.</li>
        <li>Verify your  e-mail address. </li>
        <li>Answer your  security questions. </li>
        <li>Password  reset link (active for 24 hours) will be sent to the alternate e-mail address  you provided. </li>
      </ul>
      
      <p><strong>How do I submit grades? When are grades due?</strong></p>
      <p>Click <a href="documents/GradingRoster.pdf" target="_blank">here</a> for  step-by-step directions, including screen shots. Grade submission  deadlines are available <a href="http://registrar.umbc.edu/academic-calendar/grading-schedule/" target="_blank">here</a>.</p>
      <p><strong>How do I view my course roster and teaching  schedule?</strong></p>
      <p>Click <a href="https://wiki.umbc.edu/display/sa/view+roster+as+instructor" target="_blank">here</a> for  step-by-step directions.</p>
      <p><strong>I need to change a student's grade.  What is the process?</strong></p>
      <p>Please contact  Caitlin Scheidegger (<a href="mailto:cscheid1@umbc.edu">cscheid1@umbc.edu</a>) to begin the process.  Forms must be completed on-site at UMBC-Shady Grove in person before  being submitted to the appropriate contacts on main campus. Please also review the revised grade change procedure effective June 1, 2014 <a href="documents/GradeChangeProcedures.pdf" target="_blank">here</a>.</p>
      <p><strong>When is it appropriate to assign a grade of an &ldquo;I&rdquo; or to  give an &ldquo;Incomplete?&rdquo;</strong></p>
      <p>A grade of &ldquo;I&rdquo; may not be awarded unless  specifically requested by a student. Should a student ask questions about an  incomplete grade option please keep the following factors in mind:</p>
      <ul>
          <li>An incomplete grade should only be considered  under exceptional circumstances for course work that has been qualitatively  satisfactory but, for reasons beyond the student&rsquo;s control, cannot be completed  on time.</li>
          <li>Generally, an incomplete grade is granted when  only a small portion of work is remaining to complete the course. </li>
          <li>An incomplete grade should not be granted early  in the semester. If an incomplete grade is requested up through the 10th week  of the semester, the student should be advised to consider a course drop or  course withdrawal depending on the timing.</li>
          <li>If an incomplete grade is granted, the student  should not re-register for or participate unofficially in the course in a later  term as a means to makeup the incomplete work.</li>
          <li>The outstanding course work must be completed  under the guidance of the original instructor by the date specified, even if  the course is not offered again, the instructor is not in residence, or the  student is not enrolled in the university.</li>
          <li>If a grade change has not been submitted by the  date grades are due at the end of the regular semester following the one in  which the &ldquo;I&rdquo; was issued, a grade of &ldquo;F&rdquo; will be awarded automatically, unless  the instructor requests a one-time, one semester extension of the &ldquo;I&rdquo; grade by  submitting an RT Help Ticket to the Registrar&rsquo;s Office.</li>
        </ul>
      </ul>
      <p><strong>I need to assign an &quot;incomplete&quot; to  a student this semester? What steps should I take moving forward?</strong></p>
      <p>Please first  review UMBC's <a href="http://www.umbc.edu/catalog/2012/pages/requirements.html" target="_blank">Incomplete  Policy</a>.  Then, follow the listed steps:</p>
      <ul>
        <li>Give  student a grade of &quot;Incomplete&quot; on the grade roster.</li>
        <li>Set up a  contract with student to complete the work (see sample <a href="documents/ContractforIncompletes.pdf" target="_blank">here</a>).</li>
        <li> Provide necessary  contact information so student can stay in touch in order to complete the  work. Student must complete the work by the end of the next academic semester or the grade  defaults to an                  &quot;F&quot;.</li>
        <li>When the student completes the work, contact Caitlin Scheidegger at <a href="mailto:cscheid1@umbc.edu">cscheid1@umbc.edu</a> to complete a change of grade form.</li>
      </ul>
      </div>
    
    <div class="accordionheader">
            <h4><a id="b" href="#b"></a>Blackboard<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
        <p><strong>How do I make my Blackboard course site  available to my students?</strong><br>
        Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=22708244" target="_blank">here</a> for step-by-step directions,  including screen shots.</p>
      <p><strong>How do I export my old Blackboard course?</strong><br>
        Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=22708244" target="_blank">here</a> for step-by-step directions,  including screen shots.</p>
      <p><strong>How do I import content to my new Blackboard  course?</strong><br>
        Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=22708253" target="_blank">here</a> for  step-by-step directions, including screen shots.</p>
      <p><strong>How do I create a Blackboard assignment?</strong> <br>
        Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=22708781" target="_blank">here</a> for  step-by-step directions, including screen shots.</p>
      <p><strong>How do I create a SafeAssignment in  Blackboard?</strong><br>
        Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=29851970" target="_blank">here</a> for  step-by-step directions, including screen shots.</p>
      <p><strong>How do I submit a SafeAssignment in  Blackboard?</strong><br>
        Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=22708792" target="_blank">here</a> for  step-by-step directions, including screen shots.</p>
        </div>

    <div class="accordionheader">
            <h4><a id="c" href="#c"></a>Textbooks/Materials<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p><strong>Where do I submit my textbook information for the upcoming semester?</strong><br>
  Submit your textbook information <a href="https://docs.google.com/forms/d/1XbtTtl1SIx44G42gbXbojBPvmW6CUQNiEQATFzdzNZ4/viewform" target="_blank">here</a>. Please  e-mail the UMBC-Shady Grove Graduate Assistant, at <a href="mailto:sgga@umbc.edu">sgga@umbc.edu</a> if you are need of a desk copy as  well. Our GA will e-mail you when your desk copy  arrives.</p>
      <p><strong>How do I place a book on course reserve at the USG Priddy Library?</strong><br>
        Click <a href="http://www.shadygrove.umd.edu/library/services/course-reserves/faculty-course-reserves" target="_blank">here</a> for detailed instructions.</p>
      <p><strong>How do I request examination books and/or Scantron forms?</strong><br>
        Please e-mail the UMBC-Shady Grove Graduate Assistant, at <a href="mailto:sgga@umbc.edu">sgga@umbc.edu</a> at least three days in advance with your specific request.  Materials will be placed in your mailbox for pick-up.</p>
        </div>

    <div class="accordionheader">
            <h4><a id="d" href="#d"></a>Academic Policies and Procedures<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
        <p><strong>What is UMBC's policy on final examinations?</strong> <br>
        Please see  section 14.15 of the <a href="http://provost.umbc.edu/faculty-handbook/" target="_blank">faculty handbook</a> for final  examination policies.</p>
      <p><strong>My class will be conducting research with  human subjects this semester. How do I receive IRB approval? Do I  need IRB approval?</strong><br>
        Recently,  UMBC has updated their policies and procedures on IRB approval. Please visit their website for <a href="http://research.umbc.edu/institutional-review-board-human-subjects/" target="_blank">more  instruction</a>. Any  questions can be directed to your Program Director or Tim Sparklin at  410-455-2737 or <a href="mailto:sparklin@umbc.edu">sparklin@umbc.edu</a>.</p>
      <p><strong>Where can I find information on Academic  Integrity policies and/or forms for reporting academic misconduct?</strong><br>
        Click <a href="http://oue.umbc.edu/files/2015/09/iii-1.10.03.pdf" target="_blank">here</a> for detailed information on  UMBC's Academic Integrity policies, tools, and resources to prevent and educate,  and instructions on submitting reports. You can also find links at the  bottom of your myUMBC Faculty Center page.</p>
      <p><strong>I have a student attending a course in which they are not on the course roster after the schedule adjustment period. Is this ok?</strong><br>
      It is against university policy for a student to  attend and/or participate in a course for which they are not on the course  roster after the end of the schedule adjustment period. Should you be  approached by a student who has not gained a seat in a course by the end of the  schedule adjustment period please keep the following factors in mind:</p>
        <ul>
          <li>A student should not be encouraged to submit a  late-add petition unless failure to enroll was for a reason outside their  control.</li>
          <li>Failure to pay an overdue balance or having a  registration block is not out of a student&rsquo;s control and does not provide basis  for approving a late-add petition.</li>
          <li>Having access to Blackboard or having a spot on  the waitlist does not constitute formal registration in a course and does not  provide basis for approving a late-add petition.</li>
          <li>Courses added after the end of the schedule  adjustment period (even with OUE approval) may not be considered for the  student&rsquo;s financial aid eligibility due to federal regulations.</li>
          <li>Students may incur additional charges for late  registration.</li>
        </ul>
        </div>

    <div class="accordionheader">
            <h4><a id="e" href="#e"></a>On-Campus Logistics<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
        <p><strong>Where can I work while on campus?</strong><br>
        We have two  faculty offices available at USG located in the UMBC wing of the Camille  Kendall Academic Center (Building III): III-4123 and III-4125. Your  mailbox is located in III-4123. Students are not permitted  to enter either of these offices without faculty supervision. If a  student needs to deliver something to your mailbox, please direct him/her to  see a UMBC staff member in III-4159.</p>
      <p><strong>How do I request an exam proctor?</strong></p>
      <ul>
        <li>Review guidelines <a href="documents/ProctoringGuidelines.pdf" target="_blank">here</a>.</li>
        <li>Review the available times and dates <a href="https://docs.google.com/a/umbc.edu/forms/d/1O1Gho2sYm1MhMgTjr2lOm9MltDEgzabbbczSL_Ah6Is/viewform" target="_blank">here</a>.</li>
        <li>Submit the <a href="https://docs.google.com/a/umbc.edu/forms/d/1O1Gho2sYm1MhMgTjr2lOm9MltDEgzabbbczSL_Ah6Is/viewform" target="_blank">request form</a> after arranging the date and time with the student.</li>
        <li>Any questions can be directed to Ashley Waters at <a href="mailto:awaters@umbc.edu">awaters@umbc.edu</a>.</li>
      </ul>
      
      <p><strong>I moved and need to change my address. What steps do I need to take?</strong></p>
      <ul>
        <li>Email <a href="mailto:awaters@umbc.edu">awaters@umbc.edu</a> with the update.</li>
        <li>Submit a <a href="https://rt.umbc.edu/SelfService/CreateTicketInQueue.html" target="_blank">help ticket</a> (submit it under the Human Resources Tab).</li>
        <li>For payroll, submit <a href="http://comptroller.marylandtaxes.com/Government_Services/State_Payroll_Services/Static_Files/Address%20Payrollform.pdf" target="_blank">this form</a> per the instructions.</li>
        <li>If you have any benefits with the State of MD, submit <a href="http://hr.umbc.edu/forms/benefits/" target="_blank">this form</a> per the instructions.</li>
      </ul>
      </div>
<br clear="all">

<hr>
      <h3>Faculty Events</h3>
    <p>Learn improved teaching techniques, embrace new classroom management systems and more through our many collaborative faculty events!  Mark your calendars and register today for the following events:</p>
    
<h5>Faculty Meet &amp; Greet</h5>
    <p><strong>Wednesday, August 18, 2016 • 6 p.m. – 7:30 p.m.<br>
Camille Kendall Academic Center, III-3156</strong><br>
<a href="http://my.umbc.edu/groups/sgfaculty/events/40979" target="_blank">RSVP</a><br>
<em>We invite all faculty, new and returning, to join us for a light dinner to meet fellow instructors, understand important UMBC-Shady Grove procedures, and receive updates on services at USG. This event will be a great resource to all who attend.</em></p>

<h5>Faculty Appreciation Day</h5>
    <p><strong>Tuesday, October 18, 2016 • 10 a.m. – 6 p.m.<br>
Camille Kendall Academic Center, III-4124</strong><br>
<a href="http://my.umbc.edu/groups/sgfaculty/events/41492 " target="_blank">RSVP</a><br>
      <em>We can never say thank you enough for what you do as instructors! Enjoy this day celebrating you, our faculty, with treats and refreshments available in III-4124 as mid-terms are upon us!</em></p>


      </div> 
    </div>
    </div>
    </div>
	<!-- END Content -->

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