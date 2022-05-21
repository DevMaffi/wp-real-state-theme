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
