const toggleForm = () => {
    const container = document.querySelector('.container');
    container.classList.toggle('active');
  };

  const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.navbar__menu')

menu.addEventListener('click',function(){
    menu.classList.toggle('is-active')
    menuLinks.classList.toggle('active');

});