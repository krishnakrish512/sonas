<div class="section  my-6 p-0" style="background-color: #bfd5dbab">
    <div class="container-fluid">
        <div class="row">
            <?php $image = get_sub_field('challenge_1');
            //                        var_dump($image);
            //                        exit();
            ?>
            <div class="col-md-5"
                 style="background: url('<?php echo $image ?>') center center no-repeat; background-size: cover;">
                <img src="assets/images/doc.svg" alt="Doc Image" class="d-none">
            </div>
            <div class="col-md-7 py-6 pl-5">
                <h2 class=" font-weight-bold"><?php the_sub_field('heading'); ?></h2>
                <p> <?php the_sub_field('paragraph'); ?></p>
                <?php $link = get_sub_field('link');
                ?>
                <a href="<?= $link; ?>"
                   class="button button-large bg-alt text-white font-weight-medium py-2 rounded-sm ml-0 ls0 nott"><i
                            class="<?php the_sub_field('icon'); ?>"></i><?php the_sub_field('button'); ?></a>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>

