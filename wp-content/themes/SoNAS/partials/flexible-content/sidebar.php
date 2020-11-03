<!-- Sidebar
                    ============================================= -->
<div class="sidebar col-lg-3">
    <address>
        <?php $contact = get_field('contact', 'option'); ?>
        <?php $social = get_field('social', 'option'); ?>
        <?= $contact['address'] ?>

    </address>
    <abbr title="Phone Number"><strong>Phone:</strong></abbr> <?= $contact['phone_number'] ?><br>
    <abbr title="Fax"><strong>Fax:</strong></abbr> <?= $contact['fax_number'] ?><br>
    <abbr title="Email Address"><strong>Email:</strong></abbr> <?= $contact['email'] ?>

    <div class="widget border-0 pt-0">

        <a href="<?= $social['facebook'] ?>" class="social-icon si-small si-dark si-facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
        </a>

        <a href="<?= $social['twitter'] ?>" class="social-icon si-small si-dark si-twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
        </a>

        <a href="<?= $social['linkedin'] ?>" class="social-icon si-small si-dark si-linkedin">
            <i class="icon-linkedin"></i>
            <i class="icon-linkedin"></i>
        </a>


    </div>

</div><!-- .sidebar end -->
</div>

</div>
</div>
</section><!-- #content end -->
