

<?php if (!is_front_page()) {
//        var_dump(is_front_page());
    ?>
    <section id="page-title" class="bg-color py-6 page-title-center text-center">
        <?php
        global $post;
        $title = '';
        if ($post) {
            $title = $post->post_title;
        }
        if (is_archive()) {
            $title = get_the_archive_title();
            $title = explode(':', $title);
            $title = $title[1];
        }
        if (is_search()) {
            $title = "Search Results";
        }
        ?>
        <div class="container">
            <?php
            if (is_category()) :
                the_archive_description('<h2 class="h2" style="font-weight: 800">', '</h2>');
            endif;
            ?>
            <?php if (is_single()):
                $author = get_field('author_name'); ?>
                <h2 class="h2" style="font-weight: 800"><?php the_title(); ?></h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-black-50 active"
                        aria-current="page"> <?php echo $author; ?></li>
                </ol>
            <?php endif; ?>

            <?php if (!is_single() && !is_category()) : ?>
                <h2 class="h2" style="font-weight: 800"><?php the_title(); ?></h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="alt-color" href="<?= get_home_url(); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item text-black-50 active" aria-current="page"><?php the_title(); ?></li>
                </ol>
            <?php endif; ?>
        </div>
    </section>
<?php } ?>
