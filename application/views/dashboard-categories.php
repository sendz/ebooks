<!-- Continues from dashboard -->
		<div class="col-md-9">
			<!-- Button trigger modal -->
			<button class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">
				Add Category
			</button>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<?php 
						echo form_open_multipart("dashboard/add_category");
					?>
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Modal title</h4>
						</div>
						<div class="modal-body">
							<?php
								echo form_label("Category Name","name");
								echo form_input("name","","id='name' class='form-control' placeholder='Category Name' required");
							?>
						</div>
						<div class="modal-footer">
							<?php echo form_submit("submit","Save","class='btn btn-info pull-right margin-top-10'"); ?>
						</div>
					</div><!-- /.modal-content -->
					<?php
						echo form_close();
					?>
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
			<table class="table table-bordered margin-top-10 table-hover">
			<colgroup style="width:90%;"></colgroup>
			<colgroup style="width:10%;"></colgroup>
				<thead>
					<tr>
						<th>Category Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if ($categories) {
							foreach ($categories as $data) {
								echo 	"<tr>
											<td>$data->name</td>
											<td>
												<div class='dropdown'>
													<a data-toggle='dropdown' class='btn btn-xs btn-info dropdown-toggle' href='#'>Actions <span class='caret'></span></a>
													<ul class='dropdown-menu'>
														<li><a href='#'>Edit</a></li>
														<li><a href='#'>Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
								";
							}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>