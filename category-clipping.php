<?php get_header(); ?>

<div id="content" class="clipping-container">

	<?php 
		$cor = 0;
		$cont = 1;
		$insere_div = true;
		while ( have_posts() ) : the_post(); 			
	?>
			<?php if ($insere_div) { ?>
					<div class="bloco-clipping">	
			<?php } 
				$insere_div = false;
				$link_clipping = get_post_meta( get_the_ID(), 'link_clipping' ); 
			?>
			
				<div id="post-<?php the_ID(); ?>" 
					<?php post_class( (($cor == 0) ? 'clipping-vermelho' : 
						(($cor == 1) ? 'clipping-verde' : 'clipping-azul')) ); ?> >
					<header class="entry-header">
						<a href="<?php echo $link_clipping[0]; ?>" target="_blank">
							<h2 class="entry-title">
								<?php the_title(); ?>
							</h2>						
						</a>
					</header><!-- .entry-header -->

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div>		
				</div><!-- #post -->

			<?php if (($cont % 3) == 0) { ?>
					</div>	
			<?php 
					$insere_div = true;
					if ($cor == 2){
						$cor = 0;
					} else 
						{ 
							$cor++; 
						}
				} 
			?>

	<?php 						
			$cont++;
		endwhile; 
	?>

	</div><!-- #content -->

<?php get_footer(); ?>