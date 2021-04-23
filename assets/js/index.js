import './nprogress.js';
import './shopAsideUX.js';


// menu scroll

window.addEventListener('scroll', checkScroll);
function checkScroll(e) {

    const elem = document.querySelector('.container-client nav');
    if (window.scrollY > 0) {
        elem.classList.add('scrollDown');

    } else {
        elem.classList.remove('scrollDown');
    }
}

// new burguer menu
document.querySelector('.hamburger').addEventListener('click', burguerMenu);
function burguerMenu() {
    this.classList.toggle("is-active");
}

