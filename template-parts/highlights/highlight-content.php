<section class="highlights-page-container">
	
	<h2 class="highlights-section-title text-green bran-reg">Highlights</h2>
	<div class="highlight-content flex">


		<?php
		
		$args = array( 'post_type' => 'post', 'posts_per_page' => -1);
		$loop = new WP_Query( $args );
		
		?>
		
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>  
		
		<!-- Create a variable for the featured image to use as a background image -->
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

		<a href="<?php echo the_permalink(); ?>" class="single-highlight__link">
			<div class="single-highlight__container flex-col">
				<div class="highlight-image__container" style="background-image:url('<?php echo $backgroundImg[0]; ?>');">
				</div>
				<div class="highlight__title-container flex">
					<p class="highlight__post-title"><?php echo the_title(); ?></p>
				</div>
			</div>
		</a>
		  
		<?php endwhile; 
		// Reset Post Data
		wp_reset_postdata();
		?>
	</div>
</section>