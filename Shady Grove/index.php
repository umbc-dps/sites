
  <!--php
  require("myumbc_xml.php");
  $group = "dps";
  $news = parse_xml($group, "news", "?page=1&page_size=3&mode=recent");
  $events = parse_xml($group, "events", "?page=1&page_size=3&mode=recent");
?-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<meta name="description" content="">
<meta name="keywords" content="UMBC, The Universities at Shady Grove,">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<head>


    <title>UMBC at The Universities at Shady Grove</title>

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->

    <!-- Sets the viewport width to the width of the device, so media queries work -->
    <!-- NOTE: We're locking the max scale (which prevents zooming) to fix bugs
         during orientation changes on devices.  Our styles should accomodate this though. -->



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-1756263-20', 'umbc.edu');
  ga('create', 'UA-1756263-52', 'auto', {'name': 'rollup'});
  ga('require', 'displayfeatures');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5J926D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5J926D');</script>
<!-- End Google Tag Manager -->    

    <link rel="icon" type="image/png" href="http://sites.umbc.edu/wp-content/themes/umbc/assets/images/icon.png" >

    <!-- Template Styles -->
    <link rel="stylesheet" type="text/css" href="css/umbc12_homepage.css" >
    <link rel="stylesheet" type="text/css" href="css/usg_home.css" >
    <!-- Site-Specific Customizations -->
    <script src="mobile/mdetect.php<?php if (!empty($_GET['mredirect']) && $_GET['mredirect'] == "n") print("?mredirect=n"); ?>" type="text/javascript"></script>
    <?php include("include/dps_html_head.shtml"); ?>

 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="css/bar.css" type="text/css" media="screen" />

<script type="text/javascript">


 
// this tells jquery to run the function below once the DOM is ready
$(document).ready(function() {
 // hides the slickbox as soon as the DOM is ready
  $('#slickbox1').hide();
 // shows the slickbox on clicking the noted link  
  $('#slick-show1').click(function() {
    $('#slickbox1').show(300);
    return false;
  });
 // hides the slickbox on clicking the noted link  
  $('#slick-hide1').click(function() {
    $('#slickbox1').hide('fast');
    return false;
  });
  
  
  
   // hides the slickbox as soon as the DOM is ready
  $('#slickbox2').hide();
 // shows the slickbox on clicking the noted link  
  $('#slick-show2').click(function() {
    $('#slickbox2').show(300);
    return false;
  });
 // hides the slickbox on clicking the noted link  
  $('#slick-hide2').click(function() {
    $('#slickbox2').hide('fast');
    return false;
  });
  
     // hides the slickbox as soon as the DOM is ready
  $('#slickbox3').hide();
 // shows the slickbox on clicking the noted link  
  $('#slick-show3').click(function() {
    $('#slickbox3').show(300);
    return false;
  });
 // hides the slickbox on clicking the noted link  
  $('#slick-hide3').click(function() {
    $('#slickbox3').hide('fast');
    return false;
  });
  
     // hides the slickbox as soon as the DOM is ready
  $('#slickbox4').hide();
 // shows the slickbox on clicking the noted link  
  $('#slick-show4').click(function() {
    $('#slickbox4').show(300);
    return false;
  });
 // hides the slickbox on clicking the noted link  
  $('#slick-hide4').click(function() {
    $('#slickbox4').hide('fast');
    return false;
  });
  
     // hides the slickbox as soon as the DOM is ready
  $('#slickbox5').hide();
 // shows the slickbox on clicking the noted link  
  $('#slick-show5').click(function() {
    $('#slickbox5').show(300);
    return false;
  });
 // hides the slickbox on clicking the noted link  
  $('#slick-hide5').click(function() {
    $('#slickbox5').hide('fast');
    return false;
  });
  
   // hides the slickbox as soon as the DOM is ready
  $('#slickbox6').hide();
 // shows the slickbox on clicking the noted link  
  $('#slick-show6').click(function() {
    $('#slickbox6').show(300);
    return false;
  });
 // hides the slickbox on clicking the noted link  
  $('#slick-hide6').click(function() {
    $('#slickbox6').hide('fast');
    return false;
  });
 
 
});
</script>


