<?php
/**
 * Template part for displaying a property card
 *
 * @package Estatein
 */

$meta = estatein_get_property_meta(get_the_ID());
$thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
if (!$thumb_url) {
    // Fallback images based on post ID
    $img_id = (get_the_ID() % 3) + 1;
    $thumb_url = get_template_directory_uri() . '/assets/images/property-' . $img_id . '.png';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('property-card'); ?>>
    <div class="property-image-container">
        <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
        <span class="property-badge"><?php echo esc_html($meta['badge']); ?></span>
    </div>

    <div class="property-content">
        <h3 class="property-title"><?php the_title(); ?></h3>
        <p class="property-description">
            <?php echo get_the_excerpt() ? esc_html(get_the_excerpt()) : 'Discover luxury living in this beautifully designed property equipped with high-end amenities and prime location access.'; ?>
        </p>

        <div class="property-features-row">
            <span class="feature-pill"><i class="fa-solid fa-bed"></i> <?php echo esc_html($meta['bedrooms']); ?></span>
            <span class="feature-pill"><i class="fa-solid fa-bath"></i> <?php echo esc_html($meta['bathrooms']); ?></span>
            <span class="feature-pill"><i class="fa-solid fa-ruler-combined"></i> <?php echo esc_html($meta['sqft']); ?></span>
        </div>

        <div class="property-footer">
            <div class="property-price-block">
                <span class="price-label">Price</span>
                <span class="price-val"><?php echo esc_html($meta['price']); ?></span>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Details</a>
        </div>
    </div>
</article>
