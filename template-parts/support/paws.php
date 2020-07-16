<section class="paws">
	<div class="paws__outer-container flex-row-rev">
		<div class="paws__image-container flex-1">
			<img src="<?php the_field('paws_section_image'); ?>" alt="paws section image" class="paws__image">
		</div>
		<div class="paws__copy-container flex-col flex-1">
			<div class="paws-copy__inner-container">
				<h2 class="paws__title section-title-text text-green"><?php the_field('paws_section_title'); ?></h2>
				<p class="paws__copy bran-reg"><?php the_field('paws_section_copy'); ?></p>
				<div class="paws__btn-container">
					<a href="" class="paws__btn btn btn-green">join paws</a>
				</div>
			</div>
		</div>
	</div>
</section>