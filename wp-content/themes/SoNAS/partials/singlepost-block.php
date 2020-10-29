<div class="col-lg-4 col-md-6">
    <div class="entry">
        <div class="entry-image">
            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('category-thumb'); ?>"></a>
        </div>
        <div class="entry-title title-xs nott">
            <h3><a href=<?php the_permalink(); ?>><?php the_title(); ?></a></h3>
        </div>
        <div class="entry-meta">
            <ul>
                <li>
                    <i class="icon-calendar3"></i> <?php the_time('jS F Y'); ?></li>
                <!--                                            <li><a href="../../forum-single.html#comments"><i class="icon-comments"></i>-->
                <!--                                                    53</a>-->
                <!--                                            </li>-->
            </ul>
        </div>
        <div class="entry-content">
            <?php $Brief = get_field('brief');
            ?>
            <p><?= $Brief; ?></p>

            <!--                                <p>--><?php //the_excerpt(); ?><!--</p>-->
        </div>
    </div>
</div>
