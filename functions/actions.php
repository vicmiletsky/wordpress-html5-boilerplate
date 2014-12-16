<?php

/**
 * Make wp-less minify compiled output
 */
add_action('wp-less_compiler_construct_pre', function($compiler) {
    $compiler->setFormatter('compressed');
});
