<?php

declare(strict_types=1);

function setup(): void
{
    // Registers a custom menu to setup
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'dough'),
    ]);

    // Add more setup functions here
}

add_action('after_setup_theme', 'setup');