<html lang="en">
  <script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
  </script>


<style>
	div.toggle {
	width:436px;
	height:342px;
	margin-right:11px;
	
	padding:9px 10px 0 10px;
	-moz-box-shadow: 0 0 6px #999;
	-webkit-box-shadow: 0 0 6px #999;
	box-shadow: 0 0 6px #999;
	
	display:block;
	margin-bottom:10px;
	z-index:3;

}


div.toggle4 {
	width:660px;
	height:342px;
	margin-right:11px;
	
	padding:9px 10px 0 10px;
	-moz-box-shadow: 0 0 6px #999;
	-webkit-box-shadow: 0 0 6px #999;
	box-shadow: 0 0 6px #999;
	overflow-y:scroll;
	
	display:block;
	margin-bottom:10px;
	z-index:3;

}


.boxtext  h2 {
	font-size:22px;
	color:#C00;
	font-family:Arial, Helvetica, sans-serif;
	margin-bottom:7px;
}

.boxtext p {
	font-size:13px;
	color:#333;
	font-family:"Arial";
	line-height:18px;
	letter-spacing:-.2px;
	margin-bottom:9px;
}

.boxtext p a {
	font-size:13px;
	color:#c00;
	font-family:"Arial";
	font-weight:bold;
	line-height:18px;
	letter-spacing:-.2px;
	text-decoration:underline;
}

.boxtext h6 {
	font-size:14px;
	color:#333;
	font-family:"Arial";
	font-weight:normal;
	line-height:18px;
	letter-spacing:-.2px;
	padding-bottom:0px;
	margin-bottom:0px;
}

.boxtext h6 strong{
	font-size:14px;
	color:#c00;
	font-family:"Arial";
	font-weight:bold;
	line-height:18px;
	letter-spacing:-.2px;
	padding-bottom:0px;
	margin-bottom:0px;
}

.boxtext ul li {
	font-size:12px;
	color:#333;
	font-family:"Arial";
	line-height:16px;
	letter-spacing:-.3px;
	padding-bottom:1px;
	list-style:disc;
	margin-left:20px;
	text-indent:0px;
	padding-left:5px;
}
	

.left {
	position:absolute;
	background:#fff;
	left:15px;
	top:10;
		overflow-y:scroll;

}

.left2 {
	position:absolute;
	background:#fff;
	left:265px;
	top:10;
	z-index:4;

}

.left3 {
	position:absolute;
	background:#fff;
	left:512px;
	top:10;
		z-index:4;

}

.right {
	position:absolute;
	background:#fff;
	right:14px;
	top:10;
		z-index:4;
}

div.toggle h2 {
	font-size:17px;
	color:#C00;
	font-family:Arial, Helvetica, sans-serif;
	letter-spacing:-.75px;
	line-height:19px;
	margin-top:4px;
	margin-bottom:5px;
	margin-left:0px;
}

div.toggle2 {
	width:436px;
	height:342px;
	margin-right:11px;
	float:right;
	padding:9px 10px 0 10px;
	-moz-box-shadow: 0 0 6px #999;
	-webkit-box-shadow: 0 0 6px #999;
	box-shadow: 0 0 6px #999;
	position:absolute;
	background:#FFF;
	margin-right:20px;

	display:block;
	margin-bottom:10px;
	z-index:3;

}

div.toggle3 {
	width:466px;
	height:343px;
	margin-right:11px;
	float:right;
	padding:9px 10px 0 10px;
	-moz-box-shadow: 0 0 6px #999;
	-webkit-box-shadow: 0 0 6px #999;
	box-shadow: 0 0 6px #999;
	position:absolute;
	background:#FFF;
	margin-right:20px;

	display:block;
	margin-bottom:10px;
	z-index:3;

}

