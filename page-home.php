<?php 
  /*
   * Template Name: Home Template
   * Template Description: Show attached media as content background
  */
   ?>
<?php  get_header(); ?>

<div id="content" class="home-container">
    <?php while ( have_posts() ) : the_post(); ?>
   <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
