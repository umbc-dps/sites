<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Student Success Resources | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="If you are having problems in one or more of your classes, now is the time to take action." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Student Success Resources | Summer Programs at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/studentsuccess/" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="If you are having problems in one or more of your classes, now is the time to take action." />



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
<h1 class="remove-bottom">Student Success Resources</h1>
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
      <h3>Your Success: Take Action</h3>
<p><strong>If  you are having problems in one or more of your classes, now is the time to take  action.</strong></p>
<p>The UMBC community is well aware of the difficulties many students face. <strong>We  are ready to help you be successful this semester and throughout your academic  career</strong>. Our <strong>Action Resource Center</strong> will guide you through the  steps you can take to achieve success.</p>
<p>If you would like to speak with someone about your concerns, please contact Shady Grove Administrative Team at 301-738-6081.</p>
<p>We wish you success in achieving your  academic goals.</p>

<h4>Action Resource Center</h4>
<p>Please click on the links below for additional  information and guidance on topics that are of interest and/or of concern to  you as you pursue personal and academic success. </p>

<div class="accordionheader">
            <h4><a id="a" href="#a"></a>I'm having trouble with my transition to UMBC-Shady Grove.<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>Adjusting to a new school can be challenging. Whether it&rsquo;s academic or  personal, below are some resources that can help you with your transition:</p>
<ul>
  <li><a href="http://fye.umbc.edu/programs/trs/" target="_blank">TRS 201</a>: Transfer Seminars are designed to assist in  the successful transition of transfer students from their previous college or  university to UMBC. The course focuses on developing and understanding the skills  needed and the academic expectations to achieve success at an Honors  University. The materials covered will complement the work that is being done  in upper-level courses in your major, and it will contain academic material  selected by the Department that has been identified as a barrier to the success  of transfer students. Once you click the hyperlink, scroll to the bottom of the  page for the Shady Grove course.</li>
  <li><a href="http://www.shadygrove.umd.edu/student-services/center-for-academic-success" target="_blank">Center for Academic Success</a>, located in Building III-1134 in the Office of Student &amp; Academic  Services (SAS) Suite provides the following services:</li>
  <ul>
    <li>Writing assistance</li>
    <li>Guided Study Sessions</li>
    <li>Workshops on Time Management</li>
    <li>Academic Coaching</li>
    <li>Tutoring</li>
    <li>Test Proctoring</li>
  </ul>
  <li>USG also provides free, confidential counseling services at its <a href="http://www.shadygrove.umd.edu/student-services/center-for-counseling-and-consultation" target="_blank">Center for Counseling and Consultation</a>, located in Building III, Room 1134 (enter through Library). Please call  301-738-6273 to make an appointment.</li>
</ul>
</div>

<div class="accordionheader">
            <h4><a id="b" href="#b"></a>I received an FYI Alert from my instructor.<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>If you received an FYI  Alert from your instructor, you may be at risk for receiving a &quot;D&quot; or  an &quot;F&quot; grade in an academic course. The goal of the alert is to  encourage you to act NOW to take the necessary actions to improve your grade.</p>
<p>Here are some ideas that  may help you become successful in the course:</p>
<ul>
  <li>Talk to your instructor/s in the course(s). Ask for strategies that will help you understand and study the subject.</li>
  <li>Find out if the department has additional  academic support services, such as discussion groups or test files.</li>
  <li>Speak with your academic advisor.</li>
  <li>Consider using different <a href="http://lrc.umbc.edu/alerts/study-well/" target="_blank">study techniques</a>.</li>
  <li>Visit the <a href="http://www.shadygrove.umd.edu/student-services/center-for-academic-success" target="_blank">Center for Academic Success</a> for writing  assistance, guided study sessions, workshops on time management, academic  coaching, tutoring, and/or disability support. The office is located in  Building III-1134 in the Office of Student &amp; Academic Services (SAS) Suite.</li>
  <li>If you are feeling stressed or overwhelmed,  counselors are available at the <a href="http://www.shadygrove.umd.edu/student-services/center-for-counseling-and-consultation" target="_blank">Center for Counseling and Consultation</a>, located in Building III, Room 1134 (enter through Library).  Please call 301-738-6273 for an appointment.</li>
</ul>
</div>

<div class="accordionheader">
            <h4><a id="c" href="#c"></a>I am on academic probation.<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>If you are on academic probation, then you should take immediate action  to improve your academic performance.</p>
