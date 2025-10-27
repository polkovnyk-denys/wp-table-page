<?php

/**
 * Register post type "Countries"
 */
function register_post_type_countries(): void
{
    $labels = [
        'name'               => _x('Countries', 'post type general name'),
        'singular_name'      => _x('Country', 'post type singular name'),
        'add_new'            => _x('Add country', 'advice'),
        'add_new_item'       => __('Add new country'),
        'edit_item'          => __('Edit country'),
        'new_item'           => __('New country'),
        'all_items'          => __('All countries'),
        'view_item'          => __('Watch country'),
        'search_items'       => __('Search for countries'),
        'not_found'          => __('No country found'),
        'not_found_in_trash' => __('No deleted countries'),
        'parent_item_colon'  => '',
        'menu_name'          =>  __('Countries')
    ];

    $args = [
        'labels'             => $labels,
        'description'        => 'Countries',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'countries'],
        'capability_type'    => 'post',
        'taxonomies'         => ['category'],
        'supports'           => ['title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'page-attributes', 'post-formats', 'revisions'],
        'has_archive'        => true,
    ];

    register_post_type('countries', $args);
}

add_action('init', 'register_post_type_countries');
