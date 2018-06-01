<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nomadsun
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Cardo:400,400i|Tenor+Sans|Archivo" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="barba-wrapper">
	<div id="page" class="barba-container relative">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nomadsun' ); ?></a>

		<header id="masthead" class="site-header absolute top-0 left-0 w-100 pa3 ph4-l">
      <nav id="site-navigation" class="main-navigation flex justify-between items-center">
        <a class="menu-toggle f6 archivo white ttu tracked block w4">
          Places
        </a>

        <a href="<?php echo get_site_url(); ?>">
          <img src="<?php bloginfo('template_directory'); ?>/images/sun-logo.svg" class="db">
        </a>

        <div class="flex items-center justify-end w4">
          <a href="https://facebook.com/nomadsun" class="db mh2 link">
            <img src="<?php bloginfo('template_directory')?>/images/facebook.svg" class="db">
          </a>
          <a  href="https://twitter.com/nomadsun" class="db mh2 link">
            <img src="<?php bloginfo('template_directory');?>/images/twitter.svg" class="db">
          </a>
          <a href="https://instagram.com/nomadsun" class="db mh2 link">
            <img src="<?php bloginfo('template_directory');?>/images/insta.svg" class="db">
          </a>
        </div>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

		<div id="content" class="site-content">
