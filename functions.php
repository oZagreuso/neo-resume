<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Déclaration du main style css

function olivier_register_assets() {
wp_enqueue_style( 
    'olivier', 
    get_template_directory_uri() . '/assets/css/main.css',
    array(), 
    '1.0'
);}

add_action( 'wp_enqueue_scripts', 'olivier_register_assets' );

// Déclaration de l'emplacement du menu

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

// CREATION menu PERSO

// function wpb_custom_new_menu() { 
//     register_nav_menu('main',__( 'Menu Principal' )); 
//     } 
//     add_action( 'init', 'wpb_custom_new_menu' );
