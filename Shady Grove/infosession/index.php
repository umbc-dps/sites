<!DOCTYPE html>
<html>
<head>

<title>UMBC-Shady Grove Info Session</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Please follow the following steps to order your regalia and have it delivered to Shady Grove for pick-up." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="UMBC-Shady Grove Info Session" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/regalia" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/commencement.png" />
<meta property="og:description" content="Please follow the following steps to order your regalia and have it delivered to Shady Grove for pick-up." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="../css/styles.css" rel="stylesheet">
<link href="css/accordion.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="../js/modernizr.custom.js"></script>



<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">

<style>
#mobile-site-menu-expander{display:none}

@media (max-width: 800px) {
	.seven{border:0px!important;}
}
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

<!-- END Page Header -->

<!-- START Content -->
<br>


<h3>
	<a href="index">
    	<img src="images/header.png" alt="Open House" style="width:100%">
	</a>
</h3>
<br>
<div class="seven columns offset-by-one" style="text-align:center">
	<h4>
		<strong>
        	Prospective Undergraduate<br>
  			In-Person Information Sessions
  		</strong>
	</h4>
	<br>
	<p>
	Tuesday, August 9 - 12:00 PM <br>
    Wednesday, September 14 - 1:00 PM <br>
	Saturday, October 29 - 12:30 PM <br>
	Thursday, November 17 - 3:00 PM <br>
	Tuesday, December 6: 10:30 AM <br>
	  <br>
	  <a href="rsvp" target="_blank">
	    <img src="../images/infosession.png">
      </a>    
      </p>
      
      <hr>  
      	<h4>
        	<strong>UMBC-Shady Grove<br>
			Information Webinar</strong>
        </h4>
        <br>
        <p>Oct 12, 2016 - 12:00 PM<br><br>
			<a href="https://attendee.gotowebinar.com/register/810559248515057154" target="_blank">
			<img src="../images/infosession.png">
			</a>   
      	</p>
</div>

<div class="seven columns" style="text-align:center; border-left: 2px #929292 solid">
	<h4>
    	<strong>Visit with Undergraduate<br>
        Program Directors
        </strong>
	</h4>

	<p>
		<strong>History:</strong><br>
		Wednesday, October 5 - 12:00pm<br>
        Tuesday, November 1 - 5:30pm<br>
	</p>
          
	<p>
    	<strong>Political Science:</strong><br>
		Wednesday, September 7 - 12:00 PM<br>
		Wednesday, September 14 - 12:00 PM<br>
		Wednesday, September 21 - 12:00 PM<br>
		Wednesday, September 28 - 12:00 PM<br>
		Wednesday, October 5 - 12:00 PM<br>
	</p>
          
	<p>
        <strong>Psychology:</strong><br>
        Wednesday, October 12 - 4:30 PM<br>
		Thursday, November 3 - 12:00 PM<br>
	</p>

	<p>
        <strong>Social Work:</strong><br>
		Tuesday, August 8 - 5:30 PM<br>
        Wednesday, September 21 - 4:30 PM <br>
		Wednesday, November 9 - 12:30 PM<br>
	</p>

	<p>
		<a href="pd" target="_blank">
			<img src="../images/visitus.png">
      	</a>
	</p>
</div>
<br clear="all">


<!-- END Content -->


<!-- SIDEBAR -->



<!-- END SIDEBAR -->
<!-- footer -->
<br clear="all">
    
<?php include("../includes/footer.php"); ?>
<?php include("../includes/tracking.php"); ?>

<br>
    <!--END footer -->
  </div>
  <!-- container -->
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="../js/scripts.js"></script> 
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