// maneja amburguesa
document.querySelector('#burguer-menu').addEventListener('click', activaMenu);

function activaMenu(e) {
    this.classList.toggle('active');
}