<?php
/**
* html head and page header
*
* @package alec_personal
* */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- header -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
    <?php wp_nav_menu(
      array(
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbar_collapse',
        'theme_location'  => 'header-menu',
        'menu_class'      => '', 
        'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker()
      ));
    ?>
  </nav>
