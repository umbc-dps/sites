<!DOCTYPE html>
<html>
<head>

<title>Info Session | I/O Psychology | UMBC at Shady Grove</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Visit us to learn about our Master's and Graduate Certificate programs offered in Rockville, MD. Receive information on admissions, curriculum, job outlook, and meet faculty and staff." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Info Session | I/O Psychology | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/io/infosession" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/bk.jpg" />
<meta property="og:description" content="Visit us to learn about our Master's and Graduate Certificate programs offered in Rockville, MD. Receive information on admissions, curriculum, job outlook, and meet faculty and staff." />

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

<style>
#mobile-site-menu-expander {display:none}
form#ss-form {padding-left: 15%;}
input#ss-submit {width: 85%;}
div#ss-item{text-align:center}
form#ss-form input, form#ss-form select{ font-size: 16pt; color: #000;}
.ss-form-entry input, .ss-form-entry select { width: 85%; margin-bottom: 15px; }
.ss-q-title{font-weight: bold}
.ss-required-asterisk{text-align:right; font-style:italic; padding-right: 15%}
.cyber, .gis{display:none}
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

<?php include("includes/rsvp.php"); ?> 



<!-- END Content -->
 </div></div></div>
  
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
$("#entry_4").attr("value", vars['email']);
$("#entry_2").attr("value", vars['first']);
$("#entry_3").attr("value", vars['last']);
</script>

<?php include("includes/sf-contact-inputs.php"); ?>

</body>

</html>