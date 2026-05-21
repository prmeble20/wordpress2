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

/**
 * Shortcode: [prmb_featured_products limit="8" columns="4" orderby="date" order="DESC"]
 */
function prmb_featured_products_shortcode(array $atts = []): string
{
    if (! class_exists('WooCommerce')) {
        return '';
    }

    $atts = shortcode_atts(
        [
            'limit' => 8,
            'columns' => 4,
            'orderby' => 'date',
            'order' => 'DESC',
            'category' => '',
        ],
        $atts,
        'prmb_featured_products'
    );

    $shortcode = sprintf(
        '[products limit="%d" columns="%d" orderby="%s" order="%s" visibility="visible" category="%s"]',
        (int) $atts['limit'],
        (int) $atts['columns'],
        esc_attr((string) $atts['orderby']),
        esc_attr((string) $atts['order']),
        esc_attr((string) $atts['category'])
    );

    return do_shortcode($shortcode);
}
add_shortcode('prmb_featured_products', 'prmb_featured_products_shortcode');

/**
 * Header mini-cart with item counter.
 */
function prmb_header_mini_cart_shortcode(): string
{
    if (! function_exists('WC')) {
        return '';
    }

    $count = WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
    $url = wc_get_cart_url();

    return sprintf(
        '<a class="prmb-mini-cart" href="%s" aria-label="Koszyk"><span class="prmb-mini-cart__icon">🛒</span><span class="prmb-mini-cart__count">%d</span></a>',
        esc_url($url),
        (int) $count
    );
}
add_shortcode('prmb_mini_cart', 'prmb_header_mini_cart_shortcode');
