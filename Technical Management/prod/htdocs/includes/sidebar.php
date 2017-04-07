<div class="five columns">

	<aside class="five columns add-bottom" id="three">
      <h3 style="color:#fff;">Upcoming Event</h3>


      <p style="text-align:center">
<strong>Program Exploration Open House</strong><br> Wednesday, June 21, 6:00PM - 7:30PM
        <a class="btn" href="http://umbc.edu/openhouse?utm_campaign=openhouse_summer17&utm_source=umbc.edu&utm_medium=referral&utm_content=techm_sidebar">Save Your Spot</a>
      </p>
</aside>

    <aside class="five columns add-bottom" id="three">
      <h3 style="color:#fff;">Application Deadline</h3>


      <p style="text-align:center">
<strong>Fall 2017 Application Deadline:</strong><br> August 1
        <a class="btn" href="http://gradschool.umbc.edu/admissions/apply">Apply Now</a>
      </p>
</aside>




    <aside class="five columns add-bottom" id="three">
      <h3 style="color:#fff;">At a Glance</h3>


      <dl>
        <dt>Location Offered</dt>


        <dd>Catonsville </dd>


        <dt>Estimated Completion Time</dt>


        <dd>
        Up to 3 Years (Part Time)</dd>
        <dd>1 Year (Full Time)</dd>


        <dt>Credit Hours</dt>
        <dd>30 - Master's </dd>
        <dt>Tuition &amp; Fees (MD Resident)</dt>
        <dd>$733 per credit</dd>
        <dt>Tuition &amp; Fees (Non-MD Resident)</dt>
        <dd>$1127 per credit</dd>


        <dt>Start Date</dt>


        <dd>Spring/Fall</dd>
        
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