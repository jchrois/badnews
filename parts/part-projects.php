
<section id="projects" class="container-fluid">

	<div class="row">

				<div class="col-sm-2 hidden-xs project-titelbar fullheight-content">
					<img class="img-responsive" src="<?php echo get_template_directory_uri() . "/img/svg/logo.svg"; ?>">
					<h3>projects</h3>
				</div>

				<div class="col-sm-10 no-padding">
					
															<div class="container-fluid">
																	<div class="row">

																		<div class="col-xs-12 projects-container fullheight-content">				
																				<div class="projects-inner">
																	
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
																							

																							<a class="project-element" href="<?php the_permalink() ?>" style="background-image: url('<?php echo $heroimage['url']; ?>');">
																								<div><h4><?php the_title(); ?></h4></div>
																							</a> 


																						<?php $counter++; ?>

																				<?php endwhile; else : ?>
																					<p>No projects</p>
																				<?php endif; ?>

																				</div>
																	</div>

															</div>
					
				</div>
			
	</div>

</section>