<?php

namespace App\Modules\PostTypes;

function register_professor_type()
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
    'name' => _x('Professors', 'plural'),
    'singular_name' => _x('Professor', 'singular'),
    'menu_name' => _x('Professors', 'admin menu'),
    'name_admin_bar' => _x('Professors', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Professor'),
    'new_item' => __('New Professor'),
    'edit_item' => __('Edit Professor'),
    'view_item' => __('View Professor'),
    'all_items' => __('All Professors'),
    'search_items' => __('Search Professor'),
    'not_found' => __('No Event found.'),
  );

  $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-universal-access',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    // 'capability_type' => 'event', // enable to set user role permissions.
    // 'map_meta_cap' => true, // enable to set user role permissions.
    'show_in_rest' => true, // enable gurtenburg on custom post type
  );
  register_post_type('professors', $args);
}

add_action('init', 'App\Modules\PostTypes\register_professor_type', 0);
