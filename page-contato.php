<?php 
  /*
   * Template Name: Contato Template
   * Template Description: Narrow content area
  */
   ?>

<?php get_header(); ?>

<div id="content">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="contato-container">
    	<?php the_content(); ?>
    </div>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
