<section class="simple-process">
	<div class="simple__copy-container flex-col align-center">
		<h2 class="simple__title section-title-text text-green"><?php the_field('process_section_title'); ?></h2>
		<p class="simple__copy bran-reg"><?php the_field('process_section_copy'); ?></p>
	</div>
	<div class="simple-steps__container flex">
		<div class="single-step__container simple-step-1 flex-1 flex-col align-center">
			<div class="step__number-container flex align-center">
				<span class="step__number text-green bran-med">1</span>
			</div>
			<p class="step__copy bran-reg"><?php the_field('step_1_copy'); ?></p>
		</div>
		<div class="single-step__container simple-step-2 flex-1 flex-col align-center">
			<div class="step__number-container flex align-center">
				<span class="step__number text-green bran-med">2</span>
			</div>
			<p class="step__copy bran-reg"><?php the_field('step_2_copy'); ?></p>
		</div>
		<div class="single-step__container simple-step-3 flex-1 flex-col align-center">
			<div class="step__number-container flex align-center">
				<span class="step__number text-green bran-med">3</span>
			</div>
			<p class="step__copy bran-reg"><?php the_field('step_3_copy'); ?></p>
		</div>
		<div class="single-step__container simple-step-4 flex-1 flex-col align-center">
			<div class="step__number-container flex align-center">
				<span class="step__number text-green bran-med">4</span>
			</div>
			<p class="step__copy bran-reg"><?php the_field('step_4_copy'); ?></p>
		</div>
	</div>
	<div class="btn-container">
		<!-- <a href="<?php the_field('international_apply_button_link'); ?>" class="apply-btn btn btn-green">apply</a> -->
		<?php 

			$link = get_field('international_apply_button_link');

			if( $link ): 
				$link_url = $link['url'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a class="apply-btn btn btn-green" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">Apply</a>
		<?php endif; ?>
	</div>
</section>