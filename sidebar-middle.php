<ul>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('middle') ) : ?>

    <li>
      <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    </li>

  <?php endif; ?>
</ul>

