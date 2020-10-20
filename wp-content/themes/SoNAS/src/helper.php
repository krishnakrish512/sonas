<?php
function get_product_single_block( $id ) {?>
    <div class="col-lg-4 col-md-6">
        <div class="entry">
            <div class="entry-image">
                <a href="#"><img src="<?php the_post_thumbnail_url($id); ?>"></a>
            </div>
            <div class="entry-title title-xs nott">
                <h3><a href=<?php the_permalink($id); ?>><?php the_title($id); ?></a></h3>
            </div>
            <div class="entry-meta">
                <ul>
                    <li><i class="icon-calendar3"></i> <?php the_time('jS F Y'); ?></li>
                    <!--                                        <li><a href="../../forum-single.html#comments"><i class="icon-comments"></i>-->
                    <!--                                                53</a>-->
                    <!--                                        </li>-->
                </ul>
            </div>
            <div class="entry-content">
                <!--                                    <p>--><?php //the_excerpt();
                ?><!--</p>-->
                <?php $Brief = get_field('brief');
                ?>
                <p><?= $Brief; ?></p>

            </div>
        </div>
    </div>







<?php }?>
