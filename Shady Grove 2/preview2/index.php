<!DOCTYPE html>
<html>
<head>

<title>UMBC-Shady Grove Undergraduate Preview Night</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Join us for Preview Night to learn important information regarding transfer requirements, application deadlines, scholarships, and financial aid opportunities." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="UMBC-Shady Grove Undergraduate Preview Night" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/preview2" />
<meta property="og:image" content="http://umbc.edu/shadygrove/preview2/images/preview-fb.png" />
<meta property="og:description" content="Join us for Preview Night to learn important information regarding transfer requirements, application deadlines, scholarships, and financial aid opportunities." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
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
 <?php include("includes/umbc-header.php"); ?>
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

<div class="ten columns" style="min-height:775px">
  
<!-- START Content -->
<h3>
<strong>Special Event for Prospective Students:</strong>
</h3>
<h3><a href="index"><img src="images/PreviewNight_Header.png" alt="ISD Now  Forum: What Does It Take to Be a Successful Consultant?" style="width:100%"></a></h3>

<h5>
<strong>WHEN:</strong> Wednesday, October 8, 6:30 - 8:00 PM<br>
<strong>WHERE:</strong> <a href="http://www.shadygrove.umd.edu/about/visit" target="_blank">The Universities at Shady Grove</a>, Building II - Multipurpose Room
</h5>
<br>
 
<p>GRIT. It&rsquo;s an attitude, defined by courage, resolve, and strength of character, which embodies the indomitable spirit of UMBC. That essence is felt here at UMBC-Shady Grove too. Earning your bachelor&rsquo;s degree takes perseverance. It takes grit.</p>

<p>  If you&rsquo;re ready to work hard for your bachelor's degree and make some great connections along the way, you&rsquo;ll fit right in here at UMBC-Shady Grove.</p>
 
<h4><strong>Join our October 8 Preview Night to: </strong></h4>
  <ul><li>Hear first-hand from members of the UMBC-Shady Grove <strong><a href="pat">Peer Advisory Team</a></strong></li>
    <li>Learn about our programs in <strong><a href="http://umbc.edu/shadygrove/history" target="_blank">History</a></strong>, <strong><a href="http://umbc.edu/shadygrove/politicalscience" target="_blank">Political Science</a></strong>, <strong><a href="http://umbc.edu/shadygrove/psychology" target="_blank">Psychology</a></strong>, and <strong><a href="http://umbc.edu/shadygrove/socialwork" target="_blank">Social Work</a></strong></li>
    <li> Meet and connect with UMBC faculty and staff</li>
    <li>Receive important information regarding transfer requirements, application deadlines, scholarships, and financial aid opportunities</li>
    <li>Meet UMBC's mascot, True Grit!</li>
    </ul>
<em><strong>Please Note:</strong> Light food will be provided.</em>
  
  

<!-- END Content -->
</div>

<!-- SIDEBAR -->

<?php include("includes/sidebar-forum.php"); ?>

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