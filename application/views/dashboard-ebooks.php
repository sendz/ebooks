<!-- Continues from dashboard -->
		<div class="col-md-9">
			<!-- Button trigger modal -->
			<button class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">
				Add Book
			</button>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<?php 
						echo form_open_multipart("dashboard/add_book");
					?>
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Modal title</h4>
						</div>
						<div class="modal-body">
							<?php
								echo form_label("eBook Title","title");
								$y = date('Y');
								$m = date('m');
								$d = date('d');
								$s = "$y-$m-$d";
								echo form_hidden("date","$s","class='form-control' required") ;
								echo form_input("title","","id='title' class='form-control' placeholder='Title of eBook' required");
								echo form_label("Description","description");
								echo "<textarea name='description' id='description' rows='3' class='form-control' placeholder='eBook Description'></textarea>";
								echo form_label("Browse File",'file');
								echo form_upload("userfile","","id='file' class='form-control' placeholder='Brose File'");
								echo form_label("Mirror Link 1","mirror1");
								echo "<input type='url' id='mirror1' name='mirror1' class='form-control' placeholder='Mirror Link 1 (Google Drive, OneDrive, Ubuntu One, box, and any other services)'/>";
								echo form_label("Mirror Link 2","mirror2");
								echo "<input type='url' id='mirror2' name='mirror2' class='form-control' placeholder='Mirror Link 2 (Google Drive, OneDrive, Ubuntu One, box, and any other services)'/>";
								echo form_label("input-category","Select Category");
								echo "<select name='category' class='form-control' placeholder='Category' required id='input-category'>";
								echo "<option readonly>Select Category</option>";
									if ($categories) {
										foreach ($categories as $data) {
											echo "<option>$data->name</option>";
										}
									}
								echo "</select>";
							?>
						</div>
						<div class="modal-footer">
							<?php echo form_submit("submit","Upload!","class='btn btn-info pull-right margin-top-10'"); ?>
						</div>
					</div><!-- /.modal-content -->
					<?php
						echo form_close();
					?>
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		<!-- Books List -->
			<table class="table table-bordered margin-top-10 table-hover">
				<colgroup style="width:20%;"></colgroup>
				<colgroup style="width:10%;"></colgroup>
				<colgroup style="width:30%;"></colgroup>
				<colgroup style="width:30%;"></colgroup>
				<colgroup style="width:10%;"></colgroup>
				<thead>
					<tr>
						<th>Posted Date</th>
						<th>Posted By</th>
						<th>Title</th>
						<th>Category</th>
						<th>Download</th>
					</tr>
				</thead>
				<tbody id="list_books">
					<?php
						if ($book) {
							foreach ($book as $data) {
								echo "	<tr>
											<td>$data->date</td>
											<td>$data->user</td>
											<td>$data->title</td>
											<td>$data->category</td>
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