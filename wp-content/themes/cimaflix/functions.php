<?php

/*
** Function to add my custom styles
** Added by @khalid
** wp_enqueue_style() syntax: wp_enqueue_style( $handle, $src, $deps, $ver, $media );
*/

function khalid_add_styles() {

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/fontawesome.min.css');
}

/*
** Function to add my custom scripts
** Added by @khalid
** wp_enqueue_script() syntax: wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
*/

function khalid_add_scripts() {

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/js/fontawesome.min.js', array(), false, true);
    wp_enqueue_script('JQuery-js', get_template_directory_uri() . '/js/JQuery3.3.1.js', array(), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true);
}

/*
** add actions
** added by @khalid
** add_action()s
*/
add_action('wp_enqueue_scripts', 'khalid_add_styles');
add_action('wp_enqueue_scripts', 'khalid_add_scripts');