<?php 
  /*
   * Template Name: Press Kit
   * Template Description: Centered gradient background 
   */
?>
<?php  get_header(); ?>

<div id="content">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php 
		$link_release = get_post_meta( get_the_ID(), 'release' ); 
		$link_fotos = get_post_meta( get_the_ID(), 'fotos' ); 
		$link_mapa_palco = get_post_meta( get_the_ID(), 'mapa_palco' ); 
		$link_rider = get_post_meta( get_the_ID(), 'rider' ); 
	?>
    <div class="press-container">

    	<a href="<?php echo $link_release[0]; ?>" class="release" target="_blank">
    		<img src="<?php echo get_template_directory_uri(); ?>/img/release.png" />
    		<h2>Release</h2>
    	</a>
    	<a href="<?php echo $link_fotos[0]; ?>" class="fotos" target="_blank">
    		<h2>Fotos de divulgação</h2>
    		<img src="<?php echo get_template_directory_uri(); ?>/img/fotos.png" />
    	</a>
    	<a href="<?php echo $link_mapa_palco[0]; ?>" class="mapa_palco" target="_blank">
    		<img src="<?php echo get_template_directory_uri(); ?>/img/mapadepalco.png" />
    		<h2>Mapa de palco</h2>
    	</a>
    	<a href="<?php echo $link_rider[0]; ?>" class="rider" target="_blank">
    		<img src="<?php echo get_template_directory_uri(); ?>/img/rider.png" />
    		<h2>Rider</h2>
    	</a>
    </div>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
