import HamburgerMenu from "./HamburgerMenu";

document.addEventListener('DOMContentLoaded', () => {
    HamburgerMenu();

    // Scroll to content on category selection
    if(window.location.href.includes('categories=') || window.location.href.includes('tags=')) {
        window.scrollTo({
            top: document.querySelector('.index-listing').getBoundingClientRect().top + window.scrollY - 120,
            behavior: 'smooth'
        });
    }
});

