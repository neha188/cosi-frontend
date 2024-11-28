<?php

function mytheme_enqueue_styles() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/assets/css/output.css', [], '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

register_nav_menus(
    array('primary-menu' => 'Main Navigation')
);