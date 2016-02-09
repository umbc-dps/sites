<?php require 'umbc_template.inc.php'; ?>
<?php umbc_html_head(); ?>
<title>CPS TONER ORDERS</title>
<style type="text/css">
<!--
.style1 {
	font-size: x-small;
	font-weight: bold;
}
.style2 {font-size: x-small}
-->
</style>
<body bgcolor="ffffff">
<a name="top"></a>    
<table width="880" border="0" cellspacing="0" cellpadding="0" height="24">
</table>
<table width="880" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
<tr>
    <td colspan="5"><hr>
    <h2 align="center"><STRONG>Welcome to the Division of   Professional Studies<br>
      Online Toner Order Request Form</STRONG></h2>
      <p align="center">Please fill in all fields before   submitting. <BR>
        If you have any questions, please contact<BR>
        Ms. Theresa Knott,   Accounting Associate<BR>
      at: 410-455-1360 (x51360)<STRONG><br>
      </STRONG></p>
    <p align="center">&nbsp;Order confirmation will be sent upon   processing.</p><hr></td>
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
<td height="1" colspan="5" valign="top" bgcolor="#ffffff"><form name="CPS Orders" action="tonerordersfeedback.php" method="post" onsubmit="return validate()">
   <input name="Order" type="hidden" value="CPS Orders Request">
    <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="2" bgcolor="#000000">&nbsp;</td>
        </tr>
      <tr>
        <td><span class="style1">
          <label>PCARD or Requsition:</label>
        </span></td>
        <td><select name="OrderType" id="OrderType">
            <option value="PCARD">PCARD</option>
        </select></td>
      </tr>
      
      <tr>
        <td bgcolor="#CCCCCC"><span class="style1">
          <label>Contact E-mail:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><input type="text" name="E-Mail" maxlength="50" size="50" id="Email"></td>
      </tr>
      <tr>
        <td><span class="style1">
          <label>First Name:</label>
        </span></td>
        <td><input type="text" name="FirstName" maxlength="50" size="50" id="First Name"></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style1">
          <label>Last Name:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><input type="text" name="LastName" maxlength="50" size="50" id="Last Name"></td>
      </tr>
      
      <tr>
        <td bgcolor="#FFFFFF"><span class="style1">
          <label>Contact Extension:</label>
        </span></td>
        <td bgcolor="#FFFFFF"><input type="text" name="ContactExtension" maxlength="50" size="50" id="Contact Extension"></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style1">
          <label>Delivery Location:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><select name="DeliveryLocation" id="Delivery Location">
            <option value="N/A" selected>N/A</option>
            <option value="ACIV B Wing">ACIV B Wing</option>
            <option value="UC 206/207">UC 206/207</option>
        </select></td>
      </tr>
      
      <tr>
        <td><span class="style1">
          <label>Vendor Name:</label>
        </span></td>
        <td><select name="Vendor" id="Vendor">
          <option value="AJ Stationers" selected>AJ Stationers</option>
        </select></td>
      </tr>
      
      <tr>
        <td bgcolor="#CCCCCC"><span class="style1">
          <label>Chart String:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><select name="ChartString" id="Chart String">
        <option value="1113 10506 012 CNV CV380103">1113 10506 012 CNV CV380103</option>  
        </select></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><span class="style1">
          <label>Account:</label>
        </span></td>
        <td bgcolor="#FFFFFF"><select name="Account" id="Account">
            <option value="7090200 Office Supplies SUPMA">7090200 Office Supplies SUPMA</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#000000">&nbsp;</td>
        </tr>
      
      <tr>
        <td bgcolor="#CCCCCC"><span class="style1">
          <label>Toner One:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><label>
<select name="TonerOne" size="1" id="select">
<option value="Select Toner" selected>Select Toner</option>
<option value="Brother HL-6050DN - Black (TN670)">Brother HL-6050DN - Black (TN670)</option>
<option value="HP Laserjet 2055DN - Black (HEWCE505X)">HP Laserjet 2055DN - Black (HEWCE505X)</option>
<option value="Xerox Colorcube 8570DN - Black (XER108R00930)">Xerox Colorcube 8570DN - Black (XER108R00930)</option>
<option value="Xerox Colorcube 8570DN - Magenta (XER108R00927)">Xerox Colorcube 8570DN - Magenta (XER108R00927)</option>
<option value="Xerox Colorcube 8570DN - Yellow (XER108R00928)">Xerox Colorcube 8570DN - Yellow (XER108R00928)</option>
<option value="Xerox Colorcube 8570DN - Cyan (XER108R00926)">Xerox Colorcube 8570DN - Cyan (XER108R00926)</option>
</select>
          </select>
        </label></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style1">Toner One Quantity:</span></td>
        <td bgcolor="#CCCCCC"><input type="text" name="TonerOneQuantity" maxlength="50" size="20" id="TonerOneQuantity"></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><span class="style1">
          <label>Toner Two:</label>
        </span></td>
        <td bgcolor="#FFFFFF"><label>
          <select name="TonerTwo" size="1" id="select">
            <option value="Select Toner" selected>Select Toner</option>
