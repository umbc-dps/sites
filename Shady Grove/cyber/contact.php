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

<title>Contact | Cybersecurity | UMBC at Shady Grove</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="The Master’s in Professional Studies in Cybersecurity prepares experienced professionals to fill management and leadership roles." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Contact | Cybersecurity | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/cyber/contact" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/bk.jpg" />
<meta property="og:description" content="The Master’s in Professional Studies in Cybersecurity prepares experienced professionals to fill management and leadership roles." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='../css/magnific-popup.css' rel='stylesheet'>
<link href="../css/styles.css" rel="stylesheet">
<link href="../css/accordion.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="../js/modernizr.custom.js"></script>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
</head>
<style>
#four{display:none}
</style>

<body>
  <div id="skip-content">
    <a href="#main-content">Skip to Main Content</a>
  </div>
  <!-- main container -->


  <div id="container-header-background">
    <!-- umbc header -->


    <div id="container-header"> <?php include("../includes/umbc-header.php"); ?>
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

 
<?php include("../includes/header.php"); ?>

 
<!-- END Page Header -->


    <div class="eleven columns">
      <!-- START Content -->


 <h3>Contact Us</h3>

        <p>Thank you for your interest in the UMBC Cybersecurity programs. If you'd like additional information or have a question, please complete the following form and click submit.</p>


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


          <tr>
            <td colspan="2" style="border-bottom: 2px #E9AB13 solid;"><strong>For more information on the program, please contact:</strong>
            </td>
          </tr>


          <tr>
            <td align="left" valign="top">
              <p><strong>Rickeysha Jones</strong><br>
              Contact for Admissions Related Questions<br>
              <a href="mailto:Gambino@umbc.edu">rcjones@umbc.edu</a><br>
              301-738-6285 </p>
            </td>

            <td align="left" valign="top">
              <p><strong>Behnam Shariati</strong><br>
              Assistant Graduate Program Director<br>
              <a href="mailto:shariati@umbc.edu">shariati@umbc.edu</a></p>
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
		<?php include("../includes/footer.php"); ?>
        
<?php include("includes/tracking.php"); ?>

<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

	<br>
    <!--END footer -->
  </div>
  <!-- container -->

<script>
	var programname = "cyber-sg";
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
<script>$.getScript("http://umbc.edu/dps/js/email.js")</script>
<!--Remove Comment for Programs without Program Guides--
<script>$('#programguide').val(''); $('#planningform').val('');</script>
-->
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>
</body>
</html>