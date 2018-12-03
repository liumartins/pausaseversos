<?php
/**
 * Created by PhpStorm.
 * User: lindomar
 * Date: 5/10/17
 * Time: 12:14 PM
 */



function reg_scripts() {
    wp_enqueue_style( 'bootstrapstyle', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrapthemestyle', get_template_directory_uri() . '/css/bootstrap-theme.min.css' );
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/css/stylesheet.css' );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );

}
add_action('wp_enqueue_scripts', 'reg_scripts');

function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );



// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );