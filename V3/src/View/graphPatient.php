<?php
session_start();

include_once('./View/LoginSoignant.php');
include_once('./model/DatabaseModel.php');

?>
<style>

table {
  font-style: normal;
  font-weight: bold;
  font-size: 15px;
  line-height: 20px;
  border-right: 1px solid rgba(255, 255, 255, 0.05);
  color: white;
  padding-left: 25px;
  font-weight: 400px;
  padding-right: 80px;
}

.title-fiche{
  margin-left:80px;
  margin-right:0px;
  margin-bottom:20px;
  font-size:40px;
  display:block;
  font-family:impact;
}
  .info {
    color:white;
    margin-top: 80px;
    width: 400px;
  }

  .input-title{
    margin-top:3px;
    font-weight:bold;
    font-size:30px;

  }

  .input-detail{
    margin-top:35px;
    font-size:25px;
  }

  .infos-container {
    padding: 15px 20px;
    width: 406px;
    height: 790px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.05);
    box-sizing: border-box;
    border-radius: 5px;
  }

.flexdetail{
  display:flex;
  margin-left:100px;
  margin-right:100px;

}

#ppimg{
  width: 150px;
  height: 160px;
  display:block;
  margin:auto;
}

.fiche-info{
  text-align:center;
  margin-top:50px;
}

.liste{
  font-family:impact;
  font-size:50px;
  text-align:center;
  margin-top: 30px;
}
.graphs{
  margin:50px;
}
}
</style>
<html>
  <head>
  <div class="liste">Détail Patient</div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Parties', 'Scores'],
<?php        
    $bdd = DatabaseModel::connect(); //on se connecte à la base 
        $sql = "SELECT * FROM score where id_patient='$index'" ;
        foreach ($bdd->query($sql) as $graph){
            echo '["'.$graph['partie'].'",'.$graph['id_score'].'],';
        }
?>
        ]);

        var options = {
// Titre du graphique
          title: 'Evolution du patient',
          titleTextStyle: {color: 'white'},
          hAxis: {title: 'Parties', titleTextStyle: {color: 'purple'}},
          vAxis: {title: 'Scores', minValue: 0,titleTextStyle: {color: 'purple'}},
          'width':1000,
          'height':500,
          backgroundColor: '#000',
          colors: [ 'green']
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
           var data = google.visualization.arrayToDataTable([
          ['Temps', 'Partie'],
  <?php        
    $bdd = DatabaseModel::connect(); //on se connecte à la base 
        $sql = "SELECT * FROM score where id_patient='$index'" ;
        foreach ($bdd->query($sql) as $graph){
            echo '["'.$graph['temps'].'",'.$graph['score_id'].'],';
        }
  ?>
        ]);


        var options = {
          colors: [ 'green'],
          backgroundColor: '#000',
          titleTextStyle: {color: 'white'},
          'width':700,
          'height':350,
          legend: { position: 'none' },
          chart: {
            title: 'Temps par partie'},
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>


<div class="flexdetail">
  <div class="info">
        <div class="infos-container">
        <span class="title-fiche">Fiche Patient</span>
        <div class="cont-title"><img src="View/assets/pp.jpg" id="ppimg"></div>
      <div class="fiche-info">
      <?php      
        $bdd = DatabaseModel::connect(); //on se connecte à la base 
        $sql = "SELECT * FROM patient where id_patient='$index'" ;
        foreach ($bdd->query($sql) as $pat){
            echo '<div class="input-detail">Nom:</div>';  
            echo '<div class="input-title">'.htmlspecialchars($pat['nom_patient']).'</div>';  
            echo '<div class="input-detail">Prenom:</div>';  
            echo ' <div class="input-title">'.htmlspecialchars($pat['prenom_patient']).'</div>';  
            echo '<div class="input-detail">Date de naissance:</div>';  
            echo '<div class="input-title">'.htmlspecialchars($pat['datenaissance_patient']).'</div>';  
            echo '<div class="input-detail">Pathologie:</div>';  
            echo '<div class="input-title">'.htmlspecialchars($pat['pathologie_patient']).'</div>';
            echo '<div class="input-detail">Numero de Telephone:</div>';  
            echo '<div class="input-title">'.htmlspecialchars($pat['telephone_patient']).'</div>';    
        }
      ?>
      </div>
    </div>
  </div>    
    <div class="graphs">
      <div id="chart_div" style="margin:20px;margin-top:20px;"></div>
      <div id="top_x_div" style="margin-left:180px;margin-bottom:50px;"></div>
    </div>

    
</div>




    </body>
</html>
