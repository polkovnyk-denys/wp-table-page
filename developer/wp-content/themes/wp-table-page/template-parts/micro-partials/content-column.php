<?php

$country_id = $args['country_id'] ?? null;

if (empty($country_id)) {
    return;
}

$country_title = get_the_title($country_id);
$country_cells = get_field('country_table', $country_id, true) ?: [];

?>

<div class="wp-table-cell content-column">
    <div class="wp-table-column-header text-center">
        <?php echo esc_html($country_title); ?>
    </div>

    <div class="wp-table-column-content">
        <?php
        foreach ($country_cells as $cell) :
            get_template_part(
                micro_partials_path('content-cell'),
                "",
                [
                    'text_cell' => $cell['row_value'] ?? '',
                ],
            );
        endforeach; ?>
    </div>
</div>