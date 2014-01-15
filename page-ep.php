<?php 
  /*
   * Template Name: EP Template
   * Template Description: Template for EP page
  */
   ?>

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
    <div class="letra">
    	<p>
	    	Tem dias que eu acordo pensando em você <br/>
			Em fração de segundos vejo o mundo desabar <br/>
			Aí que cai a ficha que eu não vou te ver <br/>
			Será que esse vazio um dia vai me abandonar?
		</p>
		<p>
	    	Tem dias que eu acordo pensando em você <br/>
			Em fração de segundos vejo o mundo desabar <br/>
			Aí que cai a ficha que eu não vou te ver <br/>
			Será que esse vazio um dia vai me abandonar?
		</p>
		<p>
	    	Tem dias que eu acordo pensando em você <br/>
			Em fração de segundos vejo o mundo desabar <br/>
			Aí que cai a ficha que eu não vou te ver <br/>
			Será que esse vazio um dia vai me abandonar?
		</p>
		<p>
	    	Tem dias que eu acordo pensando em você <br/>
			Em fração de segundos vejo o mundo desabar <br/>
			Aí que cai a ficha que eu não vou te ver <br/>
			Será que esse vazio um dia vai me abandonar?
		</p>
    </div>
    <div class=""></div>

</div>

<?php get_footer(); ?>
