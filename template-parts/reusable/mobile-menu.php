<div class="mobile__menu">
	<div class="mobile-menu__logo-container flex">
			<a href="/" class="home-link">
				<img src="<?php the_field('school_logo_green', 'options'); ?>" alt="logo green" class="pc-logo-green">
			</a>
		<div class="x-icon-container flex" id="close_icon">
			<div class="x-icon bar-1"></div>
			<div class="x-icon bar-2"></div>
		</div>
	</div>
<!-- Mobile menu top -->
		<?php 
			wp_nav_menu( array(
				'menu'              => "main-pages-menu",
				'menu_class'        => "mobile-menu__top mobile-menu-items uppercase bran-bold flex-col", 
				'container'         => false,
			));
		 ?>
		<ul class="mobile-menu__top more-container uppercase bran-bold flex-col">
			<li class="menu-item more-menu-item text-green flex">
				<a href="#" class="mobile-menu__link mobile-menu__more-link" id="mobile-menu__show-more">more</a>
				<!-- <span class="view-arrow"></span> -->
			</li>
		</ul>
<!-- Mobile menu top end -->
<!-- 'More' Hidden menu -->
	<?php

		wp_nav_menu( array(
			'menu'              => "top-right-menu",
			'menu_class'        => "mobile-menu__hidden mobile-menu-items bran-med", 
			'container'         => false, 
		) );

	?>
<!-- 'More' Hidden menu end -->
<!-- Mobile Menu bottom -->
	<?php

		wp_nav_menu( array(
			'menu'              => "top-left-menu",
			'menu_class'        => "mobile-menu__bottom mobile-menu-items uppercase bran-bold", 
			'container'         => false, 
		) );

	?>
<!-- Mobile Menu bottom end -->
</div>