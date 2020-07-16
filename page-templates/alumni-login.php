<?php
/*
Template Name: Alumni Login

 -This page is the template for logging in as an Alumni
*/
get_header('secondary'); ?>

<?php get_template_part( 'template-parts/secondary-pages/secondary-mobile-menu' ); ?>
<section class="secondary-page-content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="secondary__side-menu">
		<ul class="side-menu">
      		<?php pc_list_child_pages(); ?>
		</ul>

	</div>


	<div class="secondary__content-container">
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
		<div class="alumni-login__title-container">
			<h1 class="secondary-page__content-header__alumni"><?php the_title(); ?></h1>
			<p class="alumni-login__copy bran-reg">Login to the Phoenix Christian Alumni Directory using your username or email address.</p>
		</div>
		<div class="secondary-page__login-container">
			<div class="alumni-login-form">
				<?php the_content(); ?>
			</div>
			<div class="wp_login_error">
			    <?php if( isset( $_GET['login'] ) && $_GET['login'] == 'failed' ) { ?>
			        <p>If you were not redirected to the Alumni Directory, then either your username/password was incorrect, or you have not yet been approved by an administrator.</p>
			    <?php }
			    else if( isset( $_GET['login'] ) && $_GET['login'] == 'empty' ) { ?>
			        <p>If you were not redirected to the Alumni Directory, then either your username/password was incorrect, or you have not yet been approved by an administrator.</p>
			    <?php } ?>
			</div>
		</div>

	</div>
  <?php endwhile; endif; ?>
</section>
<?php get_template_part( 'template-parts/reusable/covid-popup' ); ?>
<?php get_footer();