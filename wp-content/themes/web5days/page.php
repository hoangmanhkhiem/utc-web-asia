<?php get_header(); ?>

<main>
    <section class="page-wrapper">
        <div class="container-xl">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="page-title">
                        <h3><?php the_title() ?></h3>
                    </div>
            <?php
                    the_content();
                endwhile;
            endif;
            ?>
            <br />
            <hr />
            <br />
        </div>
    </section>
</main>

<?php get_footer(); ?>