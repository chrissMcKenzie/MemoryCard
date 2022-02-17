<?php
//define("ROOT", dirname(__DIR__)); // require ROOT.'/';
//PAGE PAR DEFAUT
$laPage = 'View/AcceuilView.php';
$titre = "Accueil";

if (isset($_GET['page'])) { // l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
	//système qui permet de savoir la page à charger
	switch ($page) {
		case "Acceuil":
			$laPage = 'View/AcceuilView.php';
			$titre = 'Acceuil';
			break;

		case "SigninSoignant":
			$laPage = 'View/auth/SigninSoignantView.php';
			$titre = 'Signin';
			//require_once './View/auth/SigninSoignantView.php';
			break;

		case "SigninPatient": // or "signinpatient" or "signinPatient" or "SigninPatient":
			$laPage = 'View/auth/SigninPatientView.php';
			$titre = 'Signin';
			//require_once './View/auth/SigninPatientView.php';
			break;

		case "LoginSoignant": // or "loginsoignant" or "loginSoignant" or "LoginSoignant":
			$laPage = 'View/auth/LoginSoignantView.php';
			$titre = 'Login';
			//require_once './View/auth/LoginSoignantView.php';
			break;

		case "LoginPatient":
			$laPage = "View/auth/LoginPatientView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'login';
			//require_once './View/auth/LoginPatientView.php';
			break;

		case "Password":
			$laPage = "View/auth/ForgotPasswordView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'Password';
			//require_once './View/auth/ForgotPasswordView.php';
			break;

		case "Admin":
			$laPage = "View/AdminView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'Admin';
			//require_once './View/AdminView.php';
			break;

		case "User":
			$laPage = "View/UserView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'Admin';
			//require_once './View/UserView.php';
			break;

		case "Jeux":
			$laPage = "View/JeuxView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			//require_once './View/JeuxView.php';
			break;

		case "Logout":
			//$laPage = "Model/logout.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$laPage = 'View/AcceuilView.php';
			$titre = 'Acceuil';
			break;


		default:
			$laPage = 'View/AcceuilView.php';
			$titre = 'Acceuil';
			break;
	}
	// include($laPage);
	// print_r($laPage);
}
// else {
// 	$page = "Home";
// }

//phpinfo();
include($laPage);
