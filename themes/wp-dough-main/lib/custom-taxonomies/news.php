<?php

add_action('init', 'registerTaxonomyNews');

function registerTaxonomyNews(): void
{
    $args = [
        'labels' => [
            'name' => 'Category',
            'singular_name' => 'Categorie',
            'menu_name' => 'Categorieën',
            'all_items' => 'Alle Categorieën',
            'edit_item' => 'Categorieën bewerken',
            'view_item' => 'Categorieën bekijken',
            'update_item' => 'Categorieën bewerken',
            'add_new_item' => 'Nieuwe categorie',
            'new_item_name' => 'Nieuwe categorie',
            'search_items' => 'Zoek categorie',
        ],
        'public' => true,
        'hierarchical' => true,
        'show_ui' => true,
        'query_var' => true,
        'show_admin_column' => true,
        'show_in_rest' => false,
        'rest_base' => '',
        'show_in_quick_edit' => false,
    ];


    \register_taxonomy('newsCategory', ['news'], $args);
}