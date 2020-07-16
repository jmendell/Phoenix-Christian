<section class="need-is-real">
	<div class="content-container">
		<div class="need__copy-container">
			<h2 class="need__title section-title-text text-green"><?php the_field('goal_section_title'); ?></h2>
			<p class="need__copy bran-reg"><?php the_field('goal_section_copy'); ?></p>
		</div>
		<div class="dollar-amount__container flex">
			<?php if( have_rows('first_goal_content')): ?>
				<?php while( have_rows('first_goal_content') ): the_row(); 
			
					$amount = get_sub_field('target_amount');
					$copy = get_sub_field('target_copy');
			
					?>
			
					<div class="single-amount__container flex-col align-center flex-1">
						<h1 class="dollar-amount bran-med text-green"><span class="dollar-sign">$</span><?=$amount?><span class="small-m">M</span></h1>
						<p class="dollar-amount__copy bran-reg"><?=$copy?></p>
					</div>
			
				<?php endwhile; ?>
			<?php endif; ?>
		<div class="separator"></div>
			<?php if( have_rows('second_goal_content')): ?>
				<?php while( have_rows('second_goal_content') ): the_row(); 
			
					$amount = get_sub_field('target_amount');
					$copy = get_sub_field('target_copy');
			
					?>
			
					<div class="single-amount__container flex-col align-center flex-1">
						<h1 class="dollar-amount bran-med text-green"><span class="dollar-sign">$</span><?=$amount?><span class="small-m">M</span></h1>
						<p class="dollar-amount__copy bran-reg"><?=$copy?></p>
					</div>
			
				<?php endwhile; ?>
			<?php endif; ?>
		<div class="separator"></div>
			<?php if( have_rows('third_goal_content')): ?>
				<?php while( have_rows('third_goal_content') ): the_row(); 
			
					$amount = get_sub_field('target_amount');
					$copy = get_sub_field('target_copy');
			
					?>
			
					<div class="single-amount__container flex-col align-center flex-1">
						<h1 class="dollar-amount bran-med text-green"><span class="dollar-sign">$</span><?=$amount?><span class="small-m">M</span></h1>
						<p class="dollar-amount__copy bran-reg"><?=$copy?></p>
					</div>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="btn-container">
			<a href="<?php the_field('make_a_donation_link'); ?>" target="_blank" class="donate-btn btn btn-green">Make a donation today</a>
		</div>
	</div>
</section>