<?php
	$post = get_page_by_title( 'private_contact' );
	$contact_content = apply_filters('the_content', $post->post_content);
	$twitter = get_field('twitter', $post->ID);
	$linked = get_field('linkedin', $post->ID);
	$pinterest = get_field('pinterest', $post->ID);

?>
<section class="container-fluid contact-section">

	<div class="row">
			<div class="col-sm-6">
				<h2>Contact</h2>
				<p>Pleasantries or straight to business.</p>
				<div class="container-fluid no-padding">
					<div class="row">
						<div class="col-xs-12">
						<a class="mail-bnt" href="mailto:mail@jchrois.com">SEND E-MAIL</a>
						<a class="contact-icon contact-twitter" href="<?php echo $twitter; ?>"></a>
						<a class="contact-icon contact-linkedin" href="<?php echo $linked; ?>"></a>
						<a class="contact-icon contact-pinterest" href="<?php echo $pinterest; ?>"></a>
						</div>
					</div>
				</div>

			</div>

			<div class="col-sm-3 col-sm-offset-2">
				<h4>About</h4>
				<?php echo $contact_content; ?>
			</div>

	</div>

</section>