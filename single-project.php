<?php 
	$hero_image = get_field('hero_image');
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<a title="J. CHROIS" href="<?php echo get_home_url(); ?>" class="logo-small"></a>

		<section class="container-fluid">
			<div class="row">
				
				<div class="fullheight-content">
					
					<div class="col-xs-12 full-height single-project-heroImage" style="background-image: url('<?php echo $hero_image['url']; ?>')"></div>
					
					<div class="single-project-headerbox-container">
						
						<div class="single-project-headerbox container-fluid hidden-xs">

							<div class="row">
								<div class="col-sm-6">
									<div class="small-cross"></div>
									<a href="<?php the_permalink() ?>">
										<h2><?php the_title(); ?></h2>
									</a>
								</div>

								<div class="col-sm-3 col-md-offset-2">
									<span class="bold">Agency</span> <?php the_field("agency"); ?><br />
									<span class="bold">Client</span> <?php the_field("client"); ?><br />
									<span class="bold">Roles</span> <?php the_field("roles"); ?>
								</div>

							</div>
						</div>


					</div>

				</div>

			</div>
		</section>

		<section class="container-fluid visible-xs ">
			<div class="row">
				<div class="single-project-headerbox-mobile">
					<div class="small-cross"></div>
					<h2><?php the_title(); ?></h2>
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

			         elseif( get_row_layout() == 'text' ): 
			        	get_template_part('parts/project/part', 'project-text');

			        elseif( get_row_layout() == 'gallery' ): 
			        	get_template_part('parts/project/part', 'project-gallery');
			        	
			        endif;
       
			    endwhile;

			else :

			//echo "No sections...";

			endif;

		?>



<?php endwhile; else : ?>
	<p>MASSIVE FUCKING FAILURE. You broke the internet.</p>
<?php endif; ?>



<section class="container-fluid single-project-nextprev">
	<div class="row full-height">
		<div class="col-sm-6 next-bnt hidden-xs full-height"><?php next_post_link("%link", "<span>Next</span><br/> %title"); ?></div>
		<div class="col-sm-6 prev-bnt hidden-xs full-height"><?php previous_post_link("%link","<span>Previous</span><br/> %title"); ?></div>

		<div class="col-xs-6 next-bnt visible-xs full-height"><?php next_post_link("%link", "<span>Next</span>"); ?></div>
		<div class="col-xs-6 prev-bnt visible-xs full-height"><?php previous_post_link("%link","<span>Previous</span>"); ?></div>
	</div>
</section>



<?php get_template_part('parts/part', 'contact'); ?>

<?php get_footer(); ?>