<!DOCTYPE html>
<html>
<head>

<title>UMBC-Shady Grove Order Regalia</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Please follow the following steps to order your regalia and have it delivered to Shady Grove for pick-up." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="UMBC-Shady Grove Order Regalia" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/regalia" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/commencement.png" />
<meta property="og:description" content="Please follow the following steps to order your regalia and have it delivered to Shady Grove for pick-up." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="../css/styles.css" rel="stylesheet">
<link href="css/accordion.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="js/modernizr.custom.js"></script>



<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<style>
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.accordionbody { padding-top:5px; }
.accordionbody img { padding: 0px 10px 5px 0px; width: 200px }
.accordionbody ul{ margin-left:25px; }
#mobile-site-menu-expander {display:none}
#photos img{width: 100%;}
</style>
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

</div>
<!-- END gold toolbar -->

</div>

<!-- BEGIN MAIN -->

<!-- Page Header -->
  <div class="container column">
    <div class="sixteen columns">      

    <h1 style="border:0;"></h1>
    </div>
<!-- END Page Header -->


  
<!-- START Content -->

<h3><a href="index"><img src="images/header.png" alt="Regalia" style="width:100%"></a></h3>

<h5>
Please follow the following steps to order your regalia and have it delivered to Shady Grove for pick-up.  Order by March 11, 2016 to avoid the $25 late fee.  The ordering site will be shut 
down on March 14.
</h5>
<br>
 
<h3>Step 1 - Ordering</h3>

<p><a href="http://colleges.herffjones.com/college/umbc/" target="_blank">Order your cap and gown online</a> through Herff Jones.</p>
 
<h3>Step 2 - Delivery to USG</h3>
<p>If you would like to pick up your regalia from UMBC-Shady Grove, fill out the <a href="https://docs.google.com/a/umbc.edu/forms/d/1iZU2XINjobsN_gJtl9QA4eVmdSzJ9sw1SfvU94y7nvw/viewform" target="_blank">Regalia Delivery Request Form</a>.

<p style="background-color:#ffcc00; padding: 10px;"><strong>Note:</strong> You must order online and submit the information via the google form if you would like your order delivered to USG.  If you adhere to all of the guidelines and deadlines above, you will receive an e-mail when your items are available for pick-up at Shady Grove in December. You will not need to travel to main campus for ordering, nor for pick up.</p>

<p style="text-align:center; font-weight:bold">Visit <a href="http://commencement.umbc.edu/" target="_blank">UMBC's Commencement Page</a>, for more information on Commencement, including directions to the venue and special accommodations for guests.</p>

<!-- END Content -->


<!-- SIDEBAR -->



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
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content",
      active:false,
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


</body>
</html>