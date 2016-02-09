<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UMBC Department of Music : Avid Pro Tools Certification Trainin</title>
    <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">

<?php 
  $home_directory = "isd/mobile";
?>

    <link href="/<?php echo $home_directory; ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/<?php echo $home_directory; ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="/<?php echo $home_directory; ?>/assets/js/bootstrap.js"></script>
  	<script src="/<?php echo $home_directory; ?>/assets/custom-scripting.js"></script>
  	<script src="/<?php echo $home_directory; ?>/assets/jquery.cycle.all.latest.js"></script>
  	<script type="text/javascript">
      $(function() {
        $('.slideshow').after('<div id="slide-nav" class="slide-nav">').cycle({
            fx:     'scrollHorz',
            speed: 400,
            timeout: 6000,
            pager:  '#slide-nav',
            prev: '#prev',
            next: '#next',
            pagerAnchorBuilder: function(index,el) {
              return '<a href="#">&#8226;</a>';
            }
            //after: function() { if (window.console) console.log(this.src); }
        });
      });

    </script>

<script type="text/javascript" src="/<?php echo $home_directory; ?>/assets/js/validate.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('.collapse').collapse({
      toggle: false
  });
 });
</script>

	<link rel="stylesheet" href="/<?php echo $home_directory; ?>/assets/style.css" />
    <!--<link rel="shortcut icon" href="/<?php echo $home_directory; ?>/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">-->
    <script>
      (function() {
        var cx = '000309712321416863724:dcsjkvxsgoo';
        var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//www.google.com/cse/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
      })();
    </script>

  </head>

  <body>
    <div class="wrap">
      <a class="top" name="top"></a>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="header-top">
            <!--<a class="btn btn-navbar btn-menu" data-toggle="collapse" data-target=".nav-collapse"></a>-->
            <a id="mobile-site-menu-expander" href="#" class="first-child last-child" data-toggle="collapse" data-target=".nav-collapse">
              <span class="mobile-site-menu-expander-bar first-child"></span>
              <span class="mobile-site-menu-expander-bar"></span>
              <span class="mobile-site-menu-expander-bar last-child"></span>
            </a>
            <a class="brand" href="/<?php echo $home_directory; ?>">UMBC</a>
            <form id="cse-search-box" action="cse-results.php">
              <input type="hidden" name="cx" value="000309712321416863724:dcsjkvxsgoo" />
              <input type="hidden" name="ie" value="UTF-8" />
              <input id="cse-box" type="text" placeholder="Search" name="q" size="31" />
              <input id="cse-submit" type="submit" name="sa" value="Search" />
            </form>
          </div>
        </div>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="http://www.umbc.edu/music/programs/protools/mobile">Home</a></li>
              <li><a href="../../documents/ProTools_Summer2015_Registration.pdf" target="_blank">Register</a></li>
              <li><a href="http://www.umbc.edu/music/programs/protools/mobile/courses">Courses & Cost</a></li>
              <li><a href="http://www.umbc.edu/music/programs/protools/mobile/instructor">Instructor</a></li>
              <li><a href="http://www.umbc.edu/music/programs/protools/mobile/contact">Contact Us</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div><!--/navbar-->

<!-- main -->
<div class="main">
  <!-- content -->
  <div class="content">

    
