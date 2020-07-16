<section class="scholarships" id="scholarships">
	<div class="scholarships__tax-credit scholarship-container">
		<h2 class="tax-credit__title section-title-text text-green"><?php the_field('tax_credit_scholarship_title'); ?></h2>
		<p class="tax-credit__copy bran-reg"><?php the_field('tax_credit_scholarship_copy'); ?></p>
	</div>
	<div class="separator"></div>
	<div class="scholarship__individual scholarship-container">
		<h4 class="individual__title scholarship__title text-green bran-med"><?php the_field('individual_scholarship_section_title'); ?></h4>
		<p class="individual__copy scholarship__copy bran-reg text-green"><?php the_field('individual_scholarship_section_copy'); ?></p>
	</div>
	<div class="scholarship__overflow-plus scholarship-container">
		<div class="overflow__copy-container">
			<h4 class="overflow-plus__title scholarship__title text-green bran-med"><?php the_field('overflow_plus_seciton_title'); ?></h4>
			<p class="overflow-plus__copy scholarship__copy bran-reg text-green"><?php the_field('overflow_plus_section_copy'); ?></p>
		</div>
		<ul class="overflow-plus__bullets flex">
			<?php if( have_rows('overflowplus_qualifying_categories')): ?>
				<?php while( have_rows('overflowplus_qualifying_categories') ): the_row(); 
			
					$cat = get_sub_field('qualifying_category_copy');
			
					?>
			
					<li class="bullet__single-container flex">
						<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/12/check-mark.svg" alt="check mark" class="check-mark inject-me">
						<p class="bullet__copy bran-reg"><?=$cat?></p>
					</li>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</div>
	<div class="scholarship__corporate scholarship-container" id="sto-scholarships">
		<div class="corporate__copy-container">
			<h4 class="corporate__title scholarship__title text-green bran-med"><?php the_field('corporate_scholarship_section_title'); ?></h4>
			<p class="corporate__copy scholarship__copy text-green bran-reg"><?php the_field('corporate_scholarship_section_copy'); ?></p>
		</div>
	</div>
	<div class="scholarship__applications">
		<h4 class="scholarship-applications__title scholarship__title text-green bran-med">School Tuition Organizations</h4>
		<p class="application-container-text bran-reg">*You may apply to all of the scholarships listed below.</p>
		<ul class="application__link-outer-container flex-col">
			<?php if( have_rows('sto_scholarship_list')): ?>
				<?php while( have_rows('sto_scholarship_list') ): the_row(); 
			
					$name = get_sub_field('sto_scholarship_name');
					$link = get_sub_field('sto_scholarship_application_link');
			
					?>
			
					<li class="application__single-container flex">
						<p class="application__scholarship-title bran-reg"><?=$name?></p>
						<a href="<?=$link?>" target="_blank" class="apply__btn uppercase text-white bran-bold flex align-center">apply</a>
					</li>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</div>
</section>