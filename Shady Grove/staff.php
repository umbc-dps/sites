<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>Meet the Staff | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="UMBC Shady Grove staff." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Meet the Staff | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/meetthestaff" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/sg.jpg" />
<meta property="og:description" content="UMBC Shady Grove staff." />


<link href="css/styles-ug.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
<script src="js/modernizr.custom.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


<style type="text/css">
@media screen and (min-width:800px) {
#full-page{
	position: relative;
}
#full-page::after {
  content: "";
  background: url(images/bg/<?php echo $selectedBg; ?>) no-repeat;
  background-size:cover;
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
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
table{ width: 100% }
td p{width:100%}

div.accordionheader{background-color: #ffdda0;}
.accordionheader {color:#000; margin-top:8px; text-align: left;}
.accordionbody
.accordionbody ul li {list-style:square}
.accordionheader:hover{cursor:pointer}

i { 
	float:right;
	padding:5px;
    -webkit-transition:all 300ms ease-in 0s;
    -moz-transition: all 300ms ease-in 0s;
    -o-transition: all 300ms ease-in 0s;
	transition: all 300ms ease-in 0s;}

.ui-state-active i {
    color: #000;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}
.accordionheader h4{font-size:12pt; padding:5px; line-height:14pt}

@media screen and (max-width:479px) {
	.accordionbody img{width:90%; display:block; text-align:center; align:center; padding:5%}
	.accordionbody p{width:100%; display:block}
	.accordionbody ul{margin-left: 5px!important}
}
</style>



</head>
<body>
<div id="full-page">
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php //include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading">
<a href="index">
<h1 class="remove-bottom">Meet the Staff</h1>
</a>
  </div>
    <div class="twelve columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    <div class="twelve columns">
      <div class="narrowchart">
        <div id="accordion">
    <!-- Start Content -->   
      <div class="content">
<div class="accordionheader">
            <h4><a id="cox" href="#cox"></a>Tim Cox<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
            <img src="images/faculty/TimCox.jpg" align="left" style="padding-right: 15px" /><p><strong>Assistant Director of Advising and Student Success</strong><br>
              <a href="mailto:thcox@umbc.edu">thcox@umbc.edu</a> | 301-738-6281<br>
              <strong>Office:</strong> III-4155</strong></p>
              
            <p>Tim is your primary resource for: 
            <ul style="margin-left:210px">
              <li>Pre-Transfer Advising</li>
              <li>Transfer Credit Reports</li>
              <li>Degree Audits</li>
            </ul>
            </p><br clear="all">
          </div>

<div class="accordionheader">
            <h4><a id="jones" href="#jones"></a>Rickeysha Jones<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
            <img src="images/faculty/RickeyshaJones.jpg" align="left" style="padding-right: 15px"/>
            <p><strong>Program Coordinator (Graduate)</strong><br>
              <a href="mailto:rcjones@umbc.edu">rcjones@umbc.edu</a> | 301-738-6285<br>
              <strong>Office:</strong> III-4121</p>
            <p>Rickeysha is your primary resource for:<br>
            <ul style="margin-left:210px">
              <li>Graduate Student Services</li>
            </ul>
            </p><br clear="all">
        </div>
                        
<div class="accordionheader">
            <h4><a id="moyer" href="#moyer"></a>Chelsea Moyer<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
            <img src="images/faculty/ChelseaMoyer.gif" align="left" style="padding-right:15px" />
            <p>
            	<strong>Program Coordinator (Undergraduate)</strong><br>
                <a href="mailto:csmoyer@umbc.edu"> csmoyer@umbc.edu</a> | 301-738-6184<br>
				<strong>Office:</strong> III-4157</strong>
            </p>
            <p>Chelsea is your primary resource for:<br>
            <ul style="margin-left:210px">
              <li>Undergraduate Admissions</li>
              <li>The Common Application</li>
              <li> Undergraduate Orientation</li>
              <li>Transfer Student Alliance (TSA)</li>
            </ul>
            </p>
            <br clear="all">
         </div>
         
<div class="accordionheader">
            <h4><a id="scheidegger" href="#scheidegger"></a>Caitlin Scheidegger<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
            <img src="images/faculty/CaitlinScheidegger.jpg" align="left" style="padding-right:15px" />
            <p>
            	<strong>Academic Program Specialist</strong><br>
                <a href="mailto:csheid1@umbc.edu"> csheid1@umbc.edu</a> | 301-738-6081<br>
				<strong>Office:</strong> III-4159</strong>
            </p>
            <p>Caitlin is your primary resource for:<br>
            <ul style="margin-left:210px">
              <li>Student Communications</li>
              <li>Form Processing</li>
              <li>General Requests and Questions</li>
            </ul>
            </p>
            <br clear="all">
         </div>
            
<div class="accordionheader">
            <h4><a id="waters" href="#waters"></a>Ashley Waters<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
            <img src="images/faculty/AshleyWaters.gif" align="left" style="padding-right: 15px"/>
            <p><strong>Associate Director</strong><br>
              <a href="mailto:awaters@umbc.edu">awaters@umbc.edu</a> | 301-738-6175<br>
              <strong>Office:</strong> III-4135</strong></p>
            <p>Ashley is your primary resource for: 
            <ul style="margin-left:210px">
              <li>Student Disability Services/Accommodations</li>
              <li>Student Activities</li>
              <li>Service-Learning</li>
              <li> Faculty Services</li>
              <li>Facilities and Operations</li>
            </ul></p><br clear="all">
            </div>
            
<br clear="all">
        
    </div>
    </div> 
    </div> 
    </div> 
    </div> 
	<!-- END Content -->


    <!-- /eleven columns -->
    <div class="four columns omega"> 
    <!-- SIDEBAR --> 
      <?php include("includes/ss-sidebar.php"); ?>
    <!-- /five columns  --> 


    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("includes/footer-ug.php"); ?> 
  <?php include("includes/tracking.php"); ?> 
  </footer>
	</div>  
    

  
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 
<script src="js/scripts.js"></script> 

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