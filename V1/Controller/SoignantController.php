<?php require_once './../Model/DatabaseModel.php';
require_once './../Model/SoignantClass.php';
require_once './../Model/PatientClass.php';


extract($_POST); var_dump($_POST);
//$date = $_POST['date'];
//result = addSoignante($date, $consommation, $prix, 0);
//if($result != 0){

//}

//header("location:UserView");

include_once './../View/AdminView.php';