<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="row gutter-40 col-mb-80">
                <!-- Postcontent
                ============================================= -->
                <div class="postcontent col-lg-9">
                    <?php
                    $contact = get_sub_field('contact');
                    ?>
                    <h3><?php echo $contact['title']; ?></h3>
                    <div class="form-widget">

                        <div class="form-result"></div>

<!--                        <form class="mb-0" id="template-contactform" name="template-contactform"-->
<!--                              action="include/form.php" method="post">-->

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <?php echo do_shortcode("[contact-form-7 id='" . $contact['form'] . "']") ?>
                            <input type="hidden" name="prefix" value="template-contactform-">

<!--                        </form>-->
                    </div>

                </div><!-- .postcontent end -->

