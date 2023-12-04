<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <nav role="navigation" aria-label="<?php esc_html_e( 'Menu principal', 'text-domain' ); ?>">
        <a href="<?php echo home_url( '/' ); ?>">
        <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
        </a>  

    
    <?php 
	wp_nav_menu( 
        array( 
            'theme_location' => 'main', 
            'container' => 'ul', // afin d'éviter d'avoir une div autour 
            'menu_class' => 'site__header__menu', // ma classe personnalisée 
            'menu_id'        => 'primary-menu',
        ) 
    ); 
?>
    </nav>
</header>
    <?php wp_body_open(); ?>