<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en';
?>

<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Undergraduate Programs | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Thank you for your interest in UMBC at The Universities at Shady Grove." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@uatshadygrove">

<!-- Open Graph data -->
<meta property="og:title" content="Contact Us | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/contact" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Thank you for your interest in UMBC at The Universities at Shady Grove." />


<link href="css/styles-ug.css" rel="stylesheet">
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
.programs li{
	margin:0px;
	list-style-type:none!important;
	margin-left:0px!important;
	padding:6px;
	font-size:11pt!important;
	border-bottom:1px #CCC solid;
}
.programs li:hover{
	background-color:#F9B631;
	color: #000!important;
}
.programs a li{
	text-decoration:none!important;
}
.programs a{
	text-decoration:none!important;
}
#usgheading1 {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
	color:#FFF!important;
	position:absolute;
	margin-top:15px;
	padding-left:10px;
	line-height: 1.1em;
	background-color:transparent;
	z-index:2;
}

.alumni div { float: left; width: 31%; text-align: center; }

	@media 
	only screen and (max-width: 1023px),
	(min-device-width: 800px) and (max-device-width: 1023px)  {
	
.alumni div { display: block; width: 98%; height: 200px; padding-bottom:10px; text-align:center}
.alumni div:hover { background-size: cover; }
	}
	
.module {
  background: 
    linear-gradient(
      rgba(0, 0, 0, 0.6),
      rgba(0, 0, 0, 0.6)
    ),
    url('http://umbc.edu/isd/images/current/advising.jpg');
  background-size: cover;
  height: 200px;
  position: relative;
  float: left;
  margin: 1%;
}

.module:hover{
  background: 
    linear-gradient(
      rgba(0, 0, 0, 0),
      rgba(0, 0, 0, 0)
    ),
	url('http://umbc.edu/isd/images/current/advising.jpg');
}
	

.mid h4 {
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  color: white;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);
}

/* #Contact
=================================================== */
table#contact{ width: 90% }
table#contact p { font-weight: normal; font-size: 10pt}
#contact input, #contact select { width: 95%; height:20px; font-size:12pt}
table#contact td {
	padding: 10px 0px 5px 0px; 
	font-weight: bold; 
	font-size:12pt
	}
table#contact td.checkbox input { text-align: left; width:auto; margin-left:20px; height:auto; }	
table#contact td.checkbox { font-weight:normal }
table#contact td.robot input { width:auto; height:auto;}

/* #Contact2
=================================================== */
table#contact2{ width: 90% }
table#contact2 p { font-weight: normal; font-size: 10pt}
#contact2 input, #contact2 select { width: 95%; height:20px; font-size:12pt}
table#contact2 td {
	padding: 10px 0px 5px 0px; 
	font-weight: bold; 
	font-size:12pt
	}
table#contact2 td.checkbox input { text-align: left; width:auto; margin-left:20px; height:auto; }	
table#contact2 td.checkbox { font-weight:normal }
table#contact2 td.robot input { width:auto; height:auto;}	
	

select#program[hidden]{display:block}
.programlabel{display:block}
.pp, .not-pro{display:none}

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
<h1 class="remove-bottom">Contact Us</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
    <!-- Start Content -->   
      <div class="content">
 <p>Thank you for your interest in UMBC at The Universities at Shady Grove. If you'd like additional information or have a question, please   complete the following form and click submit. </p>
  <p><strong>Location:</strong> UMBC at The Universities at Shady Grove, 9636 Gudelsky Drive, Rockville, MD   20850 <br>
	<strong>Phone:</strong> 301-738-6081 | <strong>E-mail:</strong> <a href="mailto:shadygrove@umbc.edu">shadygrove@umbc.edu</a>  </p>
    <br>
		<form action="process.php" method="post" id="dpsform" onsubmit="submitted=true; ga('send', 'event', 'inquiry', 'submit', 'contact_us');">
		<div id="form">
         
		</div>
        
        <table id="contact2">
          <tr>
           <td colspan="2" align="center">
           <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
           <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>">
           </script>
           <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha" required>
           </td>
          </tr>

          <tr>
            <td align="center" colspan="2">
            	<input type="submit" name="submit" value="Submit" style="width:100px; height:auto">
            </td>
          </tr>
        </table>
      </form>
      </p>
</div>

<div class="lib" style="clear:right;"></div>
  
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
  <?php include("includes/tracking.php"); ?> 
  </footer>
	</div>  
    

  
<!-- end container -->
  </section> 
</section>

<div id="contents" style="display:none"></div>

<script>
	var programname = "usg";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>$( "#form" ).load( "../../dps/includes/contact-form.php" );</script>
<script>$( "#sidebar-contact" ).load( "../../dps/includes/contact-form.php .sidebar-form" );</script>
<script>$( "#contents" ).load( "../../dps/includes/program-info.php" );</script>

<script src="../js/scripts.js"></script> 
<script src="../js/jquery.cbpFWSlider.js"></script>
<script src="../js/jquery.magnific-popup.js"></script>
<script src="../js/popup.js"></script>
<script>$.getScript("http://umbc.edu/dps/js/changeprogram.js")</script>
<!--Remove Comment for Programs without Program Guides--
<script>$('#programguide').val(''); $('#planningform').val('');</script>
-->
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>


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

</body>
</html>