<p>If not, you may be subject to academic suspension or dismissal in a  future semester. Also, you will not be eligible to receive a UMBC bachelor&rsquo;s  degree until you are in good academic standing.</p>
<p>Here are a few steps you can take:</p>
<p><em><strong>Before the  semester</strong></em></p>
<ul>
  <li>Speak with your academic advisor and discuss a class schedule that is manageable.</li>
  <li>Think about repeating key courses in which you have performed poorly for a second attempt or <a href="http://academicpolicy.umbc.edu/home/undergraduate-petitions/" target="_blank">petitioning</a> the Office of Undergraduate Education for a third and final attempt when warranted.</li>
  <li>You may want to consider <a href="http://fye.umbc.edu/programs/trs/" target="_blank">TRS 201</a>. Transfer Seminars are designed to assist in the successful transition of transfer students from their previous college or university to UMBC. The course focuses on developing and understanding the skills needed and the academic expectations to achieve success at an Honors University. The materials covered will complement the work that is being done in upper-level courses in your major, and it will contain academic material selected by the Department that has been identified as a barrier to the success of transfer students.</li>
</ul>
<p><em><strong>During the  semester</strong></em></p>
<ul>
  <li>Talk to your instructor(s) in the course(s). Ask for strategies that will help you understand and study the subject.</li>
  <li>Find out if the department has additional academic support services, such as discussion groups or test files.</li>
  <li>Speak with your academic advisor and discuss whether reducing your overall credit load will allow more time to focus on each course.</li>
  <li>Consider using different <a href="http://lrc.umbc.edu/alerts/study-well/" target="_blank">study techniques</a>.</li>
  <li>Visit the <a href="http://www.shadygrove.umd.edu/student-services/center-for-academic-success" target="_blank">Center for Academic Success</a> for writing assistance, guided study sessions, workshops on time management, academic coaching, tutoring, and/or disability support. The office is located in Building III-1134 in the Office of Student &amp; Academic Services (SAS) Suite.</li>
  <li>Adjust your work schedule and extracurricular commitments.</li>
</ul>
</div>

<div class="accordionheader">
            <h4><a id="d" href="#d"></a>I am not attending class and/or have not handed in class assignments.<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>Depending on where you are in the semester, you may have time to improve  your attendance and/or coursework.</p>
 <p>Here are a few steps you can take:</p>
<ul>
  <li>Start to attend all your classes and <a href="http://my.umbc.edu/apps/bb/activity" target="_blank">compare your Blackboard activity with course peers</a>. </li>
  <li>Talk with your instructor(s) in the course(s) to explain why you haven't been to class and to see how your absences have and  will affect your grade. Find out what you can do to make up missed assignments,  etc.</li>
  <li>If for some reason, you cannot attend your  class or classes, talk to your instructor and/or <a href="advising" target="_blank">academic advisor</a>.</li>
  <li>If time management or academic difficulty is an issue, visit the <a href="http://www.shadygrove.umd.edu/student-services/center-for-academic-success" target="_blank">Center for Academic Success</a>, located in  Building III-1134 in the Office of Student &amp; Academic Services (SAS), for  ways to improve.</li>
  <li>If you are feeling stressed or overwhelmed,  counselors are available at the <a href="http://www.shadygrove.umd.edu/student-services/center-for-counseling-and-consultation" target="_blank">Center for Counseling and Consultation</a>, located in Building III, Room 1134 (enter through Library). Please call 301-738-6273 for an appointment.</li>
</ul>
</div>

<div class="accordionheader">
            <h4><a id="e" href="#e"></a>I am studying, but I'm getting poor results.<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>Learning is a matter of committing both time and energy to your studies.  What does this mean? For every hour in class, you should be spending two to  three hours studying. Some subjects may be more demanding than others. If you  find one course harder than another, you must devote more time and energy to  that difficult course.</p>
