<script>
/* Diable jQuery CSS */
$('link[href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css"]').prop('disabled',true);

/* Set Program */
$('select#tfa_331').find('option').each(function(){
         if($(this).text() == 'Cybersecurity')
            this.selected = true;
    });

/* Set Campus */
$('select#tfa_766').find('option').each(function(){
         if($(this).text() == 'Shady Grove')
            this.selected = true;
    });
	
	
/* Set Program Coordinator */
$('select#tfa_809').find('option').each(function(){
         if($(this).text() == 'Rickeysha Jones - 00550000006FHKj')
            this.selected = true;
    });
	
/* Set Program Coordinator Email */
$("#tfa_816").attr("value", 'rcjones@umbc.edu');

/* Set Program URL */
$("#tfa_807").attr("value", 'shadygrove/cyber');

/*Set Email Body */
$("#tfa_817").val('UMBC&rsquo;s  Cybersecurity program reflects the interdisciplinary nature of the modern cybersecurity environment offering students the necessary educational  experience required for successful and effective cybersecurity practice in today&rsquo;s  workforce. Since our program blends both the technical and non-technical  aspects of cybersecurity, our graduates share a common understanding of the  operational cybersecurity environment and also have the opportunity to expand  their knowledge on specific cybersecurity interests.');

/* Send Google ID to Salesforce */
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>