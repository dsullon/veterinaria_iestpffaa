// DOM HTML
// Document Object Model
// addEventListener => Permite registrar un evento
document.addEventListener('DOMContentLoaded', function(){
    let menuMobileBtn = document.querySelector('.menu-mobile img');
    let navegacionPrincipal = document.querySelector('.header__navegacion');
    if(menuMobileBtn){
        menuMobileBtn.addEventListener('click', function(){
            navegacionPrincipal.classList.toggle('mostrar');
        });
    }
});