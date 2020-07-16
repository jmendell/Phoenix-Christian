<?php
/*
Template Name: Staff & Faculty Directory
	-This is for the staff and faculty directory
*/
get_header('secondary'); ?>

<?php get_template_part( 'template-parts/secondary-pages/secondary-mobile-menu' ); ?>
<section class="secondary-page-content staff-dir__page-content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="secondary__side-menu">
		<ul class="side-menu">
      		<?php pc_list_child_pages(); ?>
		</ul>

	</div>


	<div class="staff-dir__container">
		<div class="breadcrumb-container">
    		<?php the_breadcrumb(); ?>
		</div>
		<div class="secondary-mobile-nav alumni-mobile-nav bran-bold">

			<!-- display the top level page title within the nav and the associated link-->
			<a class="sub-page__menu-title" href="#"><?php the_title(); ?></a>

				<ul class="page-sub-nav bran-reg">
					<?php pc_list_child_pages(); ?>
				</ul>
		</div>
		<h1 class="staff-dir__content-header"><?php the_title(); ?></h1>
		<nav class="directory-menu flex">
			<a href="#admin-section" class="directory-section-link uppercase">Administration</a>
			<a href="#hs-section" class="directory-section-link uppercase">High School</a>
			<a href="#ms-section" class="directory-section-link uppercase">Middle School</a>
			<a href="#elm-section" class="directory-section-link uppercase">Elementary</a>
			<a href="#pre-section" class="directory-section-link uppercase">Preschool</a>
			<a href="#staff-section" class="directory-section-link uppercase">Staff</a>
		</nav>



    	<div class="staff-and-faculty-directory">


    		<?php

				// The Query
    			$args = array(
    				'post_type' => 'staff_and_faculty',
    			 	'posts_per_page' => -1,
    			 	'category_name' => 'administration',
    			 	'orderby' => 'title',
    			 	'order' => 'ASC'

    			);

				$query1 = new WP_Query( $args );

				if ( $query1->have_posts() ) {

					echo '<div class="admin-section" id="admin-section">';
						echo '<h3 class="section-title">Administration</h3>';

						echo '<div class="admin-inner-section staff-member__inner-section flex">';

							// The Loop
							while ( $query1->have_posts() ) {
								$query1->the_post();

								$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
								$postLink = get_permalink();
								$jobTitle = get_post_meta($post->ID, 'position_title', true);

								echo '<div class="staff-member_single-card flex-col align-center">'; //Opening div for individual staff member card
								echo '<a href="'.$postLink.'" class="staff-member-link"></a>';
									echo '<div class="staff-card-image" style="background-image:url('. $backgroundImg[0] .');"></div>';

									echo '<div class="staff-member__info">';
										echo '<h5 class="staff-member__name">' . get_the_title() . '</h5>';
										echo '<p class="staff-member__title">' . $jobTitle .'</p>';
									echo '</div>';

								echo '</div>'; //closing div for individual staff member card
							}

							/* Restore original Post Data
							 * NB: Because we are using new WP_Query we aren't stomping on the
							 * original $wp_query and it does not need to be reset with
							 * wp_reset_query(). We just need to set the post data back up with
							 * wp_reset_postdata().
							 */
							wp_reset_postdata();
						}

					echo '</div>';
				echo '</div>';

