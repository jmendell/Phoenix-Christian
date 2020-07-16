<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="error-404-container">
	<div class="content-container">
		<h1 class="error-404-title bran-bold text-green">404 Page Not Found</h1>
		<p class="error-404-copy bran-reg">Looks like you ended up on a page that doesn't exist.</p>
		<p class="error-404-copy__click bran-reg">Click <a href="/" class="text-green">here</a> to return to the homepage.</p>
	</div>
</div>
<?php get_footer();
