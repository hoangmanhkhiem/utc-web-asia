<?php
$q_videos = new WP_Query(
    array(
        'post_type' => 'video',
        'posts_per_page' => 3,
        'orderby' => 'menu_order',
        'order' => 'desc',
    )
);
?>
<section class="nice-video mt-3">
    <div class="container-xl">
        <div class="title-content">
        <a href="/he-thong-cua-hang">
            <h3 class="pb-3 pt-4 text-center text-uppercase title-mobile">Đặt hàng ngay !</h3>
        </a>
            <div class="d-flex">
                <h4 class="text-uppercase pe-4 text-decoration-underline text-success">Video hay</h4>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 pb-4">
            <?php if ($q_videos->have_posts()) :
                while ($q_videos->have_posts()) : $q_videos->the_post();  ?>
                    <div class="col">
                        <div class="card h-100">
                            <div class="ratio ratio-16x9">
                                <iframe width="1236" height="695" src="<?php echo get_field('video_youtube_link'); ?>" title="<?php echo get_the_title() ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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