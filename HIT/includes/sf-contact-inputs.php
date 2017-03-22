<script>
/* Diable jQuery CSS */
$('link[href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css"]').prop('disabled',true);

/* Set Program */
$('select#tfa_331').find('option').each(function(){
         if($(this).text() == 'Health Information Technology')
            this.selected = true;
    });

/* Set Campus */
$('select#tfa_766').find('option').each(function(){
         if($(this).text() == 'Main Campus')
            this.selected = true;
    });
	
	
/* Set Program Coordinator */
$('select#tfa_809').find('option').each(function(){
         if($(this).text() == 'Lisa Gambino - 00550000006H4P4')
            this.selected = true;
    });
	
/* Set Program Coordinator Email */
$("#tfa_816").attr("value", 'gambino@umbc.edu');

/* Set Program URL */
$("#tfa_807").attr("value", 'hit');

/*Set Email Body */
$("#tfa_817").val('UMBC&rsquo;s  Health IT program is designed to prepare computer science, information systems,  and healthcare professional to fulfill positions in the Healthcare field. The  ten-course master degree combines courses in healthcare strategy, policy, and  management with technically focused courses, allowing students to leverage  their experience towards a range of opportunities within the healthcare  technology profession.');

/* Send Google ID to Salesforce */
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>