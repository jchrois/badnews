<?php
	$post = get_page_by_title( 'private_contact' );
	$contact_content = apply_filters('the_content', $post->post_content); 
?>
<section class="container-fluid contact-section">

	<div class="row">
			<div class="col-md-6">
				<h2>Contact</h2>
				<p>Pleasantries or straight to business.</p>
				<a class="mail-bnt" href="mailto:mail@jchrois.com">SEND E-MAIL</a>
			</div>

			<div class="col-md-3 col-md-offset-2">
				<?php echo $contact_content; ?>
			</div>

	</div>

</section>