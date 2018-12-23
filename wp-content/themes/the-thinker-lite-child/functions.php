<?php
/**
 * Created by PhpStorm.
 * User: lindomar
 * Date: 23/12/18
 * Time: 3:58 PM
 */

//Folhas de estilos
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


/**
 * Criando uma area de widgets - On Home Page Content
 *
 */
function widgets_novos_widgets_init() {

    register_sidebar( array(
        'name' => 'Home Page Content',
        'id' => 'homepage_widgets',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );