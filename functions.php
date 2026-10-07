<?php
// Fichier functions.php

function wave_setup() {
    add_theme_support( 'title-tag' );        // WordPress gère la balise <title>
    add_theme_support( 'post-thumbnails' );  // active les images à la une
}
add_action( 'after_setup_theme', 'wave_setup' );

function wave_assets() {
    wp_enqueue_style( 'wave-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wave_assets' );