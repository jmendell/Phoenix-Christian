<section class="our-mission flex align-center">
	<div class="our-mission__copy-container">
		<div class="our-mission-copy__inner-container">
			<h2 class="our-mission__title section-title-text capitalize text-green"><?php the_field('mission_section_title'); ?></h2>
			<p class="our-mission__copy bran-reg"><?php the_field('mission_section_copy'); ?></p>
			<a href="<?php the_field('donate_button_link'); ?>" class="our-mission__donate-button btn btn-green">learn more</a>
		</div>
	</div>
	<div class="our-mission__image-container">
		<img src="<?php the_field('mission_section_image'); ?>" alt="school drawing" class="our-mission__image">
	</div>
</section>