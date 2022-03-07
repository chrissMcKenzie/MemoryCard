<?php

include_once('./model/DatabaseModel.php');
include_once('./model/SoignantClass.php');
include_once('./View/Admin.php');

?>
<div class="info">
        <div class="infos-container">
        <span class="title-fiche">Votre Profil</span>
        <div class="cont-title"><img src="View/assets/pp.jpg" id="ppimg"></div>
      <div class="fiche-info">
      <?php      
           $mail= $_SESSION['mail_soignant'];
           $bdd = DatabaseModel::connect(); //on se connecte à la base 
           $sql = "SELECT * FROM soignant where mail_soignant='$mail'" ;
         
           foreach ($bdd->query($sql) as $soig){
             echo '<div class="input-detail">Nom:</div>';  
             echo '<div class="input-title">'.$soig['nom_soignant'].'</div>';  
             echo '<div class="input-detail">Prenom:</div>';  
             echo ' <div class="input-title">'.$soig['prenom_soignant'].'</div>';  
             echo '<div class="input-detail">Date de naissance:</div>';  
             echo '<div class="input-title">'.$soig['datenaissance_soignant'].'</div>';  
             echo '<div class="input-detail">Poste:</div>';  
             echo '<div class="input-title">'.$soig['poste_soignant'].'</div>';
             echo '<div class="input-detail">Email:</div>';  
             echo '<div class="input-title">'.$soig['mail_soignant'].'</div>';    
         }
      ?>
      </div>
</div>

<style>


.title-fiche{
  margin-left:240px;
  margin-right:0px;
  margin-top:20px;
  margin-bottom:20px;
  font-size:40px;
  display:block;
  font-family:impact;
}
  .info {
    color:white;
    margin: auto;
    width: 500px;
    display:block;    
  }

  .input-title{
    margin-top:3px;
    font-weight:bold;
    font-size:20px;

  }

  .input-detail{
    margin-top:35px;
    font-size:15px;
  }

  .infos-container {
    margin-top: 50px;
    width: 700px;
    height: 700px;
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
}

}