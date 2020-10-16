<?php get_header(); ?>

    <div class="container">
        <div class="row posts-md col-mb-30">
            <?php while (have_posts()) :
                the_post();
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="entry">
                        <div class="entry-image">
                            <a href="#"><img src="<?php the_post_thumbnail_url(); ?>"></a>
                        </div>
                        <div class="entry-title title-xs nott">
                            <h3><a href="forum-single.html"><?php the_title(); ?></a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> <?php the_time('jS F Y'); ?></li>
                                <li><a href="forum-single.html#comments"><i class="icon-comments"></i> 53</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>


<?php get_footer(); ?>