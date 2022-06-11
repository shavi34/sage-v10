<?php

namespace App\Modules\PostTypes;

function register_subject_post_type()
{
  $supports = array(
    'title', // post title
    'editor', // post content
    'author', // post author
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'post-formats', // post formats
  );

  $labels = array(
    'name' => _x('Subjects', 'plural'),
    'singular_name' => _x('Subject', 'singular'),
    'menu_name' => _x('Subjects', 'admin menu'),
    'name_admin_bar' => _x('Subjects', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Subject'),
    'new_item' => __('New Subject'),
    'edit_item' => __('Edit Subject'),
    'view_item' => __('View Subject'),
    'all_items' => __('All Subject'),
    'search_items' => __('Search Subject'),
    'not_found' => __('No Subject found.'),
  );

  $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'subjects'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-welcome-learn-more',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    // 'capability_type' => 'event', // enable to set user role permissions.
    // 'map_meta_cap' => true, // enable to set user role permissions.
    'show_in_rest' => true, // enable gurtenburg on custom post type
  );
  register_post_type('subjects', $args);
}
add_action('init', 'App\Modules\PostTypes\register_subject_post_type', 0);
