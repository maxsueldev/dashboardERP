new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'graficoReceitasDespesas5anos',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2011', rec: 11400, desp: 15023 },
    { year: '2012', rec: 9040, desp: 9862 },
    { year: '2013', rec: 9400, desp: 9543 },
    { year: '2014', rec: 9000, desp: 8200 },
    { year: '2015', rec: 9702, desp: 6167 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['rec', 'desp'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Receitas', 'Despesas'],

  lineColors: ['red', 'green']
});