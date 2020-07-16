<section class="take-the-next-step flex" id="take_next_step">
	<?php if( have_rows('take_the_next_step_section', 'options')): ?>
		<?php while( have_rows('take_the_next_step_section', 'options') ): the_row(); 
	
			//declare variables
			$title = get_sub_field('next_step_section_title');
			$copy = get_sub_field('next_step_section_copy');
			$leftText = get_sub_field('left_button_text');
			$leftUrl = get_sub_field('left_button_link_url');
			$rightText = get_sub_field('right_button_text');
			$rightUrl = get_sub_field('right_button_url');
			$questionsCopy = get_sub_field('additional_questions_copy');
			$questionsurl = get_sub_field('additional_questions_link_url');
			$bgImage = get_sub_field('section_background_image');
			$vidUrl = get_sub_field('section_video_url');
	
			?>
	
			<div class="next-step__copy-container next-step__container flex align-center">
				<div class="next-step__inner-container text-center">
					<h4 class="next-step-copy__title bran-med"><?=$title?></h4>
					<p class="next-step-copy__copy bran-reg"><?=$copy?></p>
					<div class="next-step__button-container">
						<a href="<?=$leftUrl?>" class="next-step__btn tour-btn btn btn-white-dark-hover bran-bold uppercase"><?=$leftText?></a>
						<a href="<?=$rightUrl?>" class="next-step__btn apply-btn btn btn-white-dark-hover bran-bold uppercase"><?=$rightText?></a>
					</div>
					<a href="<?=$questionsurl?>" class="next-step__question uppercase text-green-dark bran-bold"><?=$questionsCopy?></a>
				</div>
			</div>
			<div class="next-step__video-container next-step__container">
				<figure class="video-bg flex align-center" style="background-image:url('<?=$bgImage?>');">
					<div class="overlay"></div>
					<div class="play-container flex-col align-center flyover-click">
						<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2019/03/pc-play-icon.svg" alt="play button" class="play-btn flyover-click style-svg">
						<p class="take-a-look uppercase text-white">take a look inside</p>
					</div>
				</figure>
			</div>
	
		<?php endwhile; ?>
	<?php endif; ?>
</section>