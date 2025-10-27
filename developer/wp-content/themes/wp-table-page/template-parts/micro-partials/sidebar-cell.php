<?php

$text_cell = $args['text_cell'] ?? '';

?>

<div class="wp-table-cell sidebar-cell">
    <div class="text-center">
        <div class="line-clamp-2">
            <?php echo esc_html($text_cell); ?>
        </div>
    </div>
</div>