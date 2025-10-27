<?php

/**
 * Get countries posts
 */
function get_countries_posts(): WP_Query
{
    $args = [
        'post_type'           => 'countries',
        'posts_per_page'      => 10,
        'fields'              => 'ids',
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    ];

    return new WP_Query($args);
}


function get_sidebar_rows(): array
{
    $home_id      = get_option('page_on_front');
    $rows         = get_field('table_rows', $home_id, true) ?: [];
    $sidebar_rows = [];

    if (empty($rows)) {
        return [];
    }

    foreach ($rows as $row) {
        if (!empty($row['row_name'])) {
            $sidebar_rows[] = $row['row_name'];
        }
    }

    return $sidebar_rows;
}
