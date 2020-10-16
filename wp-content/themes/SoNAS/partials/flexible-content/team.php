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
                            <img src="<?php the_sub_field('image'); ?>" alt="John Doe">
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