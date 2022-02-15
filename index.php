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
			$laPage = 'view/LoginSoignant.php';
			$titre = 'Login';
			// require './View/JeuxView.php';
			break;

		case 2:
			$laPage = 'view/SigninSoignant.php';
			$titre = 'Signin';
			break;

		case 3:
			$laPage = "view/ForgotPassword.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'Password';
			break;

		case 4:
			$laPage = "view/JeuxView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;

		case 5:
			$laPage = "view/Admin.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;

		case 6:
			$laPage = "model/logout.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;
		
		case 7:
			$laPage = "view/LoginPatient.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			break;
		
	}
}

//phpinfo();
include($laPage);
