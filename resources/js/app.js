/**
 * Dhani Kusuma Prasetyo - Portfolio Scripts
 * Vanilla JavaScript untuk interaktivitas antarmuka Future Campus
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
            mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
        });
    }

    // 2. Client-side Interactive Filter for Projects (jika ada tombol data-filter)
    const filterButtons = document.querySelectorAll('[data-project-filter]');
    const projectCards = document.querySelectorAll('[data-project-category]');

    if (filterButtons.length > 0 && projectCards.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                const targetFilter = btn.getAttribute('data-project-filter');
                
                // Update active button state
                filterButtons.forEach(b => {
                    b.classList.remove('bg-electric-indigo', 'text-white', 'shadow-md');
                    b.classList.add('bg-white', 'text-midnight-navy', 'hover:bg-pale-lavender');
                });
                btn.classList.remove('bg-white', 'text-midnight-navy', 'hover:bg-pale-lavender');
                btn.classList.add('bg-electric-indigo', 'text-white', 'shadow-md');

                // Filter cards
                projectCards.forEach(card => {
                    const category = card.getAttribute('data-project-category');
                    if (targetFilter === 'all' || category === targetFilter) {
                        card.classList.remove('hidden');
                        card.style.display = 'flex';
                    } else {
                        card.classList.add('hidden');
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // 3. Salin Email ke Clipboard
    const copyEmailBtns = document.querySelectorAll('.js-copy-email');
    copyEmailBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const email = btn.getAttribute('data-email') || 'dhanikusuma220@gmail.com';
            navigator.clipboard.writeText(email).then(() => {
                const originalText = btn.getAttribute('data-original-text') || btn.innerText;
                btn.setAttribute('data-original-text', originalText);
                btn.innerText = 'Email Disalin!';
                btn.classList.add('bg-neon-lime', 'text-midnight-navy');

                setTimeout(() => {
                    btn.innerText = originalText;
                    btn.classList.remove('bg-neon-lime', 'text-midnight-navy');
                }, 2500);
            }).catch(err => {
                console.error('Gagal menyalin email:', err);
            });
        });
    });
});
