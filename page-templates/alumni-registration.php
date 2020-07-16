<?php
/*
Template Name: Alumni Registration

	-This page is the template for registering as an alumni
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


	<div class="alumni__content-container">
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
		<div class="alumni-registration__title-container">
			<h1 class="alumni__content-header">Register for the Alumni Directory</h1>
			<p class="alumni-title-copy__register bran-reg">Register today to recieve the latest updates about Phoenix Christian.<br>Fill out the form below to get started</p>
		</div>
		<div class="alumni__alumni-container">
			<div class="form-container">
				<?php the_content(); ?>
			</div>
		</div>

	</div>
  <?php endwhile; endif; ?>
</section>
<?php get_template_part( 'template-parts/reusable/covid-popup' ); ?>
<?php get_footer();