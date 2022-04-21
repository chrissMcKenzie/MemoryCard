<?php
//define("ROOT", dirname(__DIR__)); // require ROOT.'/';
//PAGE PAR DEFAUT
$laPage = 'src/View/AcceuilView.php';
$titre = "Accueil";

if (isset($_GET['page'])) {		// l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
	//système qui permet de savoir la page à charger
	switch ($page) {
		case 1:
			$laPage = 'src/Controller/LoginSoignantController.php';
			$titre = 'Login';
			break;

		case 2:
			$laPage = 'src/View/InscriptionSoignant.php';
			$titre = 'Signin';
			break;

		
		case 4:
			$laPage = "src/View/JeuxViex.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;

		case 5:
			$laPage = "src/Controller/ProfilSoignant.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;

		case 6:
			$laPage = "src/controller/InscriptionSoignantController.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;
		
		case 7:
			$laPage = "src/Controller/ConsultationController.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;

		case 8:
			$laPage = "src/Controller/GraphController.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;
		
		case 9:
			$laPage = "src/controller/LoginPatientController.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;
			
		case 10:
			$laPage = "src/View/UserView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'User';
			break;	
			
		case 11:
			$laPage = "src/controller/InscriptionPatientController.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;
	}
}

//phpinfo();
include($laPage);
