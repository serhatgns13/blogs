<?php require_once "template/header.php"; ?>
<?php require_once "template/navbars.php"; ?>

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

<!--  Newsletter modal -->
<div id="uc-newsletter-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog w-800px bg-white text-dark dark:bg-gray-900 dark:text-white rounded overflow-hidden">
        <button
            class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
            type="button">
            <i class="unicon-close"></i>
        </button>
        <div class="row md:child-cols-6 col-match g-0">
            <div class="d-none md:d-flex">
                <div class="position-relative w-100 ratio-1x1">
                    <img class="media-cover" src="view/catalog/assets/images/demo-three/common/newsletter.jpg"
                        alt="Newsletter image">
                </div>
            </div>
            <div>
                <div class="panel vstack self-center p-4 md:py-8 text-center">
                    <h3 class="h3 md:h2">Subscribe to the Newsletter</h3>
                    <p class="ft-tertiary">Join 10k+ people to get notified about new posts, news and tips.</p>
                    <div class="panel mt-2 lg:mt-4">
                        <form class="vstack gap-1">
                            <input type="email"
                                class="form-control form-control-sm w-full fs-6 bg-white dark:border-white dark:border-gray-700 dark:text-dark"
                                placeholder="Your email addressview/catalog">
                            <button type="submit" class="btn btn-sm btn-primary">Sign up</button>
                        </form>
                        <p class="fs-7 mt-2">Do not worry we don't spam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Account modal -->
