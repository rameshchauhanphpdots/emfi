  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2001',  2000,      400],
          ['2002',  1175,      460],
          ['2003',  6660,       1120],
          ['2004',  3030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
     // google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'index'],
          ['2004',  100],
          ['2005',  570],
          ['2006',  760 ],
          ['2007',  1210],
      ['2008',  1350]
        ]);

        var options = {
          title: '',
          curveType: 'function',
          legend: { position: 'bottom' },
      backgroundColor: { fill:'transparent'},
      axisTextStyle: { color: '#344b61' },
      titleTextStyle: { color: '#fff' },
      legendTextStyle: { color: '#ccc' },
      colors: ['white'],
      hAxis: {
          textStyle:{color: '#fff'},
        gridlines: {color:"#39536b"}
      },
    vAxis: {
        textStyle:{color: '#fff'},
      gridlines: {color:"#39536b"},
      baselineColor: {color:"#39536b"}
    }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart2'));

        chart.draw(data, options);
      }
     
      }
</script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>


</html>
