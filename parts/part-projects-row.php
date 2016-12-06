<section class="container-fluid projects-row-section">


	<div class="row">
		<div class="col-xs-12 project-row-titlebar"><H4>Sample projects</H4></div>
	</div>


	<div class="row">

										
		<?php 
			$args = array(
			    'post_type' => 'project',
			    'posts_per_page' => 3,
				'order' => 'DESC',
			    'tax_query' => array()

		    );

		    $counter = 0;
		    $projects = new WP_Query( $args );


		?>

		<?php if($projects->have_posts()): while($projects->have_posts()): $projects->the_post();
			$active = get_field('active');

			if($active):

				$heroimage = get_field('hero_image');
		?>	
				<div class="col-xs-4 no-padding">
					
					<a class="project-row-element" href="<?php the_permalink() ?>" style="background-image: url('<?php echo $heroimage['url']; ?>');"></a>


				<?php $counter++; ?>

				</div>

			<?php endif; ?>

				

		<?php endwhile; else : ?>
			<?php /* NO PROJECTS */ ?>

		<?php endif; ?>
												
			
	</div>

</section>