<?php
session_start();

include_once('./View/LoginSoignant.php');
?>

<div class="liste">Liste Patients</div>
  <table class="table">
  <thead>
    <tr>
      <th scope="row">
          <span>Id</span>
      </th >
      <th scope="row">
          <span>Nom</span>
      </th>
      <th scope="row">
          <span>Prenom</span>
      </th>
      <th scope="row">
          <span>Date de naissance</span>
      </th>
      <th scope="row">
          <span>Pathologie</span>
      </th>
      <th scope="row">
          <span>Numero de Telephone</span>
      </th>
      <th scope="row">
          <span>Soignant Matricule</span>
      </th>
      <th scope="row">
          <span>Détail</span>
      </th>
      
    </tr>
    </thead>
    <?php
  
  foreach ($matriculeSoignant as $patient) {
      $id = $patient->getIdPatient();
      $name = $patient->getNomPatient();
      $firstName = $patient->getPrenomPatient();
      $date = $patient->getDatePatient();
      $patho = $patient->getPathoPatient();
      $telephone = $patient->getTelephonePatient();
      $mat = $patient->getMatriculeSoignant();

      echo "
      <tbody>
      <tr>
      <td>$id</td>
      <td>$name</td>
      <td>$firstName</td>
      <td>$date</td>
      <td>$patho</td>
      <td>$telephone</td>      
      <td>$mat</td>
      <td ><a href=\"index.php?page=8&index=$id\" class=\"btn btn-primary\">Vue de détail</a> </td>
      </tr>
      </tbody>";
}
?>

</table>
<footer id="Footer">
    <section class="container">
      <div>Copyright © 2021-2022 JMS Corporation Tous Droits Réservés</div>
      <div>Codeur, Développeur (c) 2021 OMRANI Sofiane</div>
    </section>
  </footer>
<style>

footer {
    /* width:500px; */
    margin: 0 auto;
    margin-top: 10%;
    padding: 3%;
    width: 50%;
    height: 12%;
    text-align: center;
    font-size: 15px;

  }
thead {
  background-color:#8F0F9D;
  height:40px;
}

table{
  background-color:DarkSlateGray;
  border: 1px solid white;
  box-sizing: border-box;
  border-radius: 5px;
  margin-bottom: 10px;
  color : black;
  font-family:impact;
  width: 1200px;
  height:200px;
  margin-top: 50px;
  margin-left:auto;
  margin-right:auto;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
}

.liste{
  font-family:impact;
  font-size:50px;
  text-align:center;
  margin-top: 30px;
}

td{
  text-align:center;
}

.headertab {
  display: flex;
  height: 42px;
  border: 1px solid rgba(255, 255, 255, 0.1);
  box-sizing: border-box;
  border-radius: 5px;
  margin-bottom: 10px;
  background: purple;
}

.bodytab {
  display: block;
  height: 50px;
  box-sizing: border-box;
  border-radius: 5px;
  margin-bottom: 15px;
  background: rgba(255, 255, 255, 0.1);
}

.table-data {
  font-style: normal;
  font-weight: bold;
  font-size: 18px;
  line-height: 30px;
  color: white;
  padding-left:60px;
}

.table-head {
  font-style: normal;
  font-weight: bold;
  font-size: 18px;
  line-height: 30px;
  color: white;
  padding-left: 10px;
  padding-right: 50px;
}

</style>
