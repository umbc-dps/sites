<script>
/* Diable jQuery CSS */
$('link[href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css"]').prop('disabled',true);

/* Set Program */
$('select#tfa_331').find('option').each(function(){
         if($(this).text() == 'Data Science')
            this.selected = true;
    });

/* Set Campus */
$('select#tfa_766').find('option').each(function(){
         if($(this).text() == 'Main Campus')
            this.selected = true;
    });
	
	
/* Set Program Coordinator */
$('select#tfa_809').find('option').each(function(){
         if($(this).text() == 'Sonya Crosby - 005500000063CBi')
            this.selected = true;
    });
	
/* Set Program Coordinator Email */
$("#tfa_816").attr("value", 'scrosby@umbc.edu');

/* Set Program URL */
$("#tfa_807").attr("value", 'datascience');

/*Set Email Body */
$("#tfa_817").val("The Data Science Master’s program at UMBC prepares students from a wide range of disciplinary backgrounds for careers in data science. In the core courses, students will gain a thorough understanding of data science through classes that highlight: Machine learning, Data analysis, Data management, Ethical and legal considerations, and more.");

/* Send Google ID to Salesforce */
ga(function(tracker) {
  var clientId = tracker.get('clientId');
  $("#tfa_808").attr("value", clientId)
});
</script>