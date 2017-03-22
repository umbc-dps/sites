<div class="five columns">    <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">Upcoming Event</h3>
      <p style="text-align:center">
		<strong>Program Exploration Open House</strong><br>
Saturday, April 1, 10:00AM - 12:00PM<br>
<a href="http://umbc.edu/openhouse?utm_campaign=openhouse_spring17&utm_source=umbc.edu&utm_medium=referral&utm_content=hit_sidebar" class="btn">Save Your Spot!</a>
<hr style="margin-bottom:0px">
		<p style="text-align:center">
		<strong>Lunch & Learn</strong><br>
Wednesday, March 8, 12:00PM - 1:00PM<br>
<a href="http://umbc.edu/hit/infosession" class="btn">RSVP NOW!</a>
	</p>
    </aside>


    <aside class="five columns add-bottom" id="two" style="display:none">
      <h3 style="color:#fff;">Past Event</h3>


      <p style="text-align:center"><strong>UMBC Health IT Virtual Info Session</strong>
        <a class="btn video" href="https://www.youtube.com/watch?v=Iya3IKmLKio">Watch Video</a>
      </p>
    </aside>


    <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">Application Deadline</h3>      <p style="text-align:center">
Apply Now for Fall<br>
Deadline: August 1st<br> <a class="btn" href="http://gradschool.umbc.edu/admissions/apply" target="_blank">Apply Now</a>
      </p>
</aside>


    <aside class="five columns add-bottom" id="three">
      <h3 style="color:#fff;">At a Glance</h3>


      <dl>
        <dt>Location Offered</dt>


        <dd>Catonsville</dd>


        <dt>Programs Offered</dt>


        <dd>Master’s in Professional Studies: Health Information Technology</dd>


        <dt>Average Completion Time</dt>


        <dd>3 Years (Master’s Part Time)</dd>


        <dt>Credit Hours</dt>


        <dd>30 - Master’s</dd>


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