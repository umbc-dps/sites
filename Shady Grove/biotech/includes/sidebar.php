 <div class="five columns">
     <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">Past Events</h3>
      <p style="text-align:center">
<strong>Webinar: Getting a Job in Biotechnology</strong><br />
      <a class="btn video" href="https://www.youtube.com/watch?v=1a8KUqejD3U" target="_blank">Watch Video</a>
	</p>
<hr />
<p style="text-align:center; margin-top:-15px">
<strong>UMBC Biotechnology Virtual Info Session</strong>
<br />
        <a class="btn video" href="https://www.youtube.com/watch?v=ZMQH20Gj9ZU">Watch Video</a>
      </p>
    </aside>

<aside class="five columns add-bottom" id="three">
      <h3 style="color:#fff;">At a Glance</h3>


  <dl>
    <dt>Location Offered</dt>


    <dd><a href="http://umbc.edu/biotech" target="_blank">Catonsville</a> & Rockville</dd>


    <dt>Programs Offered</dt>


    <dd>Master’s in Professional Studies: Biotechnology; Certificate in Professional Studies: Biotechnology Management; 
          Certificate in Professional Studies: Biochemical Regulatory  Engineering
    </dd>


    <dt>Average Completion Time</dt>


    <dd>3 Years (Master’s Part Time)<br />
    1 Year (Certificate Part Time)        </dd>


    <dt>Credit Hours</dt>
    <dd>30 - Master’s<br />
      12 - Certificate </dd>
    <dt>Tuition  (MD Resident)</dt>
        <dd>$603 per credit</dd>
        <dt>Tuition  (Non-MD Resident)</dt>
        <dd>$997 per credit</dd>
        <dt>Start Date</dt>
        <dd>Spring/Fall</dd><br>

    <dt style="text-align:center"><a class="btn" href="documents/programguide.pdf">Download Program Guide PDF</a></dt>
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
  ga('send', 'event', 'inquiry', 'submit', 'contact_us');
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
     <a href="http://twitter.com/umbc_dps" target="_blank"><img src="../images/twitter.png" alt="twitter" width="30" height="30"></a> 
     
     <a href="http://facebook.com/UMBCProfessionalGradPrograms" target="_blank"><img src="../images/facebook.png" width="30" height="30" alt="facebook"></a> 
     
     <a href="https://www.youtube.com/channel/UCLVsMMEHLDtrRaDaZrkiSNA" target="_blank"><img src="../images/youtube.png" alt="YouTube"  width="30" height="30"></a> 
     
     <a href="https://www.linkedin.com/company/7835" target="_blank"><img src="../images/linkedin.png" alt="YouTube"  width="30" height="30"></a> 
     
     <a href="http://my.umbc.edu/groups/dps" target="_blank"><img src="../images/myUMBC.png" alt="myUMBC" height="30"></a>
</center>
</aside>
</div>

