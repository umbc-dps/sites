<?php include('../header.php'); ?>

<h2>Contact Us</h2>

<!---- Contact Form ----

?php 
if (isset($_POST["email"]) && $_POST["email"] != "") { 
  $from_email = "music_info@umbc.edu, professionals@umbc.edu";
  $from_email_full = "UMBC Division of Professional Studies <professionals@umbc.edu>";
  $to_email = htmlspecialchars($_POST["email"]);

  $email_subject = 'Protools Mobile Contact Form'; 

  $mail_header = "From: ".$from_email_full."\r\n"; 
  
  $message_body = "Name: ".htmlspecialchars($_POST["name"])."\r\n"; 
  $message_body .= "Email: ".htmlspecialchars($_POST["email"])."\r\n"; 
  $message_body .= "Address: ".htmlspecialchars($_POST["address"])."\r\n"; 
  $message_body .= "City: ".htmlspecialchars($_POST["city"])."\r\n"; 
  $message_body .= "State: ".htmlspecialchars($_POST["state"])."\r\n"; 
  $message_body .= "Zip: ".htmlspecialchars($_POST["zip"])."\r\n"; 
  $message_body .= "Reference: ".htmlspecialchars($_POST["howhear"])."\r\n"; 
  $message_body .= "Interest(s): ".htmlspecialchars($_POST["course1"])." ".htmlspecialchars($_POST["course2"])." ".htmlspecialchars($_POST["course3"])." ".htmlspecialchars($_POST["course4"])."\r\n"; 
  $message_body .= "Site: ".htmlspecialchars($_SERVER['REQUEST_URI'])."\r\n"; 
  $message_body .= "Comment: ".htmlspecialchars($_POST["comment"])."";

  if (mail($from_email, $email_subject, $message_body, $mail_header)) {
    $confirmation_subject = "Protools Mobile Contact Form";
    $confirmation_message = "We have received your submission. We thank you for your time and will get back to you as soon as possible.";
    if (mail($to_email, $confirmation_subject, $confirmation_message, $mail_header)) {
      echo "<div class='alert alert-success'>Your submission was successful! You should be receiving a confirmation email momentarily.</div>";
    } else {
      echo "<div class='alert alert-error'>Oops! Something must have gone wrong, please try again.</div>";
    }
  } else {
      echo "<div class='alert alert-success'>Oops! Something must have gone wrong, please try again.</div>";
  }
} 
?>

<form action="" method="post" name="contact-form">
	<input type="text" placeholder="*Your Name" name="name">
	<input type="text" placeholder="*Your Email" name="email">
    <textarea name="comment" placeholder="Questions/Comments" rows="4"></textarea>
    <p>* required field</p>
	<button type="submit" class="btn" name="submit">Submit</button>
</form>

<div class="alert error-box"></div>
<div class="alert success-box"></div>
------------------------>
<h3>For more information on the program, please contact:</h3>

<p>UMBC Division of Professional Studies<br/>
<i class="icon-envelope"></i><a href="mailto:professionals@umbc.edu" onClick="ga('send','event','email','inquiry','professionals@umbc.edu');">professionals@umbc.edu</a></p>

<?php include('../footer.php'); ?>