<?php


//For adding dynamic title tag support
function load_titles(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme','load_titles');

// Load stylesheets

//we create a hook, that hooks onto the wp_head and adds the stylesheets there
/* 
the enqueue function parameters -> the stylesheet that you are inputting ie bootstrap
get template directory -> function to help you get your path
array -> a list of dependencies
all -> for media queries / media rules
*/

//Load the css 
function elohe_register_styles(){

    
    $version = wp_get_theme()-> get('Version');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css', array('bootstrap'),$version,'all');
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');

    //wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'elohe_register_styles');

//Load the js
function elohe_register_scripts(){


    wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js",array(),'3.4.1',true);
    wp_enqueue_script('popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0',true);
    wp_enqueue_script('bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array(), $version, true);
}

add_action('wp_enqueue_scripts', 'elohe_register_scripts');

?>