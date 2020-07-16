<section class="foster-care">
	<div class="foster__outer-container flex">
		<div class="foster__image-contaienr flex-1">
			<img src="<?php the_field('foster_care_section_image'); ?>" alt="foster care image" class="foster__image">
		</div>
		<div class="foster__info-container flex-1 flex-col">
			<div class="foster__copy-container">
				<h2 class="foster__title section-title-text text-green"><?php the_field('foster_care_section_title'); ?></h2>
				<p class="foster__copy bran-reg"><?php the_field('foster_care_section_copy'); ?></p>
			</div>
			<ul class="foster__link-container">
				<?php if( have_rows('foster_care_section_links')): ?>
					<?php while( have_rows('foster_care_section_links') ): the_row(); 
				
						$text = get_sub_field('link_text');
						$link = get_sub_field('url');
				
						?>
				
						<li class="foster-link__single flex">
							<a href="<?=$link?>" target="_blank" class="foster__link text-green bran-bold uppercase"><?=$text?></a>
							<div class="view-arrow arrow-green"></div>
						</li>
				
					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>