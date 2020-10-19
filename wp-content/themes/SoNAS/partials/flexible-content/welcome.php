<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="mx-auto center clearfix" style="max-width: 900px;">
                <h1><?php the_sub_field('title'); ?></h1>
                <div class="tabs tabs-bb clearfix" id="tab-9">

                    <ul class="tab-nav clearfix justify-content-center border-0">
                        <?php $count = 1; ?>
                        <?php while (have_rows('title_1')):
                            the_row();
                            ?>
                            <li><a href="#tabs-<?php echo $count; ?>"
                                   class="h5 text-capitalize"><?php the_sub_field('heading'); ?></a>
                            </li>

                            <?php $count++; endwhile; ?>
                    </ul>
                    <div class="tab-container">
                        <?php $count = 1; ?>
                        <?php while (have_rows('title_1')):
                            the_row();
                            ?>
                            <div class="tab-content clearfix" id="tabs-<?php echo $count ?>">
                                <h2><?php the_sub_field('paragraph'); ?></h2>

                            </div>
                            <?php $count++;
                        endwhile; ?>
                    </div>
                </div>
                <div class="text-center">
                    <?php $link = get_sub_field('link');
                    ?>
                    <a href="<?= $link; ?>"
                       class="button button-large bg-alt text-white font-weight-medium py-2 rounded-sm ml-0 ls0 nott"><i
                                class="icon-line-paper"></i><?php the_sub_field('button'); ?></a>
                </div>
            </div>


