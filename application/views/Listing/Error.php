<div class="alert alert-danger my-custom-alert">
	<?php echo $error ?>
</div>
<script>
	$('.my-custom-alert').each(function () {
    	$(this).delay(3000).fadeOut();
	});
</script>
	