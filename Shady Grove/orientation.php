<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Graduate Orientation | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Graduate Orientation." />
<meta name="robots" content="noindex, nofollow">

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Graduate Orientation | UMBC Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/orientation" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Graduate Orientation." />



<link href="css/styles-ug.css" rel="stylesheet">
<link href="css/accordion-ug.css" rel="stylesheet">
<link href='css/magnific-popup.css' rel='stylesheet'>

<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="js/modernizr.custom.js"></script>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


<style type="text/css">
@media screen and (min-width:800px) {
html{
	position: relative;
	height:100%;
}
html::after {
  content: "";
  background: url(images/bg/<?php echo $selectedBg; ?>) no-repeat;
  background-size:cover;
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: fixed;
  z-index: -1;  
  background-attachment:fixed;
}
}
/*Mobile Responsive iFrame*/
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper2 {
	position: relative;
	padding-bottom: 150%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe, .videoWrapper2 iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
@media screen and (max-width:799px) {
.videoWrapper2 iframe {height: 275%}
.videoWrapper2 {margin-bottom: 275%}
}

#tfa_0-T, .supportInfo, div.lengthIndicator{
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
}
div.actions{
	display:inline-block;
	text-align:center!important;
}
</style>



</head>
<body>
<div id="full-page">
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php //include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading">
<a href="index">
<h1 class="remove-bottom">Graduate Orientation</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
    <!-- Start Content -->   
      <div class="content"><br>

      <h2 style="text-align:center">Graduate Orientation at Shady Grove</h2>
 <div style="padding:0px 50px">     
<h4 style="font-weight:bold">Dates:</h4>
<h5><strong>I/O Psychology:</strong> Wednesday, June 7, 6 - 7:30 pm & Networking Event 7:30 - 9:30 pm</h5>
<h5><strong>Cybersecurity:</strong> Tuesday, August 22, 6-7:30 pm</h5>
<h5><strong>Geographic Information Systems:</strong> Tuesday, August 22, 6-7:30 pm</h5>
<br>

<h4 style="font-weight:bold">Location:</h4>
<h5><a href="https://www.google.com/maps/place/The+Universities+at+Shady+Grove/@39.0934831,-77.202358,17z/data=!3m1!4b1!4m5!3m4!1s0x89b632b6a8fe197f:0x292768fbf6722042!8m2!3d39.0934831!4d-77.2001693">The Universities at Shady Grove, 9636 Gudelsky Drive, Rockville, MD 20850</a></h5>
<br><br>

<h4 style="font-weight:bold">Additional Questions?:</h4>
        <h5>Contact Rickeysha Jones at <a href="mailto:rcjones@umbc.edu">rcjones@umbc.edu</a></h5>
</div>
<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
if(!isset($_GET['tfa_next'])) {
$qs = ' ';
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']));
echo file_get_contents('https://umbc.secure.force.com/form?formID=217752'.$qs);
} else {
echo file_get_contents('http://app.formassembly.com/rest'.$_GET['tfa_next'],false,$context);
}
?> 
		<br>
	  </div>
	</div>
      	<!-- END Content -->


    <!-- /eleven columns -->
    <div class="four columns omega"> 
    <!-- SIDEBAR --> 
      <?php include("includes/ss-sidebar.php"); ?>
    <!-- /five columns  --> 


    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("includes/footer-ug.php"); ?> 
  </footer>

	</div>  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/scripts.js"></script> 
<script src="js/jquery.magnific-popup.js"></script> 
<script src="js/popup.js"></script> 

<script>
$( "#accordion" ).accordion({
      heightStyle: "content",
      active: false,
      collapsible: true,
      header:"div.accordionheader"
    });
    var hash = window.location.hash;
    var anchor = $('a[href$="'+hash+'"]');
    if (anchor.length > 0){
        anchor.click();
    }
$('h4').click(function() {
	var linkText = $(this).text();
	ga('send', 'event',  'accordion', 'click', linkText);
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
$("#tfa_445").attr("value", currentLocation);
</script>
 


<script>
$('#tfa_0').submit(function() {
  ga('send', 'event', 'lead', 'submit', 'orientation');
  fbq('track', 'CompleteRegistration');
});
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_437").attr("value", clientId)
});
</script>

 

<?php include("includes/tracking.php"); ?>

<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

</body>
</html>