<?php

// Register Custom Taxonomy
function register_project_industry_taxonomy() {
    $labels = array(
        'name'                       => _x('Industries', 'Taxonomy General Name', 'ha-plugin'),
        'singular_name'              => _x('Industry', 'Taxonomy Singular Name', 'ha-plugin'),
        'menu_name'                  => __('Industries', 'ha-plugin'),
        'all_items'                  => __('All Industries', 'ha-plugin'),
        'parent_item'                => __('Parent Industry', 'ha-plugin'),
        'parent_item_colon'          => __('Parent Industry:', 'ha-plugin'),
        'new_item_name'              => __('New Industry Name', 'ha-plugin'),
        'add_new_item'               => __('Add New Industry', 'ha-plugin'),
        'edit_item'                  => __('Edit Industry', 'ha-plugin'),
        'update_item'                => __('Update Industry', 'ha-plugin'),
        'view_item'                  => __('View Industry', 'ha-plugin'),
        'search_items'               => __('Search Industries', 'ha-plugin'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'publicly_queryable'         => true,
        'show_ui'                    => true,
        'show_in_menu'               => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'rest_base'                  => 'project_industry',
        'show_tagcloud'              => true,
        'show_in_quick_edit'         => true,
        'show_admin_column'          => true,
    );

    register_taxonomy('project_industry', ["project"], $args);
}
add_action('init', 'register_project_industry_taxonomy', 0);


// Register Custom Taxonomy
function register_project_technology_taxonomy() {
    $labels = array(
        'name'                       => _x('Technologies', 'Taxonomy General Name', 'ha-plugin'),
        'singular_name'              => _x('Technology', 'Taxonomy Singular Name', 'ha-plugin'),
        'menu_name'                  => __('Technologies', 'ha-plugin'),
        'all_items'                  => __('All Technologies', 'ha-plugin'),
        'parent_item'                => __('Parent Technology', 'ha-plugin'),
        'parent_item_colon'          => __('Parent Technology:', 'ha-plugin'),
        'new_item_name'              => __('New Technology Name', 'ha-plugin'),
        'add_new_item'               => __('Add New Technology', 'ha-plugin'),
        'edit_item'                  => __('Edit Technology', 'ha-plugin'),
        'update_item'                => __('Update Technology', 'ha-plugin'),
        'view_item'                  => __('View Technology', 'ha-plugin'),
        'search_items'               => __('Search Technologies', 'ha-plugin'),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'publicly_queryable'         => true,
        'show_ui'                    => true,
        'show_in_menu'               => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'rest_base'                  => 'project_technology',
        'show_tagcloud'              => true,
        'show_in_quick_edit'         => true,
        'show_admin_column'          => true,
    );

    register_taxonomy('project_technology', ["project"], $args);
}
add_action('init', 'register_project_technology_taxonomy', 0);