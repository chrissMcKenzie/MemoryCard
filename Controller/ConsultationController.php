<?php

include_once('./model/DatabaseModel.php');
include_once('./model/PatientClass.php');

$managerPatient = new ManagePatient();
$patientList = $managerPatient->getPatientFromDB();

include_once('./View/Consultation.php');

?>