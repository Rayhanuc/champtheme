<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WOW_Shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wow-shop' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="site-branding">
                        <?php
                        //for custom logo
                        if(has_custom_logo()) : {
                            the_custom_logo();
                        }
                        else : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php endif; ?>

                    </div><!-- .site-branding -->
                </div>
                <div class="col-lg-7 text-center">
                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
                <div class="col-lg-3 text-right">
                    <div class="header-right-content">
                        <a href=""><i class="fa fa-user"></i></a>
                        <a href=""><i class="fa fa-search"></i></a>
                        <a href=""><i class="fa fa-heart-o"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
		

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
        <div class="container">
            <div class="row">
                <div class="col">

                
