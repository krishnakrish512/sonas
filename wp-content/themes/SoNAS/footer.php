<footer id="footer" class="dark" style="background-color: #101010;">

    <?php

    ?>

    <?php $contact = get_field('contact', 'option'); ?>

    <?php $social = get_field('social', 'option'); ?>



    <div class="container">

        <!-- Footer Widgets

                ============================================= -->

        <div class="footer-widgets-wrap py-5">

            <div class="row clearfix">

                <div class="col-lg-12">

                    <div class="widget">

                        <div class="row col-mb-30 mb-0">



                            <div class="col-lg-4 pb-0">

                                <div class="footer-big-contacts">

                                    <h3>Incubated by ISET-Nepal</h3>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <span>Address : </span>
                                            <h4 class="mb-0"><?= $contact['address_1'] ?></h4>
                                        </li>
                                        <li class="mb-2">
                                            <span class="d-block">Call Us:</span>

                                            <h4 class="mb-0"><?= $contact['call_us'] ?></h4>
                                        </li>
                                    </ul>

                                </div>

                            </div>

                            <div class="col-lg-5 pb-0">

                                <div class="footer-big-contacts">
                                    <?= $contact['disclaimer'] ?>
                                </div>

                            </div>

                            <div class="col-lg-3 pb-0">
                                <div class="clearfix float-right" data-class-xl="float-right" data-class-lg="float-right"

                                     data-class-md="float-right" data-class-sm="" data-class-xs="">

                                    <a href="<?= $social['facebook'];?>" class="social-icon si-rounded si-small si-colored si-facebook">

                                        <i class="icon-facebook"></i>

                                        <i class="icon-facebook"></i>

                                    </a>



                                    <a href="<?= $social['twitter'];?>" class="social-icon si-rounded si-small si-colored si-twitter">

                                        <i class="icon-twitter"></i>

                                        <i class="icon-twitter"></i>

                                    </a>



                                    <a href="<?= $social['linkedin'];?>" class="social-icon si-rounded si-small si-colored si-linkedin">

                                        <i class="icon-linkedin"></i>

                                        <i class="icon-linkedin"></i>

                                    </a>

                                </div>
                            </div>

                        </div>

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