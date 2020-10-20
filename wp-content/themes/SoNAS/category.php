<?php
/* Template Name: custom Page*/
get_header(); ?>
<section id="content">
    <div class="content-wrap">

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

                    <?php
                    endwhile;
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
