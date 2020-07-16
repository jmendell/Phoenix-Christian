<?php
/*
Template Name: Alumni Directory

-This page is the template for displaying the Alumni Profiles
*/
get_header('secondary'); ?>

<?php get_template_part( 'template-parts/secondary-pages/secondary-mobile-menu' ); ?>
<section class="alumni-page-content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="secondary__side-menu">
		<ul class="side-menu">
      		<?php pc_list_child_pages(); ?>
		</ul>

	</div>

	<div class="secondary__content-container secondary__content-container__alumni-directory alumni__content-container">
		<div class="breadcrumb-container">
			<?php the_breadcrumb(); ?>
		</div>
		<div class="secondary-mobile-nav alumni-mobile-nav bran-bold">

		<!-- display the top level page title within the nav and the associated link-->
		<a class="sub-page__menu-title" href="#"><?php the_title(); ?></a>

			<ul class="page-sub-nav">
				<?php pc_list_child_pages(); ?>
			</ul>
	</div>
		<!-- Checks if the user is logged in, if yes, alumni directory will show -->
		<?php if (is_user_logged_in()): ?>
			<h1 class="secondary-page__content-header"><?php the_title(); ?></h1>
			<div class="secondary-page__alumni-directory-container">
			<!-- Dropdown to select grad year -->
				<div class="alumni-directory__form-container flex">
					<form action="<?php bloginfo('url'); ?>/alumni/alumni-directory" id="alumni-select" method="post">
						<!-- <select name="grad-year" id="grad-year-select">
							<?php get_template_part( 'template-parts/reusable/alumni-grad-years' ); ?>
						</select>  -->
						<select class="grad-year-select_js grad-year-ajax_js" name="grad-year" method="post" style="width:100%;">
							<?php get_template_part( 'template-parts/reusable/alumni-grad-years' ); ?>
						</select>

						<input type="submit" value="submit" name="submit" class='submit_grad_year'>
					</form>
					<a href="/alumni/alumni-directory" class="btn btn-green alumni-directory__refresh">Refresh</a>
					<!-- Submits to select alumni from chosen grad year -->
						<?php
							if(isset($_POST['submit'])){
								$selected_val = $_POST['grad-year'];  // Storing Selected Value In Variable

							//displays the grad year when selected from dropdown
								echo '<p class="display-selected-class-year uppercase bran-bold">' . 'displaying class of' . '<span class="text-green grad-year-displayed">' . $selected_val . '</span>' . '</p>';
							}
						?>
				</div>
				<div class="single-alumni__information-container">



				<!-- User query to get all registered alumni -->
					<?php
					// If no year has been selected yet, only display 'approved' users
					if (empty($selected_val)) {
						$args = array(
							'role'	  => 'Subscriber',
							'orderby' => array(
								'grad_year' => 'DESC',
								'name_last' => 'ASC'
							),
							'meta_query' => array(
								'relation' => 'AND',
								'grad_year' => array(
									'key' => 'graduation_year',
								),
								array(
									'key' => 'pw_user_status',
									'value' => 'approved'
								),
								'name_last' => array(
									'key' => 'last_name',
								)
							)
						);
					}else{
						// Checks if the year has been selected AND the user has been 'approved'
						$args = array(
							'role'	  => 'Subscriber',
							'orderby' => $user->last_name,
							'order' => 'ASC',
							'meta_query' => array(
								'relation' => 'AND',
									array(
										'key' => 'graduation_year',
										'value' => $selected_val
									),
									array(
										'key' => 'pw_user_status',
										'value' => 'approved'
									)
							)

						);
					}


						// The Query
						$user_query = new WP_User_Query( $args );

						// User Loop --- What is exported for each alumni profile
						if ( ! empty( $user_query->get_results() ) ) {
							foreach ( $user_query->get_results() as $user ) { ?>

								<div class="single-alumni__container">

									<div class="single-alumni__content flex-col">
										<p class="grad-year"><?= $user->graduation_year; ?></p>
										<p class="alumni-dir__name capitalize"><?= $user->first_name; ?><br><?= $user->last_name; ?></p>

										<?php
											if ($user->spouse_first_name) {
												echo '<p class="alumni-dir__spouse capitalize"><span class="spouse-word bran-bold">Spouse:</span> ' . $user->spouse_first_name . ' ' . $user->spouse_last_name . '</p>';
											}
										?>

										<?php if ($user->user_email): ?>
											<a href="mailto:<?= $user->user_email; ?>" class="alumni-dir__email text-green"><?= $user->user_email; ?></a>
										<?php endif ?>

										<?php if ($user->phone_number): ?>
											<p class="alumni-dir__phone capitalize"><?= $user->phone_number; ?></p>
										<?php endif ?>

										<?php if ($user->address_line_1): ?>
											<p class="alumni-dir__address capitalize"><?= $user->address_line_1; ?></p>
										<?php endif ?>

										<?php if ($user->city): ?>
											<div class="alumni-content_city-state-zip">
												<p class="city-state-zip capitalize"> <?= $user->city; ?>, <?= $user->state; ?> <?= $user->zip_code; ?></p>
											</div>
										<?php endif ?>

										<!-- <div class="alumni-dir__bio-container">
											<p class="alumni-dir__biography"><?= $user->biography; ?></p>
										</div> -->
									</div>
								</div>
							<?php }
						} else {
							echo 'No Alumni found.';
						}
					?>

				</div>
				<!-- Displays this message if not logged in -->
			<?php else: ?>
				<h3>The Alumni Directory is only accessible by approved Phoenix Christian Alumni who are logged in.</h3>
				<a href="/alumni/alumni-log-in/" class="alumni-log-in">Log In here</a>
			<?php endif ?>
		</div>

	</div>
  <?php endwhile; endif; ?>
</section>
<?php get_template_part( 'template-parts/reusable/covid-popup' ); ?>
<?php get_footer();