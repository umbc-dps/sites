<!DOCTYPE html>
<html>
<head>

<title>Contact | Cybersecurity at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="The Master’s in Professional Studies in Cybersecurity prepares experienced professionals to fill management and leadership roles." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Contact | Cybersecurity at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/cyber/contact" />
<meta property="og:image" content="http://www.umbc.edu/cyber/images/bk.jpg" />
<meta property="og:description" content="The Master’s in Professional Studies in Cybersecurity prepares experienced professionals to fill management and leadership roles." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">
  <script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>
  <link href="images/favicon.ico" rel="shortcut icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  
</head>
<style>
#four{display:none}
form#tfa_0 label{font-weight:bold;}
form#tfa_0 div{margin:0!important; padding:0!important; line-height: 3em;}
form#tfa_0 {width:100%; float:left!important;}
</style>

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


        <p>Thank you for your interest in the UMBC Cybersecurity programs. If you'd like additional information or have a question, please complete the following form and click submit.</p>
  
 
<div id="form">    
        
<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
if(!isset($_GET['tfa_next'])) {
$qs = ' ';
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']));
echo file_get_contents('https://umbc.secure.force.com/form?formID=217721'.$qs);
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
              <p><strong>Lisa Gambino</strong><br>
              Contact for Admissions Related Questions<br>
              <a href="mailto:Gambino@umbc.edu">gambino@umbc.edu</a><br>
              410-455-3034</p>
            </td>

            <td align="left" valign="top">
              <p><strong>Dr. Richard Forno</strong><br>
              Graduate Program Director<br>
              <a href="mailto:Richard.forno@umbc.edu">richard.forno@umbc.edu</a></p>
            </td>
          </tr>
        </table>
      </div>

    
    <div id="contents" style="display:none">  
    	  
    </div>
    
    </div>
    <!-- SIDEBAR -->
    	<?php include("includes/sidebar.php"); ?>
<!-- END SIDEBAR -->
    <!-- footer -->
    <br clear="all">
		<?php include("includes/footer.php"); ?>

	<br>
    <!--END footer -->
  </div>
  <!-- container -->

<script>
	var programname = "cyber";
</script>

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

<script>
var vars = [], hash;
    var q = window.location.href.split('?')[1];
    if(q != undefined){
        q = q.split('&');
        for(var i = 0; i < q.length; i++){
            hash = q[i].split('=');
            vars.push(hash[1]);
            vars[hash[0]] = hash[1];
        }
}
</script>
<script>
$(window).load(function() {
	$("#tfa_11").attr("value", vars['first']);
	$("#tfa_12").attr("value", vars['last']);
});
</script>



</body>
</html>