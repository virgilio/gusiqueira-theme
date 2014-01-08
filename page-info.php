<?php 
  /*
   * Template Name: Clipping e Agenda
   * Template Description: Full width semi-transparent background
   */
?>

<?php  get_header(); ?>

<div id="content">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php echo get_template_part( 'content'); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
