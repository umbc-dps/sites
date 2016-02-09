<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>All Courses | Summer Programs at UMBC</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Billing information for students looking to take UMBC's summer 2016 courses." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UMBCSummer">

<!-- Open Graph data -->
<meta property="og:title" content="Billing | Summer Programs at UMBC" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/summer/billing" />
<meta property="og:image" content="http://www.umbc.edu/summer/images/2.jpg" />
<meta property="og:description" content="Billing information for students looking to take UMBC's summer 2016 courses." />

<!-- CSS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/magnetic-popup.css" rel="stylesheet">

<!-- Javascript -->
<script src="js/modernizr.custom.js"></script>

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>

<div id="skip-content">
<a href="#main-content">Skip to Main Content</a>
</div>

<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main" style="background:#FFF">  <div  id="summer-heading">
    <a href="index">
    <h1 class="remove-bottom">
    <img src="images/summer-heading.png" style="width:100%">
    </h1>
    </a>
  </div>


  <div class="sixteen columns">
 <br>
 
<h2>Summer 2016 Courses</h2>
<p>Click on the "More Details" links to provide additional information related to your current search (which is shown in the "Search" box).</p>
<p>You can switch your current search criteria by clicking on the links to the right of any of the following options: Format &amp; Location, Dates &amp; Times, GEPs, or Prerequisites.</p>

<p style="font-size:125%; line-height:125%">
<strong>Search:</strong> <input type="text" id="search" placeholder="Type to search" height="30px">
</p>

<p style="font-size:125%; line-height:125%">
<strong>More Details: </strong><a href="#" class="instructors details">Show Instructors</a> 
<a href="#" class="instructors no-instructors details" style="display:none">Hide Instructors</a> |

<a href="#" class="time details">Show Times</a> 
<a href="#" class="time no-time details" style="display:none">Hide Times</a> |

<a href="#" class="sessions details">Show Sessions</a> 
<a href="#" class="sessions no-sessions details" style="display:none">Hide Sessions</a> |

<a href="#" class="prereq details">Show Prerequisites</a> 
<a href="#" class="prereq no-prereq details" style="display:none">Hide Prerequisites</a> |

<a href="#" class="gep details">Show GEPs</a> 
<a href="#" class="gep no-gep details" style="display:none">Hide GEPs</a>

<br>
<strong>Format &amp; Location:</strong>
<a href="#" class="category">Hybrid</a>
<a href="#" class="category">Online</a>
<a href="#" class="category">Shady Grove</a>
<a href="#" class="category last">Main Campus</a>

<br>
<strong>Dates &amp; Times: </strong>
<a href="#" class="category">Morning</a> 
<a href="#" class="category">Afternoon</a> 
<a href="#" class="category">Evening</a> 
<a href="#" class="category">Session 1</a> 
<a href="#" class="category">Session 2</a> 
<a href="#" class="category last">Sessions 1 and 2</a>

<br>

<span class="geps">
<strong>GEPs:</strong> 
<a href="#" class="category">Arts and Humanities</a> 
<a href="#" class="category">Culture</a> 
<a href="#" class="category">Language</a> 
<a href="#" class="category">Math</a>
<a href="#" class="category">Science (S)</a> 
<a href="#" class="category last">Social Science (SS)</a> 
</span>

<br>

<strong>Prerequisites:</strong> 
<a href="#" class="category">Has Prerequisite</a> 
<a href="#" class="category last">No Prerequisite</a> 

</p>

<?php include("includes/courses.php"); ?>

  </div>
<br clear="all"><br>
  <footer id="site-footer" class="clearfix">
    <?php include("includes/footer.php"); ?>
    <?php include("includes/tracking.php"); ?>
  </footer>
</div>
<!-- container --> 

<script src="//code.jquery.com/jquery-1.12.0.js"></script> 
<script src="//code.jquery.com/jquery-migrate-1.3.0.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/scripts.js"></script> 
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/popup.js"></script>  
  
