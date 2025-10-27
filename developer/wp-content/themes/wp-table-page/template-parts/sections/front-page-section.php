<?php

/** 
 * Front page section template
 */

$countries_query = get_countries_posts();
$countries       = $countries_query->posts ?? [];

get_template_part(
    partials_path('front-table'),
    '',
    [
        'countries' => $countries,
    ],
);
