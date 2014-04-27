/*
$('#residential-link').click(function() {
	loadview('2', 'residential');
});

$('#residential2-link').click(function() {

	loadview('3', 'residential');

});
*/

// stage = 1, 2, etc. type = residential, commercial, lightcommercial
function loadview(stage, type)
{
	for(var i = 1; i < stage; i++)
		$('.stage' + i).fadeOut();

	console.log('#stage'+stage+'-'+type);
	$('#stage'+stage+'-'+type).fadeIn();

	$('body').scrollTop(0);

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

$('#calculatebutton').click(function(){
	var ssp = $('#input-single-smallpane').val();
	var slp = $('#input-single-largepane').val();
	var csp = $('#input-complete-smallpane').val();
	var clp = $('#input-complete-largepane').val();

	$(this).html('<i class="fa fa-cog"></i> Recalculate');

	var total = 0;

	$('#lineitems').html('');

	if(ssp != ''){$('#lineitems').append('<tr><td>Single Small Pane</td><td>' + ssp + '</td></tr>');}
	if(slp != ''){$('#lineitems').append('<tr><td>Single Large Pane</td><td>' + slp + '</td></tr>');}
	if(csp != ''){$('#lineitems').append('<tr><td>Complete Small Pane</td><td>' + csp + '</td></tr>');}
	if(clp != ''){$('#lineitems').append('<tr><td>Complete Small Pane</td><td>' + clp + '</td></tr>');}

	var subtotal = (ssp * wc.single.small) + (slp * wc.single.large) + (csp * wc.complete.small) + (clp * wc.complete.large);
	var tax = subtotal * wc.tax;
	total = subtotal + tax;


	if(total > 0)
	{
		$('#lineitems').append('<tr id="trspacer"></tr>');

		$('#lineitems').append('<tr><td>Subtotal</td><td>$' + subtotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + '</td></tr>');
		$('#lineitems').append('<tr><td>Tax</td><td>$' + tax.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + '</td></tr>');

		$('#lineitems').append('<tr id="trspacer"></tr>');

		$('#lineitems').append('<tr><td>Total</td><td>$' + total.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') + '</td></tr>');
	}
	else
	{	
		$('#lineitems').html('<tr><td>Free, like a smile!</td></tr><tr><td>(Try adding some panes and recalculate)</td></tr>');
	}
});


// on hash change
$(window).hashchange( function(){
  var hash = window.location.hash;

  if(hash.indexOf("#step2/") == 0)
  {
  		var type = hash.substring(7);
  		loadview('2', type);

  }

  if(hash.indexOf("#step3/") == 0)
  {
  		var type = hash.substring(7);
  		loadview('3', type);

  }

 });


// on page load
var hash = window.location.hash;

if(hash.indexOf("#step2/") == 0)
{
	var type = hash.substring(7);
	loadview('2', 'residential');

}
else if(hash.indexOf("#step3/") == 0)
{
	var type = hash.substring(7);
	loadview('3', 'residential');
}
else
{
	loadview('1', '');
}
