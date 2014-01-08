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
            echo get_template_part( 'content' );
            $test = get_post_custom($post_id);
            echo "<pre>" . print_r($test, true) . "</pre>";
        endwhile; // end of the loop. 
    ?>
</div>

<?php get_footer(); ?>
