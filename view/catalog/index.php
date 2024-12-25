<!-- Main Section Start Here -->
<?php require_once 'view/catalog/template/header.php'; ?>

<main class="main-section">
    <!--  search Popup start -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button class="close-btn border-none"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <!-- Search Popup End -->

    <div class="header-style-01">
        <!-- top bar area start -->
        <div class="topbar-area style-01">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="top-news-ticker">
                            <div class="icon">
                                <i class="fas fa-share"></i>
                            </div>
                            <h4 class="title style-01">Trending</h4>
                            <div class='top-news-ticker-runner style-01'>
                                <a href="#">Magcal Fisher Basical Navikea Area Follower Power To Conjure </a>
                                <a href="#">Magcal Fisher Basical Navikea Area Follower Power To Conjure</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="topbar-inner style-01">
                            <div class="right-contnet">
                                <div class="date-item">
                                    <p class="style-01"><i class="fas fa-calendar-alt"></i>
                                        <?php echo $this->formatDateInTurkish("Y") ?></p>
                                </div>
                                <div class="social-wrapper">
                                    <span class="style-01">
                                        BİZİ TAKİP EDİN :
                                    </span>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar areda end -->

        <!-- Search bar Section Start Here -->
        <div class="searchbar-area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search-wrapper">
                            <div class="content">
                                <div class="logo-wrapper">
                                    <img src="assets/img/logo/logo-black.svg" alt="">
                                </div>
                            </div>
                            <div class="subscribe-form">
                                <div class="form-group">
                                    <div class="contact-select">
                                        <select class="form-select">
                                            <option value="1">News Categories</option>
                                            <option value="2"> Business & Finance</option>
                                            <option value="3">Computers & IT</option>
                                            <option value="4">Economics</option>
                                        </select>
                                    </div>
                                    <span class="line"></span>
                                    <input type="text" name="fname" placeholder="Search ..." class="form-control"
                                        required="" aria-required="true">
                                    <div class="search-icon">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once "template/navbar.php"; ?>


    </div>

    <!-- BR KALKACAK ŞİMDİLİK BU ŞEKİLDE KALACAK-->
    <br>

    <section class="news-section-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-grid-item-01 margin-bottom-30">
                        <div class="thumb">
                            <a href="business-02.html"><img src="assets/img/section-img/gallery/instra-mini-03.png"
                                    alt=""></a>
                        </div>
                        <span class="tag">Products</span>
                        <div class="content">
                            <a href="business-02.html">
                                <h4 class="title">Animal Nation Are Strugling To Save Their Wildlife</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-grid-item-01 margin-bottom-30">
                        <div class="thumb">
                            <a href="business-02.html"><img src="assets/img/section-img/gallery/instra-mini-01.png"
                                    alt=""></a>
                        </div>
                        <span class="tag style-01">Politics</span>
                        <div class="content">
                            <a href="business-02.html">
                                <h4 class="title">If you went round the world which places could</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-grid-item-01 margin-bottom-30">
                        <div class="thumb">
                            <a href="business-02.html"><img src="assets/img/section-img/gallery/instra-mini-02.png"
                                    alt=""></a>
                        </div>
                        <span class="tag style-02">Health</span>
                        <div class="content">
                            <a href="business-02.html">
                                <h4 class="title">How childhood viral infections may year 2021</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section End Here -->

    <!-- Call to Action Section Start Here -->
    <section class="call-to-section-area bg-image"
        style="background-image: url(assets/img/section-img/cta/cta-bg.png);">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-box-item">
                        <div class="thumbnail">
                            <a href="business-02.html"><img src="view/catalog/assets/img/section-img/cta/cta-01.png"
                                    alt=""></a>
                        </div>
                        <div class="content">
                            <span class="tag-02">LIFE STYLE</span>
                            <a href="business-02.html">
                                <h4 class="title">Ducati has all the cards to win The Best Ways to Start</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-box-item">
                        <div class="thumbnail">
                            <a href="business-02.html"><img src="view/catalog/assets/img/section-img/cta/cta-02.png"
                                    alt=""></a>
                        </div>
                        <div class="content">
                            <span class="tag-02">FASHION</span>
                            <a href="business-02.html">
                                <h4 class="title">Moon They Landing How are Main Close If you went</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Section End Here -->

    <!-- what's New Section Start Here -->
    <section class="whats-news-section">
        <div class="container custom-container">
            <div class="theme-heading-title">
                <div class="title">What’s New</div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="news-slider-wrap">
                        <div class="news-slider-one">
                            <div class="image-box-item-two style-01 bg-image"
                                style="background-image: url(view/catalog/assets/img/section-img/news/whats-new.png);">
                                <div class="content">
                                    <span class="tag-02 style-01">LIFE STYLE</span>
                                    <h4 class="title"><a href="business-02.html">Sanctions against Russia benefit
                                            Canadian farmers and commodity producers</a></h4>
                                    <ul class="post-meta">
                                        <li class="style-01">
                                            <a href="#">By <span class="white">Admin</span></a>
                                        </li>
                                        <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date style-01 published updated"><i
                                                            class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image-box-item-two style-01 bg-image"
                                style="background-image: url(view/catalog/assets/img/section-img/news/whats-new.png);">
                                <div class="content">
                                    <span class="tag-02 style-01">LIFE STYLE</span>
                                    <h4 class="title"><a href="business-02.html">Sanctions against Russia benefit
                                            Canadian farmers and commodity producers</a></h4>
                                    <ul class="post-meta">
                                        <li class="style-01">
                                            <a href="#">By <span class="white">Admin</span></a>
                                        </li>
                                        <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date style-01 published updated"><i
                                                            class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image-box-item-two style-01 bg-image"
                                style="background-image: url(view/catalog/assets/img/section-img/news/whats-new.png);">
                                <div class="content">
                                    <span class="tag-02 style-01">LIFE STYLE</span>
                                    <h4 class="title"><a href="business-02.html">Sanctions against Russia benefit
                                            Canadian farmers and commodity producers</a></h4>
                                    <ul class="post-meta">
                                        <li class="style-01">
                                            <a href="#">By <span class="white">Admin</span></a>
                                        </li>
                                        <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date style-01 published updated"><i
                                                            class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-grid-item-01 margin-bottom-30">
                                <div class="thumb">
                                    <a href="business-02.html"><img
                                            src="view/catalog/assets/img/section-img/news/news-01.png" alt=""></a>
                                </div>
                                <span class="tag">Life Style</span>
                                <div class="content">
                                    <a href="business-02.html">
                                        <h4 class="title">Biden touts ‘first tranche’ of sanctions against Russia as
                                        </h4>
                                    </a>
                                    <ul class="post-meta">
                                        <li>
                                            <a href="#">By <span>Admin</span></a>
                                        </li>
                                        <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date published updated"><i
                                                            class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-grid-item-01 margin-bottom-30">
                                <div class="thumb">
                                    <a href="business-02.html"><img
                                            src="view/catalog/assets/img/section-img/news/news-02.png" alt=""></a>
                                </div>
                                <span class="tag style-01">Food</span>
                                <div class="content">
                                    <a href="business-02.html">
                                        <h4 class="title">Ukraine’s decision to remove nuclear arsenal mistake</h4>
                                    </a>
                                    <ul class="post-meta">
                                        <li>
                                            <a href="#">By <span>Admin</span></a>
                                        </li>
                                        <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date published updated"><i
                                                            class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-grid-item-01 margin-bottom-30">
                                <div class="thumb">
                                    <a href="business-02.html"><img
                                            src="view/catalog/assets/img/section-img/news/news-03.png" alt=""></a>
                                </div>
                                <span class="tag style-02">Fashion</span>
                                <div class="content">
                                    <a href="business-02.html">
                                        <h4 class="title">Why are so many Canadian kids unvaccinated COVID-19</h4>
                                    </a>
                                    <ul class="post-meta">
                                        <li>
                                            <a href="#">By <span>Admin</span></a>
                                        </li>
                                        <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date published updated"><i
                                                            class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-grid-item-01 margin-bottom-30">
                                <div class="thumb">
                                    <a href="business-02.html"><img
                                            src="view/catalog/assets/img/section-img/news/news-04.png" alt=""></a>
                                </div>
                                <span class="tag">TECHNOLOGY</span>
                                <div class="content">
                                    <a href="business-02.html">
                                        <h4 class="title">Thursday’s analyst upgrades and downgrade</h4>
                                    </a>
                                    <ul class="post-meta">
                                        <li>
                                            <a href="#">By <span>Admin</span></a>
                                        </li>
                                        <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date published updated"><i
                                                            class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget widget_social">
                            <h3 class="widget-headline">STAY CONNECTED<span></span></h3>
                            <ul class="contact_info_list">
                                <li class="single-info-item">
                                    <div class="icon">
                                        <i class="fab fa-facebook-square"></i>
                                    </div>
                                    <div class="details">
                                        <p><span>1250M +</span>Followers</p>
                                    </div>
                                </li>
                                <li class="single-info-item style-01">
                                    <div class="icon">
                                        <i class="fab fa-twitter-square"></i>
                                    </div>
                                    <div class="details">
                                        <p><span>1250M +</span>Followers</p>
                                    </div>
                                </li>
                                <li class="single-info-item style-02">
                                    <div class="icon">
                                        <i class="fab fa-youtube-square"></i>
                                    </div>
                                    <div class="details">
                                        <p><span>1250M +</span>Followers</p>
                                    </div>
                                </li>
                                <li class="single-info-item style-03">
                                    <div class="icon">
                                        <i class="fab fa-linkedin"></i>
                                    </div>
                                    <div class="details">
                                        <p><span>1250M +</span>Followers</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_newsim_category">
                            <h3 class="widget-headline">HOT CATEGORIES<span></span></h3>
                            <ul>
                                <li><a href="#">THERAPY<span>05</span></a></li>
                                <li><a href="#">BEAUTY ITEMS<span>09</span></a></li>
                                <li><a href="#">BODY SLIMING<span>07</span></a></li>
                                <li><a href="#">FASHION FITNESS<span>10</span></a></li>
                            </ul>
                        </div>

                        <div class="widget widget_recent_posts">
                            <h4 class="widget-headline">RECENT POST ON NEWS IM<span></span></h4>
                            <ul class="theme-recent-post-wrap">
                                <li class="theme-recent-post-item">
                                    <div class="thumb">
                                        <a href="business-02.html"><img
                                                src="view/catalog/assets/img/section-img/recent/recent-01.png"
                                                alt="recent post"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single.html">Traditional design save us in
                                                the</a></h4>
                                        <span class="time"><i class="fas fa-calendar-alt"></i>JULY 1, 2022</span>
                                    </div>
                                </li>
                                <li class="theme-recent-post-item">
                                    <div class="thumb">
                                        <a href="business-02.html"><img
                                                src="view/catalog/assets/img/section-img/recent/recent-02.png"
                                                alt="recent post"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single.html">Freehand Template built for the
                                                whole</a></h4>
                                        <span class="time"><i class="fas fa-calendar-alt"></i>JULY 1, 2022</span>
                                    </div>
                                </li>
                                <li class="theme-recent-post-item">
                                    <div class="thumb">
                                        <a href="business-02.html"><img
                                                src="view/catalog/assets/img/section-img/recent/recent-03.png"
                                                alt="recent post"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single.html">Security isn’t just a logy problem
                                                it’s</a></h4>
                                        <span class="time"><i class="fas fa-calendar-alt"></i>JULY 1, 2022</span>
                                    </div>
                                </li>
                                <li class="theme-recent-post-item">
                                    <div class="thumb">
                                        <a href="business-02.html"><img
                                                src="view/catalog/assets/img/section-img/recent/recent-04.png"
                                                alt="recent post"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single.html">RBC profit climbs 6% on gains in
                                                retail</a></h4>
                                        <span class="time"><i class="fas fa-calendar-alt"></i>JULY 1, 2022</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- what's New Section End Here -->

    <!-- Call to Action Section Start Here -->
    <div class="call-to-action-02">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="view/catalog/assets/img/section-img/cta/cta-bg-02.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action Section End Here -->

    <!-- Popular Section Start Here -->
    <section class="popular-news-section">
        <div class="container custom-container">
            <div class="theme-heading-title desktop-center">
                <div class="title">Popular News</div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="image-box-item-three">
                        <div class="thumbnail">
                            <a href="business-02.html"><img
                                    src="view/catalog/assets/img/section-img/news/popular-02.png" alt=""></a>
                        </div>
                        <div class="content">
                            <span class="tag-02">business</span>
                            <a href="business-02.html">
                                <h4 class="title">Winterized motorho me turns family</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-box-item-three">
                        <div class="thumbnail">
                            <a href="business-02.html"><img
                                    src="view/catalog/assets/img/section-img/news/popular-03.png" alt=""></a>
                        </div>
                        <div class="content">
                            <span class="tag-02">food</span>
                            <a href="business-02.html">
                                <h4 class="title">Sarah Polley hopes her Jian qusu</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-box-item-three">
                        <div class="thumbnail">
                            <a href="business-02.html"><img
                                    src="view/catalog/assets/img/section-img/news/popular-03.png" alt=""></a>
                        </div>
                        <div class="content">
                            <span class="tag-02">fashion</span>
                            <a href="business-02.html">
                                <h4 class="title">In Toronto, February market starts</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-box-item-two bg-image"
                        style="background-image: url(view/catalog/assets/img/section-img/news/popular-01.png);">
                        <div class="content style-01">
                            <span class="tag-02 style-01">LIFE STYLE</span>
                            <h4 class="title style-01"><a href="business-02.html">How to keep your tattoos looking
                                    good</a></h4>
                            <ul class="post-meta">
                                <li class="style-01">
                                    <a href="#">By <span class="white">Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date style-01 published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-box-item-three">
                        <div class="thumbnail">
                            <a href="business-02.html"><img
                                    src="view/catalog/assets/img/section-img/news/popular-05.png" alt=""></a>
                        </div>
                        <div class="content">
                            <span class="tag-02">technology</span>
                            <a href="business-02.html">
                                <h4 class="title">Sub penthouse at for One Bloor goes</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-box-item-three">
                        <div class="thumbnail">
                            <a href="business-02.html"><img
                                    src="view/catalog/assets/img/section-img/news/popular-06.png" alt=""></a>
                        </div>
                        <div class="content">
                            <span class="tag-02">life Style</span>
                            <a href="business-02.html">
                                <h4 class="title">Cava producers are looking good</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-box-item-three">
                        <div class="thumbnail">
                            <a href="business-02.html"><img
                                    src="view/catalog/assets/img/section-img/news/popular-07.png" alt=""></a>
                        </div>
                        <div class="content">
                            <span class="tag-02">health</span>
                            <a href="business-02.html">
                                <h4 class="title">Mortgage Rundown The countdown</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Section End Here -->

    <!-- Life Style Section Start Here -->
    <section class="life-style-section">
        <div class="container custom-container">
            <div class="theme-heading-title desktop-center">
                <div class="title">Newsim Life Style</div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="image-box-item-two bg-image"
                        style="background-image: url(view/catalog/assets/img/section-img/life-style/life-style-02.png);">
                        <div class="content">
                            <span class="tag-02 style-01">LIFE STYLE</span>
                            <h4 class="title"><a href="business-02.html">Black joy is at the centre of three must-read
                                    Canadian</a></h4>
                            <ul class="post-meta">
                                <li class="style-01">
                                    <a href="#">By <span class="white">Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="image-box-item-two bg-image"
                        style="background-image: url(view/catalog/assets/img/section-img/life-style/life-style-01.png);">
                        <div class="content">
                            <span class="tag-02 style-01">LIFE STYLE</span>
                            <h4 class="title"><a href="business-02.html">Our new national disgrace: haras sing TV
                                    journalists</a></h4>
                            <ul class="post-meta">
                                <li class="style-01">
                                    <a href="#">By <span class="white">Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-grid-item-01 style-01 margin-bottom-30">
                        <div class="thumb">
                            <a href="business-02.html"><img src="view/catalog/assets/img/section-img/news/news-05.png"
                                    alt=""></a>
                        </div>
                        <span class="tag">fashion</span>
                        <div class="content">
                            <a href="business-02.html">
                                <h4 class="title">Wildfires getting worse global governments</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-grid-item-01 style-01 margin-bottom-30">
                        <div class="thumb">
                            <a href="business-02.html"><img src="view/catalog/assets/img/section-img/news/news-06.png"
                                    alt=""></a>
                        </div>
                        <span class="tag style-01">fashion</span>
                        <div class="content">
                            <a href="business-02.html">
                                <h4 class="title">Dakota Access pipeline suffers U.S. Supreme Court</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-grid-item-01 style-01 margin-bottom-30">
                        <div class="thumb">
                            <a href="business-02.html"><img src="view/catalog/assets/img/section-img/news/news-07.png"
                                    alt=""></a>
                        </div>
                        <span class="tag style-02">fashion</span>
                        <div class="content">
                            <a href="business-02.html">
                                <h4 class="title">Largest offshore wind energy auction underway</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Life Style Section End Here -->

    <!-- Latest News Section Start Here -->
    <section class="latest-news-section bg-image">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="theme-heading-title">
                        <div class="title">Latest News</div>
                    </div>
                    <div class="image-box-item-four">
                        <div class="thumbnail">
                            <a href="business-02.html"></a><img
                                src="view/catalog/assets/img/section-img/news/news-08.png" alt="">
                        </div>
                        <div class="content">
                            <span class="tag-02">LIFE STYLE</span>
                            <a href="business-02.html">
                                <h4 class="title">Lexi Daken’s family 1 year later and how the N.B. teen</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                            <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
                            <div class="btn-wrap">
                                <a href="service-single.html" class="boxed-btn news-btn">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="image-box-item-four">
                        <div class="thumbnail">
                            <a href="business-02.html"><img src="view/catalog/assets/img/section-img/news/news-09.png"
                                    alt=""></a>
                        </div>
                        <div class="content">
                            <span class="tag-02">LIFE STYLE</span>
                            <a href="business-02.html">
                                <h4 class="title">Ontario COVID numbers: 1 people in hospital, 302 in</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                            <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
                            <div class="btn-wrap">
                                <a href="service-single.html" class="boxed-btn news-btn">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="image-box-item-four">
                        <div class="thumbnail">
                            <a href="business-02.html"></a><img
                                src="view/catalog/assets/img/section-img/news/news-10.png" alt="">
                        </div>
                        <div class="content">
                            <span class="tag-02">LIFE STYLE</span>
                            <a href="business-02.html">
                                <h4 class="title">Global stocks plummet after Russia invades Ucranie</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                            <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
                            <div class="btn-wrap">
                                <a href="service-single.html" class="boxed-btn news-btn">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="image-box-item-four">
                        <div class="thumbnail">
                            <a href="business-02.html"><img src="view/catalog/assets/img/section-img/news/news-11.png"
                                    alt=""></a>
                        </div>
                        <div class="content">
                            <span class="tag-02">LIFE STYLE</span>
                            <a href="business-02.html">
                                <h4 class="title">Queen Elizabeth postpones more meetings with qeen</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                            <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
                            <div class="btn-wrap">
                                <a href="service-single.html" class="boxed-btn news-btn">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="image-box-item-four">
                        <div class="thumbnail">
                            <a href="business-02.html"></a><img
                                src="view/catalog/assets/img/section-img/news/news-08.png" alt="">
                        </div>
                        <div class="content">
                            <span class="tag-02">LIFE STYLE</span>
                            <a href="business-02.html">
                                <h4 class="title">Lexi Daken’s family 1 year later and how the N.B. teen</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                            <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
                            <div class="btn-wrap">
                                <a href="service-single.html" class="boxed-btn news-btn">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="image-box-item-four">
                        <div class="thumbnail">
                            <a href="business-02.html"></a><img
                                src="view/catalog/assets/img/section-img/news/news-10.png" alt="">
                        </div>
                        <div class="content">
                            <span class="tag-02">LIFE STYLE</span>
                            <a href="business-02.html">
                                <h4 class="title">Global stocks plummet after Russia invades Ucranie</h4>
                            </a>
                            <ul class="post-meta">
                                <li>
                                    <a href="#">By <span>Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                            <p>Anthony Rotolo, a professor from Syracuse University is offering the. Ahen an unknown</p>
                            <div class="btn-wrap">
                                <a href="service-single.html" class="boxed-btn news-btn">
                                    Read More
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="top-sticky-wrapper">
                        <div class="theme-heading-title">
                            <div class="title">Popular News</div>
                        </div>
                        <div class="image-box-item-three">
                            <div class="thumbnail style-01">
                                <a href="business-02.html"><img
                                        src="view/catalog/assets/img/section-img/recent/recent-05.png" alt=""></a>
                            </div>
                            <div class="content ml-xl-4 ml-sm-6">
                                <span class="tag-02">business</span>
                                <a href="business-02.html">
                                    <h4 class="title">Winterized motorho me turns family</h4>
                                </a>
                                <ul class="post-meta">
                                    <li>
                                        <a href="#">By <span>Admin</span></a>
                                    </li>
                                    <li>
                                        <span class="posted-on">
                                            <a href="#" rel="bookmark">
                                                <span class="entry-date published updated"><i
                                                        class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="image-box-item-three">
                            <div class="thumbnail style-01">
                                <a href="business-02.html"><img
                                        src="view/catalog/assets/img/section-img/recent/recent-06.png" alt=""></a>
                            </div>
                            <div class="content ml-xl-4 ml-sm-6">
                                <span class="tag-02">food</span>
                                <a href="business-02.html">
                                    <h4 class="title">Sarah Polley hopes her Jian qusu</h4>
                                </a>
                                <ul class="post-meta">
                                    <li>
                                        <a href="#">By <span>Admin</span></a>
                                    </li>
                                    <li>
                                        <span class="posted-on">
                                            <a href="#" rel="bookmark">
                                                <span class="entry-date published updated"><i
                                                        class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="image-box-item-three">
                            <div class="thumbnail style-01">
                                <a href="business-02.html"><img
                                        src="view/catalog/assets/img/section-img/recent/recent-07.png" alt=""></a>
                            </div>
                            <div class="content ml-xl-4 ml-sm-6">
                                <span class="tag-02">fashion</span>
                                <a href="business-02.html">
                                    <h4 class="title">In Toronto, February markets</h4>
                                </a>
                                <ul class="post-meta">
                                    <li>
                                        <a href="#">By <span>Admin</span></a>
                                    </li>
                                    <li>
                                        <span class="posted-on">
                                            <a href="#" rel="bookmark">
                                                <span class="entry-date published updated"><i
                                                        class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="advertise-banner">
                            <a href="business-02.html"><img
                                    src="view/catalog/assets/img/section-img/advertise/advertise.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest News Section End Here -->

    <!-- Newslatter Section Start Here -->
    <div class="news-latter-section bg-image"
        style="background-image: url(view/catalog/assets/img/section-img/cta/cta-bg.png);">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscibe-wrapper">
                        <div class="content">
                            <div class="title">Sign Up for Our Newsletter <br> For Daily Update</div>
                        </div>
                        <div class="subscribe-form">
                            <div class="form-group">
                                <input type="text" name="fname" placeholder="Enter Email" class="form-control"
                                    required="" aria-required="true">
                            </div>
                            <div class="btn-wrap">
                                <a href="service-single.html" class="boxed-btn subscribe-btn">subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newslatter Section End Here -->
</main>

<?php require_once 'view/catalog/template/footer.php'; ?>