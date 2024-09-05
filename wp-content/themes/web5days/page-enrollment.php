<?php
/*
 Template Name: Enrollment
 */
get_header();

?>
<div class="container">
  <div id="main">
    <div class="main-content">
      <div class="content">
        <div class="p-3 content-right">
          <div class="title-main">
            <h2><span>Master
                Programme</span> in Traffic Safety Engineering</h2>
          </div>
          <div class="content-des">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
                the_content();
                endwhile;
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