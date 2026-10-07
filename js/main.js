/* ==========================================================
   Vaal Adventures - site scripts
   1. Mobile menu        4. Gallery lightbox
   2. Language switcher  5. Price calculator
   3. Back to top        6. Booking form validation
   7. Home page photo slider
   ========================================================== */

document.getElementById('year').textContent = new Date().getFullYear();

/* ---------- 1. Mobile menu ---------- */
const navToggle = document.querySelector('.nav-toggle');
const mainNav = document.getElementById('main-nav');

navToggle.addEventListener('click', () => {
    const isOpen = mainNav.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', isOpen);
    navToggle.innerHTML = isOpen ? '<i class="fa-solid fa-xmark"></i>' : '<i class="fa-solid fa-bars"></i>';
});

/* ---------- 2. Language switcher (English / Sesotho) ---------- */
// English text lives in the HTML. Sesotho text lives in js/lang-st.js (window.sesotho).
const langButton = document.querySelector('.lang-toggle');

function setLanguage(lang) {
    document.querySelectorAll('[data-i18n]').forEach((el) => {
        if (!el.dataset.en) {
            el.dataset.en = el.textContent.trim();
        }
        const key = el.dataset.i18n;
        el.textContent = lang === 'st' && window.sesotho[key] ? window.sesotho[key] : el.dataset.en;
    });
    document.documentElement.lang = lang;
    langButton.querySelector('span').textContent = lang === 'st' ? 'English' : 'Sesotho';
    try { localStorage.setItem('lang', lang); } catch (e) { /* storage blocked: language just won't be remembered */ }
}

langButton.addEventListener('click', () => {
    setLanguage(document.documentElement.lang === 'st' ? 'en' : 'st');
});

let savedLang = 'en';
try { savedLang = localStorage.getItem('lang') || 'en'; } catch (e) { /* use English */ }
if (savedLang === 'st') {
    setLanguage('st');
}

/* ---------- 3. Back to top ---------- */
const backToTop = document.querySelector('.back-to-top');

window.addEventListener('scroll', () => {
    backToTop.classList.toggle('show', window.scrollY > 400);
});
backToTop.addEventListener('click', () => window.scrollTo({ top: 0 }));

/* ---------- 4. Gallery lightbox (gallery page only) ---------- */
const lightbox = document.querySelector('.lightbox');

if (lightbox) {
    const photos = Array.from(document.querySelectorAll('.gallery-grid button'));
    const lbImage = lightbox.querySelector('img');
    const lbCaption = lightbox.querySelector('p');
    let current = 0;

    function showPhoto(index) {
        current = (index + photos.length) % photos.length;
        lbImage.src = photos[current].dataset.full;
        lbImage.alt = photos[current].dataset.caption;
        lbCaption.textContent = photos[current].dataset.caption;
    }

    function closeLightbox() {
        lightbox.classList.remove('open');
        photos[current].focus();
    }

    photos.forEach((button, index) => {
        button.addEventListener('click', () => {
            showPhoto(index);
            lightbox.classList.add('open');
            lightbox.querySelector('.lb-close').focus();
        });
    });

    lightbox.querySelector('.lb-close').addEventListener('click', closeLightbox);
    lightbox.querySelector('.lb-prev').addEventListener('click', () => showPhoto(current - 1));
    lightbox.querySelector('.lb-next').addEventListener('click', () => showPhoto(current + 1));
    lightbox.addEventListener('click', (event) => {
        if (event.target === lightbox) closeLightbox();
    });

    document.addEventListener('keydown', (event) => {
        if (!lightbox.classList.contains('open')) return;
        if (event.key === 'Escape') closeLightbox();
        if (event.key === 'ArrowLeft') showPhoto(current - 1);
        if (event.key === 'ArrowRight') showPhoto(current + 1);
    });
}

/* ---------- 5. Price calculator (tours page only) ---------- */
const calcTour = document.getElementById('calc-tour');

if (calcTour) {
    const calcAdults = document.getElementById('calc-adults');
    const calcChildren = document.getElementById('calc-children');
    const calcTotal = document.getElementById('calc-total');

    function updateTotal() {
        const option = calcTour.options[calcTour.selectedIndex];
        const adults = Math.max(0, parseInt(calcAdults.value, 10) || 0);
        const children = Math.max(0, parseInt(calcChildren.value, 10) || 0);
        const total = adults * option.dataset.adult + children * option.dataset.child;
        calcTotal.textContent = 'R' + total.toLocaleString('en-ZA');
    }

    [calcTour, calcAdults, calcChildren].forEach((el) => el.addEventListener('input', updateTotal));
    updateTotal();
}

/* ---------- 6. Booking form validation (contact page only) ---------- */
// The same rules are checked again in PHP, because JavaScript can be switched off.
const bookingForm = document.getElementById('booking-form');

if (bookingForm) {
    const today = new Date().toISOString().slice(0, 10);
    const rules = {
        name: (v) => v.trim() !== '' || 'Please enter your name.',
        email: (v) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v) || 'Please enter a valid email address.',
        phone: (v) => /^[0-9 +()-]{10,15}$/.test(v) || 'Please enter a valid phone number.',
        tour: (v) => v !== '' || 'Please choose a tour.',
        date: (v) => (v !== '' && v >= today) || 'Please choose a date from today onwards.',
        adults: (v) => (v >= 1 && v <= 30) || 'Adults must be between 1 and 30.',
    };

    function validateField(name) {
        const input = bookingForm.elements[name];
        const result = rules[name](input.value);
        const error = input.parentElement.querySelector('.field-error');
        const isValid = result === true;
        input.classList.toggle('invalid', !isValid);
        input.setAttribute('aria-invalid', !isValid);
        error.textContent = isValid ? '' : result;
        return isValid;
    }

    Object.keys(rules).forEach((name) => {
        bookingForm.elements[name].addEventListener('blur', () => validateField(name));
    });

    bookingForm.addEventListener('submit', (event) => {
        const allValid = Object.keys(rules).map(validateField).every(Boolean);
        if (!allValid) {
            event.preventDefault();
            bookingForm.querySelector('.invalid').focus();
        }
    });
}

/* ---------- 7. Home page photo slider ---------- */
const slider = document.querySelector('.slider');

if (slider) {
    const slides = slider.querySelectorAll('.slide');
    const caption = slider.querySelector('.slide-caption');
    let currentSlide = 0;

    function showSlide(index) {
        slides[currentSlide].classList.remove('active');
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        caption.textContent = slides[currentSlide].dataset.caption;
    }

    slider.querySelector('.slide-prev').addEventListener('click', () => showSlide(currentSlide - 1));
    slider.querySelector('.slide-next').addEventListener('click', () => showSlide(currentSlide + 1));
    setInterval(() => showSlide(currentSlide + 1), 6000);
}
