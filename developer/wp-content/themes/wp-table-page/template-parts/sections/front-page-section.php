<?php

/** 
 * Front page section template
 */

$countries_query = get_countries_posts();
$countries_ids   = $countries_query->posts ?? [];
$sidebar_rows    = get_sidebar_rows();

get_template_part(
    partials_path('front-table'),
    '',
    [
        'countries_ids' => $countries_ids,
        'sidebar_rows'  => $sidebar_rows,
    ],
);
