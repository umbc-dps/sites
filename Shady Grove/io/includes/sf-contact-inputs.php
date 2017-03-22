<script>
/* Diable jQuery CSS */
$('link[href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css"]').prop('disabled',true);

/* Set Program */
$('select#tfa_331').find('option').each(function(){
         if($(this).text() == 'I/O Psychology')
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
$("#tfa_807").attr("value", 'shadygrove/io');

/*Set Email Body */
$("#tfa_817").val('The Master of Professional Studies: Industrial/Organizational Psychology Program is designed to provide advanced education to early/mid-career professionals in the  areas of human capital functions, personnel selection, and training and organizational management.');

/* Send Google ID to Salesforce */
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>