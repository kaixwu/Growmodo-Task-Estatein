<?php
/**
 * Main Index Template - Fallback for WordPress Loop
 *
 * @package Estatein
 */

if (is_front_page() || is_home()) {
    include(get_template_directory() . '/front-page.php');
    return;
}

get_header();
?>

<div class="section-wrapper" style="padding-top: 40px;">
    <div class="section-header">
        <div class="section-title-group">
            <h1><?php is_archive() ? the_archive_title() : _e('Blog & Articles', 'estatein'); ?></h1>
            <p><?php is_archive() ? the_archive_description() : _e('Stay informed with the latest insights, market trends, and real estate news from Estatein.', 'estatein'); ?></p>
        </div>
    </div>

    <div class="properties-grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="property-card">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="property-image-container">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                <div class="property-content">
                    <h3 class="property-title"><?php the_title(); ?></h3>
                    <p class="property-description"><?php echo get_the_excerpt(); ?></p>
                    <div class="property-footer">
                        <span class="price-label"><?php echo get_the_date(); ?></span>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read Article</a>
                    </div>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p><?php _e('No posts found.', 'estatein'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
