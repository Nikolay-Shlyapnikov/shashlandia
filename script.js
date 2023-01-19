const headerBurgerButton = document.querySelector('.page-header__burger'),
    headerNav = document.querySelector('.page-header__nav'),
    headerLogo = document.querySelector('.page-header__logo');

headerBurgerButton.addEventListener('click', (e) => {
    headerBurgerButton.classList.toggle('active');
    headerNav.classList.toggle('active');
    headerLogo.classList.toggle('active');
});