<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en';
?>

<!DOCTYPE html>
<html>
<head>

<title>Biotechnology at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="The Master’s in Professional Studies in Biotechnology prepares science professionals to fill management and leadership roles." />
<?php include("includes/tracking.php"); ?>

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBC_DPS">

<!-- Open Graph data -->
<meta property="og:title" content="Biotech Symposium" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/protein" />
<meta property="og:image" content="http://www.umbc.edu/biotech/images/bk.jpg" />
<meta property="og:description" content="Join us for a day of research presentations and company exhibits related to the field of biotechnology!" />

  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://umbc.edu/dps/css/magnific-popup.css' rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet">
  <script src="http://umbc.edu/dps/js/modernizr.custom.js"></script>
  <link href="images/favicon.ico" rel="shortcut icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
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
      <?php include("includes/menu.php"); ?>
    </div>
    <!-- END gold toolbar -->
  </div>
  <!-- BEGIN MAIN -->
  <!-- Page Header -->
  <?php include("includes/header.php"); ?>
<!-- END Page Header -->

<div class="ten columns" style="min-height:775px">
  
<!-- START Content -->
<h3>Biotech Symposium Schedule</h3>
<h3><a href="index"><img src="images/protein-header.png" alt="Shady Grove Preview Night" style="width:100%"></a></h3>

<p>
<h5><strong>WHEN:</strong> Friday, January 27, 9:00AM - 5:00PM<br>
  <strong>WHERE:</strong> <a href="http://about.umbc.edu/visitors-guide/directions/" target="_blank">University Center</a>, Room 312, UMBC Campus (1000 Hilltop Circle; Baltimore, MD 21250)</h5>
</p>

<table id="schedule">
  <tr>
   <td width="25%">Time</td>
   <td width="25%">Description</td>
  </tr>
  <tr>
    <td>9:00-9:15 a.m.</td>
   <td>Introduction</td>
  </tr>
  <tr>
    <td>9:15-10:00 a.m.</td>
   <td>Key Note Speaker</td>
  </tr>
  <tr>
    <td>10:00 - 12:00 p.m.</td>
    <td>Oral Presentations</td>
  </tr>
  <tr>
    <td>12:00 - 1:00 p.m.</td>
   <td>Lunch</td>
  </tr>
  <tr>
    <td>1:15 - 2:00 p.m.</td>
   <td>Key Note Speaker</td>
  </tr>
  <tr>
    <td>2:00 - 4:00 p.m.</td>
    <td>Oral Presentations</td>
  </tr>
  <tr>
    <td>4:00 - 5:45  p.m.</td>
    <td>Poster Presentations, Company Exhibit</td>
  </tr>
  <tr>
    <td>5:45 - 6:00 p.m. </td>
    <td>Award Presentation & Conclusion</td>
  </tr>
  </table>

<!-- END Content -->
</div>

<!-- SIDEBAR -->

<?php include("includes/sidebar-protein.php"); ?>

<!-- END SIDEBAR -->
<!-- footer -->
<br clear="all">
<?php include("includes/footer.php"); ?>
<?php include("includes/tracking.php"); ?>

    <!--END footer -->
  </div>
  <!-- container -->
<div id="contents" style="display:none"></div>

<script>
	var programname = "usg";
</script>

  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>$( "#form" ).load( "../../dps/includes/contact-form.php" );</script>
<script>$( "#sidebar-contact" ).load( "../../dps/includes/contact-form.php .sidebar-form" );</script>
<script>$( "#contents" ).load( "../../dps/includes/program-info.php" );</script>


<script src="../js/scripts.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>$.getScript("http://umbc.edu/dps/js/changeprogram.js")</script>
<!--Remove Comment for Programs without Program Guides--
<script>$('#programguide').val(''); $('#planningform').val('');</script>
-->
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>

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