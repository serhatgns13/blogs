<?php require_once APP_ROOT . "/view/catalog/template/header.php"; ?>
<?php require_once APP_ROOT . "/view/catalog/template/navbars.php"; ?>

<!-- Wrapper start -->
<div id="wrapper" class="wrap overflow-hidden-x">
    <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
        <div class="container max-w-xl">
            <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                <li><a href="<?php echo APP_URL; ?>">Ana Sayfa</a></li>
                <li><i class="unicon-chevron-right opacity-50"></i></li>
                <li><a href="#">Blog</a></li>
                <li><a href="<?php echo APP_URL; ?>blog/<?php echo $BlogDetail[0]["category_slug"]; ?>">
                <li><i class="unicon-chevron-right opacity-50"></i><?php echo $BlogDetail[0]["category_name"]; ?></a>
                </li>
                <li><i class="unicon-chevron-right opacity-50"></i></li>
                <li><span class="opacity-50"> <?php echo $BlogDetail[0]["post_title"]; ?>
                    </span></li>
            </ul>
        </div>
    </div>

    <article class="post type-post single-post py-4 lg:py-6 xl:py-9">
        <div class="container max-w-xl">
            <div class="post-header">
                <div class="panel vstack gap-4 md:gap-6 xl:gap-8 text-center">
                    <div
                        class="panel vstack items-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto gap-2 md:gap-3">
                        <h1 class="h4 sm:h2 lg:h1 xl:display-6"><?php echo $BlogDetail[0]["post_title"]; ?>
                        </h1>
                        <ul class="post-share-icons nav-x gap-1 dark:text-white">
                            <li>
                                <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                    href="#"><i class="unicon-logo-facebook icon-1"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                    href="#"><i class="unicon-logo-x-filled icon-1"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                    href="#"><i class="unicon-logo-linkedin icon-1"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                    href="#"><i class="unicon-logo-pinterest icon-1"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                    href="#"><i class="unicon-email icon-1"></i></a>
                            </li>
                            <li>
                                <a class="btn btn-md p-0 border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                    href="#"><i class="unicon-link icon-1"></i></a>
                            </li>
                        </ul>
                    </div>
                    <figure class="featured-image m-0">
                        <figure
                            class="featured-image m-0 ratio ratio-2x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                src="<?php echo APP_URL; ?>view/catalog/assets/dist/image/blog/<?php echo $BlogDetail[0]["post_image"]; ?>"
                                data-src="<?php echo APP_URL; ?>view/catalog/assets/dist/image/blog/<?php echo $BlogDetail[0]["post_image"]; ?>"
                                alt="The Rise of Gourmet Street Food: Trends and Top Picks" data-uc-img="loading: lazy">
                        </figure>
                    </figure>
                </div>
            </div>
        </div>
        <div class="panel mt-4 lg:mt-6 xl:mt-9">
            <div class="container max-w-lg">


                <p class="mt-3">
                    <?php if (isset($BlogDetail[0]["post_content"])):
                        echo $BlogDetail[0]["post_content"];
                    else:
                        echo "veri yok";
                    endif; ?>
                </p>

                <div
                    class="post-footer panel vstack sm:hstack gap-3 justify-between justifybetween border-top py-4 mt-4 xl:py-9 xl:mt-9">
                    <ul class="nav-x gap-narrow text-primary">
                        <li><span class="text-black dark:text-white me-narrow">Tags:</span></li>
                        <li>
                            <a href="#" class="uc-link gap-0 dark:text-white">Food <span
                                    class="text-black dark:text-white">,</span></a>
                        </li>
                        <li>
                            <a href="#" class="uc-link gap-0 dark:text-white">Life Style <span
                                    class="text-black dark:text-white">,</span></a>
                        </li>
                        <li>
                            <a href="#" class="uc-link gap-0 dark:text-white">Tech <span
                                    class="text-black dark:text-white">,</span></a>
                        </li>
                        <li><a href="#" class="uc-link gap-0 dark:text-white">Travel</a></li>
                    </ul>
                    <ul class="post-share-icons nav-x gap-narrow">
                        <li class="me-1"><span class="text-black dark:text-white">Share:</span></li>
                        <li>
                            <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                href="#"><i class="unicon-logo-facebook icon-1"></i></a>
                        </li>
                        <li>
                            <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                href="#"><i class="unicon-logo-x-filled icon-1"></i></a>
                        </li>
                        <li>
                            <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                href="#"><i class="unicon-email icon-1"></i></a>
                        </li>
                        <li>
                            <a class="btn btn-md btn-outline-gray-100 p-0 w-32px lg:w-40px h-32px lg:h-40px text-dark dark:text-white dark:border-gray-600 hover:bg-primary hover:border-primary hover:text-white rounded-circle"
                                href="#"><i class="unicon-link icon-1"></i></a>
                        </li>
                    </ul>
                </div>


                <div class="post-related panel border-top pt-2 mt-8 xl:mt-1">
                    <h4 class="h5 xl:h4 mb-5 xl:mb-6">Bu konu ile ilgili:</h4>
                    <div class="row child-cols-6 md:child-cols-3 gx-2 gy-4 sm:gx-3 sm:gy-6">

                        <?php


                        foreach ($BlogDetail as $value):

                                ?>
                                <div>
                                    <article class="post type-post panel vstack gap-2">
                                        <figure
                                            class="featured-image m-0 ratio ratio-4x3 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                src="<?php echo APP_URL; ?>view/catalog/assets/dist/image/blog/<?php echo $value["post_image"]; ?>"
                                                data-src="<?php echo APP_URL; ?>view/catalog/assets/dist/image/blog/<?php echo $value["post_image"]; ?>"
                                                alt="The Art of Baking: From Classic Bread to Artisan Pastries"
                                                data-uc-img="loading: lazy">
                                            <a href="blog-details.html" class="position-cover"
                                                data-caption="The Art of Baking: From Classic Bread to Artisan Pastries"></a>
                                        </figure>
                                        <div class="post-header panel vstack gap-1">
                                            <h5 class="h6 md:h5 m-0">
                                                <a class="text-none"
                                                    href="blog-details.html"><?php echo $value["post_title"]; ?></a>
                                            </h5>
                                            <div class="post-date hstack gap-narrow fs-7 opacity-60">
                                                <span><?php echo $this->timeConvert($value['created_date_posts']); ?></span>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <?php
                        endforeach;

                        ?>


                    </div>
                </div>
                <div id="blog-comment" class="panel border-top pt-2 mt-8 xl:mt-9">
                    <h4 class="h5 xl:h4 mb-5 xl:mb-6">Comments (5)</h4>

                    <div class="spacer-half"></div>

                    <ol>
                        <li>
                            <div class="avatar">
                                <img src="<?php echo APP_URL; ?>view/catalog/assets/images/avatars/01.png" alt="">
                            </div>
                            <div class="comment-info">
                                <span class="c_name">Merrill Rayos</span>
                                <span class="c_date id-color">2 days ago</span>
                                <span class="c_reply"><a href="#">Reply</a></span>
                                <div class="clearfix"></div>
                            </div>

                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                            <ol>
                                <li>
                                    <div class="avatar">
                                        <img src="<?php echo APP_URL; ?>view/catalog/assets/images/avatars/02.png"
                                            alt="">
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">Jackqueline Sprang</span>
                                        <span class="c_date id-color">2 days ago</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo.</div>
                                </li>
                            </ol>
                        </li>

                        <li>
                            <div class="avatar">
                                <img src="<?php echo APP_URL; ?>view/catalog/assets/images/avatars/03.png" alt="">
                            </div>
                            <div class="comment-info">
                                <span class="c_name">Sanford Crowley</span>
                                <span class="c_date id-color">2 days ago</span>
                                <span class="c_reply"><a href="#">Reply</a></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                            <ol>
                                <li>
                                    <div class="avatar">
                                        <img src="<?php echo APP_URL; ?>view/catalog/assets/images/avatars/04.png"
                                            alt="">
                                    </div>
                                    <div class="comment-info">
                                        <span class="c_name">Lyndon Pocekay</span>
                                        <span class="c_date id-color">2 days ago</span>
                                        <span class="c_reply"><a href="#">Reply</a></span>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                        quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo.</div>
                                </li>
                            </ol>
                        </li>

                        <li>
                            <div class="avatar">
                                <img src="<?php echo APP_URL; ?>view/catalog/assets/images/avatars/05.png" alt="">
                            </div>
                            <div class="comment-info">
                                <span class="c_name">Aleen Crigger</span>
                                <span class="c_date id-color">2 days ago</span>
                                <span class="c_reply"><a href="#">Reply</a></span>

                                <div class="clearfix"></div>
                            </div>
                            <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                        </li>
                    </ol>

                    <div class="spacer-single"></div>

                    <div id="comment-form-wrapper" class="panel pt-2 mt-8 xl:mt-9">
                        <h4 class="h5 xl:h4 mb-5 xl:mb-6">Leave a Comment</h4>
                        <div class="comment_form_holder">
                            <form class="vstack gap-2">
                                <input
                                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                                    type="text" placeholder="First name" required>
                                <input
                                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                                    type="text" placeholder="Last name" required>
                                <input
                                    class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                                    type="email" placeholder="Your email" required>
                                <textarea
                                    class="form-control h-250px w-full fs-6 bg-white dark:bg-opacity-0 dark:text-white dark:border-gray-300 dark:border-opacity-30"
                                    type="text" placeholder="Your comment" required></textarea>
                                <button class="btn btn-primary btn-sm mt-1" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Newsletter -->
</div>

<!-- Wrapper end -->

<?php require_once APP_ROOT . "/view/catalog/template/footer.php"; ?>