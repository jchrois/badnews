<?php 

?>


<section class="container-fluid">

	<div class="row">
			<div class="fullheight-content">
				<div class="col-sm-2 hidden-xs project-titelbar">
					<img class="img-responsive" src="<?php echo get_template_directory_uri() . "/img/svg/badnews_mark_v1.svg"; ?>">
				</div>

				<div class="col-sm-10 full-height">
				<div class="row full-height">
					<div class="full-height">
					<?php 

						 $args = array(
					      'post_type' => 'project',
					      'tax_query' => array()
					    );

					    $counter = 0;
					    $products = new WP_Query( $args );

					?>

					<?php if($products->have_posts()): while($products->have_posts()): $products->the_post();

						$heroimage = get_field('hero_image');

					?>

								<a href="<?php the_permalink() ?>" class="col-sm-2 project-element" style="background-image: url('<?php echo $heroimage['url']; ?>');">
									<h4><?php the_title(); ?></h4>
								</a>

							<?php $counter++; ?>

					<?php endwhile; else : ?>
						<p>No projects</p>
					<?php endif; ?>
					</div>
				</div>

			</div>
	</div>

</section>