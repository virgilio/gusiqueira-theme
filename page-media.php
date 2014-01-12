<?php 
  /*
   * Template Name: Fotos e Videos
   * Template Description: Full width no background
   */
?>
<?php  get_header(); ?>

<div id="content22">
    <div style="width: 500%;">
    teste
    <?php 
        while ( have_posts() ) : the_post();
            //the_content();
            echo get_template_part( 'content-no-title' );
        endwhile; // end of the loop. 
    ?>
    </div>
</div>

<?php get_footer(); ?>
