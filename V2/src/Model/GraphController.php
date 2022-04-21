<?php
include_once './../Model/DatabaseModel.php';
include_once './../Model/PatientClass.php';

    if(isset($_GET['index'])) {		// l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
        $index = $_GET['index'];
            include "View/graphPatient.php";  // cette vue dispose de $person et de $filmList
    }
