

<!DOCTYPE html>
<html>
<head>

<title>Info Session | Systems Engineering at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Drop in and chat with the Assistant Program Director, Dr. Toby Gouker to learn more about UMBC Graduate Programs in Systems Engineering." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Info Session | Systems Engineering at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/engm/infosession" />
<meta property="og:image" content="http://www.umbc.edu/engm/images/bk.jpg" />
<meta property="og:description" content="Learn more about UMBC Graduate Programs in Systems Engineering. Representatives from Financial Aid, Veteran Affairs, Graduate School, and others will be on hand to answer your questions." />

<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
<link href="css/styles.css" rel="stylesheet">

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

<link href="images/favicon.ico" rel="shortcut icon">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<style>

.io, .gis{display:none}

@media only screen and (max-width: 799px)  {
.container .eleven.columns{min-height:500px}
/*#tfa_84-D, #tfa_418-D, #tfa_420-D{display:none}*/
}
@media only screen and (min-width: 800px) and (max-width: 1023px)  {
.container .eleven.columns{min-height:500px}
}

.wFormContainer{height:500px}
#form .wFormContainer{height:250px}
#talks-form p strong{color:#FFF!important}
#tfa_0-T, .supportInfo, div.lengthIndicator, #tfa_447-D{
	display:none!important;
}
form#tfa_0, form#tfa_0 .section, form#tfa_0 label{background-color:transparent!important;}
form#tfa_0 label, form#tfa_0 .section, form#tfa_0 input, form#tfa_0 div{
	margin:0px!important;
	padding:0px!important;
}
form#tfa_0 div{
	width:100%;
}
form#tfa_0 input{
	width:95%!important;
	height:25px;
}
form#tfa_0 select{
	width:95%!important;
	height:25px;
}
form#tfa_0 textarea{
	width:95%!important;
	height:75px;
}
form#tfa_0{
	margin-left:5%;
}
form#tfa_0 label{
	font-weight: bold;
	padding-top:10px!important;
}
form#tfa_0 input.primaryAction{
	font-weight:bold;
	margin-top:20px!important;
	text-align:center!important;
	display:block;
	height:30px;
	min-width:95%!important;
}
.actions{
	display:inline-block;
	text-align:center!important;
	margin-right:500px!important;
}
#four, .hide{display:none}
</style>


<link href='http://umbc.edu/dps/css/sf-request-info.css' rel='stylesheet'>
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

<!-- BEGIN MAIN --><!-- Page Header -->

 <?php include("includes/header.php"); ?>
 
<!-- END Page Header --><div class="eleven columns">
  
<!-- START Content --> 
<h3>UMBC Engineering Management & Systems Engineering Drop-In Session</h3>

<p>
 <strong>Date & Time:</strong> Monday, May 1, 2017 at 7:00pm<br>
 <strong>Location:</strong> <a href="http://about.umbc.edu/visitors-guide/directions/" target="_blank">UMBC ITE building, Room 218</a></p>

<p>Drop in and chat with the Assistant Program Director, Dr. Toby Gouker! The sessions will take place in the UMBC ITE building, Room 218. If you have any questions, please email Kim Edmonds: <a href="mailto:kedmonds@umbc.edu">kedmonds@umbc.edu</a>.</p>

<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
if(!isset($_GET['tfa_next'])) {
$qs = ' ';
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']));
echo file_get_contents('https://umbc.secure.force.com/form?formID=217747'.$qs);
} else {
echo file_get_contents('http://app.formassembly.com/rest'.$_GET['tfa_next'],false,$context);
}
?>


<!-- END CONTENT -->


</div>
  
<!-- SIDEBAR -->
 <?php include("includes/sidebar.php"); ?>
<!-- END SIDEBAR -->

<!-- footer -->
  <br clear="all">  <?php include("includes/footer.php"); ?>
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


<script>
var vars = [], hash;
    var q = document.URL.split('?')[1];
    if(q != undefined){
        q = q.split('&');
        for(var i = 0; i < q.length; i++){
            hash = q[i].split('=');
            vars.push(hash[1]);
            vars[hash[0]] = hash[1];
        }
}
var currentLocation = window.location.href.split('?')[0];
$("#tfa_20").attr("value", vars['email']);
$("#tfa_11").attr("value", vars['first']);
$("#tfa_12").attr("value", vars['last']);
$("#tfa_432").attr("value", vars['utm_campaign']);
$("#tfa_428").attr("value", vars['utm_source']);
$("#tfa_430").attr("value", vars['utm_medium']);
$("#tfa_434").attr("value", vars['utm_content']);
$("#tfa_436").attr("value", vars['utm_term']);
$("#tfa_439").attr("value", currentLocation);
</script>
 


<script>
$('#tfa_0').submit(function() {
  ga('send', 'event', 'lead', 'submit', 'infosession');
  fbq('track', 'CompleteRegistration');
});
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_437").attr("value", clientId)
});
</script>

<?php include("includes/sf-contact-inputs.php"); ?>

</body>
</html>