
<?=print_r($_POST); ?>
  <div class="well">
    <h2 class="leadcentre lotsoftext" id="introheader">Ready to Book?</h2>

    <div id="getpersonal">Tell us what times are good for you, and we will book an appointment for you. Don't forget, we
      can do this <a href="<?=base_url() ?>contactus">over the phone</a> as well.</div>

    <div class="outer-center">
      <div class="inner-center" id="howitworks">
        <p>How it works <a href="#" id="howitworksa" data-toggle="tooltip" data-placement="top" title="We aren't a big company, but instead a small team. A little song and dance is neccesary so we can group together our bookings. Thank you for your patience and keeping our fuel consumption down!"><span class="glyphicon glyphicon-question-sign"></span></a></p>
        <ol>
          <li>Let us know some details about yourself, and a range of dates and times you are available.</li>
          <li>We will select a few dates that are mutually agreeable and let you know.</li>
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

    <form class="form-horizontal" method="POST" action="<?=base_url() ?>booking" id="bookingform">
    <fieldset>

    <!-- Multiple Radios -->
    <div class="control-group">
      <label class="control-label" for="previousbook">Have you used our services before?</label>
      <div class="controls">
        <label class="radio" for="previousbook-0">
          <input type="radio" name="previousbook" class="previousbookradio" id="previousbook-0" value="Yes" required="required" <?=set_radio('previousbook', 'Yes') ?>>
          Yes
        </label>
        <label class="radio" for="previousbook-1">
          <input type="radio" name="previousbook" class="previousbookradio" id="previousbook-1" value="No" required="required" <?=set_radio('previousbook', 'No', TRUE) ?>>
          No
        </label>
      </div>
    </div>

    <?=validation_errors(); ?>

    <div class="alert alert-success alert-dismissable" id="welcomebackalert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Thanks for coming back!</strong>
      <p>To make your return visit easier, you can click the link in the e-mail you got form us last time to book again! Don't have that e-mail anymore? No problem, just fill the form out again and we will figure things out. </p>
    </div>

    <div class="row">
      <div class="col-md-6">
        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="title">Contact Name <span class="redasterix">*</span></label>
          <div class="controls">

            <select name="title" id="usertitle">
              <option value="Mr." <?=set_select('title', 'Mr.', TRUE) ?>>Mr.</option>
              <option value="Mrs." <?=set_select('title', 'Mrs.') ?>>Mrs.</option>
              <option value="Miss" <?=set_select('title', 'Miss') ?>>Miss</option>
              <option value="Ms." <?=set_select('title', 'Ms.') ?>>Ms.</option>
              <option value="Dr." <?=set_select('title', 'Dr.') ?>>Dr.</option>
              <option value="Prof." <?=set_select('title', 'Prof.') ?>>Prof.</option>
              <option value="Rev." <?=set_select('title', 'Rev.') ?>>Rev.</option>
              <option value="Mayor" <?=set_select('title', 'Mayor') ?>>His Worship</option>
              <option value="Honorable" <?=set_select('title', 'Honorable') ?>>The Honourable</option>
              <option value="Rh." <?=set_select('title', 'Rh.') ?>>The Right Honourable</option>
              <option value="govgen" <?=set_select('title', 'govgen.') ?>>His Excellency</option>
              <option value="queen" <?=set_select('title', 'queen') ?>>Her Majesty</option>
              <option value="na" <?=set_select('title', 'na') ?>>N/A</option>
            </select>


            <input id="whoname" name="whoname" type="text" placeholder="" class="input-xlarge" required="" value="<?=set_value('whoname'); ?>">
            <p class="help-block">Who we are talking to</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="phone">Phone Number <span class="redasterix">*</span></label>
          <div class="controls">
            <input id="phone" name="phone" type="text" placeholder="(403)555-1234" class="input-xlarge" required="" value="<?=set_value('phone'); ?>">
            <p class="help-block">The best number we can reach you at</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="email">E-Mail Address <span class="redasterix">*</span></label>
          <div class="controls">
            <input id="email" name="email" type="text" placeholder="you@example.com" class="input-xlarge" required="" value="<?=set_value('email'); ?>">
            <p class="help-block">The best e-mail we can reach you at</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="address">Street Address <span class="redasterix">*</span></label>
          <div class="controls">
            <input id="address" name="address" type="text" placeholder="101, 123 Fake Street NW" class="input-xlarge" required="" value="<?=set_value('address'); ?>">
            <p class="help-block">Street Address, Including Unit Number (If Applicable)</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <!-- Text input-->
        <div class="control-group">
          <label class="control-label" for="address2">Street Address 2</label>
          <div class="controls">
            <input id="address2" name="address2" type="text" placeholder="" class="input-xlarge" value="<?=set_value('address2'); ?>">
            <p class="help-block">Just in case you need more space</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
      <label class="control-label" for="postalcode">Postal Code <span class="redasterix">*</span></label>
      <div class="controls">
        <input id="bookingpostalcode" name="postalcode" type="text" placeholder="L#L #L#" class="input-xlarge" required="" value="<?=set_value('postalcode'); ?>">
        <p class="help-block">Postal Code, We can figure out the rest from this. </p>
      </div>
    </div>

    <!-- Select Basic -->
    <div class="control-group">
      <label class="control-label" for="referral">How did you find out about us?</label>
      <div class="controls">
        <select id="referral" name="referral" style="width: 200px;">
          <option value="wordofmouth" <?=set_select('referral', 'wordofmouth') ?>>Word of mouth</option>
          <option value="kijiji" <?=set_select('referral', 'kijiji') ?>>Kijiji</option>
          <option value="car" <?=set_select('referral', 'car') ?>>Our cool car</option>
          <option value="google" <?=set_select('referral', 'google') ?>>Google / Bing</option>
          <option value="advertisement" <?=set_select('referral', 'advertisement') ?>>Advertisement</option>
          <option value="cosmicrays" <?=set_select('referral', 'cosmicrays') ?>>Cosmic Rays</option>
          <option value="notlisted" <?=set_select('referral', 'notlisted') ?>>( Other / Not Listed )</option>
        </select>
      </div>
    </div>

    <!-- Textarea -->
    <div class="row">
      <div class="col-md-5">
        <div class="control-group">
          <label class="control-label" for="comment">Comment / Special Requests</label>
          <div class="controls">                     
            <textarea id="comment" name="comment" placeholder="Type anything...!" value="<?=set_value('comment'); ?>"></textarea>
          </div>
        </div>
      </div>
    </div>

    <hr class="stylishhr">

    <p>Please pick some dates and times that work for you. We will get back to you!</p>

    <div class="row">
      <div class="col-md-4">
        <div class="control-group">
          <label class="control-label" for="firstdatechoice">First Time Choice <span class="redasterix">*</span></label>
          <div class="controls">
            <input size="16" type="text"  value="<?=set_value('firstdatechoice'); ?>" name="firstdatechoice" id="firstdatechoice" placeholder="Click/Tap to select" readonly class="input-xlarge form_datetime" required="">
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="control-group">
          <label class="control-label" for="firstdatechoice-until">Until <span class="redasterix">*</span></label>
          <div class="controls">
            <input size="16" type="text"  value="<?=set_value('firstdatechoice-until'); ?>" name="firstdatechoice-until" id="firstdatechoice-until" placeholder="Select a start date and time" disabled class="input-xlarge form_timepicker" required="">
          </div>
        </div>
      </div>



    </div>
    <div class="row" style="margin-top: 30px">

      <div class="col-md-4">
        <div class="control-group">
          <label class="control-label" for="seconddatechoice">Second Time Choice</label>
          <div class="controls">
            <input size="16" type="text"  value="<?=set_value('seconddatechoice'); ?>" name="seconddatechoice" id="seconddatechoice" placeholder="Click/Tap to select" readonly class="input-xlarge form_datetime">
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="control-group">
          <label class="control-label" for="seconddatechoice-until">Until</label>
          <div class="controls">
            <input size="16" type="text"  value="<?=set_value('seconddatechoice-until'); ?>" name="seconddatechoice-until" id="seconddatechoice-until" placeholder="Select a start date and time" disabled class="input-xlarge form_timepicker">
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