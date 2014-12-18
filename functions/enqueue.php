<?php

// Enqueue your stuff here

if(!is_admin()) {

    // Main style
    wp_enqueue_style( 'style_less', assets_uri('less/style.less') );

    // Libraries
    // jQuery is loaded in the footer.php from CDN before wp_footer()

    wp_enqueue_script( 'modernizr', assets_uri('js/vendor/modernizr-2.8.3.min.js'), null, null, false );

    // Example:
    // wp_enqueue_script( 'bootstrap', assets_uri('js/vendor/bootstrap.min.js'), null, null, true);
    // Set the fifth argument to 'true' to load it in footer
    // http://codex.wordpress.org/Function_Reference/wp_enqueue_script

    // Then put your main.js dependencies here
    $main_js_deps = array();

    // And load it
    wp_enqueue_script( 'main_js', assets_uri('js/main.js'), $main_js_deps, null, true );
}
