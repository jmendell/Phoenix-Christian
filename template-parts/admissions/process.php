<section class="process">
	<div class="process__copy-container">
		<h2 class="process__title section-title-text text-green"><?php the_field('process_section_title'); ?></h2>
		<p class="process__copy bran-reg"><?php the_field(''); ?></p>
	</div>
	<div class="process__steps flex">
		<div class="steps__image-container flex align-center flex-1">
			<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/12/Laptop.png" alt="step by step image" class="step__image">
		</div>
		<div class="steps__step-container flex flex-1">
			<div class="steps__progress-container">
				<a href="#" class="steps__mobile-button step-btn-1 clicked flex-1" data-img-src="<?php the_field('step_one_corresponding_image'); ?>"></a>
				<a href="#" class="steps__mobile-button step-btn-2 flex-1" data-img-src="<?php the_field('step_two_corresponding_image'); ?>"></a>
				<a href="#" class="steps__mobile-button step-btn-3 flex-1" data-img-src="<?php the_field('step_three_corresponding_image'); ?>"></a>
			</div>
			<div class="steps__step-copy-container flex-col">
			<!-- Step One Content -->
				<div class="single-step__container step-1 flex-1 flex step-active" data-img-src="<?php the_field('step_one_corresponding_image'); ?>">
					<div class="step__progress-bar"></div>
					<div class="single-step__copy">
						<h4 class="step__title bran-med">Step One</h4>
						<p class="step__copy bran-reg"><?php the_field('step_one_copy'); ?></p>
					</div>
				</div>
			<!-- End Step One Content -->
			<!-- Step Two Content -->
				<div class="single-step__container step-2 flex-1 flex" data-img-src="<?php the_field('step_two_corresponding_image'); ?>">
					<div class="step__progress-bar"></div>
					<div class="single-step__copy">
						<h4 class="step__title bran-med">Step Two</h4>
						<p class="step__copy bran-reg"><?php the_field('step_two_copy'); ?></p>
					</div>
				</div>
			<!-- End Step Two Content -->
			<!-- Step Three Content -->
				<div class="single-step__container step-3 flex-1 flex" data-img-src="<?php the_field('step_three_corresponding_image'); ?>">
					<div class="step__progress-bar"></div>
					<div class="single-step__copy">
						<h4 class="step__title bran-med">Step Three</h4>
						<p class="step__copy bran-reg"><?php the_field('step_three_copy'); ?></p>
					</div>
				</div>
			<!-- End Step Three Content -->
			</div>
		</div>	
	</div>
	<div class="btn-container">
		<a href="<?php the_field('admissions_process_apply_button_link'); ?>" target="_blank" class="apply-btn btn btn-green">apply</a>
	</div>
</section>