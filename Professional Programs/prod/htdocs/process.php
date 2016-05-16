<?php
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH'; 
$lang = 'en';
// HERE'S A FUNCTION TO SANITIZE STRINGS, PASS EACH VARIALE IN BEFORE INSERTING INTO DB .SOMETHING LIKE: if (isset($_POST['f'])) $f = sanitizeString($_POST['f']);
function sanitizeString($var)
  {
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
  }
 
 //TEST TO SEE IF THE CAPTCHA WAS SELECTED
 if (!isset($_POST['g-recaptcha-response'])) {
      print '<h1>'."Something is not right here. Please try again.".'</h1>'; 
} else {
    /* Continue. */
	if ($_POST) {
		$recaptcha = new \ReCaptcha\ReCaptcha($secret);
    	$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
		if ($resp->isSuccess()){
			$firstname = trim($_POST['firstname']); 
			$lastname = trim($_POST['lastname']); 
			$email = trim($_POST['email']); 
			$address = trim($_POST['address']); 
			$address2 = trim($_POST['address2']); 
			$city = trim($_POST['city']); 
			$state = trim($_POST['state']); 
			$zip = trim($_POST['zip']); 
			$startdate = trim($_POST['startdate']); 
			$howyouheard = trim($_POST['howyouheard']); 
			$questions = trim($_POST['questions']); 
			$program = trim($_POST['program']); 
			$programtitle = trim($_POST['programtitle']);
			$pc = trim($_POST['pc']); 
			$cc = trim($_POST['cc']); 
			$url = trim($_POST['url']); 
			$pctitle = trim($_POST['pctitle']); 
			$infosession = trim($_POST['infosession']); 
			$programguide = trim($_POST['programguide']);
			$planningform = trim($_POST['planningform']); 
			$body = trim($_POST['body']);  
			// FORMAT "DATE SUBMITTED" FOR EMAIL
			$HowSoonIsNow = getdate();
			$dateSubmitted = $HowSoonIsNow[mon].'/'.$HowSoonIsNow[mday].'/'.$HowSoonIsNow[year];
			//FORMAT THE ADDRESS, IF PROVIDED 
			  $addy = "None given.";
			  if (isset($address)) {
				  $addy = $address."<br>";
				  if (isset($address2)){
					  $addy .=  $address2."<br>";
					  }
					$addy .= $city.", " .$state . ' ' . $zip;  
				  }
			  
// START BUILDING HTML TABLE FOR EMAIL TO STAFF
			$theTable = "<html><body>";
			$theTable .= "<table style=". '"width:100%;font-family:Arial, Helvetica, sans-serif;border-collapse: collapse;font-size:12pt"' .">";
			$theTable .= "<tr><th " .'align="left"'. ">Name: </th><td>$firstname $lastname</td></tr>";
			$theTable .= "<tr style=" . '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Date Submitted: </th><td>$dateSubmitted</td></tr>";
			$theTable .= "<tr><th " .'align="left"'. ">Email: </th><td>$email</td></tr>";
			$theTable .= "<tr style=" . '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Program: </th><td>$program</td></tr>";
			$theTable .= "<tr><th " .'align="left"'. ">Anticipated start date: </th><td>$startdate</td></tr>"; 
			$theTable .= "<tr style=" . '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Comments:</th><td>$questions</td></tr>"; 
			// close the table for staff.
			$theTable .=  "</table></body></html>";
			 //MAIL TO STAFF
						$to = $pc;
						$subject = "UMBC $programtitle Inquiry";
						$headers = "From: " . $email . "\r\n";
						// ARE WE CCing ANYONE?
						if (isset($cc) || $cc != '' ) {
						   $headers .= 'Cc: ' . $cc . "\r\n";
							}
						$headers .= "Reply-To: ". $email . "\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=utf-8\r\n";
						
            		if (mail($to, $subject, $theTable, $headers)) {
              			echo '<script>window.location.replace("thankyou.php");</script>';
					}  
			// START BUILDING HTML TABLE FOR EMAIL TO STUDENT
			$theTable1 = "<html><body>";
			$theTable1 .= "<table style=". '"width:100%;font-family:Arial, Helvetica, sans-serif;border-collapse: collapse;font-size:12pt"' .">";
			$theTable1 .= "<tr><td><p>Hello $firstname,</p></td></tr>";
			$theTable1 .= "<tr><td><p>Thank you for your interest in UMBC's $programtitle program.</p></td></tr>";
			if (!empty($body)) {$theTable1 .= "<tr><td><p>$body</p></td></tr>";}
			if (!empty($programguide)) {$theTable1 .= "<tr><td>We will address your inquiry shortly. In the meantime, here are some $programtitle resources to provide some general information:</td></tr>";} 
			if (empty($programguide)) {$theTable1 .= "<tr><td><p>We will address your inquiry shortly. Please also feel free to browse our website at www.umbc.edu/$url to learn more about our program offerings, curriculum, and experienced faculty.</p></td></tr>";}
			if (!empty($programguide)) {$theTable1 .= "<tr><td><ul>";}
			if (!empty($infosession)) {$theTable1 .= "<li><strong>Recent Virtual Information Session:</strong> {$infosession}</li>";}
			if (!empty($programguide)) {$theTable1 .= "<li><strong>Program Guide:</strong> $programguide</li>";}
			if (!empty($planningform)) {$theTable1 .= "<li><strong>Planning Form:</strong> $planningform</li>";}
			if (!empty($programguide)) {$theTable1 .= "</ul></td></tr>";}
			if (!empty($programguide)) {$theTable1 .= "<tr><td><p>Please also feel free to browse our website at www.umbc.edu/$url to learn more about our program offerings, curriculum, and experienced faculty.</p></td></tr>";}
			if (!empty($pctitle)) {$theTable1 .= "<tr><td><p>For additional information, please contact $pctitle, at {$pc}.</p></td></tr>";}
			$theTable1 .= "<tr><td>Best Regards,<br>UMBC $programtitle Programs<br>http://umbc.edu/$url</td></tr>"; 
			// close the table for student.
			$theTable1 .=  "</table></body></html>";
			 //MAIL TO STUDENT
			 			$base64contents1 = rtrim(chunk_split(base64_encode($theTable1)));
						$to1 = $email;
						$subject1 = "UMBC $programtitle Information";
						$headers1 = "From: " . $pc . "\r\n";
						// ARE WE CCing ANYONE?
						//if (isset($othermail) || $othermail != '' ) {
						   //$headers1 .= 'Cc: ' . $othermail . "\r\n";
							//}
						$headers1 .= "Reply-To: ". $pc . "\r\n";
						$headers1 .= "MIME-Version: 1.0\r\n";
						$headers1 .= "Content-Type: text/html; charset=utf-8\r\n";					
						$headers1 .= "Content-Transfer-Encoding: base64\r\n";
					
					mail($to1, $subject1, $base64contents1, $headers1);
					
					
            } else { 
              echo '<script>alert("Please complete the CAPTCHA."); window.location.replace("index.php");</script>';
            } // if ($resp->isSuccess()){
			 
			}  // post
			} // !isset($_POST['g-recaptcha-response'])
?> 