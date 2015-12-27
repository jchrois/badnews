<section id="projects" class="container-fluid">

	<div class="row">

				<div class="col-sm-2 hidden-xs project-titelbar fullheight-content">
					<h2>Projects</h2>
				</div>

				<div class="col-sm-10 no-padding">
					
							<div class="container-fluid">
									<div class="row">

										<div class="col-xs-12 projects-container">				
												<div class="projects-inner">
									
												<?php 
													$args = array(
													    'post_type' => 'project',
													    'posts_per_page' => -1,
														'meta_key' => 'order',
														'orderby' => 'meta_value_num',
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
															
															<a class="project-element" href="<?php the_permalink() ?>" style="background-image: url('<?php echo $heroimage['url']; ?>');"><h4><?php the_title(); ?></h4></a> 

														<?php $counter++; ?>



													<?php endif; ?>

														

												<?php endwhile; else : ?>
													<?php /* NO PROJECTS */ ?>

												<?php endif; ?>
											
											
												</div>
									</div>

							</div>
					
				</div>
			
	</div>

</section>