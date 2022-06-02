<?php

include_once('./model/DatabaseModel.php');
include_once('./model/SoignantClass.php');
include_once('./View/Admin.php');

?>
<div class="info">
        <div class="infos-container">
        <span class="title-fiche">Votre Profil</span>
      <div class="fiche-info">        
        <div class="cont-title"><img src="View/assets/pp.jpg" id="ppimg"></div>

      <?php      
           $mail= $_SESSION['mail_soignant'];
           $bdd = DatabaseModel::connect(); //on se connecte à la base 
           $sql = "SELECT * FROM soignant where mail_soignant='$mail'" ;
         
           foreach ($bdd->query($sql) as $soig){
             echo '<div class="input-detail">Nom:</div>';  
             echo '<div class="input-title">'.htmlspecialchars($soig['nom_soignant']).'</div>';  
             echo '<div class="input-detail">Prenom:</div>';  
             echo ' <div class="input-title">'.htmlspecialchars($soig['prenom_soignant']).'</div>';  
             echo '<div class="input-detail">Date de naissance:</div>';  
             echo '<div class="input-title">'.htmlspecialchars($soig['datenaissance_soignant']).'</div>';  
             echo '<div class="input-detail">Poste:</div>';  
             echo '<div class="input-title">'.htmlspecialchars($soig['poste_soignant']).'</div>';
             echo '<div class="input-detail">Email:</div>';  
             echo '<div class="input-title">'.htmlspecialchars($soig['mail_soignant']).'</div>';    
         }
      ?>
      </div>
</div>

<style>


footer{
 /* width:500px; */
    margin-top: 800px;
    padding: 3%;
    width: 50%;
    height: 12%;
    text-align: center;
    font-size: 15px;
}
.title-fiche{
  margin:20px;
  font-size:40px;
  display:block;
  margin-left: 200px;
  margin-right: 200px;
  font-family:impact;
}

  .info {
    color:white;
    margin: auto;
    width: 500px;
    display:block;    
  }

  body{
    height: 1000px;
  }

  .input-title{
    margin-top:3px;
    font-weight:bold;
    font-size:20px;
  }

  .infos-container {
    margin-top: 100px;
    width: 600px;
    height:500px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.05);
    box-sizing: border-box;
    border-radius: 5px;   
     margin-bottom:50px;
  }

#ppimg{
  width: 150px;
  height: 160px;
  display:block;
  margin:auto;
}

.fiche-info{
  text-align:center;
margin-top:20px;
height:200px;
}
