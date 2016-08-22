<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en';
?>

<!DOCTYPE html>
<html>
<head>

<title>Contact Us | Systems Engineering at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC's program is designed to accelerate the development of systems engineers by providing practical, real-world experience that can be immediately applied on the job." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Contact Us | Systems Engineering at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/se/contact" />
<meta property="og:image" content="http://www.umbc.edu/se/images/bk.jpg" />
<meta property="og:description" content="UMBC's program is designed to accelerate the development of systems engineers by providing practical, real-world experience that can be immediately applied on the job." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

<link href="images/favicon.ico" rel="shortcut icon">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>

<body>
  <div id="skip-content">
    <a href="#main-content">Skip to Main Content</a>
  </div>
  <!-- main container -->


  <div id="container-header-background">
    <!-- umbc header -->


    <div id="container-header">
      <?php include("includes/umbc-header.php"); ?>
    </div>
    <!-- END umbc header -->
    <!-- gold toolbar -->


    <div id="site-menu-background">
      <?php include("includes/menu.php"); ?>
    </div>
    <!-- END gold toolbar -->
  </div>
  <!-- BEGIN MAIN -->
  <!-- Page Header -->

 <?php include("includes/header.php"); ?>
 
<!-- END Page Header -->


    <div class="eleven columns">
      <!-- START Content -->

 <h3>Contact Us</h3>

        <p>Thank you for your interest in the UMBC Systems Engineering programs. If you'd like additional information or have a question, please complete the following form and click submit.</p>

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


          <tr>
            <td align="left" valign="top">
              <p><strong>Kim Y. Edmonds</strong><br>
Program Coordinator<br>
<a href="mailto:kedmonds@umbc.edu"  target="_blank">kedmonds@umbc.edu</a><br>
<a href="tel:410-455-3445" value="+14104553445" target="_blank">410-455-3445</a></p>
            </td>

            <td align="left" valign="top">
              <p><strong>Dr. Thomas Moore</strong><br>
                Graduate Program Director<br>
              <a href="mailto:mooretg@umbc.edu">mooretg@umbc.edu</a></p>
            </td>
          </tr>
        </table>
       </form>
      
    <div id="contents" style="display:none"></div>
    
    </div>
    <!-- SIDEBAR -->
    	<?php include("includes/sidebar.php"); ?>
<!-- END SIDEBAR -->
    <!-- footer -->
    <br clear="all">
		<?php include("includes/footer.php"); ?>
        <?php // include("includes/tracking.php"); ?>
	<br>
    <!--END footer -->
  </div>
  <!-- container -->

<script>
	var programname = "se";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>$( "#form" ).load( "../dps/includes/contact-form.php" );</script>
<script>$( "#sidebar-contact" ).load( "../dps/includes/contact-form.php .sidebar-form" );</script>
<script>$( "#contents" ).load( "../dps/includes/program-info.php" );</script>

<script src="http://umbc.edu/dps/js/scripts.js"></script> 
<script src="http://umbc.edu/dps/js/jquery.cbpFWSlider.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>
<script>$.getScript("http://umbc.edu/dps/js/email.js")</script>
<!--Remove Comment for Programs without Program Guides--
<script>$('#programguide').val(''); $('#planningform').val('');</script>
-->
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>

<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

</body>
</html>