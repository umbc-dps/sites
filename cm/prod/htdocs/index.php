<!DOCTYPE html>
<html>
<head>

<title>American Contemporary Music Post-Baccalaureate Certificate</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="A unique one-year program for students in performance, composition, and music technology at UMBC." />


<!-- Open Graph data -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
<link href="http://umbc.edu/dps/css/accordion.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>



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

p1 {
    line-height: 30px;
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

<div class="ten columns" style="min-height:775px">
  
<!-- START Content -->
<h3><a href="index"><img src="images/header3.png" alt="UMBC Alumni Newtworking Reception" style="width:100%"></a></h3>

<h5>
<strong>Explore creativity and develop a singular musical voice through an intense immersion in contemporary music practices.</strong></h5>
<br>

<p>A unique one-year program for students in performance, composition, and music technology at the University of Maryland, Baltimore County (UMBC). This program is perfect for performers seeking an additional year of experience before graduate school, composers wishing to develop their portfolio, and anyone interested in exploring their interests in a focused manner not possible via traditional course study.</p>

<h5><strong>Program Benefits</strong></h5>
<ul>
  <li>Study and perform with internationally acclaimed faculty</li>
  <li>Tailor fit to each individual</li>
  <li>Access to UMBC's new state-of-the-art performance and recording spaces</li>
  <li>Many performance opportunities</li>
  <li>Graduate school selection and application assistance</li>
  <li>Most institutions recognize some or all of these credits</li>
</ul>
<br>
<p>
<div align="center"><strong>If you have any questions regarding the program, please contact <a href="mailto:americanmusicumbc@gmail.com">Dr. Lisa Cella</a><br> or visit the <a href="http://music.umbc.edu/degrees-certificates/american-contemporary-music/" target="_blank">website</a>.</strong></div></p>
<br>
<br>


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
<?php include("includes/tracking.php"); ?>

<br>
    <!--END footer -->
  </div>
  <!-- container -->
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/scripts.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
$("#entry_1802771340").attr("value", vars['email']);
$("#entry_1244612739").attr("value", vars['first']);
$("#entry_1812444790").attr("value", vars['last']);
</script>

</body>
</html>