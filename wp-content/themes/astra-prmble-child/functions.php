<?php
/**
 * Astra PRMBLE Child functions.
 */

if (! defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', 'prmb_enqueue_styles', 20);

/**
 * Load parent + child styles.
 */
function prmb_enqueue_styles(): void
{
    wp_enqueue_style('astra-theme-css', get_template_directory_uri() . '/style.css', [], wp_get_theme('astra')->get('Version'));

    wp_enqueue_style(
        'astra-prmble-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        ['astra-theme-css'],
        wp_get_theme()->get('Version')
    );
}
