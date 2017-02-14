<aside class="six columns add-bottom" id="one">
<h3 style="color:#fff;">Register</h3>
<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
if(!isset($_GET['tfa_next'])) {
$qs = ' ';
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']));
echo file_get_contents('https://umbc.secure.force.com/form?formID=217732'.$qs);
} else {
echo file_get_contents('http://app.formassembly.com/rest'.$_GET['tfa_next'],false,$context);
}
?><br>
<br>

</aside>

<aside class="six columns">
<a href="schedule" class="btn2">Schedule</a>
</aside>

<aside class="six columns add-bottom">
<a href="http://www.shadygrove.umd.edu/about-usg/directions-transportation" class="btn2" target="_blank">Directions/Parking</a>
</aside>