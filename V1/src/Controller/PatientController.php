<?php require_once './../Model/DatabaseModel.php';
require_once './../Model/PatientClass.php';

extract($_POST); var_dump($_POST);
//$date = $_POST['date'];
//result = addPatient($date, $consommation, $prix, 0);
//header("location:UserView");

include_once './../View/UserView.php';
