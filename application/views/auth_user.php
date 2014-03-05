<?php
	#$group = array('admin','budget-control');
	$uri2 = $this->uri->segment(2);
	if (!$this->ion_auth->logged_in() && $uri2 != "login") {
		?>
			<div class="modal fade" id="auth_modal">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title">Restricted Access</h4>
			      </div>
			      <div class="modal-body">
			        <p>You must be logged in to access this page!</p>
			      </div>
			      <div class="modal-footer">
			        <a href="<?php echo base_url() . index_page(); ?>/auth/login" class="btn btn-info">Login</a>
			        <a href="<?php echo base_url() . index_page(); ?>" class="btn btn-default">Back to Home</a>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		<?php 
		#redirect('/','refresh');
	}
?>