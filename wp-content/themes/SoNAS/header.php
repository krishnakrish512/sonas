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
                        <a href="http://dev.digitalflowstudio.com/sonas/" class="standard-logo"><img
                                    src="<?php echo $logo; ?>" alt="sonas"></a>

                    </div><!-- #logo end -->

                    <div class="header-misc ml-0 d-none">

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search" class="header-misc-icon">
                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                        </div><!-- #top-search end -->

                        <!-- Top Account
                        ============================================= -->
                        <div class="header-misc-icon">
                            <a href="#" id="notifylink" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false" data-offset="12,12"><i
                                        class="icon-line-bell notification-badge"></i></a>
                            <div class="dropdown-menu dropdown-menu-right py-0 m-0 overflow-auto"
                                 aria-labelledby="notifylink" style="width: 320px; max-height: 300px">
                                <span class="dropdown-header border-bottom border-f5 font-weight-medium text-uppercase ls1">Notifications</span>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="d-flex list-group-item">
                                        <img src="assets/images/authors/1.jpg" width="35" height="35"
                                             class="rounded-circle mr-3 mt-1" alt="Profile">
                                        <div class="media-body">
                                            <h5 class="my-0 font-weight-normal text-muted"><span
                                                        class="text-dark font-weight-bold">SemiColonWeb</span> has
                                                replied on your post <span class="text-dark font-weight-bold">Package Generator – Approx time for a file.</span>
                                            </h5>
                                            <small class="text-smaller">10 mins ago</small>
                                        </div>
                                    </a>
                                    <a href="#" class="d-flex list-group-item">
                                        <i class="icon-line-check badge-icon bg-success text-white mr-3 mt-1"></i>
                                        <div class="media-body">
                                            <h5 class="my-0 font-weight-normal text-muted"><span
                                                        class="text-dark font-weight-bold">SemiColonWeb</span> has
                                                marked to your post as solved.</h5>
                                            <small class="text-smaller">2 days ago</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Top Account
                        ============================================= -->
                        <div class="header-misc-icon profile-image">
                            <a href="#" id="profilelink" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false" data-offset="12,12"><img class="rounded-circle"
                                                                              src="assets/images/user.png"
                                                                              alt="User"></a>
                            <div class="dropdown-menu dropdown-menu-right py-0 m-0" aria-labelledby="profilelink">
                                <a class="dropdown-item" href="demo-forum-edit.html"><i class="icon-line-edit mr-2"></i>Edit
                                    Profile</a>
                                <a class="dropdown-item" href="forum-single.html"><i
                                            class="icon-line-align-left mr-2"></i>Your Topics</a>
                                <a class="dropdown-item" href="demo-forum-signout.html"><i
                                            class="icon-line-log-out mr-2"></i>Sign Out</a>
                            </div>
                        </div>
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

                    <form class="top-search-form bg-alt dark" action="search.html" method="get">
                        <div class="container row justify-content-center">
                            <div class="col-sm-8">
                                <input type="text" name="q" class="form-control form-control-lg mb-5 border-color"
                                       value="" placeholder="Type Your Query &amp; Hit Enter.." autocomplete="off">
                                <div class="row col-mb-30">
                                    <div class="col-md-6">
                                        <div class="widget widget_links clearfix">
                                            <h4 class="">Recent Topics</h4>
                                            <ul>
                                                <li><a href="forum-single.html">Package Generator – Approx time for a
                                                        file</a></li>
                                                <li><a href="forum-single.html">Open sub-menu touching menu-item
                                                        name</a></li>
                                                <li><a href="forum-single.html">Portfolio Overlay Slide fadein
                                                        fadeout</a></li>
                                                <li><a href="forum-single.html">Show menu .dropdown-menu down only</a>
                                                </li>
                                                <li><a href="forum-single.html">Couldnt Generate Package Snippet</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="widget widget_links clearfix">
                                            <h4 class="">Helpful Documentation</h4>
                                            <ul>
                                                <li><a href="forum-single.html">How to Install</a></li>
                                                <li><a href="forum-single.html">How to setup Niche Demos</a></li>
                                                <li><a href="forum-single.html">Header Layouts and Styles</a></li>
                                                <li><a href="forum-single.html">Setup Forms</a></li>
                                                <li><a href="forum-single.html">Setup RTL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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





