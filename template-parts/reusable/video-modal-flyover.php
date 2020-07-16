<div class="flyover-modal video__modal">
	<div class="modal-overlay"></div>
	<div class="modal-inner">
		<div class="escape"></div>
		<div class="modal_container flex align-center">
			<?php if( have_rows('take_the_next_step_section', 'options')): ?>
				<?php while( have_rows('take_the_next_step_section', 'options') ): the_row(); 
			
					$url = get_sub_field('section_video_url');
			
					?>
			
					<iframe class="flyover-modal" id="flyover__video" src="<?=$url?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay; encrypted-media"></iframe>
			
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>