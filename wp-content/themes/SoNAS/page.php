<?php get_header(); ?>

<?php
if (have_rows('content')) {
    while (have_rows('content')) {
        the_row();
        get_template_part('/partials/flexible-content/' . get_row_layout());
    }
}
?>

<?php get_footer(); ?>


<!--                            24+HV11TnF1(-->
<!--                                                        devdigitalflow_wordpress-->
<!--                                                 devdigitalflow_wordpress-->
