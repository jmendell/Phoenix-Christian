<section class="admissions-faq">
	<ul class="tabs flex align-center" data-tabs id="admissions-faq-tabs">
		<li class="tabs-title flex-col align-center is-active"><a href="#faq-tab-1" class="tab-link uppercase bran-bold">FAQ</a><div class="active-line"></div></li>
	</ul>
<!-- First FAQ tab -->
	<div class="tabs-content" data-tabs-content="admissions-faq-tabs">
		<div class="tabs-panel is-active" id="faq-tab-1">
			<?php if( have_rows('first_tab_faq_content')): ?>
				<?php while( have_rows('first_tab_faq_content') ): the_row(); 
			
					$question = get_sub_field('first_tab_faq_question');
					$answer = get_sub_field('first_tab_faq_answer');
			
					?>
			
					<div class="faq__single-container">
						<div class="faq__question-container flex">
							<h4 class="faq__question text-green bran-med"><?=$question?></h4>
							<div class="faq__arrow-container">
								<div class="faq__arrow"></div>
							</div>
						</div>
						<div class="faq__answer-container">
							<!-- not in 'p' tag since answers are in WYSIWYG -->
							<?=$answer?>
						</div>
					</div>
					<div class="separator"></div>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>