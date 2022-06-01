<?php

add_action('init', 'newsPostType');

function newsPostType()
{
    $args = [
        'labels' => [
            'name' => 'Nieuws',
            'singular_name' => 'Nieuws',
            'all_items' => 'Al het nieuws',
            'edit_item' => 'Nieuws bewerken',
            'add_new' => 'Nieuws aanmaken',
            'add_new_item' => 'Nieuws toevoegen',
        ],
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => [
            'title',
            'editor',
        ],
        'rewrite' => [
            'slug' => 'nieuws',
        ],
    ];

    \register_post_type('news', $args);

}

