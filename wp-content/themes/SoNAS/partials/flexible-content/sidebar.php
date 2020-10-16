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

        <a href="#" class="social-icon si-small si-dark si-facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
        </a>

        <a href="#" class="social-icon si-small si-dark si-twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
        </a>

        <a href="#" class="social-icon si-small si-dark si-dribbble">
            <i class="icon-dribbble"></i>
            <i class="icon-dribbble"></i>
        </a>

        <a href="#" class="social-icon si-small si-dark si-forrst">
            <i class="icon-forrst"></i>
            <i class="icon-forrst"></i>
        </a>

        <a href="#" class="social-icon si-small si-dark si-pinterest">
            <i class="icon-pinterest"></i>
            <i class="icon-pinterest"></i>
        </a>

        <a href="#" class="social-icon si-small si-dark si-gplus">
            <i class="icon-gplus"></i>
            <i class="icon-gplus"></i>
        </a>

    </div>

</div><!-- .sidebar end -->
</div>

</div>
</div>
</section><!-- #content end -->
