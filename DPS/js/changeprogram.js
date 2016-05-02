$( "select#program" ).change(function () {
    var str = "";
    $( "select#program option:selected" ).each(function() {
      str += $( this ).text() + " ";
    });
        $('#forminfo tr').each(function(){
        if($(this).find('td').eq(0).text() == $( "select#program option:selected" ).attr("id")){		
		  var val2 =  $(this).find('td:nth-child(2)').text();
		  $('#pctitle').val(val2);
          var val3 =  $(this).find('td:nth-child(3)').text();
		  $('#pc').val(val3);
		  var val4 = $(this).find('td:nth-child(4)').text();
		  $('#cc').val(val4);	  
		  var val5 = $(this).find('td:nth-child(5)').text();
		  $('#infosession').val(val5);
		  var val6 = $(this).find('td:nth-child(6)').text();
		  $('#body').val(val6);
		  var val = $( "select#program option:selected" ).val();
		  $('#program').val(val);
		  var programtitle = val.replace('\(Main\)','').replace('\(Shady Grove\)','').trim();
		  $('#programtitle').val(programtitle);
		  var changeurl = $(this).find('td:nth-child(7)').text();
		  $('#url').val(changeurl);

var patharray = window.location.pathname.split( '/' );
var url = patharray[1];
var url1 = patharray[2];

if (
changeurl == 'biotech' || 
changeurl == 'shadygrove/biotech' || 
changeurl == 'cyber' || 
changeurl == 'shadygrove/cyber' || 
changeurl == 'hit' || 
changeurl == 'engm' || 
changeurl == 'isd' || 
changeurl == 'se' ||
changeurl == 'shadygrove/gis' ||
changeurl == 'shadygrove/io'){
	
	var val9 = 'http://www.umbc.edu/'+changeurl+'/documents/programguide.pdf'
	var val10 = 'http://www.umbc.edu/'+changeurl+'/documents/planningform.pdf'
	$('#programguide').val(val9);
	$('#planningform').val(val10);
}
else {
  $('#programguide').val(''); $('#planningform').val('');
};
        }
    });
  })
  .change();


  
  // add required attribute to form inputs to force validation.
$("#dpsform").validate({
  ignore: [],
  rules: {
    email: {
      required: true,
      email: true
			}
  			}
  });
  
