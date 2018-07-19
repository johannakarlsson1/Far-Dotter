<?php


function farochdotter_theme_stylesheets() {
    wp_enqueue_style( 'style',  get_template_directory_uri() .'/style.css', array(), null, 'all' );
    wp_enqueue_script( 'main', get_template_directory_uri() .'/js/main.js', array(), null, 'all' );
}

add_action( 'wp_enqueue_scripts', 'farochdotter_theme_stylesheets' );

function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/scripts.js');

}

add_action( 'wp_enqueue_scripts', 'theme_js');
// Navigation menus

register_nav_menus( array(
  'primary' => __( 'Primary Menu'),
  'footer' => __( 'Footer Menu')
));

register_sidebar(array(
    'name' => 'sidebar-left',
    'before_widget' => '<div class="sidebar-box">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title">',
    'after_title' => '</div>'
));

register_sidebar(array(
    'name' => 'sidebar-category-veckans',
    'before_widget' => '<div class="sidebar-box">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title">',
    'after_title' => '</div>'
));

register_sidebar(array(
    'name' => 'sidebar-category-musik',
    'before_widget' => '<div class="sidebar-box">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title">',
    'after_title' => '</div>'
));

register_sidebar(array(
    'name' => 'sidebar-category-mat',
    'before_widget' => '<div class="sidebar-box">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title">',
    'after_title' => '</div>'
));

register_sidebar(array(
    'name' => 'sidebar-category-dricka',
    'before_widget' => '<div class="sidebar-box">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title">',
    'after_title' => '</div>'
));
