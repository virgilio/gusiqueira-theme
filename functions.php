<?php

add_theme_support( 'post-thumbnails');
add_theme_support( 'post-formats', array(
           'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
               ) );


//add_filter( 'use_default_gallery_style', '__return_false' );

register_nav_menus( array(
  'primary'   => __( 'Top Menu', 'gusiqueira' ),
) );

?>
