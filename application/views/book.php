<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-7">
			<div class="row" style="margin-bottom:20px;">
				<div class="col-md-6">
					<select name="category" id="category" class="form-control" style="">
						<option value="reset_category" id="reset_category" selected>Select Category</option>
						<?php 
							if ($category) {
								foreach ($category as $cat) {
									echo "<option value='$cat->name'>$cat->name</option>";
								}
							}
						?>
					</select>
				</div>
				<div class="col-md-6">
					<form class="pull-right">
						<input type="text" name="keyword" class="form-control" placeholder="Search">
					</form>	
				</div>
			</div>
			<div class="pull-right">
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<colgroup style="width:10%;"></colgroup>
				<colgroup style="width:10%;"></colgroup>
				<colgroup style="width:30%;"></colgroup>
				<colgroup style="width:30%;"></colgroup>
				<colgroup style="width:20%;"></colgroup>
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
													<a data-toggle='dropdown' class='btn btn-xs btn-info dropdown-toggle' href='#'>Download Links <span class='caret'></span></a>
													<ul class='dropdown-menu'>";
								if ($data->file) {
									echo "
															<li><a href='$data->file'>Direct Link</a></li>
										";
								}
								if ($data->mirror1) {
									echo "
															<li><a href='$data->mirror1'>Mirror Link</a></li>
										";
								}
								if ($data->mirror2) {
									echo "
															<li><a href='$data->mirror2'>Mirror Link</a></li>
										";
								}
								echo "
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