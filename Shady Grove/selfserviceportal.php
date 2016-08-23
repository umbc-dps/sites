<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Self-Service Portal | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC Shady Grove FAQ." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Self-Service Portal | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/selfserviceportal" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="UMBC Shady Grove FAQ." />



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




	


.style11 {  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
}
.style12 {font-family: Arial, Helvetica, sans-serif}

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
      <div class="twelve columns">
      <div class="narrowchart">
        <div id="accordion"> 
    <!-- Start Content -->   
      <div class="content">
      <h3>Self-Service Portal</h3>

<div class="accordionheader">
            <h4><a id="a" href="#a"></a>Registration<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p><strong>When can I register  for the next semester? </strong></p>
      <ul>
        <li>Registration is dictated by your registration  appointment date, which is based on the number of credits you have completed to  date</li>
        <li>You can see this date located in your myUMBC  account or by clicking <a href="http://registrar.umbc.edu/academic-calendar/registration-appointments/" target="_blank">here</a></li>
        <li>Reminder: prior to registration, you must  receive advising clearance from your advisor</li>
        <li>Click <a href="documents/HowToRegister.pdf" target="_blank">here</a> for &quot;How to Register&quot; guide.<br>
        </li>
      </ul>
      <p><strong>How do I change my major, add a second major,  or add/remove a minor?</strong></p>
      <ul>
        <li>Submit a signed <a href="documents/ChangeOfMajor.pdf" target="_blank">Declaration  of Major/Minor/Certificate</a> form. Follow these steps:</li>        <ul>
        <li>Download, complete, and sign the <a href="documents/ChangeOfMajor.pdf" target="_blank">Declaration  of Major/Minor/Certificate</a> form.</li>
        <li>Submit your form through  the UMBC RT Help system. Open a new UMBC RT Help ticket by logging in to  myUMBC and clicking &quot;Request Help&quot; from the &quot;Help&quot;  drop-down menu. Click &quot;Registration&quot; under &quot;Classes &amp;  Grades&quot; then attach your completed form.</li>
      </ul>
      </ul>
      <p><strong>I am a UMBC main campus student. Can I register for classes at UMBC-Shady Grove? </strong></p>
        <ul>
          <li>UMBC-Main Campus students may enroll in courses at the UMBC-Shady Grove Campus during the summer or winter sessions. While fall and spring semester enrollment in courses at the UMBC-Shady Grove Campus is generally limited to Shady Grove students only, exceptions to this practice may be considered depending upon capacity restrictions. UMBC-Main Campus students seeking an exception to enroll in courses at the UMBC-Shady Grove Campus during the fall or spring semesters should contact the appropriate Shady Grove Program Director to discuss options.</li>
        </ul>
        
        <ul>
          <li>Note: While tuition costs are equal at both campuses, each campus does have a different fee structure. This may result in varying total costs for course enrollment.</li>
          </ul>
          <p><strong>How do I view my Degree Audit Report?</strong></p>
        <ul>
          <li>Log on to myUMBC &gt; Undergraduate Center,  and locate the Advising and Student Support Topic. (Hint: bottom right corner  of the page)</li>
          <li>Click once on the link named Degree Audit  Report. </li>
        </ul>
        </div>
        
        <div class="accordionheader">
            <h4><a id="b" href="#b"></a>Technologies<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
        <p><strong>How do I upload a file, such as a paper, for a grade in  Blackboard?</strong></p>
        <ul>
          <li class="page-content">Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=5244774" target="_blank">here</a> for  instructions. </li>
        </ul>
        <p><strong>Why can't I see my Blackboard course?</strong></p>
        <ul>
          <li class="page-content">Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=2851116" target="_blank">here</a> for  instructions. </li>
        </ul>
        <p><strong>What is Box?</strong></p>
        <ul>
          <li class="page-content">Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=31916773" target="_blank">here</a> for  instructions. </li>
        </ul>
        <p class="page-content" style="margin-top:0;margin-bottom:0;"><strong>How do I access Box?</strong></p>
        <ul>
          <li class="page-content">Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=31916892" target="_blank">here</a> for  instructions. </li>
        </ul>
        <p><strong>How do I upload files to Box?</strong></p>
        <ul>
          <li class="page-content">Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=31916777" target="_blank">here</a> for  instructions. </li>
        </ul>
        <p><strong>How do I share files to Box?</strong></p>
        <ul>
          <li class="page-content">Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=31916813" target="_blank">here</a> for  instructions. </li>
        </ul>
        <p><strong>How do I open an RT  (Help) Ticket request?</strong></p>
        <ul>
          <li>Click <a href="https://wiki.umbc.edu/pages/viewpage.action?pageId=1867859" target="_blank">here</a> for  instructions.</li>
        </ul>
        </div>
        
        <div class="accordionheader">
            <h4><a id="c" href="#c"></a>General Education Requirements and Waivers<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p><strong>Do I have to take a foreign language and, if  so, to what level?</strong></p>
      <ul>
        <li>Yes, you must complete a foreign language through the  intermediate level (NOTE: at Montgomery College, the 201-level qualifies  as intermediate). </li>
      </ul>
      <p><strong>Does American Sign Language qualify as a  foreign language?</strong></p>
      <ul>
        <li>Yes. </li>
      </ul>
      <p><strong>Are there any language waivers or exemptions?</strong></p>
      <ul>
        <li>If you passed four years of a single foreign language in  high school, send your high school transcript to UMBC's Office of Undergraduate Admissions to receive a waiver of  the foreign language requirement. There are additional opportunities for  international students to demonstrate proficiency. Click <a href="documents/Applicationfor201proficiency.pdf" target="_blank">here</a> and download  &quot;Language Proficiency for International Students&quot; for more  information. </li>
      </ul>
      <p><strong>Where can I get more information about the  CLEP exam?</strong></p>
      <ul>
        <li>Click <a href="http://clep.collegeboard.org/register/exam" target="_blank">here</a>. Students should  review the <a href="documents/Appendix_II.pdf" target="_blank">Appendix II</a> of the UMBC  Catalog to learn which tests and scores will be accepted prior to registering for an  exam. The UMBC CEEB code for CLEP is 5835.</li>
      </ul>
      <p><strong>Where can I get more information about the  NYU exam?</strong></p>
      <ul>
        <li>Click <a href="http://scps.nyu.edu/academics/departments/foreign-languages.html" target="_blank">here</a>. Students should  review the <a href="documents/Appendix_II.pdf" target="_blank">Appendix II</a> of the UMBC  Catalog to learn which tests and scores will be accepted prior to registering for an  exam. A list of testing  centers is available <a href="http://ncta-testing.org/resources/standards/subscribers.php" target="_blank">here</a>. One possibility  is the University of Maryland, College Park Testing Office. Appointments  should be made at least one week in advance by e-mailing <a href="mailto:testingoffice@umd.edu">testingoffice@umd.edu</a> or calling 301-314-0319. </li>
      </ul>
      <p><strong>What qualifies for a Physical Education (PE)  waiver and how do I apply?</strong></p>
      <p>There are four types of PE waivers available:</p>
           
	<ol>
      <li>Age: 30 years of age or older  at the time of initial enrollment at UMBC</li>
      <li>Six months of active service = 1.5 physical  education credits</li>
      <li>Documented medical condition or disability</li>
      <li> Collegiate Athletic Participation: 1 year =  1.5 physical education credits</li>
      </ol>

