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
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"><link href='http://umbc.edu/dps/css/sf-request-info.css' rel='stylesheet'>
</head>
<style>
#four{display:none}

#tfa_0-T, .supportInfo, div.lengthIndicator{
	display:none!important;
}
form#tfa_0, form#tfa_0 .section, form#tfa_0 label{background-color:transparent!important;}
form#tfa_0 .section, form#tfa_0 div{
	margin:0px!important;
	padding:0px!important;
}
form#tfa_0, form#tfa_0 .group, form#tfa_0 .oneField, form#tfa_0 .section{width:100%!important}

form#tfa_0 input, form#tfa_0 select, form#tfa_0{height:20px;}

form#tfa_0 select{width:270px;}

form#tfa_0 .oneField{padding-bottom:10px!important}

form#tfa_0 label{
	font-weight: bold;
	font-size: 11pt;
}
form#tfa_0 input.primaryAction{
	font-weight:bold;
	margin-top:20px!important;
	text-align:center!important;
	height:30px;
}
.wForm{
	min-height:660px!important; 
	width:100%!important; 
	padding:0px!important; 
	margin:0px!important; 
	overflow:hidden!important
	}

/*Hide Fields*/
#tfa_766-D, #tfa_331-D, #tfa_807-D, #tfa_808-D, #tfa_809-D, #tfa_816-D, #tfa_817-D{display:none}

@media screen and (max-width:640px) {

#tfa_24-D, #tfa_26-D, #tfa_84-D, #tfa_375-D {display:none}

}
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

    
    
    
    </div>
    <!-- SIDEBAR -->
    	<?php include("includes/sidebar.php"); ?>
<!-- END SIDEBAR -->
    <!-- footer -->
    <br clear="all">
		<?php include("includes/footer.php"); ?>
        <?php //include("includes/tracking.php"); ?>

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
var url = window.location.pathname.split('/')[1];
$(window).load(function() {
	$("#tfa_807").attr("value",url);
});
</script>


<script>
/* Set Program */
$('select#tfa_331').find('option').each(function(){
         if($(this).text() == 'Cybersecurity')
            this.selected = true;
    });

/* Set Campus */
$('select#tfa_766').find('option').each(function(){
         if($(this).text() == 'Main Campus')
            this.selected = true;
    });
	
	
/* Set Program Coordinator */
$('select#tfa_809').find('option').each(function(){
         if($(this).text() == 'Lisa Gambino - 00550000006H4P4')
            this.selected = true;
    });
	
/*Set Program Coordinator Email */
$("#tfa_816").attr("value", 'gambino@umbc.edu');

/*Set Email Body */
$("#tfa_817").val('UMBC’s Cybersecurity program reflects the interdisciplinary nature of the modern cybersecurity environment offering students the necessary educational experience required for successful and effective cybersecurity practice in today’s workforce. Since our program blends both the technical and non-technical aspects of cybersecurity, our graduates share a common understanding of the operational cybersecurity environment and also have the opportunity to expand their knowledge on specific cybersecurity interests.');
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
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>

</body>
</html>