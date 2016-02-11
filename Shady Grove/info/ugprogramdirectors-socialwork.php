<!DOCTYPE html>
<html>
<head>

<title>UMBC-Shady Grove Undergraduate | Meet Our Program Director</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="During this session, you will engage in discussion and conversation with the Program Director of your undergraduate program of interest." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="UMBC-Shady Grove Undergraduate | Meet Our Program Director" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/info/ugprogramdirectors-socialwork" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/info/images/USG_FA15_SocialWork.png" />
<meta property="og:description" content="During this session, you will engage in discussion and conversation with the Program Director of your undergraduate program of interest." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="../preview/css/styles.css" rel="stylesheet">
<link href="../preview/css/accordion.css" rel="stylesheet">
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
option[value*="History"], option[value*="Psychology"], option[value*="Political Science"], .history, .psych, .poli  {display:none}

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

<div class="ten columns">
  
<!-- START Content -->
<h3><a href="index"><img src="images/USG_FA15_SocialWork.png" alt="Meet Our Program Director!" style="width:100%"></a></h3>

<h4>Dates:</h4>
<?php include("includes/dates-pd.php"); ?>
<br>
 
<p>Please use this form to RSVP for an on-site, program-specific visit with our Undergraduate Program Directors.  A confirmation will appear after you click submit. During this session, you will engage in discussion and conversation with the Program Director of your undergraduate program of interest.</p>

<p><strong>Information will be provided regarding:</strong>
<ul>
<li>Program design and structure</li>
<li>Course offerings</li>
<li>Internship and career possibilities</li>
<li>Other relevant topics</li>
</ul>

<p>  All Undergraduate Program Visits will be held in the Camille Kendall Academic Center (Building III-4156 or 4124).  Visits with Undergraduate Program Directors are scheduled on various days and at different times during the semester. </p>

  
</li>

  
  

<!-- END Content -->
</div>

<!-- SIDEBAR -->

<?php include("includes/sidebar-pd.php"); ?>

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