<section class="single-highlight">
	<div class="highlight__content-container">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="highlight__title"><?php the_title(); ?></h2>
			<div class="highlight__content-section">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>