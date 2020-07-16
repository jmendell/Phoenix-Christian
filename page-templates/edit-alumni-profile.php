<?php
/*
Template Name: Edit Alumni Profile

 -This page is the template for editing an Alumni profile
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
			 <a class="sub-page__menu-title" href="#">Sub Pages</a>

				<ul class="page-sub-nav bran-reg">
					<?php pc_list_child_pages(); ?>
				</ul>
		</div>
		<h1 class="alumni__content-header">Edit Your Alumni Profile</h1>
		<div class="alumni__copy-container">
			<div class="form-container">
				<?php the_content(); ?>
			</div>
		</div>

	</div>
  <?php endwhile; endif; ?>
</section>

<?php get_template_part( 'template-parts/reusable/covid-popup' ); ?>
<?php get_footer();