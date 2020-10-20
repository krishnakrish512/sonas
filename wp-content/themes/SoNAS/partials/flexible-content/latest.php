<div class="clear"></div>
<div class="container">

    <div class="row justify-content-center text-center mb-5">
        <div class="col-xl-6 col-lg-8">
            <h3 class="display-4 font-weight-bolder mb-3"><?php the_sub_field('latest_1'); ?></h3>
        </div>
    </div>
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
                    <?php get_template_part('/partials/latest-part');?>
                <?php
                endwhile;
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>

    <div class="text-center">
        <?php $link = get_sub_field('link');
        //                            var_dump($link);
        //                            exit();
        ?>
        <a href="<?= $link; ?>"
           class="button button-large bg-alt text-white font-weight-medium py-2 rounded-sm ml-0 ls0 nott"><i
                    class="icon-line-paper"></i>Read More</a>
    </div>
    <br>

</div>
</div>
</section><!-- #content end -->
