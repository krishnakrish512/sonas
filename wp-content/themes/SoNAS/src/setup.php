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

if (function_exists('acf_add_options_page')) {


    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

}
function theme_tiny_mce_before_init($init)
{
    $init['block_formats'] = 'Paragraph=p;Heading 1=h1;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Pre=pre;Charasticts=charasticts;';
    return $init;
}

add_filter('tiny_mce_before_init', 'theme_tiny_mce_before_init');

function theme_after_wp_tiny_mce()
{
    ?>
    <script>
        jQuery(document).on('tinymce-editor-init', function (event, editor) {
            tinymce.activeEditor.formatter.register('charasticts', {
                block: 'div',
                classes: 'charasticts'
            });
        });
    </script>
    <?php
}

add_action('after_wp_tiny_mce', 'theme_after_wp_tiny_mce');


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




