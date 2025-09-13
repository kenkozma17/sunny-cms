const HamburgerMenu = () => {
    const mainNavigation = document.querySelector('.main-navigation');
    if(!mainNavigation) {
        return;
    }

    const hamburgerBtn = document.querySelector('.hamburger-menu-btn');
    const mobileNavigation = document.querySelector('.mobile-navigation');
    const mobileNavigationCloseBtn = document.querySelector('.mobile-navigation-close');
    const isMenuOpen = false;

    const toggleMenu = () => {
        mobileNavigation.classList.toggle('hidden');
        document.querySelector('html').classList.toggle('overflow-hidden');
    };

    hamburgerBtn.addEventListener('click', () => toggleMenu());
    mobileNavigationCloseBtn.addEventListener('click', () => toggleMenu());

}

export default HamburgerMenu;
