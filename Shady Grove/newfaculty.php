<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was 
?>

<!doctype html>
<html>
<head>

<meta charset="UTF-8">
<title>New Faculty Resources | UMBC at Shady Grove</title>


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="New UMBC Shady Grove Faculty Resources." />

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">
<meta name="twitter:site" content="@UatShadyGrove">

<!-- Open Graph data -->
<meta property="og:title" content="Faculty Resources | UMBC at Shady Grove" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.umbc.edu/shadygrove/newfacultydraft" />
<meta property="og:image" content="http://www.umbc.edu/shadygrove/images/meta.jpg" />
<meta property="og:description" content=" New UMBC Shady Grove Faculty Resources." />

<link href="css/styles-ug.css" rel="stylesheet">
<link href='css/magnific-popup.css' rel='stylesheet'>
<link href="css/accordion-ug.css" rel="stylesheet">

<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>


<script src="js/modernizr.custom.js"></script>

<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


<style type="text/css">
@media screen and (min-width:800px) {
html{
	position: relative;
	height:100%;
}
html::after {
  content: "";
  background: url(images/bg/<?php echo $selectedBg; ?>) no-repeat;
  background-size:cover;
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: fixed;
  z-index: -1;  
  background-attachment:fixed;
}
}
</style>

</head>
<body>
<div id="full-page">
<div id="skip-content"><a href="#main-content">Skip to Main Content</a></div>
<div id="container-header-background">
  <!-- UMBC header -->
      <?php include("includes/umbc-header.php"); ?>
  <!-- END umbc header -->
  <div id="site-menu-background">
    <!-- gold toolbar -->
      <?php //include("includes/gold-nav.php"); ?>
    <!-- END gold toolbar --> 
  </div>
</div>
<!-- BEGIN MAIN -->
<div class="container column" id="main">
<div id="summer-heading">
<a href="index">
<h1 class="remove-bottom">New Faculty: Welcome to UMBC
</h1>
</a>
  </div>
    <div class="sixteen columns" style="padding-top:1em;">
    <!-- Page Title -->
    
    <!-- END Page Title -->    
    
      <div class="narrowchart">
        <div id="accordion"> 
        
    <!-- Start Content -->   
      <div class="content">
      <br>
      <p>Welcome to UMBC-Shady Grove!  It is a pleasure to have you join our team for the upcoming semester.  As an integral part of our success at USG, we want to take this opportunity to say thank you for your hard work and dedication to helping our students succeed both inside and outside of the classroom.</p>
      
