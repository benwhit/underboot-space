<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underboot
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'underboot' ); ?></a>

	
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
	
        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'underboot' ); ?></a>
        
        <?php get_template_part('widget-templates/notificationbar'); ?>

        <?php if ( is_home() || is_front_page() ) { ?>

            <div class="hs">
                <h2 class="hs__heading">
                    <img class="hs__heading-icon" src="/wp-content/themes/underboot-space/images/icons/planet_astrology-white.png" alt=""><br>
                    <?php the_title() ?>
                </h2>

                <div class="owl-carousel hs">
                    <div class="hs__slide hs__slide--one">
                        <h3 class="hs__slide__heading"> An Underboot Child Theme</h3>
                    </div>
                    <div class="hs__slide hs__slide--two"> 
                        <h3 class="hs__slide__heading"> Built with Bootstrap 4, Underscores and Sass </h3>
                    </div>
                    <div class="hs__slide hs__slide--three"> 
                        <h3 class="hs__slide__heading"> Simple Theme Design & Structure </h3>
                    </div>
                    <div class="hs__slide hs__slide--four"> 
                        <h3 class="hs__slide__heading"> New Slider Goes Here </h3>
                    </div>
                </div>
            </div>

            <?php get_template_part('widget-templates/hero'); ?>

        <?php } ?>

        <nav class="navbar navbar-dark bg-inverse site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                            
                <div class="container">

                            <div class="navbar-header">

                                <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->

                                  <button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <!-- Your site title as branding in the menu -->
                                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

                            </div>

                            <!-- The WordPress Menu goes here -->
                            <?php wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
                                        'menu_class' => 'nav navbar-nav',
                                        'fallback_cb' => '',
                                        'menu_id' => 'main-menu',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                            ); ?>

                </div> <!-- .container -->
                
            
        </nav><!-- .site-navigation -->
        
    </div><!-- .wrapper-navbar end -->