<p>Do you feel that you do not have enough time  to study? Do you put things off until the last minute? Do tests make you  nervous? Are you studying hard, yet you're not doing well?</p>
<p>Below are a few strategies that might point  you in the right direction:</p>
<ul>
  <li>Talk to your instructor(s) in the course(s).  Ask for strategies that will help you understand and study the subject.</li>
  <li>Find out if the department has additional  academic support services, such as discussion groups or test files.</li>
  <li>Consider using different <a href="http://lrc.umbc.edu/alerts/study-well/" target="_blank">study techniques</a>.</li>
  <li>Visit the <a href="http://www.shadygrove.umd.edu/student-services/center-for-academic-success" target="_blank">Center for Academic Success </a>for writing  assistance, guided study sessions, workshops on time management, academic  coaching, and/or disability support. The office is located in Building III-1134  in the Office of Student &amp; Academic Services (SAS) Suite.</li>
  <li>If you are feeling stressed or overwhelmed,  counselors are available at the <a href="http://www.shadygrove.umd.edu/student-services/center-for-counseling-and-consultation" target="_blank">Center for Counseling and Consultation</a>, located in Building III, Room 1134 (enter through Library). Please call 301-738-6273 for an appointment.</li>
</ul>
</div>

<div class="accordionheader">
            <h4><a id="f" href="#f"></a>I'm having personal problems.<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>If you feel that your personal life is interfering with your academic  success, we encourage you to check out the following resources:</p>
<ul>
  <li>The <a href="http://www.shadygrove.umd.edu/student-services/center-for-counseling-and-consultation" target="_blank">Center for Counseling and Consultation</a> (CCC), located in Building III, Room 1134 (enter through Library).</li>
</ul>
  <li>The CCC provides:</li>
<ul>
  <li>Intake and emergency services (including  walk-in hours)</li>
  <li>Individual and couples counseling</li>
  <li>Career/major counseling</li>
  <li>Group counseling</li>
</ul>
<p>Please call  301-738-6273 for more information or to set up an appointment.</p>
<ul>
  <li>Housed on UMBC&rsquo;s main campus, the <a href="http://www.umbc.edu/womenscenter/" target="_blank">Women&rsquo;s Center</a> is an excellent resource for all UMBC  students.</li>
</ul>
<ul>
  <li>If you have questions about child care or are  in need of a housing referral, please visit the <a href="http://www.shadygrove.umd.edu/student-services/office-of-student-services " target="_blank">Office of Student Services</a>, located in Building III, Room 1100.</li>
</ul>
</div>

<div class="accordionheader">
            <h4><a id="g" href="#g"></a>I have money problems.<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>If you are having trouble with finances, here is a list of resources  that may be of help:</p>

<ul>
  <li><a href="http://www.umbc.edu/financialaid/" target="_blank">Financial Aid</a>: Learn about FAFSA, applying for loans, and finding scholarships.  Financial aid counselors are available to answer your questions. Please note that counselors are assigned to  students based on their last names. For more info, please call 410-455-2387.</li>
  <li><a href="http://www.umbc.edu/financialaid/scholarship_current.html" target="_blank">Scholarships</a>: Check out merit-based scholarships for  current students. Did you know that the Universities at Shady Grove has  scholarships, as well? Click <a href="http://www.shadygrove.umd.edu/scholarships">here</a> for USG scholarships.</li>
  <li><a href="http://www.shadygrove.umd.edu/student-services/career-and-internship-center" target="_blank">Career Services Center</a>: You'll discover many resources to find jobs. Be sure to set up an  account on <a href="http://www.careers.umbc.edu/umbcworks/">UMBCworks</a> as well!</li>
  <li><a href="http://sbs.umbc.edu/payment-plan/">Monthly Tuition Payment Plan</a>: This affords you the ability to conserve your savings and budget your  expenses.  For more info, please call  410-455-2288.</li>
  <li><a href="http://sbs.umbc.edu/" target="_blank">Student Business Services</a>: Missed  some payments? Noticed a billing mistake? Want to pay online? This is the place  to go. Have some questions? Try this <a href="http://sbs.umbc.edu/faq/">FAQ link</a>. For more info, please call  410-455-2288.</li>
  <li><a href="http://www.shadygrove.umd.edu/student-services/center-for-counseling-and-consultation" target="_blank">Center for Counseling and Consultation</a>: If  this is personal, you are encouraged to visit the office located in Building  III, Room 1134 (enter through Library). You may also call 301-738-6273 for more  information or set an appointment.</li>
</ul>
</div>

<div class="accordionheader">
            <h4><a id="h" href="#h"></a>I want to drop/withdraw from a class.<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>Depending on where you are in the semester, you may ask yourself whether  the decision to withdraw or drop a class is reasonable. However, withdrawing or  dropping from courses may:</p>
