<?php

require_once ABSPATH . 'wp-admin/includes/plugin.php';

if (! is_plugin_active('advanced-custom-fields-pro/acf.php')) {
	return false;
}

require_once  __DIR__ . '/fields/acf_sync_rows.php';

function add_new_fields(): void
{
	acf()->fields->register_field_type(new acf_sync_rows());
}
add_action('acf/include_fields', 'add_new_fields', 5);
