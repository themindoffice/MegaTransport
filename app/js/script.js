$(document).ready(function()
{
	new StickyHeader();
	new MobileMenu();
	new NavSlider();
	new Search();
	new LanguageMenu();
	new Transition();
	new Accordion();
	new Tabs();
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

$(window).on('load', function() {
	new Parallax();
});