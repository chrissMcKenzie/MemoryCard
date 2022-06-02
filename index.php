<?php

$laPage = './View/acceuil.php';
$titre = "Accueil";

if (isset($_GET['page'])) {		// l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
	//système qui permet de savoir la page à charger
	switch ($page) {
		case 1:
			$laPage = 'controller/LoginSoignantController.php';
			$titre = 'Login';
			break;

		case 2:
			$laPage = 'view/InscriptionSoignant.php';
			$titre = 'Signin';
			break;

		case 4:
			$laPage = "view/jeux.php"; 
			$titre = 'jeu';
			break;

		case 5:
			$laPage = "Controller/ProfilSoignant.php"; 
			$titre = 'jeu';
			break; 

		case 6:
			$laPage = "controller/InscriptionSoignantController.php"; 
			$titre = 'jeu';
			break;
		
		case 7:
			$laPage = "Controller/ConsultationController.php"; 
			$titre = 'jeu';
			break;

		case 8:
			$laPage = "Controller/GraphController.php"; 
			$titre = 'jeu';
			break;
		
		case 9:
			$laPage = "controller/LoginPatientController.php";
			$titre = 'jeu';
			break;
			
		case 10:
			$laPage = "view/UserView.php";
			$titre = 'jeu';
			break;	
			
		case 11:
			$laPage = "controller/InscriptionPatientController.php"; 
			$titre = 'jeu';
			break;

		case 12:
			$laPage = "controller/jeuxController.php"; 
			$titre = 'jeu';
			break;

		case 13:
			$laPage = "controller/jeux2Controller.php"; 
			$titre = 'jeu';
			break;

		case 14:
			$laPage = "controller/jeux3Controller.php"; 
			$titre = 'jeu';
			break;
	}
}
include($laPage);
