<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Summer Programs at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="includes/styles.css" rel="stylesheet">
<link href="includes/accordion.css" rel="stylesheet">
<script src="includes/modernizr.custom.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
<style>.accordionheader h4{font-size:175%}</style>
</head>
<body>
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
  <div  id="summer-heading">
    <a href="index"><h1 class="remove-bottom">Summer Session 2016</h1></a>
  </div>
  <div class="sixteen columns">
    <div class="eleven columns alpha" style="padding-top:1em;">
    <!-- Page Title -->
        <h2>Academic Support</h2>
    <!-- END Page Title -->       
      <div class="content">
      
     <!-- Start Content --> 
<p>UMBC is dedicated to student success. The following resources are   available during summer sessions.  Each option    provides assistance   outside of class   to improve study skills, facilitate content   understanding, and to build a strong foundation for self-directed   learning, an important skill for professionals in every  field.</p>
<p><a href="http://www.umbc.edu/summerstem"><img src="images/summer-stem-logo-1.PNG" alt="Summer STEM at UMBC logo" style="height:20px; width:8%"></a> Summer STEM at UMBC and Summer Session work together to  provide the following academic support opportunities for students enrolled in any summer session course. </p>

<div class="content">
  <div class="narrowchart">
<div id="accordion">
<div class="accordionheader">
<h4> The Math Lab<i class="fa fa-angle-down"></i></h4></div>

    <div class="accordionbody" align="left">
          <p align="left">One-on-one tutoring for most Biology, Chemistry, Mathematics, Physics and Statistics courses</p>
          <p align="left"><strong>Details about specific academic support offerings from these resources, as well as times and locations, will be available in spring 2015.</strong></p>
         
    </div>
    
      <div class="accordionheader">
    <h4>Supplemental Instruction<i class="fa fa-angle-down"></i></h4></div>

  <div class="accordionbody" align="left">
          <p>Supplemental Instruction (SI) provides regularly scheduled study sessions outside of class. A trained student peer helps students compare notes, discuss readings, develop organizational tools and practice for tests. The Learning Resources Center will coordinate SI for selected courses in the summer sessions.</p>
          
          <p>Supplemental Instruction will be available for the following courses during Summer 2015:</p>

<ul>
<li>BIOL 302 - Molecular and General Genetics</li>

<li>CHEM 123 - Introduction to General Organic and Biochemistry</li>

<li>ENCH 215 - Chemical Engineering Analysis</li>

<li>PHYS 121 - Introductory Physics I</li>
</ul>
          <p align="left"><strong>Details about specific academic support offerings from these resources, as well as times and locations, will be available in spring 2015.</strong></p>
         
</div>
     <div class="accordionheader">
    <h4>The Writing Center</h4>
    </div>

  <div class="accordionbody" align="left">
  <p>Tutors in the Writing Center can provide assistance to develop or enhance  analytical, writing, and organizational skills
  
</p>
  <p><strong>Details about specific academic support offerings from these resources, as well as times and locations, will be available in spring 2015.</strong></p></div>
  <div class="accordionheader">
<h4>Study Groups<i class="fa fa-angle-down"></i></h4></div>

  <div class="accordionbody" align="left">
  <p>Student-lead study groups and workshops</p>
  <p><strong>Details about specific academic support offerings from these resources, as well as times and locations, will be available in spring 2015.</strong></p>
  </div>
  
       <div class="accordionheader">
    <h4>The Math Gym<i class="fa fa-angle-down"></i></h4></div>

  <div class="accordionbody" align="left">
    <p>This is not tutoring in the traditional sense of the word. </p>
    <p><a href="http://www.umbc.edu/circ/hosting/mathgym/index.html" target="_blank"><strong>The Math Gym</strong></a> is an exciting new place at UMBC to "exercise" your math muscles. </p>
    <p> The Math Gym provides personal trainers to help you build up   your foundational math physique and all mathematical skills necessary   for success in your courses. </p>
    <p>Come join us in the math department lounge and see the results!</p>
    <p><strong>Details about specific academic support offerings from these resources, as well as times and locations, will be available in spring 2015.</strong></p>
    </div></div>
  
  <!-- END Content -->
  
</div></div>
<div id="dotcontainer"></div>
    </div>
    <!-- /cbp-fwslider --></div>
    <!-- /eleven columns -->
    <div class="five columns omega" style="float:right;"> 
           <!-- SIDEBAR --> 
      <?php include("includes/student-types.php"); ?>
    <!-- /five columns omega --> 
    <!-- END TOP SIDEBAR-->
   
   
  </div>
</div>
  <footer id="site-footer" class="clearfix">
    <?php include("includes/footer.php"); ?>
    <?php include("includes/tracking.php"); ?>
  </footer>
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="includes/scripts.js"></script> <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
</body>

</html>