<?php
/*
Template Name: Home
*/
get_header('home'); ?>

<?php get_template_part( 'template-parts/reusable/mobile-menu' ); ?>
<?php get_template_part( 'template-parts/home/hero' ); ?>
<?php get_template_part( 'template-parts/home/upcoming-events' ); ?>
<?php get_template_part( 'template-parts/home/pc-info-text-and-cards' ); ?>
<?php get_template_part( 'template-parts/home/bulleted-section' ); ?>
<?php get_template_part( 'template-parts/home/college-prep' ); ?>
<?php get_template_part( 'template-parts/reusable/take-the-next-step' ); ?>
<?php get_template_part( 'template-parts/reusable/video-modal-flyover' ); ?>
<?php get_template_part( 'template-parts/home/instagram-section' ); ?>

<?php get_template_part( 'template-parts/reusable/covid-popup' ); ?>

<?php get_footer();