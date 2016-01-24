
<?php

	$images = get_sub_field('gallery');

?>

<section class="container-fluid single-project-gallery">
	
	<div class="row">
		

		<?php if( $images ): ?>
		        <?php foreach( $images as $image ): ?>

		            <div class="col-sm-4 col-nopadding">
		                     <img class="img-responsive img-fill" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		            </div>

		        <?php endforeach; ?>
		<?php endif; ?>


		</div>
	</div>

</section>


