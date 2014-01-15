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
	    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' 
	    rel='stylesheet' type='text/css'>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    
		<?php wp_head(); ?>
		<?php

			$bg = array('1.jpg','1_2.jpg','2.jpg','2_2.jpg','3.jpg','5.jpg','6.jpg','7.jpg','7_2.jpg',
						 '8.jpg','9.jpg','9_2.jpg','10.jpg','10_2.jpg','11.jpg','11_2.jpg','12.jpg',
						 '12_2.jpg','13.jpg','13_2.jpg'); 
			// array of filenames

			$i = rand(0, count($bg)-1); // generate random number size of the array
			$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen

			$bg_gradient = array('bottom1.png','bottom2.png','bottom3.png','bottom4.png',
								 'bottom5.png','bottom6.png');
			$i = rand(0, count($bg_gradient)-1); // generate random number size of the array
			$selectedBg_gradient = "$bg_gradient[$i]"; // set variable equal to which random filename was chosen
		?>
		<style type="text/css">
		<!--
		body{
			background: url("<?php echo get_template_directory_uri(); ?>/img/<?php echo $selectedBg; ?>") center top no-repeat;
			background-size: 100%;
		}
		#bottom-gradient {
			height: 289px;
			width: 100%;
			background: url('<?php echo get_template_directory_uri(); ?>/img/<?php echo $selectedBg_gradient; ?>') repeat-x;
			position: absolute;
			bottom: 0;
		}
		-->
		</style>
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
