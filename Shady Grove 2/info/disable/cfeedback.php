<?php

$hiianswer="a";
$hiirequiredurl="";
$hiierror="";
$hiifieldname="hii";

if(!empty($hiianswer)&&!empty($_POST)){$hiiinput=trim($_POST[$hiifieldname]);$hiiinput=strtolower($hiiinput);if(empty($hiiinput)){if(!empty($hiirequiredurl)){header("Location: $hiirequiredurl");}else{echo"<html><head><title>Human Intelligence Identification (Hii) Required</title></head><body>";echo"<h1 style='text-align:center'>Human Intelligence Identification Answer Required</h1>";echo"<p style='text-align:center'>Please <a href='http://www.umbc.edu/cyber/'>Return to the Form</a><br /><br />and provide the required<br /><br /><b>Human Intelligence Identification Answer</b></p>";echo"</body></html>";}exit;}if($hiiinput!=$hiianswer){if(!empty($hiierror)){if($hiierror=="none"){exit;}else{header("Location: $hiierror");}}else{echo"<html><head><title>Human Intelligence Identification (Hii) Error</title></head><body>";echo"<h1 style='text-align:center'>Human Intelligence Identification Answer Error</h1>";echo"<p style='text-align:center'>Please <a href='".$_SERVER['PHP_SELF']."'>Return to the Form</a><br /><br />and provide the correct<br /><br /><b>Human Intelligence Identification Answer</b></p>";echo"</body></html>";}exit;}}?>

<?

// Configuration Settings
$SendFrom =    "Shady Grove Contact Us Request <shadygrove@umbc.edu>";
$SendTo =      $_POST["E-Mail"];
$SendTo2 =      "scrosby@umbc.edu, awaters@umbc.edu, csmoyer@umbc.edu, jgilless@umbc.edu";
$SubjectLine = $_POST["Program"];
$ThanksURL =   "http://www.umbc.edu/shadygrove";
$Divider =     "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

// Build Message Body from Web Form Input
$MsgBody = @gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n$Divider\n";
foreach ($_POST as $Field=>$Value)
   $MsgBody .= "$Field: $Value\n";
$MsgBody .= "$Divider\n" . $_SERVER["HTTP_USER_AGENT"] . "\n";
$MsgBody = htmlspecialchars($MsgBody);  //make content safe

// Build Message Body from Web Form Input
$MsgBody2 = "Thank you for your interest in UMBC at The Universities at Shady Grove.  Someone will respond to your inquiry shortly.";

// Send E-Mail and Direct Browser to Confirmation Page
mail($SendTo, $SubjectLine, $MsgBody2, "From: Shady Grove Contact Us Request <shadygrove@umbc.edu>");
mail($SendTo2, $SubjectLine, $MsgBody, "From: $SendFrom");
mail($SendTo3, $SubjectLine, $MsgBody, "From: $SendFrom");
mail($SendTo3, $SubjectLine, $MsgBody, "From: $SendFrom");
header("Location: $ThanksURL");



?>
<?php echo $SubjectLine ?>