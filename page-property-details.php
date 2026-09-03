<?php
/**
 * Template Name: Property Details Page
 *
 * @package Estatein
 */

get_header();
?>

<main class="section-wrapper" style="padding-top: 40px;">
    <!-- 1. Property Header Row -->
    <div class="property-header-row">
        <div class="property-header-left">
            <h1 class="property-main-title">Seaside Serenity Villa</h1>
            <div class="property-header-sub">
                <span class="property-location-pill"><i class="fa-solid fa-location-dot"></i> Malibu, California</span>
                <span class="mobile-price-pill"><span class="price-lbl">Price</span> <strong class="price-val">$1,250,000</strong></span>
            </div>
        </div>
        <div class="property-header-right">
            <span class="price-title">Price</span>
            <div class="price-amount">$1,250,000</div>
        </div>
    </div>

    <!-- 2. Main Gallery Showcase Box -->
    <div class="property-gallery-container">
        <!-- 2 Main Showcase Images Side-by-Side -->
        <div class="gallery-main-grid">
            <div class="gallery-main-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-1.webp" alt="Seaside Serenity Villa Exterior">
            </div>
            <div class="gallery-main-card desktop-only-img">
                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=800&q=80" alt="Seaside Serenity Villa Interior">
            </div>
        </div>

        <!-- Middle Thumbnail Strip -->
        <div class="gallery-thumbs-row">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-1.webp" alt="Thumb 1" class="thumb-item active">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-2.webp" alt="Thumb 2" class="thumb-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-3.webp" alt="Thumb 3" class="thumb-item">
            <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?auto=format&fit=crop&w=400&q=80" alt="Thumb 4" class="thumb-item">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=400&q=80" alt="Thumb 5" class="thumb-item">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=400&q=80" alt="Thumb 6" class="thumb-item">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=400&q=80" alt="Thumb 7" class="thumb-item">
            <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?auto=format&fit=crop&w=400&q=80" alt="Thumb 8" class="thumb-item">
        </div>

        <!-- Bottom Gallery Navigation Bar -->
        <div class="gallery-nav-bar">
            <button class="gallery-nav-btn" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
            <div class="gallery-indicators">
                <span class="indicator-bar active"></span>
                <span class="indicator-bar"></span>
                <span class="indicator-bar"></span>
                <span class="indicator-bar"></span>
                <span class="indicator-bar"></span>
            </div>
            <button class="gallery-nav-btn" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>

    <!-- 3. Property Overview Grid -->
    <div class="property-overview-grid">
        <!-- Left: Description Card -->
        <div class="overview-card">
            <h3>Description</h3>
            <p>Discover your own piece of paradise with the Seaside Serenity Villa. T With an open floor plan, breathtaking ocean views from every room, and direct access to a pristine sandy beach, this property is the epitome of coastal living.</p>
            
            <div class="specs-pills-row">
                <div class="spec-pill-item">
                    <span class="spec-label"><i class="fa-solid fa-bed"></i> Bedrooms</span>
                    <span class="spec-value">04</span>
                </div>
                <div class="spec-pill-item">
                    <span class="spec-label"><i class="fa-solid fa-bath"></i> Bathrooms</span>
                    <span class="spec-value">03</span>
                </div>
                <div class="spec-pill-item full-width-mobile-spec">
                    <span class="spec-label"><i class="fa-solid fa-ruler-combined"></i> Area</span>
                    <span class="spec-value">2,500 Square Feet</span>
                </div>
            </div>
        </div>

        <!-- Right: Key Features & Amenities Card -->
        <div class="overview-card">
            <h3>Key Features and Amenities</h3>
            <div class="amenities-list">
                <div class="amenity-item">
                    <i class="fa-solid fa-bolt amenity-icon"></i>
                    <span>Expansive oceanfront terrace for outdoor entertaining</span>
                </div>
                <div class="amenity-item">
                    <i class="fa-solid fa-bolt amenity-icon"></i>
                    <span>Gourmet kitchen with top-of-the-line appliances</span>
                </div>
                <div class="amenity-item">
                    <i class="fa-solid fa-bolt amenity-icon"></i>
                    <span>Private beach access for morning strolls and sunset views</span>
                </div>
                <div class="amenity-item">
                    <i class="fa-solid fa-bolt amenity-icon"></i>
                    <span>Master suite with a spa-inspired bathroom and ocean-facing balcony</span>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Inquiry Section -->
    <div class="property-inquiry-layout">
        <div class="inquiry-left-col">
            <div class="section-title-group">
                <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 6px;">✦ ✦ ✦</div>
                <h2>Inquire About Seaside Serenity Villa</h2>
                <p>Interested in this property? Fill out the form below, and our real estate experts will get back to you with more details, including scheduling a viewing and answering any questions you may have.</p>
            </div>
        </div>

        <div class="inquiry-form-card">
            <form>
                <div class="form-grid-2-2">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" required>
                    </div>
                </div>

                <div class="form-grid-2-2">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter your Email" required>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" class="form-control" placeholder="Enter Phone Number">
                    </div>
                </div>

                <div class="form-group">
                    <label>Selected Property</label>
                    <div class="selected-property-input-wrapper">
                        <input type="text" class="form-control" value="Seaside Serenity Villa, Malibu, California" readonly>
                        <i class="fa-solid fa-location-dot property-pin-icon"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="4" placeholder="Enter your Message here.."></textarea>
                </div>

                <div class="form-footer-row">
                    <label class="terms-checkbox">
                        <input type="checkbox" required>
                        <span>I agree with <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></span>
                    </label>
                    <button type="submit" class="btn btn-primary" style="padding: 14px 32px;">Send Your Message</button>
                </div>
            </form>
        </div>
    </div>

    <!-- 5. Comprehensive Pricing Details Breakdown -->
    <section class="pricing-section-container">
        <div class="section-title-group" style="margin-bottom: 30px;">
            <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 6px;">✦ ✦ ✦</div>
            <h2>Comprehensive Pricing Details</h2>
            <p>At Estatein, transparency is key. We want you to have a clear understanding of all costs associated with your property investment. Below, we break down the pricing for Seaside Serenity Villa to help you make an informed decision</p>
        </div>

        <div class="pricing-note-box">
            <span class="note-badge">Note</span>
            <span class="note-text">The figures provided above are estimates and may vary depending on the property, location, and individual circumstances.</span>
        </div>

        <div class="pricing-split-layout">
            <div class="pricing-left-col">
                <span class="pricing-listing-label">Listing Price</span>
                <div class="pricing-listing-val">$1,250,000</div>
            </div>

            <div class="pricing-right-col">
                <!-- Card 1: Additional Fees -->
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <h3>Additional Fees</h3>
                        <a href="#" class="btn btn-secondary btn-sm">Learn More</a>
                    </div>
                    <div class="pricing-card-grid-2">
                        <div class="fee-item">
                            <span class="fee-name">Property Transfer Tax</span>
                            <div class="fee-val-row">
                                <span class="fee-price">$25,000</span>
                                <span class="fee-pill">Based on the sale price and local regulations</span>
                            </div>
                        </div>
                        <div class="fee-item">
                            <span class="fee-name">Legal Fees</span>
                            <div class="fee-val-row">
                                <span class="fee-price">$3,000</span>
                                <span class="fee-pill">Approximate cost for legal services, including title transfer</span>
                            </div>
                        </div>
                        <div class="fee-item">
                            <span class="fee-name">Home Inspection</span>
                            <div class="fee-val-row">
                                <span class="fee-price">$500</span>
                                <span class="fee-pill">Recommended for due diligence</span>
                            </div>
                        </div>
                        <div class="fee-item">
                            <span class="fee-name">Property Insurance</span>
                            <div class="fee-val-row">
                                <span class="fee-price">$1,200</span>
                                <span class="fee-pill">Annual cost for comprehensive property insurance</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Monthly Costs -->
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <h3>Monthly Costs</h3>
                        <a href="#" class="btn btn-secondary btn-sm">Learn More</a>
                    </div>
                    <div class="pricing-card-grid-2">
                        <div class="fee-item">
                            <span class="fee-name">Property Taxes</span>
                            <div class="fee-val-row">
                                <span class="fee-price">$1,250</span>
                                <span class="fee-pill">Approximate monthly property tax based on the sale price and local rates</span>
                            </div>
                        </div>
                        <div class="fee-item">
                            <span class="fee-name">Homeowners' Association Fee</span>
                            <div class="fee-val-row">
                                <span class="fee-price">$300</span>
                                <span class="fee-pill">Monthly fee for common area maintenance and security</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Total Initial Costs -->
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <h3>Total Initial Costs</h3>
                        <a href="#" class="btn btn-secondary btn-sm">Learn More</a>
                    </div>
                    <div class="pricing-card-grid-2">
                        <div class="fee-item">
                            <span class="fee-name">Listing Price</span>
                            <div class="fee-val-row">
                                <span class="fee-price">$1,250,000</span>
                            </div>
                        </div>
                        <div class="fee-item">
                            <span class="fee-name">Additional Fees</span>
                            <div class="fee-val-row">
                                <span class="fee-price">$29,700</span>
                                <span class="fee-pill">Property transfer tax, legal fees, inspection, insurance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Frequently Asked Questions Section (Figma Exact Match) -->
    <section class="faq-section" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="section-header" style="margin-bottom: 40px; display: flex; align-items: flex-end; justify-content: space-between;">
            <div class="section-title-group">
                <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 6px;">✦ ✦ ✦</div>
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about Estatein's services, property listings, and the real estate process. We're here to provide clarity and assist you every step of the way.</p>
            </div>
            <a href="<?php echo esc_url(home_url('/faq')); ?>" class="btn btn-secondary desktop-faq-btn">View All FAQ's</a>
        </div>

        <div class="faq-grid-3">
            <div class="faq-card">
                <h3>How do I search for properties on Estatein?</h3>
                <p>Learn how to use our user-friendly search tools to find properties that match your criteria.</p>
                <a href="#" class="btn btn-secondary btn-sm">Read More</a>
            </div>
            <div class="faq-card">
                <h3>What documents do I need to sell my property through Estatein?</h3>
                <p>Find out about the necessary documentation for listing your property with us.</p>
                <a href="#" class="btn btn-secondary btn-sm">Read More</a>
            </div>
            <div class="faq-card">
                <h3>How can I contact an Estatein agent?</h3>
                <p>Discover the different ways you can get in touch with our experienced agents.</p>
                <a href="#" class="btn btn-secondary btn-sm">Read More</a>
            </div>
        </div>

        <div class="faq-footer-controls" style="margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--border-color); display: flex; align-items: center; justify-content: space-between;">
            <a href="<?php echo esc_url(home_url('/faq')); ?>" class="btn btn-secondary mobile-faq-btn">View All FAQ's</a>
            <div class="faq-pagination-group" style="display: flex; align-items: center; gap: 12px;">
                <button class="nav-btn prev-btn" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
                <span class="faq-page-info" style="font-size: 14px; color: var(--text-muted);">01 of 03</span>
                <button class="nav-btn next-btn" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-box">
            <div class="cta-content">
                <h2>Start Your Real Estate Journey Today</h2>
                <p>Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with our team for personalized assistance.</p>
            </div>
            <a href="<?php echo esc_url(home_url('/properties')); ?>" class="btn btn-primary">Explore Properties</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
