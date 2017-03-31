<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mmi
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- LINKS AND SCRIPTS -->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text.css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">


<?php wp_head(); ?>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"/>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"/>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mmi' ); ?></a>

	<header class="site-header" role="banner">
		<div class="navbar-wrapper">
			
			<!-- NAVIGATION MENU -->     
	        <nav class="navbar-default">
	            <div class="container">
	                <div>
	                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>""><img id="brandLogoNav" class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mmi-logo-horizontal.png"></a>
	                </div>
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
	                </div>
	             

	                <?php

							wp_nav_menu ( array (


								'theme_location' => 'mobile',
								'container' => 'nav',
								'container_class' => 'navbar-collapse collapse',
								'menu_class' => 'nav navbar-nav mobile-menu'

							) );

					?>

	                <?php

							wp_nav_menu ( array (


								'theme_location' => 'primary',
								'container' => 'false',
								'container_class' => 'navbar-collapse collapse',
								'menu_class' => 'nav navbar-nav navbar-left primary-menu'

							) );

					?>
					<?php

							wp_nav_menu ( array (


								'theme_location' => 'primary-right',
								'container' => 'false',
								'container_class' => 'navbar-collapse collapse',
								'menu_class' => 'nav navbar-nav navbar-right primary-menu'

							) );

					?>

	            	</div><!-- /.container-fluid -->
        	</nav>

        </div>
	</header><!-- #masthead -->

