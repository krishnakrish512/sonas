<?php
function setup_sonas()
{
    add_theme_support('post-thumbnails');
    add_theme_support('post-permalinks');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    register_nav_menus(
        array(
            'primary' => "primary Menu",
            'footer_first' => "footer first",
            'footer_second' => "footer second",
            'footer_third' => "footer third",
            'footer_fourth' => "footer fourth"
        )
    );
    add_image_size('category-thumb', 350, 197,true);

}

add_action('after_setup_theme', 'setup_sonas');

function register_scripts()
{
    if ( ! is_user_logged_in() ) {
        wp_deregister_style( 'wp-block-library' );
        wp_deregister_style( 'dashicons' );

        wp_dequeue_style( 'wc-block-style' );
    }


    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper.css');
    wp_enqueue_style('font-icons-style', get_template_directory_uri() . '/assets/css/font-icons.css');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('colors-style', get_template_directory_uri() . 'css/colors.php?color=F9BE79');
    wp_enqueue_style('magnific-popup-style', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('forum-style', get_template_directory_uri() . '/demos/forum/forum.css');
    wp_enqueue_style('fonts-style', get_template_directory_uri() . '/demos/forum/css/fonts.css');

    if ( ! is_admin() ) {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', [], 1.0, true);
    }
    wp_enqueue_script('plugins-script', get_template_directory_uri() . '/assets/js/plugins.min.js', [], 1.0, true);
    wp_enqueue_script('tinymce-script', get_template_directory_uri() . '/assets/js/components/tinymce/tinymce.min.js', [], 1.0, true);
    wp_enqueue_script('functions-script', get_template_directory_uri() . '/assets/js/functions.js', [], 1.0, true);

}

add_action('wp_enqueue_scripts', 'register_scripts');




