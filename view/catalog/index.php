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
                                        <?php foreach ($HeaderView as $value): { ?>


                                                <div>
                                                    <article
                                                        class="post type-post panel uc-transition-toggle  vstack gap-2 lg:gap-3 h-100 rounded overflow-hidden">
                                                        <div class="post-media panel overflow-hidden h-100">
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 h-100 d-none md:d-block">
                                                                <canvas class="h-100 w-100"></canvas>
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="/view/catalog/assets/dist/image/blog/<?php echo $value['image'] ?>"
                                                                    alt="AI-Powered Financial Planning: How Algorithms Revolutionizing"
                                                                    data-uc-img="loading: lazy">
                                                            </div>
                                                            <div
                                                                class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9 d-block md:d-none">
                                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                                    data-src="/view/catalog/assets/dist/image/blog/<?php echo $value['image'] ?>"
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
                                                                            href="blog-category.html"><?php print $value['name']; ?></a>
                                                                    </div>
                                                                </div>
                                                                <div class="sep d-none md:d-block">|</div>
                                                                <div class="d-none md:d-block">
                                                                    <div class="post-date hstack gap-narrow">
                                                                        <span>


                                                                        <?php


                                                                        echo $this->timeConvert($value['created_date_posts']);

                                                                        ?>

                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h3
                                                                class="post-title h5 sm:h4 xl:h3 m-0 max-w-600px text-white text-truncate-2">
                                                                <a class="text-none text-white"
                                                                    href="blog-details.html"><?php print $value['title']; ?></a>
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
                                            <?php }endforeach; ?>

                                    </div>
                                    <div>
                                        <div class="panel">
                                            <div class="row child-cols-6 g-1">
                                                <?php foreach ($HeaderPosts as $value) { ?>


                                                    <div>
                                                        <article
                                                            class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 rounded overflow-hidden">
                                                            <div class="post-media panel overflow-hidden">
                                                                <div
                                                                    class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 sm:ratio-4x3">
                                                                    <img class="media-cover image image uc-transition-scale-up uc-transition-opaque"
                                                                        src="/view/catalog/assets/dist/image/blog/<?php echo $value['image'] ?>"
                                                                        data-src="/view/catalog/assets/dist/image/blog/<?php echo $value['image'] ?>/view/catalog/assets/dist/image/blog/<?php echo $value['image'] ?>"
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
                                                                        href="blog-details.html"><?php echo $value['title'] ?>
                                                                    </a>
                                                                </h3>
                                                                <div
                                                                    class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                    <div>
                                                                        <div
                                                                            class="post-category hstack gap-narrow fw-semibold">
                                                                            <a class="fw-medium text-none text-primary dark:text-primary-400"
                                                                                href="blog-category.html"><?php print $value['name']; ?></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">

                                                                            <span> <?php


                                                                            echo $this->timeConvert($value['created_date_posts']);

                                                                            ?>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="blog-details.html" class="position-cover"></a>
                                                        </article>
                                                    </div>
                                                <?php } ?>

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
                                        <?php foreach ($HeaderPosts as $value): ?>
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
                                                                        data-src="/view/catalog/assets/dist/image/blog/<?php echo $value['image'] ?>"
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
                                                                                href="blog-category.html"><?php print $value['name'] ?>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sep d-none md:d-block">|</div>
                                                                    <div class="d-none md:d-block">
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span><?php


echo $this->timeConvert($value['created_date_posts']);

?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                                    <a class="text-none hover:text-primary duration-150"
                                                                        href="blog-details.html"><?php  // Orijinal içerik
                                                                            $content = $value['content'];

                                                                            // İlk 100 karakteri al
                                                                            print $excerpt = substr($content, 0, 100); ?></a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        <?php endforeach; ?>
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
        <div class="section-outer panel py-5 lg:py-8">
            <div class="container max-w-xl">
                <div class="section-inner">
                    <div class="row child-cols-12 lg:child-cols-6 g-4 lg:gx-6 xl:gy-8" data-uc-grid>
                        <div>
                            <div class="block-layout grid-layout vstack gap-3 lg:gap-4 panel overflow-hidden">
                                <div class="block-header panel">
                                    <h2 class="h5 lg:h4 fw-medium m-0 text-inherit hstack">
                                        <a class="text-none dark:text-white hover:text-primary duration-150"
                                            href="blog-category.html">En Çok Okunan</a>
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
                                            href="blog-category.html">En Çok Yorum Yapılan </a>
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
    <div id="latest-news" class="latest-news section panel overflow-hidden">
        <div class="section-outer panel py-5 lg:py-8">
            <div class="container max-w-xl">
                <div class="section-inner panel vstack gap-4">
                    <div class="section-header panel vstack items-center justify-center text-center gap-1">
                        <h2 class="h5 lg:h4 fw-medium m-0 text-inherit hstack">
                            <span>Blog</span>
                        </h2>
                    </div>
                    <div class="section-content">
                        <div
                            class="row child-cols-12 sm:child-cols-6 md:child-cols-4 lg:child-cols-3 g-2 gy-4 md:g-3 md:gy-5 xl:g-4 xl:gy-6">
                            <?php foreach ($posts as $value): ?>
                                <div>
                                    <article class="post type-post panel uc-transition-toggle vstack gap-1 lg:gap-2">
                                        <div class="post-media panel overflow-hidden">
                                            <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                    src="view/catalog/assets/images/common/img-fallback.png"
                                                    data-src="/view/catalog/assets/dist/image/blog/<?php echo $value['image'] ?>"
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
                                                            href="blog-category.html"><?php echo $value['name'] ?></a>
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
                                                    href="blog-details.html"><?php  // Orijinal içerik
                                                        $content = $value['content'];

                                                        // İlk 100 karakteri al
                                                        print $excerpt = substr($content, 0, 100); ?></a>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                            <?php endforeach; ?>
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