div.mainbox {
	width:465px;
	height:342px;
	margin-right:11px;
	float:left;
	padding:9px 10px 0 10px;
	-moz-box-shadow: 0 0 6px #999;
	-webkit-box-shadow: 0 0 6px #999;
	box-shadow: 0 0 6px #999;
	border:2px solid #A7ADBF;
	position:relative;
	display:block;
	margin-bottom:10px;
	margin-left:-1px;
	margin-top:-1px;

}

div.mainbox img.main {
	width:465px;
	height:auto;
	
	position:relative;
	display:block;
	margin-bottom:10px;

}

.mainbox .boxleft {
	float:left;
	width:280px;
	height:auto;
	overflow:hidden;
}

.mainbox .boxright {
	float:right;
	width:auto;
	height:auto;
	overflow:hidden;
}

.mainbox .boxfull {
	float:left;
	width:auto;
	height:auto;
	overflow:hidden;
	clear:both;
}

div.mainbox h2 {
	font-size:19px;
	color:#C00;
	font-family:Arial, Helvetica, sans-serif;
	letter-spacing:-1.75px;
	line-height:21px;
	margin-bottom:4px;
}

div.mainbox h3 {
	font-size:17px;
	color:#C00;
	font-family:Arial, Helvetica, sans-serif;
	letter-spacing:-.75px;
	line-height:19px;
	margin-top:0px;
	margin-bottom:0px;
	margin-left:0px;
	font-weight:bold;
}

div.mainbox h6 {
	font-size:14px;
	color:#333;
	font-family:"Arial";
	font-weight:normal;
	line-height:18px;
	letter-spacing:-.2px;
	padding-bottom:8px;
	margin-bottom:0px;
}

div.mainbox p {
	font-size:13px;
	color:#333;
	font-family:"Arial";
	line-height:18px;
	letter-spacing:-.2px;
}

div.mainbox p a {
	font-size:13px;
	color:#c00;
	font-family:"Arial";
	font-weight:bold;
	line-height:18px;
	letter-spacing:-.2px;
	text-decoration:underline;
}

.boxtext .med img {
	width:445px;
	height:auto;
	
	position:relative;
	display:block;
	margin-bottom:10px;

}

.button {
background-color: #c00;
border:none;
border-radius: 6px;
display: block;
margin-left:20px;
color:#fff;
font-size:20px;
line-height:24px;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
padding:7px;
height:auto;
text-align:center;
margin-bottom:9px;
margin-top:1px;
}

.button a {
	text-decoration:none;
	color:#fff;
	font-size:20px;
	font-weight:bold;
}
	
.submit {
background-color:#666;
border:none;
border-radius: 6px;
display: block;
color:#fff;
font-size:18px;
line-height:24px;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
padding:7px;
height:auto;
width:150px;
text-align:center;
margin-bottom:9px;
margin-top:13px;
margin-left:28px;
}

.submit a {
	text-decoration:none;
	color:#fff;
	font-size:20px;
	font-weight:bold;
}
	
	
div.shadowbox {
	width:218px;
	height:280px;
	margin-right:11px;
	float:left;
	padding:9px 10px 0 10px;
	-moz-box-shadow: 0 0 6px #999;
	-webkit-box-shadow: 0 0 6px #999;
	box-shadow: 0 0 6px #999;
	position:relative;
	display:block;
	margin-bottom:10px;

}

#professionalstudies {
	width:218px;
	height:342px;
	margin-right:11px;
	float:left;
	padding:9px 10px 0 10px;
	-moz-box-shadow: 0 0 6px #999;
	-webkit-box-shadow: 0 0 6px #999;
	box-shadow: 0 0 6px #999;
	position:relative;
	display:block;
	margin-bottom:10px;

}

