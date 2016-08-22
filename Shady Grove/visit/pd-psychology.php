<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Visit Us | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Opportunities for prospective Undergraduate and Graduate students to attend information sessions and meet the faculty." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@uatshadygrove">

<!-- Open Graph data -->
<meta property="og:title" content="Visit Us | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/visit/pd-pscyhology" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content="Opportunities for prospective Undergraduate and Graduate students to attend information sessions and meet the faculty." />


<link href="../css/styles-ug.css" rel="stylesheet">

<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
<script src="..js/modernizr.custom.js"></script>
<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">


<style type="text/css">
@media screen and (min-width:800px) {

html{

	position: relative;

	height:100%;

}

html::after {
  content: "";
  background: url(../images/bg/<?php echo $selectedBg; ?>) no-repeat;
  background-size:cover;
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: fixed;
  z-index: -1;  
  background-attachment:fixed;
}

}
.programs li{
	margin:0px;
	list-style-type:none!important;
	margin-left:0px!important;
	padding:6px;
	font-size:11pt!important;
	border-bottom:1px #CCC solid;
}
.programs li:hover{
	background-color:#F9B631;
	color: #000!important;
}
.programs a li{
	text-decoration:none!important;
}
.programs a{
	text-decoration:none!important;
}
#usgheading1 {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
	color:#FFF!important;
	position:absolute;
	margin-top:15px;
	padding-left:10px;
	line-height: 1.1em;
	background-color:transparent;
	z-index:2;
}

.alumni div { float: left; width: 31%; text-align: center; }

	@media 
	only screen and (max-width: 1023px),
	(min-device-width: 800px) and (max-device-width: 1023px)  {
	
.alumni div { display: block; width: 98%; height: 200px; padding-bottom:10px; text-align:center}
.alumni div:hover { background-size: cover; }
	}
	
.module {
  background: 
    linear-gradient(
      rgba(0, 0, 0, 0.6),
      rgba(0, 0, 0, 0.6)
    ),
    url('http://umbc.edu/isd/images/current/advising.jpg');
  background-size: cover;
  height: 200px;
  position: relative;
  float: left;
  margin: 1%;
}

.module:hover{
  background: 
    linear-gradient(
      rgba(0, 0, 0, 0),
      rgba(0, 0, 0, 0)
    ),
	url('http://umbc.edu/isd/images/current/advising.jpg');
}
	

.mid h4 {
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  color: white;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 2rem;
  transform: translate(-50%, -50%);
}
a.button{font-size:10pt}
.divider{border-right:1px solid #000; }
.seven{padding: 25px;}

	@media 
	only screen and (max-width: 1023px),
	(min-device-width: 800px) and (max-device-width: 1023px)  {
		.divider{
		border-bottom:1px solid #000; 
		border-top:none; 
		border-left: none;
		border-right:none
		}
		.seven{padding: 0px;}
	}

option[value*="History"], option[value*="Political Science"], option[value*="Social Work"], .history, .poli, .socialwork  {display:none}
aside h3 {
	color: #ce181e;
	background: #000;
	padding: .35em;
	font-size:1.75em;
}
/* ASIDE FORM */
form#ss-form {padding-left: 5%;}
input#ss-submit {width: 93%; height: 40px}
.ss-form-entry input, .ss-form-entry select { width: 93%; margin-bottom: 10px; height: 20px }
.ss-q-title{font-weight: bold}
.ss-required-asterisk{text-align:right; font-style:italic; padding-right: 15px}
ul.ss-choices input {width:auto; margin-bottom: 0px; height: auto}
ul.ss-choices li {list-style-type:none; margin-left: -25px}

/* ASIDE CAPTCHA FORM */
div#form {padding-left: 5%}
#form table, table#contact {width:195%!important}
#form td{padding-bottom:3px!important}
#form input[type="submit"] {width: 95%; height: 30px}
#form label{font-weight: bold; font-size:10pt}
#form input {width:auto; margin-bottom: 0px; height: auto}
#form select {height: 30px!important}
#form li {list-style-type:none; margin-left: -25px}
#form textarea {width:95%!important}
#contact td {display:block; width:100%!important}

table#contact2, table#contact2 td{ display: block; width:95%; text-align:center; padding-left: 5%}

/* BUTTON */
aside .btn, input.btn  {
  width: 95%;
  display: block;
  font-weight: bold;
  text-transform: uppercase;
  text-align:center;
  margin-top:5px;
}

.btn, input.btn {
  -webkit-border-radius: 9;
  -moz-border-radius: 9;
  border-radius: 9px;
  color: #000 !important;
  background: #FEB500 !important;
  padding: 5px 10px 5px 10px;
  text-decoration: none;
}
aside#four input.btn{
  font-size: 10pt !important;
  border: 0;
  text-shadow: none;
  -webkit-border-radius: 9;
  -moz-border-radius: 9;
  border-radius: 9px;
}

.btn:hover, input.btn:hover  {
  background: #F9E1A7 !important;
  text-decoration: none;
  color: #FFF;
}
	
</style>



</head>
<body>
<div id="full-page">
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("../includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php //include("../includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading">
<a href="../index">
<h1 class="remove-bottom">Visit Us</h1>
</a>
  </div>
    <div class="sixteen columns" style="padding-top:1em;">   
      <div class="content">
      
<!-- END Page Header -->

<div class="ten columns">
  
<!-- START Content -->
<h3><a href="index"><img src="images/USG_FA15_Psychology.png" alt="Meet Our Program Director!" style="width:100%"></a></h3>

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
  <footer id="site-footer" class="clearfix">
  <?php include("../includes/footer-ug.php"); ?> 
  <?php include("../includes/tracking.php"); ?> 
  </footer>
	</div>  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="../js/scripts.js"></script> 

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

<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
</script>
 
</body>
</html>