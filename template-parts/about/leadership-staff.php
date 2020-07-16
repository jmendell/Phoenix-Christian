<section class="leadership-staff">
	<section class="leadership-staff__copy-container flex-col align-center">
		<h2 class="copy-container__title section-title-text text-green"><?php the_field('leadership_section_title'); ?></h2>
		<p class="copy-container__copy bran-reg"><?php the_field('leadership_section_copy'); ?></p>
	</section>
	<section class="leadership-staff__staff-container">
		<div class="staff-container__employee-container flex" id="staff_slider">
			<?php if( have_rows('staff_content')): ?>
				<?php while( have_rows('staff_content') ): the_row(); 
			
					$image = get_sub_field('staff_member_image');
					$name = get_sub_field('staff_member_name');
					$subject = get_sub_field('staff_member_subject');
					$description = get_sub_field('staff_member_description');
			
					?>
			
					<div class="employee-container__card flex-col align-center">
						<div class="image-container" style="background-image:url('<?=$image?>');"></div>
						<div class="title-container">
							<h4 class="staff-title capitalize text-green bran-med"><?=$name?></h4>
							<p class="staff-subject bran-reg"><?=$subject?></p>
						</div>
						<div class="separator"></div>
						<div class="description-container">
							<p class="staff-description"><?=$description?></p>
						</div>
					</div>
			
				<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
		<div class="staff-container__link-container flex align-center">
			<a href="<?php the_field('employment_page_link'); ?>" class="staff-container__button btn btn-green">work with us</a>
		</div>
	</section>
</section>