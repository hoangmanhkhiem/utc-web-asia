<div class="navbar-header container-xl menu-top">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container' => '',
                    'items_wrap' => '<ul class="navbar-nav w-100 justify-content-between nav-menu" id="menu_top_item">%3$s</ul>',
                    'add_li_class'  => 'nav-item nav-list w-100',
                    'link_class'   => 'nav-link fs-6 text-white text-uppercase nav-link-custom'
                )
            );
            ?>
        </div>
    </nav>
</div>
