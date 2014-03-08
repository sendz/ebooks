<!-- Continues from dashboard -->
		<div class="col-md-9">
			<?php

				echo form_open_multipart("dashboard/do-upload");
				echo form_label("eBook Title","title");
				echo form_input("title","","id='title' class='form-control' placeholder='Title of eBook' required");
				echo form_label("Browse File",'file');
				echo form_upload("file","","id='file' class='form-control' placeholder='Brose File'");
				echo form_label("Mirror Link 1","mirror1");
				echo "<input type='url' id='mirror1' name='mirror1' class='form-control' placeholder='Mirror Link 1 (Google Drive, OneDrive, Ubuntu One, box, and any other services)'/>";
				echo form_label("Mirror Link 2","mirror2");
				echo "<input type='url' id='mirror2' name='mirror2' class='form-control' placeholder='Mirror Link 2 (Google Drive, OneDrive, Ubuntu One, box, and any other services)'/>";
				echo form_label("category","Select Category");
				echo "<select name='category' class='form-control' placeholder='Category' required id='category'>";
				echo "<option readonly>Select Category</option>";
					if ($categories) {
						foreach ($categories as $data) {
							echo "<option>$data->name</option>";
						}
					}
				echo "</select>";
				echo form_submit("submit","Upload!","class='btn btn-info pull-right margin-top-10'");
				echo form_close();
			?>
		</div>
	</div>
</div>