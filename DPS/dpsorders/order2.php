<?php 
//CAPTCHA VARIABLES
require_once __DIR__ . '/autoload.php';
$siteKey = '6Le-7RUTAAAAANxK657OX9zUXVW1Ynb4ysHRap3f';
$secret = '6Le-7RUTAAAAAPGWiej1hA4QQeoDYtbOQI5rOKVH';
$lang = 'en'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Division of Professional Studies at UMBC Order Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700,900' rel='stylesheet' type='text/css'>
<link href="../includes/styles.css" rel="stylesheet">
<script src="../includes/modernizr.custom.js"></script>
<link rel="shortcut icon" href="../images/favicon.ico">
<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
<style>
.programs li{
	margin:0px;
	list-style-type:none!important;
	margin-left:0px!important;
	padding:6px;
	font-size:11pt!important;
	border-bottom:1px #CCC solid;
}
.programs li:hover{
	background-color:#FFCC00;
}
.programs li:hover a{
	color: #000!important;
}
.programs li a{
	text-decoration:none!important;
}
.details {
	font-size:11px;
	padding-bottom:6px;
	font-weight:normal;
	padding-top:0px;
	line-height:11px;
	margin-top:0;
	}

.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
</head>

<?php
$Order = $_POST["Order"];
$OrderType = $_POST["OrderType"];
$PcardOrderPlaced = $_POST["PcardOrderPlaced"];
$PcardOrderConfirmed = $_POST["PcardOrderConfirmed"];
$Email = $_POST["Email"];
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$ContactDepartment = $_POST["ContactDepartment"];
$ContactExtension = $_POST["ContactExtension"];
$DeliveryLocation = $_POST["DeliveryLocation"];
$AuthorizedBy = $_POST["AuthorizedBy"];
$VendorName = $_POST["VendorName"];
$VendorURL = $_POST["VendorURL"];
$VendorTaxID = $_POST["VendorTaxID"];
$VendorContactName = $_POST["VendorContactName"];
$VendorPhoneNumber = $_POST["VendorPhoneNumber"];
$month = $_POST["month"];
$day = $_POST["day"];
$year = $_POST["year"];
$ChartString = $_POST["ChartString"];
$Account = $_POST["Account"];
$ItemNumber = $_POST["ItemNumber"];
?>

<body>
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <div id="container-header"><!-- main container -->
    <header id="umbc-header"><!-- umbc header -->
      <div id="umbc-logo"><a href="http://umbc.edu" title="UMBC: An Honors University in Maryland"><span>UMBC: An Honors University in Maryland</span></a></div>
      <nav role="navigation" id="umbc-nav" >
        <ul id="umbc-nav-items">
          <li id="umbc-nav-azindex"><a href="http://umbc.edu/siteindex">A-Z Index</a></li>
          <li id="umbc-nav-myumbc"><a href="http://my.umbc.edu">myUMBC</a></li>
          <li id="umbc-nav-events"><a href="http://my.umbc.edu/events">Events</a></li>
          <li id="umbc-nav-directory"><a href="http://umbc.edu/search/directory">Directory</a></li>
          <li id="umbc-nav-maps"><a href="http://about.umbc.edu/visitors-guide/campus-map/">Maps</a></li>
        </ul>
        <form role="search" id="umbc-nav-search" action="http://www.umbc.edu/stats/searchthru/" method="get">
          <div id="umbc-nav-search-input">
            <label for="umbc-nav-search-query">Search UMBC</label>
            <input type="hidden" name="cx" value="008589878477221853669:fglxypz-c8m" />
            <input type="hidden" name="ie" value="UTF-8" />
            <input id="umbc-nav-search-query" type="text" placeholder="Search" autocomplete="off" name="q" size="250" maxlength="250">
            <input id="umbc-nav-search-submit" type="submit" value="">
          </div>
        </form>
      </nav>
    </header>
    <header role="banner" id="site-header" > <a href="#" id="mobile-site-menu-expander"> <span class="mobile-site-menu-expander-bar"></span> <span class="mobile-site-menu-expander-bar"></span> <span class="mobile-site-menu-expander-bar"></span> </a> </header>
  </div>
  <!-- END umbc header -->
  <div id="site-menu-background" style="background-color:#FFCC00;">
    <nav role="navigation" id="site-menu"><!-- gold toolbar -->
    <div style="width:100%; background-color:#FFCC00; height:30px">
    </div>
    </nav>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- 
