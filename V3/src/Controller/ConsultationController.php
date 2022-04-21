<?php

include_once('./Model/DatabaseModel.php');
include_once('./Model/PatientClass.php');

$managePatient = new ManagePatient();
$patientList = $managePatient->getPatientFromDB();

include_once('./../View/Consultation.php');

?>