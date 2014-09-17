if($('#lock_outer').length > 0)
{
	var angle = 0;
    setInterval(function(){
          angle-=0.03;
         $("#lock_outer").rotate(angle);
    },10);
}

$('.admin-apply-change').click(function(){

	var changekey = $(this).data("change");
	var changeval = $('#' + changekey).val();

	$.get( config.base + "admin/applyChange/" + encodeURIComponent(changekey) + "/?v=" + encodeURIComponent(changeval), function( data ) {
	  if(data == "okay")
	  {
	  	$('#' + changekey).css('background-color', '#AAFFAA');
	  	$('#butler').show();
	  	$('#butler').fadeOut(1000);
	  }
	  else
	  {
	  	alert("Save wasn't successful. :(");
	  }
	});
})