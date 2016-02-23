<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">
<header id="masthead" class="site-header" role="banner">
  <div class="site">
  	<div class="site-title">
    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a></div>
    <?php if ( has_nav_menu( 'primary' ) ) : ?>
          <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>
          <button id="toggleMenu" class="toggleMenu"> <?php _e( 'Menu', 'twentysixteen' ); ?></button>
          <div class="productSearch">
          	<a href="#" title="Search" class="searchIcon"><span class="genericon genericon-search"></span></a>
          	<?php get_product_search_form(); ?>
          </div>
          <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
            <?php wp_nav_menu( array('theme_location' => 'primary','menu_class' => 'mainMenu',) ); ?>
          </nav>
          <!-- .main-navigation -->
          
      <?php endif; ?>
  </div>
</header>
<div id="content" class="site-content">
