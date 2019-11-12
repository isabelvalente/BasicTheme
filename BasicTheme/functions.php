<?php

// CSS
function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('customstyles', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('customstyles');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Bootstrap classes Nav Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Javascript
function load_scripts()
{
  $dependencies = array('jquery');
  wp_register_script('javascript', get_template_directory_uri() . '/JS/bootstrap.min.js', array('jquery'), null, true);
  wp_enqueue_script('javascript');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function contact_page_stylesheet() {
  if (is_page('009')) {
    wp_enqueue_style( 'contact-page-styling', get_stylesheet_directory_uri() . '/css/contact.css');
  }
}
add_action('wp_enqueue_scripts', 'contact_page_stylesheet');

function custom_fonts() {
  wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Sedgwick Ave', false);
}
add_action( 'wp_enqueue_scripts', 'custom_fonts');

// Gallery styling
add_filter( 'use_default_gallery_style', '__return_false');

// Lightbox
function basictheme_add_lightbox() {
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/lightbox/js/jquery.fancybox.pack.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/lightbox/js/lightbox.js', array( 'fancybox' ), false, true );
    wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/lightbox/css/jquery.fancybox.css' );
}
add_action( 'wp_enqueue_scripts', 'basictheme_add_lightbox' );

// Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails');
add_theme_support( 'custom-background' );
set_post_thumbnail_size ( 1568, 9999 );

// Menus
register_nav_menus(
  array(
  'primary' => __( 'Primary Menu'),
));


function responsive_tables_enqueue_script() {
    wp_enqueue_script( 'responsive-tables', get_template_directory_uri() . '/responsive-table.js', $deps = array(), $ver = false, $in_footer = true );
}
add_action( 'wp_enqueue_scripts', 'responsive_tables_enqueue_script' );

 ?>
