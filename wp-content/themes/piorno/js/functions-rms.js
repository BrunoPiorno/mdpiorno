jQuery.noConflict();

jQuery(document).ready(function ($) {
	AOS.init({
		duration: 600,
		//disable: 'mobile',
	  	once: true
	});

	$(window).scroll(function(){
		var sticky = $('body'),
		scroll = $(window).scrollTop();

		if (scroll >= 10) sticky.addClass('scrolled');
		else sticky.removeClass('scrolled');
	});

	$('.hero-home__carousel').slick({
	infinite: true,
	autoplay: true,
	fade: true,
	speed: 2000,
	autoplaySpeed: 4000,
});

	$('.home__properties__carousel').slick({
	  infinite: true,
	  arrows: false,
	  dots: true
	});

	$('.responsive__btn').click(function(){
		$(this).toggleClass('open');
		$('.menu-primary-menu-container').slideToggle();
	});

	if($('section.hospitality').length) {
		setTimeout(function() {
			var minHeight = $('.hospitality__tabs__list__tab.active img').height();
			$('section.hospitality').css('min-height',minHeight);
		}, 500);
		$(window).on('resize', function(){
			setTimeout(function() {
				var minHeight = $('.hospitality__tabs__list__tab.active img').height();
				$('section.hospitality').css('min-height',minHeight);
			}, 500);
		});
	}

});
