<!DOCTYPE html>

<html dir="ltr" lang="en-US">



<head>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
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
                    <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                        </div>

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

                    

<?php get_template_part('/header/main-header');







