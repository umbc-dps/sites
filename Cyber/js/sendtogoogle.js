	function postToGoogle() {
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var email = $("#email").val();
		var address = $("#address").val();
		var city = $("#city").val();
		var state = $("#state").val();
		var zip = $("#zip").val();
		var startdate = $("#startdate").val();
		var howyouheard = $("#howyouheard").val();
		var program = $("#program").val();
		var type = $("#type").val();
		var questions = $("#questions").val();

		$.ajax({
			url: "https://docs.google.com/forms/d/1DPjabB7V6eZ17qqWk-GFXSsG_EKIcH9kW2-1366OIB4/formResponse",
			data: {
				"entry.2043034092": firstname, 
				"entry.1555015214": lastname, 
				"entry.1417278992": email, 
				"entry.1498373377": address,
				"entry.518834064": city,
				"entry.1553723854": state,
				"entry.1362897093": zip,
				"entry.307531422": startdate,
				"entry.1449239186": howyouheard,
				"entry.2050645103": program,
				"entry.254819963": type,
				"entry.473186908": questions
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
	 
	$('#dpsform').submit(function() {
			return postToGoogle();
			return false;
		});
