$(document).ready(function()
{
	new MobileMenu();
	new Transition();
	new AnchorScroll();
	new Form();

	$(".hero-2 .owl-carousel").owlCarousel({
		nav: false,
		dots: true,
		items: 1,
		loop: true,
		autoplay: true,
		mouseDrag: false,
		touchDrag: false,
		pullDrag: false
	});
});