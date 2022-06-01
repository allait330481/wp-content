<?php

add_action('init', 'post');

function post()
{
    $args = [
        'labels' => [
            'name' => 'review',
            'singular_name' => 'review',
            'all_items' => 'Al het review',
            'edit_item' => 'review bewerken',
            'add_new' => 'review aanmaken',
            'add_new_item' => 'review toevoegen',
        ],
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'supports' => [
            'title',
            'editor',
        ],
        'rewrite' => [
            'slug' => 'review',
        ],
    ];

    \register_post_type('review', $args);

}

