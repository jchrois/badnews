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

					

					<div class="single-project-headerbox-container">
						
						<div class="single-project-headerbox hidden-xs">

								<div class="container-fluid">
									<div class="row">
										<div class="col-sm-6">
											<a href="<?php the_permalink() ?>">
												<h2><?php the_title(); ?></h2>
											</a>
										</div>

										<div class="col-xs-6 hidden-xs">
											<div class="openClose-bnt"></div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<span class="bold">Agency:</span> <?php the_field("agency"); ?><br />
											<span class="bold">Client:</span> <?php the_field("client"); ?><br />
											<span class="bold">Roles:</span> <?php the_field("roles"); ?>
					
										</div>

										<div class="col-sm-6">
											
										</div>

									</div>
								</div>
						</div>


					</div>

				</div>

			</div>
		</section>

		<section class="container-fluid">
			<div class="row">
				<div class="visible-xs single-project-headerbox-mobile">
					<h2><?php the_title(); ?></h2>
					<?php /* <span class="icon-square"></span> */ ?>
					Agency: <?php the_field("agency"); ?><br />
					Client: <?php the_field("client"); ?><br />
					Roles: <?php the_field("roles"); ?>
				</div>
			</div>
		</section>


		<?php
			// check if the repeater field has rows of data
			if( have_rows('sections') ):

			 	// loop through the rows of data
			    while ( have_rows('sections') ) : the_row();

					if( get_row_layout() == 'full_image' ):
					 	get_template_part('parts/project/part', 'project-image');

			        elseif( get_row_layout() == 'video' ): 
			        	get_template_part('parts/project/part', 'project-video');

			        elseif( get_row_layout() == 'title' ): 
			        	get_template_part('parts/project/part', 'project-title');

			         elseif( get_row_layout() == 'text' ): 
			        	get_template_part('parts/project/part', 'project-text');
			        	
			        endif;
       
			    endwhile;

			else :

			//echo "No sections...";

			endif;

		?>



<?php endwhile; else : ?>
	<p>MASSIVE FUCKING FAILURE. You broke the internet.</p>
<?php endif; ?>

<?php get_template_part('parts/part', 'contact'); ?>

<?php get_footer(); ?>