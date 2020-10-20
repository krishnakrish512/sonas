<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <title>Forum / Community | Canvas</title>
    <?php wp_head(); ?>
</head>
<body class="stretched search-overlay">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">
    <header id="header" class="full-header header-size-md" data-mobile-sticky="true">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
                        }
                        ?>
                        <a href="<?= get_home_url(); ?>" class="standard-logo"><img
                                    src="<?php echo $logo; ?>" alt="sonas"></a>

                    </div><!-- #logo end -->

                    <div class="header-misc ml-0 d-none">

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search" class="header-misc-icon">
                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                        </div><!-- #top-search end -->


                    </div>
                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>
                    <!-- Primary Navigation
                    ============================================= -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'menu_class' => 'menu-container',
                        'container_class' => 'primary-menu'
                    )); ?>
                    <!-- #primary-menu end -->
                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>

    </header><!-- #header end -->

    <?php if (!is_front_page()) {
//        var_dump(is_front_page());
        ?>
        <section id="page-title" class="bg-color py-6 page-title-center text-center">
            <?php
            global $post;
            $title = '';
            if ($post) {
                $title = $post->post_title;
            }
            if (is_archive()) {
                $title = get_the_archive_title();
                $title = explode(':', $title);
                $title = $title[1];
            }
            if (is_search()) {
                $title = "Search Results";
            }
            ?>
            <div class="container">
                <h2 class="h2" style="font-weight: 800"><?php the_title(); ?></h2>
                <?php if (!is_single()) { ?>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="alt-color" href="http://dev.digitalflowstudio.com/sonas/">Home</a>
                        </li>
                        <li class="breadcrumb-item text-black-50 active" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                <?php } else { ?>
                    <?php $author = get_field('author_name');
//                    var_dump($author);
//                    exit();
                    ?>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-black-50 active"
                            aria-current="page"> <?php echo $author; ?></li>
                    </ol>
                <?php } ?>
            </div>
        </section>
    <?php } ?>





