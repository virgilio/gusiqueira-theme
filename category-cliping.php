<?php get_header(); ?>

<div id="content" class="agenda-container">

	<?php 
		$verde = false;
		$cont = 1;
		$insere_div = true;
		while ( have_posts() ) : the_post(); 			
	?>
			<?php if ($insere_div) { ?>
					<div class="bloco-eventos">	
			<?php } ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class( 'evento ' + ($verde) ? 'evento-verde' : 'evento-azul'); ?> >
					<header class="entry-header">
						<h2 class="entry-title">
							<?php the_title(); ?>
						</h2>
						<?php $local = get_post_meta( get_the_ID(), 'local' ); ?>
						<span class="local"><?php echo $local[0]; ?></span>
					</header><!-- .entry-header -->

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div>		
				</div><!-- #post -->

			<?php if (!$insere_div) { ?>
					</div>	
			<?php } ?>

	<?php 						
			$insere_div = ($cont % 2) == 0;
			$verde = (($cont % 4) == 0 ? !$verde : $verde);
			$cont++;
		endwhile; 
	?>

	</div><!-- #content -->

<?php get_footer(); ?>