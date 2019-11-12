<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device=width">
    <title> Isabel Valente </title>
    <?php wp_head(); ?>
    <!-- Bootstrap CSS File -->
  </head>

  <body <?php body_class(); ?>>

<!-- NAVBAR START -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">IV</a>
      <?php
        wp_nav_menu(
          array(
            'theme_location'    => 'primary',
            'depth'             =>  2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarSupportedContent',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          )  );
       ?>
  </nav>
<!-- NAVBAR END -->
