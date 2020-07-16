<section class="upcoming-events content-container flex">
	<div class="upcoming-events__event-list">
		<div class="event-list-floating-container flex-col">
			<h3 class="event-list__title uppercase text-green-dark-light bran-bold">upcoming events</h3>

			<?php 

				require_once( ABSPATH . WPINC . '/feed.php' );
					$feed_url = 'http://phoenixchristianpreparatory.tandem.co/index.php?type=export&action=rss';
					$rss = fetch_feed($feed_url);
					 
					if (!is_wp_error($rss)) {
					    $max_items = $rss->get_item_quantity(6); //pass the quantity(number of post to fetch) here
					    $rss_items = $rss->get_items( 0, $max_items );
					 
					    if ($max_items > 0) {
					        foreach ($rss_items as $item) {

					        	$title = $item->get_title(); //Get the title from the RSS feed
					    		$title_edit = str_replace("[Updated]", "", $title); //Remove '[Updated]' text that is displayed
					    		
					    		$str = $title_edit; //String to be 'exploded' to remove the 'time'
					    		$title_exp = explode(" ", $str); //Execute the explode function 
					    		

					            ?>
					            <div class="rss-feed__upcoming-events upcoming-event__item"> <!-- Display the correct info from the RSS feed -->
					                <div class="upcoming-event__single-item">
					                	<a href="/calendar" class="calendar-link">
							                <p class="item-single__title item-single__content capitalize bran-med fw-500 text-white upcoming__title"> <!-- There are this many items in case the title is longer (10 words max) -->
							                	<?php foreach ($title_exp as $key => $title): ?>
							                		<?php 
							                		if ($key > 2) {
							                			echo $title;
							                		}
							                		 ?>
							                	<?php endforeach ?>

							            	</p>
							                <p class="list-item__date bran-reg text-dark-green">
								                <?php echo $title_exp[0]; ?> 
								                <?php echo $title_exp[1]; ?>
							                </p>
							                <div class="view-arrow arrow-white list-item__arrow"></div>
						                </a>
					                </div>
					                <div class="separator"></div>
					            </div>
					            <?php
					        }
					    }
					}

			?>
			<div class="upcoming__view-all view-all">
				<a href="/calendar" class="view-all__link uppercase bran-bold flex">
					<p class="upcoming-view-all-text uppercase bran-bold">view all</p>
					<div class="view-all__arrow view-arrow arrow-green-dark-light"></div>
				</a>
			</div>
		</div>
	</div>
	<div class="upcoming-events__highlights">
		<div class="title-view-all-container">
			<h3 class="highlights__title uppercase bran-bold text-green-dark">stories & highlights</h3>
			<div class="highlights__view-all view-all">
				<a href="/highlights" class="view-all__link flex">
					<p class="uppercase bran-bold view-all-text">view all</p>
					<div class="view-all__arrow view-arrow arrow-green-dark-light"></div>
				</a>
			</div>
		</div>
		<div class="highlights__featured-highlights flex">
			<?php
			
			$args = array( 
				'post_type' => 'post', 
				'posts_per_page' => 4
			);

			$loop = new WP_Query( $args );
			
			?>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<!-- Create a variable for the featured image to use as a background image -->
			<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');?>
			
			<div class="featured-hightlights__container highlight-2 flex-col">
				<a href="<?php echo the_permalink();?>" class="single-highlight-link">
					<div class="featured-highlight__cover-image" style="background-image:url('<?php echo $backgroundImg[0];?>');"></div>
					<div class="featured-hightlight__title-container">
						<p class="featured-highlight__title capitalize bran-med text-green"><?php echo the_title();?></p>
					</div>
				</a>
			</div>
			<?php endwhile; 
			// Reset Post Data
			wp_reset_postdata();
			?>
		</div>
		<!-- <div class="highlights__view-all view-all">
			<a href="/highlights" class="view-all__link flex">
				<p class="uppercase bran-bold view-all-text">view all</p>
				<div class="view-all__arrow view-arrow arrow-green-dark-light"></div>
			</a>
		</div> -->
	</div>
</section>