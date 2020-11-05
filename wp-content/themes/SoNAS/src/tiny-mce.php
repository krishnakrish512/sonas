<?php
function theme_tiny_mce_before_init($init)
{
    $init['block_formats'] = 'Paragraph=p;Heading 1=h1;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Pre=pre;Charasticts=charasticts;';
    return $init;
}

add_filter('tiny_mce_before_init', 'theme_tiny_mce_before_init');

function theme_after_wp_tiny_mce()
{
    ?>
    <script>
        jQuery(document).on('tinymce-editor-init', function (event, editor) {
            tinymce.activeEditor.formatter.register('charasticts', {
                block: 'div',
                classes: 'charasticts'
            });
        });
    </script>
    <?php
}
add_action('after_wp_tiny_mce', 'theme_after_wp_tiny_mce');