<p>To gain access to the various UMBC faculty resources, new faculty must complete the following steps:</p>

	<div class="accordionheader">
            <h4><a id="e" href="#e"></a>Step I<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
    <p>Complete the <a href="http://swsupport.umbc.edu/files/2014/12/Faculty_Staff-Pre-Hire-Form-ONLINE-VERSION-Revised-2016.docx" target="_blank">Faculty/Staff Pre-Hire form</a> and email to <a href="mailto:awaters@umbc.edu">awaters@umbc.edu</a>.</p>
    		</div>
            
           <div class="accordionheader">
            <h4><a id="e" href="#e"></a>Step II<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
    <p>Complete the remainder of the HR paperwork and schedule an in person appointment with Ashley Waters at UMBC-Shady Grove for document review and verification.
    	<ol>
        	<li> <a href="http://swsupport.umbc.edu/files/2017/01/2017-MD-W4.pdf" target="_blank">W-4 Form</a> – Complete in BLACK INK, Sign and Date (NOTE:  If the W-4 form is not completed in black ink, it will be returned.) <a href="http://swsupport.umbc.edu/files/2015/02/2014-W4-Instruction-Pamphlet-and-Memo.pdf" target="_blank">“Worksheet Instructions for Maryland Withholdings” (W-4 forms)</a></li>
            	<ul>
                	<li>DC Residents: use a <a href="http://swsupport.umbc.edu/files/2014/12/2017-DC-W4.pdf" target="_blank">DC W-4 Form</a></li>
                    <li>West Virginia Residents: use a <a href="http://swsupport.umbc.edu/files/2014/12/2017-WV-w4.pdf" target="_blank">WV W-4 Form</a></li>
                </ul>
        	<li> <a href="http://swsupport.umbc.edu/files/2017/01/i-9-paper-version-1.pdf" target="_blank">I-9 Form</a> – Complete Section 1, Sign and Date Include copies of supporting documents from either List A or List B and C as required on the I-9 Form.  See attached list of acceptable documents.</li>
            <li>Social Security number verification is REQUIRED.  Unless you are providing your Social Security card to satisfy the required document from List C above, you are still required to provide verification of your Social Security number.  <em>Important Note:  if you are unable to provide a copy of your Social Security card, one of the following may be submitted as an alternative:</em></li>
            	<ul>
                	<li>W2 Form</li>
                    <li>Health Care Card (with YOUR SSN included)</li>
                    <li>Pay Stub (with SSN included)</li>
                    <li>Military ID card (with SSN included)</li>
                    <li>College Transcript (with SSN included)</li>
                </ul>
        	<li><a href="http://swsupport.umbc.edu/files/2015/09/Supplemental-Data-Form-New-9-8-15.docx" target="_blank">Personnel Supplemental Data Information Form</a> – Complete, Sign and Date</li>
            <li><a href="http://hr.umbc.edu/files/2013/09/SubstanceAbusePolicy.pdf" target="_blank">Substance Abuse Acknowledgement Policy</a> – Read the policy; then sign and submit the <a href="http://swsupport.umbc.edu/files/2014/12/0-SubstanceAbuseSignatureSheet.pdf">Substance Abuse Signature Sheet</a> – Sign and Date</li>
            <li><a href="http://swsupport.umbc.edu/files/2014/12/SCHIPNoticetoEmployees2010_07.pdf" target="_blank">Health Insurance Program Reauthorization Act (CHIPRA)</a> – Read the policy; then sign and submit <a href="http://swsupport.umbc.edu/files/2014/12/CHIPAcknowledgement.pdf">CHIP Acknowledgment Form</a>
</li>
        </ol> 
    </p>
    		</div>
            
    <div class="accordionheader">
            <h4><a id="e" href="#e"></a>Step III<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
    <p>You will also receive an automated email with your campus ID and directions for creating an email account and accessing Blackboard. <a href="https://webadmin.umbc.edu/admin" target="_blank">Create your account</a> and ensure your access is fulfilled as soon as possible after receiving this email. After you create your account, join the <a href="http://my.umbc.edu/groups/sgfaculty" target="_blank">Shady Grove Faculty <em>my</em>UMBC group</a>.
    </p>
    		</div>
    
    <div class="accordionheader">
            <h4><a id="e" href="#e"></a>Step IV<i class="fa fa-angle-down"></i></h4>
          </div>

          <div class="accordionbody">
    <p><strong>STEP IV</strong> – <strong>Graduate Faculty Only</strong>: Submit a brief bio and headshot to Rickeysha Jones, Graduate Program Coordinator, at <a href="mailto:rcjones@umbc.edu">rcjones@umbc.edu</a>. </p>
    </div>
    
    <p>Once the following steps are complete, please stay tuned for more information from Ashley Waters and/or Caitlin Scheidegger to ensure you are set for the upcoming semester. Again, welcome to UMBC!
    </p>
    	
</div>
      	
      
<br clear="all">
      </div> 
    </div>
    </div>
    </div>
	<!-- END Content -->

    <!-- END TOP SIDEBAR-->
  <footer id="site-footer" class="clearfix">
  <?php include("includes/footer-ug.php"); ?> 
  </footer>

</div>  
    

  
<!-- container --> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="js/scripts.js"></script> 

<script src="js/jquery.magnific-popup.js"></script> 

<script src="js/popup.js"></script> 

<script>
$( "#accordion" ).accordion({
      heightStyle: "content",
      active: false,
      collapsible: true,
      header:"div.accordionheader"
    });
    var hash = window.location.hash;
    var anchor = $('a[href$="'+hash+'"]');
    if (anchor.length > 0){
        anchor.click();
    }
$('h4').click(function() {
	var linkText = $(this).text();
	ga('send', 'event',  'accordion', 'click', linkText);
});
</script> 
 

<?php include("includes/tracking.php"); ?>

<script>
$(document).ready(function () {
	ytTracker.init();
});
</script>

</body>
</html>