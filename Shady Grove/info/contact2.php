<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en';
?>

<!DOCTYPE html>
<html lang="en">
<meta name="description" content="UMBC at The Universities at Shady Grove, Undergraduate">
<meta name="keywords" content="UMBC, UMBC at The Universities at Shady Grove, Undergraduate">
<html lang="en">
  <style type="text/css">
  .style10 {color: #660000; font-weight: bold; }
.style8 {color: #660000}
  .style11 {color: #660000;
  font-weight: bold;
}
  .style1 {font-family: Arial, Helvetica, sans-serif}
.style111 {color: #CC0000;
	font-size: large;
	font-weight: bold;
}
.style15 {color: #FFFFFF}
.style16 {font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; }
.style17 {color: #000000;
	font-weight: bold;
}
.style18 {font-family: Arial, Helvetica, sans-serif; color: #000000; font-weight: bold; }
.style7 {color: #000000}
.style9 {font-weight: bold}

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
<head>
    <meta charset="UTF-8" />
    <title>Contact Us | UMBC at Shady Grove</title>

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->

    <!-- Sets the viewport width to the width of the device, so media queries work -->
    <!-- NOTE: We're locking the max scale (which prevents zooming) to fix bugs
         during orientation changes on devices.  Our styles should accomodate this though. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="icon" type="image/png" href="http://sites.umbc.edu/wp-content/themes/umbc/assets/images/icon.png" />

    <!-- Template Styles -->
    <script src="mobile/mdetect.php<?php if (!empty($_GET['mredirect']) && $_GET['mredirect'] == "n") print("?mredirect=n"); ?>" type="text/javascript"></script>
  <script type="text/javascript" src="../js/fade_image.js"> </script>

<link href="../css/fade_image.css" rel="stylesheet" type="text/css" media="all">

    <!-- Site-Specific Customizations -->
    <?php include("../include/dps_html_head.shtml"); ?>

  <link rel="stylesheet" type="text/css" href="../css/undergrad.css" />
  <link rel="stylesheet" type="text/css" href="../css/umbc12.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript" src="../js/stu_flyout.js"></script>




  </head>

<body id="home"><div id="container-header-background" style="background-color:#000000;"><div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>

   <div id="container-header"><!-- main container -->
            <?php include("../include/blk_header_2013_dps.shtml"); ?>
            </div>
    <!-- END umbc header -->
    
     <div id="site-menu-background"> 
            <?php include("../include/nav.shtml"); ?>
            
            
            </div>
            
    </div>





<section class="page-container layout-home">
<section class="page-content">

<div id="container">
        <div id="subheaderpic">
        
        <div class="window_overlay">
          <p style="font-family: Palatino Linotype, Book Antiqua, Palatino, serif;font-size:2.9em;color:#fff;position:relative;margin-top:1px;padding-left:10px">UMBC <em>at </em>The Universities at Shady Grove</p></div>
        
         <div id="imageContainer">
		<img src="../images/UMBC_ShadyGrove_Psychology2.gif" width="1000" height="270" alt="history" />
        	</div>
            
      	</div><!-- end subheaderpic -->

<p style="margin-top: 0; margin-bottom: 0;">&nbsp;</p>
<div class="breadcrumb">
<p class="breadcrumb" style="margin-bottom: 0"><a href="../index.php">UMBC at The Universities at Shady Grove</a> / Contact Us</p>
</div>

    



<div id="sub_content_center">
  <h1 align="center">Contact Us</h1>
  <p class="style1 style1">&nbsp;</p>
  <p align="center" class="style1 style1">Thank you for your interest in UMBC at The Universities at Shady Grove. If you'd like additional information or have a question, please   complete the following form and click submit. </p>
  <p align="center" class="style1">UMBC at The Universities at Shady Grove<br>
    9636 Gudelsky Drive<br>
    Rockville, MD   20850 </p>
  <p align="center" class="style1" style="margin-bottom: 0;">Phone: 301-738-6081<br>
    E-mail: <A href="mailto:shadygrove@umbc.edu">shadygrove@umbc.edu</A>  </p>
  <p>&nbsp;</p>
	<form action="process.php" method="post" id="dpsform">

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


          <tr>
            <td colspan="2" style="border-bottom: 2px #E9AB13 solid;"><strong>For more information on the program, please contact:</strong>
            </td>
          </tr>
        </table>
      </form>
</div>
<div class="lib" style="clear:right;"></div>
 
 <div id="footer">
<div class="footercontent">
<p>&copy; 2015 UMBC at The Universities at Shady Grove • 9636 Gudelsky Drive, Rockville, MD 20850 • 301-738-6081 • E-mail: <a href="mailto:shadygrove@umbc.edu">shadygrove@umbc.edu</a><a href="http://www.umbc.edu/ola/nondiscrimination.html" target="_blank"><br>
UMBC is an Equal Opportunity and Affirmative Action Institution</a> </p>
</div>


</div><!-- end footer -->


</div><!-- end container -->
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


<!-- Bing Tracking Code -->
<script>
(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5013621"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");
</script>
<noscript><img src="//bat.bing.com/action/0?ti=5013621&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5J926D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5J926D');</script>
<!-- End Google Tag Manager -->



<!--- Twitter Retargetting --->
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
twttr.conversion.trackPid('l50fd');</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l50fd&p_id=Twitter" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l50fd&p_id=Twitter" /></noscript>

</body>
</html>