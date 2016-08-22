<?php

$hiianswer="a";
$hiirequiredurl="";
$hiierror="";
$hiifieldname="hii";

if(!empty($hiianswer)&&!empty($_POST)){$hiiinput=trim($_POST[$hiifieldname]);$hiiinput=strtolower($hiiinput);if(empty($hiiinput)){if(!empty($hiirequiredurl)){header("Location: $hiirequiredurl");}else{echo"<html><head><title>Human Intelligence Identification (Hii) Required</title></head><body>";echo"<h1 style='text-align:center'>Human Intelligence Identification Answer Required</h1>";echo"<p style='text-align:center'>Please <a href='http://www.umbc.edu/shadygrove/biotech'>Return to the Site</a><br /><br />and provide the required<br /><br /><b>Human Intelligence Identification Answer</b></p>";echo"</body></html>";}exit;}if($hiiinput!=$hiianswer){if(!empty($hiierror)){if($hiierror=="none"){exit;}else{header("Location: $hiierror");}}else{echo"<html><head><title>Human Intelligence Identification (Hii) Error</title></head><body>";echo"<h1 style='text-align:center'>Human Intelligence Identification Answer Error</h1>";echo"<p style='text-align:center'>Please <a href='".$_SERVER['PHP_SELF']."'>Return to the Form</a><br /><br />and provide the correct<br /><br /><b>Human Intelligence Identification Answer</b></p>";echo"</body></html>";}exit;}}?>

<?

// Configuration Settings
$SendFrom =    "Rickeysha Jones <rcjones@umbc.edu>";
$SendTo =      $_POST["email"];
$SendTo2 =      "rcjones@umbc.edu, jgilless@umbc.edu, scrosby@umbc.edu";
$SubjectLine = $_POST["program"];
$ThanksURL =   "../thankyou.php";
$Divider =     "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

// Build Message Body from Web Form Input
$MsgBody = @gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n$Divider\n";
foreach ($_POST as $Field=>$Value)
   $MsgBody .= "$Field: $Value\n";
$MsgBody .= "$Divider\n" . $_SERVER["HTTP_USER_AGENT"] . "\n";
$MsgBody = htmlspecialchars($MsgBody);  //make content safe

// Build Message Body from Web Form Input
$MsgBody2 = "Thank you for your interest in UMBC's Biotechnology programs.

We will address your inquiry shortly. In the meantime, please feel free to browse our website and learn more about our program offerings, curriculum, and experienced faculty.

Check out our most recent virtual information session: https://www.youtube.com/watch?v=ZMQH20Gj9ZU

Best Regards,
UMBC Biotechnology Graduate Programs
http://umbc.edu/shadygrove/biotech";

// Send E-Mail and Direct Browser to Confirmation Page
mail($SendTo, $SubjectLine, $MsgBody2, "From: Rickeysha Jones <rcjones@umbc.edu>");
mail($SendTo2, $SubjectLine, $MsgBody, "From: $SendFrom");
header("Location: $ThanksURL");

?>
<?php echo $SubjectLine ?>