	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("#category").change(function(){
			var category = {category:$("#category").val()};
			$.ajax({
				type: "POST",
				url : "<?php echo site_url('book/select_category')?>",
				data: category,
				success: function(msg){
		    		$('#list_books').html(msg);
			        }
			    });
        });
	</script>
</body>
</html>