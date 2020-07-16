<section class="letter-from-superintendent">
	<div class="letter__inner-container">
		<h2 class="letter__section-title section-title-text text-green"><?php the_field('letter_section_title'); ?></h2>
		<p class="letter__copy bran-reg"><?php the_field('letter_body_content'); ?></p>
		<div class="author-image-container" style="background-image:url('<?php the_field('letter_author_photo'); ?>');"></div>
		<p class="letter-copy__details"><?php the_field('letter_author_details'); ?></p>
		<img src="<?php the_field('signature'); ?>" alt="letter signature" class="signature">
	</div>
</section>