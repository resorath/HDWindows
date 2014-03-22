

$('#residential-link').click(function() {
	loadview('2', 'residential');
});

$('#residential2-link').click(function() {

	loadview('3', 'residential');
});

// stage = 1, 2, etc. type = residential, commercial, lightcommercial
function loadview(stage, type)
{
	for(var i = 1; i < stage; i++)
		$('.stage' + i).fadeOut();

	console.log('#stage'+stage+'-'+type);
	$('#stage'+stage+'-'+type).fadeIn();

}



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


$('.slideinput').slider({
	  min: 0,
	  max: 50,
	  value: 0,
      formater: function(value) {
        return 'Meters: '+value;
      }
});

$(".slideinput").on('slide', function(slideEvt) {
	if(slideEvt.value > 0)
		$('#' + $(this).data('attachedinput')).val(slideEvt.value);
	else
		$('#' + $(this).data('attachedinput')).val('');
});


// on hash change
$(window).hashchange( function(){
  var hash = window.location.hash;

  if(hash.indexOf("#step2/") == 0)
  {
  		var type = hash.substring(7);

  }

  if(hash.indexOf("#step3/") == 0)
  {
  		var type = hash.substring(7);

  }

 });

// on page load
$(document).ready(function() {
  var hash = window.location.hash;

  if(hash.indexOf("#step2/") == 0)
  {
  	var type = hash.substring(7);
  	loadview('2', 'residential');
	
  }

  if(hash.indexOf("#step3/") == 0)
  {
  		var type = hash.substring(7);
		loadview('3', 'residential');
  }

});

