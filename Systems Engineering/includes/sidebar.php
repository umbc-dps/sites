<div class="five columns">
<!--
     <aside class="five columns add-bottom" id="one">
      <h3 style="color:#fff;">Upcoming Events</h3>


            <p style="text-align:center;">
		<strong>Program Exploration Open House</strong><br>
Wednesday, June 21, 6:00PM - 7:30PM<br>
<a href="http://umbc.edu/openhouse?utm_campaign=openhouse_summer17&utm_source=umbc.edu&utm_medium=referral&utm_content=se_sidebar" class="btn">Save Your Spot!</a>
	</p>
    </aside>
 -->   
    <aside class="five columns add-bottom" id="two" style="display:none">
      <h3 style="color:#fff;">Past Event</h3>


      <p style="text-align:center">UMBC Systems Engineering Virtual Info Session
        <a class="btn video" href="https://www.youtube.com/watch?v=odguhEY9UDU">Watch Video</a>
      </p>

    </aside>


    <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">Application Deadline</h3>      <p style="text-align:center">
<strong>Apply Now for Fall</strong><br>
Classes Begin August 30<br> <a class="btn" href="http://gradschool.umbc.edu/admissions/apply/" target="_blank">Apply Now</a>
      </p>


</aside>


    <aside class="five columns add-bottom" id="three">
      <h3 style="color:#fff;">At a Glance</h3>


      <dl>
        <dt>Location Offered</dt>


        <dd>Catonsville</dd>


        <dt>Programs Offered</dt>


        <dd>Master of Science: Systems Engineering; 
Graduate Certificate: Systems Engineering
</dd>


        <dt>Average Completion Time</dt>


        <dd>3 Years (Master’s Part Time)<br />
        1 Year (Certificate Part Time)</dd>


        <dt>Credit Hours</dt>


        <dd>30 - Master’s<br />
        12 - Certificate</dd>


        <dt>Tuition &amp; Fees (MD Resident)</dt>
        <dd>$753 per credit</dd>
        <dt>Tuition &amp; Fees (Non-MD Resident)</dt>
        <dd>$1,179 per credit</dd>


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
echo file_get_contents('https://umbc.tfaforms.net/rest/forms/view/217734'.$qs);
?>
</div>


<script>
$('aside #tfa_0').submit(function() {
  ga('send', 'event', 'inquiry', 'submit', 'request_info');
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