<?php
/**
 * Template Name: Properties Page
 *
 * @package Estatein
 */

get_header();
?>

<div class="section-wrapper" style="padding-top: 40px;">
    <!-- Section 1: Hero Header & Filters -->
    <div class="section-header" style="margin-bottom: 30px;">
        <div class="section-title-group">
            <h1>Find Your Dream Property</h1>
            <p>Welcome to Estatein, where your dream property awaits in every corner of our beautiful world. Explore our curated selection of properties, each offering a unique story and a chance to redefine your life. With categories to suit every dreamer, your journey</p>
        </div>
    </div>

    <!-- Filter Search Container Box -->
    <div class="property-search-container">
        <!-- Search Input Bar (Row 1) -->
        <div class="search-input-row">
            <input type="text" id="property-keyword-search" class="search-main-input" placeholder="Search For A Property">
            <button class="btn btn-primary search-btn"><i class="fa-solid fa-magnifying-glass"></i> <span class="search-btn-text">Find Property</span></button>
        </div>

        <!-- Filter Dropdowns (Row 2) -->
        <div class="filter-dropdowns-row">
            <div class="filter-select-wrapper">
                <i class="fa-solid fa-location-dot filter-icon"></i>
                <select class="filter-select">
                    <option value="all">Location</option>
                    <option value="malibu">Malibu</option>
                    <option value="downtown">Downtown</option>
                </select>
                <i class="fa-solid fa-chevron-down arrow-icon"></i>
            </div>

            <div class="filter-select-wrapper">
                <i class="fa-solid fa-house filter-icon"></i>
                <select id="property-type-filter" class="filter-select">
                    <option value="all">Property Type</option>
                    <option value="villa">Villa</option>
                    <option value="apartment">Apartment</option>
                    <option value="cottage">Cottage</option>
                </select>
                <i class="fa-solid fa-chevron-down arrow-icon"></i>
            </div>

            <div class="filter-select-wrapper">
                <i class="fa-solid fa-money-bill-wave filter-icon"></i>
                <select id="property-price-filter" class="filter-select">
                    <option value="all">Pricing Range</option>
                    <option value="under-500k">Under $500,000</option>
                    <option value="500k-1m">$500,000 - $1,000,000</option>
                    <option value="above-1m">Above $1,000,000</option>
                </select>
                <i class="fa-solid fa-chevron-down arrow-icon"></i>
            </div>

            <div class="filter-select-wrapper">
                <i class="fa-solid fa-box filter-icon"></i>
                <select class="filter-select">
                    <option value="all">Property Size</option>
                    <option value="small">Under 2,000 sqft</option>
                    <option value="medium">2,000 - 3,500 sqft</option>
                    <option value="large">3,500+ sqft</option>
                </select>
                <i class="fa-solid fa-chevron-down arrow-icon"></i>
            </div>

            <div class="filter-select-wrapper">
                <i class="fa-solid fa-calendar filter-icon"></i>
                <select class="filter-select">
                    <option value="all">Build Year</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                </select>
                <i class="fa-solid fa-chevron-down arrow-icon"></i>
            </div>
        </div>
    </div>

    <!-- Section 2: Discover a World of Possibilities (Properties Grid) -->
    <div class="section-header" style="margin-top: 60px;">
        <div class="section-title-group">
            <h2>Discover a World of Possibilities</h2>
            <p>Explore our latest available listings across prime metropolitan and luxury coastal locations.</p>
        </div>
    </div>

    <div class="properties-grid">
        <!-- Property 1 -->
        <article class="property-card">
            <div class="property-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-1.png" alt="Seaside Serenity Villa">
                <span class="property-badge">Villa</span>
            </div>
            <div class="property-content">
                <h3 class="property-title">Seaside Serenity Villa</h3>
                <p class="property-description">A stunning 4-bedroom beachfront villa with private infinity pool and panoramic ocean vistas in Malibu.</p>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-2.png" alt="Metropolitan Haven">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/property-3.png" alt="Rustic Retreat Cottage">
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
        <div class="pagination-controls-wrapper">
            <span class="pagination-info">01 of 03</span>
            <button class="page-btn" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="page-btn" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>

    <!-- Section 3: Let's Make It Happen (Inquiry Form Section from Figma) -->
    <div class="inquiry-form-container" style="background: var(--bg-card); border: 1px solid var(--border-color); padding: 50px; border-radius: var(--radius-xl); margin-top: 80px; margin-bottom: 80px;">
        <div class="section-title-group" style="margin-bottom: 40px;">
            <h2>Let's Make It Happen</h2>
            <p>Ready to take the first step towards your dream property? Fill out the form below, and our real estate specialists will assist you.</p>
        </div>

        <form>
            <!-- Row 1: 4 Inputs -->
            <div class="form-grid-4">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Enter First Name" required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter Last Name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter your Email" required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" class="form-control" placeholder="Enter Phone Number">
                </div>
            </div>

            <!-- Row 2: 4 Selects -->
            <div class="form-grid-4">
                <div class="form-group">
                    <label>Preferred Location</label>
                    <div class="form-select-wrapper">
                        <select class="form-control">
                            <option>Select Location</option>
                            <option>Malibu, California</option>
                            <option>Downtown Los Angeles</option>
                            <option>Miami, Florida</option>
                        </select>
                        <i class="fa-solid fa-chevron-down arrow-icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label>Property Type</label>
                    <div class="form-select-wrapper">
                        <select class="form-control">
                            <option>Select Property Type</option>
                            <option>Villa</option>
                            <option>Apartment</option>
                            <option>Cottage</option>
                        </select>
                        <i class="fa-solid fa-chevron-down arrow-icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label>No. of Bathrooms</label>
                    <div class="form-select-wrapper">
                        <select class="form-control">
                            <option>Select no. of Bedrooms</option>
                            <option>1 Bathroom</option>
                            <option>2 Bathrooms</option>
                            <option>3+ Bathrooms</option>
                        </select>
                        <i class="fa-solid fa-chevron-down arrow-icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label>No. of Bedrooms</label>
                    <div class="form-select-wrapper">
                        <select class="form-control">
                            <option>Select no. of Bedrooms</option>
                            <option>1 Bedroom</option>
                            <option>2 Bedrooms</option>
                            <option>3+ Bedrooms</option>
                        </select>
                        <i class="fa-solid fa-chevron-down arrow-icon"></i>
                    </div>
                </div>
            </div>

            <!-- Row 3: Budget + Preferred Contact Method -->
            <div class="form-grid-2-2">
                <div class="form-group">
                    <label>Budget</label>
                    <div class="form-select-wrapper">
                        <select class="form-control">
                            <option>Select Budget</option>
                            <option>$300k - $500k</option>
                            <option>$500k - $1M</option>
                            <option>$1M - $3M</option>
                            <option>$3M+</option>
                        </select>
                        <i class="fa-solid fa-chevron-down arrow-icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label>Preferred Contact Method</label>
                    <div class="contact-method-group">
                        <label class="contact-method-pill active">
                            <span><i class="fa-solid fa-phone" style="margin-right: 8px;"></i> Enter Your Number</span>
                            <input type="radio" name="contact_method" checked>
                            <span class="radio-dot"></span>
                        </label>
                        <label class="contact-method-pill">
                            <span><i class="fa-regular fa-envelope" style="margin-right: 8px;"></i> Enter Your Email</span>
                            <input type="radio" name="contact_method">
                            <span class="radio-dot"></span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Row 4: Message -->
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" rows="5" placeholder="Enter your Message here.."></textarea>
            </div>

            <!-- Row 5: Footer -->
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

<?php
get_footer();
