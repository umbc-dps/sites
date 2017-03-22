<!DOCTYPE html>
<html>
<head>

<title>Contact | Geographic Information Systems | UMBC at Shady Grove</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="The Master’s in Professional Studies in Geographic Information Systems prepares experienced professionals to fill management and leadership roles." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Contact | Geographic Information Systems | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/gis/contact" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/bk.jpg" />
<meta property="og:description" content="The Master’s in Professional Studies in Geographic Information Systems prepares experienced professionals to fill management and leadership roles." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='../css/magnific-popup.css' rel='stylesheet'>
<link href="../css/styles.css" rel="stylesheet">
<link href='http://umbc.edu/dps/css/accordion.css' rel='stylesheet'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="../js/modernizr.custom.js"></script>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">

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
      <?php include("../includes/umbc-header.php"); ?>
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

        <p>Thank you for your interest in the UMBC Geographic Information Systems programs. If you'd like additional information or have a question, please complete the following form and click submit.</p>

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


          <tr>
            <td align="left" valign="top">
              <p><strong>Rickeysha Jones</strong><br>
              Contact for Admissions Related Questions<br>
              <a href="mailto:Gambino@umbc.edu">rcjones@umbc.edu</a><br>
              301-738-6285 </p>
            </td>

            <td align="left" valign="top">
              <p><strong>Erwin Villiger</strong><br>
              Graduate Program Director<br>
              <a href="mailto:villiger@umbc.edu">villiger@umbc.edu</a></p>
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



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



<script src="../js/scripts.js"></script> 
<script src="../js/jquery.cbpFWSlider.js"></script>
<script src="../js/jquery.magnific-popup.js"></script>
<script src="../js/popup.js"></script>


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