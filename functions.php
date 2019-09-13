<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_parent_theme_file_uri( 'style.css' ) );
    wp_enqueue_style( 'child-style',
        get_theme_file_uri( 'style.css' ),
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style( 'component_menu',
        get_theme_file_uri( 'css/component.css' ),
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function theme_js() {
    wp_enqueue_script( 'modernizr_custom', get_stylesheet_directory_uri() . '/js/modernizr-custom.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'classie', get_stylesheet_directory_uri() . '/js/classie.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
    
}

add_action('wp_enqueue_scripts', 'theme_js');


?>