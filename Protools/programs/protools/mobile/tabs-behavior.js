$(document).ready(function() {

	var index = 0;
	$('ul.tab-list li').each(function() {
		if (index % 2 == 0) {
			$(this).addClass('left-tab');
		}
		index++;
	})

	$('ul.tab-list p').click(function() {
		var tabId = this.id;
		$('ul.tab-list p').each(function() {
			if (this.id == tabId) {
				$(this).addClass('default-tab')
			} else {
				$(this).removeClass('default-tab')
			}
		});

		var contentId = tabId.replace('tab','tabcontent');
		$('.tab-content').each(function() {
			if (this.id == contentId) {
				$(this).addClass('default-content')
			} else {
				$(this).removeClass('default-content')
			}
		});
	});
});