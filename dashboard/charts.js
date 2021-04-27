/* globals Chart:false, feather:false */

/* (function () {
  'use strict'

  feather.replace()

  // Graphs
  var ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Sunday',
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday'
      ],
      datasets: [{
        data: [
          15339,
          21345,
          18483,
          24003,
          23489,
          24092,
          12034
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: 'green',
        borderWidth: 4,
        pointBackgroundColor: 'green'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
})() */




// chartMoment
(function () {

  // getContentFromPHP
  const node = document.getElementById('chartBrands');
  const dataLabels = node.getAttribute('data-labels');
  const dataData = node.getAttribute('data-data');
  console.log({dataData, dataLabels});
 
  console.log(dataLabels.split(' '))

  const labels = dataLabels.split(' ');
  const data = {
    labels: labels,
    datasets: [{
      label: 'Marcas (cantidad por marca)',
      backgroundColor: 'rgb(255, 100, 130, .70)',
      borderColor: 'rgb(255, 99, 132)',
      data: [10, 60, 5, 80, 20, 30, 45],
    }]
  };
  const config = {
    // type: 'line',
    type: 'bar',
    data,
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


  var chartBrands = new Chart(
    node,
    config
  );
})()