<?php
/**
 * Front Page Template - Estatein Homepage
 *
 * @package Estatein
 */

get_header();
?>

<!-- 1. Hero Section -->
<section id="hero" class="hero-section">
    <div class="hero-grid">
        <div class="hero-content">
            <h1>Discover Your Dream Property with Estatein</h1>
            <p>Your journey to finding the perfect property begins here. Explore our curated listings to find the home that matches your lifestyle and aspirations.</p>

            <div class="hero-cta-group">
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-secondary">Learn More</a>
                <a href="<?php echo esc_url(home_url('/properties')); ?>" class="btn btn-primary">Browse Properties</a>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">200+</div>
                    <div class="stat-label">Happy Customers</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">10k+</div>
                    <div class="stat-label">Properties For Clients</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">16+</div>
                    <div class="stat-label">Years of Experience</div>
                </div>
            </div>
        </div>

        <div class="hero-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-building.webp" alt="Luxury Skyscraper Architecture">
            <div class="hero-badge-circle" title="✨ Learn More ✨ Estatein">
                <svg viewBox="0 0 100 100">
                    <path id="circlePath" fill="none" d="M 10, 50 a 40,40 0 1,1 80,0 a 40,40 0 1,1 -80,0"/>
                    <text font-size="10.5" fill="#FFFFFF" font-weight="600" letter-spacing="1">
                        <textPath href="#circlePath" startOffset="0%">✨ Learn More ✨ Estatein ✨</textPath>
                    </text>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- 2. Feature Strip Cards -->
<section id="features" class="feature-strip">
    <div class="feature-strip-grid">
        <div class="feature-card">
            <div class="feature-card-header">
                <div class="feature-icon"><i class="fa-solid fa-house"></i></div>
                <a href="<?php echo esc_url(home_url('/properties')); ?>" class="feature-arrow"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            <h3 class="feature-title">Find Your Dream Home</h3>
        </div>

        <div class="feature-card">
            <div class="feature-card-header">
                <div class="feature-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="feature-arrow"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            <h3 class="feature-title">Unlock Property Value</h3>
        </div>

        <div class="feature-card">
            <div class="feature-card-header">
                <div class="feature-icon"><i class="fa-solid fa-city"></i></div>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="feature-arrow"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            <h3 class="feature-title">Effortless Management</h3>
        </div>

        <div class="feature-card">
            <div class="feature-card-header">
                <div class="feature-icon"><i class="fa-solid fa-chart-line"></i></div>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="feature-arrow"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            <h3 class="feature-title">Smart Investments</h3>
        </div>
    </div>
</section>

<!-- 3. Featured Properties Section -->
<section id="properties" class="section-wrapper">
    <div class="section-header">
        <div class="section-title-group">
            <h2>Featured Properties</h2>
            <p>Explore our handpicked selection of featured properties. Each listing offers a glimpse into exceptional homes available through Estatein.</p>
        </div>
        <a href="<?php echo esc_url(home_url('/properties')); ?>" class="btn btn-secondary">View All Properties</a>
    </div>

    <div class="properties-grid">
        <!-- Property 1 -->
        <article class="property-card">
            <div class="property-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-1.webp" alt="Seaside Serenity Villa">
                <span class="property-badge">Villa</span>
            </div>
            <div class="property-content">
                <h3 class="property-title">Seaside Serenity Villa</h3>
                <p class="property-description">A stunning 4-bedroom beachfront villa with private infinity pool and panoramic ocean vistas.</p>
                <div class="property-features-row">
                    <span class="feature-pill"><i class="fa-solid fa-bed"></i> 4-Bedroom</span>
                    <span class="feature-pill"><i class="fa-solid fa-bath"></i> 3-Bathroom</span>
                    <span class="feature-pill"><i class="fa-solid fa-ruler-combined"></i> 3,400 sqft</span>
                </div>
                <div class="property-footer">
                    <div class="property-price-block">
                        <span class="price-label">Price</span>
                        <span class="price-val">$1,250,000</span>
                    </div>
                    <a href="<?php echo esc_url(home_url('/property-details')); ?>" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </article>

        <!-- Property 2 -->
        <article class="property-card">
            <div class="property-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-2.webp" alt="Metropolitan Haven">
                <span class="property-badge">Apartment</span>
            </div>
            <div class="property-content">
                <h3 class="property-title">Metropolitan Haven</h3>
                <p class="property-description">A sleek penthouse apartment in the heart of downtown with private balcony and skyline views.</p>
                <div class="property-features-row">
                    <span class="feature-pill"><i class="fa-solid fa-bed"></i> 2-Bedroom</span>
                    <span class="feature-pill"><i class="fa-solid fa-bath"></i> 2-Bathroom</span>
                    <span class="feature-pill"><i class="fa-solid fa-ruler-combined"></i> 1,850 sqft</span>
                </div>
                <div class="property-footer">
                    <div class="property-price-block">
                        <span class="price-label">Price</span>
                        <span class="price-val">$750,000</span>
                    </div>
                    <a href="<?php echo esc_url(home_url('/property-details')); ?>" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </article>

        <!-- Property 3 -->
        <article class="property-card">
            <div class="property-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-3.webp" alt="Rustic Retreat Cottage">
                <span class="property-badge">Cottage</span>
            </div>
            <div class="property-content">
                <h3 class="property-title">Rustic Retreat Cottage</h3>
                <p class="property-description">Charming luxury stone cottage nestled in lush greenery, featuring custom woodwork and outdoor firepit.</p>
                <div class="property-features-row">
                    <span class="feature-pill"><i class="fa-solid fa-bed"></i> 3-Bedroom</span>
                    <span class="feature-pill"><i class="fa-solid fa-bath"></i> 2-Bathroom</span>
                    <span class="feature-pill"><i class="fa-solid fa-ruler-combined"></i> 2,100 sqft</span>
                </div>
                <div class="property-footer">
                    <div class="property-price-block">
                        <span class="price-label">Price</span>
                        <span class="price-val">$550,000</span>
                    </div>
                    <a href="<?php echo esc_url(home_url('/property-details')); ?>" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </article>
    </div>

    <!-- Section Footer Navigation -->
    <div class="section-footer-nav">
        <a href="<?php echo esc_url(home_url('/properties')); ?>" class="btn btn-secondary">View All Properties</a>
        <div class="pagination-controls-wrapper">
            <button class="page-btn" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
            <span class="pagination-info">01 of 60</span>
            <button class="page-btn" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>
