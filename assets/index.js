// maneja amburguesa
document.querySelector('#burguer-menu').addEventListener('click', activaMenu);

function activaMenu(e) {
    this.classList.toggle('active');
}


// menu scroll
window.addEventListener('scroll', checkScroll);
function checkScroll(e) {

    const elem = document.querySelector('.container-client nav');
    if (window.scrollY > 0) {
        elem.classList.add('scrollDown');
        control = false;
        // window.scrollTo(0, window.scrollY + 15)
    } else {
        elem.classList.remove('scrollDown');
    }


}