	function postToGoogle() {
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var status = (function() {
                var a = [];
                $(".status input:checked").each(function() {
                    a.push(this.value);
                });
				var d = '';
				return a+d;
            })();
		var program = $("#program").val();
		var campus = $("#campus").val();
		var graduation = $("#graduation").val();
		var story = $("#story").val();


		$.ajax({
			url: "https://docs.google.com/forms/d/e/1FAIpQLSey3OYwWPvigLb_52IBm0Y4Ibujs2NARQCQn-5c7gl26hhXDA/formResponse",
			data: {
				"entry.53539356": firstname, 
				"entry.1808844572": lastname, 
				"entry.184998313": email, 
				"entry.640401548": phone,
				"entry.2079034936": status,
				"entry.1031483771": program,
				"entry.1533758704": campus,
				"entry.980533320": graduation,
				"entry.452927371": story,
				},
			type: "POST",
			dataType: "xml",
			statusCode: {
				0: function() {
					// action
				},
				200: function() {
					// window.location.replace("thankyou.php");
				}
			}
		});
	}
	 
	$('#newsform').submit(function() {
			return postToGoogle();
			return false;
		});
