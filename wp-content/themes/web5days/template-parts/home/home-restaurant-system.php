<?php
$q_reviews = new WP_Query(
    array(
        'post_type' => 'review',
        'posts_per_page' => 5,
    )
);
?>

<section class="restaurant-system">
    <div class="container-xl">
        <div class="title-content mb-3">
            <a href="/he-thong-cua-hang">
                <h3 class="pb-3 pt-4 text-center text-uppercase title-mobile">Xem hệ thống cửa hàng Ngọc Lan</h3>
            </a>
            <div class="d-flex">
                <h4 class="text-uppercase pe-4 text-decoration-underline text-success">Nhận xét từ khách hàng
                </h4>
                <div>
                    <span class="pe-2 fs-5 text-warning"><i class="fa-solid fa-star icons-mobile"></i></span>
                    <span class="pe-2 fs-5 text-warning"><i class="fa-solid fa-star icons-mobile"></i></span>
                    <span class="pe-2 fs-5 text-warning"><i class="fa-solid fa-star icons-mobile"></i></span>
                </div>
            </div>
        </div>

        <!-- <div class="swiper">
            <div class="card__content">
                <div class="swiper-wrapper">
                    <?php if ($q_reviews->have_posts()) :
                        while ($q_reviews->have_posts()) : $q_reviews->the_post();  ?>
                            <article class="card__article swiper-slide">
                                <div class="card__image">
                                    <?php if (has_post_thumbnail()) the_post_thumbnail('full', array('class' => 'card__img', 'alt' => get_the_title()));
                                    else echo '<img class="box_news_item_img" alt="' . get_the_title() . '" src="' . get_theme_mod("img_error") . '" />'; ?>
                                    <div class="card__shadow"></div>
                                </div>

                                <div class="card__data">
                                    <h3 class="card__name"><?php echo get_the_title() ?></h3>
                                    <p class="card__description">
                                        <?php echo get_the_excerpt() ?>
                                    </p>
                                </div>
                            </article>
                        <?php endwhile;
                    else : ?>
                        <p><?php esc_html_e('Không có bài viết nào.', 'textdomain'); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="swiper-button-next">
                <i class="fa-solid fa-caret-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="fa-solid fa-caret-left"></i>
            </div>
            <div class="swiper-pagination"></div>
        </div> -->

        <div class="swiper">
            <div class="card__content">
                <div class="swiper-wrapper">
                    <article class="card__article swiper-slide">
                        <div class="card__images">
                            <img class="object-fit-contain border rounded" src="<?php echo THEME_URL ?>/assets/images/home/comment1.jpg" alt="image" class="card__img-event">
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card__images">
                            <img class="object-fit-contain border rounded" src="<?php echo THEME_URL ?>/assets/images/home/comment2.jpg" alt="image" class="card__img-event">
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card__images">
                            <img class="object-fit-contain border rounded" src="<?php echo THEME_URL ?>/assets/images/home/comment3.jpg" alt="image" class="card__img-event">
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card__images">
                            <img class="object-fit-contain border rounded" src="<?php echo THEME_URL ?>/assets/images/home/comment4.jpg" alt="image" class="card__img-event">
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card__images">
                            <img class="object-fit-contain border rounded" src="<?php echo THEME_URL ?>/assets/images/home/comment5.jpg" alt="image" class="card__img-event">
                        </div>
                    </article>
                </div>
            </div>
            <div class="card__content">
                <div class="swiper-wrapper">
                    <article class="card__article swiper-slide">
                        <div class="card__images">
                            <img class="object-fit-contain border rounded" src="<?php echo THEME_URL ?>/assets/images/home/comment6.jpg" alt="image" class="card__img-event">
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card__images">
                            <img class="object-fit-contain border rounded" src="<?php echo THEME_URL ?>/assets/images/home/comment5.jpg" alt="image" class="card__img-event">
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card__images">
                            <img class="object-fit-contain border rounded" src="<?php echo THEME_URL ?>/assets/images/home/comment4.jpg" alt="image" class="card__img-event">
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card__images">
                            <img class="object-fit-contain border rounded" src="<?php echo THEME_URL ?>/assets/images/home/comment3.jpg" alt="image" class="card__img-event">
                        </div>
                    </article>

                    <article class="card__article swiper-slide">
                        <div class="card__images">
                            <img class="object-fit-contain border rounded" src="<?php echo THEME_URL ?>/assets/images/home/comment2.jpg" alt="image" class="card__img-event">
                        </div>
                    </article>
                </div>
            </div>

            <div class="swiper-button-next">
                <i class="fa-solid fa-caret-right"></i>
            </div>

            <div class="swiper-button-prev">
                <i class="fa-solid fa-caret-left"></i>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>