#slickbox2 {
	height:280px;
}

#slickbox3 {
	height:280px;
}

#slickbox4 {
	height:280px;
}
#slickbox5 {
	height:280px;
}

div.shadowbox img{
	width:218px;
	height:131px;
	margin-bottom:11px;
	
	position:relative;
	display:block;

}

div.shadowbox h2 {
	font-size:19px;
	color:#C00;
	font-family:Arial, Helvetica, sans-serif;
	letter-spacing:-.5px;
	line-height:22px;
	margin-bottom:4px;
}

div.shadowbox h3 {
	font-size:17px;
	color:#C00;
	font-family:Arial, Helvetica, sans-serif;
	letter-spacing:-.75px;
	line-height:19px;
	margin-top:4px;
	margin-bottom:0px;
	margin-left:0px;
}

div.shadowbox h6 {
	font-size:14px;
	color:#333;
	font-family:"Arial";
	font-weight:normal;
	line-height:18px;
	letter-spacing:-.4px;
	padding-bottom:8px;
	margin-bottom:0px;
}

div.shadowbox p {
	font-size:13px;
	color:#333;
	font-family:"Arial";
	line-height:18px;
	letter-spacing:-.2px;
}

div.shadowbox ul li {
	font-size:12px;
	color:#333;
	font-family:"Arial";
	line-height:16px;
	letter-spacing:-.3px;
	padding-bottom:1px;
	list-style:disc;
	margin-left:15px;
	text-indent:-10px;
}
SELECT { font-weight: normal;font-size:12px;font-family:Arial, Helvetica, sans-serif; }
OPTION { font-style: normal;color:#1b1b1b;" }
textarea {
    resize: none;
}

#upcoming_events {
	width:490px;
	clear:both;
	float:right;
}

</style>

</head>

<body id="home" onLoad="MM_preloadImages('images/apply_over.png','images/visit_over.png','images/info_over.png','images/apply_over_rev.png','images/visit_over_rev.png')">

<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>

    <div id="container-header-background"> 
            <div id="container-header"><!-- main container -->
            <?php include("include/blk_header_2013_dps.shtml"); ?>
            </div>
    <!-- END umbc header -->
    
     <div id="site-menu-background"> 
            <?php include("include/nav.shtml"); ?>
            
            
      </div>
            
    </div>


<section class="page-container layout-home">
<section class="page-content">

<div id="container">

<div id="hpheadpic">
        <div id="title"><p style="font-family: Palatino Linotype, Book Antiqua, Palatino, serif;font-size:2.9em;color:#fff;position:relative;margin-top:1px;padding-left:10px;padding-top:5px">UMBC <em>at</em> The Universities at Shady Grove</p></div>
              
      	<div class="slider-wrapper theme-bar">
      <div id="slider" class="nivoSlider">


<img src="images/USG_header_A.jpg" data-thumb="images/dps_hp1.jpg" alt="" data-transition="fade" />
                <img src="images/USG_header_B.jpg" data-thumb="images/dps_hp16.jpg" alt="" data-transition="fade" />
                <img src="images/USG_header_C.jpg" data-thumb="images/dps_hp5.jpg" alt="" data-transition="fade" />
                <img src="images/USG_header_D.jpg" data-thumb="images/dps_hp9.jpg" alt="" data-transition="fade" />
                
         </div>
      	</div>
        <div style="clear:both;"></div>
     </div>


        
    

<!-- news and events news and events news and events news and events news and events news and events-->

    
<div id="main_container" style="margin-left:15px;margin-top:15px;width:1024px;">


<div class="shadowbox" id="professionalstudies">

<h2>UMBC at Shady Grove</h2>
<p style="color:#C00; font-size:14px;"><strong><em>Our Reputation. Your Backyard.</em></strong></p>
<p><h6>UMBC is one of nine institutions represented at The Universities at Shady Grove, a consortium of universities within the University System of Maryland. Close to many government agencies, contractors and major healthcare organizations, The Universities at Shady Grove is located in Rockville, MD. UMBC at Shady Grove offers four undergraduate programs and four graduate programs.</h6></p>

