<section class="hero">
	<figure class="hero__bg-image" style="background-image:url('<?php the_field('home_background_image'); ?>');"></figure>
	<div class="video-container">
		<iframe class="home-hero-vid" src="<?php the_field('home_background_video_link'); ?>" frameborder="0"></iframe>
	</div>
	<div class="overlay"></div>
	
	<div class="hero-content-container">
		<div class="hero-copy-container">
			<h1 class="hero-tagline uppercase text-white bran-reg"><?php the_field('home_hero_tagline'); ?></h1>
			<p class="hero-copy text-white bran-reg"><?php the_field('home_hero_copy'); ?></p>
		</div>
		<div class="hero-button-container uppercase">
			<?php if( have_rows('home_hero_buttons')): ?>
				<?php while( have_rows('home_hero_buttons') ): the_row(); 
			
					$link = get_sub_field('home_hero_button_link');
					$text = get_sub_field('home_hero_button_text');
			
					?>
			
					<a href="<?=$link?>" target="_blank" class="hero-btn btn btn-white bran-bold"><?=$text?></a>
			
			
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>