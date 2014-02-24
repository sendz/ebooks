<div class="container">
	<div class="row">
		<div class="col-xs-4 col-xs-offset-8">
			<form class="form-inline">
				<select name="category" class="form-control" style="">
					<option readonly>Select Category</option>
					<?php 
						if ($category) {
							foreach ($category as $cat) {
								echo "<option value='$cat->name'>$cat->name</option>";
							}
						}
					?>
				</select>
				<input type="text" name="keyword" class="form-control" placeholder="Search">
			</form>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-xs-12">
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
				<tbody>
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
													<a data-toggle='dropdown' class='btn btn-info dropdown-toggle' href='#'>Download Links <span class='caret'></span></a>
													<ul class='dropdown-menu'>
														<li><a href='$data->file'>Direct Link</a></li>
														<li><a href='$data->mirror1'>Mirror Link</a></li>
														<li><a href='$data->mirror2'>Mirror Link</a></li>
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