<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<section class="container-fluid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="row">

				<div class="fullheight-content single-page-section">

					<div class="col-md-6">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>

					<div class="col-md-6">
						
					</div>
				</div>

			</div>

		</section>


		<?php endwhile; ?>

<?php else: ?>
	<section>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</section>

<?php endif; ?>



<?php get_template_part('parts/part', 'contact'); ?>


<?php get_footer(); ?>