<div id="uc-account-modal" data-uc-modal="overlay: true">
    <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
        <button
            class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all"
            type="button">
            <i class="unicon-close"></i>
        </button>
        <div class="panel vstack gap-2 md:gap-4 text-center">
            <ul class="account-tabs-nav nav-x justify-center h6 py-2 border-bottom d-none"
                data-uc-switcher="animation: uc-animation-slide-bottom-small, uc-animation-slide-top-small">
                <li><a href="#">Sign in</a></li>
                <li><a href="#">Sign up</a></li>
                <li><a href="#">Reset password</a></li>
                <li><a href="#">Terms of use</a></li>
            </ul>
            <div
                class="account-tabs-content uc-switcher px-3 lg:px-4 py-4 lg:py-8 m-0 lg:mx-auto vstack justify-center items-center">
                <div class="w-100">
                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                        <h4 class="h5 lg:h4 m-0">Log in</h4>
                        <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                            <form class="vstack gap-2">
                                <input
                                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15"
                                    type="email" placeholder="Your email" required>
                                <input
                                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15"
                                    type="password" placeholder="Password" autocomplete="new-password" required>
                                <div class="hstack justify-between items-start text-start">
                                    <div class="form-check text-start">
                                        <input
                                            class="form-check-input rounded-0 dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15"
                                            type="checkbox" id="inputCheckRemember">
                                        <label class="hstack justify-between form-check-label fs-7 sm:fs-6"
                                            for="inputCheckRemember">Remember me?</label>
                                    </div>
                                    <a href="#" class="uc-link fs-6" data-uc-switcher-item="2">Forgot password</a>
                                </div>
                                <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Log in</button>
                            </form>
                            <div class="panel h-24px">
                                <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                                <span
                                    class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                            </div>
                            <div class="hstack gap-2">
                                <a href="#google"
                                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                    <i class="icon icon-1 unicon-logo-google"></i>
                                </a>
                                <a href="#facebook"
                                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                    <i class="icon icon-1 unicon-logo-facebook"></i>
                                </a>
                                <a href="#twitter"
                                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                    <i class="icon icon-1 unicon-logo-x-filled"></i>
                                </a>
                            </div>
                        </div>
                        <p class="fs-7 sm:fs-6">Have no account yet? <a class="uc-link" href="#"
                                data-uc-switcher-item="1">Sign up</a></p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                        <h4 class="h5 lg:h4 m-0">Create an account</h4>
                        <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                            <form class="vstack gap-2">
                                <input
                                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                    type="text" placeholder="Full name" required>
                                <input
                                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                    type="email" placeholder="Your email" required>
                                <input
                                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                    type="password" placeholder="Password" autocomplete="new-password" required>
                                <input
                                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                    type="password" placeholder="Re-enter Password" autocomplete="new-password"
                                    required>
                                <div class="hstack text-start">
                                    <div class="form-check text-start">
                                        <input id="input_checkbox_accept_terms"
                                            class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                            type="checkbox" required>
                                        <label for="input_checkbox_accept_terms"
                                            class="hstack justify-between form-check-label fs-7 sm:fs-6">I read and
                                            accept the <a href="#" class="uc-link ms-narrow"
                                                data-uc-switcher-item="3">terms of use</a>. </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Sign up</button>
                            </form>
                            <div class="panel h-24px">
                                <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                                <span
                                    class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                            </div>
                            <div class="hstack gap-2">
                                <a href="#google"
                                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                    <i class="icon icon-1 unicon-logo-google"></i>
                                </a>
                                <a href="#facebook"
                                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                    <i class="icon icon-1 unicon-logo-facebook"></i>
                                </a>
                                <a href="#twitter"
                                    class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                    <i class="icon icon-1 unicon-logo-x-filled"></i>
                                </a>
                            </div>
                        </div>
                        <p class="fs-7 sm:fs-6">Already have an account? <a class="uc-link" href="#"
                                data-uc-switcher-item="0">Log in</a></p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                        <h4 class="h5 lg:h4 m-0">Reset password</h4>
                        <div class="panel w-100 sm:w-350px">
                            <form class="vstack gap-2">
                                <input
                                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                    type="email" placeholder="Your email" required>
                                <div class="form-check text-start">
                                    <input
                                        class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15"
                                        type="checkbox" id="inputCheckVerify" required>
                                    <label class="form-check-label fs-7 sm:fs-6" for="inputCheckVerify"> <span>I'm not a
                                            robot</span>. </label>
                                </div>
                                <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Reset a password</button>
                            </form>
                        </div>
                        <p class="fs-7 sm:fs-6 mt-2 sm:m-0">Remember your password? <a class="uc-link" href="#"
                                data-uc-switcher-item="0">Log in</a></p>
                    </div>
                </div>
                <div class="w-100">
                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4">
                        <h4 class="h5 lg:h4 m-0">Terms of use</h4>
                        <div class="page-content panel fs-6 text-start max-h-400px overflow-scroll">
                            <p>Terms of use dolor sit amet consectetur, adipisicing elit. Recusandae provident ullam
                                aperiam quo ad non corrupti sit vel quam repellat ipsa quod sed, repellendus adipisci,
                                ducimus ea modi odio assumenda.</p>
                            <h5 class="h6 md:h5 mt-3 mb-1">Disclaimers</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus
                                officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto!
                                Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque
                                modi ipsum sint iusto fugiat vero velit rerum.</p>
                            <h5 class="h6 md:h5 mt-3 mb-1">Limitation on Liability</h5>
                            <p>Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse,
                                deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere
                                excepturi architecto totam.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque
                                modi ipsum sint iusto fugiat vero velit rerum.</p>
                            <h5 class="h6 md:h5 mt-3 mb-1">Copyright Policy</h5>
                            <p>Dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea
                                voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error
                                nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque
                                modi ipsum sint iusto fugiat vero velit rerum.</p>
                            <h5 class="h6 md:h5 mt-3 mb-1">General</h5>
                            <p>Sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea
                                voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error
                                nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque
                                modi ipsum sint iusto fugiat vero velit rerum.</p>
                        </div>
                        <p class="fs-7 sm:fs-6">Do you agree to our terms? <a class="uc-link" href="#"
                                data-uc-switcher-item="1">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        <div class="uc-top-navbar panel z-3 min-h-32px lg:min-h-48px mx-2 rounded-bottom overflow-hidden bg-gray-800 text-white uc-dark d-none md:d-block"
            data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
            <div class="position-cover blend-color" data-src="view/catalog/assets/images/demo-three/topbar-abstract.jpg"
                data-uc-img></div>
            <div class="container max-w-xl">
                <div class="hstack panel z-1">
                    <div class="uc-navbar-left gap-2 lg:gap-3">
                        <div class="trending-ticker panel swiper-parent max-w-600px">
                            <div class="swiper hstack gap-1 min-h-40px"
                                data-uc-swiper="items: 1; autoplay: 3000; parallax: true; pause-mouse: false; reverse: false; prev: .swiper-prev; next: .swiper-next; effect: fade; fade: true;">
                                <div class="hstack gap-narrow">
                                    <i class="icon-1 unicon-fire text-warning"></i>
                                    <span class="fs-6 fw-bold dark:text-white">Trending:</span>
                                </div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <article class="post type-post">
                                            <h6 class="post-title fs-6 ft-primary fw-medium m-0 opacity-75 dark:text-white"
                                                data-swiper-parallax-y="-24">
                                                <a class="text-none" href="blog-details.html">The Rise of AI-Powered
                                                    Personal Assistants: How They Manage</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <article class="post type-post">
                                            <h6 class="post-title fs-6 ft-primary fw-medium m-0 opacity-75 dark:text-white"
                                                data-swiper-parallax-y="-24">
                                                <a class="text-none" href="blog-details.html">Tech Innovations Reshaping
                                                    the Retail Landscape: AI Payments</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <article class="post type-post">
                                            <h6 class="post-title fs-6 ft-primary fw-medium m-0 opacity-75 dark:text-white"
                                                data-swiper-parallax-y="-24">
                                                <a class="text-none" href="blog-details.html">Balancing Work and
                                                    Wellness: Tech Solutions for Healthy</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <article class="post type-post">
                                            <h6 class="post-title fs-6 ft-primary fw-medium m-0 opacity-75 dark:text-white"
                                                data-swiper-parallax-y="-24">
                                                <a class="text-none" href="blog-details.html">The Importance of Sleep:
                                                    Tips for Better Rest and Recovery</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <article class="post type-post">
                                            <h6 class="post-title fs-6 ft-primary fw-medium m-0 opacity-75 dark:text-white"
                                                data-swiper-parallax-y="-24">
                                                <a class="text-none" href="blog-details.html">The Future of Sustainable
                                                    Living: Driving Eco-Friendly Lifestyles</a>
                                            </h6>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <article class="post type-post">
                                            <h6 class="post-title fs-6 ft-primary fw-medium m-0 opacity-75 dark:text-white"
                                                data-swiper-parallax-y="-24">
                                                <a class="text-none" href="blog-details.html">Business Agility the
                                                    Digital Age: Leveraging AI and Automation</a>
                                            </h6>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uc-navbar-right gap-2 lg:gap-3">
                        <div class="uc-navbar-item">
                            <ul class="uc-social-header nav-x gap-1 d-none lg:d-flex dark:text-white">
                                <li>
                                    <a href="#tw"
                                        class="w-32px h-32px cstack border rounded-circle hover:bg-primary transition-colors duration-200"><i
                                            class="icon icon-1 unicon-logo-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#in"
                                        class="w-32px h-32px cstack border rounded-circle hover:bg-primary transition-colors duration-200"><i
                                            class="icon icon-1 unicon-logo-x"></i></a>
                                </li>
                                <li>
                                    <a href="#yt"
                                        class="w-32px h-32px cstack border rounded-circle hover:bg-primary transition-colors duration-200"><i
                                            class="icon icon-1 unicon-logo-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="uc-navbar-item">
                            <a class="uc-account-trigger btn btn-sm border-0 p-0 duration-0 dark:text-white"
                                href="#uc-newsletter-modal" data-uc-toggle>
                                <i class="icon icon-2 fw-medium unicon-email"></i>
                            </a>
                        </div>
                        <div class="uc-navbar-item">
                            <a class="uc-search-trigger icon-2 cstack text-none text-dark dark:text-white"
                                href="#uc-search-modal" data-uc-toggle>
                                <i class="icon icon-2 fw-bold unicon-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uc-center-navbar panel z-2">
            <div class="container max-w-xl">
                <div class="uc-navbar min-h-72px lg:min-h-80px text-gray-900 dark:text-white"
                    data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                    <div class="uc-navbar-left">
                        <div class="d-block lg:d-none">
                            <a class="uc-menu-trigger" href="#uc-menu-panel" data-uc-toggle></a>
                        </div>
                        <div class="uc-logo d-none md:d-block text-dark dark:text-white">
                            <a href="index.html">
                                <img class="w-80px text-dark dark:text-white"
                                    src="view/catalog/assets/images/demo-three/common/logo.svg" alt="News5" data-uc-svg>
                            </a>
                        </div>
                        <ul class="uc-navbar-nav gap-3 ft-tertiary fs-5 fw-medium ms-4 d-none lg:d-flex"
                            style="--uc-nav-height: 80px">
                            <li>
                                <a href="#">Latest <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 hide-scrollbar"
                                    data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                    <div class="row child-cols col-match g-3">
                                        <div class="col-2">
                                            <div class="uc-navbar-switcher-nav p-1 rounded bg-gray-25 dark:bg-gray-800">
                                                <ul class="uc-tab-left fs-5 text-end"
                                                    data-uc-tab="connect: #uc-navbar-switcher-tending; animation: uc-animation-slide-right-small, uc-animation-slide-left-small">
                                                    <li><a href="#">News</a></li>
                                                    <li><a href="#">Gadgets</a></li>
                                                    <li><a href="#">Tech</a></li>
                                                    <li><a href="#">Science</a></li>
                                                    <li><a href="#">AI</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div id="uc-navbar-switcher-tending" class="uc-navbar-switcher uc-switcher">
                                                <div class="row child-cols col-match g-2">
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-06.jpg"
                                                                        alt="Business Agility the Digital Age: Leveraging AI and Automation"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Tech</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>7d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Business Agility the
                                                                        Digital Age: Leveraging AI and Automation</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-07.jpg"
                                                                        alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Network</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>9d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">The Art of Baking: From
                                                                        Classic Bread to Artisan Pastries</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-08.jpg"
                                                                        alt="AI and Marketing: Unlocking Customer Insights"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Virtual
                                                                                Reality</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>15d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">AI and Marketing:
                                                                        Unlocking Customer Insights</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-09.jpg"
                                                                        alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">AI Powered</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>23d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Hidden Gems: Underrated
                                                                        Travel Destinations Around the World</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="row child-cols g-2">
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-01.jpg"
                                                                        alt="The Rise of AI-Powered Personal Assistants: How They Manage"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Gadgets</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>1min ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">The Rise of AI-Powered
                                                                        Personal Assistants: How They Manage</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-02.jpg"
                                                                        alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Startups</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>55min ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Tech Innovations
                                                                        Reshaping the Retail Landscape: AI Payments</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-03.jpg"
                                                                        alt="Balancing Work and Wellness: Tech Solutions for Healthy"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Gadgets</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>1h ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Balancing Work and
                                                                        Wellness: Tech Solutions for Healthy</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-04.jpg"
                                                                        alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">AI Powered</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2h ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">The Importance of
                                                                        Sleep: Tips for Better Rest and Recovery</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="row child-cols g-2">
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-11.jpg"
                                                                        alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Travel</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Solo Travel: Some Tips
                                                                        and Destinations for the Adventurous
                                                                        Explorer</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-12.jpg"
                                                                        alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Tech</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">AI-Powered Financial
                                                                        Planning: How Algorithms Revolutionizing</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-13.jpg"
                                                                        alt="Tech Tools for your Time Management: Enhancing Productivity"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Startups</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>3mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Tech Tools for your
                                                                        Time Management: Enhancing Productivity</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-14.jpg"
                                                                        alt="A Guide to The Rise of Gourmet Street Food: Trends and Top Picks"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">AI Powered</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>6mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">A Guide to The Rise of
                                                                        Gourmet Street Food: Trends and Top Picks</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="row child-cols g-2">
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-09.jpg"
                                                                        alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">AI Powered</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>23d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Hidden Gems: Underrated
                                                                        Travel Destinations Around the World</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-10.jpg"
                                                                        alt="Eco-Tourism: Traveling Responsibly and Sustainably"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Trips</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>29d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Eco-Tourism: Traveling
                                                                        Responsibly and Sustainably</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-11.jpg"
                                                                        alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Travel</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Solo Travel: Some Tips
                                                                        and Destinations for the Adventurous
                                                                        Explorer</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-12.jpg"
                                                                        alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Tech</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2mo ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">AI-Powered Financial
                                                                        Planning: How Algorithms Revolutionizing</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                <div class="row child-cols g-2">
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-03.jpg"
                                                                        alt="Balancing Work and Wellness: Tech Solutions for Healthy"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Gadgets</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>1h ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Balancing Work and
                                                                        Wellness: Tech Solutions for Healthy</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-04.jpg"
                                                                        alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">AI Powered</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>2h ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">The Importance of
                                                                        Sleep: Tips for Better Rest and Recovery</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-05.jpg"
                                                                        alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">AI Powered</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>12h ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">The Future of
                                                                        Sustainable Living: Driving Eco-Friendly
                                                                        Lifestyles</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div>
                                                        <article class="post type-post panel vstack gap-1">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                    <img class="media-cover image"
                                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                                        data-src="view/catalog/assets/images/demo-three/posts/img-06.jpg"
                                                                        alt="Business Agility the Digital Age: Leveraging AI and Automation"
                                                                        data-uc-img="loading: lazy">
                                                                </div>
                                                                <a href="blog-details.html" class="position-cover"></a>
                                                            </div>
                                                            <div class="post-header panel vstack gap-narrow">
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html">Tech</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>7d ago</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html">Business Agility the
                                                                        Digital Age: Leveraging AI and Automation</a>
                                                                </h3>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Trending <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 hide-scrollbar"
                                    data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                    <div class="row child-cols col-match g-2">
                                        <div>
                                            <article class="post type-post panel vstack gap-1">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-01.jpg"
                                                            alt="The Rise of AI-Powered Personal Assistants: How They Manage"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-narrow">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">Gadgets</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>1min ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">The Rise of AI-Powered Personal
                                                            Assistants: How They Manage</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel vstack gap-1">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-02.jpg"
                                                            alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-narrow">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">Startups</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>55min ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">Tech Innovations Reshaping the
                                                            Retail Landscape: AI Payments</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel vstack gap-1">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-03.jpg"
                                                            alt="Balancing Work and Wellness: Tech Solutions for Healthy"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-narrow">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">Gadgets</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>1h ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">Balancing Work and Wellness: Tech
                                                            Solutions for Healthy</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel vstack gap-1">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-04.jpg"
                                                            alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-narrow">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>2h ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">The Importance of Sleep: Tips for
                                                            Better Rest and Recovery</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel vstack gap-1">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-05.jpg"
                                                            alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-narrow">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>12h ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">The Future of Sustainable Living:
                                                            Driving Eco-Friendly Lifestyles</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="blog-category.html">News</a></li>
                            <li><a href="blog-category.html">Tech</a></li>
                            <li><a href="blog-category.html">Sciense</a></li>
                            <li>
                                <a href="#">More <span data-uc-navbar-parent-icon></span></a>
                                <div class="uc-navbar-dropdown ft-primary text-unset p-3 hide-scrollbar"
                                    data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                    <div class="row child-cols g-4">
                                        <div>
                                            <div class="row child-cols g-4">
                                                <div>
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li class="uc-nav-header mb-1">Main Pages</li>
                                                        <li><a href="view/catalog/main/index.html">Main</a></li>
                                                        <li><a href="view/catalog/demo-two/index.html">Classic News</a></li>
                                                        <li><a href="view/catalog/demo-three/index.html">Tech</a></li>
                                                        <li><a href="view/catalog/demo-four/index.html">Classic Blog</a></li>
                                                        <li><a href="view/catalog/demo-five/index.html">Gaming</a></li>
                                                        <li><a href="view/catalog/demo-six/index.html">Sports</a></li>
                                                        <li><a href="view/catalog/demo-seven/index.html">Newspaper</a></li>
                                                        <li><a href="view/catalog/demo-eight/index.html">Magazine</a></li>
                                                        <li><a href="view/catalog/demo-nine/index.html">Travel</a></li>
                                                        <li><a href="view/catalog/demo-ten/index.html">Food</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li class="uc-nav-header mb-1">CMS Pages</li>
                                                        <li><a href="blog.html">Modern</a></li>
                                                        <li><a href="blog-classic.html">Classic</a></li>
                                                        <li><a href="blog-2cols.html">Grid 2 cols</a></li>
                                                        <li><a href="blog-3cols.html">Grid 3 cols</a></li>
                                                        <li><a href="blog-4cols.html">Grid 4 cols</a></li>
                                                        <li><a href="blog-category.html">Category</a></li>
                                                        <li><a href="blog-author.html">Author</a></li>
                                                        <li><a href="blog-details.html">Blog single</a></li>
                                                        <li><a href="blog-details-2.html">Blog single v2</a></li>
                                                        <li><a href="blog-details-3.html">Blog single v3</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li class="uc-nav-header mb-1">Shop Pages</li>
                                                        <li><a href="shop.html">Grid 4 cols</a></li>
                                                        <li><a href="shop-3.html">Grid 3 cols</a></li>
                                                        <li><a href="shop-2.html">Grid 2 cols</a></li>
                                                        <li><a href="shop-product-detail.html">Product detail</a></li>
                                                        <li><a href="shop-product-detail-2.html">Product detail v2</a>
                                                        </li>
                                                        <li><a href="shop-cart.html">Cart</a></li>
                                                        <li><a href="shop-cart-2.html">Cart v2</a></li>
                                                        <li><a href="shop-checkout.html">Checkout</a></li>
                                                        <li><a href="shop-checkout-2.html">Checkout v2</a></li>
                                                        <li><a href="shop-order.html">Order confirmation</a></li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <ul class="uc-nav uc-navbar-dropdown-nav">
                                                        <li class="uc-nav-header mb-1">Other pages</li>
                                                        <li><a href="sign-in.html">Sign in</a></li>
                                                        <li><a href="sign-up.html">Sign up</a></li>
                                                        <li><a href="reset-password.html">Reset password</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        <li><a href="page-terms.html">Terms of service</a></li>
                                                        <li><a href="page-privacy.html">Privacy policy</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="panel w-100 overflow-hidden">
                                                <div class="ratio ratio-3x4 overflow-hidden rounded">
                                                    <img src="view/catalog/assets/images/common/menu-banner.jpg"
                                                        alt="Let's build anything with News5!">
                                                    <a class="position-cover"
                                                        href="https://themeforest.net/user/reacthemes/portfolio"
                                                        target="_blank"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="uc-navbar-center">
                        <div class="uc-logo d-block md:d-none text-dark dark:text-white">
                            <a href="index.html">
                                <img class="w-80px text-dark dark:text-white"
                                    src="view/catalog/assets/images/demo-three/common/logo.svg" alt="News5" data-uc-svg>
                            </a>
                        </div>
                    </div>
                    <div class="uc-navbar-right">
                        <div class="uc-navbar-item">
                            <a class="uc-cart-trigger position-relative btn btn-sm border-0 p-0 gap-narrow duration-0 dark:text-white"
                                href="#uc-cart-panel" data-uc-toggle>
                                <i class="icon icon-3 unicon-shopping-basket"></i>
                                <span class="position-absolute top-50 start-50 translate-middle cstack w-20px h-20px"
                                    style="font-size: 12px; margin-top: 2px">0</span>
                            </a>
                        </div>
                        <button type="button"
                            class="btn btn-sm btn-alt-primary bg-transparent text-gray-900 dark:text-white border shadow-xs text-none d-none lg:d-inline-flex"
                            data-uc-toggle="target: #uc-account-modal">
                            <i class="icon icon-narrow unicon-user-filled"></i>
                            <span>Sign in</span>
                        </button>
                        <div class="uc-navbar-item">
                            <div class="uc-modes-trigger icon-2 text-dark dark:text-white" data-darkmode-toggle="">
                                <label class="switch">
                                    <span class="sr-only">Dark mode toggle</span>
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Header end -->

