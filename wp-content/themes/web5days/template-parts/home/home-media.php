<?php
$q_newspapers = new WP_Query(
    array(
        'post_type' => 'newspaper',
        'posts_per_page' => 4,
        'orderby' => 'menu_order',
        'order' => 'desc',
    )
);
?>

<section class="media mt-3">
    <div class="container-xl">
        <div class="title-content mb-3">
            <a href="/he-thong-cua-hang">
                <h3 class="pb-3 pt-4 text-center text-uppercase title-mobile">Đặt hàng ngay !</h3>
            </a>
            <div class="d-flex">
                <h4 class="text-uppercase pe-3 text-decoration-underline text-success fs-md-6 fs-lg-6 fs-sm-6">Báo chí nói về Ngọc Lan @</h4>
                <span>
                    <span class="pe-2 fs-6 fs-sm-6 text-warning"><i class="fa-solid fa-trophy icons-mobile"></i></span>
                    <span class="pe-2 fs-6 fs-sm-6 text-warning"><i class="fa-solid fa-trophy icons-mobile"></i></span>
                    <span class="pe-2 fs-6 fs-sm-6 text-warning"><i class="fa-solid fa-trophy icons-mobile"></i></span>
                </span>
            </div>
        </div>

        <div class="row row-cols-1 g-4 mb-4">
            <?php if ($q_newspapers->have_posts()) :
                while ($q_newspapers->have_posts()) : $q_newspapers->the_post();  ?>
                    <div class="col mt-3">
                        <div class="media-content-list row">
                            <div class="media-content-img col-md-6">
                                <p class="fs-8 text-uppercase name-newspaper mb-2"><?php echo get_field('newspaper_name'); ?></p>
                                <?php if (has_post_thumbnail()) the_post_thumbnail('full', array('class' => 'card-img-top', 'alt' => get_the_title()));
                                else echo '<img class="box_news_item_img text-center" alt="' . get_the_title() . '" src="' . get_theme_mod("img_error") . '" />'; ?>
                            </div>

                            <div class="card-body col-md-6 d-flex align-items-center justify-content-center pt-0">
                                <div class="title-media">
                                    <h5 class="card-title text-start text-primary title-media pb-1 pb-1 pt-3 pt-md-0"><?php echo get_the_title() ?></h5>
                                    <p class="card-text title-desc"><?php echo get_the_excerpt() ?></p>
                                    <div class="d-flex justify-content-end">
                                        <a href="<?php echo get_field('newspaper_url'); ?>" target="_blank" class="fs-6">Xem thêm <i class="fa-solid fa-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
