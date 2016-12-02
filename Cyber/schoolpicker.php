
	<script>
 fieldCounter = 0;
 function makeSchoolpicker(fieldname, accType)
 {
  fieldname = fieldname.replace(" ","");
  fieldname = 'tfa_'+fieldname;
  var fullNewId = fieldname + "[lookupField" + fieldCounter ;
  var idEscaped = fieldname + "\\[lookupField" + fieldCounter ;
  $("#"+fieldname).attr("name",fullNewId);//Rename old field
  $("#"+fieldname).attr("id",fullNewId);
  document.getElementById(fullNewId).value = "" ;
  // Even though it won't do anything, we need to set this on the fake field to avoid javascript errors
  var con = document.getElementById(fullNewId).getAttribute('data-condition') ;
  $("#"+fieldname+"-D").append('<input id="'+fieldname+'" name="'+fieldname+'" type="text" style="display:none;" data-condition="' + con + '">');
  var respLookup = new Array();
  $('#' + idEscaped).autocomplete(
  {
   source: function( request, response )
   {
    $.ajax(
    {
     url: "https://umbc.secure.force.com/form/form/TargetX_Eventsb__schoolPicker",
     type: "POST",
     dataType: "json",
     data: 
     {
      nl: "yes", 
      otl: "Account",
      term: request.term,
      type: accType
     },
     success: function( data )
     {
      var respJSON = data;
      for(var key in respJSON)
      {
       var row = respJSON[key];
       respLookup[row.value] = row.id;
      }
      response(data);
     }
    });
   },
   select:function(event,ui)
   {
    $("#"+fieldname).val(respLookup[ui.item.label]);
   }
  });
  $('#' + idEscaped).blur(function(){
   if ($(this).parent().parent().children('input').val()=='')
    $(this).val('');
  })


  // Validate that the hidden field actually got a value
  wFORMS.behaviors.validation.messages['clickedSchoolpicker' + fieldCounter] = "Please select a value from the dropdown";
  
  wFORMS.behaviors.validation.rules['clickedSchoolpicker' + fieldCounter] = { selector: "#"+fieldname,
   check: function(element) {
    if(document.getElementById(fieldname+"-D").className.indexOf("required")>0) {
     var c=document.getElementById(fieldname);
     if(element.value=='' || element.value==null) {
      return false ;
     }
    }
    return true;
  }};
  fieldCounter++ ;
 }
 
 function verifyFieldMatch(fieldNum1, fieldNum2) {
  var field1 = "tfa_" + fieldNum1 ;
  var field2 = "tfa_" + fieldNum2 ;
 
  wFORMS.behaviors.validation.messages['areSame' + fieldCounter] = "The given values do not match";
  
  wFORMS.behaviors.validation.rules['areSame' + fieldCounter] = { selector: "#"+field2,
   check: function(element) {
   var c=document.getElementById(field1);
   if(element.value!=c.value) {
    return false ;
   }
   return true;
  }};
  fieldCounter++ ;
 }

 function preventPaste(field) {
  fieldId = 'tfa_' + field;
  $('#'+fieldId).bind('paste', function(e) {
   e.preventDefault();
   alert('Copy/Paste not permitted.');
  });
 }
  
 $(function() {
  // Grey out submit button
  var _pv = wFORMS.behaviors.validation.onPass;
  wFORMS.behaviors.validation.onPass = function(f,e){;
   var submit = base2.DOM.Element.querySelector(document,'.actions .primaryAction[type="submit"]');
   if(e && e.type=="submit"){
    submit.setAttribute('disabled','disabled');
    submit.setAttribute('style','color: grey');
    submit.setAttribute('value','Sending...');
   }
   return _pv(f,e);
  };
 });

 function addSubmitFunc(submitFunc) {
  var _pv = wFORMS.behaviors.validation.onFail;
  wFORMS.behaviors.validation.onFail = function(f,e){;
   var submit = base2.DOM.Element.querySelector(document,'.actions .primaryAction[type="submit"]');
   if(e && e.type=="submit"){
    submitFunc() ;
   }
   return _pv(f,e);
  };
 }
 
 </script>
	<script type="text/javascript">
  if(document.domain.indexOf('force.com')>-1) {
   document.domain='force.com';
  }
  $("body").addClass("default wFormWebPage");

  if(params['loadFunc'] != null && params['loadFunc'] != '') {
   parent[params['loadFunc']]() ;
  }
 </script>
	<style>
		.ui-autocomplete {
			max-height: 100px;
			overflow-y: auto;		/* prevent horizontal scrollbar */
			overflow-x: hidden;		/* add padding to account for vertical scrollbar */
			padding-right: 20px;
			z-index: 500 !important;/* Make schoolpicker appear above masked fields below it*/
			font-size: 75%;
		}
	</style>