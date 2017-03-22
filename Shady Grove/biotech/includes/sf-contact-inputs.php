<script>
/* Diable jQuery CSS */
$('link[href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css"]').prop('disabled',true);

/* Set Program */
$('select#tfa_331').find('option').each(function(){
         if($(this).text() == 'Biotechnology')
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
$("#tfa_807").attr("value", 'shadygrove/biotech');

/*Set Email Body */
$("#tfa_817").val('UMBC&rsquo;s  Biotechnology program represents a new kind of degree designed to prepare science professionals to fill management and leadership roles in  biotechnology-related companies or agencies. This unique degree provides advanced instruction in the life sciences, along with coursework in regulatory affairs, leadership, management, and financial management in a life science-oriented business.');

/* Send Google ID to Salesforce */
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>