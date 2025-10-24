<?php
add_action('wp_head', function (): void {
	/*
	* Add styles for another templates here
	*/
	$styles = [
		'/dist/css/tailwind.css',
		'/dist/css/style.css',
	];

	foreach ($styles as $style) {
		$file_path = get_template_directory() . $style;

		if (file_exists($file_path)) {
			ob_start();
			include_once($file_path);
			$default_styles_content = ob_get_clean();
			printf('<style>%s</style>', trim($default_styles_content));
		}
	}
});

add_action('wp_enqueue_scripts', function (): void {
	// if (is_singular('post')) {
	// 	wp_enqueue_script(
	// 		'post',
	// 		DIST_PATH . '/js/post.js',
	// 		[],
	// 		'1.0.0',
	// 		true
	// 	);
	// }
});
