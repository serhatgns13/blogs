<!--  Search modal -->
<div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white"
        data-uc-height-viewport="">
        <button
            class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
            type="button">
            <i class="unicon-close"></i>
        </button>
        <div class="panel w-100 sm:w-500px px-2 py-10">
            <h3 class="h1 text-center">Search</h3>
            <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700" action="?">
                <span class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i
                        class="unicon-search icon-3"></i></span>
                <input type="search" name="q" class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white"
                    placeholder="Type your keyword.." aria-label="Search" autofocus>
            </form>
        </div>
    </div>
</div>

<!--  Menu panel -->
<div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
    <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
        <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
            <div class="uc-logo">
                <a href="<?php echo APP_URL; ?>" class="h5 text-none text-gray-900 dark:text-white">
                    <img class="w-32px"
                        src="<?php echo APP_URL; ?>view/catalog/assets/dist/image/logo/<?php echo $SettingsValue["set_images"] ?>"
                        alt="<?php echo $SettingsValue["set_title"] ?>" data-uc-svg>
                </a>
            </div>
            <button
                class="uc-offcanvas-close p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
                type="button">
                <i class="unicon-close"></i>
            </button>
        </header>

        <div class="panel">
            <form id="search-panel" class="form-icon-group vstack gap-1 mb-3" data-uc-sticky="">
                <input type="email" class="form-control form-control-md fs-6" placeholder="Search..">
                <span class="form-icon text-gray">
                    <i class="unicon-search icon-1"></i>
                </span>
            </form>


            <?php

            $mainCategories = [];
            $subCategories = [];

            // Kategorileri ana ve alt kategoriler olarak ayır
            foreach ($MenuValue as $value) {
                if ($value['parent_id'] == 0) {
                    $mainCategories[] = $value;
                } else {
                    $subCategories[] = $value;
                }
            }

            // Ana kategorileri ve alt kategorileri yazdır
            ?>

            <ul class="nav-y gap-narrow fw-bold fs-5" data-uc-nav>
                <?php
                foreach ($mainCategories as $mainCategory) {
                    ?>

                    <li class="uc-parent">
                        <a
                            href="<?php echo APP_URL; ?>blogs/<?php echo $mainCategory["slug"]; ?>"><?php echo $mainCategory["name"]; ?></a>


                        <ul class="uc-nav-sub" data-uc-nav="">

                            <?php
                            foreach ($subCategories as $subCategory) {
                                if ($subCategory['parent_id'] == $mainCategory['category_id']) {
                                    ?>

                                    <li><a
                                            href="<?php echo APP_URL; ?>blog/<?php echo $subCategory["slug"]; ?>"><?php echo $subCategory["name"]; ?></a>
                                    </li>

                                    <?php
                                }
                            }
                            ?>

                        </ul>
                    </li>


                    <?php
                }
                ?>

            </ul>
            <ul class="social-icons nav-x mt-4">
                <li>
                    <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
                    <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
                    <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
                    <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
                </li>
            </ul>
            <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                <div class="vstack gap-1">
                    <span class="fs-7 opacity-60">Select theme:</span>
                    <div class="darkmode-trigger" data-darkmode-switch="">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider fs-5"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<!--  Favorites modal -->
<div id="uc-favorites-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
        <button
            class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
            type="button">
            <i class="unicon-close"></i>
        </button>
        <div class="panel vstack justify-center items-center gap-2 text-center px-3 py-8">
            <i class="icon icon-4 unicon-bookmark mb-2 text-primary dark:text-white"></i>
            <h2 class="h4 md:h3 m-0">Saved articles</h2>
            <p class="fs-5 opacity-60">You have not yet added any article to your bookmarks!</p>
            <a href="index.html" class="btn btn-sm btn-primary mt-2 uc-modal-close">Browse articles</a>
        </div>
    </div>
</div>



<!--  Account modal -->

