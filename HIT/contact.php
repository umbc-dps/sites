

<!DOCTYPE html>
<html>
<head>

<title>Contact Us | Health Information Technology at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC's in-person Health Information Technology program is designed to prepare professionals  to fill a range of opportunities within the health care profession. " />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Contact Us | Health Information Technology at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/hit/contact" />
<meta property="og:image" content="http://www.umbc.edu/hit/images/bk.jpg" />
<meta property="og:description" content="UMBC's in-person Health Information Technology program is designed to prepare professionals  to fill a range of opportunities within the health care profession." />


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

<link href="images/favicon.ico" rel="shortcut icon">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<link href='http://umbc.edu/dps/css/sf-contact-us.css' rel='stylesheet'>
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

        <p>Thank you for your interest in the UMBC Health IT programs. If you'd like additional information or have a question, please complete the following form and click submit.</p>


<div id="form">    
        
<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
if(!isset($_GET['tfa_next'])) {
$qs = ' ';
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']));
echo file_get_contents('https://umbc.secure.force.com/form?formID=217734'.$qs);
} else {
echo file_get_contents('http://app.formassembly.com/rest'.$_GET['tfa_next'],false,$context);
}
?>
        
        <table id="contact2">
          
          <tr>
            <td colspan="2" style="border-bottom: 2px #E9AB13 solid;"><strong>For more information on the program, please contact:</strong>
            </td>
          </tr>
            <td align="left" valign="top">
              <p><strong>Lisa Gambino</strong><br>
              Contact for Admissions Related Questions<br>
              <a href="mailto:Gambino@umbc.edu">gambino@umbc.edu</a><br>
              410-455-3034</p>
            </td>

            <td align="left" valign="top">
              <p><strong>Dr. Krystl Haerian</strong><br>
              Graduate Program Director<br>
              <a href="mailto:krystl.haerian@umbc.edu">krystl.haerian@umbc.edu</a></p>
            </td>
          </tr>
        </table>

      </div>
    
    
    </div>
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



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



<script src="http://umbc.edu/dps/js/scripts.js"></script> 
<script src="http://umbc.edu/dps/js/jquery.cbpFWSlider.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>


<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>


<?php include("includes/sf-contact-inputs.php"); ?>


<script>
$(window).load(function() {
	$("#tfa_11").attr("value", vars['first']);
	$("#tfa_12").attr("value", vars['last']);
	$("#tfa_20").attr("value", vars['email']);
});
</script>


<script>
$('#tfa_0').submit(function() {
  ga('send', 'event', 'inquiry', 'submit', 'contact_us');
});
</script>

</body>


</html>