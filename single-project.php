<?php 
	$hero_image = get_field('hero_image');
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		<section class="container-fluid">
			<div class="row">
				<div class="fullheight-content">
					<div class="col-xs-12 full-height" style="background-size: cover; background-position: center; background-image: url('<?php echo $hero_image['url']; ?>')"></div>

					<div class="single-project-text">
						<a href="<?php the_permalink() ?>" class="col-sm-6">
							<h1><?php the_title(); ?></h1>
						</a>
					</div>

				</div>


			</div>
		</section>

		<?php /*
		<p><?php the_field('client'); ?></p>
		<p><?php the_field('role'); ?></p>
		*/ ?>

		<?php
			// check if the repeater field has rows of data
			if( have_rows('sections') ):

			 	// loop through the rows of data
			    while ( have_rows('sections') ) : the_row();

					 if( get_row_layout() == 'full_image' ):
					 	get_template_part('parts/project/part', 'project-image');

			        elseif( get_row_layout() == 'video' ): 
			        	get_template_part('parts/project/part', 'project-video');
			        	
			        endif;
       
			    endwhile;

			else :

			//echo "No sections...";

			endif;

		?>



<?php endwhile; else : ?>
	<p>No projects</p>
<?php endif; ?>



<?php get_footer(); ?>