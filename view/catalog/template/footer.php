<!-- Footer başlangıcı -->
<footer id="uc-footer" class="uc-footer panel uc-dark">
    <div class="footer-outer py-4 lg:py-6 xl:py-9 bg-white dark:bg-gray-900">
        <div class="container max-w-xl">
            <div class="footer-inner vstack gap-4 justify-center lg:fs-5 text-gray-900 dark:text-white">
                <nav class="footer-nav">
                    <ul class="nav-x gap-2 lg:gap-3 justify-center text-center fw-medium">
                        <li><a class="hover:text-opacity-70 dark:hover:text-white duration-150"
                                href="<?php echo $_SERVER["REQUEST_URI"]; ?>">Anasayfa</a></li>
                        <li class="vr dark:border-gray-200"></li>
                        <li><a class="hover:text-opacity-70 dark:hover:text-white duration-150"
                                href="blog-category.html">Hakkımızda</a></li>
                        <li class="vr dark:border-gray-200"></li>
                        <li><a class="hover:text-opacity-70 dark:hover:text-white duration-150" href="#">Sosyal
                                Medya</a></li>

                    </ul>
                </nav>
                <div class="footer-social hstack justify-center gap-2 lg:gap-3">
                    <p class="hover:text-opacity-70 dark:hover:text-white duration-150 text-center">Bizi takip edin:</p>
                    <ul class="nav-x gap-2">
                        <!-- Facebook bağlantısı -->
                        <?php if (!empty($SettingsValue["set_facebook"])): ?>
                            <li>
                                <a class="hover:text-gray-900 dark:hover:text-white duration-150"
                                    href="<?php echo htmlspecialchars($SettingsValue["set_facebook"], ENT_QUOTES, 'UTF-8'); ?>">
                                    <i class="icon icon-2 unicon-logo-facebook"></i>
                                </a>
                            </li>
                        <?php else: ?>
                            <p class="text-warning mt-1">Facebook bağlantımız şu an mevcut değildir.</p>
                        <?php endif; ?>

                        <!-- Twitter bağlantısı -->
                        <?php if (!empty($SettingsValue["set_twitter"])): ?>
                            <li>
                                <a class="hover:text-gray-900 dark:hover:text-white duration-150"
                                    href="<?php echo htmlspecialchars($SettingsValue["set_twitter"], ENT_QUOTES, 'UTF-8'); ?>">
                                    <i class="icon icon-2 unicon-logo-x-filled"></i>
                                </a>
                            </li>
                        <?php else: ?>
                            <p class="text-warning mt-1">Twitter bağlantımız şu an mevcut değildir.</p>
                        <?php endif; ?>

                        <!-- Instagram bağlantısı -->
                        <?php if (!empty($SettingsValue["set_instagram"])): ?>
                            <li>
                                <a class="hover:text-gray-900 dark:hover:text-white duration-150"
                                    href="<?php echo htmlspecialchars($SettingsValue["set_instagram"], ENT_QUOTES, 'UTF-8'); ?>">
                                    <i class="icon icon-2 unicon-logo-instagram"></i>
                                </a>
                            </li>
                        <?php else: ?>
                            <p class="text-warning mt-1">Instagram bağlantımız şu an mevcut değildir.</p>
                        <?php endif; ?>
                    </ul>
                </div>


                <div class="footer-copyright vstack sm:hstack justify-center items-center gap-1 lg:gap-2">
                    <p> © 2024, All rights reserved.</p>
                    <ul class="nav-x gap-2 fw-medium">
                        <li><a class="uc-link text-underline hover:text-gray-900 dark:hover:text-white duration-150"
                                href="#privacy-policy" id="privacy-policy-button">Gizlilik bildirimi</a></li>
                        <li><a class="uc-link text-underline hover:text-gray-900 dark:hover:text-white duration-150"
                                href="#terms-conditions" id="terms-conditions-button">Şartlar ve koşullar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer sonu -->



<!-- JavaScript dosyaları -->
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/libs/jquery.min.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/libs/bootstrap.min.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/libs/anime.min.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/libs/swiper-bundle.min.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/libs/scrollmagic.min.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/helpers/data-attr-helper.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/helpers/swiper-helper.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/helpers/anime-helper.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/helpers/anime-helper-defined-timelines.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/uikit-components-bs.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/uc-helpers.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/uikit-vendor.js"></script>



</body>

</html>