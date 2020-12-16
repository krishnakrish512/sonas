<?php
function photography_share_meta()
{
    global $post;
    if ($post) {
        $image_url = get_the_post_thumbnail_url($post->ID, 'full');
        $image = getResizedImage($image_url, [500, 500]);

        ?>
        <meta property="og:url"
              content="<?= get_the_permalink( $post->ID ) ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="<?php bloginfo( 'title' ); ?>"/>
        <meta property="og:description" content="<?= esc_attr( get_the_title( $post->Id ) ) ?>"/>
        <meta property="og:image"
              content="<?= $image['orig'] ?>"/>
        <meta property="og:image:width" content="500"/>
        <meta property="og:image:height" content="500"/>
        <?php
    }
}

add_action('wp_head', 'photography_share_meta');
