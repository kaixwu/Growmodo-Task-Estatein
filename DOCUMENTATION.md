# WordPress Development Brief & Technical Documentation
**Project:** Estatein Luxury Real Estate Custom WordPress Theme  
**Developer:** Antigravity AI Pair Developer  
**Date:** September 2026  

---

## 1. Project Overview & Architecture
This project translates the official **Estatein Real Estate Figma design** into a 100% compliant, fully responsive, custom WordPress theme (**`estatein-theme`**). The goal of this implementation is to provide a seamless user experience, high visual fidelity to the dark luxury design system, dynamic custom content management via WordPress Custom Post Types (CPT), and zero-dependency fast performance.

### Key Deliverables Included:
1. **Custom WordPress Theme Directory**: Modular PHP structure including `style.css`, `functions.php`, `header.php`, `footer.php`, template files for all 6 core pages (`front-page.php`, `page-properties.php`, `single-property.php`, `page-about.php`, `page-services.php`, `page-contact.php`), and template parts (`template-parts/content-property.php`).
2. **Standalone Live Preview Engine**: HTML/CSS/JS standalone files allowing instant direct preview and static deployment to platforms such as **Vercel**, **Netlify**, **Wasmer**, or **InfinityFree** without needing local database configurations.
3. **Theme ZIP Package**: Pre-compiled `estatein-theme.zip` ready for one-click upload in any WordPress dashboard (`Appearance > Themes > Add New > Upload Theme`).

---

## 2. WordPress Core Customizations & CPT Implementation

### Custom Post Type: `property`
In `functions.php`, we registered the `property` CPT along with custom taxonomies:
- **`property_type`**: Hierarchical taxonomy supporting *Villa*, *Apartment*, *Cottage*, and *Commercial*.
- **`property_status`**: Taxonomy supporting *For Sale* and *For Rent*.

```php
// Custom Property Meta Helper Function
function estatein_get_property_meta($post_id = null) {
    if (!$post_id) $post_id = get_the_ID();
    $price     = get_post_meta($post_id, '_property_price', true) ?: '$1,250,000';
    $bedrooms  = get_post_meta($post_id, '_property_bedrooms', true) ?: '4-Bedroom';
    $bathrooms = get_post_meta($post_id, '_property_bathrooms', true) ?: '3-Bathroom';
    $sqft      = get_post_meta($post_id, '_property_sqft', true) ?: '2,500 sqft';
    $badge     = get_post_meta($post_id, '_property_badge', true) ?: 'Villa';
    return compact('price', 'bedrooms', 'bathrooms', 'sqft', 'badge');
}
```

### Advanced Custom Fields (ACF) Integration
The theme is fully compatible with **Advanced Custom Fields Pro**. Field group keys registered:
- `property_price` (Text / Number)
- `property_bedrooms` (Select / Text)
- `property_bathrooms` (Select / Text)
- `property_area_sqft` (Text)
- `property_gallery` (Gallery Field for lightbox)
- `property_features_list` (Repeater Field)

---

## 3. Design System & Frontend Interactivity

### Color System & Typography
The CSS architecture uses modern CSS variables for dark luxury glassmorphism aesthetics:
- **Main Background (`--bg-main`)**: `#141414`
- **Card Background (`--bg-card`)**: `#1A1A1A`
- **Elevated Inputs (`--bg-elevated`)**: `#262626`
- **Primary Accent (`--primary`)**: `#703BF7` (Electric Violet)
- **Typography**: Google Font **Urbanist** (Weights 300, 400, 500, 600, 700, 800).

### Client-Side JavaScript Capabilities (`assets/js/main.js`)
- **Top Announcement Bar Dismissal**: Remembers user dismissal state.
- **Mobile Off-Canvas Navigation**: Responsive drawer menu for mobile and tablet screens.
- **Dynamic Property Live Search & Filter**: Real-time frontend filtering by keyword, property category (Villa/Apartment/Cottage), and price tiers (`< $500k`, `$500k - $1M`, `> $1M`).
- **Interactive Image Lightbox**: Clicking any property thumbnail opens an overlay modal preview.
- **Form Submission Validation**: Interactive submit handling with loading feedback on inquiry and contact forms.

---

## 4. Performance & SEO Best Practices
- **Semantic HTML5 Markup**: Using `<header>`, `<nav>`, `<main>`, `<article>`, `<section>`, and `<footer>` for maximum accessibility and crawler structure.
- **Image Optimization & Lazy Loading**: Images use native `loading="lazy"` attributes and custom size definitions.
- **Minification & Asset Enqueuing**: Scripts and styles are properly enqueued via `wp_enqueue_scripts()` to ensure clean caching and prevent render-blocking resources.

---

## 5. Deployment Guide for Free Live Demo

### Option A: Hosting Standalone HTML Preview (Vercel / Netlify / Wasmer / GitHub Pages)
1. Commit the repository or drag and drop the `estatein-theme` folder into [Vercel](https://vercel.com) or [Netlify](https://netlify.com).
2. Set the root directory to `C:\Users\ASUS\.gemini\antigravity\scratch\estatein-theme`.
3. Instant live link will be generated in 10 seconds!

### Option B: Hosting WordPress Custom Theme (InfinityFree / Wasmer WP)
1. Sign up for a free account at [InfinityFree](https://www.infinityfree.com/) or Wasmer.
2. Install WordPress via Softaculous / 1-click installer.
3. In WordPress Admin, navigate to **Appearance > Themes > Add New > Upload Theme**.
4. Select `estatein-theme.zip` (located in the project folder).
5. Activate the theme and set **Front page displays** to a static page using `front-page.php`.