<ul>
  <li>lead to loss of financial aid or health  insurance </li>
  <li>have an impact on immigration status</li>
  <li>increase the  time it takes to graduate</li>
</ul>
<p><strong>Dropping a class</strong>– removing a course from your schedule during the  Schedule Adjustment Period at the beginning of the semester. You may receive a  pro-rated refund based on the date the course is dropped. <a href="http://registrar.umbc.edu/academic-calendar/pdf-calendars/">Deadlines to drop courses apply</a>.</p>
<p><strong>Withdrawing from a class</strong> - removing a course from your schedule after  the Schedule Adjustment Period. Your transcript will reflect a grade of  &quot;W&quot; for the course. Even though you did not complete the course, a  withdrawal will be considered a course attempt. <a href="http://registrar.umbc.edu/academic-calendar/pdf-calendars/" target="_blank">Deadlines to withdraw from courses apply</a>.</p>
<p><strong>Before making the decision to drop/withdraw from a class:</strong></p>
<ul>
  <li>Talk to your instructor/s in the course(s). Ask for strategies that will help you understand and study the subject.</li>
  <li>Find out if the department has additional academic support services, such as discussion groups or test files.</li>
  <li>Speak with your academic advisor and discuss whether reducing your overall credit load will allow more time to focus on each course.</li>
  <li>Consider using different <a href="http://lrc.umbc.edu/alerts/study-well/" target="_blank">study techniques</a>.</li>
  <li>Study with a <a href="http://www.shadygrove.umd.edu/student-services/center-for-academic-success/peersupport" target="_blank">tutor</a>.</li>
</ul>
<ul>
  <li>Reach out to <a href="http://www.umbc.edu/financialaid/" target="_blank">Financial Aid</a> to see how your reward may be adjusted if  you withdraw/drop from a class. For more info, please call 410-455-2387.</li>
</ul>
<ul>
  <li>Visit the <a href="http://www.shadygrove.umd.edu/student-services/center-for-academic-success" target="_blank">Center for Academic Success</a> for writing assistance, guided study sessions, workshops on time management, academic coaching, tutoring, and/or disability support. The office is located in Building III-1134 in the Office of Student &amp; Academic Services (SAS) Suite.</li>
  <li>Adjust your work schedule and extracurricular commitments.</li>
  <li>If you are feeling stressed or overwhelmed, counselors are available at the <a href="http://www.shadygrove.umd.edu/student-services/center-for-counseling-and-consultation" target="_blank">Center for Counseling and Consultation</a>, located in Building III, Room 1134 (enter through Library). Please call 301-738-6273 for an       appointment. </li>
  <li>International students should reach out to <a href="http://www.umbc.edu/ies/services/current.html" target="_blank">International Education Services</a> to see if withdrawing/dropping a course will affect their immigration status. </li>
</ul>
<p><strong>If you make the decision to drop/withdraw  from a course, then there are two  steps that must be completed:</strong></p>
<ul>
  <li>First, you must contact your academic advisor.</li>
  <li>Second, you must officially drop/withdraw from the course using myUMBC by the <a href="http://registrar.umbc.edu/academic-calendar/pdf-calendars/" target="_blank">semester&rsquo;s deadline</a>.</li>
</ul>
<p><strong>Please take notice:</strong> Students  may not register for a course more than two times. Students are considered  registered for a course if they are enrolled after the end of the schedule  adjustment period. Students may petition the <a href="http://academicpolicy.umbc.edu/home/undergraduate-petitions/" target="_blank">Office of Undergraduate Education (OUE)</a> for a third  and final attempt of a course taken at UMBC or another  institution. An attempt is defined as enrollment in a course, or its equivalent  at another institution, in which the student has received a grade or an  official withdraw was given. This includes credit by exam or if a student  withdraws from the entire semester/session. Students should consult with their  academic departments for additional restrictions or policies regarding repeated  courses.</p>
</div>

<div class="accordionheader">
            <h4><a id="i" href="#i"></a>I don't know what's wrong or what to do.<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
<p>If you can't find help through the Action Resource Center, please  contact Ashley Waters, Associate Director, <a href="mailto:awaters@umbc.edu" target="_blank">awaters@umbc.edu</a>, 301-738-6175.</p>    
</div>    
      </div>
      
<br clear="all"><br>

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