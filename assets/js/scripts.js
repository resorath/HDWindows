// boot
$(document).ready(function(){
    $(".rslides").responsiveSlides({
    	pause: true,
    	maxwidth: "1200px"

    });

});

// Scrolling animations
$('.scrolllink').click(function() {
	$('html, body').animate({
		scrollTop: $('#' + $(this).data('scrolltarget')).offset().top
	}, 1000);
});