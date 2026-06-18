import { createIcons, ArrowUpRight, Github, Linkedin, Mail, MapPin, Menu, X } from 'lucide';
import './bootstrap';

createIcons({
    icons: {
        ArrowUpRight,
        Github,
        Linkedin,
        Mail,
        MapPin,
        Menu,
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
