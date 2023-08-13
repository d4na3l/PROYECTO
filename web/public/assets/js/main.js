/*================================ NAVBAR ==============================*/
/* Mostrar menu lateral sidebar */
const menuButtonSide = document.getElementById('boton-menu-sidebar'),
    menuButtonNavbar = document.getElementById('boton-menu-navbar'),
    menuElements = document.getElementById('side');

menuButtonNavbar.addEventListener('click', ()=>{
    menuElements.classList.toggle('sidebar__hidden')
})

menuButtonSide.addEventListener('click', () =>{
    menuElements.classList.toggle('sidebar__hidden')
})

/* Mostrar menu de opciones en sidebar */
let listElements = document.querySelectorAll('.list__button--click');

listElements.forEach(listElement => {

    listElement.addEventListener('click', () => {

        listElement.classList.toggle('arrow')

        let height = 0;
        let menu = listElement.nextElementSibling;

        if(menu.clientHeight == "0"){
            height = menu.scrollHeight;
        }

        menu.style.height = `${height}px`;
    })
})