<!-- LEAVE LINK 
<a href="#" id="slick-show1" class="plus"></a>BELOW ALONE -->
</div>


<div id="slickbox1" class="toggle left boxtext">
<h2>UMBC at Shady Grove</h2>
<p><h6>At UMBC at The Universities at Shady Grove, students can experience UMBC’s culture of innovation while benefitting from the convenient campus location. Like students on the UMBC main campus, students at UMBC at Shady Grove benefit from small class sizes (average of 18), close student-faculty collaboration, and a diverse student population.</h6></p>
       
<!-- LEAVE LINK BELOW ALONE -->
<a href="#" id="slick-hide1" class="minus"></a>
</div>


<!-- BELOW THIS LINE IS THE FEATURED BOX TO SWAP OUT WITH OTHERS FROM FEATURES.SHTML  -->


<div class="mainbox" id="featured">
<a href="http://www.umbc.edu/shadygrove/info/uginfosession.php" target="_blank"><img src="images/classroom.png" alt=""/></a>
<h3 style="line-height:normal; font-size:15pt">
<br>
Attend an Upcoming Undergraduate Info Session!</h3>


<div class="boxleft" style="width:60%">

  <h6 style="font-size:12pt; margin:0px; line-height:14pt">Learn about the admissions process and transfer requirements for UMBC-Shady Grove's undergraduate programs in History, Political Science, Psychology, and Social Work.  A tour of campus will also be provided.</h6>
  </div><!-- end boxleft nested div -->


<br>

	<div class="boxright">
<a href="http://www.umbc.edu/shadygrove/info/uginfosession.php" target="_blank" style="text-decoration:none">
<div class="button" style="height:auto; line-height:16pt; vertical-align:middle;">


<br>

RSVP
<br>

<br>


</div></a>

  	</div>

	<div class="boxfull"></div>
<!-- LEAVE LINK <a href="http://www.umbc.edu/shadygrove" id="slick-show6" class="plus"></a>-->
</div>

<!-- ABOVE THIS LINE IS THE FEATURED BOX TO SWAP OUT WITH OTHERS FROM FEATURES.SHTML  -->



<div class="formbox"><a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('APPLY','','images/apply_over_rev.png',1)"><img src="images/apply_rev.png" alt="APPLY" usemap="#APPLYMap" id="APPLY" border="0"><map name="APPLYMap"><area shape="rect" coords="100,54,195,69" href="http://www.umbc.edu/undergraduate/apply/shadygrove.html" target="blank" alt="Undergrad Apply"><area shape="rect" coords="101,75,194,88" href="http://gradschool.umbc.edu/admissions/apply/" target="blank" alt="Grad Apply"></map></a><a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('VISIT','','images/visit_over_rev.png',1)"><img src="images/visit_rev.png" alt="VISIT" usemap="#VISITMap" id="VISIT" border="0"><map name="VISITMap"><area shape="rect" coords="98,55,199,71" href="infosession" target="_parent" alt="Undergrad Apply"><area shape="rect" coords="97,74,199,88" href="http://www.umbc.edu/shadygrove/info/gradinfosession.php" target="_parent" alt="Grad Apply"></map></a><a href="info/contact.php" target="_parent" onMouseOver="MM_swapImage('INFO','','images/info_over_rev.png',1)" onMouseOut="MM_swapImgRestore()"><img id="INFO" src="images/info_rev.png" alt="REQUEST INFO"></a></div>

<!-- END FIRST ROW OF CONTENT SHADOW BOXES -->

<div style="clear:both;"></div>

<!-- BEGIN SECOND ROW OF CONTENT SHADOW BOXES -->

