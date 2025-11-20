<?php


// Register Custom Post Type
function register_project_post_type() {
    $labels = array(
        'name'                  => _x('projects', 'Post Type General Name', 'ha-plugin'),
        'singular_name'         => _x('project', 'Post Type Singular Name', 'ha-plugin'),
        'menu_name'            => __('projects', 'ha-plugin'),
        'all_items'            => __('All projects', 'ha-plugin'),
        'add_new_item'         => __('Add New project', 'ha-plugin'),
        'add_new'              => __('Add New', 'ha-plugin'),
        'edit_item'            => __('Edit project', 'ha-plugin'),
        'update_item'          => __('Update project', 'ha-plugin'),
        'search_items'         => __('Search project', 'ha-plugin'),
    );

    $args = array(
        'label'                 => __('project', 'ha-plugin'),
        'labels'                => $labels,
        'supports'              => ["title","editor","thumbnail","excerpt","author","comments"],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-media-document',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type('project', $args);
}
add_action('init', 'register_project_post_type', 0);