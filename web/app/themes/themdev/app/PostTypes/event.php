<?php

namespace App\Modules\PostTypes;

function register_event_post_type()
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
    'name' => _x('Events', 'plural'),
    'singular_name' => _x('Event', 'singular'),
    'menu_name' => _x('Events', 'admin menu'),
    'name_admin_bar' => _x('Events', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Event'),
    'new_item' => __('New Event'),
    'edit_item' => __('Edit Event'),
    'view_item' => __('View Event'),
    'all_items' => __('All Event'),
    'search_items' => __('Search Event'),
    'not_found' => __('No Event found.'),
  );

  $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    // 'query_var' => true,
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    // 'hierarchical' => false,
    'menu_icon' => 'dashicons-calendar',
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    // 'capability_type' => 'event', // enable to set user role permissions.
    // 'map_meta_cap' => true, // enable to set user role permissions.
    // 'show_in_rest' => true, // enable gurtenburg on custom post type
  );
  register_post_type('events', $args);
}


add_action('init', 'App\Modules\PostTypes\register_event_post_type', 0);
