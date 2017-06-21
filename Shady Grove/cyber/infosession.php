<!DOCTYPE html>
<html>
<head>

<title>Info Session | Cybersecurity | UMBC at Shady Grove</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Learn more about UMBC's Master’s in Professional Studies in Cybersecurity by RSVPing for our upcoming Open House." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Info Session | Cybersecurity | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/cyber/infosession" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/bk.jpg" />
<meta property="og:description" content="The Master’s in Professional Studies in Cybersecurity prepares experienced professionals to fill management and leadership roles." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='../css/magnific-popup.css' rel='stylesheet'>
<link href="../css/styles.css" rel="stylesheet">
<link href='http://umbc.edu/dps/css/accordion.css' rel='stylesheet'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="../js/modernizr.custom.js"></script>

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

<?php include("../includes/grad-infosessioncyber.php"); ?> 




<!-- END Content -->
</div>

<!-- SIDEBAR -->
 <?php include("includes/sidebar.php"); ?>

<!-- END SIDEBAR -->

<!-- footer -->
<br clear="all">
<?php include("../includes/footer.php"); ?>
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



<?php include("includes/tracking.php"); ?>

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

<script>
/* Set Program */
$('select#tfa_447').find('option').each(function(){
         if($(this).text() == 'Cybersecurity')
            this.selected = true;
    });
</script>

<script>
/* Set Initial Source to Theater ad for Theater redirect */
$('select#tfa_421').find('option').each(function(){
         if($(this).text() == 'Theater Ad' && vars['initial_source'] == 'Theater%20Ad')
            this.selected = true;
    });
</script>

<?php include("includes/sf-contact-inputs.php"); ?>
</body>

</html>