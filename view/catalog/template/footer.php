<!-- Footer başlangıcı -->
<footer id="uc-footer" class="uc-footer panel uc-dark">
    <div class="footer-outer py-5 bg-dark text-light position-relative d-flex flex-column align-items-center">
        <div class="footer-logo text-center mb-4">
            <img src="view/admin/assets/images/logo/footer-logo.jpeg" alt="Full Stack Logo" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
        </div>
        <div class="text-center mb-4">
            <p class="mb-2 fs-5 fw-bold">Sosyal Medya Hesaplarımızdan Bizi Takip Edin</p>
            <ul class="nav-x d-inline-block">
                <!-- Facebook -->
                <?php if (!empty($SettingsValue["set_facebook"])): ?>
                    <li class="d-inline-block mx-3">
                        <a href="<?php echo htmlspecialchars($SettingsValue["set_facebook"], ENT_QUOTES, 'UTF-8'); ?>" 
                           class="text-light hover:text-primary">
                            <i class="icon icon-3 unicon-logo-facebook"></i>
                        </a>
                    </li>
                <?php else: ?>
                    <p class="text-warning mt-1">Facebook bağlantımız şu an mevcut değildir.</p>
                <?php endif; ?>

                <!-- Twitter -->
                <?php if (!empty($SettingsValue["set_twitter"])): ?>
                    <li class="d-inline-block mx-3">
                        <a href="<?php echo htmlspecialchars($SettingsValue["set_twitter"], ENT_QUOTES, 'UTF-8'); ?>" 
                           class="text-light hover:text-primary">
                            <i class="icon icon-3 unicon-logo-x-filled"></i>
                        </a>
                    </li>
                <?php else: ?>
                    <p class="text-warning mt-1">Twitter bağlantımız şu an mevcut değildir.</p>
                <?php endif; ?>

                <!-- Instagram -->
                <?php if (!empty($SettingsValue["set_instagram"])): ?>
                    <li class="d-inline-block mx-3">
                        <a href="<?php echo htmlspecialchars($SettingsValue["set_instagram"], ENT_QUOTES, 'UTF-8'); ?>" 
                           class="text-light hover:text-primary">
                            <i class="icon icon-3 unicon-logo-instagram"></i>
                        </a>
                    </li>
                <?php else: ?>
                    <p class="text-warning mt-1">Instagram bağlantımız şu an mevcut değildir.</p>
                <?php endif; ?>
            </ul>
        </div>

        <div class="d-flex justify-content-between position-absolute w-100 bottom-0 px-3 pb-3">
            <div class="footer-copyright">
                <p class="mb-0">Telif Hakkı © 2024, Tüm Hakları Saklıdır.</p>
            </div>
        </div>
    </div>
</footer>

<!-- include jquery & bootstrap js -->
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/libs/jquery.min.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/libs/bootstrap.min.js"></script>

<!-- include scripts -->
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/libs/anime.min.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/libs/swiper-bundle.min.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/libs/scrollmagic.min.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/helpers/data-attr-helper.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/helpers/swiper-helper.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/helpers/anime-helper.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/helpers/anime-helper-defined-timelines.js"></script>
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/uikit-components-bs.js"></script>

<!-- include app script -->
<script defer src="<?php echo APP_URL; ?>view/catalog/assets/js/app.js"></script>

<script>
    // Schema toggle via URL
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const getSchema = urlParams.get("schema");
    if (getSchema === "dark") {
        setDarkMode(1);
    } else if (getSchema === "light") {
        setDarkMode(0);
    }
</script>
</body>
</html>