BEGIN MAIN
-->
<div class="container column" id="main">
  <div  id="pp-heading"><br>
    <a href="http://umbc.edu/dps"><img src="../images/dpslogo-tr.png" alt="Division of Professional Studies Home Page" class="scale-with-grid first-child last-child"></a><br>
  </div>
  <div class="sixteen columns">
    <h4><STRONG>Welcome to the Division of  Professional Studies<br>
    Online Order Request/Notification Form</STRONG></h4>
   <form name="DPS Orders" action="process.php" method="post" onSubmit="return validate()">
  <input name="Order" type="hidden" value="DPS Orders Request">
<input name="OrderType" type="hidden" value="<?php echo $OrderType ?>">
<input name="PcardOrderPlaced" type="hidden" value="<?php echo $PcardOrderPlaced ?>">
<input name="PcardOrderConfirmed" type="hidden" value="<?php echo $PcardOrderConfirmed ?>">
<input name="Email" type="hidden" value="<?php echo $Email ?>">
<input name="FirstName" type="hidden" value="<?php echo $FirstName ?>">
<input name="LastName" type="hidden" value="<?php echo $LastName ?>">
<input name="ContactDepartment" type="hidden" value="<?php echo $ContactDepartment ?>">
<input name="ContactExtension" type="hidden" value="<?php echo $ContactExtension ?>">
<input name="DeliveryLocation" type="hidden" value="<?php echo $DeliveryLocation ?>">
<input name="AuthorizedBy" type="hidden" value="<?php echo $AuthorizedBy ?>">
<input name="VendorName" type="hidden" value="<?php echo $VendorName ?>">
<input name="VendorURL" type="hidden" value="<?php echo $VendorURL ?>">
<input name="VendorTaxID" type="hidden" value="<?php echo $VendorTaxID ?>">
<input name="VendorContactName" type="hidden" value="<?php echo $VendorContactName ?>">
<input name="VendorPhoneNumber" type="hidden" value="<?php echo $VendorPhoneNumber ?>">
<input name="month" type="hidden" value="<?php echo $month ?>">
<input name="day" type="hidden" value="<?php echo $day ?>">
<input name="year" type="hidden" value="<?php echo $year ?>">
<input name="ChartString" type="hidden" value="<?php echo $ChartString ?>">
<input name="Account" type="hidden" value="<?php echo $Account ?>">
  <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="3" bgcolor="#000000">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2"><span class="style21">
          <label>PCARD or Requisition:</label>
        </span></td>
        <td width="34%"><?php echo $OrderType ?></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><span class="style21">
          <label>If this is a Pcard order, has the order been placed?</label>
        </span></td>
        <td bgcolor="#CCCCCC"><?php echo $PcardOrderPlaced ?></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style21">
          <label>If this is a Pcard order, have you confirmed that vendor accepts PCards?</label>
        </span></td>
        <td><?php echo $PcardOrderConfirmed ?></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#000000">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><span class="style21">
          <label>Contact E-mail:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><?php echo $Email ?></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style21">
          <label>First Name:</label>
        </span></td>
        <td><?php echo $FirstName ?></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><span class="style21">
          <label>Last Name:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><?php echo $LastName ?></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style21">
          <label>Contact Department:</label>
        </span></td>
        <td><?php echo $ContactDepartment ?></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><span class="style21">
          <label>Contact Extension:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><?php echo $ContactExtension ?></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style21">
          <label>Delivery Location:</label>
        </span></td>
        <td><?php echo $DeliveryLocation ?></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><span class="style21">
          <label>Authorized By:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><?php echo $AuthorizedBy ?></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#000000">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2"><span class="style21">
          <label>Vendor Name:</label>
        </span></td>
        <td><?php echo $VendorName ?></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><span class="style21">
          <label>Vendor URL:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><?php echo $VendorURL ?></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style21">
          <label>Vendor Tax ID (Requisition ONLY):</label>
        </span></td>
        <td><?php echo $VendorTaxID ?></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><span class="style21">
          <label>Vendor Contact Name:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><?php echo $VendorContactName ?></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style21">
          <label>Vendor Phone Number:</label>
        </span></td>
        <td><?php echo $VendorPhoneNumber ?></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#000000">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><span class="style21">
          <label>Date Needed:</label>
        </span></td>
        <td bgcolor="#CCCCCC">          <?php echo $month ?> <?php echo $day ?>,          <?php echo $year ?></td>
      </tr>
      <tr>
        <td colspan="2"><span class="style21">
          <label>Chart String:</label>
        </span></td>
        <td><?php echo $ChartString ?></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#CCCCCC"><span class="style21">
          <label>Account:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><?php echo $Account ?></td>
      </tr>
      <tr>
        <td colspan="3" bgcolor="#000000"><div align="left"><span class="style19">Please enter your order information after the pre-populated text.</span></div></td>
      </tr>
      <?php
		$i=1;
		while ($i <= $ItemNumber) { // Output values from 0 to 10
		?>
	  <tr>
        <td width="37%" valign="top" bgcolor="#F5FF95"><strong>
          <label>Item&nbsp;<?php echo $i ?>:</label>
        </strong></td>
        <td colspan="2" valign="top" bgcolor="#F5FF95"><textarea name="Item<?php echo $i ?>" cols="60" rows="7">ITEM: 
ITEM#: 
DESCRIPTION: 
QUANTITY: 
PAGE#: 
COST: $
PERSON/PLACE RECEIVING ITEM: </textarea>
          </label></td>
        </tr>
        <input name="ItemNumber" type="hidden" value="<?php echo $ItemNumber ?>">
      <?php 
	  	$i++;}
	    ?>
              <tr>
        <td bgcolor="#CCCCCC"><strong>
          <label><span class="style22">Comments:</span></label>
        </strong></td>
        <td colspan="2" bgcolor="#CCCCCC"><textarea name="Comments" cols="60" rows="6" id="Comments"></textarea></td>
        </tr>
              <tr>
                <td colspan="3" align="center" valign="top" bgcolor="#f9f9f9" class="home-heading">Please be sure to check the &quot;I'm not a robot&quot; Google reCAPTCHA box below before clicking &quot;Submit Order,&quot; for security purposes.</td>
        </tr>
              <tr>
                <td colspan="3" align="center" valign="top" bgcolor="#f9f9f9"><div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                  
                <script type="text/javascript"
                    src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>">
            </script></td>
              </tr>
              <tr>
                <td colspan="3" align="center" valign="top" bgcolor="#000000"><span class="formtext1">
                  <input name="Submit" type="submit" class="style18" value="Submit Order">
                </span></td>
              </tr>
    </table>
    <p align="center">&nbsp;</p>
