
<?php

	$image = get_sub_field('image');

?>

<section class="container-fluid">
	
	<div class="row">
		<div class="col-xs-12 col-nopadding">
			<img class="img-responsive img-fill" src="<?php echo $image['url']; ?>">
		</div>
	</div>

</section>
