const hideMenu = () => {document.querySelector('#toggle-nav').classList.remove('active') }
const showMenu = () => {document.querySelector('#toggle-nav').classList.add('active') }

document.querySelector('#menu-burger').addEventListener('click', ()=> {
    const isActive = document.querySelector('#toggle-nav').classList.contains('active');
    if(isActive){
        hideMenu()
    } else {
        showMenu() 
    }
})
document.querySelector('#menu-close').addEventListener('click', hideMenu)
window.addEventListener('resize', hideMenu)