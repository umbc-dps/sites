</div><!-- /content -->
</div><!-- main -->
</div><!-- /wrap -->

<style>
.partners{
	padding:20px;
	text-align:center;
}
.partners img{
	height:75px;
}
</style>

<?php include('tracking-pixels.php'); ?>

<div class="partners">
<img src="http://www.umbc.edu/music/programs/images/avid.gif" />
<img src="http://www.umbc.edu/music/programs/images/McDSPlogo.jpg" />
</div>

<div class="footer">
    <ul>
      <li>
        <ul class="socialmedialinks">
          <li>
            <a href="https://www.facebook.com/ArtsAtUMBC" class="img-replace umbc-facebook">Facebook</a>
          </li>
          <li>
            <a href="http://www.twitter.com/artsatumbc" class="img-replace umbc-twitter">Twitter</a>
          </li>
          <li>
            <a href="http://www.youtube.com/UMBCtube" class="img-replace umbc-youtube">YouTube</a>
          </li>
          <li>
            <a href="http://my.umbc.edu/groups/dps" class="img-replace myumbc">myUMBC</a>
          </li>
        </ul>
      </li>
      <?php /* no longer needed <li>
        <a href="contact/">Contact Us</a>
      </li>
      */ ?>
      <li>
        <a href="http://www.umbc.edu/isd/?mredirect=n">View Full Site</a>
      </li>
      <li>
        <a href="http://umbc.edu/ogc/nondiscrimination.html">Equal Opportunity</a>
      </li>
    </ul>
    <address>
      &copy; University of Maryland,<br>
      Baltimore County<br>
      1000 Hilltop Circle<br>
      Baltimore, MD 21250
    </address>
  </div><!-- /footer -->

<script type="text/javascript">
  new FormValidator('contact-form', [{
    name: 'name',
    display: 'name',
    rules: 'required'
  }, {
    name: 'email',
	display: 'email',
	rules: 'required|valid_email'
  }, {
	name: 'zip',
	display: 'zip',
	rules: 'integer'
  }], function(errors, event) {
    var SELECTOR_ERRORS = $('.error-box'),
        SELECTOR_SUCCESS = $('.success-box');
        
    if (errors.length > 0) {
        SELECTOR_ERRORS.empty();

        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            SELECTOR_ERRORS.append(errors[i].message + '<br />');
        }
        
        SELECTOR_SUCCESS.css({ display: 'none' });
        SELECTOR_ERRORS.fadeIn(400);

        if (event && event.preventDefault) {
            event.preventDefault();
        } else if (event) {
            event.returnValue = false;
        }

    } else {
        SELECTOR_ERRORS.css({ display: 'none' });
        SELECTOR_SUCCESS.fadeIn(400);
    }
    
});
</script>

</body>
</html>