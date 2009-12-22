<ul>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right') ) : ?>

    <li>
      <h2>Recent Posts</h2>
      <?php get_archives('postbypost', 10); ?>
    </li>

  <?php endif; ?>
</ul>

<img src="wp-content/themes/bloom/images/bloom_protest_crowd.jpg" width="160" />
