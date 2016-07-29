<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en';
?>

<!DOCTYPE html>
<html>
<head>

<style>
form{
	font-family: Arial,"Helvetica Neue", Helvetica,  sans-serif;
	font-size: 13pt; 
	color:#FFF;
	}
form ul{list-style-type:none;}
form li{ padding: 10px;}
h3.title{font-family: Arial,"Helvetica Neue", Helvetica,  sans-serif; font-size: 24px; color:#FFF}
select#program[hidden]{display:block}
.programlabel{display:block}
td{padding:8px}
</style>
	</head>
    <body>
    
     <h3 class="title">Contact Us</h3>
     	<form action="process.php" method="post" id="dpsform">
 		<div id="sidebar-contact"></div>
        
        <table id="contact2">
          <tr>
           <td colspan="2" align="center">
           <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
           <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>">
           </script>
           <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha" required>
           </td>
          </tr>

          <tr>
            <td align="center" colspan="2">
            	<input type="submit" name="submit" value="Submit" style="width:100px; height:auto">
            </td>
          </tr>
        </table>
      </form>
 
  <div id="contents" style="display:none"></div>
 
<script>
	var programname = "pro";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>$( "#form" ).load( "includes/contact-form.php" );</script>
<script>$( "#sidebar-contact" ).load( "includes/contact-form.php .mini-form" );</script>
<script>$( "#contents" ).load( "includes/program-info.php" );</script>

<script src="includes/scripts.js"></script> 
<script src="includes/jquery.magnific-popup.js"></script>
<script src="includes/popup.js"></script> 

<script>$.getScript("http://umbc.edu/dps/js/changeprogram.js")</script>
<script>$.getScript("http://umbc.edu/dps/js/sendtogoogle.js")</script>
</body>
</html>
