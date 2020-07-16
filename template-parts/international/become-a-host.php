<section class="become-a-host">
	<div class="host__container flex">
		<div class="host__image-container flex-1">
			<img src="<?php the_field('host_family_section_image'); ?>" alt="become a host image" class="host__image">
		</div>
		<div class="host__copy-container flex-1 flex-col">
			<div class="copy__inner-container">
				<h2 class="host__title section-title-text text-green"><?php the_field('host_family_section_title'); ?></h2>
				<p class="host__copy bran-reg"><?php the_field('host_family_section_copy'); ?></p>
			</div>
			<div class="btn-container">
				<a href="<?php the_field('host_family_apply_button_link'); ?>" class="apply-btn btn btn-green">apply</a>
			</div>
		</div>
	</div>
</section>