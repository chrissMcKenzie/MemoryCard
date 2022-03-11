<?php
//define("ROOT", dirname(__DIR__)); // require ROOT.'/';
//PAGE PAR DEFAUT
$laPage = './View/acceuil.php';
$titre = "Accueil";

if (isset($_GET['page'])) {		// l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
	//système qui permet de savoir la page à charger
	switch ($page) {
		case 1:
			$laPage = 'controller/LoginSoignantController.php';
			$titre = 'Login';
			// require './View/JeuxView.php';
			break;

		case 2:
			$laPage = 'view/InscriptionSoignant.php';
			$titre = 'Signin';
			break;

		
		case 4:
			$laPage = "view/jeux.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;

		case 5:
			$laPage = "Controller/ProfilSoignant.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break; 

		case 6:
			$laPage = "controller/InscriptionSoignantController.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;
		
		case 7:
			$laPage = "Controller/ConsultationController.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;

		case 8:
			$laPage = "Controller/GraphController.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;
		
		case 9:
			$laPage = "controller/LoginPatientController.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;
			
		case 10:
			$laPage = "view/UserView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;	
			
		case 11:
			$laPage = "controller/InscriptionPatientController.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;
	}
}

//phpinfo();
include($laPage);
