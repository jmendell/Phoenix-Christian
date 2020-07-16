<?php get_header('secondary'); ?>

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
		<div class="secondary-mobile-nav">

			<!-- display the top level page title within the nav and the associated link-->
			 <a class="sub-page__menu-title" href="#"><?php the_title(); ?></a>
				
				<ul class="page-sub-nav">
					<?php pc_list_child_pages(); ?>
				</ul>
			<!-- <div class="view-arrow secondary-menu-arrow"></div> -->
		</div>
		<h1 class="secondary-page__content-header"><?php the_title(); ?></h1>
		<div class="secondary-page__copy-container">
			<?php the_content(); ?>
		</div>
    
	</div>
  <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>

<!-- <?php echo get_the_title(get_top_ancestor_id()); ?> title of parent page --> 


<!-- <li class="page_item"><a href="<?php echo the_permalink('<?php echo get_the_title(get_top_ancestor_id()); ?>'); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></li>
<?php 

$args = array(
	'child_of' => get_top_ancestor_id(), //When on a 'child page', display the menu
	'title_li' => '',
)

 ?>

<?php wp_list_pages($args); ?> -->