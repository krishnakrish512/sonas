<section id="content">
    <div class="content-wrap py-0">
        <div class=" border-top-0 my-6">
            <div class="container clearfix">

                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="heading-block">
                            <h1><?php the_sub_field('heading'); ?></h1>
                        </div>
                        <p><?php the_sub_field('paragraph'); ?></p>
                    </div>

                    <div class="col-lg-6 align-self-end">

                        <div class="position-relative overflow-hidden">
                            <img src="<?php the_sub_field('image'); ?>" data-animate="fadeInUp" data-delay="100"
                                 alt="Chrome"
                                 class="fadeInUp animated">
                        </div>
                    </div>
                </div>
            </div>
        </div>