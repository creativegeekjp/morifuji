<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package morifuji
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<header id="header" class="site-header" role="banner">

		<div class="site-branding pull-left">
			<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo: <?php echo bloginfo( 'name' ); ?>">
			</a>
		</div><!-- .site-branding -->


		<div id="language" class="pull-right">
			<ul class="list-inline">
				<li><a href="#"><i class="fa fa-caret-right"></i> english</a></li>
				<li><a href="#"><i class="fa fa-caret-right"></i> japanese</a></li>
			</ul>
		</div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