<p>All PE Waiver requests require a written memo requesting  the waiver with supporting documentation (see <a href="documents/PEWaiver.pdf" target="_blank">here</a> for a sample and  documentation details). Email the memo and supporting documentation to  Mr. John Jancuska, Supervisor of Physical Education, at <a href="mailto:jancuska@umbc.edu">jancuska@umbc.edu</a>.</p>
      </ul>
      </div>
      
      <div class="accordionheader">
            <h4><a id="d" href="#d"></a>Graduation<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p><strong>How can I graduate with honors?</strong></p>
      <ul>
        <li>To be eligible for UMBC graduation honors, students must  complete at least 45 credits at UMBC (excluding institutional credits) prior to  the semester in which they are graduating. Degree candidates whose  cumulative GPA <em>at the time of graduation</em> (which is before final grades  for the current semester are posted) is between 3.5 and 3.7499 receive the  degree Cum Laude; between 3.75 and 3.9499 receive the degree Magna Cum Laude;  between 3.95 and 4.0 receive the degree Summa Cum Laude. </li>
      </ul>
      <p><strong>Can I &quot;walk&quot; in the upcoming  commencement ceremony if I am just a few credits short of completing my degree?</strong></p>
      <ul>
        <li>Undergraduate students who are enrolled to complete all degree requirements by the end of the spring semester may elect to participate in the May commencement ceremony. Undergraduate students who are enrolled to complete all degree requirements by the end of the fall semester may elect to participate in the December commencement ceremony. Students who complete their degree requirements in one of the summer sessions may elect to participate in the following December commencement ceremony and those completing their requirements during the winter session may elect to participate in the following May commencement ceremony. Students may only participate in one commencement ceremony based upon the semester in which all degree requirements will be met.</li>
        <li>In-progress coursework, including incomplete grades, will be included in the calculations when determining student’s eligibility for undergraduate commencement participation (120 credit requirement, 45 upper level requirement, and 2.0 GPA requirement).</li>
      </ul>
      <p><strong>Where do I get my cap and gown for graduation? Do I have to  go to main campus?</strong></p>
      <ul>
        <li>Approximately six weeks into the semester, you  will begin to receive emails referencing the purchasing of your cap and gown,  which must be bought new to be eligible to walk in commencement. This  information will come from the bookstore on main campus and reference ordering  in person in Catonsville.</li>
        <li>However, there is an online option to order your  cap and gown. You will receive an email from UMBC-Shady Grove administration with  details on that process once available. You do not need to go to main campus to  purchase your cap &amp; gown.</li>
      </ul>
      <p><strong>How many tickets do I receive for my friends and family to  attend commencement?</strong></p>
      <ul>
        <li>For Fall commencement, you will receive four  tickets per graduating student. The only way to receive more is to obtain them  from another graduating student who may not be using all of their assigned  tickets.</li>
        <ul>
          <li>Please note there is a viewing room on campus  where additional friends and family can view the ceremony.</li>
          <li>For Spring commencement, there are no tickets. Seating is open as it is held off-campus at a larger venue. Graduating students  are welcome to invite as many guests as they would like.</li>
          <li>For more information on commencement, visit  <a href="http://commencement.umbc.edu/" target="_blank">umbc.edu/commencement</a>.</li>
        </ul>
      </ul>
      <p><strong>It has been more than eight weeks since  graduation and I still haven't received my diploma. What should I do?</strong></p>
      <ul>
        <li>Check your Degree Audit on myUMBC and verify that  everything is listed as &quot;satisfied.&quot; If anything is not  satisfied and you think it should be, please do the following:</li>
        <ul>
        <li>Confirm that you submitted all required forms, including  final transcripts from any other institutions.</li>
        <li>Confirm that you have no outstanding charges on your  account.</li>
        <li>Contact your <a href="advising" target="_blank">academic  advisor</a> to inform him or her of the issue.</li>
        <li>Submit your issue through the UMBC RT Help  system. Open a new UMBC RT Help ticket by logging in to myUMBC and  clicking &quot;Request Help&quot; from the &quot;Help&quot; drop-down  menu. Click &quot;Graduation&quot; under &quot;Classes &amp; Grades&quot;  then describe your issue in detail.</li>
        <li>Remember, diplomas are not distributed at the  commencement ceremony. <em>The process of mailing diplomas may take up to eight weeks after graduation.</em></li>
      </ul>
      </ul>
      </div>
      
