NProgress.configure({ easing: 'ease', speed: 500 });//default is 200



// INICIAME!!!!
NProgress.start();





//carga de pagina para nprogres
document.addEventListener('DOMContentLoaded', function () {
    NProgress.done();
}, false);
