<footer class="footer-desktop">
	<div class="footer-top">
		<div class="footer-top__inner-container footer-top__desktop content-container">
			<div class="footer-top__titles flex">
				<div class="footer-title__container--explore flex-col-sm">
					<h4 class="footer-title__title bran-bold uppercase text-green">explore</h4>
				</div>
				<div class="footer-title__container--helpful flex-col-lrg">
					<h4 class="footer-title__title bran-bold uppercase text-green">helpful links</h4>
				</div>
				<div class="footer-title__container--connect flex-col-sm">
					<h4 class="footer-title__title bran-bold uppercase text-green">connect</h4>
				</div>
				<div class="footer-title__container--social flex-social">
					<?php get_template_part( 'template-parts/reusable/social-media-icons' ); ?>
				</div>
			</div>
			<div class="separator"></div>
			<div class="footer-top__links flex">
				<div class="footer-links__container--explore flex-col flex-col-sm">
					<?php if( have_rows('explore_links', 'options')): ?>
						<?php while( have_rows('explore_links', 'options') ): the_row();

							?>
					<!-- Link array in order to set 'terget' value to open specific links in new page -->
							<?php

								$link = get_sub_field('explore_link_url');

								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>

									<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="footer-link text-white bran-med"><?php echo esc_html($link_title); ?></a>

								<?php endif; ?>
					<!-- End Link Array -->
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="footer-links__container--helpful flex flex-col-lrg">
					<?php if( have_rows('helpful_links', 'options')): ?>
						<?php while( have_rows('helpful_links', 'options') ): the_row();

							?>

						<!-- Link array in order to set 'terget' value to open specific links in new page -->
							<?php

								$link = get_sub_field('helpful_link_url');

								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>

									<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="footer-link text-white bran-med"><?php echo esc_html($link_title); ?></a>

								<?php endif; ?>
						<!-- End Link Array -->


						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="footer-links__container--connect flex-col flex-col-sm">
					<?php if( have_rows('connect_links', 'options')): ?>
						<?php while( have_rows('connect_links', 'options') ): the_row();

							?>

							<!-- Link array in order to set 'terget' value to open specific links in new page -->
							<?php

								$link = get_sub_field('connect_link_url');

								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>

									<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="footer-link text-white bran-med"><?php echo esc_html($link_title); ?></a>

								<?php endif; ?>
						<!-- End Link Array -->

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="footer-links__container--logos flex-col flex-social">
					<?php if( have_rows('accrediation_logos', 'options')): ?>
						<?php while( have_rows('accrediation_logos', 'options') ): the_row();

							$logo = get_sub_field('logo');

							?>

							<img src="<?=$logo?>" alt="logo" class="footer-logo">

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="footer-bottom__inner-container content-container flex">
			<?php get_template_part( 'template-parts/reusable/pc-footer-logo' ); ?>
			<div class="footer-bottom__campuses flex flex-60">
				<div class="campuses__locations">
					<?php if( have_rows('campus_locations', 'options')): ?>
						<?php while( have_rows('campus_locations', 'options') ): the_row();

							$name = get_sub_field('campus_name');
							$address = get_sub_field('campus_address');
							$phone = get_sub_field('campus_phone_number');
							$fax = get_sub_field('campus_fax');

							?>

							<div class="single__location text-white">
								<p class="campus bran-bold"><?=$name?></p>
								<p class="address bran-reg"><?=$address?></p>
								<div class="single__phone-fax">
									<p class="phone bran-bold"><?=$phone?></p>
									<?php if($fax): ?>
										<p class="fax bran-bold"><?=$fax?></p>
									<?php endif; ?>
								</div>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="school-email">
						<a href="mailto:<?php the_field('contact_email_address', 'options'); ?>" class="email text-white bran-bold"><?php the_field('contact_email_address', 'options'); ?></a>
				</div>
			</div>
			<div class="footer-bottom__updates flex-40">
				<p class="updates__tagline text-white bran-med">Receive school updates</p>
				<?php echo do_shortcode('[ctct form="606"]'); ?>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<p class="copyright bran-reg text-green-dark-light">&copy <?php echo date("Y"); ?> <?php the_field('copyright', 'options'); ?> <a href="https://monomythstudio.com/" target="_blank" class="monomyth text-green-dark-light">Site By: Monomyth Studio</a></p>
	</div>
</footer>

<!-- Footer Mobile Start -------------------------->

