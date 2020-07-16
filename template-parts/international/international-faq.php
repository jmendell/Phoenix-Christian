<section class="international-faq">
	<ul class="tabs flex align-center" data-tabs id="international-faq-tabs">
		<li class="tabs-title flex-col align-center is-active"><a href="#faq-tab-1" class="tab-link uppercase bran-bold">school</a><div class="active-line"></div></li>
		<li class="tabs-title flex-col align-center"><a href="#faq-tab-2" class="tab-link uppercase bran-bold">home</a><div class="active-line"></div></li>
		<li class="tabs-title flex-col align-center"><a href="#faq-tab-3" class="tab-link uppercase bran-bold">life</a><div class="active-line"></div></li>
	</ul>
<!-- First FAQ tab -->
	<div class="tabs-content" data-tabs-content="international-faq-tabs">
		<div class="tabs-panel is-active" id="faq-tab-1">
			<?php if( have_rows('school_tab_faq_content')): ?>
				<?php while( have_rows('school_tab_faq_content') ): the_row(); 
			
					$question = get_sub_field('school_faq_question');
					$answer = get_sub_field('school_faq_answer');
			
					?>
			
					<div class="faq__single-container">
						<div class="faq__question-container flex">
							<h4 class="faq__question text-green bran-med"><?=$question?></h4>
							<div class="faq__arrow-container">
								<div class="faq__arrow"></div>
							</div>
						</div>
						<div class="faq__answer-container">
							<!-- <p class="faq__answer bran-reg"><?=$answer?></p> -->
							<?=$answer?>
						</div>
					</div>
					<div class="separator"></div>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
<!-- Second FAQ tab ------------------------------------>
		<div class="tabs-panel" id="faq-tab-2">
			<?php if( have_rows('home_tab_faq_content')): ?>
				<?php while( have_rows('home_tab_faq_content') ): the_row(); 
			
					$question = get_sub_field('home_faq_question');
					$answer = get_sub_field('home_faq_answer');
			
					?>
			
					<div class="faq__single-container">
						<div class="faq__question-container flex">
							<h4 class="faq__question text-green bran-med"><?=$question?></h4>
							<div class="faq__arrow-container">
								<div class="faq__arrow"></div>
							</div>
						</div>
						<div class="faq__answer-container">
							<!-- <p class="faq__answer bran-reg"><?=$answer?></p> -->
							<?=$answer?>
						</div>
					</div>
					<div class="separator"></div>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
<!-- Third FAQ tab ------------------------------------>
		<div class="tabs-panel" id="faq-tab-3">
			<?php if( have_rows('life_tab_faq_content')): ?>
				<?php while( have_rows('life_tab_faq_content') ): the_row(); 
			
					$question = get_sub_field('life_faq_question');
					$answer = get_sub_field('life_faq_answer');
			
					?>
			
					<div class="faq__single-container">
						<div class="faq__question-container flex">
							<h4 class="faq__question text-green bran-med"><?=$question?></h4>
							<div class="faq__arrow-container">
								<div class="faq__arrow"></div>
							</div>
						</div>
						<div class="faq__answer-container">
							<!-- <p class="faq__answer bran-reg"><?=$answer?></p> -->
							<?=$answer?>
						</div>
					</div>
					<div class="separator"></div>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>