function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();

var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

var timeToWaitForLast = 100;

jQuery(document).ready(function($) {

	$(window).resize(function() {
		var window_width = $(window).width();
		if (window_width >= 768) {
			$('#header-nav').css("display", "block");
			$('#header-nav').removeClass('active');
			$('#mobile-nav-ui').removeClass('active');
			$('#mobile-nav-ui').addClass('inactive');
			$('#tag-line').removeClass('menu-active');
		}
		else {
			if (!$('#header-nav').hasClass('active')) {
				$('#header-nav').css("display", "none");
				$('')
			}
		}
	});

	jQuery('#mobile-nav-ui').click(function() {
		if (jQuery(this).hasClass('inactive')) {
			jQuery(this).removeClass('inactive');
			jQuery(this).addClass('active');
			jQuery('#header-nav').addClass('active');
			jQuery('#header-nav').slideDown('slow');
			jQuery('#tag-line').addClass('menu-active');
		}
		else {
			jQuery('#header-nav').slideUp('slow');
			jQuery('#header-nav').removeClass('active');
			jQuery(this).removeClass('active');
			jQuery(this).addClass('inactive');
			jQuery('#tag-line').removeClass('menu-active');
		}
	});

	$('#tag-line-slider').slick({
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: false,
		slidesToScroll: 1,
		slidesToShow: 1,
		vertical: true
	});

});