<?php 
  /*
   * Template Name: EP Template
   * Template Description: Template for EP page
  */
   ?>

<?php wp_enqueue_script('jquery'); ?>
<?php   
 
  wp_enqueue_script(
      'scrollbar',
      get_template_directory_uri() . '/scrollbar/jquery.mCustomScrollbar.min.js', 
      array('jquery')
  ); 
  wp_enqueue_script(
      'scroll',
      get_template_directory_uri() . '/js/scroll.js', 
      array('jquery', 'scrollbar')
  ); 
?>
<link href="<?php echo get_template_directory_uri(); ?>/scrollbar/jquery.mCustomScrollbar.css" 
      rel="stylesheet" type="text/css" />

<?php get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=292772274170801";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="content" class="ep-container clearfix">
    
	<div class="col-soundcloud">
		<?php get_sidebar('form-ep') ?>
		<img src="<?php echo get_template_directory_uri(); ?>/img/ep-topo.jpg" />
	</div>
  <div>		
    	<?php get_sidebar('soundcloud') ?>
	</div>
    <div id="current_lyric" class="letra">
        <p>Selecione uma música!</p>     
    </div>
    <div class=""></div>

</div>

<?php get_footer(); ?>
