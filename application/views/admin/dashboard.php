<div class="weakcontainer dashboard">
	<div id="admin-topbar">
		<span>Hello <?=$_SESSION['user'] ?>, Welcome to HDWindows Administrative Panel (HDAP).</span>
		<span id="admin-logout"><a href="<?=base_url() ?>/Admin/Logout">Log Out</a> | <a href="#">Change Password</a></span>
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
					asdfadsf


				</div>
			</div>

		</div>

	</div>
</div>