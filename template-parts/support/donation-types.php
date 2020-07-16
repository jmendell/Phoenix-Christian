<section class="donation-types">
	<div class="content-container flex">
		<div class="donation-list__container start-small__container flex-1">
			<div class="donation-list__inner-container flex-col align-center">
				<div class="donation__title-container">
					<h2 class="donation-container__title section-title-text text-green"><?php the_field('small_donation_title'); ?></h2>
					<p class="donation-container__subtitle bran-reg"><?php the_field('small_donation_tagline'); ?></p>
				</div>
				<div class="separator"></div>
				<ul class="donation__list bran-reg">
					<?php if( have_rows('small_donation_list')): ?>
						<?php while( have_rows('small_donation_list') ): the_row(); 
					
							$item = get_sub_field('item_name');
					
							?>
					
							<li class="donation-list__item"><?=$item?></li>
					
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
				<div class="donation-mobile__down-arrow-container">
					<div class="donation-mobile__down-arrow"></div>
				</div>
			</div>
			<a href="<?php the_field('small_donation_external_link'); ?>" target="_blank" class="donation-btn btn btn-green">give a little</a>
		</div>
		<div class="donation-list__container dream-big__container flex-col align-center flex-1">
			<div class="donation-list__inner-container flex-col align-center">
				<div class="donation__title-container">
					<h2 class="donation-container__title section-title-text text-green"><?php the_field('large_donation_title'); ?></h2>
					<p class="donation-container__subtitle bran-reg"><?php the_field('large_donation_tagline'); ?></p>
				</div>
				<div class="separator"></div>
				<ul class="donation__list bran-reg">
					<?php if( have_rows('large_donation_list')): ?>
						<?php while( have_rows('large_donation_list') ): the_row(); 
					
							$item = get_sub_field('item_name');
					
							?>
					
							<li class="donation-list__item"><?=$item?></li>
					
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
				<div class="donation-mobile__down-arrow-container">
					<div class="donation-mobile__down-arrow"></div>
				</div>
			</div>
			<a href="<?php the_field('large_donation_external_link'); ?>" target="_blank" class="donation-btn btn btn-green">Give A Lot</a>
		</div>
	</div>
</section>
