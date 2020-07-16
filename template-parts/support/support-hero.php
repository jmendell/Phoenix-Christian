<section class="support-hero page-hero" style="background-image:url('<?php the_field('hero_background_image'); ?>');">
	<div class="overlay"></div>
	<div class="page-hero__content-container">
		<h1 class="page-hero__tagline hero-tagline-large uppercase bran-reg text-white"><?php the_field('hero_tagline'); ?></h1>
		<p class="page-hero__copy support-hero__copy bran-reg text-white"><?php the_field('hero_copy'); ?></p>
		<?php 
			$hero_button = get_field('hero_button_link');
		?>
		<?php if($hero_button): ?>
			<a href="<?= $hero_button ?>" target="_blank" class="support-btn btn btn-green">donate</a>
		<?php endif; ?>
	</div>
</section>