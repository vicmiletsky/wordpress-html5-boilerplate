<?php

/**
 * Load all stuff from ./functions dir
 */

$files = glob(__DIR__ . '/functions/*.php');

if($files) {
    foreach($files as $file) {
        if(is_file($file)) {
            require_once $file;
        }
    }
}
