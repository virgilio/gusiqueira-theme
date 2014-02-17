<?php wp_enqueue_script('jquery'); ?>
<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/agenda.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.leanModal.js"></script>    
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<div id="content" class="agenda-container">

	<?php 
		$verde = false;
		$cont = 1;
		$insere_div = true;
		while ( have_posts() ) : the_post(); 			
	?>
			<?php if ($insere_div) { ?>
					<div class="bloco-eventos">	
			<?php } 
				$link_evento = get_post_meta( get_the_ID(), 'link_evento' ); 
				?>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class( 'evento ' + ($verde) ? 'evento-verde' : 'evento-azul'); ?> >
					<a href="<?php echo $link_evento[0]; ?>" target="_blank">
						<header class="entry-header">
							<h2 class="entry-title">
								<?php the_title(); ?>
							</h2>
							<?php $local = get_post_meta( get_the_ID(), 'local' ); ?>
							<span class="local"><?php echo $local[0]; ?></span>
						</header><!-- .entry-header -->
						<div class="clearfix"></div>
					</a>
					<?php if($post->post_content != "") { ?>
						<a href="#event-<?php echo $post->ID; ?>" class="link-evento" rel="leanModal">
							Usar cupom neste evento
						</a>
						<div class="event-form-content" id="event-<?php echo $post->ID; ?>">
			                <?php the_content(); ?>
			            </div>
		            <?php } ?>
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