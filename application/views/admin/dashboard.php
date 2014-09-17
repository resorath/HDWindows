<div class="weakcontainer dashboard">
	<div id="admin-topbar">
		<span id="admin-top-left">Hello <?=$_SESSION['user'] ?>, Welcome to HDWindows Administrative Panel (HDAP).</span>
		<span id="admin-logout"><a href="<?=base_url() ?>/admin/Logout">Log Out</a> | <a href="#">Change Password</a></span>
	</div>

	<div class="row" id="admin-dashboardrow">
		<div class="col-sm-4">
			<div class="admin-supercol">
				<p class="admin-supercol-header">Task List</p>
				<div class="admin-col-content">

					<h5>Upcoming Jobs</h5>
					<table class="table table-striped table-condensed table-bordered">
						<tr class="success">
							<td><strong>ASSIGNED TO ME</strong><br>Sean F<br>101, 1th ave nw</td><td>Jan 1 14:30<br>1 day, 14 hours from now</td><td class="admin-actions"><a href="#" class="btn btn-primary">Details</a></td>
						</tr>
						<tr>

							<td><em>Assigned To Smith</em><br>Sean F<br>101, 1th ave nw</td><td>Jan 1 14:30<br>1 day, 14 hours from now</td><td class="admin-actions"><a href="#" class="btn btn-primary">Details</a></td>
						</tr>
						<tr>
							<td><em>Assigned to James</em><br>Sean F<br>101, 1th ave nw</td><td>Jan 1 14:30<br>1 day, 14 hours from now</td><td class="admin-actions"><a href="#" class="btn btn-primary">Details</a></td>
						</tr>
					</table>


					<h5>Booking Requests</h5>
					<table class="table table-striped table-condensed table-bordered">
						<thead>
							<tr>
								<th>Name</th><th>Date/Time</th><th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Sean F</td><td>Jan 1 14:30 +4</td><td class="admin-actions"><a href="#" class="btn btn-primary">Details</a></td>
							</tr>
							<tr>
								<td>Sean F</td><td>Jan 1 14:30 +4</td><td class="admin-actions"><a href="#" class="btn btn-primary">Details</a></td>
							</tr>
						</tbody>
					</table>

					<hr>

					<h5>Contact Requests</h5>
					<table class="table table-striped table-condensed table-bordered">
						<thead>
						<tr>
							<th>Name</th><th>Message</th><th></th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>Sean F</td><td>Koi No Baka...</td><td class="admin-actions"><a href="#" class="btn btn-primary">Read</a></td>
							</tr>
							<tr>
								<td>Sean F</td><td>Ron Paul 2018...</td><td class="admin-actions"><a href="#" class="btn btn-primary">Read</a></td>
							</tr>
						</tbody>
					</table>

					<hr>

					<h5>Online Quotes</h5>
					<table class="table table-striped table-condensed table-bordered">
						<thead>
							<tr>
								<th>Session</th><th>Total</th><th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>f9vzkm</td><td>$90.55</td><td class="admin-actions"><a href="#" class="btn btn-primary">Details</a></td>
							</tr>
							<tr>
								<td>faf32vv</td><td>$59.50</td><td class="admin-actions"><a href="#" class="btn btn-primary">Details</a></td>
							</tr>
						</tbody>
					</table>


				</div>
			</div>

		</div>

		<div class="col-sm-4">
			<div class="admin-supercol">
				<p class="admin-supercol-header">Operations</p>
				<div class="admin-col-content">
					<button type="button" class="btn btn-success btn-block"><i class="fa fa-dollar"></i> Add New Transaction</button>
					<button type="button" class="btn btn-success btn-block"><i class="fa fa-book"></i> Add New Booking</button>
					<button type="button" class="btn btn-success btn-block"><i class="fa fa-user"></i> Add New Customer</button>


				</div>
			</div>
		</div>	

		<div class="col-sm-4">
			<div class="admin-supercol">
				<p class="admin-supercol-header">Website Administration</p>
				<div class="admin-col-content">
					<h5>Manage Variables</h5>
					<div class="admin-col-content">
						<table class="table table-striped table-condensed">
							<thead>
								<tr>
									<th>Key</th><th>Value</th><th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Contact E-Mail</td><td><input type="text" name="contactemail" id="contactemail" class="form-control admin-change-input" value="<?=$dashdata->contactemail ?>"></td><td class="admin-actions"><a href="#" class="btn btn-primary admin-apply-change" data-change="contactemail">Change</a></td>
								</tr>
								<tr>
									<td>Contact Phone</td><td><input type="text" name="contactphone" id="contactphone" class="form-control admin-change-input" value="<?=$dashdata->contactphone ?>"></td><td class="admin-actions"><a href="#" class="btn btn-primary admin-apply-change" data-change="contactphone">Change</a></td>
								</tr>
							</tbody>
						</table>
					</div>

					<h5>Manage Prices</h5>
					<div class="admin-col-content">
						<table class="table table-striped table-condensed">
							<thead>
								<tr>
									<th>Key</th><th>Value</th><th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Small Single</td><td><input type="text" name="priceSmallSinglePane" id="priceSmallSinglePane" class="form-control admin-change-input" value="<?=$dashdata->priceSmallSinglePane ?>"></td><td class="admin-actions"><a href="#" class="btn btn-primary admin-apply-change" data-change="priceSmallSinglePane">Change</a></td>
								</tr>
								<tr>
									<td>Large Single</td><td><input type="text" name="priceLargeSinglePane" id="priceLargeSinglePane" class="form-control admin-change-input" value="<?=$dashdata->priceLargeSinglePane ?>"></td><td class="admin-actions"><a href="#" class="btn btn-primary admin-apply-change" data-change="priceLargeSinglePane">Change</a></td>
								</tr>
								<tr>
									<td>Small Complete</td><td><input type="text" name="priceSmallCompletePane" id="priceSmallCompletePane" class="form-control admin-change-input" value="<?=$dashdata->priceSmallCompletePane ?>"></td><td class="admin-actions"><a href="#" class="btn btn-primary admin-apply-change" data-change="priceSmallCompletePane">Change</a></td>
								</tr>
								<tr>
									<td>Large Complete</td><td><input type="text" name="priceLargeCompletePane" id="priceLargeCompletePane" class="form-control admin-change-input" value="<?=$dashdata->priceLargeCompletePane ?>"></td><td class="admin-actions"><a href="#" class="btn btn-primary admin-apply-change" data-change="priceLargeCompletePane">Change</a></td>
								</tr>
								<tr>
									<td>Tax Multiplier</td><td><input type="text" name="taxMultiplier" id="taxMultiplier" class="form-control admin-change-input" value="<?=$dashdata->taxMultiplier ?>"></td><td class="admin-actions"><a href="#" class="btn btn-primary admin-apply-change" data-change="taxMultiplier">Change</a></td>
								</tr>
							</tbody>
						</table>
					</div>	
									
					<h5>Manage Sales</h5>
					<div class="admin-col-content">
						<table class="table table-striped table-condensed">
							<thead>
								<tr>
									<th>Key</th><th>Value</th><th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Sale Multiplier (0 = no sale)</td><td><input type="text" name="saleAmount" id="saleAmount" class="form-control admin-change-input" value="<?=$dashdata->saleAmount ?>"></td><td class="admin-actions"><a href="#" class="btn btn-primary admin-apply-change" data-change="saleAmount">Change</a></td>
								</tr>
								<tr>
									<td>Sale Reason</td><td><input type="text" name="saleReason" id="saleReason" class="form-control admin-change-input" value="<?=$dashdata->saleReason ?>"></td><td class="admin-actions"><a href="#" class="btn btn-primary admin-apply-change" data-change="saleReason">Change</a></td>
								</tr>
							</tbody>
						</table>
					</div>

					<h5>Manage Content</h5>
					<div class="admin-col-content">
						Not Yet...
					</div>

				</div>
			</div>

		</div>

	</div>
</div>

<div id="butler">
	<img src="<?=base_url() ?>assets/img/butler.gif">

</div>