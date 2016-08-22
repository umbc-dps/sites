<!DOCTYPE html>
<html>
<head>

<title>American Contemporary Music Post-Baccalaureate Certificate | Thank You!</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="A unique one-year program for students in performance, composition, and music technology at UMBC." />

<!-- Open Graph data -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
<link href="http://umbc.edu/dps/css/accordion.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>
<script type="text/javascript" src="https://addthisevent.com/libs/1.6.0/ate.min.js"></script>

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

.extra{display:none}

.accordionbody { padding-top:5px; }
.accordionbody img { padding: 0px 10px 5px 0px; width: 200px }
.accordionbody ul{ margin-left:25px; }
#mobile-site-menu-expander {display:none}
#photos img{width: 100%;}
#social img {height:30px;}
#social, #foot {text-align:center}
#entry_1460748176{width:91%}
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
<h3><a href="index"><img src="images/header3.png" alt="ISD Now  Forum: What Does It Take to Be a Successful Consultant?" style="width:100%"></a></h3>

<h3><strong>Thank You!</strong></h3>
 

  <p>Thank you for requesting information for the American Contemporary Music Post-Baccalaureate Certificate! You will receive information shortly.</p>
  
  <p>If you have any questions regarding the program, please contact <a href="mailto:americanmusicumbc@gmail.com">Dr. Lisa Cella</a>
or visit the <a href="http://music.umbc.edu/degrees-certificates/american-contemporary-music/" target="_blank">website</a>.</p>


<!-- END Content -->
</div>

<!-- SIDEBAR -->
<aside class="six columns add-bottom" id="one">
<?php include("includes/sidebar.php"); ?>
</aside>
<!-- END SIDEBAR -->
<!-- footer -->
<br clear="all">
    
<?php include("includes/footer.php"); ?>
<?php include("../includes/tracking.php"); ?>
<br>
    <!--END footer -->
  </div>
  <!-- container -->
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="js/scripts.js"></script> 
<script>$.getScript("http://umbc.edu/dps/cm/js/sendtomailchimp.js")</script>
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