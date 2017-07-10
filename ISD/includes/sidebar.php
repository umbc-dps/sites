<div class="five columns">

<!--
    <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">Upcoming Event</h3>
      <p style="text-align:center">
		<strong>Program Exploration Open House</strong><br>
Wednesday, June 21, 6:00PM - 7:30PM<br>
<a href="http://umbc.edu/openhouse?utm_campaign=openhouse_summer17&utm_source=umbc.edu&utm_medium=referral&utm_content=isd_sidebar" class="btn">Save Your Spot!</a>
	</p>
    </aside>
-->

    <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">Application Deadline</h3>


      <p><strong>Summer '17 Application Deadline:</strong> April 1st<br></p>
      	<p><strong>Fall '17 Application Deadline:</strong> August 1st<br> </p>
        <a class="btn" href="http://gradschool.umbc.edu/admissions/apply">Apply Now</a>      </p>
  </aside>


    <aside class="five columns add-bottom" id="three">
      <h3 style="color:#fff;">At a Glance</h3>


      <dl>
        <dt>Location Offered</dt>


        <dd>Completely online</dd>


        <dt>Programs Offered</dt>


        <dd>Master of Arts:  Instructional Systems Development<br />
        Post-Baccalaureate Certificates: Instructional Systems Development; Instructional Technology; Distance Education</dd>


        <dt>Average Completion Time</dt>


        <dd>3-4 Years (Master’s Part Time); 1 Year (Certificate Part Time)</dd>


        <dt>Credit Hours</dt>


        <dd>36 – Master’s; 12 - Certificate</dd>


        <dt>Tuition (MD Resident)</dt>
        <dd>$621 per credit</dd>
        <dt>Tuition (Non-MD Resident)</dt>
        <dd>$1047 per credit</dd>


        <dt>Start Date</dt>


        <dd>Fall/Spring/Summer</dd><br>

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
   
   
   
      <aside  class="five columns add-bottom">
<center>
       
      <a href="https://twitter.com/ISDNow" target="_blank"><img src="images/twitter.png" alt="twitter" width="30" height="30"></a> 
      
      <a href="http://www.facebook.com/ISDNow" target="_blank"><img src="images/facebook.png"  width="30" height="30" alt="facebook"></a> 
      
      <a href="http://www.youtube.com/user/UMBCISD" target="_blank"><img src="images/youtube.png" alt="YouTube"  width="30" height="30"></a>  
      
      <a href="http://www.linkedin.com/groups/ISD-Now-2777386" target="_blank"><img src="images/linkedin.png" alt="LinkedIn"  width="30" height="30"></a> 
      
      <a href="http://my.umbc.edu" target="_blank"><img src="images/myUMBC.png" alt="myUMBC" height="30"></a>
</center>
</aside>
</div>