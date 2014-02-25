
	<?php
		if ($category) {
			foreach ($category as $data) {
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