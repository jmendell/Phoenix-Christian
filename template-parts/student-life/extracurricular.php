<section class="extracurricular">
	<div class="extra__container flex">
		<div class="extra__copy-container flex-col flex-1">
			<div class="copy__inner-container">
				<h2 class="extra__title text-green section-title-text"><?php the_field('extracurricular_section_title'); ?></h2>
				<p class="extra__copy bran-reg"><?php the_field('extracurricular_section_copy'); ?></p>
			</div>
		</div>
		<div class="extra__activities flex-1">
			<div class="activities__inner-container flex-col">
				<div class="elementary__activities activities">
					<h4 class="activities__title text-green bran-bold uppercase">elementary</h4>
					<ul class="activities__activity-container bran-med">
						<?php if( have_rows('elementary_extracurriculars_list')): ?>
							<?php while( have_rows('elementary_extracurriculars_list') ): the_row(); 
						
								$elmListItem = get_sub_field('elementary_extracurricular_single_activity');
						
								?>
						
								<li class="single__activity"><?=$elmListItem?></li>
						
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
				<div class="separator"></div>
				<div class="mid-high__activities activities">
					<h4 class="activities__title text-green bran-bold uppercase">middle & high school</h4>
					<ul class="activities__activity-container bran-med">
						<?php if( have_rows('middle_high_school_extracurriculars_list')): ?>
							<?php while( have_rows('middle_high_school_extracurriculars_list') ): the_row(); 
						
								$ms_hs_list_item = get_sub_field('middle_high_school_extracurricular_single_activity');
						
								?>
						
								<li class="single__activity"><?=$ms_hs_list_item?></li>
						
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>