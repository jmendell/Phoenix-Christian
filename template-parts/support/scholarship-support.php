<section class="scholarship-support">
	<div class="scholarship__copy-container">
		<h2 class="scholarship__title section-title-text text-green"><?php the_field('local_scholarships_section_title'); ?></h2>
		<p class="scholarship__copy bran-reg"><?php the_field('local_scholarships_section_copy'); ?></p>
	</div>
	<div class="scholaship-list__container">
		<ul class="scholaship-list flex-col">
			<?php if( have_rows('local_scholarship_list')): ?>
				<?php while( have_rows('local_scholarship_list') ): the_row(); 
			
					$name = get_sub_field('local_scholarship_name');
					$link = get_sub_field('donation_link');
			
					?>
			
					<li class="single-scholarship flex">
						<p class="scholarship__title"><?=$name?></p>
						<a href="<?=$link?>" target="_blank" class="donate__btn uppercase text-green bran-bold">donate</a>
					</li>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</div>
</section>