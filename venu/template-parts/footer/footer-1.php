    <footer>
    <?php if(is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3')) : ?>
        <div class="container">
            <div class="row">

            <?php if(is_active_sidebar('footer-1')) : ?>
                <div class="col-md-5">
                    <div class="about-veno">

                    <?php dynamic_sidebar('footer-1'); ?>

                        <div class="logo">
                            <?php venu_footer_logo(); ?>
                        </div>
                        <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst.</p>
                        <ul class="social-icons">
                            <li>
                                <?php venu_footer_social(); ?>
                                <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a> -->
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(is_active_sidebar('footer-2')) : ?>
                <div class="col-md-4">
                    <div class="useful-links">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(is_active_sidebar('footer-3')) : ?>
                <div class="col-md-3">
                    <div class="contact-info">
                    <?php dynamic_sidebar('footer-3'); ?>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
        <?php endif; ?>
    </footer>