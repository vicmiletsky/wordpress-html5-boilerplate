<?php

// Load stuff from ./functions dir in proper order

$functions_files = array(
    'utils.php', // Utils go first
    'enqueue.php',
    'actions.php',
    // Add yours
);

if($functions_files) {
    foreach($functions_files as $file) {
        if(is_file(__DIR__ . '/functions/' . $file)) {
            require_once __DIR__ . '/functions/' . $file;
        }
    }
}
