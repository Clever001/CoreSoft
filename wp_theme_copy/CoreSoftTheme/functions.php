<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/style.css', array(), time());
    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), time());
    wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), time());

    wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('bootstrap-script'), false, true);
    wp_enqueue_script('swiper-init-script', get_stylesheet_directory_uri() . '/resources/javascript/slider.js', array('swiper-script'), false, true);


});

register_nav_menus(
    array(
        'head_menu' => 'Меню в шапке сайта'
    )
);

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

