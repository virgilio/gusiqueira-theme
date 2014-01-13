<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet"
	      href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
	<link rel="stylesheet"
	      href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet"
	      href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    
	<?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using
        an <strong>outdated</strong>
        browser. Please <a href="http://browsehappy.com/">upgrade your
        browser</a> to improve your experience.</p> 
        <![endif]-->

        <!-- Add your site or application content here -->
	<div id="main-wrapper">
	  <header>
	    <img alt="Logo"
	       src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
	    <div id="redes-sociais">
	    	<a href="http://www.facebook.com/pages/Gu-Siqueira-e-Offbeat/282264878540722" 
	    		target="_blank" class="icon-fb"></a>
	    	<a href="#" class="icon-tt"></a>
	    	<a href="#" class="icon-vimeo"></a>
	    	<a href="http://soundcloud.com/gueoffbeat" 
	    	target="_blank" class="icon-sc"></a>
	    </siv>
	  </header>
	  <div id="upper-gradient"></div>
	  <div id="bottom-gradient"></div>
	  <div id="content-wrapper">
	    <div id="patterns">
	      <div class="pattern pattern1"></div>
	      <div class="pattern pattern2"></div>
	      <div class="pattern pattern3"></div>
	      <div class="pattern pattern4"></div>
	      <div class="pattern pattern5"></div>
	      <div class="pattern pattern6"></div>
	      <div class="pattern pattern7"></div>
	      <div class="pattern pattern8"></div>
	      <div class="pattern pattern9"></div>
	    </div>
	    <div class="container gs-container">
	      <nav>
		<?php 
   		  wp_nav_menu( 
		    array( 'theme_location' => 'primary', 
			   'menu_class' => 'nav-menu' ) ); 
	        ?>
	      </nav>
	    </div>
