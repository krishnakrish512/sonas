<section id="slider" class="slider-element slider-parallax swiper_wrapper vh-75">
    <div class="slider-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <?php while (have_rows('block')):
                    the_row();
                    $image = get_sub_field('image');
                    $Bannerlink=get_sub_field('banner_link');
//                    var_dump($Bannerlink);
//                    exit();
                    ?>
                        <a class="swiper-slide dark" href="<?= $Bannerlink;?>">
                            <div class="container">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-animate="fadeInUp"><?php the_sub_field('heading'); ?></h2>
                                    <p class="d-none d-sm-block" data-animate="fadeInUp"
                                       data-delay="200"><?php the_sub_field('paragraph'); ?></p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg"
                                 style="background-image: url('<?php echo $image ?>')"></div>
                        </a>
                <?php endwhile; ?>
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div class="slide-number">
                <div class="slide-number-current"></div>
                <span>/</span>
                <div class="slide-number-total"></div>
            </div>
        </div>
    </div>
</section>
