<?php
/**
 * The sidebar containing the space for soundcloud widget
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage gusiqueira_theme
 * @since Gu Siqueira 0.0.11
 */

if ( is_active_sidebar( 'soundcloud' ) ) : ?>
    <script type="text/javascript" src="https://w.soundcloud.com/player/api.js"></script>

    <div class="sidebar-soundcloud" role="complementary">
	    <?php dynamic_sidebar( 'soundcloud' ); ?>
	</div><!-- #secondary -->

    <?php   
        wp_enqueue_script(
            'lyrics',
            get_template_directory_uri() . '/js/lyrics.js', 
            array('jquery')
        ); 
        wp_localize_script( 'lyrics',
                            'lyrics',
                            array( 'ajaxurl' => admin_url( 'admin-ajax.php' ))); 
    ?>

<?php endif; ?>
