$(document).ready(function(event) {
	$('.card').on('show.bs.collapse', function(event) {
		$(this).find('.accordion-button i').toggleClass('rotate');
	});

	$('.card').on('hide.bs.collapse', function(event) {
		$(this).find('.accordion-button i').toggleClass('rotate');
	});
});