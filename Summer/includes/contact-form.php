<script src="https://rtforms.umbc.edu/jquery-validation-1.8.1/lib/jquery.js" type="text/javascript"></script>
<script src="https://rtforms.umbc.edu/jquery-validation-1.8.1/jquery.validate.js" type="text/javascript"></script>
<script src="https://rtforms.umbc.edu/jquery-validation-1.8.1/additional-methods.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function()
    {
      //console.info("In ready");
    
      var submitBtn = document.getElementById('submit');
      if (submitBtn) {              
	      $("#SendEmail").validate();
      }
	})
</script>

<script type="text/javascript">
   function check(a,b) {
      var obja = document.getElementById(a)
      var objb = document.getElementById(b)
      if (obja!= null) {
         //alert("In check a="+obja.value+"  b="+objb.value);
         if (obja.value==objb.value) {
            //document.getElementById('Phone').focus();
            //alert("Before Enabling submit");
            enableField('submit');
         } else {
            //alert("The e-mail address does not match");
            disableField('submit');
            document.getElementById('ConfirmEmail').focus();
         }
      }
   }
   
   function checkEmailFormat(eltID) {
      var inputReqEmail = document.getElementById(eltID).value;
  	   //console.info("In checkEmailFormat Email="+inputReqEmail);

      if (inputReqEmail != null && inputReqEmail != "" && inputReqEmail != " ") {
         var v = new RegExp();
         v.compile("^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+");
         if (!v.test(inputReqEmail)) {
            document.getElementById(eltID).className = 'email required error';
            //document.getElementById(eltID).focus();
            alert("Please check the format of your email address.");
            // This is needed for firefox. the change of focus needs to be delayed
            setTimeout(function() {document.getElementById(eltID).focus();},5);            
            return false;
         }
         document.getElementById(eltID).className = 'email required';
      }
      return true;
   }
   
   function checkPhone(eltID,req) {
   
      var inputReqPhone = document.getElementById(eltID).value;
  	   //console.info("In checkPhone Phone="+inputReqPhone);

      if (inputReqPhone != null && inputReqPhone != "" && inputReqPhone != " ") {

         var v = /^(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/;

         if (!v.test(inputReqPhone)) {
            v = /^[Xx]?5[0-9]{4}$/;   // Check for UMBC phone extension.
            if (!v.test(inputReqPhone)) {
               //document.getElementById(eltID).className = 'required error';
               //document.getElementById(eltID).focus();
               alert("Please check the format of your phone number. It must be a UMBC extension (5nnnn) or a standard phone number. if standard, be sure to include area code. You may use x or ext to designate an extension.");
               setTimeout(function() {document.getElementById(eltID).focus();},5);            
               return false;
            }
         }
      } else {
         if (req && inputReqPhone.length<1) {
            //document.getElementById(eltID).className = 'required error';
            //document.getElementById(eltID).focus();
            alert("The contact phone number is required.");
            setTimeout(function() {document.getElementById(eltID).focus();},5);            
            return false;
         }
      }
         
      
      return true;
   }

   
   
	function validateInput() {

   
      //console.info("In validateInput");
		/*var inputFirstName = document.getElementById('FirstName').value;
		if(inputFirstName == null || inputFirstName == "" || inputFirstName == " "){
			document.getElementById('FirstName').className = 'required error';
			document.getElementById('FirstName').focus();
			alert('Please enter a first name.');
			return false;
		}
		
		var inputLastName = document.getElementById('LastName').value;
		if(inputLastName == null || inputLastName == "" || inputLastName == " "){
			document.getElementById('LastName').className = 'required error';
			document.getElementById('LastName').focus();
			alert('Please enter a last name.');
			return false;
		}
		
		var inputEmail = document.getElementById('Email').value;
		if(inputEmail == null || inputEmail == "" || inputEmail == " "){
			document.getElementById('Email').className = 'email required error';
			document.getElementById('Email').focus();
			alert('Please enter an email address.');
			return false;
		}
		
		var inputConfirmEmail = document.getElementById('ConfirmEmail').value;
		if(inputConfirmEmail == null || inputConfirmEmail == "" || inputConfirmEmail == " "){
			document.getElementById('ConfirmEmail').className = 'email required error';
			document.getElementById('ConfirmEmail').focus();
			alert('Please confirm your email address.');
			return false;
		}*/
      
      if (!checkEmailFormat('Email')) {
         return false;
      }
		
		var inputEmail = document.getElementById('Email').value;
		var inputConfirmEmail = document.getElementById('ConfirmEmail').value;
		if (inputConfirmEmail != inputEmail) {
			document.getElementById('ConfirmEmail').className = 'email required error';
			document.getElementById('ConfirmEmail').focus();
		   alert('Email address does not match. Please confirm the email address.');
			return false;
		}
		
		/*var inputMessage = document.getElementById('Message').value;
		if(inputMessage == null || inputMessage == "" || inputMessage == " "){
			document.getElementById('Message').className = 'required error';
			document.getElementById('Message').focus();
			alert('Please enter a Message.');
			return false;
		}*/
      
      if (!checkPhone('Phone',false)) {
  	      //console.info("In validateInput checkPhone returned false");
         return false;
      }
      
			
		return true;
	}
	function removeAlert(inField,stdClass){
		document.getElementById(inField).className = stdClass;
	}
   
</script>

<script type="text/javascript">
  function enableField(name)
  {
         //alert("Enabling a="+name);
     document.getElementById(name).disabled=false;
  }
</script>

<script type="text/javascript">
  function disableField(name)
  {
     document.getElementById(name).disabled=true;
  }
</script>


<form id="SendEmail" name="SendEmail" 
onsubmit="return validateInput();" 
action="https://rtforms.umbc.edu/rt_unauthenticated/dps/dpsContact.php"
      enctype="multipart/form-data"  
      method='post' target="_blank">
   
   <table>
   <tbody>
      <tr>
         <td><strong>* I have a question about:</strong></td>
         <td>
         <select name="QuestionAbout" id="QuestionAbout" class="required">
            <option value="" selected="selected">(Select a Topic)</option>
		      <Option value="Admission">Admission</option>
		      <Option value="Application Status">Application Status</option>
		      <Option value="Course Information">Course Information</option>
		      <Option value="Syllabus or Course Description Request">Syllabus or Course Description Request</option>
		      <Option value="Course Permission / Pre-requisite Clearance">Course Permission / Pre-requisite Clearance</option>
		      <Option value="Registration / Wait Lists">Registration / Wait Lists</option>
		      <Option value="Dropping a Course / Withdrawing from the Session">Dropping a Course / Withdrawing from the Session</option>
		      <Option value="Tuition/ Billing / Fees">Tuition / Billing / Fees</option>
		      <Option value="Scholarships & Financial Aid">Scholarships & Financial Aid</option>
              <Option value="Summer STEM">Summer STEM</option>
            <Option value="Other">Other</option>
         </select>

         </td>
      </tr>   
      
	    <tr>
		<td><strong>* I am a:</strong></td>
		<td>
		   <select id='affiliate' name='affiliate' class='required'>
		      <Option value="">Please select an option
		      <Option value="Current UMBC student">Current UMBC student
		      <Option value="Visiting student from another institution">Visiting student from another institution
                      <Option value="Returning UMBC student">Returning UMBC student
                      <Option value="Newly admitted to UMBC for the fall or spring">Newly admitted to UMBC for the fall or spring
                      <Option value="Parent/ Family Member">Parent/ Family Member
		      <Option value="Other">Other
		   </select>
		</td>
	    </tr>
   	<tr>
   		<td><strong>* First Name:</strong></td>
   		<td>
   		   <input name='FirstName' id='FirstName' class='required' minlength="2"  onchange="removeAlert('FirstName','required');" />
   		</td>
   	</tr>
   	<tr>
   		<td><strong>* Last Name:</strong></td>
   		<td>
   		   <input name='LastName' id='LastName' class='required' minlength="2"  onchange="removeAlert('LastName','required');" />
   		</td>
   	</tr>
   	<tr>
   		<td><strong>* E-Mail:</strong></td>
   		<td>
   		   <input name='Email' id='Email' class='email required' type='email' onchange="removeAlert('Email','email required');" />
   		</td>
   	</tr>
   	<tr>
   		<td><strong>* Confirm E-Mail:</strong></td>
   		<td>
   		   <input name='ConfirmEmail' id='ConfirmEmail' type='email'onchange="removeAlert('ConfirmEmail','email required');" class='email required' />
   		   <!--input name='ConfirmEmail' id='ConfirmEmail' onchange="check('Email','ConfirmEmail')" class='email required' /-->
   		</td>
   	</tr>

       <tr>
     	    <td><strong>Phone:</strong></td><td><input name='Phone' id='Phone' class='phoneUS' type='tel'/></td>
   	</tr>
        	<td><strong>Attachment:</strong></td>
            <td><input type="file" name='UploadedFile' id='UploadedFile' enctype="multipart/form-data" /></td>
       </tr>
       <tr>
       <td colspan="2">
   <strong>*Message:</strong>
   		<i>Please be as specific as possible.</i><br />
   		<center><textarea name='Message' id='Message' rows='4' cols='65' class='required' onchange="removeAlert('Message','required');" ></textarea></center>
         </td>
         </tr>
         <tr>
         <td colspan="2">	 
   		<div id="submissions">
        <input type='submit' id= 'submit' name= 'submit' value="Submit" onMouseDown="ga('send', 'event', 'inquiry', 'submit', 'contact-form'); trackConversionEvent('0.00','USD');">
   		<input type='reset' value="Clear" id= 'clear'>
        </div>
        </td>
        </tr>
   	</table>
    </form>
