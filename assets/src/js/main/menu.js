/**
 * Toggle mobile nav when bugermenu icon is clicked
 */

const mobileNav = document.querySelector('#toggle-nav')
const hideMenu = () => { mobileNav.classList.remove('active') }
const showMenu = () => { mobileNav.classList.add('active') }

document.querySelector('#menu-burger').addEventListener('click', ()=> {
    const isActive = mobileNav.classList.contains('active');
    if(isActive){
        hideMenu()
    } else {
        showMenu() 
    }
})
document.querySelector('#menu-close').addEventListener('click', hideMenu)
// Hide mobile nav on window resize
window.addEventListener('resize', hideMenu)

/**
 * Toggle mobile nav submenus
 */
 mobileNav.querySelectorAll('.menu-item-has-children').forEach( submenu => {
    submenu.querySelector('a').addEventListener('click', (e)=>{
        if(e.target.classList.contains('arrow') && e.currentTarget.href){
            e.preventDefault();
            if(submenu.classList.contains('active')){
                submenu.classList.remove('active')
            } else {
                submenu.classList.add('active')
            }
        } else {
            if(submenu.classList.contains('active')){
                submenu.classList.remove('active')
            } else {
                submenu.classList.add('active')
            }
        }
    })
 })