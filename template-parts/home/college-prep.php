<section class="college-prep">
	<div class="prep-in-our-name">
		<h2 class="prep__title section-title-text text-green"><?php the_field('college_prep_section_title'); ?></h2>
		<p class="prep__copy text-black bran-reg"><?php the_field('college_prep_section_copy'); ?></p>
	</div>
	<div class="college-logos flex">
		<?php if( have_rows('college_logo_section')): ?>
			<?php while( have_rows('college_logo_section') ): the_row(); 
		
				//declare variables
				$logo = get_sub_field('college_logo');
		
				?>
		
				<img src="<?=$logo?>" alt="college logo" class="college-logo">
		
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>