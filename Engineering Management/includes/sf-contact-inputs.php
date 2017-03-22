<script>
/* Diable jQuery CSS */
$('link[href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css"]').prop('disabled',true);

/* Set Program */
$('select#tfa_331').find('option').each(function(){
         if($(this).text() == 'Engineering Management')
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
$("#tfa_807").attr("value", 'engm');

/*Set Email Body */
$("#tfa_817").val('UMBC&rsquo;s Master of Science in Engineering Management and Certificate in Engineering  Management programs are designed for professionals interested in taking their engineering career to the next level by improving their technical, managerial  and business skills. Both programs assist professionals in maximizing their  technical and business skills which are ideally suited for engineers employed  in technology-oriented enterprises or government programs.');

/* Send Google ID to Salesforce */
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>