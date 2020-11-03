<div class="section my-6 py-0 px-2" style="background-color: #bfd5dbab; width: auto;">


    <div class="row align-items-center">

        <?php $image = get_sub_field('challenge_1');

        //                        var_dump($image);

        //                        exit();

        ?>

        <div class="col-md-5 pl-0">

            <img src="assets/images/doc.svg" alt="Doc Image" class="d-none">
            <img src="<?php echo $image ?>" alt="Doc Image" class="img-fluid">

        </div>

        <div class="col-md-7  p-5">

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

<div class="clear"></div>



