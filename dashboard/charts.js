/*
--- COLORES ----
violeta
rgb(50, 30, 60)

verde
30,60,50 

gris
'rgb(150, 150, 150)'
*/

// toma un contexto CanvasGradient, e inserta un gradiente para usar luego en barras
const ctxForGradient = document.getElementById('chartMoment').getContext("2d");
const gradientFill = ctxForGradient.createLinearGradient(0, 200, 0, 1);
gradientFill.addColorStop(0, "rgba(50, 30, 60, 1)");
gradientFill.addColorStop(1, "rgba(50, 30, 60, .6)");
// ---------------------

// me deja en dashboard
const href = window.location.href;
const fetchConfig = {
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }

};
// --------------------


// chartUserType
(async function () {

  const node = document.getElementById('chartUserType');

  if (node) {
    let response = node.getAttribute('data-chart');
    response = await JSON.parse(response);

    const data = {
      labels: response.labels,
      datasets: [{
        label: 'My First Dataset',
        data: response.data,
        backgroundColor: [
          'rgb(50, 30, 60)',
          'rgb(30, 50, 60)',
          'rgb(50, 30, 60)',
          'rgb(150, 150, 150)'
        ]
      }]
    };
    const config = {
      // type: 'line',
      type: 'doughnut',
      data: data,
      options: {
        plugins: {
          legend: {
            display: true,
            position: 'bottom'
          },
          title: {
            display: true,
            text: 'Gráfico tipo de usuarios'
          }
        },
        responsive: true,
        maintainAspectRatio: true,
        aspectRatio: 1.8

      }
    };


    var chartUserType = new Chart(
      node,
      config
    );
  }

})();





// chartMoment
(async function () {

  const node = document.getElementById('chartMoment');

  if (node) {
    let response = node.getAttribute('data-chart');
    response = await JSON.parse(response);

    // console.log(response)


    const data = {
      labels: response.labels,
      datasets: [
        {
          label: 'Momento',
          data: response.data,
          borderColor: 'white',
          backgroundColor: gradientFill,//'rgb(50, 30, 60)'
          fill: true// relleno?
        }
      ]
    };
    const config = {
      // type: 'line',
      type: 'line',
      data: data,
      options: {
        plugins: {
          legend: {
            display: true,
            position: 'bottom'
          },
          title: {
            display: true,
            text: 'Gráfico Momento'
          }
        }

      },
      responsive: true,
      maintainAspectRatio: true,
      aspectRatio: 2
    };


    var chartUserType = new Chart(
      node,
      config
    );
  }
})();


// chartBrands --------------------
(async function () {

  const node = document.getElementById('chartBrands');

  if (node) {

    let response = node.getAttribute('data-chart');
    response = await JSON.parse(response);

    const data = {
      labels: response.labels,
      datasets: [{
        label: 'Marcas (cantidad por marca)',
        backgroundColor: gradientFill,//'rgb(50, 30, 60)'
        data: response.data,
      }]
    };
    const config = {
      // type: 'line',
      type: 'bar',
      data: data,
      options: {
        plugins: {
          legend: {
            display: true,
            position: 'bottom'
          },
          title: {
            display: true,
            text: 'Gráfico de marcas'
          }
        },
        responsive: true,
        maintainAspectRatio: true,
        aspectRatio: 4
      }
    };


    var chartBrands = new Chart(
      node,
      config
    );
  }

})();