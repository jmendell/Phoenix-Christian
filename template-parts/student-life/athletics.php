<section class="athletics">
	<img src="<?php the_field('pc_athletics_logo'); ?>" alt="cougar logo" class="cougar-logo inject-me">
	<div class="athletics__inner-container flex">
		<div class="athletics__copy-container">
			<h2 class="athletics-copy__title section-title-text text-white"><?php the_field('athletics_section_title'); ?></h2>
			<p class="athletics-copy__copy text-white bran-reg"><?php the_field('athletics_section_copy'); ?></p>
			<a href="<?php the_field('athletics_button_link'); ?>" class="athletics-copy__btn btn btn-green">athletics</a>
		</div>
		<div class="athletics__sports-container">
			<div class="sports__top-container sports-outer-container flex">
				<div class="sports-top__container top-container-1 sports-inner-container flex-1">
					<h4 class="sports__title uppercase text-white bran-bold">fall sports</h4>
					<div class="separator"></div>
					<ul class="sports__list text-green bran-reg">
						<?php if( have_rows('fall_sports_list')): ?>
							<?php while( have_rows('fall_sports_list') ): the_row(); 
						
								$fallSport = get_sub_field('fall_sport');
						
								?>
						
								<li class="sport"><?=$fallSport?></li>
						
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
				<div class="sports-top__container top-container-2 sports-inner-container flex-1">
					<h4 class="sports__title uppercase text-white bran-bold">winter sports</h4>
					<div class="separator"></div>
					<ul class="sports__list text-green bran-reg">
						<?php if( have_rows('winter_sports_list')): ?>
							<?php while( have_rows('winter_sports_list') ): the_row(); 
						
								$winterSport = get_sub_field('winter_sport');
						
								?>
						
								<li class="sport"><?=$winterSport?></li>
						
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="sports__bottom-container sports-outer-container flex">
				<div class="sports-bottom__container sports-inner-container flex-col">
					<h4 class="sports__title uppercase text-white bran-bold">spring sports</h4>
					<div class="separator"></div>
					<ul class="sports__list text-green bran-reg">
						<?php if( have_rows('spring_sports_list')): ?>
							<?php while( have_rows('spring_sports_list') ): the_row(); 
						
								$springSport = get_sub_field('spring_sport');
						
								?>
						
								<li class="sport"><?=$springSport?></li>
						
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="athletics__callout-container">
		<h2 class="athletics__callout uppercase bran-bold"><?php the_field('athletics_section_callout'); ?></h2>
	</div> -->
</section>