<div class="accordionheader">
            <h4><a id="e" href="#e"></a>Financial Aid<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">      
      <p><strong>My financial aid counselor needs documents to verify  information for my FAFSA. What do I do? </strong></p>
      <ul>
        <li>Any documents needed for financial aid  verification can be brought to the UMBC wing in Building III. UMBC-Shady Grove  Program Coordinators (in offices III-4159 and III-4157) can assist in verifying  and submitting the documentation to your financial aid counselor. </li>
      </ul>
      <p><strong>Who is my financial aid counselor?</strong></p>
      <ul>
        <li>Your financial aid counselor is assigned by last  name. Please click <a href="http://www.umbc.edu/financialaid/contact.html" target="_blank">here</a> to view the listing. </li>
      </ul>
      <p><strong>What is UMBC&rsquo;s FAFSA deadline and code?</strong></p>
      <ul>
        <li>UMBC&rsquo;s FAFSA deadline is February 14. </li>
        <li>Our code is 002105.</li>
        <li>For more assistance with the FAFSA, click <a href="http://www.umbc.edu/financialaid/eligibility.html" target="_blank">here</a>.</li>
      </ul>
      <p><strong>I got a green-colored card in the mail mentioning something about my  aid refund. What do I do with this card? </strong></p>
      <ul>
        <li>Do not throw this card away, as it is needed to  set your refund preferences.</li>
        <li>Click <a href="http://sbs.umbc.edu/tuition-info/refunds/" target="_blank">here</a> for step-by-step  instructions.</li>
        <li>Shady Grove students are strongly encouraged to  select the &ldquo;existing account&rdquo; option.</li>
      </ul>
      </div>
      
