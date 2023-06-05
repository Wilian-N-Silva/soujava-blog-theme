const DOMBody = document.querySelector('body')
const navigationBar = document.querySelector('.navigation')
const menuButton = document.querySelector('.navigation__menu')

const handleButtonClick = (ev) => {
  menuButton.classList.toggle('menu__button--close')
  navigationBar.classList.toggle('navigation--open')
  DOMBody.classList.toggle('no-scroll')
}

export const handleMobileMenu = () => {
  menuButton.addEventListener('click', handleButtonClick)
} 