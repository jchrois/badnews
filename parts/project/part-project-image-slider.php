
<?php
	
	$images = get_sub_field('images');
	//$image = get_sub_field('image');
	$device = get_sub_field('device_visibility');

?>

<section class="container-fluid single-project-image-slider <?php echo $device; ?>">
	
	<div class="row">
		<div class="col-xs-12 col-nopadding">

			<div class="slideshow">
		
			<?php if( $images ): ?>
			        <?php foreach( $images as $image ): ?>

			            <img class="img-responsive img-fill slide" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			        <?php endforeach; ?>
			<?php endif; ?>
			
			<img class="img-responsive img-fill" src="<?php echo $images[0]['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			</div>

		</div>
	</div>

</section>
