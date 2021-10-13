<?php
	include_once("conecta.php");
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Médico', 'Quantidade'],
            <?php

            $sql = "SELECT * from medico";

            $consulta = mysqli_query($conexao, $sql);
           
            
            while ($dados = mysqli_fetch_array($consulta)) {
                print_r ($dados);
            ?>

          [<?php echo $dados['nome'];?>, <?php echo $dados['crm']; ?>],
          <?php } ?>
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>