<div class="accordionheader">
            <h4><a id="f" href="#f"></a>Billing<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p><strong>When will my bill become available? When is my bill due? </strong></p>
      <ul>
        <li>Click <a href="http://sbs.umbc.edu/billing/e-billing-schedule/" target="_blank">here</a> for UMBC&rsquo;s  E-billing schedule.</li>
      </ul>
      <p><strong>What payment options are available? Can I pay at Shady  Grove? </strong></p>
      <ul>
        <li>Unfortunately, we <strong>cannot</strong> take payments on-site at UMBC-Shady Grove.</li>
        <li>Please see the many payment options <a href="http://sbs.umbc.edu/payments/" target="_blank">here</a>. </li>
      </ul>
      </div>
      
<div class="accordionheader">
            <h4><a id="g" href="#g"></a>Taking Classes at Other Institutions<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p><strong>I plan to take a course at another  institution and want to make sure that the course transfers properly and I earn  the appropriate credits. What should I do?</strong></p>
      <ul>
        <li>Submit a signed <a href="documents/Verification-of-Transferability.pdf" target="_blank">Verification  of Transferability</a> (VOT) form at least <em>two weeks prior</em> to taking the  course. Follow these steps:</li>
        <ul>
        <li>Download, complete, and sign the <a href="documents/Verification-of-Transferability.pdf" target="_blank">Verification  of Transferability</a> (VOT) form. (NOTE: if you will be within  your final 30 credits when taking the course, you must also check the  &quot;Residency Waiver Permission&quot; box).</li>
        <li>Submit your VOT form through the UMBC RT Help  system. Open a new UMBC RT Help ticket by logging in to myUMBC and  clicking &quot;Request Help&quot; from the &quot;Help&quot; drop-down  menu. Click &quot;Registration&quot; under &quot;Classes &amp; Grades&quot;  then attach your completed VOT form.</li>
        <li>The processed VOT form will be returned to your UMBC  email account within one week of submission. It will indicate (a) whether  or not the course will transfer for credit and (b) what requirements it will  satisfy. It will also indicate if your residency waiver request has been  approved. If you have any questions, bring the returned VOT form to your <a href="advising" target="_blank">academic  advisor</a>.</li>
        <li>After taking the course and your final grade has posted,  send an official transcript to the UMBC Office of the Registrar (1000 Hilltop  Circle, Baltimore, MD 21250).</li>
        <li>Review your Transfer  Credit Report and Degree Audit in myUMBC 4-6 weeks later to confirm that the course  transferred properly. Contact your <a href="advising" target="_blank">academic  advisor</a> with any questions or concerns. </li>
      </ul>
      </ul>
      <p><strong>I took a course at another institution prior  to enrolling at UMBC but it does not fulfill the requirement I thought it would  and/or I did not earn any credit for the course. What can I do?</strong></p>
      <ul>
        <li>Submit an <a href="documents/Course-Description-Review.pdf" target="_blank">Evaluation  of Transfer Credit</a> form to request a review of your course(s). Follow  these steps:</li>
        <ul>
        <li>Download and complete the <a href="documents/Course-Description-Review.pdf" target="_blank">Evaluation  of Transfer Credit</a> form.</li>
        <li>Submit your Evaluation of Transfer Credit form through  the UMBC RT Help system. Open a new UMBC RT Help ticket by logging in to  myUMBC and clicking &quot;Request Help&quot; from the &quot;Help&quot;  drop-down menu. Click &quot;Registration&quot; under &quot;Classes &amp;  Grades&quot; then attach your completed form.</li>
        <li>Notification of the  outcome will be sent to your UMBC email account within 3-4 weeks of submission. </li>
      </ul>
      </ul>
      </div>
      
<div class="accordionheader">
            <h4><a id="h" href="#h"></a>Academic Policies<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
      <p><strong>How many times may I repeat a single course?</strong></p>
      <ul>
        <li>Students may not register for a course more than two  times. Students are considered registered for a course when enrolled  after the end of the schedule adjustment period. Students may petition  the Office of Undergraduate Education for a third and final attempt of a course  taken at UMBC or another institution. An attempt is defined as enrollment  in a course or its equivalent at another institution in which the student has  received a grade or an official withdrawal. This includes credit by exam  or withdrawal from the entire semester/session. Students should consult  with an <a href="advising" target="_blank">academic  advisor</a> for additional restrictions or policies regarding repeated courses. Undergraduate  Petition Forms may be accessed here: <a href="http://academicpolicy.umbc.edu/home/undergraduate-petitions/" target="_blank">http://academicpolicy.umbc.edu/home/undergraduate-petitions/</a>.</li>
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