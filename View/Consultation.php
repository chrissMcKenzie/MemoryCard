<?php
session_start();

include_once('./View/LoginSoignant.php');
?>
<div class="liste">Liste Patients</div>
  <table id="table">
    <tr class="headertab">
      <th class="table-head">
          <span>Matricule</span>
      </th >
      <th class="table-head">
          <span>Nom</span>
      </th>
      <th class="table-head">
          <span>Prenom</span>
      </th>
      <th class="table-head">
          <span>Date de naissance</span>
      </th>
      <th class="table-head">
          <span>Pathologie</span>
      </th>
      <th class="table-head">
          <span>Numero de Telephone</span>
      </th>
      <th class="table-head">
          <span>Détail</span>
      </th>
    </tr>
    <?php
  
  foreach ($patientList as $patient) {
      $id = $patient->getIdPatient();
      $name = $patient->getNomPatient();
      $firstName = $patient->getPrenomPatient();
      $date = $patient->getDatePatient();
      $patho = $patient->getPathoPatient();
      $telephone = $patient->getTelephonePatient();

      echo "<tr class=\"bodytab\">
      <td class=\"table-data\">$id</td>
      <td class=\"table-data\">$name</td>
      <td class=\"table-data\">$firstName</td>
      <td class=\"table-data\">$date</td>
      <td class=\"table-data\">$patho</td>
      <td class=\"table-data\">$telephone</td>
      <td class=\"table-data\"><a href=\"index.php?page=8&index=$id\" class=\"btn btn-primary\">Vue de détail</a> </td>
      </tr>";
}
?>

</table>
<style>

.liste{
  font-family:impact;
  font-size:50px;
  text-align:center;
  margin-top: 30px;
}

#table{
  width: 1200px;
  margin-top: 50px;
  margin-left:auto;
  margin-right:auto;
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