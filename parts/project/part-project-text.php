
<?php

	$title = get_sub_field('title');
	$content = get_sub_field('content');

?>

<section class="container-fluid single-project-text">
	
	<div class="row">
		<div class="col-md-6">
			<h4><?php echo $title; ?></h4>
		</div>

		<div class="col-md-3 col-md-offset-2">
			<div><?php echo $content; ?></div>
		</div>
	</div>

</section>
