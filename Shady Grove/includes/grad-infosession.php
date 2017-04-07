<h3> Shady Grove Graduate Information Session Registration</h3>

<p>Visit us to learn about our Master's and Graduate Certificate programs offered in Rockville, MD. Receive information on admissions, curriculum, job outlook, and meet faculty and staff. <strong>For events noted as drop ins, please drop in at your convenience during those events.</strong> If you have questions, please contact: Rickeysha Jones at <a href="tel:301-738-6285" value="+13017386285" target="_blank">301-738-6285</a>.</strong></p>

<h4>Dates</h4>
<ul>
<li class="io"><strong>I/O Psych Information Session</strong> | Tuesday, January 24, 2017 6:00PM - 7:30PM</li>
<li class="gis"><strong>GIS  Information Session</strong> | Thursday, June 15, 6:00PM - 7:30PM</span></li>
<li class="cyber"><strong>Cybersecurity Information Session</strong> | Thursday, June 15, 6:00PM - 7:30PM</li>
</ul>

<h4>Location</h4>
<p>
The Universities at Shady Grove<br>
<span class="cyber">Room TBA<br></span>
<span class="gis">Room TBA<br></span>
<span class="io">Building III (Camille Kendall Academic Center) Room 3241<br></span>
<a href="https://www.google.com/maps?saddr&daddr=9630+Gudelsky+Drive,+Rockville,+MD+20850&btnG=Search">9636 Gudelsky Drive, Rockville, Maryland 20850</a></p>

<p>For a campus map, directions and parking information, visit: <a href="http://shadygrove.umd.edu/about-usg/directions-transportation" target="_blank">http://shadygrove.umd.edu/about-usg/directions-transportation</a>
</p>

<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
if(!isset($_GET['tfa_next'])) {
$qs = ' ';
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']));
echo file_get_contents('https://umbc.secure.force.com/form?formID=217746'.$qs);
} else {
echo file_get_contents('http://app.formassembly.com/rest'.$_GET['tfa_next'],false,$context);
}
?>