<div class="container">
	<div class="well">
		<?php if(array_key_exists("e", $_GET)): ?>
	          <div class="alert alert-danger alert-big">
	            <i class="fa fa-envelope-o"></i> The best way to report e-mails is using the technical form below. We will get in touch with you. 
	          </div>
	    <?php endif ?>

		<h2 class="leadcentre lotsoftext" id="introheader">Thanks for helping make things better!</h2>
		<div class="alert alert-info">


			
			<p>Thanks for reporting an issue with the website, these reports help make things better around here. Details about your browsing session will be sent along with your message below for evaluation. </p>
			<p>This form is only for technical issues. For business related inquiries, please use the <a href="<?=base_url() ?>contactus">regular contact form</a>. Thanks!</p>
		</div>

		<a href="#" class="protipanchor"><i class="fa fa-magic"></i> We have magically captured details about your browsing session and will include these in the report. Click here to see them.</a>
		<div class="protip well">
			<p>The following information will be included and used for diagnostics. You don't need to include it in your report.</p>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-responsive">
					<tr>
						<th>Key</th>
						<th>Description</th>
						<th>Value</th>
					</tr>
					<tr>
						<td>Referer</td>
						<td>The last page you visited, most likely the one with the problem.</td>
						<td><?=$_SESSION['ref'] ?>
					</tr>
					<tr>
						<td>User Agent</td>
						<td>The browser you are using to access our site, including the version and operating system.</td>
						<td><?=$_SERVER['HTTP_USER_AGENT'] ?>
					</tr>
					<tr>
						<td>Remote Address</td>
						<td>Your IP address, a virtual address pointing to your internet service provider.</td>
						<td><?=$_SERVER['REMOTE_ADDR'] ?>
					</tr>
				</table>
			</div>

		</div>

		<div style="height: 40px;"></div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<form method="post" class="mobileform" name="contactform" id="contactform" action="<?=base_url() ?>problem/sendmessage">
					<fieldset>



					<div class="control-group">
						<label class="control-label" for="report">Please describe the problem (optional)</label>
						<div class="controls">                     
							<textarea id="report" name="report"></textarea>
							<p class="help-block">A good error report describes what you were doing when the problem occured, what you expected to happen, and what actually happened. Please include error messages, text snippets, etc. Be descriptive.</p>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="contact">Contact E-Mail (optional)</label>
						<div class="controls">
							<input id="contact" name="contact" placeholder="email" class="input-xlarge" type="text">
							<p class="help-block">If you would like a follow up, please enter a valid e-mail.</p>
						</div>
					</div>

					<div class="control-group" style="margin-top: 20px">
						<label class="control-label" for="captcha">Human Only Field</label>
						<div class="form-error" id="captchaerror"></div>
						<div class="controls">
							<?=recaptcha_get_html($publickey) ?>
							<p class="help-block">Please copy the words in the image into the text box. A neccesary evil.</p>
						</div>
					</div>


					<div class="control-group">
						<label class="control-label" for="submitbutton"></label>
						<div class="controls">
							<button id="contactsubmit" name="submitbutton" class="btn btn-primary" type="submit">Submit Report!</button>
							<p class="help-block">We will only use these details to contact you in response to your query.</p>
						</div>
					</div>

					<input type="hidden" name="contacttoken" id="contacttoken" value="">


					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
