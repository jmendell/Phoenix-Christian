<section class="dual-slider flex">
	<div class="dual-slider__text about-slider flex-1" id="text-slider__container">
		<?php if( have_rows('about_slider_content')): ?>
			<?php while( have_rows('about_slider_content') ): the_row(); 
		
				$title = get_sub_field('slide_title');
				$copy = get_sub_field('slide_copy');
				$addText = get_sub_field('slide_additional_text');
		
				?>
		
				<div class="text-slider__slide flex-col align-center">
					<h3 class="slide__title text-white bran-med"><?=$title?></h3>
					<p class="slide__copy text-white bran-reg"><?=$copy?></p>
					<div class="separator"></div>
					<p class="slide__additional-copy uppercase bran-bold text-white"><?=$addText?></p>
				</div>
		
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="dual-slider__image about-slider flex-1" id="image-slider__container">
		<?php if( have_rows('about_slider_content')): ?>
			<?php while( have_rows('about_slider_content') ): the_row(); 
		
				$image = get_sub_field('slide_image');
		
			?>
		
				<div class="image-slider__slide flex align-center">
					<img src="<?=$image?>" alt="slide image" class="slide-image">
				</div>
		
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>