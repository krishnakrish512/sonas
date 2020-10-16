<div class="line"></div>

<div class="row justify-content-center col-mb-50">
    <?php while (have_rows('support_1')):
        the_row();
        ?>
        <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
                <div class="fbox-icon">
                    <a href="#"><i class="<?php the_sub_field('icon');?>"></i></a>
                </div>
                <div class="fbox-content">
                    <h3><?php the_sub_field('heading'); ?></h3>
                    <p><?php the_sub_field('paragraph');?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

