<?php  get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/video.css">
<script type="text/javascript">
    
</script>
<div id="content">
    <div id="videos">
    <?php 
        $n = true;    
        $i = 0;
        while ( have_posts() ) : the_post();
            if($i % 2 == 0) {
    ?>
        <div class="video-column">
    <?php   
            } 
    ?>
        <div class="video <?php echo $n ? "odd" : "even"; ?>">
            <div class="video-image">
                <a href="#" id="video-link-<?php echo $post->ID; ?>">
    <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail("medium");
            }   
    ?>
                </a>
            </div>
            <div class="video-post-content">
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

<div class="modal">
</div>

<?php get_footer(); ?>
