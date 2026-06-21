import { createIcons, ArrowUpRight, ChevronLeft, ChevronRight, Github, Linkedin, Mail, MapPin, Menu, Send, X } from 'lucide';
import './bootstrap';

createIcons({
    icons: {
        ArrowUpRight,
        ChevronLeft,
        ChevronRight,
        Github,
        Linkedin,
        Mail,
        MapPin,
        Menu,
        Send,
        X,
    },
});

const navToggle = document.querySelector('[data-nav-toggle]');
const navMenu = document.querySelector('[data-nav-menu]');

navToggle?.addEventListener('click', () => {
    const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
    navToggle.setAttribute('aria-expanded', String(!isOpen));
    navMenu?.classList.toggle('hidden', isOpen);
    navMenu?.classList.toggle('grid', !isOpen);
});

const routeLoader = document.querySelector('[data-route-loader]');

document.querySelectorAll('a[href]').forEach((link) => {
    link.addEventListener('click', (event) => {
        const href = link.getAttribute('href');

        if (!href || href.startsWith('#') || href.startsWith('mailto:') || href.startsWith('tel:')) {
            return;
        }

        const target = new URL(href, window.location.href);
        const isModifiedClick = event.metaKey || event.ctrlKey || event.shiftKey || event.altKey || link.target === '_blank';
        const isSamePageHash = target.pathname === window.location.pathname && target.hash;

        if (isModifiedClick || target.origin !== window.location.origin || isSamePageHash) {
            return;
        }

        routeLoader?.classList.add('is-active');
    });
});

window.addEventListener('pageshow', () => {
    routeLoader?.classList.remove('is-active');
});

const slider = document.querySelector('[data-project-slider]');
const sliderTrack = document.querySelector('[data-project-slider-track]');
const previousButton = document.querySelector('[data-project-slider-prev]');
const nextButton = document.querySelector('[data-project-slider-next]');

if (slider instanceof HTMLElement && sliderTrack instanceof HTMLElement) {
    const originalWidth = () => sliderTrack.scrollWidth / 2;
    const slideDistance = () => Math.min(slider.clientWidth * 0.86, 420);

    const normalizeScroll = () => {
        const loopWidth = originalWidth();

        if (!loopWidth) {
            return;
        }

        if (slider.scrollLeft >= loopWidth) {
            slider.scrollLeft -= loopWidth;
        } else if (slider.scrollLeft <= 0) {
            slider.scrollLeft += loopWidth;
        }
    };

    slider.scrollLeft = 1;
    slider.addEventListener('scroll', () => window.requestAnimationFrame(normalizeScroll), { passive: true });

    slider.addEventListener('wheel', (event) => {
        if (Math.abs(event.deltaY) <= Math.abs(event.deltaX)) {
            return;
        }

        event.preventDefault();
        slider.scrollBy({ left: event.deltaY, behavior: 'auto' });
    }, { passive: false });

    let isDragging = false;
    let dragStartX = 0;
    let dragStartScroll = 0;

    slider.addEventListener('pointerdown', (event) => {
        isDragging = true;
        dragStartX = event.clientX;
        dragStartScroll = slider.scrollLeft;
        slider.classList.add('is-dragging');
        slider.setPointerCapture(event.pointerId);
    });

    slider.addEventListener('pointermove', (event) => {
        if (!isDragging) {
            return;
        }

        slider.scrollLeft = dragStartScroll - (event.clientX - dragStartX);
    });

    const stopDragging = () => {
        isDragging = false;
        slider.classList.remove('is-dragging');
    };

    slider.addEventListener('pointerup', stopDragging);
    slider.addEventListener('pointercancel', stopDragging);
    slider.addEventListener('pointerleave', stopDragging);

    previousButton?.addEventListener('click', () => {
        slider.scrollBy({ left: -slideDistance(), behavior: 'smooth' });
    });

    nextButton?.addEventListener('click', () => {
        slider.scrollBy({ left: slideDistance(), behavior: 'smooth' });
    });
}
