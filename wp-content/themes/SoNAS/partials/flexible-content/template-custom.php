<?php
/* Template Name: Blog Page*/
get_header(); ?>
    <div class="container">
        <div class="row posts-md col-mb-30">

            <?php $condition = array(
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $query = new WP_Query($condition);
            if ($query->have_posts()) {
                while ($query->have_posts()) :
                    $query->the_post();
                    ?>
                    <div class="col-lg-3 col-md-6">

                        <div class="entry">
                            <div class="entry-image">
                                <a href="#"><img src="<?php the_post_thumbnail_url(); ?>"></a>
                            </div>
                            <div class="entry-title title-xs nott">
                                <h3><a href="../../forum-single.html"><?php the_title(); ?></a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i> 13th Jun 2021</li>
                                    <li><a href="../../forum-single.html#comments"><i class="icon-comments"></i> 53</a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            } else {

            }
            ?>
        </div>
    </div>

<?php get_footer(); ?>