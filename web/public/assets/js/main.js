/*================================ LOADER ==============================*/
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

/*================================ NAVBAR ==============================*/
/* Mostrar menu lateral sidebar - left */
const menuButtonSideLeft = document.getElementById('boton-menu-sidebar-left'),
    menuButtonNavbarLeft = document.getElementById('boton-menu-navbar-left'),
    menuElementsLeft = document.getElementById('sidel');

menuButtonNavbarLeft.addEventListener('click', ()=>{
    menuElementsLeft.classList.toggle('sidebar__hidden')
})

menuButtonSideLeft.addEventListener('click', () =>{
    menuElementsLeft.classList.toggle('sidebar__hidden')
})

/* Mostrar menu de opciones en sidebar */
let listElementsLeft = document.querySelectorAll('.list__button--click');

listElementsLeft.forEach(listElement => {

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

// /* Mostrar menu lateral sidebar - right */
// const menuButtonSideRight = document.getElementById('boton-menu-sidebar-right'),
//     menuButtonNavbarRight = document.getElementById('boton-menu-navbar-right'),
//     menuElementsRight = document.getElementById('sider');

// menuButtonNavbarRight.addEventListener('click', ()=>{
//     menuElementsRight.classList.toggle('sidebar_profile_hidden')
// })

// menuButtonSideRight.addEventListener('click', () =>{
//     menuElementsRight.classList.toggle('sidebar_profile_hidden')
// })

// /* Mostrar menu de opciones en sidebar */
// let listElementsRight = document.querySelectorAll('.list__button--click');

// listElementsRight.forEach(listElement => {

//     listElement.addEventListener('click', () => {

//         listElement.classList.toggle('arrow')

//         let height = 0;
//         let menu = listElement.nextElementSibling;

//         if(menu.clientHeight == "0"){
//             height = menu.scrollHeight;
//         }

//         menu.style.height = `${height}px`;
//     })
// })