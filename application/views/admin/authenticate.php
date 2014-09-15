<div class="container">
	<div id="lock_container">
		<img src="<?=base_url() ?>assets/img/lock_outer.png" id="lock_outer">
	</div>

		<?php if(isset($autherror)): ?>
			<div class="alert alert-danger" style="margin-top: 5px;">
				<p><i class="fa fa-magic superglyph"></i> Sorry, but your authentication attempt was not correct. We attempted to summon a 10th level wizard to solve your issue, but the wizard
					was too busy.</p>
				<p><em>ERROR_10TH_LEVEL_WIZARD_TOO_BUSY</em></p>
			</div>
		<?php endif ?>

		<?=form_open('admin/doauthenticate'); ?>

		<div id="loginfields">

			<div class="control-group">
			  <div class="controls">
			    <input id="username" name="username" type="text" placeholder="Username" class="input-xlarge" required="required" autofocus="autofocus">
			  </div>
			</div>

			<div class="control-group">
			  <div class="controls">
			    <input id="password" name="password" type="password" placeholder="Password" class="input-xlarge" required="required">
			  </div>
			</div>

			<div class="control-group">
			  <div class="controls">
			    <button id="submitbtn" name="submitbtn" class="btn btn-primary">Login</button>
			  </div>
			</div>

		</div>
	</form>
</div>