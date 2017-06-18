<div class="row">
	<div class="col-md-12">
		<div class="content-box-large">
			<div class="panel-heading">
				<div class="panel-title">Add Testimonial</div>

				<div class="panel-options"></div>
			</div>
			<div class="panel-body">
				<div id="rootwizard">

					<form class="form-horizontal" role="form" name="testimonial_frm"
						id="testimonial_frm">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Person
								Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="pname" name="pname"
									placeholder="Name" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Designation</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="pdesignation"
									name="pdesignation" placeholder="Designation" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Testimonial</label>
							<div class="col-sm-10">
								<textarea class="form-control" placeholder="Testimonial"
									rows="3" name="ptestimonial" id="ptestimonial" required></textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label> <input type="checkbox" name="tvisible" value="1"
										checked> Visible
									</label>
								</div>

							</div>
						</div>
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-save"></i> Submit
						</button>
						<br> <span id="testi_save" class="text-success"></span>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content-box-large">
	<div class="panel-heading">
		<div class="panel-title">Testimonials</div>
	</div>
	<div class="panel-body">
		<table cellpadding="0" cellspacing="0" border="0"
			class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Person</th>
					<th>Designation</th>
					<th>Testimonial</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="testimonial in testimonials">
					<td>{{testimonial.id}}</td>
					<td>{{testimonial.person}}</td>
					<td>{{testimonial.designation}}</td>
					<td>{{testimonial.testimonial}}</td>
					<td><button class="btn btn-primary"
							ng-click="delete_rec(testimonial.id)">
							<span class="glyphicon glyphicon-trash"></span>
						</button></td>
				</tr>

			</tbody>
		</table>
	</div>
</div>