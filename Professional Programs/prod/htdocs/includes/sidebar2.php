<div class="five columns omega add-bottom" style="float:right;"> 
<aside class="five columns add-bottom">

<h3 class="home-heading">Upcoming Event</h3>


<center>
<p><strong>UMBC Professional Programs Open House</strong><br>
Wednesday, June 21, 6:00-7:30PM<br>
<a href="http://umbc.edu/openhouse?utm_campaign=openhouse_summer17&utm_source=professionalprograms.umbc.edu&utm_medium=referral&utm_content=pp_sidebar">RSVP Now</a>

<hr style="margin-bottom:10px">
<strong>UMBC Shady Grove Cybersecurity Info Session</strong><br>
Wednesday, June 15, 6:00-7:30PM<br>
<a href="http://www.umbc.edu/shadygrove/cyber/infosession">RSVP Now</a>
</p>
</center>



</aside>

<aside class="five columns add-bottom">

<h3 class="home-heading">Past Events</h3>
         
<p>View our past info sessions &amp; webinars:</p>

<p>
<br>

<ul style="list-style-type:square; margin-left:25px">

<li>
<a href="https://www.youtube.com/watch?v=DcLtcXd_86k" class="video">Chinese Cyber Power Webinar</a>
</li>

<li>
<a href="https://www.youtube.com/watch?v=ecx3c_h-IgU"  class="video">Cybersecurity Virtual Info Session</a>
</li>
  
  
<li><a href="https://www.youtube.com/watch?v=1a8KUqejD3U"  class="video">Getting a Job in Biotechnology Webinar</a>
</li>

<li><a href="https://www.youtube.com/watch?v=ZMQH20Gj9ZU" class="video">Biotechnology Virtual Info Session</a><br />
</li>

<li><a href="https://www.youtube.com/watch?v=Iya3IKmLKio" class="video">Health IT Virtual Info Session</a><br />
</li>

<li><a href="https://www.youtube.com/watch?v=MeKNbJCejoM" class="video">DIY Remote Sensing Webinar</a><br />
</li>

<li><a href="https://www.youtube.com/watch?v=UBgR7ZKXDTg" class="video">GIS Virtual Info Session</a><br />
</li>

<li><a href="https://www.youtube.com/watch?v=e9cJTw-o06M" class="video">I/O Virtual Info Session</a><br />
</li>
</ul>

</p> 
</aside>


<aside class="five columns add-bottom" style="display:none">
        <h3 class="home-heading">Past Events</h3>
         
<p>
Watch our past virtual information sessions:</p>

<p>
<br>

<ul style="list-style-type:square; margin-left:25px">
<li><a href="https://www.youtube.com/watch?v=ZMQH20Gj9ZU" class="video">Biotechnology</a></li>
<li><a href="https://www.youtube.com/watch?v=ecx3c_h-IgU" class="video">Cybersecurity</a></li>
<li><a href="https://www.youtube.com/watch?v=Iya3IKmLKio" class="video">Health Information Technology</a></li>
<li><a href="https://www.youtube.com/watch?v=odguhEY9UDU" class="video">Engineering Management &amp; Systems Engineering</a></li>
<li><a href="https://www.youtube.com/watch?v=BNddZw1flAY" class="video">Geographic Information Systems</a></li>
</ul>
</p> 
     </aside>
      <br>

<aside class="five columns add-bottom contact" id="four">   
<h3 class="home-heading">Contact Us</h3>
<p>
<div id="form">    
        
<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
if(!isset($_GET['tfa_next'])) {
$qs = ' ';
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']));
echo file_get_contents('https://umbc.secure.force.com/form?formID=217740'.$qs);
} else {
echo file_get_contents('http://app.formassembly.com/rest'.$_GET['tfa_next'],false,$context);
}
?>
</div>
</p>

<script>
$('#tfa_0').submit(function() {
  ga('send', 'event', 'inquiry', 'submit', 'contact_us');
});
</script>
 
 
 
  <div id="contents" style="display:none"></div>

</aside>
     
       <aside class="five columns add-bottom alumni-video">
        <h3 class="home-heading">Featured Video</h3>
         
<small>Arti Deore, Cybersecurity Graduate Program Alumnus</small>
<div class="videoWrapper">
<iframe width="338" height="232" src="//www.youtube.com/embed/Z4annhGRRuU" frameborder="0" allowfullscreen></iframe>
</div>
      </aside>    
  