<option value="Brother HL-6050DN - Black (TN670)">Brother HL-6050DN - Black (TN670)</option>
<option value="HP Laserjet 2055DN - Black (HEWCE505X)">HP Laserjet 2055DN - Black (HEWCE505X)</option>
<option value="Xerox Colorcube 8570DN - Black (XER108R00930)">Xerox Colorcube 8570DN - Black (XER108R00930)</option>
<option value="Xerox Colorcube 8570DN - Magenta (XER108R00927)">Xerox Colorcube 8570DN - Magenta (XER108R00927)</option>
<option value="Xerox Colorcube 8570DN - Yellow (XER108R00928)">Xerox Colorcube 8570DN - Yellow (XER108R00928)</option>
<option value="Xerox Colorcube 8570DN - Cyan (XER108R00926)">Xerox Colorcube 8570DN - Cyan (XER108R00926)</option>
          </select>
          </select>
        </label></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><span class="style1">Toner Two Quantity:</span></td>
        <td bgcolor="#FFFFFF"><input type="text" name="TonerTwoQuantity" maxlength="50" size="20" id="TonerTwoQuantity"></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style1">
          <label>Toner Three:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><label>
          <select name="TonerThree" size="1" id="select">
            <option value="Select Toner" selected>Select Toner</option>
<option value="Brother HL-6050DN - Black (TN670)">Brother HL-6050DN - Black (TN670)</option>
<option value="HP Laserjet 2055DN - Black (XERHEWCE505X)">HP Laserjet 2055DN - Black (XERHEWCE505X)</option>
<option value="Xerox Colorcube 8570DN - Black (XER108R00930)">Xerox Colorcube 8570DN - Black (XER108R00930)</option>
<option value="Xerox Colorcube 8570DN - Magenta (XER108R00927)">Xerox Colorcube 8570DN - Magenta (XER108R00927)</option>
<option value="Xerox Colorcube 8570DN - Yellow (XER108R00928)">Xerox Colorcube 8570DN - Yellow (XER108R00928)</option>
<option value="Xerox Colorcube 8570DN - Cyan (XER108R00926)">Xerox Colorcube 8570DN - Cyan (XER108R00926)</option>
          </select>
          </select>
        </label></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style1">Toner Three Quantity:</span></td>
        <td bgcolor="#CCCCCC"><input type="text" name="TonerThreeQuantity" maxlength="50" size="20" id="TonerThreeQuantity"></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><span class="style1">
          <label>Toner Four:</label>
        </span></td>
        <td bgcolor="#FFFFFF"><label>
          <select name="TonerFour" size="1" id="select">
            <option value="Select Toner" selected>Select Toner</option>
<option value="Brother HL-6050DN - Black (TN670)">Brother HL-6050DN - Black (TN670)</option>
<option value="HP Laserjet 2055DN - Black (HEWCE505X)">HP Laserjet 2055DN - Black (HEWCE505X)</option>
<option value="Xerox Colorcube 8570DN - Black (XER108R00930)">Xerox Colorcube 8570DN - Black (XER108R00930)</option>
<option value="Xerox Colorcube 8570DN - Magenta (XER108R00927)">Xerox Colorcube 8570DN - Magenta (XER108R00927)</option>
<option value="Xerox Colorcube 8570DN - Yellow (XER108R00928)">Xerox Colorcube 8570DN - Yellow (XER108R00928)</option>
<option value="Xerox Colorcube 8570DN - Cyan (XER108R00926)">Xerox Colorcube 8570DN - Cyan (XER108R00926)</option>
          </select>
          </select>
        </label></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><span class="style1">Toner Four Quantity:</span></td>
        <td bgcolor="#FFFFFF"><input type="text" name="TonerFourQuantity" maxlength="50" size="20" id="TonerFourQuantity"></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#000000">&nbsp;</td>
        </tr>
      <tr>
        <td bgcolor="#CCCCCC"><strong>
          <label><span class="style2">Comments:</span></label>
        </strong></td>
        <td bgcolor="#CCCCCC"><textarea name="Comments" cols="40" rows="5" id="Comments"></textarea></td>
      </tr>
    </table>
    <p align="center"><span class="formtext1">
      <input name="Submit" type="submit" class="style18" value="Submit Items">
    </span></p>
</form></td>
<td></td>
</tr>
    </table>


<?php umbc_page_end(); ?>

