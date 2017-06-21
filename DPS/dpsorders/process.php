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
            $Order = trim($_POST['Order']); 
			$OrderType = trim($_POST['OrderType']); 
			$PcardOrderPlaced = trim($_POST['PcardOrderPlaced']); 
			$PcardOrderConfirmed = trim($_POST['PcardOrderConfirmed']); 
			$Email = trim($_POST['Email']); 
			$FirstName = trim($_POST['FirstName']); 
			$LastName = trim($_POST['LastName']); 
			$ContactDepartment = trim($_POST['ContactDepartment']); 
			$ContactExtension = trim($_POST['ContactExtension']); 
			$DeliveryLocation = trim($_POST['DeliveryLocation']); 
			$AuthorizedBy = trim($_POST['AuthorizedBy']); 
			$VendorName = trim($_POST['VendorName']); 
			$VendorURL = trim($_POST['VendorURL']); 
			$VendorTaxID = trim($_POST['VendorTaxID']); 
			$VendorContactName = trim($_POST['VendorContactName']); 
			$VendorPhoneNumber = trim($_POST['VendorPhoneNumber']); 
			$month = trim($_POST['month']); 
			$day = trim($_POST['day']); 
			$year = trim($_POST['year']); 
			$ChartString = trim($_POST['ChartString']); 
			$Account = trim($_POST['Account']); 
			$ItemNumber = trim($_POST['ItemNumber']);
			//$i=1;
			//while ($i <= $ItemNumber) {
		//$Item  = $Item . trim($_POST['Item' & $i]);
			//$i++;}
			$Comments = trim($_POST['Comments']); 
			
			// FORMAT "DATE SUBMITTED" FOR EMAIL
			$HowSoonIsNow = getdate();
			$dateSubmitted = $HowSoonIsNow[mon].'/'.$HowSoonIsNow[mday].'/'.$HowSoonIsNow[year]; 

// START BUILDING HTML TABLE FOR EMAIL
			$theTable = "<html><body>";
			$theTable .= "<table style=". '"width:100%;font-family:Arial, Helvetica, sans-serif;border-collapse: collapse;"' ."><tr><th " .'align="left"'. "></th><td></td></tr>";
			$theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Order: </th><td>$Order</td></tr>";
			$theTable .= "<tr><th ". 'align="left"'. ">PCARD or Requisition: </th><td>$OrderType</td></tr>";
			$theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. "> If this is a Pcard order, has the order been placed?</th><td>$PcardOrderPlaced</td></tr>";
			$theTable .= "<tr><th ". 'align="left"'. ">If this is a Pcard order, have you confirmed that vendor accepts PCards?: </th><td>$PcardOrderConfirmed</td></tr>";
			$theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Email: </th><td>$Email</td></tr>";
			$theTable .= "<tr><th ". 'align="left"'. ">First Name: </th><td>$FirstName</td></tr>";
			$theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Last Name: </th><td>$LastName</td></tr>";
			$theTable .= "<tr><th ". 'align="left"'. ">Contat Department: </th><td>$ContactDepartment</td></tr>";
			$theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Contact Extension: </th><td>$ContactExtension</td></tr>";
			$theTable .= "<tr><th ". 'align="left"'. ">Delivery Location: </th><td>$DeliveryLocation</td></tr>";
            $theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. ">AuthorizedBy: </th><td>$AuthorizedBy</td></tr>";
			$theTable .= "<tr><th ". 'align="left"'. ">Vendor Name: </th><td>$VendorName</td></tr>";
			$theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Vendor URL: </th><td>$VendorURL</td></tr>";
			$theTable .= "<tr><th ". 'align="left"'. ">Vendor Tax ID (Requisition ONLY): </th><td>$VendorTaxID</td></tr>";
			$theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Vendor Contact Name: </th><td>$VendorContactName</td></tr>";
			$theTable .= "<tr><th ". 'align="left"'. ">Vendor Phone Number: </th><td>$VendorPhoneNumber</td></tr>";
			$theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Date Needed: </th><td>$month $day, $year </td></tr>";
			$theTable .= "<tr><th ". 'align="left"'. ">Chart String:</th><td>$ChartString</td></tr>";
			$theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Account: </th><td>$Account</td></tr>";
			$i=1;
			while ($i <= $ItemNumber) {
			$Item = trim($_POST['Item' . $i]);
			$theTable .= "<tr><th ". 'align="left"'. ">Items: </th><td>$Item</td></tr>";
			$i++;}
			
			$theTable .= "<tr style=". '"background:#f5f5f5;"' . "><th " .'align="left"'. ">Date Submitted: </th><td>$dateSubmitted</td></tr>";
			$theTable .= "<tr><th ". 'align="left"'. ">Comments: </th><td>$Comments</td></tr>";
 
			// close the table.
			$theTable .=  "</table></body></html>";
			 //MAIL IT
						$to = "knott@umbc.edu, $Email";
						$subject = 'DPS Orders Form Submission';
						$headers = "From: knott@umbc.edu" . $clientEmail . "\r\n";
						// ARE WE CCing ANYONE?
						if (isset($othermail) || $othermail != '' ) {
						   $headers .= 'Cc: ' . $othermail . "\r\n";
							}
						$headers .= "Reply-To: ". $email . "\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=utf-8\r\n";
            		if (mail($to, $subject, $theTable, $headers)) {
              			echo '<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.umbc.edu/dps/dpsorders/thankyou.php">';
					}  //mail('doran@umbc.edu', $subject, $theTable, $headers);
            } else { 
              echo '<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.umbc.edu/dps/dpsorders/robot.php">';
            } // if ($resp->isSuccess()){
			 
			}  // post
			} // !isset($_POST['g-recaptcha-response'])
?> 