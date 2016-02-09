<?

// Configuration Settings
$SendFrom =    "Information Session Request <shadygrove@umbc.edu>";
$SendTo =      $_POST["E-Mail"];
$SendTo2 =      "csmoyer@umbc.edu, awaters@umbc.edu, sgga@umbc.edu";
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
$MsgBody2 = "Thank you for registering for the UMBC-Shady Grove Undergraduate Program Information Session.

A detailed email with event information will be sent to you a day prior to the scheduled event.  Please contact Program Coordinator, Chelsea Moyer, at 301-738-6184 or csmoyer@umbc.edu with any questions in the meantime.  We look forward to meeting you soon!";

// Send E-Mail and Direct Browser to Confirmation Page
mail($SendTo, $SubjectLine, $MsgBody2, "From: Information Session Reservation Request <shadygrove@umbc.edu>");
mail($SendTo2, $SubjectLine, $MsgBody, "From: $SendFrom");
header("Location: $ThanksURL");



?>
<?php echo $SubjectLine ?>