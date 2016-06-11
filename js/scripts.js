$(function(){

console.log('Like what you see? Get in touch! Contact me at hello@cjreyes.ca')

	// Scroll Reveal
	window.sr = ScrollReveal();
	sr.reveal('figure', {duration: 500, distance: '25px', easing: 'linear'});

	// Hamburger menu functionality
	$('.hamburger').on('click', function(){
		$(this).toggleClass('open');
		$('.responsiveNav').toggleClass('show');
	});

	$('.responsiveNav a').on('click', function(){
		$('.responsiveNav').removeClass('show');
		$('.hamburger').removeClass('open');
	})

	// Back button on 404
	$('button.back').on('click', function(){
		window.history.back();
	})
});