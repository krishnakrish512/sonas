<footer id="footer" class="dark" style="background-color: #101010;">
    <?php
    //    if (is_page(array('Home', 'About Us', 'Contact', 'Menu Title'))) {
    //    var_dump(is_page());
    //    exit();
    ?>
    <?php $contact = get_field('contact', 'option'); ?>
    <?php $social = get_field('social', 'option'); ?>

    <div class="container">
        <!-- Footer Widgets
                ============================================= -->
        <div class="footer-widgets-wrap py-5">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-6">
                    <div class="widget">
                        <div class="row col-mb-30 mb-0">

                            <div class="col-lg-6 pb-0">
                                <div class="footer-big-contacts">

                                    <span class="d-block">Call Us:</span>
                                    <h3 class="mb-0"><?= $contact['call_us'] ?></h3>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-0">
                                <div class="footer-big-contacts">
                                    <span class="d-block">Incubated by ISET-Nepal</span>
                                    <img src="<?= $contact['footer_logo'] ?>" class="mb-0" </img></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">

                    <div class="clearfix float-right" data-class-xl="float-right" data-class-lg="float-right"
                         data-class-md="float-right" data-class-sm="" data-class-xs="">
                        <a href="#" class="social-icon si-rounded si-small si-colored si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-rounded si-small si-colored si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-rounded si-small si-colored si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>

                </div>

            </div>

        </div><!-- .footer-widgets-wrap end -->
    </div>

    <div id="copyrights">

        <div class="container text-center text-uppercase">

            Copyrights © 2020 All Rights Reserved by South Asia Nadi Sambad (SoANaS).

        </div>

    </div>
</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
    ============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<?php wp_footer(); ?>
<!---->
<?php ////} else { ?>
<!--    --><?php //$contact = get_field('contact', 'option'); ?>
<!--    <footer id="footer" class="dark" style="background-color: #101010;">-->
<!--        <div class="container">-->
<!--            <div class="footer-widgets-wrap">-->
<!---->
<!--                <div class="row justify-content-center">-->
<!--                    <div class="col-lg-9">-->
<!--                        <div class="widget clearfix">-->
<!---->
<!--                            <div class="row col-mb-30">-->
<!--                                                                <div class="col-lg-3 col-6 widget_links">-->
<!--                                --><?php
//                                wp_nav_menu(array(
//                                    'theme_location' => 'footer_first',
//                                    'container' => 'div',
//                                    'container_class' => 'col-lg-3 col-6 widget_links'
//                                )); ?>
<!--                                --><?php //wp_nav_menu(array(
//                                    'theme_location' => 'footer_second',
//                                    'container' => 'div',
//                                    'container_class' => 'col-lg-3 col-6 widget_links'
//                                )); ?>
<!--                                --><?php //wp_nav_menu(array(
//                                    'theme_location' => 'footer_third',
//                                    'container' => 'div',
//                                    'container_class' => 'col-lg-3 col-6 widget_links'
//                                )); ?>
<!--                                --><?php //wp_nav_menu(array(
//                                    'theme_location' => 'footer_fourth',
//                                    'container' => 'div',
//                                    'container_class' => 'col-lg-3 col-6 widget_links'
//                                )); ?>
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-3 mt-5 mt-lg-0 text-center text-lg-right">-->
<!--                        <div class="widget clearfix">-->
<!---->
<!--                            <div class="row">-->
<!--                                <div class="col-12 mb-3">-->
<!--                                    <small>Call Us:</small>-->
<!--                                    <h4 class="h4">--><? //= $contact['call_us'] ?><!--</h4>-->
<!--                                </div>-->
<!---->
<!--                                <div class="col-12 d-flex justify-content-center justify-content-lg-end">-->
<!--                                    <a href="#" class="social-icon si-small si-light si-facebook">-->
<!--                                        <i class="icon-facebook"></i>-->
<!--                                        <i class="icon-facebook"></i>-->
<!--                                    </a>-->
<!--                                    <a href="#" class="social-icon si-small si-light si-delicious">-->
<!--                                        <i class="icon-delicious"></i>-->
<!--                                        <i class="icon-delicious"></i>-->
<!--                                    </a>-->
<!--                                    <a href="#" class="social-icon si-small si-light si-paypal">-->
<!--                                        <i class="icon-paypal"></i>-->
<!--                                        <i class="icon-paypal"></i>-->
<!--                                    </a>-->
<!--                                    <a href="#" class="social-icon si-small si-light si-flattr">-->
<!--                                        <i class="icon-flattr"></i>-->
<!--                                        <i class="icon-flattr"></i>-->
<!--                                    </a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="col-12 mt-5 text-white-50 text-smaller">-->
<!--                                    All Rights Reserved <br>&copy; 2020 by SemiColonWeb<br>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </footer> #footer end -->
<!---->
<!---->
<!--     Go To Top-->
<!--    ============================================= -->
<!---->
<!--    <div id="gotoTop" class="icon-angle-up"></div>-->

<!--    --><?php //wp_footer(); ?>
<?php //} ?>

<!--<script src="assets/js/functions.js"></script>-->

<script>
    jQuery(document).ready(function () {

        $('input[type="file"]').change(function (e) {
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
        });

        tinymce.init({
            selector: '#post-message',
            menubar: false,
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });

        $(function () {
            if (window.location.hash) {
                var hash = window.location.hash;
                $(hash).modal('toggle');
            }
        });
    });

</script>

</body>

</html>