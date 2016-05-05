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

<title>Alumni | Cybersecurity at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Our alumni appreciate the in-person classroom experience, as well as learning from instructors who are active in their fields." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Alumni | Cybersecurity at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/cyber/alumni" />
<meta property="og:image" content="http://www.umbc.edu/cyber/images/bk.jpg" />
<meta property="og:description" content="Our alumni appreciate the in-person classroom experience, as well as learning from instructors who are active in their fields. " />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">
<link href="css/responsive-table.css" rel="stylesheet">

<script src="js/modernizr.custom.js"></script>
<link href="images/favicon.ico" rel="shortcut icon">

<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">


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

      <h3>Meet Our Alumni</h3>


      <p>UMBC’s Cybersecurity Graduate Programs provide students with the technical and managerial skills required to excel as leaders. Our&nbsp;alumni&nbsp;appreciate the in-person classroom experience, as well as learning from instructors who are active in their fields. Meet three&nbsp;alumni&nbsp;from UMBC’s Cybersecurity Graduate Programs.&nbsp;</p>


      <div class="alumni">
        <div>
          <h4><a href="ablair" style="text-decoration:none;color:#000">Andrew Blair</a>
          </h4>
          <br>
          <a href="ablair.php"><img height="205" src="images/alumni/UMBC_CyberAlum1.gif" width="165"></a><br>
          The UMBC program led Andrew Blair to a <a href="ablair.php">life-changing career change</a>.
        </div>


        <div>
          <h4><a href="vjohnsonjr" style="text-decoration:none;color:#000">Van Johnson, Jr.</a>
          </h4>
          <br>
          <a href="vjohnsonjr.php"><img height="205" src="images/alumni/UMBC_CyberAlum3.gif" width="165"></a><br>
          Van Johnson Jr. now sets his career goals <a href="vjohnsonjr.php">higher than he imagined</a>.
        </div>


        <div>
          <h4><a href="nmittal" style="text-decoration:none;color:#000">Nidhi Mittal</a>
          </h4>
          <br>
          <a href="nmittal.php"><img height="205" src="images/alumni/UMBC_CyberAlum2.gif" width="165"></a><br>
          The program's emphasis on technology and management is <a href="nmittal.php">helping Nidhi Mittal excel</a>.
        </div>
      </div>    
<div id="contents" style="display:none"> </div>

</div>
<!-- END Content -->
    
    <!-- SIDEBAR -->
    <?php include("includes/sidebar.php"); ?>
<!-- END SIDEBAR -->
    <!-- footer -->
    <br clear="all">
    <?php include("includes/footer.php"); ?>
<?php include("includes/tracking.php"); ?>
<br>
    <!--END footer -->
  </div>
  <!-- container -->


<script>
	var programname = "cyber";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>$( "#form" ).load( "../dps/includes/contact-form.php" );</script>
<script>$( "#sidebar-contact" ).load( "../dps/includes/contact-form.php .sidebar-form" );</script>
<script>$( "#contents" ).load( "../dps/includes/program-info.php" );</script>

<script src="js/scripts.js"></script> 
<script src="js/jquery.cbpFWSlider.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>
<script>$.getScript("http://umbc.edu/dps/js/email.js")</script>
<!--Remove Comment for Programs without Program Guides--
<script>$('#programguide').val(''); $('#planningform').val('');</script>
-->
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>



</body>
</html>