<!-- Prof Grad Original Box Content Below -->
<div class="shadowbox" id="professionalgrad"> <img src="images/UMBC_ShadyGrove2.jpg" alt="Professional Programs at UMBC" border="0">
<h3>Undergraduate Programs</h3>

<h6><ul>
<li>&nbsp; <a href="history/index.php">History</a></li>
<li>&nbsp; <a href="politicalscience/index.php">Political Science</a></li>
<li>&nbsp; <a href="psychology/index.php">Psychology</a></li>
<li>&nbsp; <a href="socialwork/index.php">Social Work</a></li>
</ul></h6>

<br>


<!-- LEAVE LINK<a href="#" id="slick-show2" class="plus"></a> BELOW ALONE -->
</div>


            <!-- Prof Grad Rollover Box Content Below -->
            <div id="slickbox2" class="toggle left boxtext">
            <h2>Undergraduate Programs</h2>
<h6>Whether incoming students have questions about the process of transferring into The Universities at Shady Grove, or questions about career opportunities in their chosen field, they experience the one-on-one attention everyone deserves while making important decisions about their future. Attend an information session to meet program directors and learn more.</h6>
                        
            <!-- LEAVE LINK BELOW ALONE -->
            <a href="#" id="slick-hide2" class="minus"></a>
            </div>

<!-- Shady Grove Original Box Content Below -->
<div class="shadowbox" id="shadygrove"> <img src="images/UMBC_ShadyGrove_GradPrograms.jpg" border="0">
<h3>Graduate Programs</h3>
<h6><ul>
<li>&nbsp; <a href="biotech/index.php">Biotechnology</a></li>
<li>&nbsp; <a href="cyber/index.php">Cybersecurity</a></li>
<li>&nbsp; <a href="gis/index.php">Geographic Information Systems</a></li>
<li>&nbsp; <a href="io/index.php">Industrial/Organizational Psychology</a></li>
</ul></h6>
<br>

<!-- LEAVE LINK<a href="#" id="slick-show3" class="plus"></a> BELOW ALONE -->
</div>


                <!-- Shady Grove Rollover Box Content Below -->
        <div id="slickbox3" class="toggle left2 boxtext">
          <h2>Graduate Programs</h2>
                
          <p><h6>From our convenient Rockville location, to our accommodating evening class schedule, Professional Master’s and Post-Baccalaureate Certificate programs are designed with working professionals in mind.</h6></p>
          
<!-- LEAVE LINK BELOW ALONE -->
          <a href="#" id="slick-hide3" class="minus"></a>
        </div>


<!-- ESL Original Box Content Below -->
<div class="shadowbox" id="esl"> <img src="images/sub_image_faculty_220x132.jpg" border="0">
<h3>Faculty</h3>
<h6>
  <ul>
    <li>&nbsp;<a href="faculty/events.php">Faculty Events</a></li>
    <li><a href="faculty/resources.php">&nbsp;Faculty Resources</a></li>
    <li>&nbsp;<a href="faculty/faq.php">Faculty FAQ</a></li>
  </ul>
</h6>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h6>
  <p>&nbsp;</p>
</h6>

 
<!-- LEAVE LINK <a href="#" id="slick-show4" class="plus"></a> BELOW ALONE -->
</div>

                <!-- ESL Rollover Box Content Below --><!-- Prof Training Original Box Content Below -->
<div class="shadowbox" id="professionaltraining">
<h3>QUICK LINKS</h3>

<hr>

<h6>
<p><a href="student/index.php">Student Resources</a></p>
<p><a href="http://registrar.umbc.edu/academic-calendar/" target="_new">Academic Calendar</a></p>
<p><a href="student/financing.php">Financing Your Education</a></p>
<p><a href="http://www.shadygrove.umd.edu/library" target="_new">Priddy Library</a></p>
<p><a href="shared/meetthestaff.php">Meet the Staff</a><br>
  <a href="http://shadygrove.bncollege.com/webapp/wcs/stores/servlet/TBWizardView?catalogId=10001&langId=-1&storeId=39051" target="_blank">Textbooks</a>
