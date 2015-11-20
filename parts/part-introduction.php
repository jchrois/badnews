<?php 

$post = get_page_by_title( 'private_frontpage' );
$content = apply_filters('the_content', $post->post_content); 

?>


<section id="introduction" class="container-fluid">

	<div class="row">
		
		<div class="fullheight-content introduction-hero">
			
			<div class="hidden-xs overlay-grid"></div>
			<div class="overlay-map"></div>

			<div class="detail-txt-container">
				<div class="detail-txt detail-txt-01 vertical-txt-down">MOTION GRAPHICS</div>
				<div class="detail-txt detail-txt-02 vertical-txt-down">DIGITAL DESIGN</div>
				<div class="detail-txt detail-txt-03 vertical-txt-up">JAKOB CHRØIS</div>
				<div class="detail-txt detail-txt-04 vertical-txt-up">00 : 00 : 00</div>
			</div>


			<div class="intro-jakob hidden-xs">
				<img src="<?php echo get_template_directory_uri() . '/img/svg/intro_jakob-01.svg'; ?>">
			</div>

			<div class="intro-portfolio hidden-xs">
				<img src="<?php echo get_template_directory_uri() . '/img/svg/intro_jakob-02.svg'; ?>">
			</div>

			<div class="col-xs-12 col-md-6 col-md-offset-3 full-height">

				<div class="logo-container">
					<img class="logo-p01 logo-part" src="<?php echo get_template_directory_uri() . '/img/svg/logo_split/logo_split-01.svg'; ?>">
					<img class="logo-p02 logo-part" src="<?php echo get_template_directory_uri() . '/img/svg/logo_split/logo_split-02.svg'; ?>">
					<img class="logo-p03 logo-part" src="<?php echo get_template_directory_uri() . '/img/svg/logo_split/logo_split-03.svg'; ?>">
					<img class="logo-p04 logo-part" src="<?php echo get_template_directory_uri() . '/img/svg/logo_split/logo_split-04.svg'; ?>">
				</div>

			</div>

		</div>

	</div>
</section>


<section class="container-fluid">
	<div class="row services-row">

			<div class="mobile-title col-xs-12 visible-xs">
				<img src="<?php echo get_template_directory_uri() . '/img/svg/intro_jakob-01.svg'; ?>">
				<img src="<?php echo get_template_directory_uri() . '/img/svg/intro_jakob-02.svg'; ?>">
			</div>

		
			<div class="col-xs-12 col-md-4">
				<img class="img-responsive" src="<?php echo get_template_directory_uri() . "/img/svg/movies-mark.svg"; ?>">
				<h4>MOTION GRAPHICS</h4>
				<p>Art direction<br />Styleframe design<br />2D + 3D illustrations<br /></p>
			</div>
			<div class="col-xs-12 col-md-4">
				<img class="img-responsive" src="<?php echo get_template_directory_uri() . "/img/svg/comercials-mark.svg"; ?>">
				<h4>DIGITAL DESIGN</h4>
				<p>Art direction<br />3D + 2D illustrations</p>
			</div>
			<div class="col-xs-12 col-md-4">
				<img class="img-responsive" src="<?php echo get_template_directory_uri() . "/img/svg/game-mark.svg"; ?>">
				<h4>OTHER SERVICES</h4>
				<p>Logo + identity<br /></p>
			</div>
	</div>
</section>