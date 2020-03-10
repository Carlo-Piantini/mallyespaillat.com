<?php get_header('front-page'); ?>

<div id="tag-line">
  <span id="tag-line-copy"><?php the_field('tag_line_copy'); ?></span><!--#tag-line-static-->
  <div id="tag-line-slider" class="slider">
    <?php if (have_rows('tag_line_slider')) : ?>
      <?php while (have_rows('tag_line_slider')) : the_row(); ?>
        <div class="tag-line-slide slide"><?php the_sub_field('copy'); ?></div><!--tag-line-slide-->
      <?php endwhile; ?>
    <?php endif; ?>
  </div><!--#tag-line-slider-->
</div><!--#tag-line-->

<?php get_footer('front-page'); ?>