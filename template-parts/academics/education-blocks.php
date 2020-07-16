<section class="education-blocks">
	<?php if( have_rows('subject_blocks')): ?>
		<?php while( have_rows('subject_blocks') ): the_row(); 
	
			$img = get_sub_field('subject_image');
			$icon = get_sub_field('subject_icon');
			$name = get_sub_field('subject_name');
			$desc = get_sub_field('subject_description');
	
			?>
	
			<div class="single-education-block block-2 flex">
				<div class="education-block__image-container flex-1 flex align-center">
					<img src="<?=$img?>" alt="arts image" class="education-block__image">
				</div>
				<div class="education-block__copy-container flex-1 flex-col">
					<div class="copy-container__inner">
						<img src="<?=$icon?>" alt="arts icon" class="education-block__icon">
						<h3 class="education-block__title uppercase bran-bold text-green"><?=$name?></h3>
						<p class="education-block__copy bran-reg"><?=$desc?></p>
					</div>
				</div>
			</div>
	
		<?php endwhile; ?>
	<?php endif; ?>
</section>