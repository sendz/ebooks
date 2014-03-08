<?php
	$uri1 = $this->uri->segment(1);
	$uri2 = $this->uri->segment(2);
	$uri3 = $this->uri->segment(3);
	echo $uri2;
?>
<div class="container margin-top-80">
	<div class="row">
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked">
				<li class="<?php if (!$uri2) echo "active";?>"><a href="<?php echo base_url() . index_page();?>/dashboard">Dashboard</a></li>
				<li class="<?php if ($uri2 == "ebooks") echo "active";?>"><a href="<?php echo base_url() . index_page();?>/dashboard/ebooks">eBooks</a></li>
				<li class="<?php if ($uri2 == "categories") echo "active";?>"><a href="<?php echo base_url() . index_page();?>/dashboard/categories">Categories</a></li>
			</ul>
		</div>
		<!-- End here for left navigation -->