</form>
<script>
// add required attribute to form inputs to force validation.
$("#dpsform").validate({
  rules: {
    email: {
      required: true,
      email: true
			}
  			}
  });
 
</script>

<hr>


  <footer id="site-footer" class="clearfix" style="font-size:8pt">
  
                <center>
     <a href="http://twitter.com/umbc_dps"><img src="../images/twitter.png" alt="twitter" width="25" height="25"></a> 
     
     <a href="http://facebook.com/UMBCProfessionalGradPrograms"><img src="../images/facebook.png"  width="25" height="25" alt="facebook"></a> 
     
     <a href="https://www.youtube.com/channel/UCLVsMMEHLDtrRaDaZrkiSNA"><img src="../images/youtube.png" alt="YouTube"  width="25" height="25"></a> 
     
     <a href="http://my.umbc.edu/groups/dps"><img src="../images/myUMBC.png" alt="myUMBC" height="25"></a></center> 
     
    <p>&copy; <script>document.write(new Date().getFullYear())</script> UMBC Division of Professional Studies · 
      1000 Hilltop Circle, Sherman Hall East 4th Floor, Baltimore, MD 21250 · 410-455-2336 ·  Email: <a href="mailto:dps@umbc.edu">dps@umbc.edu</a><br>
      <a href="locations.php">Locations</a> · <a href="departments.php">DPS Departmental Pages</a> · <a href="staffdirectory.php">DPS Staff Directory</a>      <br>
</p>
      

  </footer>
</div></div>
<!-- container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="includes/scripts.js"></script> 
<?php include("includes/tracking.php"); ?>
<script src="includes/jquery.cbpFWSlider.js"></script> 
<script src="includes/popup.js"></script> 
<script> 
$( function() {
$( '#cbp-fwslider' ).cbpFWSlider();
$( '#cbp-fwslider' ).cbpFWSlider('interval');
 
} ); 
</script>
</body>
</html>