<!-- Wrapper start -->
<div id="wrapper" class="wrap overflow-hidden-x">

    <!-- Section start -->

    <div class="section panel overflow-hidden py-2 bg-gray-25 dark:bg-gray-900 uc-dark">
        <div class="section-outer panel">
            <div class="container container-expand">
                <div class="section-inner panel vstack gap-4">
                    <div class="section-content">
                        <div class="block-layout grid-overlay-layout">
                            <div class="block-content">
                                <div class="row child-cols-12 md:child-cols-6 g-1 col-match">
                                    <div>
                                        <div>
                                            <article
                                                class="post type-post panel uc-transition-toggle  vstack gap-2 lg:gap-3 h-100 rounded overflow-hidden">
                                                <div class="post-media panel overflow-hidden h-100">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 h-100 d-none md:d-block">
                                                        <canvas class="h-100 w-100"></canvas>
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-12.jpg"
                                                            alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9 d-block md:d-none">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-12.jpg"
                                                            alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                </div>
                                                <div
                                                    class="position-cover bg-gradient-to-t from-black to-transparent opacity-90">
                                                </div>
                                                <div
                                                    class="post-header panel vstack justify-end items-start gap-1 sm:gap-2 p-2 sm:p-4 position-cover text-white">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">Tech</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3
                                                        class="post-title h5 sm:h4 xl:h3 m-0 max-w-600px text-white text-truncate-2">
                                                        <a class="text-none text-white"
                                                            href="blog-details.html">AI-Powered Financial Planning: How
                                                            Algorithms Revolutionizing</a>
                                                    </h3>
                                                    <div>
                                                        <div
                                                            class="post-meta panel hstack justify-between fs-7 fw-medium text-white text-opacity-60">
                                                            <div class="meta">
                                                                <div class="hstack gap-2">
                                                                    <div>
                                                                        <div class="post-author hstack gap-1">
                                                                            <a href="page-author.html"
                                                                                data-uc-tooltip="Sarah Eddrissi"><img
                                                                                    src="view/catalog/assets/images/avatars/03.png"
                                                                                    alt="Sarah Eddrissi"
                                                                                    class="w-24px h-24px rounded-circle"></a>
                                                                            <a href="page-author.html"
                                                                                class="text-black dark:text-white text-none fw-bold">Sarah
                                                                                Eddrissi</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="hstack gap-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="panel">
                                            <div class="row child-cols-6 g-1">
                                                <div>
                                                    <article
                                                        class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 rounded overflow-hidden">
                                                        <div class="post-media panel overflow-hidden">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 sm:ratio-4x3">
                                                                <img class="media-cover image image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-01.jpg"
                                                                    alt="The Rise of AI-Powered Personal Assistants: How They Manage"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="position-cover bg-gradient-to-t from-black to-transparent opacity-90">
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-start items-start flex-column-reverse gap-1 p-2 position-cover text-white">
                                                            <h3
                                                                class="post-title h6 sm:h5 lg:h6 xl:h5 m-0 max-w-600px text-white text-truncate-2">
                                                                <a class="text-none text-white"
                                                                    href="blog-details.html">The Rise of AI-Powered
                                                                    Personal Assistants: How They Manage</a>
                                                            </h3>
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">Gadgets</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>1min ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="blog-details.html" class="position-cover"></a>
                                                    </article>
                                                </div>
                                                <div>
                                                    <article
                                                        class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 rounded overflow-hidden">
                                                        <div class="post-media panel overflow-hidden">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 sm:ratio-4x3">
                                                                <img class="media-cover image image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-02.jpg"
                                                                    alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="position-cover bg-gradient-to-t from-black to-transparent opacity-90">
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-start items-start flex-column-reverse gap-1 p-2 position-cover text-white">
                                                            <h3
                                                                class="post-title h6 sm:h5 lg:h6 xl:h5 m-0 max-w-600px text-white text-truncate-2">
                                                                <a class="text-none text-white"
                                                                    href="blog-details.html">Tech Innovations Reshaping
                                                                    the Retail Landscape: AI Payments</a>
                                                            </h3>
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">Startups</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>55min ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="blog-details.html" class="position-cover"></a>
                                                    </article>
                                                </div>
                                                <div class="d-none lg:d-block">
                                                    <article
                                                        class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 rounded overflow-hidden">
                                                        <div class="post-media panel overflow-hidden">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 sm:ratio-4x3">
                                                                <img class="media-cover image image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-03.jpg"
                                                                    alt="Balancing Work and Wellness: Tech Solutions for Healthy"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="position-cover bg-gradient-to-t from-black to-transparent opacity-90">
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-start items-start flex-column-reverse gap-1 p-2 position-cover text-white">
                                                            <h3
                                                                class="post-title h6 sm:h5 lg:h6 xl:h5 m-0 max-w-600px text-white text-truncate-2">
                                                                <a class="text-none text-white"
                                                                    href="blog-details.html">Balancing Work and
                                                                    Wellness: Tech Solutions for Healthy</a>
                                                            </h3>
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">Gadgets</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>1h ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="blog-details.html" class="position-cover"></a>
                                                    </article>
                                                </div>
                                                <div class="d-none lg:d-block">
                                                    <article
                                                        class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 rounded overflow-hidden">
                                                        <div class="post-media panel overflow-hidden">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 sm:ratio-4x3">
                                                                <img class="media-cover image image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-04.jpg"
                                                                    alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="position-cover bg-gradient-to-t from-black to-transparent opacity-90">
                                                        </div>
                                                        <div
                                                            class="post-header panel vstack justify-start items-start flex-column-reverse gap-1 p-2 position-cover text-white">
                                                            <h3
                                                                class="post-title h6 sm:h5 lg:h6 xl:h5 m-0 max-w-600px text-white text-truncate-2">
                                                                <a class="text-none text-white"
                                                                    href="blog-details.html">The Importance of Sleep:
                                                                    Tips for Better Rest and Recovery</a>
                                                            </h3>
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">AI Powered</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>2h ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="blog-details.html" class="position-cover"></a>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="image-links-panel panel overflow-hidden pt-2 swiper-parent">
        <div class="container max-w-xl">
            <div class="panel">
                <div class="swiper overflow-unset"
                    data-uc-swiper="items: 3.25; gap: 8; center: true; freeMode: true; center-bounds: true; disable-class: d-none;"
                    data-uc-swiper-s="items: 6;" data-uc-swiper-l="items: 8; gap: 16;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="panel uc-transition-toggle vstack text-center overflow-hidden rounded border border-white border-opacity-10">
                                <figure
                                    class="featured-image m-0 ratio ratio-3x4 rounded-0 overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                        src="view/catalog/assets/images/common/img-fallback.png"
                                        data-src="view/catalog/assets/images/demo-three/posts/img-01.jpg" alt="Tech"
                                        data-uc-img="loading: lazy">
                                    <a href="blog-category.html" class="position-cover" data-caption="Tech"></a>
                                </figure>
                                <div class="overlay position-cover z-0 bg-black bg-opacity-50"></div>
                                <div
                                    class="position-absolute bottom-0 vstack justify-end gap-1 lg:gap-2 h-3/4 w-100 p-2 bg-gradient-to-t from-orange-600 to-transparent">
                                    <span class="fs-5 lg:fs-4 fw-bold text-white m-0">Tech</span>
                                    <a href="#"
                                        class="btn btn-2xs border-white border-opacity-25 fs-7 text-white rounded-1">Visit</a>
                                </div>
                                <a class="position-cover text-none z-1" href="blog-category.html"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="panel uc-transition-toggle vstack text-center overflow-hidden rounded border border-white border-opacity-10">
                                <figure
                                    class="featured-image m-0 ratio ratio-3x4 rounded-0 overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                        src="view/catalog/assets/images/common/img-fallback.png"
                                        data-src="view/catalog/assets/images/demo-three/posts/img-02.jpg" alt="Gadgets"
                                        data-uc-img="loading: lazy">
                                    <a href="blog-category.html" class="position-cover" data-caption="Gadgets"></a>
                                </figure>
                                <div class="overlay position-cover z-0 bg-black bg-opacity-50"></div>
                                <div
                                    class="position-absolute bottom-0 vstack justify-end gap-1 lg:gap-2 h-3/4 w-100 p-2 bg-gradient-to-t from-lime-600 to-transparent">
                                    <span class="fs-5 lg:fs-4 fw-bold text-white m-0">Gadgets</span>
                                    <a href="#"
                                        class="btn btn-2xs border-white border-opacity-25 fs-7 text-white rounded-1">Visit</a>
                                </div>
                                <a class="position-cover text-none z-1" href="blog-category.html"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="panel uc-transition-toggle vstack text-center overflow-hidden rounded border border-white border-opacity-10">
                                <figure
                                    class="featured-image m-0 ratio ratio-3x4 rounded-0 overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                        src="view/catalog/assets/images/common/img-fallback.png"
                                        data-src="view/catalog/assets/images/demo-three/posts/img-03.jpg" alt="Security"
                                        data-uc-img="loading: lazy">
                                    <a href="blog-category.html" class="position-cover" data-caption="Security"></a>
                                </figure>
                                <div class="overlay position-cover z-0 bg-black bg-opacity-50"></div>
                                <div
                                    class="position-absolute bottom-0 vstack justify-end gap-1 lg:gap-2 h-3/4 w-100 p-2 bg-gradient-to-t from-red-600 to-transparent">
                                    <span class="fs-5 lg:fs-4 fw-bold text-white m-0">Security</span>
                                    <a href="#"
                                        class="btn btn-2xs border-white border-opacity-25 fs-7 text-white rounded-1">Visit</a>
                                </div>
                                <a class="position-cover text-none z-1" href="blog-category.html"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="panel uc-transition-toggle vstack text-center overflow-hidden rounded border border-white border-opacity-10">
                                <figure
                                    class="featured-image m-0 ratio ratio-3x4 rounded-0 overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                        src="view/catalog/assets/images/common/img-fallback.png"
                                        data-src="view/catalog/assets/images/demo-three/posts/img-04.jpg" alt="Network"
                                        data-uc-img="loading: lazy">
                                    <a href="blog-category.html" class="position-cover" data-caption="Network"></a>
                                </figure>
                                <div class="overlay position-cover z-0 bg-black bg-opacity-50"></div>
                                <div
                                    class="position-absolute bottom-0 vstack justify-end gap-1 lg:gap-2 h-3/4 w-100 p-2 bg-gradient-to-t from-green-600 to-transparent">
                                    <span class="fs-5 lg:fs-4 fw-bold text-white m-0">Network</span>
                                    <a href="#"
                                        class="btn btn-2xs border-white border-opacity-25 fs-7 text-white rounded-1">Visit</a>
                                </div>
                                <a class="position-cover text-none z-1" href="blog-category.html"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="panel uc-transition-toggle vstack text-center overflow-hidden rounded border border-white border-opacity-10">
                                <figure
                                    class="featured-image m-0 ratio ratio-3x4 rounded-0 overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                        src="view/catalog/assets/images/common/img-fallback.png"
                                        data-src="view/catalog/assets/images/demo-three/posts/img-05.jpg" alt="Startups"
                                        data-uc-img="loading: lazy">
                                    <a href="blog-category.html" class="position-cover" data-caption="Startups"></a>
                                </figure>
                                <div class="overlay position-cover z-0 bg-black bg-opacity-50"></div>
                                <div
                                    class="position-absolute bottom-0 vstack justify-end gap-1 lg:gap-2 h-3/4 w-100 p-2 bg-gradient-to-t from-blue-600 to-transparent">
                                    <span class="fs-5 lg:fs-4 fw-bold text-white m-0">Startups</span>
                                    <a href="#"
                                        class="btn btn-2xs border-white border-opacity-25 fs-7 text-white rounded-1">Visit</a>
                                </div>
                                <a class="position-cover text-none z-1" href="blog-category.html"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="panel uc-transition-toggle vstack text-center overflow-hidden rounded border border-white border-opacity-10">
                                <figure
                                    class="featured-image m-0 ratio ratio-3x4 rounded-0 overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                        src="view/catalog/assets/images/common/img-fallback.png"
                                        data-src="view/catalog/assets/images/demo-three/posts/img-06.jpg" alt="Space"
                                        data-uc-img="loading: lazy">
                                    <a href="blog-category.html" class="position-cover" data-caption="Space"></a>
                                </figure>
                                <div class="overlay position-cover z-0 bg-black bg-opacity-50"></div>
                                <div
                                    class="position-absolute bottom-0 vstack justify-end gap-1 lg:gap-2 h-3/4 w-100 p-2 bg-gradient-to-t from-teal-600 to-transparent">
                                    <span class="fs-5 lg:fs-4 fw-bold text-white m-0">Space</span>
                                    <a href="#"
                                        class="btn btn-2xs border-white border-opacity-25 fs-7 text-white rounded-1">Visit</a>
                                </div>
                                <a class="position-cover text-none z-1" href="blog-category.html"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="panel uc-transition-toggle vstack text-center overflow-hidden rounded border border-white border-opacity-10">
                                <figure
                                    class="featured-image m-0 ratio ratio-3x4 rounded-0 overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                        src="view/catalog/assets/images/common/img-fallback.png"
                                        data-src="view/catalog/assets/images/demo-three/posts/img-07.jpg" alt="VR"
                                        data-uc-img="loading: lazy">
                                    <a href="blog-category.html" class="position-cover" data-caption="VR"></a>
                                </figure>
                                <div class="overlay position-cover z-0 bg-black bg-opacity-50"></div>
                                <div
                                    class="position-absolute bottom-0 vstack justify-end gap-1 lg:gap-2 h-3/4 w-100 p-2 bg-gradient-to-t from-purple-600 to-transparent">
                                    <span class="fs-5 lg:fs-4 fw-bold text-white m-0">VR</span>
                                    <a href="#"
                                        class="btn btn-2xs border-white border-opacity-25 fs-7 text-white rounded-1">Visit</a>
                                </div>
                                <a class="position-cover text-none z-1" href="blog-category.html"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="panel uc-transition-toggle vstack text-center overflow-hidden rounded border border-white border-opacity-10">
                                <figure
                                    class="featured-image m-0 ratio ratio-3x4 rounded-0 overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                        src="view/catalog/assets/images/common/img-fallback.png"
                                        data-src="view/catalog/assets/images/demo-three/posts/img-20.jpg" alt="Repair"
                                        data-uc-img="loading: lazy">
                                    <a href="blog-category.html" class="position-cover" data-caption="Repair"></a>
                                </figure>
                                <div class="overlay position-cover z-0 bg-black bg-opacity-50"></div>
                                <div
                                    class="position-absolute bottom-0 vstack justify-end gap-1 lg:gap-2 h-3/4 w-100 p-2 bg-gradient-to-t from-pink-600 to-transparent">
                                    <span class="fs-5 lg:fs-4 fw-bold text-white m-0">Repair</span>
                                    <a href="#"
                                        class="btn btn-2xs border-white border-opacity-25 fs-7 text-white rounded-1">Visit</a>
                                </div>
                                <a class="position-cover text-none z-1" href="blog-category.html"></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="panel uc-transition-toggle vstack text-center overflow-hidden rounded border border-white border-opacity-10">
                                <figure
                                    class="featured-image m-0 ratio ratio-3x4 rounded-0 overflow-hidden bg-gray-25 dark:bg-gray-800">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                        src="view/catalog/assets/images/common/img-fallback.png"
                                        data-src="view/catalog/assets/images/demo-three/posts/img-09.jpg" alt="AI"
                                        data-uc-img="loading: lazy">
                                    <a href="blog-category.html" class="position-cover" data-caption="AI"></a>
                                </figure>
                                <div class="overlay position-cover z-0 bg-black bg-opacity-50"></div>
                                <div
                                    class="position-absolute bottom-0 vstack justify-end gap-1 lg:gap-2 h-3/4 w-100 p-2 bg-gradient-to-t from-indigo-600 to-transparent">
                                    <span class="fs-5 lg:fs-4 fw-bold text-white m-0">AI</span>
                                    <a href="#"
                                        class="btn btn-2xs border-white border-opacity-25 fs-7 text-white rounded-1">Visit</a>
                                </div>
                                <a class="position-cover text-none z-1" href="blog-category.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section end -->

    <!-- Section start -->

    <!-- Section end -->

    <!-- Section start -->
    <div class="section panel overflow-hidden">
        <div class="section-outer panel py-5 lg:py-8">
            <div class="container max-w-xl">
                <div class="section-inner">
                    <div class="block-layout grid-layout vstack gap-3 lg:gap-4 panel overflow-hidden">
                        <div class="block-header panel">
                            <h2 class="h5 lg:h4 fw-medium m-0 text-inherit hstack">
                                <a class="text-none dark:text-white hover:text-primary duration-150"
                                    href="blog-category.html">Startups and technology</a>
                                <i class="icon-2 lg:icon-3 unicon-chevron-right opacity-40"></i>
                            </h2>
                        </div>
                        <div class="block-content">
                            <div class="panel row child-cols-12 md:child-cols gy-4 md:gx-3 xl:gx-4">
                                <div class="col-12 md:col-6 lg:col-7">
                                    <div class="h-100">
                                        <article
                                            class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 h-100 overflow-hidden uc-dark">
                                            <div class="post-media panel overflow-hidden h-100">
                                                <div
                                                    class="featured-image bg-gray-25 dark:bg-gray-800 h-100 d-none md:d-block">
                                                    <canvas class="h-100 w-100"></canvas>
                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                        data-src="view/catalog/assets/images/demo-three/posts/img-19.jpg"
                                                        alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                        data-uc-img="loading: lazy">
                                                </div>
                                                <div
                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 d-block md:d-none">
                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                        data-src="view/catalog/assets/images/demo-three/posts/img-19.jpg"
                                                        alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                        data-uc-img="loading: lazy">
                                                </div>
                                            </div>
                                            <div
                                                class="position-cover bg-gradient-to-t from-black to-transparent opacity-90">
                                            </div>
                                            <div
                                                class="post-header panel vstack justify-end items-start gap-1 sm:gap-2 p-2 sm:p-4 position-cover text-white">
                                                <div
                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                    <div>
                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                href="blog-category.html">AI Powered</a>
                                                        </div>
                                                    </div>
                                                    <div class="sep d-none md:d-block">|</div>
                                                    <div class="d-none md:d-block">
                                                        <div class="post-date hstack gap-narrow">
                                                            <span>2mo ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3
                                                    class="post-title h5 lg:h4 m-0 max-w-600px text-white text-truncate-2">
                                                    <a class="text-none text-white" href="blog-details.html">The Future
                                                        of Sustainable Living: Driving Eco-Friendly Lifestyles</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-between fs-7 fw-medium text-white text-opacity-60">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="Anna Luis"><img
                                                                                src="view/catalog/assets/images/avatars/04.png"
                                                                                alt="Anna Luis"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">Anna
                                                                            Luis</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div>
                                    <div class="row child-cols-12 g-4 sep-x">
                                        <div>
                                            <article class="post type-post panel uc-transition-toggle">
                                                <div class="row child-cols g-2" data-uc-grid>
                                                    <div class="col-auto">
                                                        <div
                                                            class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-05.jpg"
                                                                    alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-header panel vstack justify-between gap-1">
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">AI Powered</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>12h ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="blog-details.html">The Future of Sustainable
                                                                    Living: Driving Eco-Friendly Lifestyles</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel uc-transition-toggle">
                                                <div class="row child-cols g-2" data-uc-grid>
                                                    <div class="col-auto">
                                                        <div
                                                            class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-06.jpg"
                                                                    alt="Business Agility the Digital Age: Leveraging AI and Automation"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-header panel vstack justify-between gap-1">
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">Tech</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>7d ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="blog-details.html">Business Agility the
                                                                    Digital Age: Leveraging AI and Automation</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel uc-transition-toggle">
                                                <div class="row child-cols g-2" data-uc-grid>
                                                    <div class="col-auto">
                                                        <div
                                                            class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-07.jpg"
                                                                    alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-header panel vstack justify-between gap-1">
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">Network</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>9d ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="blog-details.html">The Art of Baking: From
                                                                    Classic Bread to Artisan Pastries</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel uc-transition-toggle">
                                                <div class="row child-cols g-2" data-uc-grid>
                                                    <div class="col-auto">
                                                        <div
                                                            class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-08.jpg"
                                                                    alt="AI and Marketing: Unlocking Customer Insights"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-header panel vstack justify-between gap-1">
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">Virtual
                                                                            Reality</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>15d ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="blog-details.html">AI and Marketing: Unlocking
                                                                    Customer Insights</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel uc-transition-toggle">
                                                <div class="row child-cols g-2" data-uc-grid>
                                                    <div class="col-auto">
                                                        <div
                                                            class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-09.jpg"
                                                                    alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-header panel vstack justify-between gap-1">
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">AI Powered</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>23d ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="blog-details.html">Hidden Gems: Underrated
                                                                    Travel Destinations Around the World</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <a href="blog.html"
                                        class="animate-btn gap-0 btn btn-sm btn-alt-primary bg-transparent dark:text-white border w-100 mt-4">
                                        <span>See all Tech</span>
                                        <i class="icon icon-1 unicon-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section end -->

    <!-- Section start -->
    <div class="section panel overflow-hidden">
        <div class="section-outer panel">
            <div class="container max-w-xl">
                <div class="section-inner">
                    <a class="text-none" href="https://themeforest.net/user/reacthemes/portfolio" target="_blank"
                        rel="nofollow">
                        <img class="d-none md:d-block" src="view/catalog/assets/images/common/ad-slot.jpg" alt="Ad slot">
                        <img class="d-block md:d-none" src="view/catalog/assets/images/common/ad-slot-mobile.jpg" alt="Ad slot">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section start -->

    <!-- Section start -->
    <div class="section panel overflow-hidden">
        <div class="section-outer panel py-5 lg:py-8">
            <div class="container max-w-xl">
                <div class="section-inner">
                    <div class="row child-cols-12 lg:child-cols-6 g-4 lg:gx-6 xl:gy-8" data-uc-grid>
                        <div>
                            <div class="block-layout grid-layout vstack gap-3 lg:gap-4 panel overflow-hidden">
                                <div class="block-header panel">
                                    <h2 class="h5 lg:h4 fw-medium m-0 text-inherit hstack">
                                        <a class="text-none dark:text-white hover:text-primary duration-150"
                                            href="blog-category.html">Corporates and innovation</a>
                                        <i class="icon-2 lg:icon-3 unicon-chevron-right opacity-40"></i>
                                    </h2>
                                </div>
                                <div class="block-content">
                                    <div class="row child-cols-6 g-2 gy-3 md:gx-3 md:gy-4">
                                        <div>
                                            <article
                                                class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-05.jpg"
                                                            alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>12h ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">The Future of Sustainable Living:
                                                            Driving Eco-Friendly Lifestyles</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article
                                                class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-06.jpg"
                                                            alt="Business Agility the Digital Age: Leveraging AI and Automation"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">Tech</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>7d ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">Business Agility the Digital Age:
                                                            Leveraging AI and Automation</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article
                                                class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-07.jpg"
                                                            alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">Network</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>9d ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">The Art of Baking: From Classic
                                                            Bread to Artisan Pastries</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article
                                                class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-08.jpg"
                                                            alt="AI and Marketing: Unlocking Customer Insights"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">Virtual Reality</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>15d ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">AI and Marketing: Unlocking
                                                            Customer Insights</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-footer cstack lg:mt-2">
                                    <a href="#"
                                        class="animate-btn gap-0 btn btn-sm btn-alt-primary bg-transparent dark:text-white border w-100 md:w-auto">
                                        <span>See all Gadgets</span>
                                        <i class="icon icon-1 unicon-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="block-layout grid-layout vstack gap-3 lg:gap-4 panel overflow-hidden">
                                <div class="block-header panel">
                                    <h2 class="h5 lg:h4 fw-medium m-0 text-inherit hstack">
                                        <a class="text-none dark:text-white hover:text-primary duration-150"
                                            href="blog-category.html">Investors and funding</a>
                                        <i class="icon-2 lg:icon-3 unicon-chevron-right opacity-40"></i>
                                    </h2>
                                </div>
                                <div class="block-content">
                                    <div class="row child-cols-6 g-2 gy-3 md:gx-3 md:gy-4">
                                        <div>
                                            <article
                                                class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-11.jpg"
                                                            alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">Travel</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">Solo Travel: Some Tips and
                                                            Destinations for the Adventurous Explorer</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article
                                                class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-12.jpg"
                                                            alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">Tech</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>2mo ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">AI-Powered Financial Planning: How
                                                            Algorithms Revolutionizing</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article
                                                class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-13.jpg"
                                                            alt="Tech Tools for your Time Management: Enhancing Productivity"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">Startups</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>3mo ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">Tech Tools for your Time
                                                            Management: Enhancing Productivity</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article
                                                class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                                <div class="post-media panel overflow-hidden">
                                                    <div
                                                        class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/demo-three/posts/img-14.jpg"
                                                            alt="A Guide to The Rise of Gourmet Street Food: Trends and Top Picks"
                                                            data-uc-img="loading: lazy">
                                                    </div>
                                                    <a href="blog-details.html" class="position-cover"></a>
                                                </div>
                                                <div class="post-header panel vstack gap-1">
                                                    <div
                                                        class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        <div>
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                    href="blog-category.html">AI Powered</a>
                                                            </div>
                                                        </div>
                                                        <div class="sep d-none md:d-block">|</div>
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span>6mo ago</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                        <a class="text-none hover:text-primary duration-150"
                                                            href="blog-details.html">A Guide to The Rise of Gourmet
                                                            Street Food: Trends and Top Picks</a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-footer cstack lg:mt-2">
                                    <a href="#"
                                        class="animate-btn gap-0 btn btn-sm btn-alt-primary bg-transparent dark:text-white border w-100 md:w-auto">
                                        <span>See all Science</span>
                                        <i class="icon icon-1 unicon-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section end -->

    <!-- Section start -->
    <div class="section panel overflow-hidden swiper-parent uc-dark">
        <div class="section-outer panel py-5 lg:py-8 bg-gray-25 dark:bg-gray-800 dark:text-white">
            <div class="container max-w-xl">
                <div class="section-inner panel vstack gap-4">
                    <div class="section-header panel">
                        <h2 class="h5 lg:h4 fw-medium m-0 text-inherit hstack">
                            <a class="text-none dark:text-white hover:text-primary duration-150"
                                href="blog-category.html">Fintech and ecommerce</a>
                            <i class="icon-2 lg:icon-3 unicon-chevron-right opacity-40"></i>
                        </h2>
                    </div>
                    <div class="section-content">
                        <div class="swiper"
                            data-uc-swiper="items: 2; gap: 16; autoplay: 2500; dots: .dot-nav; next: .nav-next; prev: .nav-prev; disable-class: opacity-40;"
                            data-uc-swiper-s="items: 3;" data-uc-swiper-m="gap: 24;"
                            data-uc-swiper-l="items: 3; gap: 32;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div>
                                        <article class="post type-post panel vstack gap-1 lg:gap-2">
                                            <div class="post-media panel overflow-hidden">
                                                <div class="featured-video bg-gray-700 ratio ratio-16x9">
                                                    <video class="video-cover video-lazyload min-h-100px" preload="none"
                                                        loop playsinline>
                                                        <source src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/videos/vid-01.webm"
                                                            type="video/webm">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div
                                                    class="has-video-overlay position-absolute top-0 end-0 w-150px h-150px bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                <span
                                                    class="cstack has-video-icon position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span>
                                                <a href="blog-details.html" class="position-cover"></a>
                                            </div>
                                            <div class="post-header panel vstack gap-1">
                                                <div
                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                    <div>
                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                href="blog-category.html">Gadgets</a>
                                                        </div>
                                                    </div>
                                                    <div class="sep d-none md:d-block">|</div>
                                                    <div class="d-none md:d-block">
                                                        <div class="post-date hstack gap-narrow">
                                                            <span>1h ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                    <a class="text-none hover:text-primary duration-150"
                                                        href="blog-details.html">Balancing Work and Wellness: Tech
                                                        Solutions for Healthy</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <article class="post type-post panel vstack gap-1 lg:gap-2">
                                            <div class="post-media panel overflow-hidden">
                                                <div class="featured-video bg-gray-700 ratio ratio-16x9">
                                                    <video class="video-cover video-lazyload min-h-100px" preload="none"
                                                        loop playsinline>
                                                        <source src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/videos/vid-04.webm"
                                                            type="video/webm">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div
                                                    class="has-video-overlay position-absolute top-0 end-0 w-150px h-150px bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                <span
                                                    class="cstack has-video-icon position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span>
                                                <a href="blog-details.html" class="position-cover"></a>
                                            </div>
                                            <div class="post-header panel vstack gap-1">
                                                <div
                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                    <div>
                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                href="blog-category.html">Tech</a>
                                                        </div>
                                                    </div>
                                                    <div class="sep d-none md:d-block">|</div>
                                                    <div class="d-none md:d-block">
                                                        <div class="post-date hstack gap-narrow">
                                                            <span>7d ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                    <a class="text-none hover:text-primary duration-150"
                                                        href="blog-details.html">Business Agility the Digital Age:
                                                        Leveraging AI and Automation</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <article class="post type-post panel vstack gap-1 lg:gap-2">
                                            <div class="post-media panel overflow-hidden">
                                                <div class="featured-video bg-gray-700 ratio ratio-16x9">
                                                    <video class="video-cover video-lazyload min-h-100px" preload="none"
                                                        loop playsinline>
                                                        <source src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/videos/vid-03.webm"
                                                            type="video/webm">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div
                                                    class="has-video-overlay position-absolute top-0 end-0 w-150px h-150px bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                <span
                                                    class="cstack has-video-icon position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span>
                                                <a href="blog-details.html" class="position-cover"></a>
                                            </div>
                                            <div class="post-header panel vstack gap-1">
                                                <div
                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                    <div>
                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                href="blog-category.html">Network</a>
                                                        </div>
                                                    </div>
                                                    <div class="sep d-none md:d-block">|</div>
                                                    <div class="d-none md:d-block">
                                                        <div class="post-date hstack gap-narrow">
                                                            <span>9d ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                    <a class="text-none hover:text-primary duration-150"
                                                        href="blog-details.html">The Art of Baking: From Classic Bread
                                                        to Artisan Pastries</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <article class="post type-post panel vstack gap-1 lg:gap-2">
                                            <div class="post-media panel overflow-hidden">
                                                <div class="featured-video bg-gray-700 ratio ratio-16x9">
                                                    <video class="video-cover video-lazyload min-h-100px" preload="none"
                                                        loop playsinline>
                                                        <source src="view/catalog/assets/images/common/img-fallback.png"
                                                            data-src="view/catalog/assets/images/videos/vid-05.webm"
                                                            type="video/webm">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div
                                                    class="has-video-overlay position-absolute top-0 end-0 w-150px h-150px bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                </div>
                                                <span
                                                    class="cstack has-video-icon position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                    <i class="icon-narrow unicon-play-filled-alt"></i>
                                                </span>
                                                <a href="blog-details.html" class="position-cover"></a>
                                            </div>
                                            <div class="post-header panel vstack gap-1">
                                                <div
                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                    <div>
                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                href="blog-category.html">Tech</a>
                                                        </div>
                                                    </div>
                                                    <div class="sep d-none md:d-block">|</div>
                                                    <div class="d-none md:d-block">
                                                        <div class="post-date hstack gap-narrow">
                                                            <span>2mo ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                                    <a class="text-none hover:text-primary duration-150"
                                                        href="blog-details.html">AI-Powered Financial Planning: How
                                                        Algorithms Revolutionizing</a>
                                                </h3>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div class="hstack gap-1 mt-4">
                                <div
                                    class="swiper-nav nav-prev btn btn-alt-primary bg-transparent dark:text-white rounded-0 p-0 border w-32px lg:w-40px h-32px lg:h-40px shadow-sm">
                                    <i class="icon-1 unicon-chevron-left"></i>
                                </div>
                                <div
                                    class="swiper-nav nav-next btn btn-alt-primary bg-transparent dark:text-white rounded-0 p-0 border w-32px lg:w-40px h-32px lg:h-40px shadow-sm">
                                    <i class="icon-1 unicon-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section end -->

    <!-- Section start -->
    <div class="section panel overflow-hidden">
        <div class="section-outer panel py-5 lg:py-8">
            <div class="container max-w-xl">
                <div class="section-inner">
                    <div class="block-layout grid-layout vstack gap-3 lg:gap-4 panel overflow-hidden">
                        <div class="block-header panel">
                            <h2 class="h5 lg:h4 fw-medium m-0 text-inherit hstack">
                                <a class="text-none dark:text-white hover:text-primary duration-150"
                                    href="blog-category.html">Data and security</a>
                                <i class="icon-2 lg:icon-3 unicon-chevron-right opacity-40"></i>
                            </h2>
                        </div>
                        <div class="block-content">
                            <div class="panel row child-cols-12 md:child-cols gy-4 md:gx-3 xl:gx-4">
                                <div class="col-12 md:col-6 lg:col-7">
                                    <div class="h-100">
                                        <article
                                            class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 h-100 overflow-hidden uc-dark">
                                            <div class="post-media panel overflow-hidden h-100">
                                                <div
                                                    class="featured-image bg-gray-25 dark:bg-gray-800 h-100 d-none md:d-block">
                                                    <canvas class="h-100 w-100"></canvas>
                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                        data-src="view/catalog/assets/images/demo-three/posts/img-10.jpg"
                                                        alt="Eco-Tourism: Traveling Responsibly and Sustainably"
                                                        data-uc-img="loading: lazy">
                                                </div>
                                                <div
                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 d-block md:d-none">
                                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                        src="view/catalog/assets/images/common/img-fallback.png"
                                                        data-src="view/catalog/assets/images/demo-three/posts/img-10.jpg"
                                                        alt="Eco-Tourism: Traveling Responsibly and Sustainably"
                                                        data-uc-img="loading: lazy">
                                                </div>
                                            </div>
                                            <div
                                                class="position-cover bg-gradient-to-t from-black to-transparent opacity-90">
                                            </div>
                                            <div
                                                class="post-header panel vstack justify-end items-start gap-1 sm:gap-2 p-2 sm:p-4 position-cover text-white">
                                                <div
                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                    <div>
                                                        <div class="post-category hstack gap-narrow fw-semibold">
                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                href="blog-category.html">Trips</a>
                                                        </div>
                                                    </div>
                                                    <div class="sep d-none md:d-block">|</div>
                                                    <div class="d-none md:d-block">
                                                        <div class="post-date hstack gap-narrow">
                                                            <span>29d ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3
                                                    class="post-title h5 lg:h4 m-0 max-w-600px text-white text-truncate-2">
                                                    <a class="text-none text-white"
                                                        href="blog-details.html">Eco-Tourism: Traveling Responsibly and
                                                        Sustainably</a>
                                                </h3>
                                                <div>
                                                    <div
                                                        class="post-meta panel hstack justify-between fs-7 fw-medium text-white text-opacity-60">
                                                        <div class="meta">
                                                            <div class="hstack gap-2">
                                                                <div>
                                                                    <div class="post-author hstack gap-1">
                                                                        <a href="page-author.html"
                                                                            data-uc-tooltip="David Peterson"><img
                                                                                src="view/catalog/assets/images/avatars/01.png"
                                                                                alt="David Peterson"
                                                                                class="w-24px h-24px rounded-circle"></a>
                                                                        <a href="page-author.html"
                                                                            class="text-black dark:text-white text-none fw-bold">David
                                                                            Peterson</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="hstack gap-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div>
                                    <div class="row child-cols-12 g-4 sep-x">
                                        <div>
                                            <article class="post type-post panel uc-transition-toggle">
                                                <div class="row child-cols g-2" data-uc-grid>
                                                    <div class="col-auto">
                                                        <div
                                                            class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-01.jpg"
                                                                    alt="The Rise of AI-Powered Personal Assistants: How They Manage"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-header panel vstack justify-between gap-1">
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">Gadgets</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>1min ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="blog-details.html">The Rise of AI-Powered
                                                                    Personal Assistants: How They Manage</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel uc-transition-toggle">
                                                <div class="row child-cols g-2" data-uc-grid>
                                                    <div class="col-auto">
                                                        <div
                                                            class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-02.jpg"
                                                                    alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-header panel vstack justify-between gap-1">
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">Startups</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>55min ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="blog-details.html">Tech Innovations Reshaping
                                                                    the Retail Landscape: AI Payments</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel uc-transition-toggle">
                                                <div class="row child-cols g-2" data-uc-grid>
                                                    <div class="col-auto">
                                                        <div
                                                            class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-03.jpg"
                                                                    alt="Balancing Work and Wellness: Tech Solutions for Healthy"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-header panel vstack justify-between gap-1">
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">Gadgets</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>1h ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="blog-details.html">Balancing Work and
                                                                    Wellness: Tech Solutions for Healthy</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel uc-transition-toggle">
                                                <div class="row child-cols g-2" data-uc-grid>
                                                    <div class="col-auto">
                                                        <div
                                                            class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-04.jpg"
                                                                    alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-header panel vstack justify-between gap-1">
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">AI Powered</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>2h ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="blog-details.html">The Importance of Sleep:
                                                                    Tips for Better Rest and Recovery</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div>
                                            <article class="post type-post panel uc-transition-toggle">
                                                <div class="row child-cols g-2" data-uc-grid>
                                                    <div class="col-auto">
                                                        <div
                                                            class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="view/catalog/assets/images/demo-three/posts/img-05.jpg"
                                                                    alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="post-header panel vstack justify-between gap-1">
                                                            <div
                                                                class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                <div>
                                                                    <div
                                                                        class="post-category hstack gap-narrow fw-semibold">
                                                                        <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                            href="blog-category.html">AI Powered</a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>12h ago</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                <a class="text-none hover:text-primary duration-150"
                                                                    href="blog-details.html">The Future of Sustainable
                                                                    Living: Driving Eco-Friendly Lifestyles</a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="animate-btn gap-0 btn btn-sm btn-alt-primary bg-transparent dark:text-white border w-100 mt-4">
                                        <span>See all Startups</span>
                                        <i class="icon icon-1 unicon-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section end -->

    <!-- Section start -->
    <div class="section panel overflow-hidden">
        <div class="section-outer panel">
            <div class="container max-w-xl">
                <div class="section-inner">
                    <a class="text-none" href="https://themeforest.net/user/reacthemes/portfolio" target="_blank"
                        rel="nofollow">
                        <img class="d-none md:d-block" src="view/catalog/assets/images/common/ad-slot-2.jpg" alt="Ad slot">
                        <img class="d-block md:d-none" src="view/catalog/assets/images/common/ad-slot-mobile-2.jpg" alt="Ad slot">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section start -->

    <!-- Section start -->
    <div id="latest-news" class="latest-news section panel overflow-hidden">
        <div class="section-outer panel py-5 lg:py-8">
            <div class="container max-w-xl">
                <div class="section-inner panel vstack gap-4">
                    <div class="section-header panel vstack items-center justify-center text-center gap-1">
                        <h2 class="h5 lg:h4 fw-medium m-0 text-inherit hstack">
                            <span>Latest news</span>
                        </h2>
                    </div>
                    <div class="section-content">
                        <div
                            class="row child-cols-12 sm:child-cols-6 md:child-cols-4 lg:child-cols-3 g-2 gy-4 md:g-3 md:gy-5 xl:g-4 xl:gy-6">
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-01.jpg"
                                                alt="The Rise of AI-Powered Personal Assistants: How They Manage"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Gadgets</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>1min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">The Rise of AI-Powered Personal Assistants: How
                                                They Manage</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-02.jpg"
                                                alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Startups</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>55min ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Tech Innovations Reshaping the Retail
                                                Landscape: AI Payments</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-03.jpg"
                                                alt="Balancing Work and Wellness: Tech Solutions for Healthy"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Gadgets</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>1h ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Balancing Work and Wellness: Tech Solutions for
                                                Healthy</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-04.jpg"
                                                alt="The Importance of Sleep: Tips for Better Rest and Recovery"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">AI Powered</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>2h ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">The Importance of Sleep: Tips for Better Rest
                                                and Recovery</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-05.jpg"
                                                alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">AI Powered</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>12h ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">The Future of Sustainable Living: Driving
                                                Eco-Friendly Lifestyles</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-06.jpg"
                                                alt="Business Agility the Digital Age: Leveraging AI and Automation"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Tech</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>7d ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Business Agility the Digital Age: Leveraging AI
                                                and Automation</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-07.jpg"
                                                alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Network</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>9d ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">The Art of Baking: From Classic Bread to
                                                Artisan Pastries</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-08.jpg"
                                                alt="AI and Marketing: Unlocking Customer Insights"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Virtual Reality</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>15d ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">AI and Marketing: Unlocking Customer
                                                Insights</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-09.jpg"
                                                alt="Hidden Gems: Underrated Travel Destinations Around the World"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">AI Powered</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>23d ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Hidden Gems: Underrated Travel Destinations
                                                Around the World</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-10.jpg"
                                                alt="Eco-Tourism: Traveling Responsibly and Sustainably"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Trips</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>29d ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Eco-Tourism: Traveling Responsibly and
                                                Sustainably</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-11.jpg"
                                                alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Travel</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>2mo ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Solo Travel: Some Tips and Destinations for the
                                                Adventurous Explorer</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-12.jpg"
                                                alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Tech</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>2mo ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">AI-Powered Financial Planning: How Algorithms
                                                Revolutionizing</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-13.jpg"
                                                alt="Tech Tools for your Time Management: Enhancing Productivity"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Startups</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>3mo ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Tech Tools for your Time Management: Enhancing
                                                Productivity</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-14.jpg"
                                                alt="A Guide to The Rise of Gourmet Street Food: Trends and Top Picks"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">AI Powered</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>6mo ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">A Guide to The Rise of Gourmet Street Food:
                                                Trends and Top Picks</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-15.jpg"
                                                alt="Gaming in the Age of AI: Strategies for Startups"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Virtual Reality</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>9mo ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Gaming in the Age of AI: Strategies for
                                                Startups</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-16.jpg"
                                                alt="Top Independent Contractors to Invest in Best of Startups"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Media</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>1yr ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Top Independent Contractors to Invest in Best
                                                of Startups</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-17.jpg"
                                                alt="Potential of Immersive Technologies help your Business Grow"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Network</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>1yr ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Potential of Immersive Technologies help your
                                                Business Grow</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-18.jpg"
                                                alt="Virtual Reality and Mental Health: Exploring the Therapeutic"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">Network</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>2mo ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Virtual Reality and Mental Health: Exploring
                                                the Therapeutic</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-19.jpg"
                                                alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">AI Powered</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>2mo ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">The Future of Sustainable Living: Driving
                                                Eco-Friendly Lifestyles</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                    <div class="post-media panel overflow-hidden">
                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="view/catalog/assets/images/common/img-fallback.png"
                                                data-src="view/catalog/assets/images/demo-three/posts/img-20.jpg"
                                                alt="Smart Homes, Smarter Living: Exploring IoT and AI"
                                                data-uc-img="loading: lazy">
                                        </div>
                                        <a href="blog-details.html" class="position-cover"></a>
                                    </div>
                                    <div class="post-header panel vstack gap-1">
                                        <div
                                            class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                            <div>
                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                    <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                        href="blog-category.html">AI Powered</a>
                                                </div>
                                            </div>
                                            <div class="sep d-none md:d-block">|</div>
                                            <div class="d-none md:d-block">
                                                <div class="post-date hstack gap-narrow">
                                                    <span>23d ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2 mb-1">
                                            <a class="text-none hover:text-primary duration-150"
                                                href="blog-details.html">Smart Homes, Smarter Living: Exploring IoT and
                                                AI</a>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="section-footer cstack lg:mt-4">
                        <a href="#"
                            class="animate-btn gap-0 btn btn-sm btn-alt-primary bg-transparent dark:text-white border w-100 md:w-auto">
                            <span>See all latest news</span>
                            <i class="icon icon-1 unicon-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once "template/footer.php"; ?>