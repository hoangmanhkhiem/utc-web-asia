<?php
$q_sliders = new WP_Query(
    array(
        'post_type' => 'slider',
        'posts_per_page' => 1,
        's' => 'HOME_SLIDER',
    )
);
?>
<?php if (is_home() || is_front_page()) : ?>
    <div class="banner-top container-xl">
        <div class="banner-title pb-3">
            <a class="text-uppercase fs-3 fw-bold text-danger d-flex justify-content-center" href="he-thong-cua-hang">
                Xem hệ thống cửa hàng Ngọc Lan @
            </a>
        </div>
        <?php if ($q_sliders->have_posts()) :  while ($q_sliders->have_posts()) : $q_sliders->the_post();  ?>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php if (have_rows('slider_ds_anh')) : $index = 0;
                            while (have_rows('slider_ds_anh')) : the_row();
                                $index++; ?>
                                <div class="carousel-item banner-img <?php if ($index == 1) echo 'active'; ?>">
                                    <img src="<?php echo get_sub_field('slider_hinh_anh'); ?>" class="d-block w-100" alt="<?php echo get_sub_field('slider_tieu_de'); ?>">
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                    <button class="carousel-control-prev pre-left" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="icon-pre-left" aria-hidden="true"><i class="fa-solid fa-caret-left"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next next-right" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="icon-next-right" aria-hidden="true"><i class="fa-solid fa-caret-right"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
<?php else : ?>
    <div class="container-xl page-banner"><img src="<?php echo get_theme_mod("img_banner") ?>" class="d-block w-100" alt="banner"> </div>
<?php endif; ?>