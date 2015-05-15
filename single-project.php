<?php 
	$hero_image = get_field('hero_image');
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<a title="B A D N E W S" href="<?php echo get_home_url(); ?>" class="logo-small"></a>

		<section class="container-fluid">
			<div class="row">
				<div class="fullheight-content">
					
					<div class="col-xs-12 full-height single-project-heroImage" style="background-image: url('<?php echo $hero_image['url']; ?>')">
						<div class="single-project-heroBorder"></div>
					</div>

					<div class="single-project-headerbox">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-6">
										<a href="<?php the_permalink() ?>">
											<h1 class="display-titel"><?php the_title(); ?></h1>
										</a>
									</div>

									<div class="col-xs-6">
										<div class="openClose-bnt"></div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6 single-project-role">
										<span class="icon-square"></span><p>Art direction / styleframes / motion graphics</p>
									</div>

									<div class="col-sm-6">
										<p>There is no reality except the one contained within us. That is why so many people live such an unreal life. 
										They take the images outside of them for reality and never allow the world within to assert itself.</p>
									</div>
								</div>
							</div>
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
	<p>MASSIVE FUCKING FAILURE. You broke our website, you douche.</p>
<?php endif; ?>





<?php get_template_part('parts/part', 'contact'); ?>



<?php get_footer(); ?>