/* The 2nd Query (without global var) */
				$args2 = array(
    				'post_type' => 'staff_and_faculty',
    			 	'posts_per_page' => -1,
    			 	'category_name' => 'hs-faculty',
    			 	'orderby' => 'title',
    			 	'order' => 'ASC'

    			);

				$query2 = new WP_Query( $args2 );

				if ( $query2->have_posts() ) {
					// The 2nd Loop
					echo '<div class="hs-section staff-faculty-directory-section" id="hs-section">';
						echo '<h3 class="section-title">High School Faculty</h3>';

						echo '<div class="hs-inner-section staff-member__inner-section flex">';

							// The Loop
							while ( $query2->have_posts() ) {
								$query2->the_post();

								$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
								$postLink = get_permalink();
								$jobTitle = get_post_meta($post->ID, 'position_title', true);

								echo '<div class="staff-member_single-card flex-col align-center">'; //Opening div for individual staff member card
								echo '<a href="'.$postLink.'" class="staff-member-link"></a>';
									echo '<div class="staff-card-image" style="background-image:url('. $backgroundImg[0] .');"></div>';

									echo '<div class="staff-member__info">';
										echo '<h5 class="staff-member__name">' . get_the_title() . '</h5>';
										echo '<p class="staff-member__title">' . $jobTitle .'</p>';
									echo '</div>';

								echo '</div>'; //closing div for individual staff member card
							}

							/* Restore original Post Data
							 * NB: Because we are using new WP_Query we aren't stomping on the
							 * original $wp_query and it does not need to be reset with
							 * wp_reset_query(). We just need to set the post data back up with
							 * wp_reset_postdata().
							 */
							wp_reset_postdata();
						}

					echo '</div>';
				echo '</div>';


/* The 3rd Query (without global var) */
				$args3 = array(
    				'post_type' => 'staff_and_faculty',
    			 	'posts_per_page' => -1,
    			 	'category_name' => 'ms-faculty',
    			 	'orderby' => 'title',
    			 	'order' => 'ASC'

    			);

				$query3 = new WP_Query( $args3 );

				if ( $query3->have_posts() ) {
					// The 2nd Loop
					echo '<div class="ms-section staff-faculty-directory-section" id="ms-section">';
						echo '<h3 class="section-title">Middle School Faculty</h3>';

						echo '<div class="ms-inner-section staff-member__inner-section flex">';

							// The Loop
							while ( $query3->have_posts() ) {
								$query3->the_post();

								$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
								$postLink = get_permalink();
								$jobTitle = get_post_meta($post->ID, 'position_title', true);

								echo '<div class="staff-member_single-card flex-col align-center">'; //Opening div for individual staff member card
								echo '<a href="'.$postLink.'" class="staff-member-link"></a>';
									echo '<div class="staff-card-image" style="background-image:url('. $backgroundImg[0] .');"></div>';

									echo '<div class="staff-member__info">';
										echo '<h5 class="staff-member__name">' . get_the_title() . '</h5>';
										echo '<p class="staff-member__title">' . $jobTitle .'</p>';
									echo '</div>';

								echo '</div>'; //closing div for individual staff member card
							}

							/* Restore original Post Data
							 * NB: Because we are using new WP_Query we aren't stomping on the
							 * original $wp_query and it does not need to be reset with
							 * wp_reset_query(). We just need to set the post data back up with
							 * wp_reset_postdata().
							 */
							wp_reset_postdata();
						}

					echo '</div>';
				echo '</div>';


/* The 4th Query (without global var) */
				$args4 = array(
    				'post_type' => 'staff_and_faculty',
    			 	'posts_per_page' => -1,
    			 	'category_name' => 'elementary-faculty',
    			 	'orderby' => 'title',
    			 	'order' => 'ASC'

    			);

				$query4 = new WP_Query( $args4 );

				if ( $query4->have_posts() ) {
					// The 2nd Loop
					echo '<div class="elementary-section staff-faculty-directory-section" id="elm-section">';
						echo '<h3 class="section-title">Elementary Faculty</h3>';

						echo '<div class="elementary-inner-section staff-member__inner-section flex">';

							// The Loop
							while ( $query4->have_posts() ) {
								$query4->the_post();

								$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
								$postLink = get_permalink();
								$jobTitle = get_post_meta($post->ID, 'position_title', true);

								echo '<div class="staff-member_single-card flex-col align-center">'; //Opening div for individual staff member card
								echo '<a href="'.$postLink.'" class="staff-member-link"></a>';
									echo '<div class="staff-card-image" style="background-image:url('. $backgroundImg[0] .');"></div>';

									echo '<div class="staff-member__info">';
										echo '<h5 class="staff-member__name">' . get_the_title() . '</h5>';
										echo '<p class="staff-member__title">' . $jobTitle .'</p>';
									echo '</div>';

								echo '</div>'; //closing div for individual staff member card
							}

							/* Restore original Post Data
							 * NB: Because we are using new WP_Query we aren't stomping on the
							 * original $wp_query and it does not need to be reset with
							 * wp_reset_query(). We just need to set the post data back up with
							 * wp_reset_postdata().
							 */
							wp_reset_postdata();
						}

					echo '</div>';
				echo '</div>';


