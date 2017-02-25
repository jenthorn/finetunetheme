$(function(){

	$('ul.reviews').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true,
	  pageDots: false
	});

	$('.appointment-click').on('click', function() {
		$('.booking__overlay').addClass('booking__overlay--active');
		$('body, html').addClass('overlay-active');
	});

	$('.booking__overlay-close').on('click', function() {
		$('.booking__overlay').removeClass('booking__overlay--active');
		$('body, html').removeClass('overlay-active');
	});



});
