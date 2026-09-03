/**
 * Estatein Custom WordPress Theme Interactivity Script
 */
document.addEventListener('DOMContentLoaded', () => {

    // 1. Dismiss Top Announcement Bar
    const dismissBtn = document.querySelector('.announcement-bar .dismiss-btn');
    const announcementBar = document.querySelector('.announcement-bar');

    if (dismissBtn && announcementBar) {
        dismissBtn.addEventListener('click', () => {
            announcementBar.style.display = 'none';
        });
    }

    // 2. Mobile Navigation Full-Page Overlay Menu
    const mobileToggleBtn = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-navigation');

    if (mobileToggleBtn && mainNav) {
        if (!mainNav.querySelector('.mobile-menu-overlay-header')) {
            const overlayHeader = document.createElement('div');
            overlayHeader.className = 'mobile-menu-overlay-header';

            const brand = document.createElement('a');
            brand.href = 'index.html';
            brand.className = 'site-brand';
            brand.innerHTML = '<div class="brand-icon"><i class="fa-solid fa-cube"></i></div><span>Estatein</span>';

            const closeBtn = document.createElement('button');
            closeBtn.className = 'mobile-menu-close-btn';
            closeBtn.setAttribute('aria-label', 'Close Menu');
            closeBtn.textContent = 'CLOSE';

            overlayHeader.appendChild(brand);
            overlayHeader.appendChild(closeBtn);
            mainNav.prepend(overlayHeader);

            closeBtn.addEventListener('click', closeMenu);
        }

        if (!mainNav.querySelector('.mobile-nav-contact')) {
            const headerContactBtn = document.querySelector('.header-actions a.btn');
            const contactHref = headerContactBtn ? headerContactBtn.getAttribute('href') : 'contact.html';

            const contactLink = document.createElement('a');
            contactLink.href = contactHref;
            contactLink.className = 'nav-link mobile-nav-contact';
            contactLink.textContent = 'Contact Us';
            mainNav.appendChild(contactLink);
        }

        function openMenu() {
            mainNav.classList.add('is-open');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            mainNav.classList.remove('is-open');
            document.body.style.overflow = '';
        }

        mobileToggleBtn.addEventListener('click', () => {
            if (mainNav.classList.contains('is-open')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        mainNav.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    }

    // 3. Property Live Filter Logic (For Archive/Properties Page)
    const propertySearchInput = document.querySelector('#property-keyword-search');
    const propertyTypeSelect = document.querySelector('#property-type-filter');
    const propertyPriceSelect = document.querySelector('#property-price-filter');
    const propertyCards = document.querySelectorAll('.property-card');

    function filterProperties() {
        if (!propertyCards.length) return;

        const keyword = propertySearchInput ? propertySearchInput.value.toLowerCase().trim() : '';
        const selectedType = propertyTypeSelect ? propertyTypeSelect.value.toLowerCase() : 'all';
        const selectedPrice = propertyPriceSelect ? propertyPriceSelect.value : 'all';

        propertyCards.forEach(card => {
            const title = card.querySelector('.property-title')?.textContent.toLowerCase() || '';
            const description = card.querySelector('.property-description')?.textContent.toLowerCase() || '';
            const typeBadge = card.querySelector('.property-badge')?.textContent.toLowerCase() || '';
            const priceText = card.querySelector('.price-val')?.textContent.replace(/[^0-9]/g, '') || '0';
            const priceNum = parseInt(priceText, 10);

            let matchesKeyword = title.includes(keyword) || description.includes(keyword);
            let matchesType = (selectedType === 'all') || typeBadge.includes(selectedType) || title.includes(selectedType);
            let matchesPrice = true;

            if (selectedPrice === 'under-500k') matchesPrice = priceNum < 500000;
            else if (selectedPrice === '500k-1m') matchesPrice = priceNum >= 500000 && priceNum <= 1000000;
            else if (selectedPrice === 'above-1m') matchesPrice = priceNum > 1000000;

            if (matchesKeyword && matchesType && matchesPrice) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    if (propertySearchInput) propertySearchInput.addEventListener('input', filterProperties);
    if (propertyTypeSelect) propertyTypeSelect.addEventListener('change', filterProperties);
    if (propertyPriceSelect) propertyPriceSelect.addEventListener('change', filterProperties);

    // 4. Form Submit Interactivity & Validation
    const interactiveForms = document.querySelectorAll('form');
    interactiveForms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn ? submitBtn.innerHTML : 'Submit';

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Sending...';
            }

            setTimeout(() => {
                alert('Thank you! Your message/inquiry has been received. Our team will contact you shortly.');
                form.reset();
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                }
            }, 800);
        });
    });

    // 5. Lightbox for Property Gallery
    const galleryImages = document.querySelectorAll('.gallery-grid img');
    galleryImages.forEach(img => {
        img.addEventListener('click', () => {
            const overlay = document.createElement('div');
            overlay.style.position = 'fixed';
            overlay.style.top = '0';
            overlay.style.left = '0';
            overlay.style.width = '100vw';
            overlay.style.height = '100vh';
            overlay.style.background = 'rgba(0,0,0,0.9)';
            overlay.style.display = 'flex';
            overlay.style.alignItems = 'center';
            overlay.style.justifyContent = 'center';
            overlay.style.zIndex = '9999';
            overlay.style.cursor = 'pointer';

            const bigImg = document.createElement('img');
            bigImg.src = img.src;
            bigImg.style.maxHeight = '90vh';
            bigImg.style.maxWidth = '90vw';
            bigImg.style.borderRadius = '16px';
            bigImg.style.boxShadow = '0 20px 50px rgba(0,0,0,0.8)';

            overlay.appendChild(bigImg);
            document.body.appendChild(overlay);

            overlay.addEventListener('click', () => {
                overlay.remove();
            });
        });
    });

    // 6. Mobile Section Carousel / Slider (Properties, Testimonials, FAQ, etc.)
    // 6. Section Carousel / Slider (Properties, Testimonials, FAQ, etc.)
    function setupSectionSliders() {
        const footers = document.querySelectorAll('.section-footer-nav, .faq-footer-controls');

        footers.forEach(nav => {
            let section = nav.closest('section') || nav.parentElement;
            if (!section) return;

            const grid = section.querySelector('.properties-grid, .testimonials-grid, .faq-grid, .achievements-grid, .steps-grid');
            if (!grid) return;

            const cards = Array.from(grid.children);
            const prevBtn = nav.querySelector('button[aria-label="Previous"], .prev-btn');
            const nextBtn = nav.querySelector('button[aria-label="Next"], .next-btn');
            const infoText = nav.querySelector('.pagination-info, .faq-page-info, span');

            if (!cards.length || !prevBtn || !nextBtn) return;

            let currentPage = 0;

            function updateSlider() {
                const perPage = window.innerWidth <= 768 ? 1 : 3;
                const totalPages = Math.max(1, Math.ceil(cards.length / perPage));

                if (currentPage >= totalPages) currentPage = totalPages - 1;
                if (currentPage < 0) currentPage = 0;

                const startIdx = currentPage * perPage;
                const endIdx = startIdx + perPage;

                cards.forEach((card, idx) => {
                    if (idx >= startIdx && idx < endIdx) {
                        card.style.display = 'flex';
                        if (window.innerWidth <= 768) {
                            card.style.width = '100%';
                        } else {
                            card.style.width = '';
                        }
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (infoText) {
                    const pageStr = String(currentPage + 1).padStart(2, '0');
                    const totalStr = String(totalPages).padStart(2, '0');
                    infoText.textContent = `${pageStr} of ${totalStr}`;
                }
            }

            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const perPage = window.innerWidth <= 768 ? 1 : 3;
                const totalPages = Math.max(1, Math.ceil(cards.length / perPage));
                currentPage = (currentPage - 1 + totalPages) % totalPages;
                updateSlider();
            });

            nextBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const perPage = window.innerWidth <= 768 ? 1 : 3;
                const totalPages = Math.max(1, Math.ceil(cards.length / perPage));
                currentPage = (currentPage + 1) % totalPages;
                updateSlider();
            });

            window.addEventListener('resize', updateSlider);
            updateSlider();
        });
    }

    setupSectionSliders();

    // 7. Office Location Tabs Filter
    const officeFilterBtns = document.querySelectorAll('.office-filter-btn');
    const officeCards = document.querySelectorAll('.office-card');

    if (officeFilterBtns.length && officeCards.length) {
        officeFilterBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                officeFilterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;
                officeCards.forEach(card => {
                    if (filter === 'all' || card.dataset.category === filter) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // 8. Property Showcase Gallery Interactive Slider & Thumbnails
    const galleryContainer = document.querySelector('.property-gallery-container');
    if (galleryContainer) {
        const thumbs = galleryContainer.querySelectorAll('.thumb-item');
        const mainImgs = galleryContainer.querySelectorAll('.gallery-main-card img');
        const navBtns = galleryContainer.querySelectorAll('.gallery-nav-btn');
        const indicators = galleryContainer.querySelectorAll('.indicator-bar');

        let currentIndex = 0;
        const total = thumbs.length;

        function setActiveImage(index) {
            currentIndex = (index + total) % total;

            // Update thumbnails
            thumbs.forEach((t, i) => {
                if (i === currentIndex) {
                    t.classList.add('active');
                    t.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                } else {
                    t.classList.remove('active');
                }
            });

            // Update indicator bars
            indicators.forEach((ind, i) => {
                if (i === currentIndex % (indicators.length || 1)) {
                    ind.classList.add('active');
                } else {
                    ind.classList.remove('active');
                }
            });

            // Swap BOTH main images (left & right) on slide change
            if (thumbs[currentIndex]) {
                if (mainImgs[0]) {
                    mainImgs[0].src = thumbs[currentIndex].src;
                }
                if (mainImgs[1]) {
                    const nextIndex = (currentIndex + 1) % total;
                    mainImgs[1].src = thumbs[nextIndex].src;
                }
            }
        }

        // Thumbnail click listeners
        thumbs.forEach((thumb, idx) => {
            thumb.addEventListener('click', () => {
                setActiveImage(idx);
            });
        });

        // Prev & Next arrow button listeners
        if (navBtns.length >= 2) {
            navBtns[0].addEventListener('click', (e) => {
                e.preventDefault();
                setActiveImage(currentIndex - 1);
            });
            navBtns[1].addEventListener('click', (e) => {
                e.preventDefault();
                setActiveImage(currentIndex + 1);
            });
        }
    }

    // 9. Mobile FAQ Slider Setup
    function setupMobileFaqSliders() {
        const faqSections = document.querySelectorAll('.faq-section');
        faqSections.forEach(section => {
            const cards = section.querySelectorAll('.faq-card');
            const prevBtn = section.querySelector('.prev-btn');
            const nextBtn = section.querySelector('.next-btn');
            const infoText = section.querySelector('.faq-page-info');

            if (!cards.length || !prevBtn || !nextBtn) return;

            let currentIndex = 0;
            const total = cards.length;

            function updateFaqSlider() {
                if (window.innerWidth <= 768) {
                    cards.forEach((card, idx) => {
                        if (idx === currentIndex) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                    if (infoText) {
                        const curStr = String(currentIndex + 1).padStart(2, '0');
                        const totStr = String(total).padStart(2, '0');
                        infoText.textContent = `${curStr} of ${totStr}`;
                    }
                } else {
                    cards.forEach(card => {
                        card.style.display = '';
                    });
                }
            }

            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                currentIndex = (currentIndex - 1 + total) % total;
                updateFaqSlider();
            });

            nextBtn.addEventListener('click', (e) => {
                e.preventDefault();
                currentIndex = (currentIndex + 1) % total;
                updateFaqSlider();
            });

            window.addEventListener('resize', updateFaqSlider);
            updateFaqSlider();
        });
    }

    setupMobileFaqSliders();
});
