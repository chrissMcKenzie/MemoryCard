<?php
//define("ROOT", dirname(__DIR__)); // require ROOT.'/';
//PAGE PAR DEFAUT
$laPage = 'src/View/AccueilView.php'; //include "./src/View/AccueilView.php";
$titre = "Accueil"; 

if (isset($_GET['page'])) { // l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
	//système qui permet de savoir la page à charger
	$page = strtoupper($page);
	switch ($page) {
		case "Acceuil":
			$laPage = 'src/View/AccueilView.php';
			$titre = 'Accueil';
			break;

		case "SigninSoignant":
			$laPage = 'src/View/auth/SigninSoignantView.php';
			$titre = 'SigninSoignant';
			break;

		case "SigninPatient": // or "signinpatient" or "signinPatient" or "SigninPatient":
			$laPage = 'src/View/auth/SigninPatientView.php';
			$titre = 'SigninPatient';
			break;

		case "LoginSoignant": // or "loginsoignant" or "loginSoignant" or "LoginSoignant":
			$laPage = 'src/View/auth/LoginSoignantView.php';
			$titre = 'Login';
			break;

		case "LoginPatient":
			$laPage = "src/View/auth/LoginPatientView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'login';
			break;

		case "ForgotPassword":
			$laPage = "src/View/auth/ForgotPasswordView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'Password';
			break;

		case "Admin":
			$laPage = "src/View/AdminView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'Admin';
			break;

		case "User":
			$laPage = "src/View/UserView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'User';
			break;

		case "Jeux":
			$laPage = "src/View/JeuxView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'Jeu';
			break;

		case "Logout": // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$laPage = 'src/View/AccueilView.php';
			$titre = 'Accueil';
			break;


		default:
			$laPage = 'src/View/AccueilView.php';
			$titre = 'Accueil';
			break;
	}
	// include($laPage);
	// print_r($laPage);
}
// else {
// 	$page = "Accueil";
// }

//phpinfo();
include($laPage);
