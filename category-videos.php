<?php wp_enqueue_script('jquery'); ?>
<?php  get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/video.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.leanModal.js"></script>    
<script type="text/javascript">
    jQuery( document ).ready( function(){
        jQuery("a[rel*=leanModal]").leanModal();
    })
</script>
<div id="content">
    <div id="videos" class="videos-container">
    <?php 
        $n = true;    
        $i = 0;
        while ( have_posts() ) : the_post();
            if($i % 2 == 0) {
    ?>
        <div class="video-column <?php echo $n ? "odd" : "even"; ?>">
    <?php   
            } 
    ?>
        <div class="video">
            <div class="video-image">
                <a href="#video-<?php echo $post->ID; ?>" rel="leanModal" 
                    id="video-link-<?php echo $post->ID; ?>">
    <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail("medium");
            }   
        echo "<p class='video-title'>";
        the_title();
        echo "</p>";    
        echo "<p>";
        the_excerpt();
        echo "</p>";
    ?>
                </a>
            </div>
            <div class="video-post-content" id="video-<?php echo $post->ID; ?>">
                <?php the_content(); ?>
            </div>
        </div>
    <?php
            if($i % 2 != 0) {
    ?>
        </div>
    <?php 
            } 
            $i++;
            $n = $i % 2 == 0 ? !$n : $n;
        endwhile; // end of the loop. 
    ?>
    </div>
    <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
</div>

<?php get_footer(); ?>