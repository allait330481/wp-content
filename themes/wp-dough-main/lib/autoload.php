<?php

/**
 * @param string $folder the directory within the lib directory
 */
function include_php_files(string $folder): void
{
    $folder = __DIR__.DIRECTORY_SEPARATOR.$folder;

    foreach (glob("{$folder}/*.php") as $filename) {
        include_once $filename;
    }
}

include_php_files('functions');
include_php_files('actions');
include_php_files('filters');
include_php_files('custom-post-types');
include_php_files('custom-taxonomies');
