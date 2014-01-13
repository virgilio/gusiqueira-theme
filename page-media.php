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
        /*
         *  normRand: returns normally distributed random numbers
          */
        function normRand() {
              var x1, x2, rad;
               
               do {
                   x1 = 2 * Math.random() - 1;
                   x2 = 2 * Math.random() - 1;
                   rad = x1 * x1 + x2 * x2;
               } while(rad >= 1 || rad == 0);
                                               
               var c = Math.sqrt(-1 * Math.log(rad) / rad);
               //return x1 * c;
               // console.log(c % 2 - 1);
               return c % 2 - 1;
        };
        
        function AscendingNumberSort (a,b) {return a-b;}
        function DescendingNumberSort(a,b) {return b-a;}

        var cheight = jQuery("#content article").height();
        var cwidth = jQuery("#content").width();
        var numimages = jQuery(".gallery-item").size();

        var aside = (cwidth - 994)/2;
        jQuery(".gallery-item").each(function(){
            var l = Math.abs(normRand()) * cwidth;
            var h = 0;
            if(l > aside && l < cwidth - aside){
                h = Math.random() * cheight/1.5;
            } else {
                h = Math.random() * cheight/3;     
                var img = jQuery(this).find("img");               
                if(l + img.width() > cwidth){
                    l = l - img.width();
                }
            }
            jQuery(this).css({'top' : h}); 
            jQuery(this).css({'left' : l});
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
