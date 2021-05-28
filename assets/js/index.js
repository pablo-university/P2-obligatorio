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
function burguerMenu() {
    this.classList.toggle("is-active");
}
const nodeBurguer = document.querySelector('.hamburger');
if (nodeBurguer){
    nodeBurguer.addEventListener('click', burguerMenu);
}

// start bootstrap tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

