<div class="section">
    <div class="container">
        <div class="heading-block">
            <h2><?php the_sub_field('heading'); ?></h2>
            <span><?php the_sub_field('span'); ?></span>
        </div>

        <div class="row col-mb-50 mb-0">
            <?php while (have_rows('team-details')):
                the_row();
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="team">
                        <div class="team-image">
                            <?php $image=get_sub_field('image');
//                            var_dump($image);
//                            exit(); ?>
                            <img src="<?php echo esc_url($image['url']);  ?>" alt="<?php echo esc_attr($image['title']); ?>">
                        </div>
                        <div class="team-desc">
                            <div class="team-title"><h4><?php the_sub_field('heading'); ?></h4>
                                <span><?php the_sub_field('span'); ?></span></div>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
</section >
