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
                            <h4 class="title style-01">DUYURU</h4>
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
                                    <p class="style-01"><i class="fas fa-calendar-alt"></i> <?php echo $this->formatDateInTurkish("Y");?></p>
                                </div>
                                <div class="social-wrapper">
                                    <span class="style-01"> BİZİ TAKİP EDİN :</span>
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
                                    <img src="view/catalog/assets/dist/img/logo/<?php echo $SettingsValue["set_images"]; ?>"
                                        alt="<?php echo $SettingsValue["set_title"]; ?>" />

                                </div>
                            </div>
                            <div class="subscribe-form">
                                <div class="form-group">
                                    <div class="contact-select">
                                        <select class="form-select">
                                            <?php foreach ($CategoryValue as $Category): ?>
                                                <option value="4"><?php echo $Category["name"]; ?></option>
                                            <?php endforeach; ?>

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
        <!-- Search bar Section End Here -->

        <!-- main  navbar area start -->
        <nav class="navbar navbar-area navbar-expand-lg navigation-style-02 m-menu">
            <div class="container custom-container">
                <div class="responsive-menu">
                    <div class="logo-wrapper d-lg-none d-md-block">
                        <a href="index.html" class="logo">
                            <img src="view/catalog/assets/dist/img/logo/<?php echo $SettingsValue["set_images"]; ?>"
                                alt="<?php echo $SettingsValue["set_title"]; ?>" />
                        </a>
                    </div>
                    <button class="navbar-toggler navbar-bs-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#themeim_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
           
                <div class="collapse navbar-collapse container" id="themeim_main_menu">
                    <ul class="navbar-nav">

                        <li class="current-menu-item"><a href="<?php echo $_SERVER['REQUEST_URI']; ?>">Ana Sayfa</a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#">Kategoriler</a>
                            <ul class="sub-menu">
                                <?php foreach ($CategoryValue as $Category): ?>
                                    <li><a href="index.html"><?php echo $Category["name"]; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>


                        <li><a href="contact.html">Blog</a></li>




                    </ul>
                </div>
               
            </div>
        </nav>
        <!-- main navbar area end -->

        <!-- Cart area start Here -->
        <div class="cart-menu-overlay"></div>
        <div class="cart-menu-wrap">
            <div class="content-wrapper">
                <div class="cart-header">
                    <div class="content">
                        <h6 class="title">Cart</h6>
                    </div>
                    <div class="close-btn-03">
                        <a href="javascript:void(0)">
                            <i class="flaticon-close"></i>
                        </a>
                    </div>
                </div>
                <div class="cart-single-item">
                    <div class="thumbnail">
                        <img src="assets/img/section-img/products/cart-02.png" alt="">
                        <i class="flaticon-close remove-cart"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Smart Air Bag</h6>
                        <p class="price">$225.00</p>
                    </div>
                </div>
                <div class="cart-single-item">
                    <div class="thumbnail">
                        <img src="assets/img/section-img/products/cart-03.png" alt="">
                        <i class="flaticon-close remove-cart"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Travel Suitcase</h6>
                        <p class="price">$375.00</p>
                    </div>
                </div>
                <div class="cart-single-item">
                    <div class="thumbnail">
                        <img src="assets/img/section-img/products/cart-04.png" alt="">
                        <i class="flaticon-close remove-cart"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Travel Slipping</h6>
                        <p class="price">$332.00</p>
                    </div>
                </div>
                <div class="cart-footer">
                    <div class="content">
                        <h4 class="subtotal">Subtotal</h4>
                        <p class="price">$932.00</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart area End Here -->

        <!-- Banner Area Start-->
        <section class="banner-area home-03 header-bg" style="background-image:url(assets/img/header/header-bg.png);">
            <div class="container custom-container">
                <div class="banner-wrap">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="banner-inner">
                                <div class="banner-slider-wrap">
                                    <div class="banner-slider">
                                        <div class="blog-grid-item-02 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="assets/img/header/vr.png" alt="">
                                            </div>
                                            <span class="tag">tech</span>
                                            <div class="content">
                                                <a href="business-02.html">
                                                    <h4 class="title">Virtual Reality or Artificial Intelligence <br>
                                                        Tech Rocket Lab mission fails shortly</h4>
                                                </a>
                                                <ul class="post-meta">
                                                    <li>
                                                        <a href="#">By <span>Admin</span></a>
                                                    </li>
                                                    <li>
                                                        <span class="posted-on">
                                                            <a href="#" rel="bookmark">
                                                                <span class="entry-date published updated"><i
                                                                        class="fas fa-calendar-alt"></i>JAN 14,
                                                                    2022</span>
                                                            </a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="blog-grid-item-02 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="assets/img/header/vr.png" alt="">
                                            </div>
                                            <span class="tag">tech</span>
                                            <div class="content">
                                                <a href="business-02.html">
                                                    <h4 class="title">Virtual Reality or Artificial Intelligence <br>
                                                        Tech Rocket Lab mission fails shortly</h4>
                                                </a>
                                                <ul class="post-meta">
                                                    <li>
                                                        <a href="#">By <span>Admin</span></a>
                                                    </li>
                                                    <li>
                                                        <span class="posted-on">
                                                            <a href="#" rel="bookmark">
                                                                <span class="entry-date published updated"><i
                                                                        class="fas fa-calendar-alt"></i>JAN 14,
                                                                    2022</span>
                                                            </a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="blog-grid-item-02 margin-bottom-30">
                                            <div class="thumb">
                                                <img src="assets/img/header/vr.png" alt="">
                                            </div>
                                            <span class="tag">tech</span>
                                            <div class="content">
                                                <a href="business-02.html">
                                                    <h4 class="title">Virtual Reality or Artificial Intelligence <br>
                                                        Tech Rocket Lab mission fails shortly</h4>
                                                </a>
                                                <ul class="post-meta">
                                                    <li>
                                                        <a href="#">By <span>Admin</span></a>
                                                    </li>
                                                    <li>
                                                        <span class="posted-on">
                                                            <a href="#" rel="bookmark">
                                                                <span class="entry-date published updated"><i
                                                                        class="fas fa-calendar-alt"></i>JAN 14,
                                                                    2022</span>
                                                            </a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="header-image-box-item-02">
                                <div class="thumbnail style-01">
                                    <img src="assets/img/section-img/recent/recent-14.png" alt="">
                                </div>
                                <div class="content">
                                    <span class="tag-02 style-02">tech</span>
                                    <h4 class="title style-02"><a href="business-02.html">Mortgage Rundow <br> The
                                            countdown</a></h4>
                                    <ul class="post-meta">
                                        <li class="style-02">
                                            <a href="#">By <span>Admin</span></a>
                                        </li>
                                        <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date style-02 published updated"><i
                                                            class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-image-box-item-02">
                                <div class="thumbnail style-01">
                                    <img src="assets/img/section-img/recent/recent-15.png" alt="">
                                </div>
                                <div class="content">
                                    <span class="tag-02 style-02">tech</span>
                                    <h4 class="title"><a href="business-02.html">A Clean Desktop is <br> the First
                                            Step</a></h4>
                                    <ul class="post-meta">
                                        <li class="style-02">
                                            <a href="#">By <span>Admin</span></a>
                                        </li>
                                        <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date style-02 published updated"><i
                                                            class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-image-box-item-02">
                                <div class="thumbnail style-01">
                                    <img src="assets/img/section-img/recent/recent-16.png" alt="">
                                </div>
                                <div class="content">
                                    <span class="tag-02 style-02">tech</span>
                                    <h4 class="title"><a href="business-02.html">The Impacts of Offi <br> ce Design on
                                            Pro</a></h4>
                                    <ul class="post-meta">
                                        <li class="style-02">
                                            <a href="#">By <span>Admin</span></a>
                                        </li>
                                        <li>
                                            <span class="posted-on">
                                                <a href="#" rel="bookmark">
                                                    <span class="entry-date style-02 published updated"><i
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
            </div>
        </section>
        <!-- Banner Area End -->

        <!-- navbar area end -->
    </div>

    <section class="trending-news-section">
        <div class="container custom-container">
            <div class="theme-heading-title desktop-center">
                <div class="title">Trending News</div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="image-box-item-five style-02 bg-image-03"
                        style="background-image: url(assets/img/section-img/news/trending-news-01.png);">
                        <div class="content style-01">
                            <h4 class="title"><a href="business-02.html">Disney World Just Toyed With Legions of
                                    Superfans</a></h4>
                            <ul class="post-meta">
                                <li class="white">
                                    <a href="#">By <span class="style-01">Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date white published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="image-box-item-five style-02 bg-image-03"
                        style="background-image: url(assets/img/section-img/news/trending-news-02.png);">
                        <div class="content style-01">
                            <h4 class="title"><a href="business-02.html">Animal Nation Are Struggle To Save Their
                                    Wildlife</a></h4>
                            <ul class="post-meta">
                                <li class="white">
                                    <a href="#">By <span class="style-01">Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date white published updated"><i
                                                    class="fas fa-calendar-alt"></i>JAN 14, 2022</span>
                                        </a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="image-box-item-five bg-image-03"
                        style="background-image: url(assets/img/section-img/news/trending-news-03.png);">
                        <div class="content style-01">
                            <h4 class="title"><a href="business-02.html">Your ultimate guide to buy the best coffee
                                    makers</a></h4>
                            <ul class="post-meta">
                                <li class="white">
                                    <a href="#">By <span class="style-01">Admin</span></a>
                                </li>
                                <li>
                                    <span class="posted-on">
                                        <a href="#" rel="bookmark">
                                            <span class="entry-date white published updated"><i
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
    <!-- Trending News Section End Here -->

    <!-- Latest News Section Start Here -->
    <section class="latest-news-section style-01">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="theme-heading-title">
                        <div class="title">Latest News</div>
                    </div>
                    <div class="image-box-item-four">
                        <div class="thumbnail">
                            <img src="assets/img/section-img/news/latest-news-01.png" alt="">
                        </div>
                        <div class="content ml-xl-4 ml-sm-6">
                            <span class="tag-02">technology</span>
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
                            <img src="assets/img/section-img/news/latest-news-02.png" alt="">
                        </div>
                        <div class="content ml-xl-4 ml-sm-6">
                            <span class="tag-02">technology</span>
                            <a href="business-02.html">
                                <h4 class="title">Ontario COVID numbers: 1 people in hospital, 302 in intensive</h4>
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
                            <img src="assets/img/section-img/news/latest-news-03.png" alt="">
                        </div>
                        <div class="content ml-xl-4 ml-sm-6">
                            <span class="tag-02">technology</span>
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
                            <img src="assets/img/section-img/news/latest-news-04.png" alt="">
                        </div>
                        <div class="content ml-xl-4 ml-sm-6">
                            <span class="tag-02">technology</span>
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
                            <img src="assets/img/section-img/news/latest-news-01.png" alt="">
                        </div>
                        <div class="content ml-xl-4 ml-sm-6">
                            <span class="tag-02">technology</span>
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
                            <img src="assets/img/section-img/news/latest-news-03.png" alt="">
                        </div>
                        <div class="content ml-xl-4 ml-sm-6">
                            <span class="tag-02">technology</span>
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
                <div class="col-lg-4 col-md-12">
                    <div class="top-sticky-wrapper">
                        <div class="theme-heading-title">
                            <div class="title">Popular News</div>
                        </div>
                        <div class="image-box-item-three">
                            <div class="thumbnail style-01">
                                <img src="assets/img/section-img/recent/latest-recent-01.png" alt="">
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
                            <div class="thumbnail style-01">
                                <img src="assets/img/section-img/recent/latest-recent-02.png" alt="">
                            </div>
                            <div class="content">
                                <span class="tag-02">technology</span>
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
                            <div class="thumbnail style-01">
                                <img src="assets/img/section-img/recent/latest-recent-03.png" alt="">
                            </div>
                            <div class="content">
                                <span class="tag-02">technology</span>
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
                        <div class="advertise-banner">
                            <img src="assets/img/section-img/advertise/advertise-02.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest News Section End Here -->

    <!-- Latest Videos Section Start Here -->
    <div class="latest-videos-section section-bg"
        style="background-image: url(assets/img/section-img/videos/videos-section-bg.png);">
        <a class="video-popup mfp-iframe" href="https://www.youtube.com/watch?v=c7XEhXZ_rsk" tabindex="0">
            <i class="fas fa-play"></i>
        </a>
    </div>
    <!-- Latest Videos Section End Here -->

    <!-- News Slider Section Start Here -->
    <section class="news-slider-section">
        <div class="container custom-container">
            <div class="video-slider-wrap">
                <div class="theme-heading-title desktop-center">
                    <div class="title">Latest Videos</div>
                </div>
                <div class="video-news-slider">
                    <div class="blog-grid-item-01 style-02 margin-bottom-30">
                        <div class="thumb">
                            <img src="assets/img/section-img/videos/latest-videos-01.png" alt="">
                            <a class="video-play-btn mfp-iframe" href="https://www.youtube.com/watch?v=c7XEhXZ_rsk"
                                tabindex="0">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <span class="tag">technology</span>
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
                    <div class="blog-grid-item-01 style-02 margin-bottom-30">
                        <div class="thumb">
                            <img src="assets/img/section-img/videos/latest-videos-02.png" alt="">
                            <a class="video-play-btn mfp-iframe" href="https://www.youtube.com/watch?v=c7XEhXZ_rsk"
                                tabindex="0">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <span class="tag">technology</span>
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
                    <div class="blog-grid-item-01 style-02 margin-bottom-30">
                        <div class="thumb">
                            <img src="assets/img/section-img/videos/latest-videos-03.png" alt="">
                            <a class="video-play-btn mfp-iframe" href="https://www.youtube.com/watch?v=c7XEhXZ_rsk"
                                tabindex="0">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <span class="tag">technology</span>
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
                    <div class="blog-grid-item-01 style-02 margin-bottom-30">
                        <div class="thumb">
                            <img src="assets/img/section-img/videos/latest-videos-02.png" alt="">
                            <a class="video-play-btn mfp-iframe" href="https://www.youtube.com/watch?v=c7XEhXZ_rsk"
                                tabindex="0">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <span class="tag">Products</span>
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
            </div>
        </div>
    </section>
    <!-- News Slider Section End Here -->

    <!-- Call To Action Section Start Here -->
    <div class="call-to-action-02">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="assets/img/section-img/cta/cta-bg-02.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Section End Here -->

    <!-- Latest News Section Start Here -->
    <section class="latest-news-section">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="apple-mircosoft-news">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="theme-heading-title">
                                    <div class="title">Apple News</div>
                                </div>
                                <div class="image-box-item-three">
                                    <div class="thumbnail style-01">
                                        <img src="assets/img/section-img/recent/apple-recent-01.png" alt="">
                                    </div>
                                    <div class="content ml-xl-4 ml-sm-6">
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
                                    <div class="thumbnail style-01">
                                        <img src="assets/img/section-img/recent/apple-recent-02.png" alt="">
                                    </div>
                                    <div class="content ml-xl-4 ml-sm-6">
                                        <span class="tag-02">technology</span>
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
                                    <div class="thumbnail style-01">
                                        <img src="assets/img/section-img/recent/apple-recent-03.png" alt="">
                                    </div>
                                    <div class="content ml-xl-4 ml-sm-6">
                                        <span class="tag-02">technology</span>
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
                            <div class="col-lg-6 col-md-6">
                                <div class="theme-heading-title">
                                    <div class="title">Microsoft News</div>
                                </div>
                                <div class="image-box-item-three">
                                    <div class="thumbnail style-01">
                                        <img src="assets/img/section-img/recent/micro-recent-01.png" alt="">
                                    </div>
                                    <div class="content ml-xl-4 ml-sm-6">
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
                                    <div class="thumbnail style-01">
                                        <img src="assets/img/section-img/recent/micro-recent-02.png" alt="">
                                    </div>
                                    <div class="content ml-xl-4 ml-sm-6">
                                        <span class="tag-02">technology</span>
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
                                    <div class="thumbnail style-01">
                                        <img src="assets/img/section-img/recent/micro-recent-04.png" alt="">
                                    </div>
                                    <div class="content ml-xl-4 ml-sm-6">
                                        <span class="tag-02">technology</span>
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
                    <div class="blog-grid-item-wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-grid-item-03 margin-bottom-30">
                                    <div class="thumb">
                                        <img src="assets/img/section-img/blog/blog-grid-01.png" alt="">
                                    </div>
                                    <span class="tag">technology</span>
                                    <div class="content">
                                        <a href="blog-single.html">
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
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-grid-item-03 margin-bottom-30">
                                    <div class="thumb">
                                        <img src="assets/img/section-img/blog/blog-grid-02.png" alt="">
                                    </div>
                                    <span class="tag">technology</span>
                                    <div class="content">
                                        <a href="blog-single.html">
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
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-grid-item-03  margin-bottom-30">
                                    <div class="thumb">
                                        <img src="assets/img/section-img/blog/blog-grid-03.png" alt="">
                                    </div>
                                    <span class="tag">technology</span>
                                    <div class="content">
                                        <a href="blog-single.html">
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
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-grid-item-03  margin-bottom-30">
                                    <div class="thumb">
                                        <img src="assets/img/section-img/blog/blog-grid-04.png" alt="">
                                    </div>
                                    <span class="tag">technology</span>
                                    <div class="content">
                                        <a href="blog-single.html">
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
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-grid-item-03 margin-bottom-30">
                                    <div class="thumb">
                                        <img src="assets/img/section-img/blog/blog-grid-01.png" alt="">
                                    </div>
                                    <span class="tag">technology</span>
                                    <div class="content">
                                        <a href="blog-single.html">
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
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-grid-item-03  margin-bottom-30">
                                    <div class="thumb">
                                        <img src="assets/img/section-img/blog/blog-grid-03.png" alt="">
                                    </div>
                                    <span class="tag">technology</span>
                                    <div class="content">
                                        <a href="blog-single.html">
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
                </div>
                <div class="col-lg-4">
                    <div class="top-sticky-wrapper">
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
                                            <img src="assets/img/section-img/recent/recent-01.png" alt="recent post">
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="business-02.html">Traditional design save us in
                                                    the</a></h4>
                                            <span class="time"><i class="fas fa-calendar-alt"></i>JULY 1, 2022</span>
                                        </div>
                                    </li>
                                    <li class="theme-recent-post-item">
                                        <div class="thumb">
                                            <img src="assets/img/section-img/recent/recent-02.png" alt="recent post">
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="business-02.html">Freehand Template built for the
                                                    whole</a></h4>
                                            <span class="time"><i class="fas fa-calendar-alt"></i>JULY 1, 2022</span>
                                        </div>
                                    </li>
                                    <li class="theme-recent-post-item">
                                        <div class="thumb">
                                            <img src="assets/img/section-img/recent/recent-03.png" alt="recent post">
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="business-02.html">Security isn’t just a logy
                                                    problem it’s</a></h4>
                                            <span class="time"><i class="fas fa-calendar-alt"></i>JULY 1, 2022</span>
                                        </div>
                                    </li>
                                    <li class="theme-recent-post-item">
                                        <div class="thumb">
                                            <img src="assets/img/section-img/recent/recent-04.png" alt="recent post">
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="business-02.html">RBC profit climbs 6% on gains
                                                    in retail</a></h4>
                                            <span class="time"><i class="fas fa-calendar-alt"></i>JULY 1, 2022</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest News Section End Here -->

    <!-- Newslatter Section Start Here -->
    <div class="news-latter-section bg-image" style="background-image: url(assets/img/section-img/cta/cta-bg.png);">
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