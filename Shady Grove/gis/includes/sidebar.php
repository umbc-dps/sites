<div class="five columns">

<aside class="five columns add-bottom" id="one">
      <h3 style="color:#fff;">Upcoming Events</h3>


      <p style="text-align:center"><strong>UMBC GIS Info Session</strong><br>
      Thursday, April 6, 6-7:30 pm<br>
        <a class="btn" href="http://www.umbc.edu/shadygrove/gis/infosession" target="_blank">RSVP Now</a>
      </p>
    </aside>

    <aside class="five columns add-bottom" id="two">
      <h3 style="color:#fff;">Application Deadline</h3>


      <p style="text-align:center"><strong>Fall 2017 Application</strong><br> 
		Deadline: August 1<br>
        <a class="btn" href="http://gradschool.umbc.edu/admissions/apply" target="_blank">Apply Now</a>
      </p>
	</aside>


    <aside class="five columns add-bottom" id="three">
      <h3 style="color:#fff;">At a Glance</h3>


      <dl>
        <dt>Locations Offered</dt>


        <dd>Rockville</dd>


        <dt>Programs Offered</dt>


        <dd>Master’s in Professional Studies: GIS; Graduate Certificate in Professional Studies: GIS</dd>


        <dt>Average Completion Time</dt>


        <dd>2.5 Years (Master’s Part Time)<br />
        1 Year (Certificate Part Time)</dd>


        <dt>Credit Hours</dt>


        <dd>30 - Master’s<br />
        15 - Certificate</dd>


        <dt>Tuition  (MD Resident)</dt>


        <dd>$603 per credit</dd>


        <dt>Tuition  (Non-MD Resident)</dt>


        <dd>$997 per credit</dd>


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
     <a href="https://twitter.com/uatshadygrove" target="_blank"><img src="../images/twitter.png" alt="twitter" width="30" height="30"></a> 
     
     <a href="https://www.facebook.com/UMBCatShadyGrove" target="_blank"><img src="../images/facebook.png" width="30" height="30" alt="facebook"></a> 
     
     <a href="https://www.youtube.com/channel/UCLVsMMEHLDtrRaDaZrkiSNA" target="_blank"><img src="../images/youtube.png" alt="YouTube"  width="30" height="30"></a> 
     
     <a href="https://www.linkedin.com/company/7835" target="_blank"><img src="../images/linkedin.png" alt="YouTube"  width="30" height="30"></a> 
     
     <a href="http://my.umbc.edu/groups/dps" target="_blank"><img src="../images/myUMBC.png" alt="myUMBC" height="30"></a>
</center>
</aside>
</div>