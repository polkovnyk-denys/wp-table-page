<?php

class acf_sync_rows extends acf_field
{

    private $home_id;
    private $front_page_rows;

    static $index_fields = 0;

    function initialize()
    {
        $this->name     = 'sync-rows';
        $this->label    = __("Sync rows");
        $this->category = __("New fields");
        $this->defaults = [
            'layout'            => 'vertical',
            'choices'           => [],
            'default_value'     => '',
            'other_choice'      => 0,
            'save_other_choice' => 0,
            'allow_null'        => 0,
            'return_format'     => 'value',
        ];

        $this->home_id         = get_option('page_on_front');
        $this->front_page_rows = get_field('table_rows', $this->home_id, true);
    }

    public function render_field(array $field): void
    {
        $table_fields = $this->front_page_rows;

        echo '<div class="acf-sync-rows">';
        echo '<input type="text" name="index_fields" value="' . $table_fields[self::$index_fields]['row_name'] . '" readonly disabled>';
        echo '</div>';

        self::$index_fields++;
    }
}
