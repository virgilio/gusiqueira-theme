<?php

add_theme_support( 'post-thumbnails');
add_theme_support( 'post-formats', array(
           'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
               ) );

if ( is_admin() ) {
    add_action( 'wp_ajax_nopriv_lyrics_post', 'gs_get_lyrics_post' );
    add_action( 'wp_ajax_lyrics_post', 'gs_get_lyrics_post' );
    }

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


function gs_get_lyrics_post() {
    global $wpdb;
    if(isset($_POST['music_id'])){
        $querystr = "
            SELECT $wpdb->posts.* 
                FROM $wpdb->posts, $wpdb->postmeta
                WHERE $wpdb->posts.ID = $wpdb->postmeta.post_id 
                AND $wpdb->postmeta.meta_key = 'music_id' 
                AND $wpdb->postmeta.meta_value = " . $_POST["music_id"]
                . " AND $wpdb->posts.post_status = 'publish' 
                AND $wpdb->posts.post_type = 'post'
                ORDER BY $wpdb->posts.post_date DESC";

        //echo $querystr;
        $pageposts = $wpdb->get_results($querystr, OBJECT);
        if($pageposts){
            foreach($pageposts as $post){
                $lyric = "<h3>" . apply_filters('the_title', $post->post_title) . "</h3>";
                $lyric .= apply_filters('the_content', $post->post_content);
                echo $lyric;
                //echo ($post->post_content);
            } 
        } else {
            echo "Nenhuma letra encontrada";
        }
    } else {
        echo "Não foi possivel encontrar letra";
    }
    die();
}

?>
