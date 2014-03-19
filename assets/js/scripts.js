// boot
$(document).ready(function(){
    $(".rslides").responsiveSlides({
    	pause: true,
    	maxwidth: "1200px"

    });

});

// Scrolling navigation
$('.scrolllink').click(function() {
	var duration = Math.abs($('#' + $(this).data('scrolltarget')).offset().top / 2);
	console.log(duration);
	$('html, body').animate({
		scrollTop: $('#' + $(this).data('scrolltarget')).offset().top
	}, duration);
});


$(window).stellar({
	horizontalScrolling: false,
	verticalOffset: -40,
	responsive: true
});


/*var xpos = 180;
var lastScrollTop = $(window).scrollTop();;
$(window).scroll(function() {

   var st = $(window).scrollTop();
   var sd = st - lastScrollTop;
   console.log(st + " " + sd + " " + xpos);

	if($("#commercialservices:below-the-fold").length == 1 )
		xpos = xpos - sd;

	if(xpos < 100)
		xpos = 100;

	if(xpos > 180);
		xpos = 180;

   lastScrollTop = st;

    $('#commercialservices').css('background-position', '50% ' + xpos + '%');


});*/