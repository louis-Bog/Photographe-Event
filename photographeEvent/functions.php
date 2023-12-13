<?php

add_action('wp_enqueue_scripts', 'pe_enqueue_assets');
function pe_enqueue_assets()
{
  
  wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/scss/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));

  /* Ajout de la librairie JQuery  */
  wp_enqueue_script('JQuery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array('jquery'), '3.7.1', true);

  wp_enqueue_script('Modal', get_stylesheet_directory_uri() . '/assets/js/modal.js', array('jquery'), '1.0.0', true);

   // Affichage des images miniature (script JQuery)
   wp_enqueue_script('AffichageMiniature', get_stylesheet_directory_uri() . '/assets/js/AffichageMiniature.js', array('jquery'), '1.0.0', true);

   // Custom JS (script JQuery)
   wp_enqueue_script('CustomJS', get_stylesheet_directory_uri() . '/assets/js/Custom.js', array('jquery'), '1.0.0', true);


}


// Menus
add_action('init', 'pe_register_menus');
function pe_register_menus() {
  register_nav_menus([
    'header-menu' => __('Menu En-tête', 'PhotographeEvent'),
    'footer-menu' => __('Menu Pied de Page', 'PhotographeEvent')
  ]);
}


// Supports WP
add_action('after_setup_theme', 'pe_supports');
function pe_supports() {
  add_theme_support('custom-logo');
  // Ajouter la prise en charge des images mises en avant
  add_theme_support('post-thumbnails');
  // Ajouter automatiquement le titre du site dans l'en-tête du site
  add_theme_support('title-tag');
  add_theme_support('menus');
}


// Plugin ContactForm7
add_filter('wpcf7_autop_or_not', '__return_false'); // Disable p tags
add_filter('wpcf7_form_elements', 'cf7_disable_span'); // Disable span tags
function cf7_disable_span($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
  return $content;
}