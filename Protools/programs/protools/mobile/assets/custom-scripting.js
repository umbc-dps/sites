$(document).ready(function() {

	$('.nav-toggle').click(function(e) {
	/*    $('.nav-collapse').toggle();*/
  });

	$('.dropdown-toggle').click(function(e) {
/*	    $('.dropdown-menu').toggle();*/
	    $(this).parent().toggleClass('active');
	    $(this).children().toggleClass('icon-expand');
	    $(this).children().toggleClass('icon-contract');
  });
});