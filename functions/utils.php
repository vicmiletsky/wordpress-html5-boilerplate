<?php

/**
 * Returns public assets directory uri
 * @param string $path
 * @return string
 */
function assets_dir($path = '')
{
    if($path) {
        $path =  '/' . trim($path, '/');
    }
    return get_template_directory_uri() . '/assets' . $path;
}
