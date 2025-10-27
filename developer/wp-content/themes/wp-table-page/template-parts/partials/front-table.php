<?php

/**
 * Front table with Countries
 */

$countries_ids = $args['countries_ids'] ?? [];
$sidebar_rows  = $args['sidebar_rows'] ?? [];

if (empty($countries_ids) || empty($sidebar_rows)) {
    return;
}
?>
<div class="wp-table-wrapper">
    <div class="wp-table-container">
        <div class="wp-table-sidebar">
            <div class="wp-table-sidebar-header"></div>
            <div class="wp-table-sidebar-content">
                <?php foreach ($sidebar_rows as $text_cell) : ?>
                    <?php
                    get_template_part(
                        micro_partials_path('sidebar-cell'),
                        "",
                        [
                            'text_cell' => $text_cell,
                        ],
                    );
                    ?>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="wp-table-content">
            <?php
            foreach ($countries_ids as $country_id) :
                get_template_part(
                    micro_partials_path('content-column'),
                    "",
                    [
                        'country_id' => $country_id,
                    ],
                );
            endforeach; ?>
        </div>
    </div>
</div>