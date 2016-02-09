<?php require 'umbc_template.inc.php'; ?>
<?php umbc_html_head(); ?>

<title>CPS ORDERS FORM</title>

<style type="text/css">
<!--
.style19 {
	color: #FFFFFF;
	font-size: x-small;
}
.style20 {color: #000000}
.style21 {
	font-size: x-small;
	font-weight: bold;
}
.style22 {font-size: x-small}
-->
</style>
<body bgcolor="ffffff">


<?php
$Order = $_POST["Order"];
$OrderType = $_POST["OrderType"];
$PcardOrderPlaced = $_POST["PcardOrderPlaced"];
$PcardOrderConfirmed = $_POST["PcardOrderConfirmed"];
$Email = $_POST["E-Mail"];
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

<a name="top"></a>
<table width="880" border="0" cellspacing="0" cellpadding="0" height="24">
</table>
<table width="880" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
<tr>
    <td colspan="5"><hr><h2 align="center"><STRONG>Welcome to the Division of  Professional Studies<BR>
      Online Order Request/Notification   Form</STRONG></h2>
      <h3 align="center" class="style20">Order Details Confirmation Page</h3>
      <p align="center" class="style20">Please confirm that all of your information is correct, then enter your order items below.<br>
      When you are finished, click submit order.</p>
      <p align="center" class="style20">Order confirmation will be sent upon   processing.</p>
      <hr></td>
    <td height="173"><img src="../../images/spacer.gif" width="1" height="173" border="0"></td>
</tr>

<tr>

<td width="162" bgcolor="#ffffff" height="1"><img src="../../images/spacer.gif" width="162" height="1" border="0"></td>
<td width="25" bgcolor="#ffffff" height="1"><img src="../../images/spacer.gif" width="25" height="1" border="0"></td>

<td width="536" bgcolor="#ffffff" height="1"><img src="../../images/spacer.gif" width="536" height="1" border="0"></td>
<td width="7"  bgcolor="#ffffff" height="1"><img src="../../images/spacer.gif" width="7" height="1" border="0"></td>

<td width="150" bgcolor="#ffffff" height="1"><img src="../../images/spacer.gif" width="150" height="1" border="0"></td>
        <td height="1"><img src="../../images/spacer.gif" width="1" height="1" border="0"></td>
</tr>
<tr>

<td height="1" colspan="5" valign="top" bgcolor="#ffffff"><form name="CPS Orders" action="cpsordersfeedback.php" method="post" onSubmit="return validate()">
<input name="Order" type="hidden" value="CPS Orders Request">
<input name="Order Type" type="hidden" value="<?php echo $OrderType ?>">
<input name="Pcard Order Placed" type="hidden" value="<?php echo $PcardOrderPlaced ?>">
<input name="Pcard Order Confirmed" type="hidden" value="<?php echo $PcardOrderConfirmed ?>">
<input name="E-Mail" type="hidden" value="<?php echo $Email ?>">
<input name="First Name" type="hidden" value="<?php echo $FirstName ?>">
<input name="Last Name" type="hidden" value="<?php echo $LastName ?>">
<input name="Contact Department" type="hidden" value="<?php echo $ContactDepartment ?>">
<input name="Contact Extension" type="hidden" value="<?php echo $ContactExtension ?>">
<input name="Delivery Location" type="hidden" value="<?php echo $DeliveryLocation ?>">
<input name="Authorized By" type="hidden" value="<?php echo $AuthorizedBy ?>">
<input name="Vendor Name" type="hidden" value="<?php echo $VendorName ?>">
<input name="Vendor URL" type="hidden" value="<?php echo $VendorURL ?>">
<input name="Vendor Tax ID" type="hidden" value="<?php echo $VendorTaxID ?>">
<input name="Vendor Contact Name" type="hidden" value="<?php echo $VendorContactName ?>">
<input name="Vendor Phone Number" type="hidden" value="<?php echo $VendorPhoneNumber ?>">
<input name="Date Needed Month" type="hidden" value="<?php echo $month ?>">
<input name="Date Needed Day" type="hidden" value="<?php echo $day ?>">
<input name="Date Needed Year" type="hidden" value="<?php echo $year ?>">
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
        <td width="37%" valign="top" bgcolor="#CCCCFF"><strong>
          <label><span class="style22">Item&nbsp;<?php echo $i ?>:</span></label>
        </strong>
          <p>&nbsp;</p></td>
        <td colspan="2" valign="top" bgcolor="#CCCCFF"><textarea name="Item <?php echo $i ?>" cols="60" rows="7">Name: 
Item Number: 
Description: 
Quantity: 
Page #: 
Cost: $
Person/Place Receiving Item: </textarea>
          </label></td>
        </tr>
      <?php 
	  	$i++;}
	    ?>
              <tr>
        <td><strong>
          <label><span class="style22">Comments:</span></label>
        </strong></td>
        <td colspan="2"><textarea name="Comments" cols="60" rows="6" id="Comments"></textarea></td>
        </tr>
    </table>
    <p align="center"><span class="formtext1">
      <input name="Submit" type="submit" class="style18" value="Submit Order">
    </span></p>
</form></td>
<td></td>
</tr>
    </table>
<?php umbc_page_end(); ?>
