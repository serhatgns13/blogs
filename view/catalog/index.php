<?php require_once "template/header.php"; ?>

<section class="doc_documentation_area" id="sticky_doc">
    <div class="overlay_bg"></div>
    <div class="container custom_container">
        <div class="row">

            <div class="col-lg-3 doc_mobile_menu display_none">
                <aside class="doc_left_sidebarlist">
                    <div class="open_icon" id="left">
                        <i class="arrow_carrot-right"></i>
                        <i class="arrow_carrot-left"></i>
                    </div>
                    <div class="scroll">
                        <ul class="list-unstyled nav-sidebar">
                            <ul class="list-unstyled nav-sidebar">
                                <?php foreach (array_filter($CategoryValue, fn($value) => $value['parent_id'] == 0) as $mainCategory): ?>
                                    <li class="nav-item">
                                        <a href="#<?= $mainCategory["slug"]; ?>" class="nav-link listele"
                                            data-id="<?= $mainCategory["category_id"]; ?>"
                                            onclick="loadSubCategories(<?= $mainCategory['category_id']; ?>)">
                                            <img src="view/catalog/img/side-nav/home.png" alt="">
                                            <?= $mainCategory['name']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>



                        </ul>

                        <ul class="list-unstyled nav-sidebar bottom_nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img src="view/catalog/img/side-nav/united-states.png"
                                        alt="">Unlted
                                    States</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img src="view/catalog/img/side-nav/edit.png"
                                        alt="">English </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><img src="view/catalog/img/side-nav/users.png" alt="">Sign
                                    In <i class="arrow_right"></i></a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>

            <div class="col-lg-7 col-md-8">
                <div id="post" class="documentation_info">
                    <article class="documentation_body" id="documentation">

                        <div class="shortcode_title">
                            <h1>

                                başlık


                            </h1>

                            <p><span>Welcome to KbDoc !</span> Get familiar with the Stripe products and explore their
                                features:</p>
                        </div>
                        <div class="row">

                            <div id="subcategories-container">
                                <?php foreach ($CategoryValue as $mainCategory): ?>
                                    <div id="subcategories-<?= $mainCategory["category_id"]; ?>" class="subcategories"
                                        style="display: none;">
                                        <div class="row">
                                            <?php
                                            // Alt kategorileri filtrele
                                            $subCategories = array_filter($CategoryValue, fn($sub) => $sub['parent_id'] == $mainCategory['category_id']);
                                            foreach ($subCategories as $subCategory):
                                                ?>
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="media documentation_item listele<?= $subCategory["category_id"]; ?>"
                                                        id="#<?= $subCategory["slug"]; ?>">
                                                        <div class="icon">
                                                            <img src="view/catalog/img/home_one/icon/folder.png" alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="#<?= $subCategory["slug"]; ?>">
                                                                <h5><?= $subCategory['name']; ?></h5>
                                                            </a>
                                                            <p>He lost his bottle bubble and squeak knackered.!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>


                            </div>

                            <script>
                                function loadSubCategories(categoryId) {
                                    var containers = document.querySelectorAll('.subcategories');
                                    containers.forEach(function (container) {
                                        container.style.display = 'none';
                                    });

                                    var container = document.getElementById('subcategories-' + categoryId);
                                    if (container) {
                                        container.style.display = 'block';
                                    }
                                }
                            </script>
                        </div>
                    </article>

                    <article class="help_text" id="help">

                        <footer>
                            <div class="border_bottom"></div>
                            <div class="row feedback_link">
                                <div class="col-lg-6">
                                    <h6><i class="icon_mail_alt"></i>Still stuck? <a href="#" data-toggle="modal"
                                            data-target="#exampleModal3">How can we help?</a></h6>
                                </div>
                                <div class="col-lg-6">
                                    <p>Was this page helpful? <a href="#" class="h_btn">Yes</a><a href="#"
                                            class="h_btn">No</a></p>
                                </div>
                            </div>
                        </footer>

                    </article>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once "template/footer.php"; ?>