</p>
<p><a href="https://secure.vzorientation.com/umbc/" target="_blank">Undergraduate Orientation RSVP</a></p>
<p><a href="documents/FinalExamSchedule.pdf" target="_blank">Final Exam Schedule</a></p>
<p><a href="http://www.umbc.edu/shadygrove/student/advisors.php" target="_blank">Find Your Academic Advisor</a></p>
</h6>


 
<!-- LEAVE LINK <a href="#" id="slick-show5" class="plus"></a>BELOW ALONE -->
</div>


                <!-- Prof Training Rollover Box Content Below -->

        <div style="clear:both;"></div>

<div class="page-footer-area">





<div id="upcoming_events"  style="width:994px; clear:both; float:left; text-align:center; padding-top:7px;">

<div class="footbox" id="gradschool" style="float:left;">
<img src="images/newlogo.png" width="210" border="0">
</div>

<div class="table" style="float:left;">
<table width="460" border="0" cellspacing="3" cellpadding="3"><h4>Upcoming Events</h4>
  <tr>
    <td valign="top">
<br>

<a href="http://www.umbc.edu/shadygrove/cyber/infosession">Cybersecurity Info Session</a><br>
<small>June 14, 2016, 
6:00 - 7:30 p.m. </small>
<br><br>
<a href="http://www.umbc.edu/shadygrove/gis/infosession">Geographic Information Systems Info Session</a><br>
<small>June 14, 2016, 
6:00 - 7:30 p.m. </small>
</td>
    <td valign="top">
    
    <a href="http://www.umbc.edu/shadygrove/info/uginfosession.php"><br>
      Undergraduate Info Session</a><br> 
<small>Jan. 7, 2016 - May 20, 2016<br>
(Various Dates)</small><br>
<br>
<a href="http://www.umbc.edu/shadygrove/info/ugprogramdirectors.php">Visit with Undergraduate Program Directors</a><br>
<small>Feb. 3, 2016 - May 1, 2016<br>
(Various Dates)</small> </td>
  </tr>
  </table>
</div>
<div class="footbox" id="connect" style="width:160px; margin-right:0px; float:left;">
<h4>Connect with us</h4>
<a href="http://my.umbc.edu" target="_blank"><img src="images/myumbc_trans.gif" class="myumbc" alt="myUMBC" width="125" height="30" border="0" style="margin-left:-25px;"></a> <br>
<a href="https://www.facebook.com/UMBCatShadyGrove?ref=hl" target="_blank"><img src="images/facebook.png" class="btn" alt="facebook" style="margin-left:5px;"></a>
<a href="https://twitter.com/uatshadygrove" target="_blank"><img src="images/twitter.png" class="btn" alt="twitter"></a>
<a href="http://www.youtube.com/user/UMBCtube" target="_blank"><img src="images/youtube.png" class="btn" alt="YouTube"></a>
</div>
</div>






<div class="footercontent">
  <p>© 2015 UMBC at The Universities at Shady Grove • 9636 Gudelsky Drive, Rockville, MD 20850 • 301-738-6081 • E-mail: <a href="mailto:shadygrove@umbc.edu">shadygrove@umbc.edu</a><a href="http://www.umbc.edu/ola/nondiscrimination.html" target="_blank"><br>
UMBC is an Equal Opportunity and Affirmative Action Institution</a>  
</div>

<div style="clear:both;"></div>
</div><!-- end footer-area -->


</div>
</div><!-- END MAIN CONTAINER -->  	
  </section> 

</section>
</div>



<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>


<!--- Twitter Retargetting --->
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
twttr.conversion.trackPid('l50fd');</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l50fd&p_id=Twitter" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l50fd&p_id=Twitter" /></noscript>

</body>
</html>