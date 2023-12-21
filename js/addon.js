
window.addEventListener('keydown', e => {
    if (e.code === 'KeyP')
        config.PAUSED = !config.PAUSED;
    if (e.key === ' ')
        splatStack.push(parseInt(Math.random() * 20) + 5);
});
function openBurger(e){
    document.querySelector(".menu_mobile_navigation").classList.toggle("active")

}