<!--  GDPR modal -->
<div id="uc-gdpr-notification" class="uc-gdpr-notification uc-notification uc-notification-bottom-left lg:m-2">
    <div class="uc-notification-message">
        <a id="uc-close-gdpr-notification" class="uc-notification-close" data-uc-close></a>
        <h2 class="h5 ft-primary fw-bold -ls-1 m-0">GDPR Compliance</h2>
        <p class="fs-7 mt-1 mb-2">We use cookies to ensure you get the best experience on our website. By continuing to
            use our site, you accept our use of cookies, <a href="page-privacy.html"
                class="uc-link text-underline">Privacy Policy</a>, and <a href="page-terms.html"
                class="uc-link text-underline">Terms of Service</a>.</p>
        <button class="btn btn-sm btn-primary" id="uc-accept-gdpr">Accept</button>
    </div>
</div>

<!--  Bottom Actions Sticky -->
<div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
    <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white"
        data-darkmode-toggle="">
        <label class="switch">
            <span class="sr-only">Dark mode toggle</span>
            <input type="checkbox">
            <span class="slider fs-5"></span>
        </label>
    </div>
    <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top" data-uc-backtotop>
        <i class="icon-2 unicon-chevron-up"></i>
    </a>
</div>

<!-- Header start -->
<header class="uc-header header-three uc-navbar-sticky-wrap z-999"
    data-uc-sticky="sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
    <nav class="uc-navbar-container fs-6 z-1">


        <!-- masaüstü -->

        <div class="uc-center-navbar panel z-2">
            <div class="container max-w-xl">
                <div class="uc-navbar min-h-72px lg:min-h-80px text-gray-900 dark:text-white"
                    data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="uc-navbar-left">
                        <div class="d-block lg:d-none">
                            <a class="uc-menu-trigger" href="#uc-menu-panel" data-uc-toggle></a>
                        </div>
                        <div class="uc-logo d-none md:d-block text-dark dark:text-white">
                            <a href="<?php echo APP_URL; ?>">
                                <img class="w-32px"
                                    src="<?php echo APP_URL; ?>view/catalog/assets/dist/image/logo/<?php echo $SettingsValue["set_images"] ?>"
                                    alt="<?php echo $SettingsValue["set_title"] ?>" data-uc-svg>
                            </a>
                        </div>
                        <ul class="uc-navbar-nav gap-3 ft-tertiary fs-5 fw-medium ms-4 d-none lg:d-flex"
                            style="--uc-nav-height: 80px">


                            <li><a href="<?php echo APP_URL; ?>">Ana Sayfa</a></li>

                            <li>
                                <a href="#">Kategoriler <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset p-3 hide-scrollbar"
                                    data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                    <div class="row child-cols g-4">
                                        <div>
                                            <div class="row child-cols g-4">

                                                <?php

                                                $mainCategories = [];
                                                $subCategories = [];

                                                // Kategorileri ana ve alt kategoriler olarak ayır
                                                foreach ($MenuValue as $value) {
                                                    if ($value['parent_id'] == 0) {
                                                        $mainCategories[] = $value;
                                                    } else {
                                                        $subCategories[] = $value;
                                                    }
                                                }

                                                // Ana kategorileri ve alt kategorileri yazdır
                                                foreach ($mainCategories as $mainCategory) {
                                                    ?>
                                                    <div>
                                                        <ul class="uc-nav uc-navbar-dropdown-nav">
                                                            <li class="uc-nav-header mb-1">
                                                                <a
                                                                    href="<?php echo APP_URL; ?>blogs/<?php echo $mainCategory["slug"]; ?>">
                                                                    <h5><?php echo $mainCategory["name"]; ?></h5>
                                                                </a>
                                                            </li>
                                                            <?php
                                                            foreach ($subCategories as $subCategory) {
                                                                if ($subCategory['parent_id'] == $mainCategory['category_id']) {
                                                                    ?>
                                                                    <li><a
                                                                            href="<?php echo APP_URL; ?>blog/<?php echo $subCategory["slug"]; ?>"><?php echo $subCategory["name"]; ?></a>
                                                                    </li>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <?php
                                                }
                                                ?>



                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="uc-navbar-center">
                        <div class="uc-logo d-block md:d-none text-dark dark:text-white">
                            <a href="<?php echo APP_URL; ?>">
                                <img class="w-32px"
                                    src="<?php echo APP_URL; ?>view/catalog/assets/dist/image/logo/<?php echo $SettingsValue["set_images"] ?>"
                                    alt="<?php echo $SettingsValue["set_title"] ?>" data-uc-svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- masaüstü -->
    </nav>
</header>