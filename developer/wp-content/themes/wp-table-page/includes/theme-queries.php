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
