<?php
/*
 Template Name: About
 */
get_header();

?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- <div class="page-title">
  <h3><?php the_title() ?></h3>
</div> -->
<?php
    the_content();
    endwhile;
endif;

?>


<?php get_footer(); ?>