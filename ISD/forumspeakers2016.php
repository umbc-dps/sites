<!DOCTYPE html>
<html>
<head>

<title>ISD Now Forum 2016 - Speakers | Instructional Systems Development at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="In this stimulating session, Dr. Thalheimer will challenge us in a rapid-fire quiz show, uncovering the many pitfalls around learning. He will present using humor, energy, and a provocative edge." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@isdnow">

<!-- Open Graph data -->
<meta property="og:title" content="ISD Now Forum 2016 - Speakers | Instructional Systems Development at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/isd/forumspeakers2016" />
<meta property="og:image" content="http://umbc.edu/isd/images/isdnow-fb.png" />
<meta property="og:description" content="In this stimulating session, Dr. Thalheimer will challenge us in a rapid-fire quiz show, uncovering the many pitfalls around learning. He will present using humor, energy, and a provocative edge." />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
<link href="http://umbc.edu/dps/css/accordion.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

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
<a href="index" style="text-decoration:none" id="breadcrumb">
    <h1 class="home-header" id="dps" style="border:0;"><img alt="Instructional Systems Development" class="scale-with-grid" src="images/logo.png">
    <div align="center" style="border-top:2px #E9AB13 solid"></div></h1></a>
    </div>
<!-- END Page Header -->

<div class="ten columns" style="min-height:600px">
  
<!-- START Content -->
<h3><a href="forum2016"><img src="images/forum.jpg" alt="ISD Now  Forum: What Does It Take to Be a Successful Consultant?" style="width:100%"></a></h3>
 
<p>
<h4>
<strong>WHEN:</strong> Wednesday, October 12, 6:00 - 8:30 PM<br>

<strong>WHERE:</strong> UMBC Ballroom, University Center, 3rd Floor<br>

<strong>WHO:</strong> Anyone interested in improving teaching, learning and performance
</p>
</h4>

<br>

<h3>2016 ISD Now Speaker: Dr. Will Thalheimer</h3>
<br>

<p><img src="images/thalheimer.jpg" align="left" alt="Dr. Will Thalheimer"/>Dr. Will Thalheimer is a learning-to-performance strategist, learning consultant, learning researcher, learning benchmarker, program evaluator, speaker, workshop provider, simulation architect, instructional designer, business leader, and product-line leader. He is also the author of the highly acclaimed book: <a href="http://smilesheets.com/" target="_blank">Performance-Focused Smile Sheets: A Radical Rethinking of a Dangerous Art Form.</a></p> 

<p>Dr. Thalheimer’s specialties include: evidence-based practice, instructional design, e-learning design, leadership development, change management, learning measurement, research translation.</p>

<p>Since founding Work-Learning Research in 1998, Dr. Thalheimer’s goal has been to help clients maximize the effectiveness of their learning interventions and learning environments while also working to improve our field. He achieves this by exhaustively compiling research from the world's preeminent refereed journals on learning, memory, and instruction---and translating that research with practical wisdom.</p>

<p>Through speaking engagements, workshops, e-learning benchmarking, and consulting, he helps enlightened clients build world-class learning programs.</p>

<br clear="all">



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



<script src="http://umbc.edu/dps/js/scripts.js"></script> 
<script src="http://umbc.edu/dps/js/jquery.cbpFWSlider.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>


<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

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
$("#entry_2054798228").attr("value", vars['email']);
$("#entry_2109974497").attr("value", vars['first']);
$("#entry_722192688").attr("value", vars['last']);
</script>


<?php include("includes/sf-contact-inputs.php"); ?>

</body>

</html>