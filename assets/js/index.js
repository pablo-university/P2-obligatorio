import './nprogress.js';
// import './shopAsideUX.js';


// menu scroll
// (agregue este ir ya que sino en dashboard no encontraba y tiraba errores)
if (document.querySelector('.container-client')) {
    window.addEventListener('scroll', checkScroll);
    function checkScroll(e) {

        const elem = document.querySelector('.container-client nav');
        if (window.scrollY > 0) {
            elem.classList.add('scrollDown');

        } else {
            elem.classList.remove('scrollDown');
        }
    }
}


// new burguer menu
document.querySelector('.hamburger').addEventListener('click', burguerMenu);
function burguerMenu() {
    this.classList.toggle("is-active");
}

