(function($) {
$(document).ready(function() { 
	$(':input').blur(function () {
		if($(this).val().length > 0) {
			ga('send', 'event', 'webinarRegistrationForm', 'completed', $(this).attr('name'));
		} 
		else {
			ga('send', 'event', 'webinarRegistrationForm', 'skipped', $(this).attr('name'));
		}
	});
});
})(jQuery);