/* The 5th Query (without global var) */
				$args5 = array(
    				'post_type' => 'staff_and_faculty',
    			 	'posts_per_page' => -1,
    			 	'category_name' => 'preschool-faculty',
    			 	'orderby' => 'title',
    			 	'order' => 'ASC'

    			);

				$query5 = new WP_Query( $args5 );

				if ( $query5->have_posts() ) {
					// The 2nd Loop
					echo '<div class="preschool-section staff-faculty-directory-section" id="pre-section">';
						echo '<h3 class="section-title">Preschool Faculty</h3>';

						echo '<div class="preschool-inner-section staff-member__inner-section flex">';

							// The Loop
							while ( $query5->have_posts() ) {
								$query5->the_post();

								$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
								$postLink = get_permalink();
								$jobTitle = get_post_meta($post->ID, 'position_title', true);

								echo '<div class="staff-member_single-card flex-col align-center">'; //Opening div for individual staff member card
								echo '<a href="'.$postLink.'" class="staff-member-link"></a>';
									echo '<div class="staff-card-image" style="background-image:url('. $backgroundImg[0] .');"></div>';

									echo '<div class="staff-member__info">';
										echo '<h5 class="staff-member__name">' . get_the_title() . '</h5>';
										echo '<p class="staff-member__title">' . $jobTitle .'</p>';
									echo '</div>';

								echo '</div>'; //closing div for individual staff member card
							}

							/* Restore original Post Data
							 * NB: Because we are using new WP_Query we aren't stomping on the
							 * original $wp_query and it does not need to be reset with
							 * wp_reset_query(). We just need to set the post data back up with
							 * wp_reset_postdata().
							 */
							wp_reset_postdata();
						}

					echo '</div>';
				echo '</div>';


/* The 6th Query (without global var) */
				$args6 = array(
    				'post_type' => 'staff_and_faculty',
    			 	'posts_per_page' => -1,
    			 	'category_name' => 'staff',
    			 	'orderby' => 'title',
    			 	'order' => 'ASC'

    			);

				$query6 = new WP_Query( $args6 );

				if ( $query6->have_posts() ) {
					// The 2nd Loop
					echo '<div class="staff-section staff-faculty-directory-section" id="staff-section">';
						echo '<h3 class="section-title">Staff</h3>';

						echo '<div class="staff-inner-section staff-member__inner-section flex">';

							// The Loop
							while ( $query6->have_posts() ) {
								$query6->the_post();

								$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
								$postLink = get_permalink();
								$jobTitle = get_post_meta($post->ID, 'position_title', true);

								echo '<div class="staff-member_single-card flex-col align-center">'; //Opening div for individual staff member card
								echo '<a href="'.$postLink.'" class="staff-member-link"></a>';
									echo '<div class="staff-card-image" style="background-image:url('. $backgroundImg[0] .');"></div>';

									echo '<div class="staff-member__info">';
										echo '<h5 class="staff-member__name">' . get_the_title() . '</h5>';
										echo '<p class="staff-member__title">' . $jobTitle .'</p>';
									echo '</div>';

								echo '</div>'; //closing div for individual staff member card
							}

							/* Restore original Post Data
							 * NB: Because we are using new WP_Query we aren't stomping on the
							 * original $wp_query and it does not need to be reset with
							 * wp_reset_query(). We just need to set the post data back up with
							 * wp_reset_postdata().
							 */
							wp_reset_postdata();
						}

					echo '</div>';
				echo '</div>';

			?>
    	</div>
	</div>
  <?php endwhile; endif; ?>
</section>

<?php get_template_part( 'template-parts/reusable/covid-popup' ); ?>
<?php get_footer();