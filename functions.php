<?php


function janigaga_theme_support() {
    //Add Dynamic title tag suppor 
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'janigaga_theme_support');

function janigaga_menu() {
    $location = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );
    register_nav_menus( $location );
}

add_action('init', 'janigaga_menu');

function janigaga_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style("janigaga-style", get_template_directory_uri() . "/style.css", array('janigaga-bootstrap'), $version, 'all');
    wp_enqueue_style("janigaga-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style("janigaga-fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'janigaga_register_styles');


function janigaga_register_scripts(){

    wp_enqueue_script("janigaga-jQuery", 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array() ,'3.4.1', true);
    wp_enqueue_script("janigaga-popper", 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array() ,'1.16.0', true);
    wp_enqueue_script("janigaga-bootstrap", 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array() ,'1.16.0', true);
    wp_enqueue_script("janigaga-js", get_template_directory_uri() . "/assets/js/main.js" , array() ,'1.0', true);
}
add_action( 'wp_enqueue_scripts', 'janigaga_register_scripts');

?>