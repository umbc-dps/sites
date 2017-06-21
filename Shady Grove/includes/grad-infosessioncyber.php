<h4 style="font-weight:bold" align=center>Cybersecurity Graduate Programs <br>Information Session</h4>

<h5 style="font-weight:bold">When:</h5>

<p>Thursday, June 15, 6:00PM - 7:30PM</p>


<h5 style="font-weight:bold">Where:</h5>
		  <p>The Universities at Shady Grove<br>
Building III (Camille Kendall Academic Center) Room TBA<br>
<a href="https://www.google.com/maps?saddr&daddr=9630+Gudelsky+Drive,+Rockville,+MD+20850&btnG=Search">9636 Gudelsky Drive, Rockville, Maryland 20850</a></p>

<h5 style="font-weight:bold">Why UMBC:</h5>

<p>In a world where over a quarter million cybersecurity jobs currently remain unfilled, what are you waiting for? Learn how you can meet the demand for qualified and experienced cybersecurity professionals at UMBC’s upcoming Info Session.</p>
 
<p>Whether you’re changing careers or you’re a mid-level professional who needs a professional credential to transition into a management role, UMBC can help get you where you want to be. Join us for our upcoming Information Session to learn more. Meet with faculty and staff and gain valuable information on the program. This informal session will give you the opportunity to meet the people behind our program and determine which professional track is right for you based on your needs and career goals.</p>
 
<p>We offer a varity of professional credentials to meet your needs as well as your schedule. Our Cybersecurity programs include:</p>

<p><li><a href="http://www.umbc.edu/shadygrove/cyber/programmaster.php">Master’s of Professional Studies (M.P.S.) in Cybersecurity</a></li></p>
<p><li><a href="http://www.umbc.edu/shadygrove/cyber/programcert.php">One-year Graduate Certificate in Cybersecurity Operations</a></li></p>
<p><li><a href="http://www.umbc.edu/shadygrove/cyber/programcert.php">One-year Graduate Certificate in Cybersecurity Strategy & Policy</a></li></p>
<p><li><a href="http://www.umbc.edu/shadygrove/cyber/programbsmps.php">Accelerated BS/MPS Cybersecurity program</a></li></p>

<p>Conveniently offered in Rockville, MD, our Cybersecurity graduate programs are designed to meet the needs of busy working professionals and will allow you to pursue a professional credential on your own time. As one of only a handful of universities that has received dual-designation as an NSA/DHS Center of Academic Excellence for Information Assurance Education & Research, UMBC’s graduate programs in Cybersecurity provide highly applicable hands-on training that will empower you with the skills needed for success.</p>



<p>For a campus map, directions and parking information, <a href="http://shadygrove.umd.edu/about-usg/directions-transportation" target="_blank">please click here.</a>
</p>

<strong>Please note: For events noted as drop ins, you may drop in at your convenience during those events.</strong> If you have questions, please contact: Rickeysha Jones at <a href="tel:301-738-6285" value="+13017386285" target="_blank">301-738-6285</a>.</strong></p>

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