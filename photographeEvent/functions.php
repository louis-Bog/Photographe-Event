<?php

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );



function photographeEvent_register_assets()
{
     // Chargement de la feuille du style du theme parent
     wp_enqueue_style('parent-theme', get_template_directory_uri() . '/style.css');

     // Chargement de la feuille de style complémentaire du thème enfant
     wp_enqueue_style('photographeEvent-child-theme', get_stylesheet_directory_uri() . '/assets/scss/theme.css');

      // Déclaration du js
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'photographeEvent_register_assets');

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');