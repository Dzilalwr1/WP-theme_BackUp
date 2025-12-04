document.addEventListener('DOMContentLoaded', function() {
    
    // Logika untuk Menu Mobile (Hamburger)
    const navToggle = document.getElementById('nav-toggle');
    const primaryMenu = document.querySelector('.primary-menu');
    
    if (navToggle && primaryMenu) {
        navToggle.addEventListener('click', function() {
            primaryMenu.classList.toggle('nav-active');
            const isExpanded = primaryMenu.classList.contains('nav-active');
            navToggle.setAttribute('aria-expanded', isExpanded);
            navToggle.classList.toggle('active');
        });
        
        const menuLinks = primaryMenu.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (this.parentElement.classList.contains('menu-item-has-children')) {
                    return;
                }
                primaryMenu.classList.remove('nav-active');
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.classList.remove('active');
            });
        });
    }

    const dropdownToggles = document.querySelectorAll('.primary-menu .menu-item-has-children > a');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(event) {
            
            event.stopPropagation(); 
            
            event.preventDefault(); 
            
            const subMenu = this.nextElementSibling;
            if (subMenu && subMenu.classList.contains('sub-menu')) {
                subMenu.classList.toggle('dropdown-open');
            }
        });
    });
    
    const openMenuButton = document.getElementById('buka-menu-popup');
    const closeMenuButton = document.getElementById('tutup-menu-popup');
    const menuOverlay = document.getElementById('menu-popup-overlay');
    
    if (openMenuButton && closeMenuButton && menuOverlay) {
        openMenuButton.addEventListener('click', function(event) {
            event.preventDefault();
            menuOverlay.style.display = 'flex';
            document.body.style.overflow = 'hidden'; 
        });
        
        closeMenuButton.addEventListener('click', function() {
            menuOverlay.style.display = 'none';
            document.body.style.overflow = '';
        });
        
        menuOverlay.addEventListener('click', function(event) {
            if (event.target === menuOverlay) {
                menuOverlay.style.display = 'none';
                document.body.style.overflow = '';
            }
        });
    }

    // Logika Smooth Scroll
    const smoothScrollLinks = document.querySelectorAll('.primary-menu a[href^="#"]');
    smoothScrollLinks.forEach(link => {
        if (!link.parentElement.classList.contains('menu-item-has-children')) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const targetId = this.getAttribute('href');
                try {
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: 'smooth' });
                    }
                } catch (e) {
                    console.warn('Target smooth scroll not found:', targetId);
                }
            });
        }
    });

});