<?php
/**
 * Template Name: Contact Page
 *
 * @package Estatein
 */

get_header();
?>

<div class="section-wrapper" style="padding-top: 40px;">
    <!-- 1. Hero Header & Quick Contact Info Strip -->
    <div class="section-header">
        <div class="section-title-group">
            <h1>Get in Touch with Estatein</h1>
            <p>Have questions about a property listing, looking to sell, or interested in property management? Reach out to our dedicated team today.</p>
        </div>
    </div>

    <div class="feature-strip-grid" style="margin-bottom: 80px;">
        <div class="feature-card">
            <div class="feature-icon"><i class="fa-solid fa-envelope"></i></div>
            <h3 class="feature-title" style="margin-top: 12px;">Email Us</h3>
            <p style="color: var(--text-muted); font-size: 14px; margin-top: 4px;">info@estatein.com</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon"><i class="fa-solid fa-phone"></i></div>
            <h3 class="feature-title" style="margin-top: 12px;">Call Us</h3>
            <p style="color: var(--text-muted); font-size: 14px; margin-top: 4px;">+1 (800) 555-0199</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon"><i class="fa-solid fa-location-dot"></i></div>
            <h3 class="feature-title" style="margin-top: 12px;">Main Office</h3>
            <p style="color: var(--text-muted); font-size: 14px; margin-top: 4px;">123 Business Road, NY, USA</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon"><i class="fa-solid fa-share-nodes"></i></div>
            <h3 class="feature-title" style="margin-top: 12px;">Social Channels</h3>
            <p style="color: var(--text-muted); font-size: 14px; margin-top: 4px;">@EstateinOfficial</p>
        </div>
    </div>

    <!-- 2. Let's Connect (Contact Form Section) -->
    <div class="inquiry-form-container connect-form-box" style="background: var(--bg-card); border: 1px solid var(--border-color); padding: 50px; border-radius: var(--radius-xl); margin-bottom: 80px;">
        <div class="section-title-group" style="margin-bottom: 40px;">
            <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 6px;">✦ ✦ ✦</div>
            <h2>Let's Connect</h2>
            <p>We're excited to connect with you and learn more about your real estate goals. Use the form below to get in touch with Estatein.</p>
        </div>

        <form>
            <!-- Row 1: First Name, Last Name, Email -->
            <div class="form-grid-3">
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
            </div>

            <!-- Row 2: Phone, Inquiry Type, How Did You Hear About Us -->
            <div class="form-grid-3">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="tel" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label>Inquiry Type</label>
                    <div class="form-select-wrapper">
                        <select class="form-control">
                            <option>Select Inquiry Type</option>
                            <option>Buying a Property</option>
                            <option>Selling a Property</option>
                            <option>Property Management</option>
                        </select>
                        <i class="fa-solid fa-chevron-down arrow-icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label>How Did You Hear About Us?</label>
                    <div class="form-select-wrapper">
                        <select class="form-control">
                            <option>Select</option>
                            <option>Search Engine (Google)</option>
                            <option>Social Media</option>
                            <option>Friend / Referral</option>
                        </select>
                        <i class="fa-solid fa-chevron-down arrow-icon"></i>
                    </div>
                </div>
            </div>

            <!-- Row 3: Message -->
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" rows="5" placeholder="Enter your Message here.."></textarea>
            </div>

            <!-- Row 4: Footer -->
            <div class="form-footer-row">
                <label class="terms-checkbox">
                    <input type="checkbox" required>
                    <span>I agree with <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></span>
                </label>
                <button type="submit" class="btn btn-primary" style="padding: 14px 32px;">Send Your Message</button>
            </div>
        </form>
    </div>

    <!-- 3. Office Locations -->
    <section style="margin-bottom: 80px;">
        <div class="section-header">
            <div class="section-title-group">
                <h2>Discover Our Office Locations</h2>
                <p>Estatein is here to serve you across multiple locations. Whether you're looking to meet our team, discuss real estate opportunities, or simply drop by for a chat, we have offices conveniently located to serve your needs. Explore the categories below to find the Estatein office nearest to you</p>
            </div>
        </div>

        <!-- Office Filter Buttons (Figma Exact Match) -->
        <div class="office-filter-pills">
            <button class="office-filter-btn active" data-filter="all">All</button>
            <button class="office-filter-btn" data-filter="regional">Regional</button>
            <button class="office-filter-btn" data-filter="international">International</button>
        </div>

        <div class="offices-grid">
            <!-- Card 1: Main Headquarters -->
            <div class="office-card" data-category="regional">
                <span class="office-category-label">Main Headquarters</span>
                <h3 class="office-title">123 Estatein Plaza, City Center, Metropolis</h3>
                <p class="office-desc">Our main headquarters serve as the heart of Estatein. Located in the bustling city center, this is where our core team of experts operates, driving the excellence and innovation that define us.</p>
                <div class="office-contact-pills">
                    <span class="office-pill"><i class="fa-regular fa-envelope"></i> info@estatein.com</span>
                    <span class="office-pill"><i class="fa-solid fa-phone"></i> +1 (123) 456-7890</span>
                    <span class="office-pill"><i class="fa-solid fa-location-dot"></i> Metropolis</span>
                </div>
                <a href="https://maps.google.com" target="_blank" class="btn btn-primary office-dir-btn">Get Direction</a>
            </div>

            <!-- Card 2: Regional Offices -->
            <div class="office-card" data-category="regional">
                <span class="office-category-label">Regional Offices</span>
                <h3 class="office-title">456 Urban Avenue, Downtown District, Metropolis</h3>
                <p class="office-desc">Estatein's presence extends to multiple regions, each with its own dynamic real estate landscape. Discover our regional offices, staffed by local experts who understand the nuances of their respective markets.</p>
                <div class="office-contact-pills">
                    <span class="office-pill"><i class="fa-regular fa-envelope"></i> info@restatein.com</span>
                    <span class="office-pill"><i class="fa-solid fa-phone"></i> +1 (123) 628-7890</span>
                    <span class="office-pill"><i class="fa-solid fa-location-dot"></i> Metropolis</span>
                </div>
                <a href="https://maps.google.com" target="_blank" class="btn btn-primary office-dir-btn">Get Direction</a>
            </div>
        </div>
    </section>

    <!-- 4. Explore Estatein's World (Figma Bento Grid Format) -->
    <section class="explore-bento-container" style="margin-bottom: 80px;">
        <div class="explore-bento-grid">
            <!-- Row 1: Left Image 1, Right Image 2 -->
            <div class="bento-card img-card">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" alt="Office Workstations">
            </div>
            <div class="bento-card img-card">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Corporate Team Portrait">
            </div>

            <!-- Row 2: Left Image 3, Right 2 Small Images (4 & 5) -->
            <div class="bento-card img-card">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80" alt="Team Table Collaboration">
            </div>
            <div class="bento-subgrid-2">
                <div class="bento-card img-card">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=500&q=80" alt="Male Executive">
                </div>
                <div class="bento-card img-card">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=500&q=80" alt="Female Executive">
                </div>
            </div>

            <!-- Row 3: Left Text Box, Right Image 6 -->
            <div class="bento-card text-card">
                <div style="color: var(--text-muted); font-size: 14px; margin-bottom: 8px;">✦ ✦ ✦</div>
                <h2>Explore Estatein's World</h2>
                <p>Step inside the world of Estatein, where professionalism meets warmth, and expertise meets passion. Our gallery offers a glimpse into our team and workspaces, inviting you to get to know us better.</p>
            </div>
            <div class="bento-card img-card">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Business Meeting Handshake">
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
