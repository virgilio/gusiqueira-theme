<?php 
  /*
   * Template Name: Press Kit
   * Template Description: Centered gradient background 
   */
?>
<?php  get_header(); ?>

<div id="content">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php echo get_template_part( 'content'); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
