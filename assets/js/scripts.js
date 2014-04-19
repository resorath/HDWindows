// boot
$(document).ready(function(){
    $(".rslides").responsiveSlides({
    	pause: true,
    	maxwidth: "1200px"

    });

    $('#openmobilemenu').sidr({

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

$(document).ready()
{
	// check if position: fixed is supported, and if not, removed fixed positions
	if(!supportFixedPositions())
	{
		$('#commercialservices').css('background-attachment', 'scroll');
	}

}

$('#mobilenavul > li > a').click(function() {
  $.sidr('close');

});

$('#postalcodelookup').click(function() {
  $('#postalcodeerror').hide();
  $('#getstartedinvalid').hide();
  var postalcode = $('#postalcode').val();

  if(!checkPostal(postalcode))
  {
    $('#postalcodeerror').show();
    return;
  }

  $.get(config.base + "getstarted/lookuppostalcode/" + postalcode.replace(/\s+/, "") , function( data ) {

    $('#introheader').fadeOut();
    if(data == "yes")
    { 
      $('#postalcodeinput').fadeOut();
      $('#getstartedvalid').fadeIn();
    }
    if(data == "no")
    {
      $('#getstartedinvalid').fadeIn();

    }

  });


});

$('#postalcodeprivacyanchor').click(function() {
  $('#postalcodeprivacy').fadeIn();

});

$('.stage1-link').ready(function() {
  $('.windowretainer').fadeOut(1000);

});

$('#howitworks').ready(function() {
  $('#howitworksa').tooltip()
});

$('#referral').ready(function() {
  $('#referral').select2();

});

$('.form_datetime').ready(function() {
  $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'})
  .on('changeDate', function(ev){
    $('.form_datetime').datetimepicker('hide');
    var trigger = '#' + ev.target.id;
    $(trigger + '-until').removeAttr('disabled');
    $(trigger + '-until').attr('placeholder', "Click/Tap to select");
    var selecteddatetime = $(trigger).val().split(' ');
    var selectedtime = selecteddatetime[1];


    $(trigger + '-until').timepicker({ 
      'timeFormat': 'H:i',
      'step': 30,
      'maxTime': '11:30pm',
      'minTime': selectedtime,
      'showDuration': true


    });

    $(trigger + '-until').focus();
  })
});

$('#secondtimechoice').change(function() {
  
  if($(this).val() != '')
  {
    $(this).removeAttr('disabled');
    var selecteddatetime = $(this).val().split(' ');
    var selectedtime = selecteddatetime[1];


    $('#secondtimechoice').timepicker({ 
      'timeFormat': 'H:i',
      'step': 30,
      'maxTime': '11:30pm',
      'minTime': selectedtime,
      'showDuration': true


    });

  }

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

function checkPostal(postal) {
    return postal.match(/[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/);
}


$('#contactform').submit(function(event) {
  
  if($('#contacttoken').val().length > 0)
    return true;

  event.preventDefault();
  var challenge = $('#recaptcha_challenge_field').val();
  var response = $('#recaptcha_response_field').val();

  $.ajax({
    url: config.base + 'contactus/checkcaptcha/' + challenge + '/' + encodeURIComponent(response),
    dataType: 'json',
    async: false,
    success: function(data) {
    
      if(data['valid'] == 'nok')
      {
        $('#contacttoken').val('');
        alert("Captcha didn't validate");
        Recaptcha.reload();
      }
      if(data['valid'] == 'ok')
      {
        $('#contacttoken').val(data['token']);
        $("#contactform").submit();
      }
    }
  });

});


function supportFixedPositions(){
  var container = document.body;
  
  if (document.createElement && container && container.appendChild && container.removeChild) {
    var el = document.createElement('div');
    
    if (!el.getBoundingClientRect) return null;
        
    el.innerHTML = 'x';
    el.style.cssText = 'position:fixed;top:100px;';
    container.appendChild(el);

    var originalHeight = container.style.height,
        originalScrollTop = container.scrollTop;
    // In IE<=7, the window's upper-left is at 2,2 (pixels) with respect to the true client.
    // surprisely, in IE8, the window's upper-left is at -2, -2 (pixels), but other elements
    // tested is just right, so we need adjust this.
    // https://groups.google.com/forum/?fromgroups#!topic/comp.lang.javascript/zWJaFM5gMIQ
    // https://bugzilla.mozilla.org/show_bug.cgi?id=174397
    var extraTop  = document.documentElement.getBoundingClientRect().top;
    extraTop = extraTop > 0 ? extraTop : 0;

    container.style.height = '3000px';
    container.scrollTop = 500;

    var elementTop = el.getBoundingClientRect().top;
    container.style.height = originalHeight;
    
    var isSupported = (elementTop - extraTop) === 100;
    container.removeChild(el);
    container.scrollTop = originalScrollTop;

    return isSupported;
  }
  return null;
}