<?php


?>


<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flex justify-between">
                    <button id="primary-nav-button" type="button">Menu</button>

                    <!-- Header Logo Start -->
                    <?php echo venu_header_logo(); ?>
                    <!-- Header Logo End -->

                    <!-- Start Menu -->
                    <nav id="primary-nav" class="dropdown cf">
                    <?php venu_main_menu(); ?>
                    </nav><!-- / #primary-nav -->
                    <!-- End Menu -->

                </div>
            </div>
        </div>
    </header>
</div>