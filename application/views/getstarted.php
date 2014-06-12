
	<div class="well" id="getstartedinvalid" style="display: none;">
		<h2>Bad News Everyone...</h2>
		<p>Sorry! But the postal code you gave us isn't in our service area. </p>
		<p>But this could be our fault, you can <a href="#">contact us</a> and we will see what we can do. We can always make exceptions for you!</p>
		<p>Interested in a different area? try a different postal code below.</p>

	</div>

	<h2 class="leadcentre lotsoftext" id="introheader">Great! We just need one tiny detail...</h2>
	<div id="postalcodeinput" class="container">

		<div class="biginputlabel">What is the postal code for the location where you need us? </div>
		<div>
			<input type="text" name="postalcode" id="postalcode" placeholder="" onkeydown="if (event.keyCode == 13) document.getElementById('postalcodelookup').click()">
			<button type="button" id="postalcodelookup" class="btn btn-primary btn-large">Check <span class="glyphicon glyphicon-chevron-right"></span> </button>
			<button type="button" id="skippostalcodelookup" class="btn btn-link smallbtnlink">Skip this</button>
		</div>
		<span class="error" id="postalcodeerror">Please enter a valid Postal Code! (e.g. T2N 1N4)</span>

		<a href="#" class="protipanchor" id="postalcodeprivacyanchor"><span class="glyphicon glyphicon-chevron-down"></span> Why do we need this information?</a>
		<div class="protip well" id="postalcodeprivacy">We use your postal code to check if you are in our service area. We don't store this information unless you
			decide to book an appointment with us. We take your privacy seriously, please review our <a href="privacypolicy">privacy policy</a> or
			contact us if you have questions.</div>
	</div>

	<div class="row multichoice" id="getstartedvalid" style="display: none;">
	  <h2 class="leadcentre lotsoftext" id="getstartedselectionheader">Sweet, we can help you. How should this go down?</h2>

	  <a href="<?=base_url() ?>quote" class="stage1-link" id="quote-link">
	    <div class="col-md-3 getstartedlink" id="quote">
	      <p class="lead">Get a Online Quote</p>
	      <p class="follow">Need to figure things out, like cost? Let us give you an idea. </p>
	    </div>
	  </a>
	  <a href="<?=base_url() ?>booking" class="stage1-link" id="booking-link">
	    <div class="col-md-3 col-md-offset-1 getstartedlink" id="booking">
	      <p class="lead">Book an Appointment</p>
	      <p class="follow">Ready to go? Book online now.</p>
	    </div>
	 </a>
	  <a href="<?=base_url() ?>contactus" class="stage1-link" id="contactus-link">
	    <div class="col-md-3 col-md-offset-1 getstartedlink" id="contactus">
	      <p class="lead">Contact Us</p>
	      <p class="follow">Don't know where to go? Give us a shout.</p>
	    </div>
	  </a>

	</div>


</div>