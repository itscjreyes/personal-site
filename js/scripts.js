$(function(){

console.log('Like what you see? Get in touch at hello@cjreyes.ca')

	// Scroll Reveal
	window.sr = ScrollReveal();
	sr.reveal('.about', {duration: 1000, distance: '50px', easing: 'linear'});
	sr.reveal('figure', {duration: 500, distance: '25px', easing: 'linear'});

	// Smooth Scroll
	$('nav a').smoothScroll({
		speed: 800
	});

});