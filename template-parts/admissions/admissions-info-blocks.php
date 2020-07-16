<section class="admission-info-blocks">
	<div class="admission-blocks__container flex">
		<?php if( have_rows('info_block_content')): ?>
			<?php while( have_rows('info_block_content') ): the_row(); 
		
				$icon = get_sub_field('info_block_icon');
				$title = get_sub_field('info_block_title');
				$copy = get_sub_field('info_block_copy');
				$link = get_sub_field('info_block_link');
				$class = get_sub_field('icon_custom_class');
		
				?>
				<div class="single-block flex-1">
					<div class="single-block__inner flex-col align-center">
						<img src="<?=$icon?>" alt="single block icon" class="block__icon <?=$class?>">
						<div class="block__copy-container">
							<h4 class="block__title bran-med"><?=$title?></h4>
							<p class="block__copy bran-reg"><?=$copy?></p>
						</div>
						<div class="learn-more__link">
							<div class="learn-more__container flex align-center">
								<?php 


									if( $link ): 
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="learn-more__link-text uppercase text-green bran-bold" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">Learn More</a>
								<?php endif; ?>
								<div class="list-item__arrow view-arrow arrow-green"></div>
							</div>
						</div>
					</div>
				</div>
		
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
