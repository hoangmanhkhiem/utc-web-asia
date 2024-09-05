<?php get_header(); ?>

<div class="container">
  <div id="main">
    <div class="main-content">
      <div class="content">
        <div class="p-3 content-right">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="content-des">
            <div class="title-main-blog">
              <h5><?php the_title() ?></h5>
            </div>
            <div class="blog">
              <?php the_content(); ?>
            </div>
          </div>

          <?php
                endwhile;
            endif;
            ?>

        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>