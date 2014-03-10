	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.md5.js"></script>
	<script type="text/javascript">
		$("#category").change(function(){
			var category = {category:$("#category").val()};
			var list_books = "Hahahaa";
			localStorage.list_books = list_books;
			$.ajax({
				type: "POST",
				url : "<?php echo site_url('book/select_category')?>",
				data: category,
				success: function(msg){
		    		$('#list_books').html(msg);
			    }
			});
        });
        $(function() {
		// Setup drop down menu
			$('.dropdown-toggle').dropdown();
			// Fix input element click problem
			$('.dropdown-menu input, .dropdown-menu label, .dropdown-toggle ul').click(function(e) {
				e.stopPropagation();
			});
		});
		$('#auth_modal').modal({
			backdrop: 'static',
			show: 'true',
			keyboard: 'false'
		});
		var credential = localStorage.credential;
		//document.getElementById("credential").innerHTML = credential;
		//document.getElementById("user").value = credential;
		//var md5Credential = $.md5(credential);
		document.getElementById("gravatar").src = "http://www.gravatar.com/avatar/" + md5Credential;
	</script>
</body>
</html>