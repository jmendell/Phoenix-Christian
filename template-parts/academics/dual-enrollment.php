<section class="dual-enrollment">
	<div class="dual__copy-container flex-col align-center">
		<h2 class="copy-container__title section-title-text text-green capitalize"><?php the_field('dual_enrollment_section_title'); ?></h2>
		<p class="copy-container__copy bran-reg"><?php the_field('dual_enrollment_section_copy'); ?></p>
	</div>
	<div class="dual__save-container flex-col align-center">
		<h4 class="save__title uppercase text-green-dark bran-bold">save over</h4>
		<span class="save__amount bran-reg text-green">$<?php the_field('college_tuition_savings'); ?></span>
		<p class="save__copy bran-reg text-green-dark">in college tuition costs</p>
	</div>
</section>