<?php
/**
 * Estatein Custom WordPress Theme Functions & Definitions
 *
 * @package Estatein
 */

if (!defined('ESTATEIN_VERSION')) {
    define('ESTATEIN_VERSION', '1.0.0');
}

/**
 * Theme Setup
 */
function estatein_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'estatein'),
        'footer-menu'  => __('Footer Menu', 'estatein'),
    ));

    // HTML5 markup support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action('after_setup_theme', 'estatein_setup');

/**
 * Enqueue Scripts and Styles
 */
function estatein_scripts() {
    // Google Fonts - Urbanist
    wp_enqueue_style('estatein-google-fonts', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800&display=swap', array(), null);

    // FontAwesome Icons
    wp_enqueue_style('estatein-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

    // Main Theme Style
    wp_enqueue_style('estatein-theme-style', get_stylesheet_uri(), array(), ESTATEIN_VERSION);

    // Custom CSS
    wp_enqueue_style('estatein-main-css', get_template_directory_uri() . '/assets/css/main.css', array('estatein-theme-style'), ESTATEIN_VERSION);

    // Custom JS
    wp_enqueue_script('estatein-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), ESTATEIN_VERSION, true);
}
add_action('wp_enqueue_scripts', 'estatein_scripts');

/**
 * Register Custom Post Type: Property
 */
function estatein_register_property_cpt() {
    $labels = array(
        'name'                  => _x('Properties', 'Post Type General Name', 'estatein'),
        'singular_name'         => _x('Property', 'Post Type Singular Name', 'estatein'),
        'menu_name'             => __('Properties', 'estatein'),
        'all_items'             => __('All Properties', 'estatein'),
        'add_new_item'          => __('Add New Property', 'estatein'),
        'add_new'               => __('Add New', 'estatein'),
        'edit_item'             => __('Edit Property', 'estatein'),
        'update_item'           => __('Update Property', 'estatein'),
        'view_item'             => __('View Property', 'estatein'),
        'search_items'          => __('Search Property', 'estatein'),
    );

    $args = array(
        'label'                 => __('Property', 'estatein'),
        'description'           => __('Real Estate Property Listings', 'estatein'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'            => array('property_type', 'property_status'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-home',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('property', $args);
}
add_action('init', 'estatein_register_property_cpt', 0);

/**
 * Register Custom Taxonomies for Property
 */
function estatein_register_property_taxonomies() {
    // Property Type (Villa, Apartment, Cottage, Commercial)
    register_taxonomy('property_type', array('property'), array(
        'hierarchical'      => true,
        'labels'            => array('name' => 'Property Types', 'singular_name' => 'Property Type'),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'property-type'),
        'show_in_rest'      => true,
    ));

    // Property Status (For Sale, For Rent)
    register_taxonomy('property_status', array('property'), array(
        'hierarchical'      => true,
        'labels'            => array('name' => 'Statuses', 'singular_name' => 'Status'),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'property-status'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'estatein_register_property_taxonomies', 0);

/**
 * Helper to fetch property meta fields (ACF compatible fallback)
 */
function estatein_get_property_meta($post_id = null) {
    if (!$post_id) $post_id = get_the_ID();

    $price = get_post_meta($post_id, '_property_price', true) ?: '$1,250,000';
    $bedrooms = get_post_meta($post_id, '_property_bedrooms', true) ?: '4-Bedroom';
    $bathrooms = get_post_meta($post_id, '_property_bathrooms', true) ?: '3-Bathroom';
    $sqft = get_post_meta($post_id, '_property_sqft', true) ?: '2,500 sqft';
    $location = get_post_meta($post_id, '_property_location', true) ?: 'Malibu, California';
    $badge = get_post_meta($post_id, '_property_badge', true) ?: 'Featured';

    return compact('price', 'bedrooms', 'bathrooms', 'sqft', 'location', 'badge');
}
