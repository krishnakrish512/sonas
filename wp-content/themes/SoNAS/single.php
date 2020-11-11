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
                    <?php while (have_rows('author_details')): the_row(); ?>
                    <div class="topic-post">
                    <div class="auther">
                        <p class="mb-0"><img loading="lazy" class="alignleft wp-image-470"
                                             src="<?php the_sub_field('author_image'); ?>" alt="" height="179"
                                             srcset="<?php the_sub_field('author_image'); ?> 264w,
                                                   <?php the_sub_field('author_image'); ?> 600w"
                                             sizes="(max-width: 157px) 100vw, 157px"><?php the_sub_field('description'); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
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

                    <?php $facebook_url = "https://www.facebook.com/sharer.php?u=" . get_the_permalink(get_the_ID());
                    $linkedin_url = "https://www.linkedin.com/sharer.php?u=" . get_the_permalink(get_the_ID());
                    $twitter_url = add_query_arg(
                        [
                            'text' => urlencode(get_the_title(get_the_ID())),
                            'url' => get_the_permalink(get_the_ID()),
                            'hashtags' => 'revivalpoint'
                        ],
                        "https://www.twitter.com/intent/tweet?"
                    ); ?>
                    <div class="social-icon-list clearfix my-4">
                        <h4 class="mb-2"> Share this article</h4>
                        <a href="<?= $facebook_url; ?>" class="social-icon si-rounded si-small si-colored si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="<?= $twitter_url; ?>" class="social-icon si-rounded si-small si-colored si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="<?= $linkedin_url; ?>"
                           class="social-icon si-rounded si-small si-colored si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>


                    </div>

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
