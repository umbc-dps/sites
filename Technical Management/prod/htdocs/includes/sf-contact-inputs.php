<script>
/* Diable jQuery CSS */
$('link[href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css"]').prop('disabled',true);

/* Set Program */
$('select#tfa_331').find('option').each(function(){
         if($(this).text() == 'Technical Management')
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
$("#tfa_807").attr("value", 'techm');

/*Set Email Body */
$("#tfa_817").val("UMBC's Technology Management program is built around a core set of six courses that provide the foundational knowledge in leadership, communications, ethics and project management. The core courses are supplemented with technically-oriented courses in entrepreneurship, international project management, and organizational leadership. Students can also earn certificates in systems engineering, and cyber security along with the Master’s degree.");

/* Send Google ID to Salesforce */
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>