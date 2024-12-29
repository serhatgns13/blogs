<?php require_once APP_ROOT . "/view/catalog/template/header.php"; ?>
<?php require_once APP_ROOT . "/view/catalog/template/navbars.php"; ?>

<div id="wrapper" class="wrap overflow-hidden-x">
    <div class="breadcrumbs panel z-1 py-2 bg-gray-25 dark:bg-gray-100 dark:bg-opacity-5 dark:text-white">
        <div class="container max-w-xl">
            <ul class="breadcrumb nav-x justify-center gap-1 fs-7 sm:fs-6 m-0">
                <li><a href="<?php echo APP_ROOT; ?>">Ana Sayfa</a></li>
                <li><i class="unicon-chevron-right opacity-50"></i></li>
                <li><a href="blog.html">Blogs</a></li>
                <li><i class="unicon-chevron-right opacity-50"></i></li>
                <li><span class="opacity-50"><?php echo $SubCategoryBlog[0]["category_name"]; ?></span></li>
            </ul>
        </div>
    </div>


    <div class="section py-3 sm:py-6 lg:py-9">
        <div class="container max-w-xl">
            <div class="panel vstack gap-3 sm:gap-6 lg:gap-9">
                <header class="page-header panel vstack text-center">
                    <h1 class="h3 lg:h1">Kategori: <?php echo $SubCategoryBlog[0]["category_name"]; ?></h1>
                    <span class="m-0 opacity-60">Showed 15 posts out of 20 total under <br class="d-block lg:d-none">
                        "Strategy" category.</span>
                </header>
                <div class="row g-4 xl:g-8">
                    <div class="col">
                        <div class="panel text-center">
                            <div
                                class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 col-match gy-4 xl:gy-6 gx-2 sm:gx-4">

                                <?php
                                
                                    foreach ($SubCategoryBlog as $key => $value):
                                        ?>





                                        <div>
                                            <article class="post type-post panel vstack gap-2">
                                                <div class="post-image panel overflow-hidden">
                                                    <figure
                                                        class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque"
                                                            src="<?php echo APP_URL; ?>view/catalog/assets/dist/image/blog/"
                                                            data-src="<?php echo APP_URL; ?>view/catalog/assets/images/demo-three/posts/img-02.jpg"
                                                            alt="Tech Innovations Reshaping the Retail Landscape: AI Payments"
                                                            data-uc-img="loading: lazy">
                                                        <a href="blog-details.html" class="position-cover"
                                                            data-caption="Tech Innovations Reshaping the Retail Landscape: AI Payments"></a>
                                                    </figure>
                                                    <div
                                                        class="post-category hstack gap-narrow position-absolute top-0 start-0 m-1 fs-7 fw-bold h-24px px-1 rounded-1 shadow-xs bg-white text-primary">
                                                        <a class="text-none" href="blog-category.html">Startups</a>
                                                    </div>
                                                    <div
                                                        class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50">
                                                    </div>
                                                    <span
                                                        class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                                        <i class="icon-narrow unicon-play-filled-alt"></i>
                                                    </span>
                                                </div>
                                                <div class="post-header panel vstack gap-1 lg:gap-2">
                                                    <h3 class="post-title h6 sm:h5 xl:h4 m-0 text-truncate-2 m-0">
                                                        <a class="text-none" href="blog-details.html"><?= $value["title"]; ?></a>
                                                    </h3>
                                                    <div>
                                                        <div
                                                            class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                            <div class="meta">
                                                                <div class="hstack gap-2">
                                                                    <div>
                                                                        <div class="post-author hstack gap-1">
                                                                            <a href="page-author.html"
                                                                                data-uc-tooltip="Jason Blake"><img
                                                                                    src="<?php echo APP_URL; ?>view/catalog/assets/images/avatars/05.png"
                                                                                    alt="Jason Blake"
                                                                                    class="w-24px h-24px rounded-circle"></a>
                                                                            <a href="page-author.html"
                                                                                class="text-black dark:text-white text-none fw-bold">Jason
                                                                                Blake</a>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="post-date hstack gap-narrow">
                                                                            <span>Mar 8, 2024</span>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#post_comment"
                                                                            class="post-comments text-none hstack gap-narrow">
                                                                            <i class="icon-narrow unicon-chat"></i>
                                                                            <span>100</span>
                                                                        </a>
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
                                    <?php endforeach; ?>

                            </div>
                            <div
                                class="nav-pagination pt-3 mt-6 lg:mt-9 border-top border-gray-100 dark:border-gray-800">
                                <ul class="nav-x uc-pagination hstack gap-1 justify-center ft-secondary"
                                    data-uc-margin="">
                                    <li>
                                        <a href="#"><span class="icon icon-1 unicon-chevron-left"></span></a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="uc-active">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="uc-disabled"><span>…</span></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#">9</a></li>
                                    <li>
                                        <a href="#"><span class="icon icon-1 unicon-chevron-right"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
</div>

<?php require_once APP_ROOT . "/view/catalog/template/footer.php"; ?>