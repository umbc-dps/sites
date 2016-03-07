<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>UMBC: An Honors University In Maryland</title>

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->

    <!-- Sets the viewport width to the width of the device, so media queries work -->
 
	<link rel="image_src" href="http://www.umbc.edu/images/UMBC_fb_tmb.png" />
    <link rel="icon" type="image/png" href="images_homepage/icon.png" />
	<meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Template Styles -->
    <link rel="stylesheet" type="text/css" href="css/homepage.css" />

    <!-- Site-Specific Customizations -->
    <style type="text/css">

      #site-menu, #site-menu li a, #site-menu li ul {}
      #site-menu li:hover a {}
      #site-menu li a:hover, #site-menu li a:focus {}
      #site-menu .menu-arrow {}
      #site-menu li:hover > a .menu-arrow {}
      #site-footer {}
      #site-footer .site-name {color: #ffffff;}
      #site-footer a {}
      .layout-default .page-container-inner, .layout-home .page-container-inner {}
      /*.layout-default .page-sidebar, .layout-home .page-sidebar, .sidebar-nav a {}*/
      .layout-default .page-sidebar, .layout-home .page-sidebar, .sidebar-nav a {}
      .sidebar-nav a .secondary {}
      .sidebar-nav > ul > li > a, .sidebar-nav > ul > li.current-menu-item > a, .sidebar-nav > ul > li.current-menu-ancestor > a {}
      .sidebar-nav-header {}
      .sidebar-nav a:hover, .sidebar-nav a:focus, .sidebar-nav a:hover .secondary, .sidebar-nav a:focus .secondary { }
      .sidebar-nav .current-menu-item > a:hover > .menu-arrow, .sidebar-nav .current-menu-item > a:focus > .menu-arrow {}
      .sidebar-nav .current-menu-item > a, .sidebar-nav .current-menu-item > a .secondary {}
      .sidebar-nav .current-menu-item > a > .menu-arrow, .sidebar-nav .current-menu-item > a:hover > .menu-arrow, .sidebar-nav .current-menu-item > a:focus > .menu-arrow {}
      .widget .widgettitle {background-color: #cccccc; color: #000000;}
      .widget .widgettitle a {color: #000000;}
      .widget > ul, .widget > .textwidget {background-color: #ffffff; color: #000000;}
      .widget > ul a, .widget > .textwidget a {color: #0088CC;}
      .widget .rss-date, .widget .secondary, .widget_twitter > ul a.timesince {color: #5d5656;}
      .widgetcorner, .widgetcorner .fill {}
      .layout-default .widgetcorner .corner {border-right-color: #909090;}
      .layout-home .widgetcorner .corner {border-left-color: #909090;}

      @media screen and (max-width: 767px) {
        #mobile-site-menu-expander {color: #fff;}
        .mobile-site-menu-expander-bar {background-color: #fff;}
        #site-header {}
        #site-header h1 {font-size: 30px;}
        #site-menu li:hover a {}
        .layout-default .page-sidebar, .layout-home .page-sidebar {}

        /* This is here to override any custom color set by the theme */
        .layout-default .page-container-inner, .layout-home .page-container-inner { background-color: #fff; }
      }

</style>

    <!-- Some custom styles just for older IE versions -->
    <!--[if lte IE 8]>
    <style>
      #container { border: 1px solid #ddd; border-top: none; }
      #site-footer .footer-field { float: left; }
      #site-menu ul li a { border-left: none; }
      #site-menu > ul > li > a .menu-arrow { display: none; }
      .widget-spotlight .playlist li { float: left; display: block; overflow: hidden; }
    </style>
    <![endif]-->

    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/homepage-base.js"></script>
    <script src="js/audience-tabs.js"></script>
    <script src="js/jquery.quovolver.js"></script>


    <meta name="generator" content="UMBC" />
    
    <script>
    $(document).ready(function() {
        
        // Rotating quotes for What other say
        $('#rotating-quotes .quotes').quovolver({
            children : 'li',
            transitionSpeed : 300,
            autoPlay : false,
            equalHeight : false,
            navPosition : 'above',
            navPrev            : false,
            navNext            : false,
            navNum            : true,
            navText            : false,
            navTextContent : 'Quote @a of @b'
        });
        
    });
    </script>
    
    <script type="text/javascript" src="//www.google.com/jsapi"></script>
    
    <script type="text/javascript">
      google.load('search', '1');
      google.setOnLoadCallback(function() {
        google.search.CustomSearchControl.attachAutoCompletion(
          '008589878477221853669:fglxypz-c8m+qptype:1',
          document.getElementById('umbc-nav-search-query'),
          'umbc-nav-search');
      });
    </script>
    
</head>

<body>
<div id="skip-content">
	<a href="#main-content">Skip to Main Content</a>
</div>

<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
	<div id="site-menu-background"> 
		&nbsp;
	</div>
</div>

<div id="container"> <!-- main container -->

<!-- START WINDOW START WINDOW START WINDOW START WINDOW START WINDOW START WINDOW START WINDOW START WINDOW -->
 

<section class="page-content"> 
<section class="home-widgets">
<div class="widget widget-spotlight">
<div class="panels"><h1 id="usgheading">UMBC <em>at</em> The Universities at Shady Grove</h1>

<!-- TWO LINKS PER WINDOW - DON'T FORGET MOBILE LINK  --> 
<!-- REMEMBER image mobile AND content-details SHOULD BE RIGHT LEFT OR CENTER FOR image AND RIGHT OR LEFT FOR content -->
<!-- description SHOULD BE USED FOR PHOTO CREDIT-->

<div class="panel panel-1">
<div class="image mobile-left"><img src="images_homepage/1.jpg" alt="One"></div>
<div class="content-details right">
<a class="mobile-seemore" href="http://bit.ly/21PKnLk">&raquo;</a>
<div class="title">Heading Text</div>
<div class="tagline">Some important text goes in here, with a link to something useful.</div>
<a class="web-seemore" href="#">Read more &raquo;</a>
</div>
</div>



<div class="panel panel-2">
<div class="image mobile-center"><img src="images_homepage/2.jpg" alt="Two"></div>
<div class="content-details left">
<a class="mobile-seemore" href="http://bit.ly/1TFZrWB">&raquo;</a>
<div class="title">Slide 2</div>
<div class="tagline">Some important text goes in here, with a link to something useful.</div>
<a class="web-seemore" href="#">Read more &raquo;</a>
</div>
</div>


<div class="panel panel-3">
<div class="image mobile-center"><img src="images_homepage/3.jpg" alt="3"></div>
<div class="content-details left">
<a class="mobile-seemore" href="#">&raquo;</a>
<div class="title">Headline!</div>
<div class="tagline">UMBC news blurb, possibly about UMBC communities.</div>
<a class="web-seemore" href="#">Read more &raquo;</a>
</div>
</div>


<div class="panel panel-4">
<div class="image mobile-right"><img src="images_homepage/4.jpg" alt="4"></div>
<div class="content-details left">
<a class="mobile-seemore" href="#">&raquo;</a>
<div class="title">Lorem Ipsum </div>
<div class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
<a class="web-seemore" href="#">Read more &raquo;</a>
</div>
</div>



<div class="panel panel-5">
<div class="image mobile-left"><img src="images_homepage/5.jpg" alt="5"></div>
<div class="content-details right">
<a class="mobile-seemore" href="#">&raquo;</a>
<div class="title">National Potato Thread</div>
<div class="tagline">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
<a class="web-seemore" href="#">Read more &raquo;</a>
</div>
</div>


  <div class="panel panel-6">
<div class="image mobile-left"><img src="images_homepage/6.jpg" alt="6"></div>
<div class="content-details right">
<a class="mobile-seemore" href="#">&raquo;</a>
<div class="title">Mouse Key Sunbeam</div>
<div class="tagline">Lobster flip-flop banana apple tuna guitar puppy lizard magic. Kitty guinea pig doorway interstate yarn.</div>
<a class="web-seemore" href="#">Read more &raquo;</a>
</div>
</div>  


 
 
<div class="panel panel-7">
<div class="image mobile-left"><img src="images_homepage/7.jpg" alt="7"></div>
<div class="content-details right">
<a class="mobile-seemore" href="#">&raquo;</a>
<div class="title">Happy Dishwasher Labrador</div>
<div class="tagline">Taxes masking tape coffee mason jars pasta. Violet pickle songs sketchbook comic bookstore vinyl martini.</div>
<a class="web-seemore" href="#">Read more &raquo;</a>
</div>
</div>
 


 

</div>

<!-- WINDOW THUMBNAIL IS 128 x 35px -->

<div class="playlist"><ul>
<li class="item-1"><img src="images_homepage/1_tmb.jpg" alt="1"></li>
<li class="item-2"><img src="images_homepage/2_tmb.jpg" alt="2"></li>
<li class="item-3"><img src="images_homepage/3_tmb.jpg" alt="3"></li>
<li class="item-4"><img src="images_homepage/4_tmb.jpg" alt="4"></li>
<li class="item-5"><img src="images_homepage/5_tmb.jpg" alt="5"></li>
<li class="item-6"><img src="images_homepage/6_tmb.jpg" alt="6"></li>
<li class="item-7"><img src="images_homepage/7_tmb.jpg" alt="7"></li>  
<!--<li class="item-5"><img src="images_homepage/win_tmb_virtualtour.jpg" alt="Virtual Tour"></li> -->
</ul></div>
</div>

</section><!-- END window --> 

<!-- START AUDIENCE TAB LINKS START AUDIENCE TAB LINKS START AUDIENCE TAB LINKS -->
<!-- AUDIENCE IMAGES ARE 250 x 75px -->
<div id="audience-tabs">

<ul class="tabs">
<li><a href="#" class="defaulttab" data-tab="tabs1" onClick="return false;">Programs</a></li>
<li><a href="#" data-tab="tabs2" onClick="return false;">Student <span class="mobile">Resources</span></a></li>
<li><a href="#" data-tab="tabs3" onClick="return false;">Faculty Resources</a></li>
 
</ul>

<!-- PROSPECTIVE STUDENTS TAB PROSPECTIVE STUDENTS TAB PROSPECTIVE STUDENTS TAB -->
 
<div class="tab-content" id="tabs1">
<div class="column1">
<h3>Undergraduate</h3>
<img src="images_homepage/ps_admission.jpg" alt="Admission thumbnail">
<p><a href="#">Undergraduate Admissions</a></p>
<p><a href="#">Graduate School Admissions</a></p>
<p><a href="#">Division of Professional Studies</a></p>
<p><a href="#">Training Centers</a></p>
<p><a href="#">Financial Aid &amp; Scholarships</a></p>
<p><a href="#">Student Consumer Information</a></p>
<p><a href="#">Fast Facts </a></p>
</div>
    
<div class="column2">
<h3>Graduate</h3> 
<img src="images_homepage/ps_campuslife.jpg" alt="Campus Life thumbnail">
<p><a href="#">Undergraduate Majors &amp; Programs</a></p>
<p><a href="#">Graduate School Programs</a></p>
<p><a href="#">Faculty Words of Wisdom</a></p>
<p><a href="#">Clubs &amp; Organizations</a></p>
<p><a href="#">Arts &amp; Culture</a></p>
<p><a href="#">UMBC Athletics</a></p>
<p><a href="#">Living on Campus</a></p>
</div>
    
<div class="column3">
<h3>Apply</h3> 
<h3>Visit</h3>
<h3>Request Info</h3>
</div>
</div>

    <!--
<div class="column2">
<h3>Campus Life</h3> 
<img src="images_homepage/ps_campuslife.jpg" alt="Campus Life thumbnail">
<p><a href="http://undergraduate.umbc.edu/majors.php">Undergraduate Majors &amp; Programs</a></p>
<p><a href="http://www.umbc.edu/gradschool/programs/all_programs.html">Graduate School Programs</a></p>
<p><a href="http://www.umbc.edu/wordsofwisdom/">Faculty Words of Wisdom</a></p>
<p><a href="http://osl.umbc.edu/orgs/list/">Clubs &amp; Organizations</a></p>
<p><a href="http://www.umbc.edu/arts">Arts &amp; Culture</a></p>
<p><a href="http://www.umbcretrievers.com/">UMBC Athletics</a></p>
<p><a href="http://www.umbc.edu/reslife/">Living on Campus</a></p>
</div>
    
<div class="column3">
<h3>Visiting</h3> 
<img src="images_homepage/ps_visiting.jpg" alt="Visiting thumbnail">
<p><a href="http://about.umbc.edu/visitors-guide">Visitor's Guide</a></p>
<p><a href="http://about.umbc.edu/visitors-guide/campus-map/">Campus Maps</a></p>
<p><a href="http://www.umbc.edu/aok">Albin O. Kuhn Library</a></p>
<p><a href="http://www.umbc.edu/bookstore">UMBC Bookstore</a></p>
<p><a href="https://secure.visualzen.com/vzevents/umbc/">Undergraduate Admissions Tours</a></p>
<p><a href="http://undergraduate.umbc.edu/visit/virtual-tour.php">Virtual Tour</a></p>
</div> -->
 

<!-- CURRENT STUDENTS TAB CURRENT STUDENTS TAB CURRENT STUDENTS TAB CURRENT STUDENTS TAB CURRENT STUDENTS TAB -->

<div class="tab-content" id="tabs2">
<div class="column1">
<h3>Get Involved</h3>
<a href="http://www.umbc.edu/studentlife"><img src="images_homepage/cs_getinvolved.jpg" alt="Get Involved thumbnail"></a>
<p>
	<a href="">Student Organizations</a><br>
	<a href="">Service Learning & Community Service</a><br>
	<a href="">Study Abroad</a><br>
	<a href="">Career and Internships</a><br>
	<a href="">USG Student Services</a>
</p>
</div>
    
<div class="column2">
<h3>Get Help</h3> 
<a href="http://www.umbc.edu/saf"><img src="images_homepage/cs_support.jpg" alt="Support Services thumbnail"></a>
<p>
	<a href="">Financing Your Education</a> <br>
	<a href="">Support Services/Accommodation</a><br>
	<a href="">Advising Resources</a><br>
	<a href="">International Education Services</a><br>
	<a href="">Veteran Support</a><br>
	<a href="">Student Success</a>
</p>
</div>
    
<div class="column3">
<h3>Top Tools</h3> 
<a href="http://my.umbc.edu"><img src="images_homepage/cs_myumbc.jpg" alt="myUMBC thumbnail"></a>
<p>
	<a href="http://my.umbc.edu">myUMBC</a><br>
    <a href="">Priddy Library</a><br>
	<a href="">Academic Calendar</a><br>
	<a href="">Textbooks</a><br>
	<a href="">Forms</a><br>
	<a href="">Commonly Asked Questions</a>
</p>
</div>
</div>
    
<!-- PARENT FAMILY TAB PARENT FAMILY TAB PARENT FAMILY TAB FAMILY TAB FAMILY TAB FAMILY TAB -->

<div class="tab-content" id="tabs3"><div class="column1">
<h3>Resources</h3>
<img src="images_homepage/pf_family.jpg" alt="Parent Family Resources thumbnail">
<p>
	<a href="">Faculty Development Center</a><br>
    <a href="">Faculty Handbook</a><br>
    <a href="">USG Films on Demand</a><br>
    <a href="">Faculty FAQs</a>
</p>
</div>
    
<div class="column2">
<h3>Upcoming Events</h3> 
<img src="images_homepage/pf_visiting.jpg" alt="Visiting thumbnail">
<p> </p>
</div>

<div class="column3">
<h3>Top Tools</h3> 
<a href="http://my.umbc.edu"><img src="images_homepage/cs_myumbc.jpg" alt="myUMBC thumbnail"></a>
<p>
	<a href="">myUMBC</a><br>
	<a href="">Shady Grove Faculty myUMBC Group</a><br>
	<a href="">Faculty Center</a><br>
	<a href="">Priddy Library</a><br>
	<a href="">Academic Calendar</a>
</p>
</div>
</div>
    
<!-- FAC STAFF TAB FAC STAFF TAB FAC STAFF TAB FAC STAFF TAB FAC STAFF TAB FAC STAFF TAB FAC STAFF TAB -->
 
<div class="tab-content" id="tabs4">
<div class="column1">
<h3>Resources</h3>
<a href="http://www.umbc.edu/facultystaff/ "><img src="images_homepage/fs_library.jpg" alt="Library thumbnail"></a>
<p><a href="http://my.umbc.edu/topics/advising-and-student-support">Advising &amps; Student Support</a></p>
<p><a href="http://my.umbc.edu/topics/parking-and-transportation">Parking &amp; Transportation</a></p> 
<p><a href="http://my.umbc.edu/topics/food-and-dining">Food &amp; Dining</a></p>
<p><a href="http://my.umbc.edu/topics/health-wellness-and-safety">Health, Wellness &amp; Safety</a></p>
<p><a href="http://my.umbc.edu/events">Events </a></p>
<p><a href="http://www.umbc.edu/policies/">University Policies</a></p>
</div>

<div class="column2">
<h3>UMBC Insights</h3>
<p><a href="http://umbcinsights.wordpress.com/">News for the University Community</a></p>

<h3>Human Resources</h3> 
<p><a href="http://www.umbc.edu/hr/">HR Website </a></p>
<p><a href="http://www.umbc.edu/hr/newemployeeresources/benefits.html">Benefits Information</a></p>
<p><a href="http://www.umbc.edu/hr/supervisortoolkit/supervisortoolkitindex.html">Resources for Supervisors</a></p>

<h3>Jobs at UMBC</h3> 
<p><a href="http://www.umbc.edu/hr/employment/index.html">Employment Opportunities</a></p>
<p><a href="http://www.umbc.edu/hr/newemployeeresources/welcome.html">Resources for New Employees</a></p>
</div>

<div class="column3">
<h3>Top Tools</h3> 
<a href="http://my.umbc.edu"><img src="images_homepage/cs_myumbc.jpg" alt="myUMBC thumbnail"></a>
<p><a href="http://my.umbc.edu/topics/faculty-center">myUMBC Faculty Center  </a></p>
<p><a href="http://my.umbc.edu/topics/staff-center">myUMBC Staff Center   </a></p>
<p><a href="http://www.umbc.edu/aok">Albin O. Kuhn Library</a></p>
<p><a href="http://registrar.umbc.edu/academic-calendar/">Academic Calendar</a></p>
<p><a href="http://www.umbc.edu/catalog/">Course Catalog</a></p>
<p><a href="http://campuscard.umbc.edu/">Campus Card/Mail Services</a></p>
</div>
</div>

<!-- ALUMNI SUPPORTER TAB ALUMNI SUPPORTER TAB ALUMNI SUPPORTER TAB ALUMNI SUPPORTER TAB ALUMNI SUPPORTER TAB -->

<div class="tab-content" id="tabs5"><div class="column1">
<h3>Alumni Association</h3>
<a href="http://alumni.umbc.edu"><img src="images_homepage/as_alumni.jpg" alt="Support Services thumbnail"></a>
<p><a href="http://alumni.umbc.edu/s/1325/1col.aspx?sid=1325&amp;gid=1&amp;pgid=316">Get Involved</a></p>
<p><a href="http://umbcalumni.wordpress.com/">News</a> </p>
<p><a href="http://alumni.umbc.edu/s/1325/1col.aspx?sid=1325&amp;gid=1&amp;pgid=13&amp;cid=664">Events</a></p>
<p><a href="http://umbcalumni.wordpress.com/alumni-award-winners/">Alumni Awards</a></p>
</div>
    
<div class="column2">
<h3>UMBC Magazine</h3> 
<a href="http://www.umbc.edu/magazine"><img src="images_homepage/as_magcover.jpg" alt="UMBC Magazine thumbnail"></a>
<p><a href="http://umbcmagazine.wordpress.com">Visit the magazine online </a></p>
</div>
    
<div class="column3">
<h3>Give to UMBC</h3> 
<a href="http://www.umbc.edu/giving"><img src="images_homepage/as_giving.jpg" alt="Give to UMBC thumbnail"></a>
<p><a href="https://secure.imodules.com/s/1325/giving_social.aspx?sid=1325&amp;gid=1&amp;pgid=564&amp;cid=1258">Give Now</a></p>
<p><a href="http://www.umbc.edu/giving/learn/annualfund.html">Annual Giving</a></p> 
<p><a href="http://umbcgiving.wordpress.com/">Giving Stories</a></p>
</div>
</div>

<!-- BUSINESSES AND SUPPORTERS TAB BUSINESSES AND SUPPORTERS TAB BUSINESSES AND SUPPORTERS TAB BUSINESSES AND SUPPORTERS TAB -->

<div class="tab-content" id="tabs6">
<div class="column1">
<h3>bwtech@UMBC</h3> 
<a href="http://www.bwtechumbc.com/"><img src="images_homepage/cp_bwtech.jpg" alt="bwtech thumbnail"></a>
<p><a href="http://www.bwtechumbc.com/">About bwtech@UMBC<br />Research &amp; Technology Park</a></p>
<p><a href="http://www.bwtechumbc.com/">Programs</a></p>
<p><a href="http://www.bwtechumbc.com//facilities/space.html">Acquire Space</a></p>  
<p><a href="http://www.bwtechumbc.com//about/directions.html">Maps &amp; Directions</a></p>
</div>
    
<div class="column2">
<h3>Work With Us</h3> 
<a href="http://www.umbc.edu/business"><img src="images_homepage/cp_business.jpg" alt="Corporate Relations thumbnail"></a>
<p><a href="http://www.umbc.edu/business/">Learn How</a></p> 
<p><a href="http://www.umbc.edu/business/students.php">Access Students</a></p>
<p><a href="http://www.umbc.edu/business/training.php">Access Training</a></p>
<p><a href="http://www.umbc.edu/business/research.php">Access Research</a></p>
<p><a href="http://www.umbc.edu/business/space.php">Access Space</a></p>
<p><a href="http://www.umbc.edu/business/support.php">Support UMBC</a></p>  
</div>
    
<div class="column3">
<h3>Give to UMBC</h3> 
<a href="http://www.umbc.edu/giving"><img src="images_homepage/bs_giving.jpg" alt="Give to UMBC thumbnail"></a>
<p><a href="https://secure.imodules.com/s/1325/giving_social.aspx?sid=1325&amp;gid=1&amp;pgid=564&amp;cid=1258">Give Now</a></p>
<p><a href="http://www.umbc.edu/giving/learn/annualfund.html">Annual Giving</a></p> 
<p><a href="http://umbcgiving.wordpress.com/">Giving Stories</a></p>
</div>
</div>

</div>

<!-- END audience links -->

<!-- news and events news and events news and events news and events news and events news and events-->



<!-- footer start -->
<footer role="contentinfo" id="site-footer">
</footer>   


</section>
</div> <!-- #container -->


<footer role="contentinfo" id="umbc-footer">
<section class="page-container layout-home" style="background-color:transparent">
<section class="page-content" style="background-color:transparent">
    
<article role="main">
 
<div class="news"> 

<h1>UMBC @ Shady Grove</h1>

 
<p>UMBC is one of nine institutions represented at The Universities at Shady Grove, a consortium of universities within the University System of Maryland. Close to many government agencies, contractors and major healthcare organizations, The Universities at Shady Grove is located in Rockville, MD. UMBC at Shady Grove offers four undergraduate programs and four graduate programs.</p>
</div>   

<div class="news first-child"> 

<h1 class="first-child">Upcoming Events</h1>

 
 

<!-- 1/7 -->
<p><a class="first-child" href="http://bit.ly/1P2TeE5">Gymama Slaughter, CSEE, speaks at TEDxBaltimore on human-powered glucose sensors for people with diabetes</a><br><span class="last-child" style="color:#666666;"><em class="first-child last-child">Baltimore Business Journal&nbsp;&nbsp;|&nbsp;&nbsp;January 15, 2016</em></span></p>

<!-- 1/4 -->
<p><a class="first-child" href="http://bit.ly/1QlgWMI">Remembering one of UMBC's founding leaders, Dr. Homer W. Schamp, Jr.</a><br><span class="last-child" style="color:#666666;"><em class="first-child last-child">UMBC News&nbsp;&nbsp;|&nbsp;&nbsp;January 14, 2016</em></span></p>

<!-- 1/15 -->
<p><a class="first-child" href="http://bit.ly/1U9sguw">Jack Suess, CIO, shares his predictions on 2016 ed tech trends</a><br><span class="last-child" style="color:#666666;"><em class="first-child last-child">Campus Technology&nbsp;&nbsp;|&nbsp;&nbsp;January 13, 2016</em></span></p>

 
</div>
      
<div class="events"> 

<h1 class="first-child">Connect with Us</h1>

 

<p class="date">1/4-1/22</p>
<p><a class="first-child last-child" href="http://www.umbc.edu/winter/">Winter Session</a></p>

<p class="date">1/22</p>
<p><a class="first-child last-child" href="http://bit.ly/1l76xY3">Mental Health First Aid Training</a></p>

<p class="date">1/25 - 3/31</p>
<p><a class="first-child last-child" href="http://artscalendar.umbc.edu/2010/03/28/sounding-botany-bay-sounding-kamay/">Sounding Botany Bay, Sounding Kamay</a></p><!-- INCLUDE FOR EVENTS -->

<p class="last-child"><a href="http://my.umbc.edu/events" class="moreevent first-child last-child">More events &gt;&gt;&gt;</a></p>
</div>
      
</article>
</section>
  
<!-- END News Events and What Others Say END News Events and What Others Say -->
  
</section>
<br clear="all"><br>

<center>
<?php include("includes/footer.php"); ?>
</center>
</footer>

</body>
</html>
