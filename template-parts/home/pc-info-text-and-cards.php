<section class="pc-info-text-and-cards">
	<div class="bg-icon">
		<?php get_template_part( 'template-parts/reusable/home-bg-icon' ); ?>
	</div>
	<section class="grade-info-cards flex">
		<?php if( have_rows('grade_card_information')): ?>
			<?php while( have_rows('grade_card_information') ): the_row(); 
		
				$img = get_sub_field('card_image');
				$gradeText = get_sub_field('grade_level_text');
				$gradeNum = get_sub_field('grades_number');
				$desc = get_sub_field('card_description');
		
				?>
		
				<div class="grade-info-card card">
					<figure class="image-container" style="background-image: url('<?=$img?>');"></figure>
					<div class="card-section">
						<h4 class="card-title uppercase bran-bold"><?=$gradeText?></h4>
						<div class="hidden-content">
							<p class="hidden__copy bran-reg"><?=$desc?></p>
							<p class="hidden__grades bran-med text-green-dark"><?=$gradeNum?></p>
						</div>
					</div>
				</div>
		
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
<!-- Growing up at PC section -->
	<section class="growing-up-pc flex-col align-center">
		<h2 class="growing-up__title section-title-text text-green"><?php the_field('section_1_title'); ?></h2>
		<p class="growing-up__copy bran-reg text-black"><?php the_field('section_1_copy'); ?></p>
		<a href="/academics" class="btn btn-green uppercase">Academics</a>
	</section>
</section>