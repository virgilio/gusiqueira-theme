<?php 
  /*
   * Template Name: Galeria de Fotos
   * Template Description: Full width no background
   */
?>
<?php wp_enqueue_script('jquery'); ?>
<?php get_header(); ?>

<script type="text/javascript">
    jQuery(document).ready(function(){
        function rnd_snd() {
            return (Math.random()*2-1)+(Math.random()*2-1)+(Math.random()*2-1);
        }

        function rnd(mean, stdev) {
            console.log(mean + 'x' + stdev);
            return Math.round(rnd_snd()*stdev+mean);
        }
        
        var cheight = jQuery("#content article").height();
        var cwidth = jQuery("#content").width();
        var numimages = jQuery(".galley-item").length;

        jQuery(".gallery-item").each(function(){
            console.log(rnd(cwidth, cwidth/numimages));
            jQuery(this).css({'top' : cheight*(Math.random()%cheight)});
            jQuery(this).css({'left' : rnd(cwidth, cwidth/numimages)});
            jQuery(this).fadeIn(200);
        });
    });
</script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gallery.css">
<div id="content" style="">
    <div style="">
    <?php 
        while ( have_posts() ) : the_post();
            echo get_template_part( 'content', 'no-title' );
        endwhile; // end of the loop. 
    ?>
    </div>
</div>

<?php get_footer(); ?>
