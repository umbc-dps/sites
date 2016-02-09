<?

// Configuration Settings
$SendFrom =    $_POST["E-Mail"];
$SendTo =      $_POST["E-Mail"];
$SendTo2 =      "dmurr@umbc.edu";
$SubjectLine = $_POST["Order"];
$ThanksURL =   "http://www.umbc.edu/dps";
$Divider =     "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~";

// Build Message Body from Web Form Input
$MsgBody = @gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n$Divider\n";
foreach ($_POST as $Field=>$Value)
   $MsgBody .= "$Field: $Value\n";
$MsgBody .= "$Divider\n" . $_SERVER["HTTP_USER_AGENT"] . "\n";
$MsgBody = htmlspecialchars($MsgBody);  //make content safe

// Build Message Body from Web Form Input
$MsgBody2 = @gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "\n$Divider\n";
foreach ($_POST as $Field=>$Value)
   $MsgBody2 .= "$Field: $Value\n";
$MsgBody2 .= "$Divider\n" . $_SERVER["HTTP_USER_AGENT"] . "\n";
$MsgBody2 = htmlspecialchars($MsgBody);  //make content safe

// Send E-Mail and Direct Browser to Confirmation Page
mail($SendTo, $SubjectLine, $MsgBody2, "From: DPS Orders Request <dmurr@umbc.edu>");
mail($SendTo2, $SubjectLine, $MsgBody, "From: $SendFrom");
header("Location: $ThanksURL");



?>
<?php echo $SubjectLine ?>