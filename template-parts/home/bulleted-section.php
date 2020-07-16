<section class="why-choose-pc bulleted-section content-container flex">
	<div class="why-choose__copy-container why-choose__container flex align-center">
		<div class="why-choose-copy__inner-container">
			<h2 class="why-choose-copy__title section-title-text text-green"><?php the_field('bullet_section_title'); ?></h2>
			<p class="why-choose-copy__copy bran-reg"><?php the_field('bullet_section_copy'); ?></p>
			<a href="/about" class="why-choose-copy__button btn btn-green uppercase">about us</a>
		</div>
	</div>
	<div class="why-choose__bullets why-choose__container">
		<ul class="why-choose-bullets__container">
			<?php if( have_rows('bulleted_content_list')): ?>
				<?php while( have_rows('bulleted_content_list') ): the_row(); 
			
					$title = get_sub_field('list_item_title');
					$copy = get_sub_field('list_item_copy');
			
					?>
			
					<li class="bullet-container__single-item flex">
						<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2018/12/check-mark.svg" alt="check mark" class="check-mark inject-me">
						<div class="bullet-single__copy-container">
							<h4 class="bullet-single__title text-green-dark bran-med"><?=$title?></h4>
							<p class="bullet-single__copy bran-reg"><?=$copy?></p>
						</div>
					</li>
			
				<?php endwhile; ?>
			<?php endif; ?>
	</div>
</section>