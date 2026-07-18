const mobileButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileButton && mobileMenu) {
    mobileButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}

const menuLinks = document.querySelectorAll('#mobile-menu a');
menuLinks.forEach((link) => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
});
