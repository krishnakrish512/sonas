<?php
add_filter('nav_menu_link_attributes', 'wp_menu_add_class', 10, 3);

function wp_menu_add_class($atts, $item, $args)
{
    $class = 'menu-link'; // or something based on $item

    $atts['class'] = $class;

    return $atts;
}

function  wp_menu_link_class($classes, $item)
{
    if (in_array('current_menu_item', $classes)) {
        $classes[] = 'menu-link';
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'wp_menu_link_class', 10, 2);

