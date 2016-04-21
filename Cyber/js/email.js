    $('#forminfo tr').each(function(){
        if($(this).find('td').eq(0).text() == programname){		
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
        }
    });

var val = $("#program option#" + programname).val();
$('#program').val(val);

var programtitle = val.replace('\(Main\)','').replace('\(Shady Grove\)','').trim();
$('#programtitle').val(programtitle);


var patharray = window.location.pathname.split( '/' );
var url = patharray[1];
var url1 = patharray[2];

if (url == 'shadygrove') {
	$('#url').val('shadygrove/'+url1);
	var val7 = 'http://www.umbc.edu/shadygrove/'+url1+'/documents/programguide.pdf'
	var val8 = 'http://www.umbc.edu/shadygrove/'+url1+'/documents/planningform.pdf'
	$('#programguide').val(val7);
	$('#planningform').val(val8);
	}
	else { 
	$('#url').val(url);
	var val9 = 'http://www.umbc.edu/'+url+'/documents/programguide.pdf'
	var val10 = 'http://www.umbc.edu/'+url+'/documents/planningform.pdf'
	$('#programguide').val(val9);
	$('#planningform').val(val10);
	};

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