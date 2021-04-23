let watchShopDataLocal = localStorage.getItem('watchShopDataLocal');
const inputs = document.querySelectorAll('.container-client input[type*="checkbox"]');

// setear si encontro algo
if (watchShopDataLocal) {
    const arrayFromLocal = JSON.parse(watchShopDataLocal)
    
    arrayFromLocal.forEach(function(value) {
        document.querySelector(`.container-client input[value*="${value}"]`).checked = true;
    });
}

// EVENTO
inputs.forEach((elem) => {

    // EVENTO
    elem.addEventListener('click', function() {

        // traigo nuevamente datos locales
        watchShopDataLocal = localStorage.getItem('watchShopDataLocal');
        const data = JSON.parse(watchShopDataLocal);

        // si local existe
        if (watchShopDataLocal) {
            // lo vuelvo a guardar
            const valor = this.getAttribute("value");

            // si ya esta inlcuido no lo incluyas
            if (!data.includes(valor) && this.checked) {
                const newData = [...data, valor];
                localStorage.setItem('watchShopDataLocal', JSON.stringify(newData))
            }

            // eliminar si no esat checked
            if (!this.checked){
                const newData = data.filter((elem)=> elem != valor);
                localStorage.setItem('watchShopDataLocal', JSON.stringify(newData))
            }

        } else {
            // si no existe seteo por primera vez
            const data = [this.getAttribute("value")];
            localStorage.setItem('watchShopDataLocal', JSON.stringify(data))
        }

    })
});