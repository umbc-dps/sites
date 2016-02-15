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

<script src="../js/modernizr.custom.js"></script>



<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">

<style>
#mobile-site-menu-expander{display:none}
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

<h4 style="text-align:center">
The USG Open House is taking place Saturday, <strong>March 5th</strong> from <strong>9:00am-12pm</strong> at The Universities at Shady Grove (USG). Drop-in when you can and leave when you must!
</h4>
<br>

<p style="text-align:center">
<a href="https://shadygrove.askadmissions.net/Portal/EI/Registration?gid=6235779e0a29c908b74ca69baef58da998784d" class="btn" target="_blank" style="font-size:150%">RSVP For the General USG Open House</a>
</p>

<ul>
  <li>At the USG Open House, students will have an opportunity to meet and discuss next steps in the transfer process with our History, Political Science, Psychology, and Social Work Program Directors.  </li>
  <li>During the Open House (<span data-term="goog_1370937997" tabindex="0">10:30am-11:30am</span>) students will also have the opportunity to meet with Chelsea Moyer, Program Coordinator, to receive assistance in beginning their Common Application to UMBC-Shady Grove undergraduate programs. (Room TBD - but I should be able to get this info to you shortly.)</li>
  <li>For those students interested in learning more about the transfer process, application and admission process as well as financial aid and scholarship opportunities, UMBC-Shady Grove will be hosting an Undergraduate Information Session following the Open House from <span data-term="goog_1370937998" tabindex="0">12:30pm-1:30pm</span> in the Camille Kendall Academic Center (Building III), Room 3156. <a href="http://www.umbc.edu/shadygrove/info/uginfosession.php" target="_blank">RSVP to attend</a>.</li>
</ul>


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