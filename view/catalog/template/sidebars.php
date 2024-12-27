<div class="col-lg-3 doc_mobile_menu display_none">
    <aside class="doc_left_sidebarlist">
        <div class="open_icon" id="left">
            <i class="arrow_carrot-right"></i>
            <i class="arrow_carrot-left"></i>
        </div>
        <div class="scroll">
            <ul class="list-unstyled nav-sidebar">


                <?php

                foreach ($CategoryValue as $value):

                    if ($value["parent_id"] == 0): ?>

                        <li class="nav-item">
                            <a href="#<?php echo strtolower(str_replace(' ', '_', $value["name"])); ?>" class="nav-link">
                                <img src="view/catalog/img/side-nav/home.png" alt=""><?php echo $value["name"]; ?>
                            </a>
                        </li>

                        <?php
                    endif;

                endforeach; ?>

            </ul>

            <ul class="list-unstyled nav-sidebar bottom_nav">
                <li class="nav-item">
                    <a href="#" class="nav-link"><img src="view/catalog/img/side-nav/united-states.png" alt="">Unlted
                        States</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><img src="view/catalog/img/side-nav/edit.png" alt="">English </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><img src="view/catalog/img/side-nav/users.png" alt="">Sign In <i
                            class="arrow_right"></i></a>
                </li>
            </ul>
        </div>
    </aside>
</div>