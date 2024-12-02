<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/style.css', array(), time());

    // wp_enqueue_style('bootstrap_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null);

});
