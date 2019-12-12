// For the accordions within the page,
// rotate the plus icon when the card is opened.
$(document).ready(function(event) {
	$('.card').on('show.bs.collapse', function(event) {
		$(this).find('.accordion-button i').toggleClass('rotate');
	});

	$('.card').on('hide.bs.collapse', function(event) {
		$(this).find('.accordion-button i').toggleClass('rotate');
	});
});