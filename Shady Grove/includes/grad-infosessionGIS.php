<h4 style="font-weight:bold" align=center>GIS Graduate Programs <br>Information Session</h4>

<h5 style="font-weight:bold">When:</h5>

<p>Thursday, June 15, 6:00PM - 7:30PM</p>


<h5 style="font-weight:bold">Where:</h5>
		  <p>The Universities at Shady Grove<br>
Building III (Camille Kendall Academic Center) Room TBA<br>
<a href="https://www.google.com/maps?saddr&daddr=9630+Gudelsky+Drive,+Rockville,+MD+20850&btnG=Search">9636 Gudelsky Drive, Rockville, Maryland 20850</a></p>

<h5 style="font-weight:bold">Why UMBC:</h5>

<p>If you’re trying to decide whether UMBC’s graduate programs in Geographic Information Systems is right for you, join us for an informative Information Session to learn more. You’ll have the opportunity to meet with faculty and staff, explore our Master's and Certificate tracks, and gain valuable information on the program.</p>
 
<p>Whether you are just beginning your career or want to move into a management role, our highly applicable program will equip you with the skills you need for success. Our unique program focuses on the computer science and information systems aspects of GIS, which provides advanced training for professionals who want to work in the geospatial technology industry. You’ll learn foundational GIS principles from industry experts while gaining the technical, leadership, and managerial skills that employers are looking for.</p>
 
<p> 
The GIS program at UMBC provides hands-on experience with database management tools and techniques, analytical assessment, and application development to provide a well-rounded base of knowledge that is highly applicable to fields such as public health, urban planning, landscape architecture, environmental science, archeology, civil engineering, and more. </p>

<p>Conveniently offered in Rockville, MD, our GIS Master’s and Certificate programs are ideal for busy working professionals because they allow you to complete your graduate credential on your own time. Join our upcoming Info Session to find out how a professional degree in GIS can help you achieve the career of your dreams.</p>

<p>For a campus map, directions and parking information, <a href="http://shadygrove.umd.edu/about-usg/directions-transportation" target="_blank">please click here.</a>
</p>

<strong>Please note: For events noted as drop ins, you may drop in at your convenience during those events.</strong><br> If you have questions, please contact: Rickeysha Jones at <a href="tel:301-738-6285" value="+13017386285" target="_blank">301-738-6285</a>.</strong></p>

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