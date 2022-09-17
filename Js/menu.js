const hamburguer = document.querySelector(".hamburguer");
const menu = document.querySelector(".menu-navegacion");

console.log(menu)
console.log(hamburguer)


// APARICION DEL MENU Y RETIRO
hamburguer.addEventListener("click", () => {
    menu.classList.toggle("spread")
})



// MUESTRA A QUE COSA LE DOY CLICK
window.addEventListener("click", e => {
    if (menu.classList.contains("spread")

        && e.target != menu && e.target != hamburguer) {
        menu.classList.toggle("spread")
    }
})
