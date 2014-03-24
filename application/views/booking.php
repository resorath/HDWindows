<div class="container" id="maincontent">

  <div class="row bigheader" id="quotebigheader">
    <div class="col-sm-4" id="logo">
      <img src="<?=base_url() ?>assets/img/badlogo.png" alt="Bad Logo">
    </div>
    <div class="col-sm-7" id="quoteheader">
      <h1 class="leadcentre" style="">Appointment</h1>
    </div>
  </div>

  <div class="smallheader" id="quotesmallheader">
    <em>HDWindows</em> | Book an Appointment
  </div>

  <div class="well">
    <h2 class="leadcentre lotsoftext" id="introheader">Ready to Book?</h2>

    <div id="getpersonal">Tell us what times are good for you, and we will book an appointment for you. Don't forget, we
      can do this <a href="<?=base_url() ?>contactus">over the phone</a> as well.</div>

    <div class="outer-center">
      <div class="inner-center" id="howitworks">
        <p>How it works <a href="#" id="howitworksa" data-toggle="tooltip" data-placement="top" title="We aren't a big company, but instead a small team. A little song and dance is neccesary so we can group together our bookings. Thank you for understand and keeping our fuel consumption down!"><span class="glyphicon glyphicon-question-sign"></span></a></p>
        <ol>
          <li>Let us know some details about yourself, and a range of dates and times you are available.</li>
          <li>We will select a few dates that work for us and let you know.</li>
          <li>You can finalize the date and time, and we will come over to give you a final quote.</li>
          <li>We agree on the quote, and work gets done.</li>
        </ol>
      </div>
    </div>
    <div class="clear"></div>

    <div style="margin-top: 40px"></div>

    <div class="alert alert-info">
      <span class="glyphicon glyphicon-tower" id="bigtower"></span> Your information is safe with us. We don't sell, rent, lease, trade for a beer or give your information to anyone, ever.
      Read more in our <a href="privacypolicy">Privacy Policy</a>.
    </div>

    <form class="form-horizontal" method="POST">
    <fieldset>

    <!-- Multiple Radios -->
    <div class="control-group">
      <label class="control-label" for="previousbook">Have you used our services before?</label>
      <div class="controls">
        <label class="radio" for="previousbook-0">
          <input type="radio" name="previousbook" id="previousbook-0" value="Yes" checked="checked" required="required">
          Yes
        </label>
        <label class="radio" for="previousbook-1">
          <input type="radio" name="previousbook" id="previousbook-1" value="No" required="required">
          No
        </label>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="email">Phone Number</label>
          <div class="controls">
            <input id="email" name="email" type="text" placeholder="(403)555-1234" class="input-xlarge" required="">
            <p class="help-block">The best number we can reach you at</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="email">E-Mail Address</label>
          <div class="controls">
            <input id="email" name="email" type="text" placeholder="you@example.com" class="input-xlarge" required="">
            <p class="help-block">The best e-mail we can reach you at</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="address">Street Address</label>
          <div class="controls">
            <input id="address" name="address" type="text" placeholder="101, 123 Fake Street NW" class="input-xlarge" required="">
            <p class="help-block">Street Address, Including Unit Number (If Applicable)</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="address2">Street Address 2</label>
          <div class="controls">
            <input id="address2" name="address2" type="text" placeholder="" class="input-xlarge">
            <p class="help-block">Just in case you need more space</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
      <label class="control-label" for="postalcode">Postal Code</label>
      <div class="controls">
        <input id="postalcode" name="postalcode" type="text" placeholder="L#L #L#" class="input-xlarge">
        <p class="help-block">Postal Code, We can figure out the rest from this. </p>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="control-group">
      <label class="control-label" for="referral">How did you find out about us?</label>
      <div class="controls">
        <select id="referral" name="referral" style="width: 200px;">
          <option value="wordofmouth">Word of mouth</option>
          <option value="kijiji">Kijiji</option>
          <option value="car">Our cool car</option>
          <option value="google">Google / Bing</option>
          <option value="advertisement">Advertisement</option>
          <option value="cosmicrays">Cosmic Rays</option>
          <option value="notlisted">( Other / Not Listed )</option>
        </select>
      </div>
    </div>

    <!-- Textarea -->
    <div class="row">
      <div class="col-md-5">
        <div class="control-group">
          <label class="control-label" for="comment">Comment / Special Requests</label>
          <div class="controls">                     
            <textarea id="comment" name="comment" placeholder="Type anything...!"></textarea>
          </div>
        </div>
      </div>
    </div>

    <hr class="stylishhr">

    <p>Please pick up to three dates and times that work for you. We will get back to you!</p>

    <div class="row">
      <div class="col-md-4">
        <div class="control-group">
          <label class="control-label" for="postalcode">First Time Choice</label>
          <div class="controls">
            <input size="16" type="text" value="" name="firstdatechoice" id="firstdatechoice" placeholder="Click/Tap to select" readonly class="input-xlarge form_datetime">
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="control-group">
          <label class="control-label" for="postalcode">Second Time Choice</label>
          <div class="controls">
            <input size="16" type="text" value="" name="seconddatechoice" id="seconddatechoice" placeholder="Click/Tap to select" readonly class="input-xlarge form_datetime">
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="control-group">
          <label class="control-label" for="postalcode">Third Time Choice</label>
          <div class="controls">
            <input size="16" type="text" value="" name="thirddatechoice" id="thirddatechoice" placeholder="Click/Tap to select" readonly class="input-xlarge form_datetime">
          </div>
        </div>
      </div>
    </div>



    <!-- Button -->
    <div class="control-group" id="bookbutton">
      <label class="control-label" for="submit"></label>
      <div class="controls">
        <button id="submit" name="submit" class="btn btn-primary btn-wide">Book!</button>
      </div>
    </div>

    </fieldset>
    </form>

    <div style="margin-top: 60px"></div>

  </div>


</div>