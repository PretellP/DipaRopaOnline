let togglerBtn = document.querySelector('.toggle-btn');
let menuOptions = document.querySelector('.menu-options');

togglerBtn.onclick = function(){
    menuOptions.classList.toggle('expand-menu');
    togglerBtn.classList.toggle('x-transform');
}

window.addEventListener('scroll', function(){
    var menu = document.querySelector('header');
    menu.classList.toggle('sticky', window.scrollY > 0);
})

$(document).ready(function(){
    $('ul li.submenu').click(function(){
        $(this).siblings().removeClass('expand-submenu');
        $(this).toggleClass('expand-submenu'); 
    })
})
