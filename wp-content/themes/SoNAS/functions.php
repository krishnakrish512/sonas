<?php
function theme_support()
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
}

add_action('after_setup_theme', 'theme_support');

if (function_exists('acf_add_options_page')) {


    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

}

add_filter('nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3);

function wpse156165_menu_add_class($atts, $item, $args)
{
//    var_dump($atts);
//    exit();
    $class = 'menu-link'; // or something based on $item

    $atts['class'] = $class;

    return $atts;
}


function register_scripts()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
//    wp_enqueue_script('google-maps-api', "https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap");
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper.css');
    wp_enqueue_style('font-icons-style', get_template_directory_uri() . '/assets/css/font-icons.css');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('colors-style', get_template_directory_uri() . 'css/colors.php?color=F9BE79');
    wp_enqueue_style('magnific-popup-style', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('forum-style', get_template_directory_uri() . '/demos/forum/forum.css');
    wp_enqueue_style('fonts-style', get_template_directory_uri() . '/demos/forum/css/fonts.css');
    wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/js/jquery.js', [], 1.0, true);
    wp_enqueue_script('plugins-script', get_template_directory_uri() . '/assets/js/plugins.min.js', [], 1.0, true);
    wp_enqueue_script('tinymce-script', get_template_directory_uri() . '/assets/js/components/tinymce/tinymce.min.js', [], 1.0, true);
    wp_enqueue_script('functions-script', get_template_directory_uri() . '/assets/js/functions.js', [], 1.0, true);

}

add_action('wp_enqueue_scripts', 'register_scripts');


function menu_link_class($classes, $item)
{
    if (in_array('current_menu_item', $classes)) {
        $classes[] = 'menu-link';
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'menu_link_class', 10, 2);

//function ecommmerce_new_customizer_settings( $wp_customize ) {
//// add a setting for the site logo
//    $wp_customize->add_setting( 'main_logo' );
//// Add a control to upload the logo
//    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo',
//        [
//            'label'    => 'Footer Logo',
//            'section'  => 'title_tagline',
//            'settings' => 'footer_logo',
//        ] ) );
//}