</section>

<!-- 4. What Our Clients Say (Testimonials) -->
<section id="testimonials" class="section-wrapper">
    <div class="section-header">
        <div class="section-title-group">
            <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 6px;">✦ ✦ ✦</div>
            <h2>What Our Clients Say</h2>
            <p>Read the real stories of clients who found their ideal homes and investments through Estatein's tailored advisory services.</p>
        </div>
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-secondary">View All Testimonials</a>
    </div>

    <div class="testimonials-grid">
        <div class="testimonial-card">
            <div class="star-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <h3 class="testimonial-title">Exceptional Service!</h3>
            <p class="testimonial-text">Our experience with Estatein was smooth and stress-free. They understood exactly what we needed for our family home.</p>
            <div class="reviewer-profile">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" alt="Wade Warren" class="reviewer-avatar">
                <div class="reviewer-info">
                    <h4>Wade Warren</h4>
                    <p>USA, California</p>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <div class="star-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <h3 class="testimonial-title">Efficient and Trustworthy</h3>
            <p class="testimonial-text">Estatein guided us through every step of our property investment. Their market insights saved us significant time and money.</p>
            <div class="reviewer-profile">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80" alt="Emelie Thomson" class="reviewer-avatar">
                <div class="reviewer-info">
                    <h4>Emelie Thomson</h4>
                    <p>USA, Florida</p>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <div class="star-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
            </div>
            <h3 class="testimonial-title">Trusted Advisors</h3>
            <p class="testimonial-text">The team's dedication to finding us the perfect villa was remarkable. I recommend Estatein without reservation.</p>
            <div class="reviewer-profile">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80" alt="John Davis" class="reviewer-avatar">
                <div class="reviewer-info">
                    <h4>John Davis</h4>
                    <p>USA, Texas</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Footer Navigation -->
    <div class="section-footer-nav">
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-secondary">View All Testimonials</a>
        <div class="pagination-controls-wrapper">
            <button class="page-btn" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
            <span class="pagination-info">01 of 10</span>
            <button class="page-btn" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>
</section>

<!-- 5. Frequently Asked Questions (FAQ) -->
<section id="faq" class="section-wrapper">
    <div class="section-header">
        <div class="section-title-group">
            <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 6px;">✦ ✦ ✦</div>
            <h2>Frequently Asked Questions</h2>
            <p>Find answers to common questions about Estatein's services, property listings, and the real estate process. We're here to provide clarity and assist you every step of the way.</p>
        </div>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">View All FAQ's</a>
    </div>

    <div class="faq-grid">
        <div class="faq-card">
            <h3>How do I search for properties on Estatein?</h3>
            <p>Learn how to use our user-friendly search tools to find properties that match your criteria.</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">Read More</a>
        </div>

        <div class="faq-card">
            <h3>What documents do I need to sell my property through Estatein?</h3>
            <p>Find out about the necessary documentation for listing your property with us.</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">Read More</a>
        </div>

        <div class="faq-card">
            <h3>How can I contact an Estatein agent?</h3>
            <p>Discover the different ways you can get in touch with our experienced agents.</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">Read More</a>
        </div>
    </div>

    <!-- Section Footer Navigation -->
    <div class="section-footer-nav">
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">View All FAQ's</a>
        <div class="pagination-controls-wrapper">
            <button class="page-btn" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
            <span class="pagination-info">01 of 10</span>
            <button class="page-btn" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>
</section>

<?php
get_footer();
