$(document).ready(function() {
	$('.slide').click(function() {
		if ($('.menu').hasClass('open')) {
			$('.menu').removeClass('open');
			$('.menu').css("left", "-300");
			$('.menuSlider').css("left", "0");
			$('.arrow').removeClass('fa-angle-double-left');
			$('.arrow').addClass('fa-angle-double-right');
		} else {
			$('.menu').addClass('open');
			$('.menu').css("left", "0px");
			$('.menuSlider').css("left", "300");
			$('.arrow').removeClass('fa-angle-double-right');
			$('.arrow').addClass('fa-angle-double-left');
		}
	});
	
	$('.expand').click(function() {
		$('.menu ul li ul').css("display", "block");
	});
});