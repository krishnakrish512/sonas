<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
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


<?php get_template_part('/header/main-header');



