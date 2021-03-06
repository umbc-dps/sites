 <div class="five columns">

<!--
    <aside class="five columns add-bottom" id="one">
      <h3 style="color:#fff;">Upcoming Events</h3>


      <p style="text-align:center"><strong>UMBC I/O Psychology Info Session</strong><br>
      Tuesday, January 24, 2017, 6-7:30 PM<br>
        <a class="btn" href="http://www.umbc.edu/shadygrove/io/infosession" target="_blank">RSVP Now</a>
      </p>
    </aside>
-->
    
    <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">Application Deadline</h3>


      <p style="text-align:center"><strong>Fall 2018 Application</strong><br> 
		Fall 2018 applications will open later this Fall.<br>
        <!-- <a class="btn" href="http://gradschool.umbc.edu/admissions/apply" target="_blank">Apply Now</a> -->
      </p>
	</aside>



    <aside class="five columns add-bottom" id="three" style="display:none">
      <h3 style="color:#fff;">Past Event</h3>


      <p>UMBC I/O Psychology Virtual Info Session
        <a class="btn video" href="https://www.youtube.com/watch?v=ANHML0dJjYs">Watch Video</a>
      </p>
    </aside>



    <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">At a Glance</h3>
      
      <dl>
        <dt>Locations Offered</dt>


        <dd>Rockville</dd>


        <dt>Program Offered</dt>


        <dd>Master’s in Professional Studies: I/O Psychology</dd>


        <dt>Average Completion Time</dt>


        <dd>2 Years (Master’s Part Time)</dd>


        <dt>Credit Hours</dt>


        <dd>30 - Master’s</dd>


        <dt>Tuition (MD/<a href="http://regional.umbc.edu" target="_blank">Regional</a> Resident)</dt>


        <dd>$621 per credit</dd>


        <dt>Tuition  (Non-MD Resident)</dt>


        <dd>$1,047 per credit</dd>


        <dt>Start Date</dt>


        <dd>Fall</dd><br>

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
     <a href="https://twitter.com/uatshadygrove" target="_blank"><img src="../images/twitter.png" alt="twitter" width="30" height="30"></a> 
     
     <a href="https://www.facebook.com/UMBCatShadyGrove" target="_blank"><img src="../images/facebook.png" width="30" height="30" alt="facebook"></a> 
     
     <a href="https://www.youtube.com/channel/UCLVsMMEHLDtrRaDaZrkiSNA" target="_blank"><img src="../images/youtube.png" alt="YouTube"  width="30" height="30"></a> 
     
     <a href="https://www.linkedin.com/company/7835" target="_blank"><img src="../images/linkedin.png" alt="YouTube"  width="30" height="30"></a> 
     
     <a href="http://my.umbc.edu/groups/dps" target="_blank"><img src="../images/myUMBC.png" alt="myUMBC" height="30"></a>
</center>
</aside>
</div>