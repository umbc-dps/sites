<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Special Programs | Summer Session at UMBC</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Winter session GEP course offerings and requirements." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="We're Flexible | Summer Session at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/winter/flexible" />
<meta property="og:image" content="http://www.umbc.edu/winter/images/1.jpg" />
<meta property="og:description" content="We're flexible!" />


<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet">
<link href="../css/magnetic-popup.css" rel="stylesheet">
<link href="../css/accordion.css" rel="stylesheet">
<link rel="stylesheet" href="../css/jquery.modal.css" type="text/css" media="screen" />

<!-- Javascript -->
<script src="../js/modernizr.custom.js"></script>


<!-- Favicons -->
<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">

<style>
.eight.columns{
	background-color:  #000;
	height: 250px;
	line-height:250px;
	text-align:center;
}
.eight.columns span.v-center {
  display: inline-block;
  vertical-align: middle;
  line-height: normal;
}

.eight a{
	color: #FFF!important;
	display:block;
	background-color:rgba(0,0,0,.5);
	text-decoration:none!important;
}
.eight a:hover{
	color: #FFF!important;
	display:block;
	background-color:rgba(0,0,0,0)
}

.baltimore{
	background-image:url('../images/baltimore.jpg');
	background-size:cover;
	font-size:300%;
	font-weight: bold;
}


.health{
	background-image:url('../images/market2.jpg');
	background-size:cover;
	font-size:300%;
	font-weight: bold;
}

.csj{
	background-image:url('../images/protest.jpg');
	background-size:cover;
	font-size:300%;
	font-weight: bold;
	background-color:#FFF;
}

.studyabroad{
	background-image:url('../images/italy.png');
	background-size:cover;
	font-size:300%;
	font-weight: bold;
}
</style>
</head>

<body>

<div id="skip-content">
 <a href="#main-content">Skip to Main Content</a>
</div>

<div id="container-header-background">
 <!-- UMBC header -->
   <?php include("../includes/umbc-header.php"); ?>
 <!-- END umbc header -->
 <div id="site-menu-background">
  <!-- gold toolbar -->
   <?php include("../includes/gold-nav.php"); ?>
  <!-- END gold toolbar --> 
 </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">  <div  id="winter-heading">
    <a href="index">
    <h1 class="remove-bottom" id="summer-heading" style="background-color:#FFBD21">
    <img src="../images/specialprograms-header.png" style="width:100%">
    </h1>
    </a>
  </div>


 <div class="sixteen columns" style="padding-top:1em;">
  <!-- Page Title -->
        
    <!-- END Page Title -->       
	<div class="content">
		<div class="narrowchart">
      
     
     <!-- Start Content --> 
     
  <!-- Modal Baltimore -->
  
 


  <!-- Link to open the modal -->
  <div class="eight columns baltimore" style="margin:0px 3px 0px 0px">
  	<a href="baltimore" target="_blank">
      <span class="v-center">
        Discover Baltimore
      </span>
    </a>
  </div> 


  <!-- Link to open the modal -->
  <div class="eight columns csj" style="margin:0px">
  	<a href="csj" target="_blank">
      <span class="v-center">
      	Culture & Social Justice
      </span>
    </a>
  </div>
  
  <br clear="all"><br>
  
  
 

  <!-- Link to open the modal -->
  <div class="eight columns health" style="margin:0px 3px 0px 0px">
  	<a href="health" target="_blank">
      <span class="v-center">
      	Health & Social Inequalities
      </span>
    </a>
  </div>


  <!-- Link to open the modal -->
  <div class="eight columns studyabroad" style="margin:0px">
      <a href="studyabroad" target="_blank">
        <span class="v-center">
            Study Abroad
        </span>
      </a>
  </div>


<br clear="all"><br>


   <p>Special Programs feature current UMBC courses in the arts, humanities and social sciences that take you beyond the traditional classroom.</p> 
   
   <p>Most courses fulfill UMBC’s <a href="http://umbc.edu/summer/all-courses.php#gep">general education requirements</a>, and summer scholarships are available for qualified students.</p>

<br>
     <!-- END Content -->
     
	</div></div>
        
    <!-- /eleven columns -->
	</div>

  </div>

  <footer id="site-footer" class="clearfix">
	<?php include("../includes/footer.php"); ?>
    <?php include("../includes/social.php"); ?>
    <?php include("../includes/tracking.php"); ?>
  </footer>
</div>
<!-- container --> 

<script src="//code.jquery.com/jquery-1.12.0.js"></script> 
<script src="//code.jquery.com/jquery-migrate-1.3.0.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../js/jquery.modal.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/scripts.js"></script> 
<script src="../js/jquery.magnific-popup.js"></script>
<script src="../js/popup.js"></script>
  <script>
$( "#accordion" ).accordion({
      heightStyle: "content",
      active: false,
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