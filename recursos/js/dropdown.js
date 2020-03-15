window.onload = function() {
    
    console.log("entro");
    const menu = document.getElementById('dropdown')
menu.addEventListener('click', e => {
    e.stopPropagation()
    menu.classList.toggle('is-active')
})

 document.addEventListener('click', () => {
    menu.classList.remove('is-active')
})


}
