<h3>UMBC Engineering Management & Systems Engineering Drop-In Session</h3>

<p>Drop in and chat with the Program Director, Dr. Thomas Moore! The sessions will take place in the UMBC ITE building, Room 218. If you have any questions, please email Kim Edmonds: <a href="mailto:kedmonds@umbc.edu">kedmonds@umbc.edu</a>.</p>

<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
if(!isset($_GET['tfa_next'])) {
$qs = ' ';
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']));
echo file_get_contents('https://umbc.secure.force.com/form?formID=217747'.$qs);
} else {
echo file_get_contents('http://app.formassembly.com/rest'.$_GET['tfa_next'],false,$context);
}
?>