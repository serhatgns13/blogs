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
        <div class="nav-left-content">
            <div class="menu-icon style-01 open-sidebar-02">
                <ul>
                    <li><a href="javascript:void(0)"><i class="flaticon-more"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="themeim_main_menu">
            <ul class="navbar-nav">

                <li class="current-menu-item"><a href="<?php echo $_SERVER['REQUEST_URI']; ?>">ANA SAYFA</a></li>


                <li class="menu-item-has-children">
                    <a href="#">KATEGORİLER</a>
                    <ul class="sub-menu">
                        <?php foreach ($CategoryValue as $Category): ?>
                            <li><a href="index.html"><?php echo $Category["name"];?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li class="current-menu-item"><a href="<?php  ?>">blog</a></li>

            </ul>
        </div>
        
    </div>
</nav>