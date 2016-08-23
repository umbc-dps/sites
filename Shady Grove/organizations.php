<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Student Organizations | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Student organizations at UMBC Shady Grove." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Student Organizations | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/organizations" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="Student organizations at UMBC Shady Grove." />



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
      
      <h3>Student Organizations</h3>
  <p>Being involved in a student  organization is an integral part of your college career. As a UMBC-Shady Grove  student, you have the opportunity to participate in many student organizations,  including a student association for each of our four undergraduate programs.  Please review the organizations below and become involved as they provide  excellent networking opportunities, a chance to collaborate with other students  on campus, and enhanced exposure to your field of interest outside of the  classroom.</p>
<hr>

<div class="accordionheader">
            <h4><a id="history" href="#history"></a>History Student Association<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
  <p>The <strong>History Student Association</strong> (HSA) is for students who are first and  foremost passionate about history. Our group focuses on approaching issues,  current and past, from a historical perspective. Whether your interest is  cultural history, intellectual history, scientific history, political history,  or any other form of history from any time period, we want you as a part of our  group! At HAS, we aim to provide students with a respectful, open, and academic  atmosphere as we discuss the issues that interest us. We hope to hold debates,  round-table discussions, field trips, and more for students throughout the  semester. To learn more, email <a href="mailto:HSA.USG@gmail.com">HSA.USG@gmail.com</a>.</p>
  </div>
 
 <div class="accordionheader">
            <h4><a id="polisci" href="#polisci"></a>Political Science Student Organization<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
  <p>As members of the <strong><a href="http://my.umbc.edu/groups/usg-psso" target="_blank">Political Science Student Organization</a></strong>,  we bring together UMBC Political Science students at Shady Grove and others  interested in subject matter of Political Science at the Universities at Shady  Grove. Our mission is to promote the scientific study of politics through  discussion, seminars, social activities and public service projects. We also  act as liaison between our members, the administration, faculty, and staff for  both the UMBC main campus and the Universities at Shady Grove. To learn more,  email <a href="mailto:psso.usg@gmail.com">psso.usg@gmail.com</a>. </p>
  </div>
  
   <div class="accordionheader">
            <h4><a id="psychology" href="#psychology"></a>Psychology Student Association<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
  <p>The Psychology Student Association (PSA) at USG is a student organization which includes both Psychology majors as well as students with interests in the psychological field. Throughout the semester we engage in various service and social events as well as study groups and speaking engagements. In the past, we have worked with the Boys &amp; Girls Club of America, For 3 Sisters as well as various community and charity events. To learn more contact Ana Kapneck at <a href="mailto:akap1@umbc.edu" target="_blank">akap1@umbc.edu</a>, Pedro Branco <a href="mailto:bpedro1@umbc.edu" target="_blank">bpedro1@umbc.edu</a> or <a href="mailto:sgpsa-group@umbc.edu" target="_blank">sgpsa-group@umbc.edu</a>.</p>
</div>
  
   <div class="accordionheader">
            <h4><a id="socialwork" href="#socialwork"></a>Social Work Student Association<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
  <p>The <strong><a href="http://my.umbc.edu/groups/usg-swsa" target="_blank">Social Work Student Association</a></strong> (SWSA) is an organization designed to involve students into the community and  volunteer their time and energy. Throughout the school year, we hold several  events/fundraisers, organize groups of volunteers for needs throughout the  holiday seasons, and host a large fundraiser event to benefit an organization  of our choice. This is beneficial to students who are interested in learning  about their communities and their multiple needs. It is a great way to increase  professional development while taking classes and it is a great resume builder.  To learn more, email <a href="mailto:swsa-usg@umbc.edu">swsa-usg@umbc.edu</a>.</p>
  </div>

   <div class="accordionheader">
            <h4><a id="tausigma" href="#tausigma"></a>Tau Sigma<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">  
  <p><strong><a href="http://my.umbc.edu/groups/tausigma" target="_blank">Tau Sigma</a></strong> is a National Honor Society aiming to recognize the academic achievement of students transferring to UMBC from another academic institution and to encourage and promote the students' involvement at UMBC. To join, a student must transfer with a 3.5 GPA or in top 20% of incoming class  and with at least 30 credits and be a full-time student while maintaining a 3.3 GPA at UMBC. Members must attend 2 general meetings and participate in 2 events per semester prior to an informal interview and induction. Why join? Students will gain recognition for academic achievement and leadership experience. Get support through the transition to UMBC so you can continue to succeed! To learn more, contact Beth Cocker at <a href="mailto:ecocker1@umbc.edu">ecocker1@umbc.edu</a>.</p>
  </div>

   <div class="accordionheader">
            <h4><a id="pat" href="#pat"></a>UMBC Peer Advisory Team<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">    
  <p>As current UMBC-Shady Grove students, <strong><a href="pat.php">UMBC Peer Advisory Team</a></strong> (PAT) members serve as a critical point of contact in the successful and seamless transition of new students transferring to UMBC-Shady Grove from other institutions. PAT members undergo extensive leadership development and work closely with UMBC-Shady Grove administrative staff, faculty, and fellow current students to reach out, serve and create meaningful connections with prospective students through a variety of formal and informal recruitment and retention events.  To learn more, email Chelsea Moyer at <a href="mailto:csmoyer@umbc.edu">csmoyer@umbc.edu</a>.</p>
  </div>
  
  <br clear="all">
<p>There are many other student organizations available to  you at The Universities at Shady Grove. For additional information on all student organizations, click <a href="http://shadygrove.umd.edu/campus-services/student-services/student-organizations" target="_blank">here</a>.</p>

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