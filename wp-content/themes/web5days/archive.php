<?php get_header(); ?>

<div class="container">
  <div id="main">
    <div class="main-content">
      <div class="content">
        <div class="p-3 content-right">
          <div class="news-container">
            <?php if (have_posts()) : $t = 0;
                    while (have_posts()) : the_post();
                        $t++; ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="news-item">
              <?php if (has_post_thumbnail()) the_post_thumbnail('full', array('class' => 'box-item-img', 'alt' => get_the_title()));
                                            else echo '<img class="box-item-img" alt="' . get_the_title() . '" src="' . get_theme_mod("img_error") . '" />'; ?>
              <div class="news-content">
                <div class="news-title"><?php the_title() ?></div>
                <div class="news-description"><?php echo get_the_excerpt() ?></div>
              </div>
            </a>
            <?php
            endwhile;
        else :  echo '<p class="not-found">Not found posts</p>';
        endif;
        ?>
          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>