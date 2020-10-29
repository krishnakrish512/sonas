<?php get_header(); ?>
    <!-- Content
			============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container mw-md">
                <?php
                while (have_posts()):
                    the_post();
                    ?>
                    <div class="topic-post">
                        <?php
                        the_content();


                        ?>
                        <?php

                        $images = get_field('gallery');
                        if (!empty($images) || have_rows('videos')):
                            ?>
                            <hr>
                            <h2>Media</h2>
                            <div class="grid-container clearfix row" data-lightbox="gallery">
                                <?php
                                foreach ($images as $image):
                                    ?>
                                    <div class="col-lg-4">
                                        <a class="grid-item " href="<?= $image['url'] ?>"
                                           data-lightbox="gallery-item">
                                            <div class="grid-inner">
                                                <img src="<?= $image['url'] ?>">
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-content dark">
                                                        <i class="icon-line-plus h4 mb-0"
                                                           data-hover-animate="fadeIn"></i>
                                                    </div>
                                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                endforeach;
                                while (have_rows('videos')):
                                    the_row();
                                    ?>
                                    <div class="col-lg-4">
                                        <a class="grid-item mfp-iframe"
                                           href="<?php the_sub_field('video_url') ?>"
                                           data-lightbox="gallery-item">
                                            <div class="grid-inner">
                                                <img src="<?php the_sub_field('video_thumbnail') ?>">
                                                <div class="bg-overlay">
                                                    <div class="bg-overlay-content dark">
                                                        <i class="icon-line-play h4 mb-0"
                                                           data-hover-animate="fadeIn"></i>
                                                    </div>
                                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                endwhile;
                                ?>
                            </div>
                        <?php
                        endif;
                        ?>
                    </div>
                <?php
                endwhile; ?>
                <div class="my-3">
                    <?php the_time('jS F Y'); ?>
                </div>
            </div>
        </div>

    </section><!-- #content end -->

    </br>
<?php get_footer();
