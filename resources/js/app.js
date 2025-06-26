import './bootstrap';

// Banner Slider
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.slider-dot');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.opacity = i === index ? '1' : '0';
        slide.style.pointerEvents = i === index ? 'auto' : 'none'; // Ensure active slide is clickable
    });

    dots.forEach((dot, i) => {
        dot.style.opacity = i === index ? '1' : '0.5';
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

// Auto slide
setInterval(nextSlide, 5000);

// Dot controls
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentSlide = index;
        showSlide(currentSlide);
    });
});

// Scroll animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
}, observerOptions);

document.querySelectorAll('.slide-up').forEach(el => {
    observer.observe(el);
});

// Initial setup
showSlide(0);