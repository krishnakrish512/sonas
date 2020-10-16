<div class="container mb-6">
    <div class="heading-block">
        <h2><?php the_sub_field('heading');?></h2>
        <span><?php the_sub_field('span');?></span>
    </div>
    <ul class="clients-grid grid-2 grid-sm-3 grid-md-4 mb-0">
        <?php while( have_rows('image')):
        the_row();
        ?>
        <li class="grid-item"><a href="#"><img src="<?php the_sub_field('image_1');?>" alt="Clients"></a></li>
        <?php endwhile;?>
    </ul>
</div>


</div>
</section><!-- #content end -->

