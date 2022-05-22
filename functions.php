<?php

/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

// Load styles and scripts

add_action('wp_enqueue_scripts', 'real_state_styles');
add_action('wp_enqueue_scripts', 'real_state_scripts');

function real_state_styles()
{
  wp_enqueue_style('real-state-styles', get_stylesheet_uri());
}

function real_state_scripts()
{
  $root_dir = 'assets/js';

  wp_enqueue_script('real-state-vendors', get_template_directory_uri() . "/$root_dir/717.js", array(), null, true);
  wp_enqueue_script('real-state-index', get_template_directory_uri() . "/$root_dir/index.js", array(), null, true);
}

// Config posts

add_theme_support('post-thumbnails');

// Handle menus

add_theme_support('menus');

add_filter('nav_menu_link_attributes', 'filter_menu_links', 10, 3);

function filter_menu_links($atts, $item, $args)
{
  $menus = ['About menu', 'Company menu', 'Support menu'];

  if (in_array($args->menu, $menus)) {
    $atts['class'] = 'footer__link';
  }

  return $atts;
}
