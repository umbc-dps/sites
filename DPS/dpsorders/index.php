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
    <h4 align="center"><STRONG><br>
    Welcome to the Division of  Professional Studies<br>
    Online Order Request/Notification   Form</STRONG></h4>
    <p align="center"><br>
      Please fill in all fields before   submitting. <BR>
      If you have any questions, please contact<BR>
      Ms. Theresa Knott,   Accounting Associate<BR>
    at: 410-455-1360 (x51360) </p>
    <p align="center"><STRONG>Special Instructions:<br>
    </STRONG>FAX   completed quotes, estimates, and any forms to <br>
    410-455-1344 (x51344) after   submitting your request.    </p>
    <form name="DPS Orders" action="order2.php" method="post" onSubmit="return validate()">
      <input name="Order" type="hidden" value="DPS Orders Request">
    <table width="100%" border="0" cellpadding="2" cellspacing="0" bordercolor="#000000">
      <tr>
        <td colspan="2" bgcolor="#000000">&nbsp;</td>
        </tr>
      <tr>
        <td><span class="style23">
          <label>PCARD or Requisition:</label>
        </span></td>
        <td><span class="style21">
          <select name="OrderType" id="OrderType">
            <option value="N/A" selected>N/A</option>
            <option value="PCARD">PCARD</option>
            <option value="Requsition">Requsition</option>
          </select>
        </span></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style23">
          <label>If this is a Pcard order, has the order been placed?</label>
        </span></td>
        <td bgcolor="#CCCCCC"><span class="style21">
          <select name="PcardOrderPlaced" id="Order Placed">
            <option value="N/A" selected>N/A</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </span></td>
      </tr>
      <tr>
        <td><span class="style23">
          <label>If this is a Pcard order, have you confirmed that vendor accepts PCards?</label>
        </span></td>
        <td><span class="style21">
          <select name="PcardOrderConfirmed" id="Order Placed">
            <option value="N/A" selected>N/A</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </span></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#000000">&nbsp;</td>
        </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style23">
          <label>Contact E-mail:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><input name="Email" type="text" id="Email" size="50" maxlength="50"></td>
      </tr>
      <tr>
        <td><span class="style23">
          <label>First Name:</label>
        </span></td>
        <td><input name="FirstName" type="text" id="First Name" size="50" maxlength="50"></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style23">
          <label>Last Name:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><input name="LastName" type="text" id="Last Name" size="50" maxlength="50"></td>
      </tr>
      <tr>
        <td><span class="style23">
          <label>Contact Department:</label>
        </span></td>
        <td><span class="style21">
          <select name="ContactDepartment" id="Contact Department">
            <option value="N/A" selected>N/A</option>
            <option value="Administrative Affairs">Administrative Affairs</option>
            <option value="ELI">ELI</option>
            <option value="ISD">ISD</option>
            <option value="IT">IT</option>
            <option value="K-12">K-12</option>
            <option value="Marketing">Marketing</option>
            <option value="Professional Programs">Professional Programs</option>
            <option value="Shady Grove">Shady Grove</option>
            <option value="SWSP">SWSP</option>
          </select>
        </span></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style23">
          <label>Contact Extension:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><input name="ContactExtension" type="text" id="Contact Extension" size="50" maxlength="50"></td>
      </tr>
      <tr>
        <td><span class="style23">
          <label>Delivery Location:</label>
        </span></td>
        <td><span class="style21">
          <select name="DeliveryLocation" id="Delivery Location">
            <option value="N/A" selected>N/A</option>
            <option value="Sherman Hall West - Room 209">Sherman Hall West - Room 209</option>
            <option value="Sherman Hall East">Sherman Hall East</option>
            <option value="UC 206/207">UC 206/207</option>
            <option value="South Campus 1450 South Rolling Road">South Campus 1450 South Rolling Road</option>
            <option value="Shady Grove">Shady Grove</option>
          </select>
        </span></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style23">
          <label>Authorized By:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><input name="AuthorizedBy" type="text" id="Authorized By" size="50" maxlength="50"></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#000000">&nbsp;</td>
        </tr>
      <tr>
        <td><span class="style23">
          <label>Vendor Name:</label>
        </span></td>
        <td><input name="VendorName" type="text" id="Vendor Name" size="50" maxlength="50"></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style23">
          <label>Vendor URL:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><input name="VendorURL" type="text" id="Vendor URL" size="50" maxlength="50"></td>
      </tr>
      <tr>
        <td><span class="style23">
          <label>Vendor Tax ID (Requisition ONLY):</label>
        </span></td>
        <td><input name="VendorTaxID" type="text" id="Vendor Tax ID" size="50" maxlength="50"></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style23">
          <label>Vendor Contact Name:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><input name="VendorContactName" type="text" id="Vendor Contact Name" size="50" maxlength="50"></td>
      </tr>
      <tr>
        <td><span class="style23">
          <label>Vendor Phone Number:</label>
        </span></td>
        <td><input name="VendorPhoneNumber" type="text" id="Vendor Phone Number" size="50" maxlength="50"></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#000000">&nbsp;</td>
        </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style23">
          <label>Date Needed:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><select name="month" id="month">
          <option value="Select" selected>Select</option>
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
        </select>
          <select name="day" id="day">
            <option value="Select" selected>Select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
