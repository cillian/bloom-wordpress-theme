<?php get_header(); ?>

<div id="content_main">

  <div class="block post" id="post-<?php the_ID(); ?>">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

      <?php the_content(__('Read more'));?>	

    <?php endwhile; else: ?>

      <p>No content.</p>

    <?php endif; ?>
 
  </div>

</div>

<div id="content_middle">
  <?php get_sidebar('middle'); ?> 
</div>

<div id="content_right">
  <?php get_sidebar('right'); ?> 
</div>

<?php get_footer(); ?>
