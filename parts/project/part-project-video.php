
<?php


	$iframe = get_sub_field('video');

	preg_match('/src="(.+?)"/', $iframe, $matches);
	$src = $matches[1];

	// add extra params to iframe src
	$params = array(
	    'controls'    => 0,
	    'hd'        => 1,
	    'autohide'    => 1
	);

	$new_src = add_query_arg($params, $src);
	$iframe = str_replace($src, $new_src, $iframe);
	$attributes = 'frameborder="0"';
	$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

?>


<section class="container-fluid">

	<div class="row">
		<div class="col-xs-12 col-nopadding">
			<div class="embed-container">
			<?php echo $iframe; ?>
			</div>
		</div>
	</div>

</section>

