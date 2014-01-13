<?php 
  /*
   * Template Name: Fotos e Videos
   * Template Description: Full width no background
   */
?>
<?php  get_header(); ?>

<div id="content">
    <?php 
        while ( have_posts() ) : the_post();
            the_content();
            //echo get_template_part( 'content' );
        endwhile; // end of the loop. 
    ?>
</div>

<?php get_footer(); ?>
