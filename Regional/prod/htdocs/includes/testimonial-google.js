	function postToGoogle() {
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var program = (function() {
                var a = [];
                $(".program input:checked").each(function() {
                    a.push(this.value);
                });
				var d = '';
				return a+d;
            })();
		var campus = $("#campus").val();
		var graduation = $("#graduation").val();
		var contribute = (function() {
                var b = [];
                $(".contribute input:checked").each(function() {
                    b.push(this.value);
                });
				var contributeother = $(".other").val()
				if (contributeother != '') { 
				 	var c = $(".other").val() + ',';
				}
				else {
					var c = '';
				}
				return c+b;
            })();	
		var prepare = $("#prepare").val();
		var additional = $("#additional").val();


		$.ajax({
			url: "https://docs.google.com/forms/d/e/1FAIpQLScx6dxnkg-U8jvP3pk6hoYQ9MyxGTOsnfsIGtgFBZQpUGSfig/formResponse",
			data: {
				"entry.53539356": firstname, 
				"entry.1808844572": lastname, 
				"entry.184998313": email, 
				"entry.640401548": phone,
				"entry.1031483771": program,
				"entry.1533758704": campus,
				"entry.980533320": graduation,
				"entry.2133331514": contribute,
				"entry.452927371": prepare,
				"entry.1349822473": additional
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
	 
	$('#testimonialform').submit(function() {
			return postToGoogle();
			return false;
		});
