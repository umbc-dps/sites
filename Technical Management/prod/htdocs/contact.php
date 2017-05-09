<!DOCTYPE html>
<html>
<head>

<title>Contact Us | Technical Management at UMBC</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC's Technical Management program provides managers with the skills needed to lead technical teams." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Technical Management at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/dpsstage3/index/" />
<meta property="og:image" content="http://www.umbc.edu/biotech/images/bk.jpg" />
<meta property="og:description" content="UMBC's Technical Management program provides managers with the skills needed to lead technical teams." />

<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='css/magnific-popup.css' rel='stylesheet'>
<link href="css/styles.css" rel="stylesheet">
<script src="js/modernizr.custom.js"></script>
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


        <p>Thank you for your interest in the UMBC Technical Management program. If you'd like additional information or have a question, please complete the following form and click submit.</p>

     
        
<div id="form">    
        
<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
echo file_get_contents('https://umbc.tfaforms.net/rest/forms/view/217734'.$qs);
?>
        
        <table id="contact2">
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

<script src="js/scripts.js"></script> 
<script src="js/jquery.cbpFWSlider.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>

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
	$("#tfa_20").attr("value", vars['email']);
});
</script>


<script>
$('#tfa_0').submit(function() {
  ga('send', 'event', 'inquiry', 'submit', 'contact_us');
});
</script>


<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

<?php include("includes/sf-contact-inputs.php"); ?>

</body>

</html>