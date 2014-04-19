  <div class="well">
    <h2 class="leadcentre lotsoftext" id="introheader">Tell us how we can help</h2>

    <div id="getpersonal">Want to get personal? Call us: +1(403)555-1234</div>

    <div class="row">
      <div class="col-md-6 col-md-offset-3">

        <form method="post" class="mobileform" name="contactform" id="contactform" action="<?=base_url() ?>contactus/sendmessage">
          <fieldset>



          <div class="control-group">
            <label class="control-label" for="name">Your Name</label>
            <div class="controls">
              <input id="name" name="name" placeholder="Your Name" class="input-xlarge" type="text" required>
              <p class="help-block">How do we address you?</p>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="contact">Contact Details</label>
            <div class="controls">
              <input id="contact" name="contact" placeholder="phone or e-mail" class="input-xlarge" type="text" required>
              <p class="help-block">Please enter an e-mail address or phone number.</p>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="question">Question or Comment</label>
            <div class="controls">                     
              <textarea id="question" name="question" required></textarea>
            </div>
          </div>

          <div class="control-group" style="margin-top: 20px">
            <label class="control-label" for="captcha">Human Only Field</label>
            <div class="controls">
              <?=recaptcha_get_html($publickey) ?>
              <p class="help-block">Please copy the words in the image into the text box. Bots, please ignore this field.</p>
            </div>
          </div>


          <div class="control-group">
            <label class="control-label" for="submitbutton"></label>
            <div class="controls">
              <button id="contactsubmit" name="submitbutton" class="btn btn-primary" type="button">Shazam!</button>
              <p class="help-block">We will only use these details to contact you in response to your query.</p>
            </div>
          </div>

          <input type="hidden" name="contacttoken" id="contacttoken" value="">


          </fieldset>
        </form>
      </div>
    </div>


</div>
