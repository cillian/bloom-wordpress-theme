<?php get_header(); ?>

<div id="content_main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="block post">

      <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

      <?php the_excerpt(__('Read more'));?>

      <a href="<?php the_permalink() ?>" class="button_link">Read more &raquo;</a>

      <p class="postmeta">
        Written on <?php the_time('F j, Y'); ?> |
        <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
      </p>

    </div> <!-- end .post -->

  <?php endwhile; else: ?>

    <p>There are currently no posts.</p>

  <?php endif; ?>

      <p id="older_posts_link"><?php next_posts_link('&laquo; Older Entries') ?></p>
      <p id="newer_posts_link"><?php previous_posts_link('Newer Entries &raquo;') ?></p>

</div>

<div id="content_middle">
  <?php get_sidebar('middle'); ?> 
</div>

<div id="content_right">
  <?php get_sidebar('right'); ?> 
</div>

<?php get_footer(); ?>
