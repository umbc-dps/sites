<script>
/* Diable jQuery CSS */
$('link[href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css"]').prop('disabled',true);

/* Set Program */
$('select#tfa_331').find('option').each(function(){
         if($(this).text() == 'Geographic Information Systems')
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
$("#tfa_807").attr("value", 'shadygrove/gis');

/*Set Email Body */
$("#tfa_817").val('UMBC&rsquo;s Geographic Information Systems programs are designed for early to mid-career  professionals interested in an understanding of GIS that goes beyond &ldquo;GIS as a  tool for analysis.&rdquo; This forward-looking curriculum is developing the next  generation of GIS professionals: those who have a fundamental understanding of  the importance of geography as well as an advanced knowledge of the  technologies involved in the end-to-end development of advanced Geographic  Information Systems.');

/* Send Google ID to Salesforce */
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>