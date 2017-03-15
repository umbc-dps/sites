<aside class="six columns add-bottom" id="talks-form">
<h3 style="color:#fff;">Register</h3>
<?php
//Set stream options
$context = stream_context_create(array('http' => array('ignore_errors' => true)));
if(!isset($_GET['tfa_next'])) {
$qs = ' ';
if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']));
echo file_get_contents('https://umbc.secure.force.com/form?formID=217737'.$qs);
} else {
echo file_get_contents('http://app.formassembly.com/rest'.$_GET['tfa_next'],false,$context);
}
?>
</aside>



<aside class="six columns add-bottom" id="talks-form">
<h3 style="color:#fff;">Hosted By</h3>
<p style="text-align:center;">
<strong>Dr. Shariati and UMBC Graduate Cybersecurity Association at USG</strong>
</p>
</aside>

<aside class="six columns add-bottom">
<a class="btn" href="http://www.shadygrove.umd.edu/about-usg/directions-transportation">Directions/Parking</a>
</aside>

<aside class="six columns add-bottom" id="social">
<div>   
<center>  
      <a href="http://my.umbc.edu" target="_blank"><img src="../images/myUMBC.png" alt="myUMBC" height="30"></a>
       
      <a href="https://twitter.com/UMBC_DPS" target="_blank"><img src="../images/twitter.png" alt="twitter" width="30" height="30"></a> 
      
      <a href="http://www.facebook.com/UMBCatShadyGrove/" target="_blank"><img src="../images/facebook.png"  width="30" height="30" alt="facebook"></a> 
      
      <a href="https://www.youtube.com/channel/UCLVsMMEHLDtrRaDaZrkiSNA" target="_blank"><img src="../images/youtube.png" alt="YouTube"  width="30" height="30"></a>  
      
      <a href="https://www.linkedin.com/company/7835" target="_blank"><img src="../images/linkedin.png" alt="LinkedIn"  width="30" height="30"></a>  
      <br />
</center>     
</div>   
</aside>


<aside class="six columns add-bottom">
<p style="font-size:8pt;">
<strong>PLEASE NOTE:</strong>
This is a free event. Also, this event will be videotaped and photographed. 
</p>
</aside>