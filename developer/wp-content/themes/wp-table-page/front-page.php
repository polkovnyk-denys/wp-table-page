<?php

/**
 * Front page template
 */

get_header();
?>

<section class="container">
    <?php
    get_template_part(
        sections_path('front-page-section'),
        '',
        [],
    );
    ?>
</section>

<?php
get_footer();
