
<?php

	$image = get_sub_field('image');
	$device = get_sub_field('device_visibility');

?>

<section class="container-fluid single-project-image">
	
	<div class="row">
		<div class="col-xs-12 col-nopadding <?php echo $device; ?>">
			<img class="img-responsive img-fill" src="<?php echo $image['url']; ?>">
		</div>
	</div>

</section>
