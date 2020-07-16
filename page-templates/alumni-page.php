<?php
/*
Template Name: Alumni Page
	-This page is the main template for any additional child pages for the Alumni section. (Excludes: alumni login, alumni registration, alumni directory, and edit-alumni-profile)
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
		<h1 class="secondary-page__content-header"><?php the_title(); ?></h1>
		<div class="secondary-page__copy-container">
			<?php the_content(); ?>
		</div>

	</div>
  <?php endwhile; endif; ?>
</section>
<?php get_template_part( 'template-parts/reusable/covid-popup' ); ?>
<?php get_footer();