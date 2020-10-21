<?php
get_header(); ?>
<section id="content">
    <div class="content-wrap">

        <div class="container">
            <div class="row posts-md col-mb-30">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <?php get_template_part('/partials/singlepost-block');
                } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
