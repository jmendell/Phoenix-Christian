<?php
/**
 * The template for displaying all staff & faculty posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<section class="single-staff-member single-highlight">
	<div class="back-button">
		<a href="/staff-faculty/staff-and-faculty-directory/" class="back-to-directory btn btn-green">Back</a>
	</div>
	<div class="staff-member__content-container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="staff-member__content-section">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer();
