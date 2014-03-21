$(document).ready(function() {


});

$('.stage1-link').click(function() {
	$('.stage1').fadeOut();

});

$('#residential-link').click(function() {
	$('#stage2-residential').fadeIn();

});

$('.stage2-link').click(function() {
	$('.stage2').fadeOut();

})

$('#residential2-link').click(function() {
	$('#stage3-residential').fadeIn();

})


$('.inputadjuster > .up').click(function() {
	var val = $('#' + $(this).data('attachedinput')).val();
	if(val == '' || isNaN(val) || (val % 1 != 0))
		val = 1;
	else
		val++;

	$('#' + $(this).data('attachedinput')).val(val);
});

$('.inputadjuster > .down').click(function() {
	var val = $('#' + $(this).data('attachedinput')).val();
	if(val == '' || isNaN(val) || (val % 1 != 0))
		val = 0;
	else
		val--;

	if(val < 1)
		val = '';

	$('#' + $(this).data('attachedinput')).val(val);
});