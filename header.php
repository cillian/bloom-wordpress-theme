<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <title> <?php if ( is_home() ) { ?><? bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?>Search Results for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); echo $key; _e(' &mdash; '); echo $count . ' '; _e('articles'); wp_reset_query(); ?><?php } ?>
<?php if ( is_404() ) { ?><? bloginfo('name'); ?> | 404 Nothing Found<?php } ?>
<?php if ( is_author() ) { ?><? bloginfo('name'); ?> | Author Archives<?php } ?> 
<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php 
$category = get_the_category();
echo $category[0]->cat_name;
?> | <? bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><? bloginfo('name'); ?> | <?php 
$category = get_the_category();
echo $category[0]->cat_name;  ?>|<?php wp_title(''); ?><?php } ?> 
<?php if ( is_category() ) { ?><?php single_cat_title(); ?> | <?php $category = get_the_category(); 
echo $category[0]->category_description; ?> | <? bloginfo('name'); ?><?php } ?> 
<?php if ( is_month() ) { ?><? bloginfo('name'); ?> | Archive | <?php the_time('F, Y'); ?><?php } ?>
<?php if ( is_day() ) { ?><? bloginfo('name'); ?> | Archive | <?php the_time('F j, Y'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php single_tag_title("", true); } } ?> | <? bloginfo('name'); ?>
</title>
<!--  title script via ProBlogDesign.com | http://www.problogdesign.com/wordpress/automatic-seo-titles-for-all-your-pages/  -->
 <meta name="generator" content="WordPress" /> <!-- leave this for stats -->
 <meta name="author" content="Brian Purkiss" />
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/reset.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
 <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 <?php wp_head(); ?>	
</head>
<body>

<div id="container">
  <div id="header">
    <a href="<?php echo get_option('home'); ?>" id="logo"><?php bloginfo('name'); ?><?php bloginfo('description'); ?></a>
    <div id="nav_container">
      <ul id="nav">
        <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
        <?php wp_list_pages( array(
          'depth' => 1,
          'title_li' => null
        )); ?> 
      </ul>
    </div>
  </div>

  <div id="content_container">
