<section class="student-life-slider">
	<div class="student-life__slide-container">
		<div class="student-life__slide-inner-container">
			<?php if( have_rows('slider_content')): ?>
				<?php while( have_rows('slider_content') ): the_row(); 
			
					$slide = get_sub_field('slide_image');
			
					?>
			
					<div class="slide__image-container">
						<figure class="slide__image" style="background-image:url('<?=$slide?>');"></figure>
					</div>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<?php if( have_rows('slider_content')): ?>
		<div class="student-life__retreats student-life__slide-copy">
			<?php while( have_rows('slider_content') ): the_row(); 
		
				$title = get_sub_field('slide_copy_title');
				$copy = get_sub_field('slide_copy');
		
				?>
		
					<div class="retreats__inner-container slide-copy__inner-container">
						<h4 class="retreats__title slide-copy__title bran-bold uppercase text-white"><?= $title ?></h4>
						<p class="retreats__copy slide-copy__copy bran-reg text-white"><?= $copy ?></p>
					</div>
		
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
		<div class="student-life__arrow-container"></div>
</section>