,
<select name="year" id="year">
  <option value="Select" selected>Select</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
</select>
</select></td>
      </tr>
      <tr>
        <td><span class="style23">
          <label>Chart String:</label>
        </span></td>
        <td><span class="style21">
          <select name="ChartString" id="Chart String">
            <option value="N/A" selected>N/A</option>
            <option value="Shady Grove - Administration 1111 10439 011 MAIN 00003902">Shady Grove - Administration 1111 10439 011 MAIN 00003902</option>
            <option value="Shady Grove - History 1111 10439 011 MAIN 00003897">Shady Grove - History 1111 10439 011 MAIN 00003897</option>
            <option value="Shady Grove - Geography 1111 10439 011 MAIN 00003898">Shady Grove - Geography 1111 10439 011 MAIN 00003898</option>
            <option value="Shady Grove - Social Work 1111 10439 011 MAIN 00003899">Shady Grove - Social Work 1111 10439 011 MAIN 00003899</option>
            <option value="Shady Grove - Political Science 1111 10439 011 MAIN 00003900">Shady Grove - Political Science 1111 10439 011 MAIN 00003900</option>
            <option value="Shady Grove - Psychology 1111 10439 011 MAIN 00003901">Shady Grove - Psychology 1111 10439 011 MAIN 00003901</option>
            <option value="Shady Grove - Translational Life Science 1111 10439 011 MAIN TLSTUGRD">Shady Grove - Translational Life Science 1111 10439 011 MAIN TLSTUGRD</option>
            <option value="Instructional Systems Design (ISD) 1111 10450 011">Instructional Systems Design (ISD) 1111 10450 011</option>
            <option value="DPS Finance & Administration (State Fund) 1111 10554 011">DPS Finance & Administration (State Fund) 1111 10554 011</option>
            <option value="Summer Programs - Expenses 1113 10436 012 CNV CV380120">Summer Programs - Expenses 1113 10436 012 CNV CV380120</option>
            <option value="Winter Programs - Expenses 1113 10437 012 CNV CV382102">Winter Programs - Expenses 1113 10437 012 CNV CV382102</option>
            <option value="Teacher Professional Dev - Administration 1113 10438 012 MAIN 00003643">Teacher Professional Dev - Administration 1113 10438 012 MAIN 00003643</option>
            <option value="Teacher Professional Dev - Math 1113 10438 012 MAIN 00003644">Teacher Professional Dev - Math 1113 10438 012 MAIN 00003644</option>
            <option value="Teacher Professional Dev - Science 1113 10438 012 MAIN 00003645">Teacher Professional Dev - Science 1113 10438 012 MAIN 00003645</option>
            <option value="Teacher Professional Dev - TESOL 1113 10438 012 MAIN 00003646">Teacher Professional Dev - TESOL 1113 10438 012 MAIN 00003646</option>
            <option value="Teacher Professional Dev - Other Programs 1113 10438 012 MAIN 00003650">Teacher Professional Dev - Other Programs 1113 10438 012 MAIN 00003650</option>
            <option value="Information Technology Systems (IT) 1113 10442 012 CNV CV380104">Information Technology Systems (IT) 1113 10442 012 CNV CV380104</option>
            <option value="DPS Vice Provost 1113 10443 012 CNV CV380140">DPS Vice Provost 1113 10443 012 CNV CV380140</option>
            <option value="DPS Vice Provost/ SUCCESS Program 1113 10443 012 MAIN SUCC1113">DPS Vice Provost/ SUCCESS Program 1113 10443 012 MAIN SUCC111</option>
            <option value="ELI Special Programs 1113 10451 012 CNV CV380146">ELI Special Programs 1113 10451 012 CNV CV380146</option>
            <option value="ELI Summer Enrichment 1113 10451 031 MAIN SUMENRCH">ELI Summer Enrichment 1113 10451 031 MAIN SUMENRCH</option>
            <option value="ELI Intensive English Program 1113 10452 012 CNV CV380148">ELI Intensive English Program 1113 10452 012 CNV CV380148</option>
            <option value="DPS Marketing 1113 10457 012 CNV CV380149">DPS Marketing 1113 10457 012 CNV CV380149</option>
            <option value="Finance and Administration 1113 10506 012 CV380103">Finance and Administration 1113 10506 012 CV380103</option>
            <option value="Professional Programs - GA 1113 10589 012 MAIN 00001217">Professional Programs - GA 1113 10589 012 MAIN 00001217</option>
            <option value="Professional Programs - SE 1113 10589 012 MAIN 00001041">Professional Programs - SE 1113 10589 012 MAIN 00001041</option>
            <option value="Professional Programs - Non Profit 1113 10589 012 MAIN 00001042">Professional Programs - Non Profit 1113 10589 012 MAIN 00001042</option>
            <option value="Professional Programs - Music 1113 10589 012 MAIN 00001208">Professional Programs - Music 1113 10589 012 MAIN 00001208</option>
            <option value="Professional Programs - Biotechnology 1113 10589 012 MAIN 00002911">Professional Programs - Biotechnology 1113 10589 012 MAIN 00002911</option>
            <option value="Professional Programs - Cybersecurity 1113 10589 012 MAIN 00006542">Professional Programs - Cybersecurity 1113 10589 012 MAIN 00006542</option>
            <option value="Professional Programs - IPDM 1113 10589 012 MAIN IPDMPROG">Professional Programs - IPDM 1113 10589 012 MAIN IPDMPROG</option>
            <option value="Professional Programs - Data Science 1113 10589 012 MAIN MPSDATAS">Professional Programs - Data Science 1113 10589 012 MAIN MPSDATAS</option>
            <option value="Professional Programs - HIT 1113 10589 012 MAIN HIT3PROG">Professional Programs - HIT 1113 10589 012 MAIN HIT3PROG</option>

          </select>
        </span></td>
      </tr>
      <tr>
        <td bgcolor="#CCCCCC"><span class="style23">
          <label>Account:</label>
        </span></td>
        <td bgcolor="#CCCCCC"><span class="style21">
          <select name="Account" id="Account">
            <option value="N/A" selected>N/A</option>
            <option value="7020100 Honorariums">7020100 Honorariums</option>
            <option value="7030100 Postage">7030100 Postage</option>
            <option value="7030200 Telephone">7030200 Telephone</option>
            <option value="7030500 Telecommunication">7030500 Telecommunication</option>
            <option value="7030600 Cellular Telephone - Equip. & Serv.">7030600 Cellular Telephone - Equip. & Serv.</option>
            <option value="7040100 In State/Routine Operations Travel">7040100 In State/Routine Operations Travel</option>
            <option value="7040300 Out of State/Routine Oper. Travel">7040300 Out of State/Routine Oper. Travel</option>
            <option value="7062000 Utilities- Electricity">7062000 Utilities- Electricity</option>
            <option value="7070300 Maintenance and Repair">7070300 Maintenance and RepairT</option>
            <option value="7080100 Advertising">7080100 Advertising</option>
            <option value="7080105 Advertising - Employment">7080105 Advertising - Employment</option>
            <option value="7080400 Printing and Reproduction">7080400 Printing and Reproduction</option>
            <option value="7080800 Equipment Rental">7080800 Equipment Rental</option>
            <option value="7080900 Equipment Maint & Repair">7080900 Equipment Maint & Repair</option>
            <option value="7081100 Food Services">7081100 Food Services</option>
            <option value="7081120 Conference Service">7081120 Conference Service</option>
            <option value="7081600 Housekeeping">7081600 Housekeeping</option>
            <option value="7089200 Data Processing - Acad Cont. Serv.">7089200 Data Processing - Acad Cont. Serv.</option>
            <option value="7089300 Data Processing - Admin Cont. Serv.">7089300 Data Processing - Admin Cont. Serv.</option>
            <option value="7089900 Other Contract Serv.">7089900 Other Contract Serv.</option>
            <option value="7090200 Office Supplies">7090200 Office Supplies</option>
            <option value="7090400 Building and Household Supplies">7090400 Building and Household Supplies</option>
            <option value="7091400 Instructional Supplies">7091400 Instructional Supplies</option>
            <option value="7099000 Data Processing-Acad Supplies">7099000 Data Processing-Acad Supplies</option>
            <option value="7099100 Data Processing-Admin Supp.">7099100 Data Processing-Admin Supp.</option>
            <option value="7130100 Rent (Rent Property)">7130100 Rent (Rent Property)</option>
            <option value="7130500 Assoc Dues & Subscriptions">7130500 Assoc Dues & Subscriptions</option>
          </select>
        </span></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#000000"><div align="center"><span class="style21">&nbsp;</span></div></td>
      </tr>
      <tr>
        <td align="left" valign="top" bgcolor="#CCCCCC"><p> <span class="style24"><strong>Please enter a numeric value for the total number of unique items you would like to order:</strong></span></p>
          <p class="style24"><em><strong>(For example, if you are going to order 1 box of pens and 4 identical binders, you would enter 2 in this field indicating 2 unique itmes. When you click &quot;continue,&quot; the form will then create 2 order fields for you to enter your order data into. </strong></em></p></td>
        <td valign="top" bgcolor="#CCCCCC"><span class="style21">
          <label>
          <!-- select name="ItemNumber" size="1" id="select">
            <option value="1">1</option>
            <option value="2">2</option>
          </select-->
		  <input name="ItemNumber" type="text" size="2" maxlength="2">
          </label>
        </span></td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" bgcolor="#000000"><input type="submit" id="submit" value="Continue"></td>
        </tr>
    </table>
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