<script>
var $rows = $('#table tr:not(:first)');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
	ga('send', 'event',  'search', 'search', val);

    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});

$(function(){
    $('.category').live('click', function() {
        $("#search").val($(this).html());
				$("#search").trigger(e);
				
    });
});


var e = jQuery.Event("keyup");
e.which = 13; // # Some key code value


/*
$( "tr:contains('AFST')" ).css( "background-color", "#FCECCF" );
*/

$('td:nth-child(3)').hide();
$('td:nth-child(5)').hide();
$('td:nth-child(6)').hide();
$('td:nth-child(7)').hide();
$('td:nth-child(8)').hide();
$('td:nth-child(12)').hide();
$('td:nth-child(13)').hide();
$('td:nth-child(14)').hide();
$('td:nth-child(15)').hide();
$('td:nth-child(16)').hide();
$('td:nth-child(17)').hide();
$('td:nth-child(18)').hide();

$( '.instructors' ).live( 'click', function() {
  $('td:nth-child(15)').show();
  $('a.instructors').toggle();
});

$( '.no-instructors' ).live( 'click', function() {
  $('td:nth-child(15)').hide();
  
});

$( '.time' ).live( 'click', function() {
  $('td:nth-child(12)').show();
  $('td:nth-child(13)').show();
  $('a.time').toggle();
});

$( '.no-time' ).live( 'click', function() {
  $('td:nth-child(12)').hide();
  $('td:nth-child(13)').hide();
});

$( '.sessions' ).live( 'click', function() {
  $('td:nth-child(5)').show();
  $('td:nth-child(6)').show();
  $('a.sessions').toggle();
});

$( '.no-sessions' ).live( 'click', function() {
  $('td:nth-child(5)').hide();
  $('td:nth-child(6)').hide();
});

$( '.gep' ).live( 'click', function() {
  $('td:nth-child(7)').show();
  $('td:nth-child(8)').show();
  $('a.gep').toggle();
});

$( '.no-gep' ).live( 'click', function() {
  $('td:nth-child(7)').hide();
  $('td:nth-child(8)').hide();
});

$( '.prereq' ).live( 'click', function() {
  $('td:nth-child(16)').show();
  $('a.prereq').toggle();
});

$( '.no-prereq' ).live( 'click', function() {
  $('td:nth-child(16)').hide();
});

$('a.category').not('a.last').after( ' | ' );

    var hash = window.location.hash.substring(1);
	$( document ).ready(function() {
        $("#search").val(hash);
		$("#search").trigger(e);
		ga('send', 'event',  'search', 'hash', hash);
	});
	
	$( document ).ready(function() {
        if (hash == 'prereq') {
			$('td:nth-child(16)').show();
  			$('a.prereq').toggle();
			$("#search").val('Has Prerequisite');
			$("#search").trigger(e);
	}});
	
	$( document ).ready(function() {
        if (hash == 'gep') {
			$('td:nth-child(7)').show();
			$('td:nth-child(8)').show();
			$('a.gep').toggle();
			$("#search").val('Has GEP');
			$("#search").trigger(e);
	}});
	
	$('.course-link').each(function() {
	var courseURL = $(this).text();
	var title = $(this).closest('td').siblings(':nth-child(3)').text();
	var courseFullURL = 'https://highpoint-prd.ps.umbc.edu/app/catalog/classsection/UMBC1/2166/' + courseURL;
	$(this).attr("href", courseFullURL);
	$(this).text(title);
	$(this).attr("target", "_blank");
});

$('.details').click(function() {
	var detailsText = $(this).text();
	ga('send', 'event',  'search', 'details', detailsText);
});

</script>

<!--
	$('.number').each(function() {
	var courseURL = $(this).text();
	var courseFullURL = 'https://highpoint-prd.ps.umbc.edu/app/catalog/classsection/UMBC1/2166/' + courseURL;

	$('a.course-link').each(function(){
	$(this).attr("href", courseFullURL);
});

});
-->

</body>
</html>