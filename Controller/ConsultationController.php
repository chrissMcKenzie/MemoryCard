<?php

include_once('./model/DatabaseModel.php');
include_once('./model/PatientClass.php');
include_once('./model/SoignantClass.php');


if(isset($_GET['index'])) {		// l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
    $SESS = htmlEntities($_GET['index']);
    $managerSoignant = new manageSoignant();
    $soignant= $managerSoignant->getSoignantFromDB();

    $soignantId=$managerSoignant->getSoignantByEmail($SESS);
    $idsoig = $soignantId->getIdSoignant();


    $managerPatient = new ManagePatient();
    $patientList = $managerPatient->getPatientFromDB();
    $matriculeSoignant = $managerPatient->getPatientByIdSoignant($idsoig);

    include_once('./View/Consultation.php');
}



?>