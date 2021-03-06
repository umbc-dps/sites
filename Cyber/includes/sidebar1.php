

<div class="five columns">    <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">Upcoming Event</h3>
      <p style="text-align:center"><strong>Program Exploration Open House</strong>    
      <br>
      Wednesday, June 21, 6:00-7:30PM <br>
      <a href="http://umbc.edu/openhouse?utm_campaign=openhouse_summer17&utm_source=umbc.edu&utm_medium=referral&utm_content=cyber_sidebar" class="btn">Save Your Spot!</a>
      
      </p>
</aside>

    
    <aside class="five columns add-bottom" id="one">
      <h3 style="color:#fff;">Past Event</h3>
      <p style="text-align:center">
<strong>Webinar: Chinese Cyber Power</strong><br />
<a class="btn video" href="https://www.youtube.com/watch?v=DcLtcXd_86k">Watch Video</a>
      </p>
    </aside>


    <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">Application Deadline</h3>


      <p style="text-align:center">
<strong>Apply Now for Fall</strong><br>
Classes Begin August 30<br> <a class="btn" href="http://gradschool.umbc.edu/admissions/apply/" target="_blank">Apply Now</a>
      </p>
</aside>


    <aside class="five columns add-bottom" id="three">
      <h3 style="color:#fff;">At a Glance</h3>


      <dl>
        <dt>Locations Offered</dt>


        <dd>Catonsville and <a href="http://umbc.edu/shadygrove/cyber">Rockville</a></dd>


        <dt>Programs Offered</dt>


        <dd>Master’s in Professional Studies: Cybersecurity; Graduate Certificate in Professional Studies: Cybersecurity Strategy & Policy; Graduate Certificate in Professional Studies: Cybersecurity Operations</dd>


        <dt>Average Completion Time</dt>


        <dd>3 Years (Master’s Part Time)<br />
        1 Year (Certificate Part Time)</dd>


        <dt>Credit Hours</dt>


        <dd>30 - Master’s<br />
        12 - Certificate</dd>


        <dt>Tuition &amp; Fees (MD Resident)</dt>


        <dd>$733 per credit</dd>


        <dt>Tuition &amp; Fees (Non-MD Resident)</dt>


        <dd>$1127 per credit</dd>


        <dt>Start Date</dt>


        <dd>Spring/Fall</dd><br>

        <dt style="text-align:center"><a class="btn" href="documents/programguide.pdf" target="_blank">Download Program Guide PDF</a></dt>
      </dl> 
    </aside>
    
<aside class="five columns add-bottom" id="four">   
<h3 style="color:#fff;">Request Information</h3>

<div id="form">    
        
<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
if(!isset($_GET['tfa_next'])) {
$qs = ' ';
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']));
echo file_get_contents('https://umbc.secure.force.com/form?formID=217734'.$qs);
} else {
echo file_get_contents('http://app.formassembly.com/rest'.$_GET['tfa_next'],false,$context);
}
?>
</div>

<script>
$('#tfa_0').submit(function() {
  ga('send', 'event', 'inquiry', 'submit', 'request_info');
});
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>

</aside>       
   
               <aside class="five columns add-bottom">
<dt style="text-align:center">
<a class="btn" href="http://gritinaction.umbc.edu/" target="_blank">
Visit our Blog
</a>
</dt>
</aside>
   
<aside  class="five columns add-bottom">

<center>
     <a href="http://twitter.com/umbc_dps" target="_blank"><img src="images/twitter.png" alt="twitter" width="30" height="30"></a> 
     
     <a href="http://facebook.com/UMBCProfessionalGradPrograms" target="_blank"><img src="images/facebook.png" width="30" height="30" alt="facebook"></a> 
     
     <a href="https://www.youtube.com/channel/UCLVsMMEHLDtrRaDaZrkiSNA" target="_blank"><img src="images/youtube.png" alt="YouTube"  width="30" height="30"></a> 
     
     <a href="https://www.linkedin.com/company/7835" target="_blank"><img src="images/linkedin.png" alt="YouTube"  width="30" height="30"></a> 
     
     <a href="http://my.umbc.edu/groups/dps" target="_blank"><img src="images/myUMBC.png" alt="myUMBC" height="30"></a>
</center>
</aside>

</div>