<div class="footer-mobile">
	<div class="footer-top">
		<div class="footer-top__items flex">
			<div class="footer-container footer__container--explore">
				<div class="footer-title__inner-container flex">
					<h4 class="footer-title__title bran-bold uppercase text-green">explore</h4>
					<div class="footer__arrow-container">
						<div class="footer__arrow"></div>
					</div>
				</div>
				<div class="footer-links__container footer-links__container--explore flex-col">
					<div class="footer-links__flex-container flex-col">
						<?php if( have_rows('explore_links', 'options')): ?>
						<?php while( have_rows('explore_links', 'options') ): the_row();

							?>
					<!-- Link array in order to set 'terget' value to open specific links in new page -->
							<?php

								$link = get_sub_field('explore_link_url');

								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>

									<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="footer-link text-white bran-med"><?php echo esc_html($link_title); ?></a>

								<?php endif; ?>
					<!-- End Link Array -->
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="footer-container footer-container--helpful">
				<div class="footer-title__inner-container flex">
					<h4 class="footer-title__title bran-bold uppercase text-green">helpful links</h4>
					<div class="footer__arrow-container">
						<div class="footer__arrow"></div>
					</div>
				</div>
				<div class="footer-links__container footer-links__container--helpful flex">
					<div class="footer-links__flex-container flex-col">
						<?php if( have_rows('helpful_links', 'options')): ?>
						<?php while( have_rows('helpful_links', 'options') ): the_row();

							?>

						<!-- Link array in order to set 'terget' value to open specific links in new page -->
							<?php

								$link = get_sub_field('helpful_link_url');

								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>

									<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="footer-link text-white bran-med"><?php echo esc_html($link_title); ?></a>

								<?php endif; ?>
						<!-- End Link Array -->


						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="footer-container footer__container--connect">
				<div class="footer-title__inner-container flex">
					<h4 class="footer-title__title bran-bold uppercase text-green">connect</h4>
					<div class="footer__arrow-container">
						<div class="footer__arrow"></div>
					</div>
				</div>
				<div class="footer-links__container footer-links__container--connect flex-col">
					<div class="footer-links__flex-container flex-col">
						<?php if( have_rows('connect_links', 'options')): ?>
						<?php while( have_rows('connect_links', 'options') ): the_row();

							?>

							<!-- Link array in order to set 'terget' value to open specific links in new page -->
							<?php

								$link = get_sub_field('connect_link_url');

								if( $link ):
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>

									<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="footer-link text-white bran-med"><?php echo esc_html($link_title); ?></a>

								<?php endif; ?>
						<!-- End Link Array -->

						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__container--social flex-social">
			<?php get_template_part( 'template-parts/reusable/social-media-icons' ); ?>
			<div class="footer-links__container--logos flex-row-rev">
				<?php if( have_rows('accrediation_logos', 'options')): ?>
					<?php while( have_rows('accrediation_logos', 'options') ): the_row();

						$logo = get_sub_field('logo');

						?>

						<img src="<?=$logo?>" alt="logo" class="footer-logo">

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="footer-bottom__inner-container content-container flex">
			<div class="footer-bottom__logo">
				<!-- <img src="<?php the_field('footer_condensed_logo', 'options'); ?>" alt="pc logo no text" class="pc-logo-no-text inject-me"> -->
				<?php get_template_part( 'template-parts/reusable/pc-footer-logo' ); ?>
			</div>
			<div class="footer-bottom__content-container">
				<div class="content__locations">
					<?php if( have_rows('campus_locations', 'options')): ?>
						<?php while( have_rows('campus_locations', 'options') ): the_row();

							$name = get_sub_field('campus_name');
							$address = get_sub_field('campus_address');

							?>

							<div class="single__location text-white">
								<p class="campus bran-bold"><?=$name?></p>
								<p class="address bran-reg"><?=$address?></p>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="content__contact-info">
					<a href="tel:<?php the_field('phone_number', 'options'); ?>" class="phone text-white bran-bold"><?php the_field('phone_number', 'options'); ?> (p)</a>
					<p class="fax text-white bran-bold"><?php the_field('fax_number', 'options'); ?> (f)</p>
					<a href="mailto:<?php the_field('contact_email_address', 'options'); ?>" class="email text-white bran-bold"><?php the_field('contact_email_address', 'options'); ?></a>
				</div>
			</div>
		</div>
		<div class="footer-bottom__updates flex-30">
			<p class="updates__tagline text-white bran-med">Receive school updates</p>
			<?php echo do_shortcode('[ctct form="606"]'); ?>
		</div>
	</div>

	<div class="footer-copyright">
		<p class="copyright bran-reg text-green-dark-light">&copy <?php echo date("Y"); ?> <?php the_field('copyright', 'options'); ?> <a href="https://monomythstudio.com/" target="_blank" class="monomyth text-green-dark-light">Site By: Monomyth Studio</a></p>
	</div>
</div>

  <?php wp_footer(); ?>
  <!-- <script src="<?= get_template_directory_uri(); ?>/assets/js/app.js"></script> -->
	</div><!-- closing div for global container -->
  </body>
</html>
