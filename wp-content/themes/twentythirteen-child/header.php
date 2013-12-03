<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-theme.min.css"> -->
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css"> -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">BOUNCE</a>
			</div>

			<div id="navbar-collapse" class="collapse navbar-collapse">
				<?php

					// Options for navigation menu
					$args = array(
						'theme_location'  => '',
						'menu'            => 'Dribbble',
						'container'       => 'ul',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'nav navbar-nav',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // <li style="position: relative; margin-top: 11px; margin-right: 20px;"><img src="http://assets0.dribbble.com/assets/logo-small-6211913b000fc7eb5dbe90343e1ae746.png"></li>
						'depth'           => 0,
						'walker'          => ''
					);

					// Render the menu
					wp_nav_menu($args);

					// Search form; Aligned right
					get_search_form();
				?>
			</div>
		</div>
	</nav>