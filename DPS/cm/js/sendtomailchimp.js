	function postToMailchimp() {
		var firstname = $("#entry_1244612739").val();
		var lastname = $("#entry_1812444790").val();
		var email = $("#entry_1802771340").val();
		var instrument = $("#entry_1168853970").val();
		var startdate = $("#entry_180196229").val();
		var track = $("#entry_567277966").val();
		var questions = $("#entry_1460748176").val();

		$.ajax({
			url: "http://umbc.us8.list-manage2.com/subscribe/post",
			data: {
				"u": "9a6ba2e186beaeda5f67e47f9",
				"id": "ecf6f715b4",
				"MERGE1": firstname, 
				"MERGE2": lastname, 
				"MERGE0": email, 
				"MERGE3": instrument,
				"MERGE4": startdate,
				"MERGE5": track
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
	 
	$('#ss-form').submit(function() {
			return postToMailchimp();
			return false;
		});
