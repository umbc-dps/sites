<script>
/* Diable jQuery CSS */
$('link[href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css"]').prop('disabled',true);	
	

$( "select#tfa_331" ).change(function () {
	$('select#tfa_331').find('option:selected').each(function(){
         var programName = $(this).text();
	});
		$('#forminfo tr').each(function(){
			if($(this).find('td').eq(0).text() == $( "select#tfa_331 option:selected" ).text()){
				var programCoordinator =  $(this).find('td:nth-child(3)').text();
				$("#tfa_809").val(programCoordinator).prop("readonly", true);
				var pcEmail =  $(this).find('td:nth-child(4)').text()
				$("#tfa_816").val(pcEmail).prop("readonly", true);
				var programURL =  $(this).find('td:nth-child(8)').text();
				$("#tfa_807").val(programURL).prop("readonly", true);
				var emailBody = $(this).find('td:nth-child(6)').text();
				$("#tfa_817").val(emailBody).prop("readonly", true);
				var campus =  $(this).find('td:nth-child(7)').text();
				$("#tfa_766").val(campus).prop("readonly", true);
				
			}
		});
});
	

/* Send Google ID to Salesforce */
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId).prop("readonly", true);
});

</script>


