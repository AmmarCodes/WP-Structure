<?php

/**
 * Debug and die.
 *
 * @param  object $param variable
 */
function dd($param)
{
    echo '<pre dir="ltr">';
    if(is_array($param))
        print_r($param);
    else
        var_dump($param);
    echo '</pre>';
    die();
}

/**
 * Get asset file based on revisioned (hashed) file map (assets/manifest.json)
 *
 * @param  string $filename asset file name
 * @return string           hashed name for the asset file if key exists in manifest.json or the exact file if key doesn't exist.
 */
function asset($filename) {
    $assets = trailingslashit(get_template_directory_uri()) . 'assets/';
    $manifest_path = trailingslashit(get_template_directory()) . 'assets/manifest.json';

    if (file_exists($manifest_path)) {
        $manifest = json_decode(file_get_contents($manifest_path), true);
    } else {
        $manifest = [];
    }

    if (array_key_exists($filename, $manifest)) {
        return $assets . $manifest[$filename];
    }

    return $assets . $filename;
}
