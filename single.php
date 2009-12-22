<?php get_header(); ?>

<div id="content_main">
 
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
    <div class="block post" id="post-<?php the_ID(); ?>">

      <h2><a href="<?php echo get_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

      <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

      <p class="postmeta">
      Written on <?php the_time('F j, Y'); ?> |
      <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
      </p>

      <p id="older_posts_link"><?php next_posts_link('&laquo; Older Entries') ?></p>
      <p id="newer_posts_link"><?php previous_posts_link('Newer Entries &raquo;') ?></p>

      <p>Categories <?php the_category(', ') ?> | Tags: <?php the_tags(' ', ', ', ' '); ?></p>

    </div> <!-- end .post -->

  <?php endwhile; else: ?>

    <p>There are currently no posts.</p>

  <?php endif; ?>

  <?php comments_template(); ?>

</div>

<div id="content_middle">
  <?php get_sidebar('middle'); ?> 
</div>

<div id="content_right">
  <?php get_sidebar('right'); ?> 
</div>

<?php get_footer(); ?>
