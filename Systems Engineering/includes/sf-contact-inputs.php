<script>
/* Diable jQuery CSS */
$('link[href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css"]').prop('disabled',true);

/* Set Program */
$('select#tfa_331').find('option').each(function(){
         if($(this).text() == 'Systems Engineering')
            this.selected = true;
    });

/* Set Campus */
$('select#tfa_766').find('option').each(function(){
         if($(this).text() == 'Main Campus')
            this.selected = true;
    });
	
	
/* Set Program Coordinator */
$('select#tfa_809').find('option').each(function(){
         if($(this).text() == 'Kim Edmonds - 00550000006H4PO')
            this.selected = true;
    });
	
/* Set Program Coordinator Email */
$("#tfa_816").attr("value", 'kedmonds@umbc.edu');

/* Set Program URL */
$("#tfa_807").attr("value", 'se');

/*Set Email Body */
$("#tfa_817").val('UMBC&rsquo;s Systems Engineering program addresses the real world of systems engineering by  coupling the experience of the region&rsquo;s top engineers with the expertise of UMBC&rsquo;s world-class engineering faculty. Our students experience a rich  curriculum that covers all aspects of a system&rsquo;s life cycle using  state-of-the-art principles, practices, and technologies.');

/* Send Google ID to Salesforce */
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>