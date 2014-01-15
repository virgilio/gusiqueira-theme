<?php

add_theme_support( 'post-thumbnails');
add_theme_support( 'post-formats', array(
           'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
               ) );


//add_filter( 'use_default_gallery_style', '__return_false' );

register_nav_menus( array(
  'primary'   => __( 'Top Menu', 'gusiqueira' ),
) );

register_sidebar(array(
  'name' => __( 'Sidebar para widget do sound cloud' ),
  'id' => 'soundcloud',
  'description' => __( 'Sidebar que aparecerá na página do EP' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

register_sidebar(array(
  'name' => __( 'Formulário EP' ),
  'id' => 'form-ep',
  'description' => __( 'Formulário para download do EP' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>'
));

?>
