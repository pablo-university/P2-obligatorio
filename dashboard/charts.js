
// me deja en dashboard
const href = window.location.href;
const fetchConfig = {
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }

};


// chartUserType
(async function () {


  let response = await fetch(`${href}/api/?target=user_type`, fetchConfig);

  response = await response.json();

  const data = {
    labels: response.labels,
    datasets: [{
      label: 'My First Dataset',
      data: response.data,
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(75, 192, 192)',
        'rgb(255, 205, 86)',
        'rgb(201, 203, 207)'
      ]
    }]
  };
  const config = {
    // type: 'line',
    type: 'polarArea',
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
      }

    }
  };

  const node = document.getElementById('chartUserType');
  var chartUserType = new Chart(
    node,
    config
  );
})();


// chartMoment --------------------
(async function () {

  console.log('soy moment')
  let response = await fetch(`${href}/api/?target=brand`, fetchConfig);

  response = await response.json();
  // console.log(response)

  const data = {
    labels: response.labels,
    datasets: [{
      label: 'Marcas (cantidad por marca)',
      backgroundColor: 'rgb(255, 100, 130, .70)',
      borderColor: 'rgb(255, 99, 132)',
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
      }

    }
  };

  const node = document.getElementById('chartBrands');
  var chartBrands = new Chart(
    node,
    config
  );
})();