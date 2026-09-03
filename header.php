<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Top Announcement Banner -->
<div class="announcement-bar">
    <span>✨ Discover Your Dream Property with Estatein <a href="<?php echo esc_url(home_url('/properties')); ?>">Learn More</a></span>
    <button class="dismiss-btn" aria-label="Dismiss Announcement">&times;</button>
</div>

<!-- Main Header -->
<header class="site-header">
    <div class="header-container">
        <!-- Brand Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-brand">
            <div class="brand-icon">
                <i class="fa-solid fa-cube"></i>
            </div>
            <span>Estatein</span>
        </a>

        <!-- Main Navigation -->
        <nav class="main-navigation">
            <ul class="nav-links">
                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo is_front_page() ? 'active' : ''; ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="<?php echo is_page('about') ? 'active' : ''; ?>">About Us</a></li>
                <li><a href="<?php echo esc_url(home_url('/properties')); ?>" class="<?php echo (is_page('properties') || is_singular('property') || is_post_type_archive('property')) ? 'active' : ''; ?>">Properties</a></li>
                <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="<?php echo is_page('services') ? 'active' : ''; ?>">Services</a></li>
            </ul>
        </nav>

        <!-- Right Header Actions -->
        <div class="header-actions">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">Contact Us</a>
            <button class="mobile-menu-toggle" aria-label="Toggle Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header>
<main id="main-content">
