</main><!-- #main-content -->

<!-- Global CTA Section (Rendered on ALL pages before footer) -->
<section class="cta-section">
    <div class="cta-box">
        <div class="cta-content">
            <h2>Start Your Real Estate Journey Today</h2>
            <p>Your dream property is just a click away. Whether you're looking for a new home, a strategic investment, or expert real estate advice, Estatein is here to assist you every step of the way. Take the first step towards your real estate goals and explore our available properties or get in touch with our team for personalized assistance.</p>
        </div>
        <a href="<?php echo esc_url(home_url('/properties')); ?>" class="btn btn-primary">Explore Properties</a>
    </div>
</section>

<!-- Footer Component -->
<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-main-grid">
            <!-- Brand & Newsletter Column -->
            <div class="footer-brand-col">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-brand">
                    <div class="brand-icon">
                        <i class="fa-solid fa-cube"></i>
                    </div>
                    <span>Estatein</span>
                </a>

                <form class="footer-newsletter-box">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" placeholder="Enter Your Email" required>
                    <button type="submit" aria-label="Send"><i class="fa-solid fa-paper-plane"></i></button>
                </form>
            </div>

            <!-- Column 1: Home -->
            <div class="footer-column">
                <h4>Home</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/#hero')); ?>">Hero Section</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#features')); ?>">Features</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#properties')); ?>">Properties</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#testimonials')); ?>">Testimonials</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#faq')); ?>">FAQ's</a></li>
                </ul>
            </div>

            <!-- Column 2: About Us -->
            <div class="footer-column">
                <h4>About Us</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">Our Story</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">Our Works</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">How It Works</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">Our Team</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>">Our Clients</a></li>
                </ul>
            </div>

            <!-- Column 3: Properties -->
            <div class="footer-column">
                <h4>Properties</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/properties')); ?>">Portfolio</a></li>
                    <li><a href="<?php echo esc_url(home_url('/properties')); ?>">Categories</a></li>
                </ul>
                <div class="footer-contact-mobile" style="display:none;">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Form</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Our Offices</a></li>
                    </ul>
                </div>
            </div>

            <!-- Column 4: Services -->
            <div class="footer-column">
                <h4>Services</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>">Valuation Mastery</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>">Strategic Marketing</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>">Negotiation Wizardry</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>">Closing Success</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>">Property Management</a></li>
                </ul>
            </div>

            <!-- Column 5: Contact Us -->
            <div class="footer-column">
                <h4>Contact Us</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Form</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Our Offices</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom-bar">
        <div class="footer-bottom-container">
            <div class="footer-bottom-left">
                <span>@2026 Estatein. All Rights Reserved.</span>
                <a href="#">Terms &amp; Conditions</a>
            </div>

            <div class="social-links">
                <a href="#" class="social-icon-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="social-icon-btn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="social-icon-btn" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="social-icon-btn" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
